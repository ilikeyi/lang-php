<!DOCTYPE html>
<html>
<head>
	<title>Error Page</title>
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
<div class="main">
	<h1 id="logo">
		<a href="https://lang-php.com"></a>
		<br /><aside><dark-mode-toggle id="dark-mode-toggle-1" appearance="switch" dark="Dark" light="Light" remember="Remember this"></dark-mode-toggle></aside>
	</h1>
<?php if($_GET['code']=='1xx') : ?>
<h2>ERROR CODE : 1xx</h2>
<dl>
	<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;&nbsp;<strong>简体中文 - 中国</strong></dt>
		<dd>lp.cfg / xml 没读、写操作权限。</dd>
	<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;&nbsp;<strong>繁體中文 - 中國</strong></dt>
		<dd>lp.cfg / xml 沒讀、寫操作權限。</dd>
	<dt><span class="flag-icon flag-icon-us"></span>&nbsp;&nbsp;<strong>United States - English</strong></dt>
		<dd>lp.cfg / xml does not have read and write permissions.</dd>
	<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;&nbsp;<strong>россия - русскийм</strong></dt>
		<dd>У lp.cfg / xml нет прав на чтение и запись.</dd>
	<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;&nbsp;<strong>日本 - 日本語</strong></dt>
		<dd>lp.cfg / xmlには読み取りおよび書き込み権限がありません。</dd>
	<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;&nbsp;<strong>대한민국 - 한국어</strong></dt>
		<dd>lp.cfg / xml 에는 읽기 및 쓰기 권한이 없습니다.</dd>
</dl>
<h2>SOLUTION</h2>
<p>chmod 777 &lt;folder&gt;/lp.cfg / xml</p>
<?php elseif($_GET['code']=='2xx') : ?>
<h2>ERROR CODE : 2xx</h2>
<dl>
	<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;&nbsp;<strong>简体中文 - 中国</strong></dt>
		<dd>lp.cfg 文件里没有名称为 Global_DFLT_Lang 的变量，请先添加变量。</dd>
	<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;&nbsp;<strong>繁體中文 - 中國</strong></dt>
		<dd>lp.cfg 檔案裏沒有名稱為Global_DFLT_Lang的變數，請先添加變數。</dd>
	<dt><span class="flag-icon flag-icon-us"></span>&nbsp;&nbsp;<strong>United States - English</strong></dt>
		<dd>lp.cfg file does not have a name for the Global_DFLT_Lang variable, please add the variable.</dd>
	<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;&nbsp;<strong>россия - русскийм</strong></dt>
		<dd>не  lp.cfg файл для Global_DFLT_Lang имя переменной, пожалуйста, сначала добавить переменных.</dd>
	<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;&nbsp;<strong>日本 - 日本語</strong></dt>
		<dd>lp.cfgファイルには名称をGlobal_DFLT_Langの変数は、まず足を付ける変数.</dd>
	<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;&nbsp;<strong>대한민국 - 한국어</strong></dt>
		<dd>lp.cfg 파일 안에는 이름 Global_DFLT_Lang 변수를 위해, 먼저 추가 변수.</dd>
</dl>
<?php elseif($_GET['code']=='3xx') : ?>
<h2>ERROR CODE : 3xx</h2>
<dl>
	<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;&nbsp;<strong>简体中文 - 中国</strong></dt>
		<dd>未找到 lp.cfg / xml 文件，可参考 lp.sample.php 文件。</dd>
	<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;&nbsp;<strong>繁體中文 - 中國</strong></dt>
		<dd>未找到 lp.cfg / xml 文件，可參考 lp.sample.php 文件。</dd>
	<dt><span class="flag-icon flag-icon-us"></span>&nbsp;&nbsp;<strong>United States - English</strong></dt>
		<dd>Not Found lp.cfg / xml File that references lp.sample.php file.</dd>
	<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;&nbsp;<strong>россия - русскийм</strong></dt>
		<dd>не найден lp.cfg / xml Файл, который ссылается на lp.sample.php файла.</dd>
	<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;&nbsp;<strong>日本 - 日本語</strong></dt>
		<dd>lp.cfg / xmlファイルが見つかりませんでした。lp.sample.phpファイルを参照してください。</dd>
	<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;&nbsp;<strong>대한민국 - 한국어</strong></dt>
		<dd>lp.cfg / xml 파일을 찾을 수 없습니다. lp.sample.php 파일을 참조하십시오.</dd>
</dl>
<?php else : ?>
<p>No content</p>
<?php endif; ?>
</div>
</body>
</html>