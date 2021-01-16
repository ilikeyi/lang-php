<?php
/* @author   Yi Feng
 * @version  v6.5
 * @homepage https://lang-php.com
 */

namespace lp;

class browser
{
	private $expire        = 30;
	private $path          = '/';
	private static $domain = '';

	public static function getDomain() {
		$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$pieces = parse_url($link);
		$domain = isset($pieces['host']) ? $pieces['host'] : '';
		if(preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)){
			self::$domain=$regs['domain'];
		}
		return false;
	}

	public function setLang($name,$value) {
		$this->getDomain();
		setcookie($name, $value,time()+(3600*24*$this->expire),$this->path,self::$domain);
		setcookie($name, $value,time()+(3600*24*$this->expire),$this->path);
	}
}