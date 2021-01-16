<?php
/* @author   Yi Feng
 * @version  v6.5
 * @homepage https://lang-php.com
 */

namespace lp;

class go
{
	public $mainThemes      = 'themes';   /* Main routing directory */
	public $masterCatalogue = 'homepage'; /* Paging home directory */
	public $masterLanguage  = '';         /* Main language */
	public $global_folder   = '';         /* Global catalog */
	public $global_path     = '';         /* Global path */
	public $isDynamic       = false;      /* Use dynamic URL */
	public $mainIndex       = array('index.php', 'index.htm', 'index.html', 'en-us.php'); /* Index */

	public function run() {
		if($this->isDynamic) {
			$request = $_SERVER['REQUEST_URI'];
			if(strstr($request,'/?') || trim($request) == '/') {
				$this->start();
			} else {
				if(strstr($request, "?")) {
					$request=strstr($request, "?", true);
				}
				$this->masterCatalogue=$request;
				$this->RefreshMerge();
				$global_path_temp=lpDIR.$this->masterCatalogue.'.php';
				if(file_exists($global_path_temp)) {
					include_once $global_path_temp;
				} else if(is_dir($this->global_folder)) {
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
		$this->RefreshMerge();
		if(isSet($_GET['lang'])) {
			$lang = strtolower($_GET['lang']);
			$this->active($lang);
		} else if(isSet($_COOKIE['lang'])) {
			$this->active(strtolower($_COOKIE['lang']));
		} else {
			preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches);
			$lang=strtolower($matches[1]);
			$this->active($lang);
		}
	}

	function active($newlang) {
		$browser = new browser();
		$browser->setLang("lang",$newlang);
		$this->masterLanguage = $newlang.'.php';
		$this->RefreshMerge();
		$this->loading();
	}

	function loading() {
		if($this->chkfolder()) {
			if(file_exists($this->global_path)) {
				include_once $this->global_path;
			} else {
				$this->SearchIndex();
			}
		} else {
			$this->error('404');
		}
	}

	function chkfolder() {
		if(is_dir($this->global_folder)) {
			return true;
		} else {
			return false;
		}
	}

	function SearchIndex() {
		$this->chkindex();
		if(!empty($this->masterLanguage)) {
			include_once $this->global_path;
		} else {
			$this->error('404');
		}
	}

	function chkindex() {
		foreach ($this->mainIndex as $value) {
			if(file_exists($this->global_folder.'/'.$value)) {
				$this->masterLanguage = $value;
				$this->RefreshMerge();
				return true;
				break;
			}
		}
		$this->masterLanguage = '';
		return false;
	}

	function RefreshMerge() {
		$this->global_folder=lpDIR.'/'.$this->mainThemes.'/'.$this->masterCatalogue;
		$this->global_path=lpDIR.'/'.$this->mainThemes.'/'.$this->masterCatalogue.'/'.$this->masterLanguage;
		$this->global_folder=str_replace("//","/",$this->global_folder);
		$this->global_folder=str_replace('\\', '/',$this->global_folder);
		$this->global_path=str_replace("//","/",$this->global_path);
		$this->global_path=str_replace('\\', '/',$this->global_path);
	}

	function error($code) {
		http_response_code($code);
		include_once lpDIR.'/libraries/'.$code.'.php';
		exit;
	}
}
?>