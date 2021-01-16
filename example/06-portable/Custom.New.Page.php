<?php
/* @author   Yi Feng
 * @version  v6.5
 * @homepage https://lang-php.com
 */

/* Basic Configuration */
/* Available language */
$global_lp_all = array('en-us', 'zh-cn', 'zh-tw', 'ja-jp', 'ko-kr', 'ru-ru');

if(isSet($_GET['lang'])) {
	$lang = strtolower($_GET['lang']);
	$_SESSION['lang'] = $lang;
	$_COOKIE["lang"] = $lang;
	setcookie("lang", $lang, time() + (3600 * 24 * 30), '/');

	if (in_array($lang, $global_lp_all)) {
		$_COOKIE["lang"] = $lang;
		$_SESSION['lang'] = $lang;
		$lng = $lang;
	} else {
		$lng = 'en-us';
	}
} else if(isSet($_COOKIE['lang'])) {
	if (in_array($_COOKIE['lang'], $global_lp_all)) {
		$lng = $_COOKIE['lang'];
	} else {
		$lng = 'en-us';
	}
} else {
	preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches);
	$lang = strtolower($matches[1]);
	setcookie("lang", $lang, time() + (3600 * 24 * 30), '/');
	$_COOKIE["lang"] = $lang;
	
	if (in_array($lang, $global_lp_all)) {
		$_COOKIE["lang"] = $lang;
		$_SESSION['lang'] = $lang;
		$lng = $lang;
	} else {
		$lng = 'en-us';
	}
}

$lpna = array (
	'template' => array (
		'en-us' => 'template',
		'zh-cn' => '模板',
		'zh-tw' => '模板',
		'ja-jp' => '模板',
		'ko-kr' => '模板',
		'ru-ru' => '模板'),
	'end' => array (
		'en-us' => 'end',
		'zh-cn' => 'end',
		'zh-tw' => 'end',
		'ja-jp' => 'end',
		'ko-kr' => 'end',
		'ru-ru' => 'end')  /* , */
	/* After the end of the array can not have ',' Please pay attention to the end */
);

print_r($lpna);
?>

<?php echo $lpna['template'][$lng]; ?>