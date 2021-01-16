<?php
/* @author   Yi Feng
 * @version  v6.5
 * @homepage https://lang-php.com
 */

namespace lp;

class go
{
	public $masterCatalogue = '';    /* Paging home directory */
	public $masterLanguage  = '';    /* Main language */
	public $global_folder   = '';    /* Global catalog */
	public $global_path     = '';    /* Global path */
	public $isDynamic       = false; /* Use dynamic URL */
	public $mainIndex       = array('index.php', 'index.htm', 'index.html'); /* Index */

	public function run() {
		if($this->isDynamic) {
			$request = $_SERVER['REQUEST_URI'];
			if(strstr($request,'/?') || trim($request) == '/') {
				$this->start();
			} else {
				if(strstr($request, "?")) {
					$request = strstr($request, "?", true);
				}
				$this->masterCatalogue = $request;
				$this->RefreshMerge();
				$global_path_temp = lpDIR.$this->masterCatalogue.'.php';
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
		$browser = new browser();
		if(isSet($_GET['lang'])) {
			$lang = strtolower($_GET['lang']);
			$browser->setLang("lang",$lang);
			$this->active($lang);
		} else if(isSet($_COOKIE['remember_lang'])) {
			$browser->setLang("remember_lang",strtolower($_COOKIE['lang']));
			$this->active(strtolower($_COOKIE['remember_lang']));
		} else {
			$this->active("choose-country-region");
		}
	}

	function active($newlang) {
		$this->masterCatalogue=$newlang;
		$this->RefreshMerge();
		$this->loading();
	}

	function loading() {
		if($this->chkfolder()) {
			$this->SearchIndex();
		} else {
			$this->active("choose-country-region");
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
		if($this->chkindex()) {
			header("Location: ".$this->masterCatalogue);
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
		$this->masterCatalogue = '';
		return false;
	}

	function RefreshMerge() {
		$this->masterCatalogue = $this->masterCatalogue;
		$this->global_folder=lpDIR.'/'.$this->masterCatalogue;
		$this->global_path=lpDIR.'/'.$this->masterCatalogue.'/'.$this->masterLanguage;
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