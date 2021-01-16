<?php
/* @author   Yi Feng
 * @version  v6.5
 * @homepage https://lang-php.com
 */

namespace lp;

class go
{
	public $mainRoute         = 'themes';          /* Main routing directory */
	public $masterCatalogue   = 'themes/homepage'; /* Master directory */
	public $masterLanguage    = '';                /* Main language */
	public $setFileType       = 'xml';             /* Acceptable parameters 'xml' or 'cfg' */
	public $def_cfg_lang_file = '';                /* Default lang cfg */
	public $def_xml_lang_file = '';                /* Default lang xml */
	public $def_lang_file     = 'en-us';           /* Default language file */
	public $isDynamic         = false;             /* Use dynamic URL */
	public $mainIndex         = array('index.php', 'index.htm', 'index.html'); /* Index */

	public function run() {
		$this->RefreshMerge();
		if($this->isDynamic) {
			$request = $_SERVER['REQUEST_URI'];
			if(strstr($request,'/?') || trim($request) == '/') {
				$this->start();
			} else {
				if(strstr($request, "?")) {
					$request = strstr($request, "?", true);
				}
				$this->masterCatalogue = "themes".$request;

				$global_path_temp = lpDIR.$this->masterCatalogue.'.php';
				if(file_exists($global_path_temp)) {
					include_once $global_path_temp;
				} else if(is_dir($this->masterCatalogue)) {
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
		if(isSet($_GET['lang']))
		{
			$this->replace(strtolower($_GET['lang']));
			$this->read();
		} else {
			$this->read();
		}
	}

	function read() {
		switch ($this->setFileType) {
			case 'xml':
					if(is_file($this->def_xml_lang_file)) {
						if(is_file($this->masterCatalogue."/".$this->_get_xml().".php")) {
							$this->masterLanguage = strtolower($this->_get_xml());
							include $this->masterCatalogue."/".$this->_get_xml().".php";
						} else {
							if(is_file($this->masterCatalogue."/".$this->def_lang_file.".php")){
								$this->masterLanguage = $this->def_lang_file;
								include_once $this->masterCatalogue."/".$this->def_lang_file.".php";
							} else {
								echo "current directory (".$this->masterCatalogue.") there is no such file (".$this->def_lang_file.".php), Please add the corresponding file and then try.";
								exit();
							}
						}
					} else {
						header("Location: error.php?code=3xx");
						exit();
					}
				break;

			case 'cfg':
					if(is_file($this->def_cfg_lang_file)) {
						if(!empty($this->_get_cfg())) {
							if(is_file($this->masterCatalogue."/".$this->_get_cfg().".php")) {
								$this->masterLanguage = strtolower($this->_get_cfg());
								include $this->masterCatalogue."/".$this->_get_cfg().".php";
							} else {
								if(is_file($this->masterCatalogue."/".$this->def_lang_file.".php")){
									$this->masterLanguage = $this->def_lang_file;
									include_once $this->masterCatalogue."/".$this->def_lang_file.".php";
								} else {
									echo "current directory (".$this->masterCatalogue.") there is no such file (".$this->def_lang_file.".php), Please add the corresponding file and then try.";
									exit();
								}
							}
						 } else {
							 header("Location: error.php?code=2xx");
							 exit();
						 }
					} else {
						header("Location: error.php?code=3xx");
						exit();
					}
				break;
		}
	}

	function replace($lang) {
		switch ($this->setFileType) {
			case 'xml':
					if(is_file($this->def_xml_lang_file)) {
						if(is_writable($this->def_xml_lang_file)) {
							$data = '<?xml version="1.0" encoding="UTF-8" ?>';
							$data .= '<setting>';
							$data .= '<languages>'.$lang.'</languages>';
							$data .= '</setting>';
							$fh = fopen($this->def_xml_lang_file, "w");
							fwrite($fh, $data);

//							flock($this->def_xml_lang_file, LOCK_UN);
//							fclose($this->def_xml_lang_file);
						} else {
							header("Location: error.php?code=1xx");
							exit();
						}
					} else {
						header("Location: error.php?code=3xx");
						exit();
					}
				break;
			case 'cfg':
					if(is_file($this->def_cfg_lang_file)) {
						if(is_writable($this->def_cfg_lang_file)) {
							$this->_set_cfg("Global_DFLT_Lang", $lang);
						} else {
							header("Location: error.php?code=1xx");
							exit();
						}
					} else {
						header("Location: error.php?code=3xx");
						exit();
					}
				break;
		}
	}

	function _get_xml() {
		$languages = simplexml_load_file($this->def_xml_lang_file);
		return $languages->languages[0];
	}

	function _get_cfg() {
		$languages = parse_ini_file($this->def_cfg_lang_file, true);
		return $languages['Global_DFLT_Lang'];
	}

	public function _set_cfg($property,$equals) {
		$content = file_get_contents($this->def_cfg_lang_file);
		$lines = explode("\n",$content);
		$newLines = array();
		$count = 0;
		foreach($lines as $value) {
			$propLength = strlen($property);
			if(substr($value,0,$propLength) == $property){
				$newLines[$count] = "$property=$equals";
			}else {
				$newLines[$count] = $value;
			}
			$count= $count+1;
		}
		$final;
		foreach($newLines as $i) {
			if(!isset($final)) {
				$final = $i;
			} else {
				$final .= "\n".$i;
			}
		}
		$write = fopen($this->def_cfg_lang_file,"w");
		fwrite($write,$final);
		fclose($write);
	}

	function RefreshMerge() {
		$this->def_cfg_lang_file = lpDIR.'/libraries/lp.cfg';
		$this->def_xml_lang_file = lpDIR.'/libraries/lp.xml';
	}

	public function _getxmlLang() {
		switch ($this->setFileType) {
			case 'xml':
				return $this->_get_xml();
			break;
			case 'cfg':
				return $this->_get_cfg();
			break;
		}
	}

	public function _getCurrentlp() {
		return $this->masterLanguage;
	}

	public function _getCurrentsetFileType() {
		return $this->setFileType;
	}

	public function _getCurrentFileType() {
		switch ($this->setFileType) {
			case 'xml':
				return $this->def_xml_lang_file;
			break;
			case 'cfg':
				return $this->def_cfg_lang_file;
			break;
		}
	}

	function error($code) {
		http_response_code($code);
		include_once lpDIR.'/libraries/'.$code.'.php';
		exit;
	}
}
?>