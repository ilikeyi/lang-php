<!DOCTYPE html>
<html>
<head>
	<title>01-directory</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="supported-color-schemes" content="dark light">
	<meta name="color-scheme" content="dark light">
	<meta name="theme-color" content="">
	<link rel="shortcut icon" href="../assets/logo/logo.ico" type="image/x-icon">
	<script>
		if (window.matchMedia('(prefers-color-scheme: dark)').media === 'not all') {
				document.documentElement.style.display = 'none';
				document.head.insertAdjacentHTML(
				'beforeend',
				'<link rel="stylesheet" href="../assets/css/lp-light.css" onload="document.documentElement.style.display = \'\'">'
			);
		}
	</script>
	<link rel="stylesheet" href="../assets/css/lp.css">
	<link rel="stylesheet" href="../assets/css/lp-dark.css" media="(prefers-color-scheme: dark)">
	<link rel="stylesheet" href="../assets/css/lp-light.css" media="(prefers-color-scheme: no-preference), (prefers-color-scheme: light)">
	<link rel="stylesheet" href="../assets/css/lp-icon.css" type="text/css" />
	<script src="../assets/js/lp.js"></script>
	<script type="module" src="../assets/js/lp-dark-mode.js"></script>
</head>
<body>
	<h1 id="logo">
		<a href="https://lang-php.com"></a>
		<br /><aside><dark-mode-toggle id="dark-mode-toggle-1" appearance="switch" dark="Dark" light="Light" remember="Remember this"></dark-mode-toggle></aside>
	</h1>
	<h2>01-directory</h2>
	<h3>USER-DEFINED SELECTION &amp; DIRECTORY</h3>
	<p>After running for the first time turned to the 'choose-country-region' directory, select shift after matching language directory, with memory function.</p>

	<h2>CONFIGURATION</h2>
	<ol>
		<li>Currently Cookies the global 'remember_lang' variable value: <?php if(isset($_COOKIE["lang"])) echo $_COOKIE['remember_lang']; else echo "Is not set"; ?></li>
		<li>The currently loaded file is: 01-directory/en-us/index.php</li>
	</ol>

	<h2>AVAILABLE LANGUAGES</h2>
	<dl>
		<dt><span class="flag-icon flag-icon-us"></span>&nbsp;&nbsp;United States - English ( <a href="../?lang=en-US">Mode 1</a> &amp; <a href="javascript:qlang('en-US')">Mode 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;&nbsp;Россия - Русский ( <a href="../?lang=ru-RU">режим 1</a> &amp; <a href="javascript:qlang('ru-RU')">режим 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;&nbsp;简体中文 - 中国 ( <a href="../?lang=zh-CN">模式 1</a> &amp; <a href="javascript:qlang('zh-CN')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;&nbsp;繁體中文 - 中國 ( <a href="../?lang=zh-TW">模式 1</a> &amp; <a href="javascript:qlang('zh-TW')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;&nbsp;日本 - 日本語 ( <a href="../?lang=ja-JP">モード 1</a> &amp; <a href="javascript:qlang('ja-JP')">モード 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;&nbsp;대한민국 - 한국어 ( <a href="../?lang=ko-KR">모드 1</a> &amp; <a href="javascript:qlang('ko-KR')">모드 2</a> )</dt>
	</dl>

	<h2>HOW TO USE IT</h2>
	<ol>
		<li>Read the official quick guide -> <a href="https://lang-php.com/go/lp-docs-one">https://lang-php.com/go/lp-docs-one</a></li>
		<li>Upload all files in the 'example/01-directory' directory to your website directory;</li>
		<li>Browser access: http://&lt; Domain name or IP &gt;；</li>
	</ol>
<?php include "../libraries/analytics.php"; ?>
</body>
</html>