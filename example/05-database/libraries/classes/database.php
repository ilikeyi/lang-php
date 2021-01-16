<?php
/* @author   Yi Feng
 * @version  v6.5
 * @homepage https://lang-php.com
 */

class db extends PDO {
	private $sql;
	private $bind;
	public $dblang;
	public $page;
	public $lpna;
	public $lpgroup;

	public function __construct($currentpage) {
		$this->page = $currentpage;

		$options = array(
			PDO::ATTR_PERSISTENT => true, 
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);

		if ( is_file( dirname( dirname(__FILE__)).'/lp-config.php' ) ) {
			include_once(dirname(dirname(__FILE__)).'/lp-config.php');
		} else {
			header("Location: error.php?code=3xx");
			exit();
		}

		try {
			switch (Database_Mode) {
				case "mysql":
					parent::__construct("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PWD, $options);
					break
				;
				case "sqlite":
					parent::__construct("sqlite:database/sqlite.db");
					break
				;
				default:
					header("Location: error.php?code=1xx");
					exit();
					break
				;
			}
			PDO::exec("SET NAMES ".DB_CHARSET);
			$this->lang();
			$this->selectpage();
		} catch (PDOException $e) {
			setcookie("error_code_2xx", $e->getMessage(), time() + (3600 * 24 * 1), '/');
			header("Location: error.php?code=2xx");
			exit();
		}
	}

	public function lang() {
		if(isSet($_GET['lang'])) {
			$lang = strtolower($_GET['lang']);
			$_SESSION['lang'] = $lang;
			$_COOKIE["lang"] = $lang;
			$current_lng = $this->select(DB_PREFIX."language", "code = '$lang'");
			if ($current_lng) {
				$_COOKIE["lang"] = $lang;
				$this->dblang = $lang;
			} else {
				$this->dblang = "en-us";
			}
		} else if(isSet($_COOKIE['lang'])) {
			$lang = $_COOKIE["lang"];
			$current_lng = $this->select(DB_PREFIX."language", "code = '$lang'");
			if ($current_lng) {
				$_COOKIE["lang"] = $lang;
				$this->dblang = $_COOKIE['lang'];
			} else {
				$this->dblang = "en-us";
			}
		}
		 else {
			preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches);
			$lang = strtolower($matches[1]);
			$_COOKIE["lang"] = $lang;
			setcookie("lang", $lang, time() + (3600 * 24 * 30), '/', $this->getDomain());
			setcookie("lang", $lang, time() + (3600 * 24 * 30), '/');
		
			$current_lng = $this->select(DB_PREFIX."language", "code = '$lang'");
			if ($current_lng) {
				$_COOKIE["lang"] = $lang;
				$this->dblang = $lang;
			} else {
				$this->dblang = "en-us";
			}
		}
	}

	public function delete($table, $where, $bind="") {
		$sql = "DELETE FROM " . $table . " WHERE " . $where . ";";
		$this->run($sql, $bind);
	}

	private function filter($table, $info) {
		$driver = $this->getAttribute(PDO::ATTR_DRIVER_NAME);
		if($driver == 'sqlite') {
			$sql = "PRAGMA table_info('" . $table . "');";
			$key = "name";
		}
		elseif($driver == 'mysql') {
			$sql = "DESCRIBE " . $table . ";";
			$key = "Field";
		}
		else {
			$sql = "SELECT column_name FROM information_schema.columns WHERE table_name = '" . $table . "';";
			$key = "column_name";
		}	

		if(false !== ($list = $this->run($sql))) {
			$fields = array();
			foreach($list as $record)
				$fields[] = $record[$key];
			return array_values(array_intersect($fields, array_keys($info)));
		}
		return array();
	}

	private function cleanup($bind) {
		if(!is_array($bind)) {
			if(!empty($bind))
				$bind = array($bind);
			else
				$bind = array();
		}
		return $bind;
	}

	public function insert($table, $info) {
		$fields = $this->filter($table, $info);
		$sql = "INSERT INTO " . $table . " (" . implode($fields, ", ") . ") VALUES (:" . implode($fields, ", :") . ");";
		$bind = array();
		foreach($fields as $field)
			$bind[":$field"] = $info[$field];
		return $this->run($sql, $bind);
	}

	public function run($sql, $bind="") {
		$this->sql = trim($sql);
		$this->bind = $this->cleanup($bind);

		try {
			$pdostmt = $this->prepare($this->sql);
			if($pdostmt->execute($this->bind) !== false) {
				if(preg_match("/^(" . implode("|", array("select", "describe", "pragma")) . ") /i", $this->sql))
					return $pdostmt->fetchAll(PDO::FETCH_ASSOC);
				elseif(preg_match("/^(" . implode("|", array("delete", "insert", "update")) . ") /i", $this->sql))
					return $pdostmt->rowCount();
			}
		} catch (PDOException $e) {
			setcookie("error_code_2xx", $e->getMessage(), time() + (3600 * 24 * 1), '/');
			header("Location: error.php?code=2xx");
			exit();
			return false;
		}
	}

	public function selectpage() {
		$sql = $this->select(DB_PREFIX."translate", "section = '$this->page'");
		$lpna = $this->arraymodify($sql);

		$this->lpgroup = $lpna;
	}

	public function select($table, $where="", $bind="", $fields="*") {
		$sql = "SELECT " . $fields . " FROM " . $table;
		if(!empty($where))
			$sql .= " WHERE " . $where;
		$sql .= ";";
		return $this->run($sql, $bind);
	}

	public function update($table, $info, $where, $bind="") {
		$fields = $this->filter($table, $info);
		$fieldSize = sizeof($fields);

		$sql = "UPDATE " . $table . " SET ";
		for($f = 0; $f < $fieldSize; ++$f) {
			if($f > 0)
				$sql .= ", ";
			$sql .= $fields[$f] . " = :update_" . $fields[$f]; 
		}
		$sql .= " WHERE " . $where . ";";

		$bind = $this->cleanup($bind);
		foreach($fields as $field)
			$bind[":update_$field"] = $info[$field];

		return $this->run($sql, $bind);
	}

	public function arraymodify($valumem) {
		$lpna = array();
		foreach ( $valumem as $v ) {
			if ( !isset($lpna[$v['id']])) {
				$lpna[$v['lp_keyword']] = $v[strtolower($this->dblang)];
			}
		}
		return $lpna;
	}

	public static function getDomain() {
		$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$pieces = parse_url($link);
		$domain = isset($pieces['host']) ? $pieces['host'] : '';
		if(preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)){
			return $regs['domain'];
		}
		return false;
	}
}
?>