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
	$lang = strtolower($_COOKIE['lang']);
	if (in_array($lang, $global_lp_all)) {
		$lng = $lang;
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
	'lang_page_title'  => array (
		'en-us' => 'STAND-ALONE VERSION &amp; PORTABLE',
		'zh-cn' => '独立版 &amp; 便携式',
		'zh-tw' => '獨立版 &amp; 可擕式',
		'ja-jp' => 'スタンドアロン バージョン &amp; ポータブル',
		'ko-kr' => '독립 실행형 버전 &amp; 휴대용',
		'ru-ru' => 'Автономная версия &amp; Портативный'),
	'feature-readme'  => array (
		'en-us' => 'Using the array() built an array of language structure and function to complete all operations compared with the other version, portable version is done by a document.',
		'zh-cn' => '利用 array() 语言结构建一个数组，通过函数来完成所有操作；相对其它版本，便携版是由一个文件来完成。',
		'zh-tw' => '利用 array() 語言結構建一個陣列，通過函數來完成所有操作；相對其它版本，便攜版是由一個檔來完成。',
		'ja-jp' => '利用 array() 言語構造には、1つの配列が建てられてある, 関数を通してすべての操作が完成する, 他のバージョン, 携帯版は1つの档から完成することです。',
		'ko-kr' => '사용 array() 언어 구조는 배열 구축, 모든 작업을 완료 하는 기능을 통해; 다른 버전에 비해, 휴대용 버전은 문서에 의해 수행 됩니다.',
		'ru-ru' => 'Использование array() Построение массива языковой структуры и функции для выполнения всех операций, по сравнению с другой версией, портативная версия выполняется в документе.'),
	'lang_cfg_title' => array (
		'en-us' => 'CONFIGURATION INFORMATION',
		'zh-cn' => '配置信息',
		'zh-tw' => '配置資訊',
		'ja-jp' => '構成情報',
		'ko-kr' => '구성 정보',
		'ru-ru' => 'Сведения о конфигурации'),
	'lang_cfg_title1' => array (
		'en-us' => 'Current Cookies Global "lang" The value of the variable: ',
		'zh-cn' => '当前 Cookies 全局 "lang" 变量值：',
		'zh-tw' => '當前 Cookies 全域 "lang" 變數值：',
		'ja-jp' => '現在 Cookies グローバル "lang" 変数の値: ',
		'ko-kr' => '전류 Cookies 글로벌 "lang" 변수 값: ',
		'ru-ru' => 'Ток Cookies Глобальный "lang" Значение переменной: '),
	'lang_cfg_title_msg' => array (
		'en-us' => 'Is not set',
		'zh-cn' => '未设置',
		'zh-tw' => '未設置',
		'ja-jp' => '設定されていません。',
		'ko-kr' => '설정 하지 않으면',
		'ru-ru' => 'Не задано'),
	'lang_cfg_title2' => array (
		'en-us' => 'Browser "HTTP_ACCEPT_LANGUAGE" Request value: ',
		'zh-cn' => '浏览器 "HTTP_ACCEPT_LANGUAGE" 请求值：',
		'zh-tw' => '瀏覽器 "HTTP_ACCEPT_LANGUAGE" 請求值：',
		'ja-jp' => 'ブラウザー "HTTP_ACCEPT_LANGUAGE" 要求値: ',
		'ko-kr' => '브라우저 "HTTP_ACCEPT_LANGUAGE" 요청 값: ',
		'ru-ru' => 'Обозреватель "HTTP_ACCEPT_LANGUAGE" Значение запроса: '),
	'lang_cfg_title3' => array (
		'en-us' => 'The currently loaded file is: ',
		'zh-cn' => '当前加载的文件是：',
		'zh-tw' => '當前載入的檔是：',
		'ja-jp' => '現在読み込まれているファイルです: ',
		'ko-kr' => '현재 로드 된 파일은: ',
		'ru-ru' => 'Текущий загруженный файл является: '),
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
		'ru-ru' => 'Помни меня'),
	'lang_available' => array (
		'en-us' => 'AVAILABLE LANGUAGES',
		'zh-cn' => '可用语言',
		'zh-tw' => '可用語言',
		'ja-jp' => '利用可能な言語',
		'ko-kr' => '사용 가능한 언어',
		'ru-ru' => 'Доступные языки'),
	'lang_use_title0' => array (
		'en-us' => 'HOW TO USE IT',
		'zh-cn' => '如何使用它',
		'zh-tw' => '如何使用它',
		'ja-jp' => 'それを使用する方法',
		'ko-kr' => '그것을 사용 하는 방법',
		'ru-ru' => 'Как его использовать'),
	'lang_use_title1' => array (
		'en-us' => 'Read the quick guide',
		'zh-cn' => '阅读快速指南',
		'zh-tw' => '閱讀快速指南',
		'ja-jp' => 'クイックガイドを読む',
		'ko-kr' => '빠른 안내서를 읽으십시오',
		'ru-ru' => 'Прочитайте краткое руководство'),
	'lang_use_title2' => array (
		'en-us' => 'Upload all files in the "example/06-portable" directory to your website directory;',
		'zh-cn' => '将 "example/06-portable" 目录中的所有文件上传到你的网站目录；',
		'zh-tw' => '將 "example/06-portable" 目錄中的所有文件上傳到你的網站目錄；',
		'ja-jp' => 'ウィル "example/06-portable" ディレクトリ内のすべてのファイルをWebサイトディレクトリにアップロードします；',
		'ko-kr' => '윌 "example/06-portable" 디렉토리의 모든 파일을 웹 사이트 디렉토리에 업로드하십시오.',
		'ru-ru' => 'воли "example/06-portable" Загрузите все файлы в каталоге в каталог вашего сайта;'),
	'lang_use_title3' => array (
		'en-us' => 'Browser access: http://&lt; domain name or IP &gt;;',
		'zh-cn' => '浏览器访问：http://&lt; 域名或 IP &gt;；',
		'zh-tw' => '瀏覽器訪問：HTTP://&lt; 域名或 IP &gt;；',
		'ja-jp' => 'ブラウザーからのアクセス: http://&lt; ドメイン名または IP &gt;;',
		'ko-kr' => '브라우저 액세스: http://&lt; 도메인 이름 또는 IP &gt;;',
		'ru-ru' => 'Доступ к браузеру: http://&lt; Доменное имя или IP &gt;;')
);

#print_r($lpna);
?>
<!DOCTYPE html>
<html>
<head>
	<title>06-portable</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="supported-color-schemes" content="dark light">
	<meta name="color-scheme" content="dark light">
	<meta name="theme-color" content="">
	<link rel="shortcut icon" href="assets/logo/logo.ico" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/lp-icon.css" type="text/css" />
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
	<script src="assets/js/lp.js"></script>
	<script type="module" src="assets/js/lp-dark-mode.js"></script>
</head>
<body>
	<h1 id="logo">
		<a href="https://lang-php.com"></a>
		<br /><aside><dark-mode-toggle id="dark-mode-toggle-1" appearance="switch" dark="<?php echo $lpna['lang_dark'][$lng]; ?>" light="<?php echo $lpna['lang_dark_light'][$lng]; ?>" remember="<?php echo $lpna['lang_dark_save'][$lng]; ?>"></dark-mode-toggle></aside>
	</h1>
	<h2>06-portable</h2>
	<h3><?php echo $lpna['lang_page_title'][$lng]; ?></h3>
	<p><?php echo $lpna['feature-readme'][$lng]; ?></p>

	<h2><?php echo $lpna['lang_cfg_title'][$lng]; ?></h2>
	<ol>
		<li><?php echo $lpna['lang_cfg_title1'][$lng]; ?><?php if(isset($_COOKIE["lang"])) echo $_COOKIE['lang']; else echo $lpna['lang_cfg_title_msg'][$lng]; ?></li>
		<li><?php echo $lpna['lang_cfg_title2'][$lng]; ?><?php preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches); echo $matches[1]; ?></li>
		<li><?php echo $lpna['lang_cfg_title3'][$lng]; ?> 06-portable/index.php</li>
	</ol>

	<h2><?php echo $lpna['lang_available'][$lng]; ?></h2>
	<dl>
		<dt><span class="flag-icon flag-icon-us"></span>&nbsp;&nbsp;United States - English ( <a href="?lang=en-US">Mode 1</a> &amp; <a href="javascript:lang('en-US')">Mode 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;&nbsp;Россия - Русский ( <a href="?lang=ru-RU">режим 1</a> &amp; <a href="javascript:lang('ru-RU')">режим 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;&nbsp;简体中文 - 中国 ( <a href="?lang=zh-CN">模式 1</a> &amp; <a href="javascript:lang('zh-CN')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;&nbsp;繁體中文 - 中國 ( <a href="?lang=zh-TW">模式 1</a> &amp; <a href="javascript:lang('zh-TW')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;&nbsp;日本 - 日本語 ( <a href="?lang=ja-JP">モード 1</a> &amp; <a href="javascript:lang('ja-JP')">モード 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;&nbsp;대한민국 - 한국어 ( <a href="?lang=ko-KR">모드 1</a> &amp; <a href="javascript:lang('ko-KR')">모드 2</a> )</dt>
	</dl>

	<h2><?php echo $lpna['lang_use_title0'][$lng]; ?></h2>
	<ol>
		<li><?php echo $lpna['lang_use_title1'][$lng]; ?> -> <a href="https://lang-php.com/go/lp-docs-six">https://lang-php.com/go/lp-docs-six</a></li>
		<li><?php echo $lpna['lang_use_title2'][$lng]; ?></li>
		<li><?php echo $lpna['lang_use_title3'][$lng]; ?></li>
	</ol>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154069938-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-154069938-1');
</script>
</body>
</html>