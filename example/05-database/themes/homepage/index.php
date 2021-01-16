<?php
/* @author   Yi Feng
 * @version  v6.5
 * @homepage https://lang-php.com
 */

include_once lpDIR.'/libraries/classes/database.php';

/* Init database
 *
 * Set current page here, Default 'homepage' page;
 *
 */
$db = new db('homepage');

/* Get all language names of the current page */
$lpna = $db->lpgroup;

# var_dump($lpna);
# print_r($lpna);
?>
<!DOCTYPE html>
<html>
<head>
	<title>05-database</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="supported-color-schemes" content="dark light">
	<meta name="color-scheme" content="dark light">
	<meta name="theme-color" content="">
	<link rel="shortcut icon" href="assets/logo/logo.ico" type="image/x-icon">
	<script>
		if (window.matchMedia('(prefers-color-scheme: dark)').media === 'not all') {
				document.documentElement.style.display = 'none';
				document.head.insertAdjacentHTML(
				'beforeend',
				'<link rel="stylesheet" href="assets/css/lp-light.css" onload="document.documentElement.style.display = \'\'">'
			);
		}
	</script>
	<link rel="stylesheet" href="assets/css/lp.css">
	<link rel="stylesheet" href="assets/css/lp-dark.css" media="(prefers-color-scheme: dark)">
	<link rel="stylesheet" href="assets/css/lp-light.css" media="(prefers-color-scheme: no-preference), (prefers-color-scheme: light)">
	<link rel="stylesheet" href="assets/css/lp-icon.css" type="text/css" />
	<script src="assets/js/lp.js"></script>
	<script type="module" src="assets/js/lp-dark-mode.js"></script>
</head>
<body>
	<h1 id="logo">
		<a href="https://lang-php.com"></a>
		<br /><aside><dark-mode-toggle id="dark-mode-toggle-1" appearance="switch" dark="<?php echo $lpna['lang_dark']; ?>" light="<?php echo $lpna['lang_dark_light']; ?>" remember="<?php echo $lpna['lang_dark_save']; ?>"></dark-mode-toggle></aside>
	</h1>
	<h2>05-database</h2>
	<h3><?php echo $lpna['lang_page_title']; ?></h3>
	<p><?php echo $lpna['feature-readme']; ?></p>

	<h2><?php echo $lpna['lang_cfg_title']; ?></h2>
	<ol>
		<li><?php echo $lpna['lang_cfg_title1']; ?><?php echo Database_Mode; ?></li>
		<li><?php echo $lpna['lang_cfg_title2']; ?><?php echo DB_PREFIX . "translate"; ?></li>
		<li><?php echo $lpna['lang_cfg_title3']; ?><?php echo $db->page; ?></li>
		<li><?php echo $lpna['lang_cfg_title4']; ?><?php echo $db->dblang; ?></li>
		<li><?php echo $lpna['lang_cfg_title5']; ?><?php if(isset($_COOKIE["lang"])) echo $_COOKIE['lang']; else echo $lpna['lang_cfg_title_msg']; ?></li>
		<li><?php echo $lpna['lang_cfg_title6']; ?><?php preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches); echo $matches[1]; ?></li>
		<li><?php echo $lpna['lang_cfg_title7']; ?> 05-database/index.php</li>
	</ol>

	<h2><?php echo $lpna['lang_available']; ?></h2>
	<dl>
		<dt><span class="flag-icon flag-icon-us"></span>&nbsp;&nbsp;United States - English ( <a href="?lang=en-US">Mode 1</a> &amp; <a href="javascript:lang('en-US')">Mode 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;&nbsp;Россия - Русский ( <a href="?lang=ru-RU">режим 1</a> &amp; <a href="javascript:lang('ru-RU')">режим 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;&nbsp;简体中文 - 中国 ( <a href="?lang=zh-CN">模式 1</a> &amp; <a href="javascript:lang('zh-CN')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;&nbsp;繁體中文 - 中國 ( <a href="?lang=zh-TW">模式 1</a> &amp; <a href="javascript:lang('zh-TW')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;&nbsp;日本 - 日本語 ( <a href="?lang=ja-JP">モード 1</a> &amp; <a href="javascript:lang('ja-JP')">モード 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;&nbsp;대한민국 - 한국어 ( <a href="?lang=ko-KR">모드 1</a> &amp; <a href="javascript:lang('ko-KR')">모드 2</a> )</dt>
	</dl>

	<h2><?php echo $lpna['lang_use_title0']; ?></h2>
	<ol>
		<li><?php echo $lpna['lang_use_title1']; ?> -> <a href="https://lang-php.com/go/lp-docs-fives">https://lang-php.com/go/lp-docs-fives</a></li>
		<li><?php echo $lpna['lang_use_title2']; ?></li>
		<li><?php echo $lpna['lang_use_title3']; ?></li>
		<li><?php echo $lpna['lang_use_title4']; ?></li>
		<dl>
			<dt><a href="">MySQL</a></dt>
			<dd><?php echo $lpna['lang_use_title4_mysql1']; ?></dd>
			<dd><?php echo $lpna['lang_use_title4_mysql2']; ?></dd>
			<dt><a href="">SQLite</a></dt>
			<dd><?php echo $lpna['lang_use_title4_sqlite']; ?></dd>
		</dl>
		<li><?php echo $lpna['lang_use_title5']; ?></li>
	</ol>
<?php include "themes/analytics.php"; ?>
</body>
</html>