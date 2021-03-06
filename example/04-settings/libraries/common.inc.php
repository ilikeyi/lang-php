<?php
/* @author   Yi Feng
 * @version  v6.5
 * @homepage https://lang-php.com
 */
 
/* block attempts to directly run this script */
if (getcwd() == dirname(__FILE__)) {
	die('Attack stopped');
}

/* Minimum PHP version; can't call Core::fatalError() which uses a
 * PHP 5 function, so cannot easily localize this message. */
if (version_compare(PHP_VERSION, '5.5.0', 'lt')) {
	die(
		'PHP 5.5+ is required. <br /> Currently installed version is: v6.5'
	);
}

define('lpDIR', getcwd());

include_once lpDIR.'/libraries/classes/go.php';