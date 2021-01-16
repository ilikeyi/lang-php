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
		<br /><aside><dark-mode-toggle id="dark-mode-toggle-1" appearance="switch" dark="어두운" light="밝다" remember="나를 기억해"></dark-mode-toggle></aside>
	</h1>
	<h2>01-directory</h2>
	<h3>사용자 정의 선택 &amp; 디렉토리-데모</h3>
	<p>처음 실행 후 설정 되어 'choose-country-region' 디렉터리와 선택 메모리 기능을 가진 언어 디렉터리를 일치 시킨 후 설정 합니다.</p>

	<h2>구성 정보</h2>
	<ol>
		<li>전류 Cookies 글로벌 'remember_lang' 변수 값: <?php if(isset($_COOKIE["lang"])) echo $_COOKIE['remember_lang']; else echo "설정 하지 않으면"; ?></li>
		<li>현재 로드 된 파일은: 01-directory/ko-kr/index.php</li>
	</ol>

	<h2>사용 가능한 언어</h2>
	<dl>
		<dt><span class="flag-icon flag-icon-us"></span>&nbsp;&nbsp;United States - English ( <a href="../?lang=en-US">Mode 1</a> &amp; <a href="javascript:qlang('en-US')">Mode 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;&nbsp;Россия - Русский ( <a href="../?lang=ru-RU">режим 1</a> &amp; <a href="javascript:qlang('ru-RU')">режим 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;&nbsp;简体中文 - 中国 ( <a href="../?lang=zh-CN">模式 1</a> &amp; <a href="javascript:qlang('zh-CN')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;&nbsp;繁體中文 - 中國 ( <a href="../?lang=zh-TW">模式 1</a> &amp; <a href="javascript:qlang('zh-TW')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;&nbsp;日本 - 日本語 ( <a href="../?lang=ja-JP">モード 1</a> &amp; <a href="javascript:qlang('ja-JP')">モード 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;&nbsp;대한민국 - 한국어 ( <a href="../?lang=ko-KR">모드 1</a> &amp; <a href="javascript:qlang('ko-KR')">모드 2</a> )</dt>
	</dl>

	<h2>그것을 사용 하는 방법</h2>
	<ol>
		<li>빠른 안내서를 읽으십시오 -> <a href="https://lang-php.com/go/lp-docs-one">https://lang-php.com/go/lp-docs-one</a></li>
		<li>윌 'example/01-directory' 디렉토리의 모든 파일을 웹 사이트 디렉토리에 업로드하십시오.</li>
		<li>브라우저 액세스 : http://&lt; 도메인 이름 또는 IP &gt;；</li>
	</ol>
<?php include "../libraries/analytics.php"; ?>
</body>
</html>