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
		<br /><aside><dark-mode-toggle id="dark-mode-toggle-1" appearance="switch" dark="暗" light="亮" remember="記住我"></dark-mode-toggle></aside>
	</h1>
	<h2>04-settings</h2>
	<h3>保存設置 &amp; 配寘式</h3>
	<p>該示例與動態讀寫 Cookies 不同；將配寘保存到 xml 或 cfg，通過讀取來選擇可用的首選語言包，不接受瀏覽器默認語言來優先選擇。</p>

	<h2>配置資訊</h2>
	<ol>
		<li>當前全局語言值：<?php echo lp\go::_getCurrentlp(); ?></li>
		<li>檔案操作管道：<?php echo lp\go::_getCurrentsetFileType(); ?></li>
		<li>設定檔保存路徑：<?php echo lp\go::_getCurrentFileType(); ?></li>
		<li>當前載入的檔是：themes/homepage/zh-tw.php</li>
	</ol>

	<h2>可用語言</h2>
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
		<li>閱讀快速指南 <a href="https://lang-php.com/go/lp-docs-four">https://lang-php.com/go/lp-docs-four</a></li>
		<li>將 'example/04-settings' 目錄中的所有文件上傳到你的網站目錄；</li>
		<li>更改 <?php echo lp\go::_getCurrentFileType(); ?> 文件權限為 777；</li>
		<dt>chmod 777 &lt; folder &gt; /<?php echo lp\go::_getCurrentFileType(); ?></dt>
		<li>可選類型 xml 或 cfg（默認 xml），編輯 libraries/classes/go.php 檔案並修改 $setFileType 變數；</li>
		<li>瀏覽器訪問：http://&lt; 域名或 IP &gt;；</li>
	</ol>
<?php include "themes/analytics.php"; ?>
</body>
</html>