<!DOCTYPE html>
<html>
<head>
	<title>04-settings</title>
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
		<br /><aside><dark-mode-toggle id="dark-mode-toggle-1" appearance="switch" dark="Dark" light="Light" remember="Remember this"></dark-mode-toggle></aside>
	</h1>
	<h2>04-settings</h2>
	<h3>TO SAVE THE SETTINGS &AMP; PROFILE</h3>
	<p>This example is different from dynamic read and write Cookies; saving the configuration to XML/cfg, by reading the selected preferred language pack is available, does not accept the browser's default language preference.</p>

	<h2>CONFIGURATION</h2>
	<ol>
		<li>Current global language value: <?php echo lp\go::_getCurrentlp(); ?></li>
		<li>File operation: <?php echo lp\go::_getCurrentsetFileType(); ?></li>
		<li>Save the configuration file path: <?php echo lp\go::_getCurrentFileType(); ?></li>
		<li>The currently loaded file is: themes/homepage/en-us.php</li>
	</ol>

	<h2>AVAILABLE LANGUAGES</h2>
	<dl>
		<dt><span class="flag-icon flag-icon-us"></span>&nbsp;&nbsp;United States - English ( <a href="?lang=en-US">Mode 1</a> &amp; <a href="javascript:refreshlang('en-US')">Mode 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;&nbsp;Россия - Русский ( <a href="?lang=ru-RU">режим 1</a> &amp; <a href="javascript:refreshlang('ru-RU')">режим 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;&nbsp;简体中文 - 中国 ( <a href="?lang=zh-CN">模式 1</a> &amp; <a href="javascript:refreshlang('zh-CN')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;&nbsp;繁體中文 - 中國 ( <a href="?lang=zh-TW">模式 1</a> &amp; <a href="javascript:refreshlang('zh-TW')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;&nbsp;日本 - 日本語 ( <a href="?lang=ja-JP">モード 1</a> &amp; <a href="javascript:refreshlang('ja-JP')">モード 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;&nbsp;대한민국 - 한국어 ( <a href="?lang=ko-KR">모드 1</a> &amp; <a href="javascript:refreshlang('ko-KR')">모드 2</a> )</dt>
	</dl>

	<h2>HOW TO USE IT</h2>
	<ol>
		<li>Read the quick guide -> <a href="https://lang-php.com/go/lp-docs-four">https://lang-php.com/go/lp-docs-four</a></li>
		<li>Upload all files in the 'example/04-settings' directory to your website directory;</li>
		<li>Change <?php echo lp\go::_getCurrentFileType(); ?> File permissions for 777；</li>
		<dt>chmod 777 &lt; folder &gt; /<?php echo lp\go::_getCurrentFileType(); ?></dt>
		<li>Optional XML/cfg type (the default XML), edit the libraries/classes/go.php file and modify the $setFileType variable;</li>
		<li>Browser access: http://&lt; domain name or IP &gt;;</li>
	</ol>
<?php include "themes/analytics.php"; ?>
</body>
</html>