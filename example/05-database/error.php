<!DOCTYPE html>
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
	<dd>打开 lp-config.php 修改 Database_Mode 值，选择数据库类型，请修正后再试。</dd>
		<dl>
			<dt><a href="">MySQL</a></dt>
			<dd>1. 填写主机地址（DB_HOST）、数据库名称（DB_NAME）、用户名（DB_USER）、密码（DB_PWD）、前缀（db_prefix）、编码（DB_CHARSET）；</dd>
			<dd>2. 更改 Database_Mode 值为 "mysql"，使用 phpMyAdmin 创建数据库，使用导入功能，选择文件：05-database/database/mysql.sql。</dd>
			<dt><a href="">SQLite</a></dt>
			<dd>更改 Database_Mode 值为 "sqlite"，默认使用数据库文件：05-database/database/sqlite.db。</dd>
		</dl>
	<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;&nbsp;<strong>繁體中文 - 中國</strong></dt>
	<dd>設定檔（lp-config.php），資料庫類型（Database_Mode）設置錯誤，請修正後再試。</dd>
		<dl>
			<dt><a href="">MySQL</a></dt>
			<dd>1. 填寫主機位址（DB_HOST）、資料庫名稱（DB_NAME）、使用者名（DB_USER）、密碼（DB_PWD）、首碼（db_prefix）、編碼（DB_CHARSET）；</dd>
			<dd>2. 更改 Database_Mode 值为 "mysql"，使用 phpMyAdmin 创建数据库，使用导入功能，选择文件：05-database/database/mysql.sql。</dd>
			<dt><a href="">SQLite</a></dt>
			<dd>更改 Database_Mode 值為 "sqlite"，預設使用資料庫檔案：05-database/database/sqlite.db。</dd>
		</dl>
	<dt><span class="flag-icon flag-icon-us"></span>&nbsp;&nbsp;<strong>United States - English</strong></dt>
		<dd>Configuration file (lp-config.php), the database type (Database_Mode) error, please fix and try again.</dd>
		<dl>
			<dt><a href="">MySQL</a></dt>
			<dd>1. Fill in the host address (DB_HOST), database name (DB_NAME), username (DB_USER), password (DB_PWD), prefix (db_prefix), encoding (DB_CHARSET);</dd>
			<dd>2. Open it lp-config.php modify "Database_Mode" values, select the type of database;</dd>
			<dt><a href="">SQLite</a></dt>
			<dd>Change Database_Mode value is "sqlite" by default using the database file: 05-database/database/SQLite.db.</dd>
		</dl>
	<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;&nbsp;<strong>россия - русскийм</strong></dt>
		<dd>Файл конфигурации (lp-config.php), тип (Database_Mode) ошибка базы данных, исправьте и повторите попытку.</dd>
		<dl>
			<dt><a href="">MySQL</a></dt>
			<dd>1. Заполните адрес хоста (DB_HOST), имя базы данных (имя_базы_данных), имя пользователя (DB_USER), пароль (DB_PWD), префикс (db_prefix), кодирование (DB_CHARSET);</dd>
			<dd>2. Открыть lp-config.php Изменить "Database_Mode" Значения, выберите тип базы данных;</dd>
			<dt><a href="">SQLite</a></dt>
			<dd>Изменение Database_Mode Значение "sqlite", Файл базы данных по умолчанию: 05-database/database/sqlite.db.</dd>
		</dl>
	<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;&nbsp;<strong>日本 - 日本語</strong></dt>
		<dd>構成ファイル (lp-config.php)、データベース型 (Database_Mode) のエラー修正して、再試行してください。</dd>
		<dl>
			<dt><a href="">MySQL</a></dt>
			<dd>1. ホスト アドレス (DB_HOST)、データベース名 (DB_NAME)、(DB_USER) のユーザー名、パスワード (DB_PWD)、プレフィックス (db_prefix)、エンコーディング (DB_CHARSET); を記入します。</dd>
			<dd>2. 開けて下さい lp-config.php 変更 "Database_Mode" 値は、データベースの種類を選択します。</dd>
			<dt><a href="">SQLite</a></dt>
			<dd>変更 Database_Mode 値は "sqlite"既定では、データベース ファイルを使用して: 05-database/database/sqlite.db.</dd>
		</dl>
	<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;&nbsp;<strong>대한민국 - 한국어</strong></dt>
		<dd>프로 파일（lp-config.php），데이터베이스 유형（Database_Mode）오류를 수정 하시기 바랍니다 하 고 다시 시도 하십시오.</dd>
		<dl>
			<dt><a href="">MySQL</a></dt>
			<dd>1. 호스트 주소 (DB_HOST), 데이터베이스 이름 (DB_NAME), 사용자 이름 (DB_USER), 암호 (DB_PWD), 접두사 (db_prefix), 인코딩 (DB_CHARSET);를 입력합니다;</dd>
			<dd>2. 그것을 열으십시오 lp-config.php 수정 "Database_Mode" 값, 데이터베이스;의 유형을 선택합니다</dd>
			<dt><a href="">SQLite</a></dt>
			<dd>변경 Database_Mode 값은 "sqlite", 기본 데이터베이스 파일: 05-database/database/sqlite.db.</dd>
		</dl>
</dl>
<?php elseif($_GET['code']=='2xx') : ?>
<h2>ERROR CODE : 2xx</h2>
<strong><font color="red"><ul><?php if(isset($_COOKIE["error_code_2xx"])) echo $_COOKIE['error_code_2xx']; else echo "No mistake."; ?></li></ul></font></strong>
<dl>
	<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;&nbsp;<strong>简体中文 - 中国</strong></dt>
		<dd>PDO 连接数据库时发生了错误，请查阅红色部分。</dd>
	<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;&nbsp;<strong>繁體中文 - 中國</strong></dt>
		<dd>PDO 連接資料庫時發生了錯誤，請查閱紅色部分。</dd>
	<dt><span class="flag-icon flag-icon-us"></span>&nbsp;&nbsp;<strong>United States - English</strong></dt>
		<dd>PDO error occurred when connecting to the database, please check out the red ones.</dd>
	<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;&nbsp;<strong>россия - русскийм</strong></dt>
		<dd>PDO ошибка при подключении к базе данных, пожалуйста проверьте красные.</dd>
	<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;&nbsp;<strong>日本 - 日本語</strong></dt>
		<dd>赤いものをチェックしてください、データベースに接続するときに、PDO エラーが発生しました。</dd>
	<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;&nbsp;<strong>대한민국 - 한국어</strong></dt>
		<dd>데이터베이스에 연결 하는, 제발 붉은 색 체크 PDO 오류가 발생 했습니다.</dd>
</dl>
<?php elseif($_GET['code']=='3xx') : ?>
<h2>ERROR CODE : 3xx</h2>
<dl>
	<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;&nbsp;<strong>简体中文 - 中国</strong></dt>
		<dd>没有配置文件，将文件 lp-config.sample.php 更名为 lp-config.php。</dd>
	<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;&nbsp;<strong>繁體中文 - 中國</strong></dt>
		<dd>沒有設定檔，將檔 lp-config.sample.php 更名為 lp-config.php。</dd>
	<dt><span class="flag-icon flag-icon-us"></span>&nbsp;&nbsp;<strong>United States - English</strong></dt>
		<dd>No configuration file, the file lp-config.sample.php was renamed to lp-config.php.</dd>
	<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;&nbsp;<strong>россия - русскийм</strong></dt>
		<dd>Нет файла конфигурации, файл lp-config.sample.php Изменила свое название на lp-config.php.</dd>
	<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;&nbsp;<strong>日本 - 日本語</strong></dt>
		<dd>構成ファイル、ファイルがありません lp-config.sample.php 商号を変更 lp-config.php。</dd>
	<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;&nbsp;<strong>대한민국 - 한국어</strong></dt>
		<dd>아니 구성 파일, lp-config.php 에 LP config.sample.php 파일의 이름을 바꿉니다.</dd>
</dl>
<?php elseif($_GET['code']=='4xx') : ?>
<h2>ERROR CODE : 4xx</h2>
<dl>
	<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;&nbsp;<strong>简体中文 - 中国</strong></dt>
		<dd>不支持 PDO，请先开启或升级到最新的 PHP 版本。</dd>
	<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;&nbsp;<strong>繁體中文 - 中國</strong></dt>
		<dd>不支援 PDO，請先開啟或升級到最新的 PHP 版本。</dd>
	<dt><span class="flag-icon flag-icon-us"></span>&nbsp;&nbsp;<strong>United States - English</strong></dt>
		<dd>PDO is not supported, please open or upgrade to the latest version of PHP.</dd>
	<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;&nbsp;<strong>россия - русскийм</strong></dt>
		<dd>PDO не поддерживается, пожалуйста, откройте или обновление до последней версии PHP.</dd>
	<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;&nbsp;<strong>日本 - 日本語</strong></dt>
		<dd>PDO はサポートされていません、してください開くか、PHP の最新バージョンにアップグレードします。</dd>
	<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;&nbsp;<strong>대한민국 - 한국어</strong></dt>
		<dd>PDO 는 지원 되지 않습니다, 제발 열거나 PHP의 최신 버전으로 업그레이드 합니다.</dd>
</dl>
<?php else : ?>
<p>No content</p>
<?php endif; ?>
</div>
</body>
</html>