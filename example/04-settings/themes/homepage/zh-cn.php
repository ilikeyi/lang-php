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
		<br /><aside><dark-mode-toggle id="dark-mode-toggle-1" appearance="switch" dark="暗" light="亮" remember="记住我"></dark-mode-toggle></aside>
	</h1>
	<h2>04-settings</h2>
	<h3>保存设置 &amp; 配置式</h3>
	<p>该示例与动态读写 Cookies 不同；将配置保存到 xml 或 cfg，通过读取来选择可用的首选语言包，不接受浏览器默认语言来优先选择。</p>

	<h2>配置信息</h2>
	<ol>
		<li>当前全局语言值：<?php echo lp\go::_getCurrentlp(); ?></li>
		<li>文件操作方式：<?php echo lp\go::_getCurrentsetFileType(); ?></li>
		<li>配置文件保存路径：<?php echo lp\go::_getCurrentFileType(); ?></li>
		<li>当前加载的文件是：themes/homepage/zh-cn.php</li>
	</ol>

	<h2>可用语言</h2>
	<dl>
		<dt><span class="flag-icon flag-icon-us"></span>&nbsp;&nbsp;United States - English ( <a href="?lang=en-US">Mode 1</a> &amp; <a href="javascript:refreshlang('en-US')">Mode 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;&nbsp;Россия - Русский ( <a href="?lang=ru-RU">режим 1</a> &amp; <a href="javascript:refreshlang('ru-RU')">режим 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;&nbsp;简体中文 - 中国 ( <a href="?lang=zh-CN">模式 1</a> &amp; <a href="javascript:refreshlang('zh-CN')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;&nbsp;繁體中文 - 中國 ( <a href="?lang=zh-TW">模式 1</a> &amp; <a href="javascript:refreshlang('zh-TW')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;&nbsp;日本 - 日本語 ( <a href="?lang=ja-JP">モード 1</a> &amp; <a href="javascript:refreshlang('ja-JP')">モード 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;&nbsp;대한민국 - 한국어 ( <a href="?lang=ko-KR">모드 1</a> &amp; <a href="javascript:refreshlang('ko-KR')">모드 2</a> )</dt>
	</dl>

	<h2>如何使用它</h2>
	<ol>
		<li>阅读快速指南 -> <a href="https://lang-php.com/go/lp-docs-four">https://lang-php.com/go/lp-docs-four</a></li>
		<li>将 'example/04-settings' 目录中的所有文件上传到你的网站目录；</li>
		<li>更改 lp-golbal-setting.cfg 或 lp-golbal-setting.xml 文件权限为 777；</li>
		<dt>chmod 777 &lt; folder &gt; /<?php echo lp\go::_getCurrentFileType(); ?></dt>
		<li>可选类型 xml 或 cfg（默认xml），编辑 libraries/classes/go.php 文件并修改 $setFileType 变量；</li>
		<li>浏览器访问：http://&lt; 域名或 IP &gt;；</li>
	</ol>
<?php include "themes/analytics.php"; ?>
</body>
</html>