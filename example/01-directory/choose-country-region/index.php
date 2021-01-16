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
	setcookie("lang", $lang, time() + (3600 * 24 * 30), '/', getDomain());
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
	setcookie("lang", $lang, time() + (3600 * 24 * 30), '/', getDomain());
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

function getDomain() {
	$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  $_SERVER['REQUEST_URI'];

	$pieces = parse_url($link);
	$domain = isset($pieces['host']) ? $pieces['host'] : '';
	if(preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)){
		return '.'.$regs['domain'];
	}
	return FALSE;
}

$lpna = array (
	'lang_cfg_title' => array (
		'en-us' => 'CONFIGURATION INFORMATION',
		'zh-cn' => '配置信息',
		'zh-tw' => '配置資訊',
		'ja-jp' => '構成情報',
		'ko-kr' => '구성 정보',
		'ru-ru' => 'Сведения о конфигурации'),
	'lang_cfg_title1'  => array (
		'en-us' => 'Currently Cookies the global "remember_lang" variable value: ',
		'zh-cn' => '当前 Cookies 全局 "remember_lang" 变量值：',
		'zh-tw' => '當前 Cookies 全域 "remember_lang" 變數值：',
		'ja-jp' => '現在 Cookies グローバル "remember_lang" 変数の値: ',
		'ko-kr' => '전류 Cookies 글로벌 "remember_lang" 변수 값: ',
		'ru-ru' => 'Ток Cookies Глобальный "remember_lang" Значение переменной: '),
	'lang_cfg_title2'  => array (
		'en-us' => 'Current Cookies Global "lang" The value of the variable: ',
		'zh-cn' => '当前 Cookies 全局 "lang" 变量值：',
		'zh-tw' => '當前 Cookies 全域 "lang" 變數值：',
		'ja-jp' => '現在 Cookies グローバル "lang" 変数の値: ',
		'ko-kr' => '전류 Cookies 글로벌 "lang" 변수 값: ',
		'ru-ru' => 'Ток Cookies Глобальный "lang" Значение переменной: '),
	'lang_cfg_title3' => array (
		'en-us' => 'Browser "HTTP_ACCEPT_LANGUAGE" Request value: ',
		'zh-cn' => '浏览器 "HTTP_ACCEPT_LANGUAGE" 请求值：',
		'zh-tw' => '瀏覽器 "HTTP_ACCEPT_LANGUAGE" 請求值：',
		'ja-jp' => 'ブラウザー "HTTP_ACCEPT_LANGUAGE" 要求値: ',
		'ko-kr' => '브라우저 "HTTP_ACCEPT_LANGUAGE" 요청 값: ',
		'ru-ru' => 'Обозреватель "HTTP_ACCEPT_LANGUAGE" Значение запроса: '),
	'lang_cfg_title4' => array (
		'en-us' => 'This page will be skipped if remember_lang is set! Then remember_lang will be synchronized with the Lang parameter;',
		'zh-cn' => '如果 remember_lang 设置后将跳过本页！那么 remember_lang 将与 Lang 参数同步；',
		'zh-tw' => '如果 remember_lang 設置後將跳過本頁！那麼 remember_lang 將與 Lang 參數同步；',
		'ja-jp' => 'もし remember_lang 設定後、このページはスキップされます！ それから remember_lang となる Lang パラメータの同期;',
		'ko-kr' => '만약에 remember_lang 설정 후이 페이지를 건너 뜁니다! 그런 다음 remember_lang 와 함께
 Lang 파라미터 동기화',
		'ru-ru' => 'если remember_lang Эта страница будет пропущена после настройки! тогда remember_lang Будет с Lang Синхронизация параметров'),
	'lang_cfg_title5' => array (
		'en-us' => 'The currently loaded file is: ',
		'zh-cn' => '当前加载的文件是：',
		'zh-tw' => '當前載入的檔是：',
		'ja-jp' => '現在クッキー "remember_lang" というグローバル変数の値: ',
		'ko-kr' => '현재 로드 된 파일은: ',
		'ru-ru' => 'Текущий загруженный файл является: '),
	'lang_cfg_title_msg' => array (
		'en-us' => 'Is not set',
		'zh-cn' => '未设置',
		'zh-tw' => '未設置',
		'ja-jp' => '設定されていません',
		'ko-kr' => '설정 하지 않으면',
		'ru-ru' => 'Не задано'),
	'lang_cfg_sl' => array (
		'en-us' => 'AVAILABLE LANGUAGES',
		'zh-cn' => '可用语言',
		'zh-tw' => '可用語言',
		'ja-jp' => '利用可能な言語',
		'ko-kr' => '사용 가능한 언어',
		'ru-ru' => 'Доступные языки'),
	'lang_dark' => array (
		'en-us' => 'Dark',
		'zh-cn' => '暗',
		'zh-tw' => '暗',
		'ja-jp' => 'ダーク',
		'ko-kr' => '어두운',
		'ru-ru' => 'темно'),
	'lang_dark_light' => array (
		'en-us' => 'Light',
		'zh-cn' => '亮',
		'zh-tw' => '亮',
		'ja-jp' => '明るい',
		'ko-kr' => '밝다',
		'ru-ru' => 'яркий'),
	'lang_dark_save' => array (
		'en-us' => 'Remember this',
		'zh-cn' => '记住我',
		'zh-tw' => '記住我',
		'ja-jp' => '私を覚えて',
		'ko-kr' => '나를 기억해',
		'ru-ru' => 'Помни меня')
);
?>
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
	<link rel="stylesheet" href="../assets/css/lp-icon.css" type="text/css" />
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
	<script src="../assets/js/lp.js"></script>
	<script type="module" src="../assets/js/lp-dark-mode.js"></script>
</head>
<body>
	<h1 id="logo">
		<a href="https://lang-php.com"></a>
		<br /><aside><dark-mode-toggle id="dark-mode-toggle-1" appearance="switch" dark="<?php echo $lpna['lang_dark'][$lng]; ?>" light="<?php echo $lpna['lang_dark_light'][$lng]; ?>" remember="<?php echo $lpna['lang_dark_save'][$lng]; ?>"></dark-mode-toggle></aside>
	</h1>
	<h2>01-directory</h2>
	<h3><?php echo $lpna['lang_cfg_title'][$lng]; ?></h3>
	<ol>
		<li><?php echo $lpna['lang_cfg_title1'][$lng]; ?> <?php if(isset($_COOKIE["remember_lang"])) echo $_COOKIE['remember_lang']; else echo $lpna['lang_cfg_title_msg'][$lng];; ?></li>
		<li><?php echo $lpna['lang_cfg_title2'][$lng]; ?> <?php if(isset($_COOKIE["lang"])) echo $_COOKIE['lang']; else echo $lpna['lang_cfg_title_msg'][$lng];; ?></li>
		<li><?php echo $lpna['lang_cfg_title3'][$lng]; ?><?php preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches); echo $matches[1]; ?></li>

		<li><?php echo $lpna['lang_cfg_title4'][$lng]; ?></li>
		<li><?php echo $lpna['lang_cfg_title5'][$lng]; ?>01-directory/choose-country-region/index.php</li>
	</ol>

	<h2><?php echo $lpna['lang_cfg_sl'][$lng]; ?></h2>
	<dl>
		<h3>North America</h3>
		<dt><span class="flag-icon flag-icon-us"></span>&nbsp;&nbsp;United States - English ( <a href="../?lang=en-US">Mode 1</a> &amp; <a href="javascript:qlang('en-US')">Mode 2</a> )</dt>
		<h3>Europe</h3>
		<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;&nbsp;Россия - Русский ( <a href="../?lang=ru-RU">режим 1</a> &amp; <a href="javascript:qlang('ru-RU')">режим 2</a> )</dt>
		<h3>Asia - Pacific</h3>
		<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;&nbsp;简体中文 - 中国 ( <a href="../?lang=zh-CN">模式 1</a> &amp; <a href="javascript:qlang('zh-CN')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;&nbsp;繁體中文 - 中國 ( <a href="../?lang=zh-TW">模式 1</a> &amp; <a href="javascript:qlang('zh-TW')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;&nbsp;日本 - 日本語 ( <a href="../?lang=ja-JP">モード 1</a> &amp; <a href="javascript:qlang('ja-JP')">モード 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;&nbsp;대한민국 - 한국어 ( <a href="../?lang=ko-KR">모드 1</a> &amp; <a href="javascript:qlang('ko-KR')">모드 2</a> )</dt>
	</dl>
<?php include "../libraries/analytics.php"; ?>
</body>
</html>