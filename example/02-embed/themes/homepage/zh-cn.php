<!DOCTYPE html>
<html>
<head>
	<title>02-embed</title>
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
		<br /><aside><dark-mode-toggle id="dark-mode-toggle-1" appearance="switch" dark="暗" light="亮" remember="记住我"></dark-mode-toggle></aside>
	</h1>
	<h2>02-embed</h2>
	<h3>内部加载文件 &amp; 嵌入式</h3>
	<p>自动搜索匹配目录下的文件，没有搜索到则选择默认调用文件。</p>

	<h2>配置信息</h2>
	<ol>
		<li>当前 Cookies 全局 'lang' 变量值：<?php if(isset($_COOKIE["lang"])) echo $_COOKIE['lang']; else echo "未设置"; ?></li>
		<li>浏览器 'HTTP_ACCEPT_LANGUAGE' 请求值：<?php preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches); echo $matches[1]; ?></li>
		<li>当前加载的文件是：themes/homepage/zh-cn.php</li>
	</ol>

	<h2>可用语言</h2>
	<dl>
		<dt><span class="flag-icon flag-icon-us"></span>&nbsp;&nbsp;United States - English ( <a href="?lang=en-US">Mode 1</a> &amp; <a href="javascript:lang('en-US')">Mode 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;&nbsp;Россия - Русский ( <a href="?lang=ru-RU">режим 1</a> &amp; <a href="javascript:lang('ru-RU')">режим 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;&nbsp;简体中文 - 中国 ( <a href="?lang=zh-CN">模式 1</a> &amp; <a href="javascript:lang('zh-CN')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;&nbsp;繁體中文 - 中國 ( <a href="?lang=zh-TW">模式 1</a> &amp; <a href="javascript:lang('zh-TW')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;&nbsp;日本 - 日本語 ( <a href="?lang=ja-JP">モード 1</a> &amp; <a href="javascript:lang('ja-JP')">モード 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;&nbsp;대한민국 - 한국어 ( <a href="?lang=ko-KR">모드 1</a> &amp; <a href="javascript:lang('ko-KR')">모드 2</a> )</dt>
	</dl>

	<h2>如何使用它</h2>
	<ol>
		<li>阅读快速指南 -> <a href="https://lang-php.com/go/lp-docs-two">https://lang-php.com/go/lp-docs-two</a></li>
		<li>将 'example/02-embed' 目录中的所有文件上传到你的网站目录；</li>
		<li>浏览器访问：http://&lt; 域名或 IP &gt;；</li>
	</ol>
<?php include "themes/analytics.php"; ?>
</body>
</html>