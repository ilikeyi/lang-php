<?php
/* @author   Yi Feng
 * @version  v6.5
 * @homepage https://lang-php.com
 */

namespace lp;

class go
{
	public $masterCatalogue      = 'languages/homepage'; /* Master directory */
	public $themeMasterCatalogue = 'themes';             /* Default themes Master Directory */
	public $userThemes           = 'homepage';           /* User Themes file */
	public $getLanguage          = 'default';            /* Get the current language used */
	public $saveDays             = 30;                   /* Cookie save session */
	public $isDynamic            = false;                /* Use dynamic URL */
	public $def_lang_file        = 'en-us';              /* Default language file */

	public function run() {
		if($this->isDynamic) {
			$request = $_SERVER['REQUEST_URI'];

			if(strstr($request,'/?') || trim($request) == '/') {
				$this->start();
			} else {
				if (strstr($request, "?")) {
					$request = strstr($request, "?", true);
				}
				$this->masterCatalogue = $this->themeMasterCatalogue."/".$request;

				if(is_dir($this->masterCatalogue)) {
					$this->start();
				} else {
					$this->error('404');
				}
			}
		} else {
			$this->start();
		}
	}

	function start() {
		if(isSet($_GET['lang'])) {
			$lang = strtolower($_GET['lang']);
			$_SESSION['lang'] = $lang;
			$_COOKIE["lang"] = $lang;
			setcookie("lang", $lang, time() + (3600 * 24 * $this->saveDays), '/', $this->getDomain());
			setcookie("lang", $lang, time() + (3600 * 24 * $this->saveDays), '/');

			$this->loading($lang);
		} else if(isSet($_COOKIE['lang'])) {
			$this->loading(strtolower($_COOKIE['lang']));
		} else {
			preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches);
			$lang = strtolower($matches[1]);
			setcookie("lang", $lang, time() + (3600 * 24 * $this->saveDays), '/', $this->getDomain());
			setcookie("lang", $lang, time() + (3600 * 24 * $this->saveDays), '/');
			$_COOKIE["lang"] = $lang;
			$this->loading($lang);
		}

	}

	function loading($lang) {
		if(is_dir($this->masterCatalogue)) {
			if(is_file($this->masterCatalogue."/".$lang.".php")) {
				include $this->masterCatalogue."/".$lang.".php";
				$this->getLanguage = $lang;
			} else {
				if(is_file($this->masterCatalogue."/".$this->def_lang_file.".php")){
					include $this->masterCatalogue."/".$this->def_lang_file.".php";
					$this->getLanguage = $this->def_lang_file;
				} else {
					echo "current directory (".$this->masterCatalogue.") there is no such file (".$lang.".php), Please add the corresponding file and then try.";
					exit();
				}
			}
		} else {
			echo $this->masterCatalogue." directory does not exist!";
			exit();
		}

		if(is_dir($this->themeMasterCatalogue))
		{
			if(is_file($this->themeMasterCatalogue."/".$this->userThemes.".php")) {
				include $this->themeMasterCatalogue."/".$this->userThemes.".php";
				$this->getLanguage = $lang;
			} else {
				echo "current directory (".$this->themeMasterCatalogue.") there is no such file (".$this->userThemes.".php), Please add the corresponding file and then try.";
				exit();
			}
		} else {
			echo $this->userThemes." directory does not exist!";
			exit();
		}
	}

	public function getDomain() {
		$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  $_SERVER['REQUEST_URI'];

		$pieces = parse_url($link);
		$domain = isset($pieces['host']) ? $pieces['host'] : '';
		if(preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)){
			return '.'.$regs['domain'];
		}
		return FALSE;
	}

	function error($code) {
		http_response_code($code);
		include_once lpDIR.'/libraries/'.$code.'.php';
		exit;
	}
}
?>