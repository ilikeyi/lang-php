<!DOCTYPE html>
<html>
	<head>
		<title>Official Documentation</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="PHP,Multi-langual framework by @FengYi" />
		<meta name="keywords" content="PHP, PHP Multi-lingual download, Multi-lingual, PHP Multi language Framework, PHP Multi language, by @FengYi" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/lp-icon.css" />
		<link rel="shortcut icon" href="assets/logo/logo.ico" type="image/x-icon">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a href="./" class="title">官方主页</a>
				<nav>
					<ul>
						<li><a href="https://lang-php.com/go/lp-docs" class="active">文档</a></li>
						<li><a href="https://lang-php.com/go/lp-downloads">下载</a></li>
					</ul>
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<h1 class="major">快速指南</h1>

						<!-- Text -->
							<section>
								<p>本快速指南将指导您如何使用并创建，从而达到掌握及精通教程。</p>
							</section>
						</div>
					</section>

						<!-- lp-docs-two -->
							<section id="lp-contents" class="wrapper style3 fade-up">
								<div class="inner">
									<h2>目录</h2>
								</div>
							</section>

						<!-- lp-contents-ext -->
							<section id="lp-contents-ext" class="wrapper">
								<div class="inner">
									<ul>
										<li><a href="/go/lp-docs-example">示例</a>
										<ul>
											<li><a href="/go/lp-docs-one">示例 1：用户自定义选择 &amp; 目录式</a></li>
											<li><a href="/go/lp-docs-two">示例 2：内部加载文件 &amp; 嵌入式</a></li>
											<li><a href="/go/lp-docs-three">示例 3：读取配置文件 &amp; 加载式</a></li>
											<li><a href="/go/lp-docs-four">示例 4：保存设置 &amp; 配置式</a></li>
											<li><a href="/go/lp-docs-fives">示例 5：数据库 &amp; 数组式</a></li>
											<li><a href="/go/lp-docs-six">示例 6：独立版 &amp; 便携式</a></li>
										</ul>
										<li><a href="/go/lp-docs-supplements">其它补充</a></li>
										<ul>
											<li><a href="/go/lp-docs-url" id="supplements-url-link">如何使用动态 URL 功能</a></li>
											<li><a href="/go/lp-docs-js" id="supplements-js-link">使用 Javascript (JS) 切换语言并隐藏参数</a></li>
											<li><a href="/go/lp-docs-domain" id="supplements-domain-link">跳转到指定的域名</a></li>
										</ul>
									</ul>
								</div>
							</section>

				<!-- example -->
					<section id="example" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>示例</h2>
							<p>包括：提供了不同的，以便您选择并使用。</p>
						</div>
					</section>

				<!-- lp-docs-one -->
					<section id="lp-docs-one" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>示例 1：用户自定义选择 &amp; 目录式</h2>
							<p>首次运行后转向 'choose-country-region' 目录，选择后转向匹配的语言目录，带记忆功能。
							<br>源码：latest.zip -> /example/01-directory</p>
						</div>
					</section>

				<!-- lp-docs-two -->
					<section id="lp-docs-two" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>示例 2：内部加载文件 &amp; 嵌入式</h2>
							<p>自动搜索匹配目录下的文件，没有搜索到则选择默认调用文件。
							<br>源码：latest.zip -> /example/02-embed</p>
						</div>
					</section>

				<!-- lp-docs-two-ext -->
					<section id="lp-docs-two-ext" class="wrapper">
						<div class="inner">
							<h3>1. 在 themes 下创建匹配的语言文件。例如：</h3>
							<pre><code>en-us.php

Embedded en-us.php files;

zh-cn.php

嵌入 zh-cn.php 文件;</code></pre>
							<p>请参阅 latest.zip -> /example/02-embed/themes/homepage 目录下的文件。</p>

							<h3>2. 创建新页面！</h3>
							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;使用模板 02-embed/templets.php 文件，用户自行更改为新文件名（示例为：newpage.php）。</h4>
							<pre><code>$lp = new lp();

$lp->masterCatalogue = "themes/{newpage}";

$lp->run();</code></pre>
							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;创建目录及匹配的语言</h4>
							<pre><code>进入 02-embed/themes/newpage，创建目录必须与 {newpage} 变量名一致。</code></pre>

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;目录结构</h4>
							<pre><code>02-embed/newpage.php
02-embed/themes/newpage</code></pre>
						</div>
					</section>

				<!-- lp-docs-three -->
					<section id="lp-docs-three" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>示例 3：读取配置文件 &amp; 加载式</h2>
							<p>自动搜索匹配的语言文件并加载后调用，包括：字串符、参数等。
							<br>源码：latest.zip -> /example/03-load</p>
						</div>
					</section>

				<!-- lp-docs-three-ext -->
					<section id="lp-docs-three-ext" class="wrapper">
						<div class="inner">
							<h4>1. 创建新页面！</h4>
							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;使用模板 03-load/templets.php 文件，用户自行更改为新文件名（示例为：newpage.php）。</h4>
							<pre><code>$lp = new lp();

$lp->masterCatalogue = 'languages/{newpage}';
$lp->userThemes      = '{newpage}';

$lp->run();</code></pre>
							<p>请参阅 latest.zip -> /example/03-load/template.php</p>

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;创建主题皮肤</h4>
							<pre><code>进入 03-load/themes 并创建 {newpage}.php</code></pre>

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;创建可匹配的语言模板。例如：</h4>
							<pre><code>en-us.php

$lpvar = array (
	'lang_available'   => 'Available Languages:',
);

zh-cn.php

$lpvar = array (
	'lang_available'   => '可用语言:',
);</code></pre>
							<p>请参阅 latest.zip -> /example/03-load/languages/ 目录下的 en-us.php & zh-cn.php 文件。</p>

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;目录结构</h4>
							<pre><code>03-load/{newpage}.php
03-load/languages/{newpage}
03-load/themes/{newpage}</code></pre>

							<h4>2. Html 与 PHP 语言混排，例如：</h4>
							<pre><code>&lt;?php echo $lpvar['lang_available']; ?></code></pre>
						</div>
					</section>

				<!-- lp-docs-four -->
					<section id="lp-docs-four" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>示例 4：保存设置 &amp; 配置式</h2>
							<p>该示例与动态读写 Cookies 不同；将配置保存到 xml 或 cfg，通过读取来选择可用的首选语言包，不接受浏览器默认语言来优先选择。
							<br>源码：latest.zip -> /example/04-settings</p>
						</div>
					</section>

				<!-- lp-docs-four-ext -->
					<section id="lp-docs-four-ext" class="wrapper">
						<div class="inner">
							<h4>1. 创建一个可用的全局参数。例如：</h4>
							<pre><code>XML
&lt;?xml version="1.0" encoding="UTF-8" ?>
&lt;setting>
	&lt;languages>
		en-us
	&lt;/languages>
&lt;/setting>

请参阅 latest.zip -> /example/04-settings/lp.xml 文件。

lp.cfg
Global_DFLT_Lang=en-us

请参阅 latest.zip -> /example/04-settings/lp.cfg 文件。</code></pre>

							<h3>2. 创建新页面！</h3>
							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;使用模板 04-settings/templets.php 文件，用户自行更改为新文件名（示例为：newpage.php）。</h4>
							<pre><code>$lp = new lp();

$lp->masterCatalogue = "themes/{newpage}";

$lp->run();</code></pre>
							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;创建目录及匹配的语言</h4>
							<pre><code>进入 04-settings/themes/newpage，创建目录必须与 {newpage} 变量名一致。</code></pre>

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;目录结构</h4>
							<pre><code>04-settings/newpage.php
04-settings/themes/newpage</code></pre>
						</div>
					</section>

				<!-- lp-docs-fives -->
					<section id="lp-docs-fives" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>示例 5：数据库 &amp; 数组式</h2>
							<p>通过 PDO 方式连接 SQL 数据库，支持 MySQL、SQLite。并使用数组（Array）功能列出所有可用的数据。
							<br>源码：latest.zip -> /example/05-database</p>
						</div>
					</section>

				<!-- lp-docs-fives-ext -->
					<section id="lp-docs-fives-ext" class="wrapper">
						<div class="inner">
							<h4>1. 创建数据库全局配置文件。</h4>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;使用模板 latest.zip -> /example/05-database/lp-config.sample.php 文件，更改为新文件名：lp-config.php</p>

							<h4>2. 更改参数与你的服务器配置相同。</h4>
							<pre><code>define('Database_Mode', '');

define('DB_HOST',       'localhost');

define('DB_NAME',       'lang-php');

define('DB_USER',       'username');

define('DB_PWD',        'password');

define('DB_PREFIX',     'lp_');

define('DB_CHARSET',    'utf8mb4');</code></pre>


							<h4>3. 动态页连接代码。</h4>
							<pre><code>include_once('lp-load.php');

$page_team = 'homepage';

$current_lng = $db->select(DB_PREFIX."translate", "section = '$page_team'");
$lpna = $db->arraymodify($current_lng, $lng);</code></pre>
							<p>请参阅 latest.zip -> /example/05-database/index.php 文件。</p>

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;数组调用方法。</h4>
							<pre><code>&lt;?php echo $lpna['lang_use_title1']['lp_variable']; ?></code></pre>

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 使用 print_r 命令输出所有数组。</h4>
							<pre><code>print_r($current_page);
print_r($lpna);</code></pre>

							<h4>4. 创建新页面！</h4>
							<p>使用模板 latest.zip -> /example/05-database/templets.php 文件，用户自行更改为新文件名（示例为：newpage.php）。</p>
							<pre><code>修改当前页面名称，以便索引。
$page_team = 'newpage';</code></pre>
						</div>
					</section>

				<!-- lp-docs-six -->
					<section id="lp-docs-six" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>示例 6：独立版 &amp; 便携式</h2>
							<p>利用 array() 语言结构建一个数组，通过函数来完成所有操作；相对其它版本，便携版是由一个文件来完成。
							<br>源码：latest.zip -> /example/06-portable</p>
						</div>
					</section>

				<!-- lp-docs-six-ext -->
					<section id="lp-docs-six-ext" class="wrapper">
						<div class="inner">
							<h4>1. 预先设置可用的语言包，通过查询条件来完成。</h4>
							<pre><code>$global_lp_all = array('en-us', 'zh-cn', 'zh-tw', 'ja-jp', 'ko-kr', 'ru-ru');</code></pre>

							<h4>2. 创建数组。</h4>
							<pre><code>$lpna = array (
    'template' => array (
        'en-us' => 'template',
        'zh-cn' => '模板',
        'zh-tw' => '模板',
        'ja-jp' => '模板',
        'ko-kr' => '模板',
        'ru-ru' => '模板'),
    'end' => array (
        'en-us' => 'end',
        'zh-cn' => 'end',
        'zh-tw' => 'end',
        'ja-jp' => 'end',
        'ko-kr' => 'end',
        'ru-ru' => 'end')
);</code></pre>

							<h4>3. 数组调用方法。</h4>
							<pre><code>&lt;?php echo $lpna['lang_page_title'][$lng]; ?></code></pre>
							<p>使用时请注意数组写法，数组演示仅列出部分，请查阅源代码：latest.zip -> /example/06-portable/index.php</p>

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 使用 print_r 命令输出所有数组。</h4>
							<pre><code>print_r($lpna);</code></pre>

							<h4>4. 资源转换。</h4>
							<p>在使用便携版过程中，例如：图片、ICO，需要转换成 base64 编码。javascript、CSS 等资源，用嵌入代码来完成，缩短可以使用精简工具。</p>

							<h4>5. 在线转换网站推荐</h4>
							<ul>
								<li><a href="https://lang-php.com/go/aBase64">Base64 Image Encoder</a> &gt; http://www.base64-image.de</li>
								<li><a href="https://lang-php.com/go/bBase64">Base64 image encoder decoder</a> &gt; http://freeonlinetools24.com/base64-image</li>
								<li><a href="https://lang-php.com/go/cBase64">Convert Images to base64</a> &gt; https://www.browserling.com/tools/image-to-base64/</li>
							</ul>
						</div>
					</section>

				<!-- supplements -->
					<section id="supplements" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>其它补充</h2>
							<p>补充，是指使用中隐藏用法及其它功能等。</p>
						</div>
					</section>

				<!-- supplements-js -->
					<section id="supplements-url" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>如何使用动态 URL 功能</h2>
							<p>将所有请求提交给 index.php 处理，包括 Nginx、Apache、IIS 等。</p>
						</div>
					</section>

				<!-- lsupplements-url-ext -->
					<section id="supplements-url-ext" class="wrapper">
						<div class="inner">
							<h4>&nbsp;&nbsp;1、Nginx 配置示例：</h4>
							<pre><code>location / {
	try_files $uri $uri/ /index.php?$uri&$args;
}</code></pre>

							<h4>&nbsp;&nbsp;2、Apache，在网站主目录下创建 .htaccess</h4>
							<pre><code>RewriteEngine On
RewriteBase /
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]</code></pre>

							<h4>&nbsp;&nbsp;3、打开 index.php 后，启用 URL 功能。</h4>
							<pre><code>$lp->isDynamic = true;</code></pre>
						</div>
					</section>

				<!-- supplements-js -->
					<section id="supplements-js" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>使用 Javascript (JS) 切换语言并隐藏参数</h2>
						</div>
					</section>

				<!-- lsupplements-js-ext -->
					<section id="supplements-js-ext" class="wrapper">
						<div class="inner">
							<p>什么叫通过 Javascript (JS) 来切换语言并隐藏参数？目的就是去掉后缀。<br>
使用模式 1 前：https://lang-php.com/?lang=zh-cn；<br>
使用模式 2 后：https://lang-php.com，后缀没有了。</p>

							<h4>1. HTML 模板。</h4>
							<pre><code>&lt;html&gt;
&lt;headl&gt;
	&lt;script src="assets/js/lp.js"&gt;&lt;/script&gt;
&lt;/headl&gt;
&lt;body&gt;
	&lt;a href="?lang=en-us"&gt;切换&lt;/a&gt;
&lt;/body&gt;
&lt;/html&gt;</script></code></pre>
							<p>源码：latest.zip -> /example/*/assets/js/lp.js</p>
						</div>
					</section>

				<!-- supplements-domain -->
					<section id="supplements-domain" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>跳转到指定的域名</h2>
							<p>什么是跳转到指定的域名？部分示例都是通过读取并匹配目录下的文件，想实现跳转到指定的域名，请参考以下代码：</p>
						</div>
					</section>

				<!-- lp-docs-three-ext -->
					<section id="supplements-domain-ext" class="wrapper">
						<div class="inner">
							<h4>添加代码到需要跳转的页面！</h4>
							<pre><code>/* sample 1

header("Location: http://us.lang-php.com");

/* sample 2

public $globalDomain = 'https://lang-php.com/';

function loading($lang)
{
	header("Location:" . $this->globalDomain . $lang);
}

/* sample 3

function loading($lang)
	switch ($lang) {
		case 'zh-cn': header("Location: https://cn.lang-php.com"); break;
		case 'zh-tw': header("Location: https://tw.lang-php.com"); break;
		case 'en-us': header("Location: https://us.lang-php.com"); break;
		case 'ru-ru': header("Location: https://ru.lang-php.com"); break;
		case 'ja-jp': header("Location: https://jp.lang-php.com"); break;
		case 'ko-kr': header("Location: https://kr.lang-php.com"); break;
		default: header("Location: https://global.lang-php.com"); break;
	}
}</script></code></pre>
						</div>
					</section>


				<!-- Language -->
					<section id="language" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>选择您的国家或地区。</h2>
							<h3>北美洲</h3>
							<dt><span class="flag-icon flag-icon-us"></span>&nbsp; <a href="javascript:lang('en-US')">United States - English</a></dt>
							<br />
							<h3>亚太地区</h3>
							<dt><span class="flag-icon flag-icon-cn"></span>&nbsp; <a href="javascript:lang('zh-CN')">简体中文 - 中国</a></dt>
							<dt><span class="flag-icon flag-icon-tw"></span>&nbsp; <a href="javascript:lang('zh-TW')">繁體中文 - 中國</a></dt>
							<dt><span class="flag-icon flag-icon-jp"></span>&nbsp; <a href="javascript:lang('ja-JP')">日本 - 日本語</a></dt>
							<dt><span class="flag-icon flag-icon-kr"></span>&nbsp; <a href="javascript:lang('ko-KR')">대한민국 - 한국어</a></dt>
							<br />
							<h3>欧洲</h3>
							<dt><span class="flag-icon flag-icon-ru"></span>&nbsp; <a href="javascript:lang('ru-RU')">Россия - Русский</a></dt>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Lang-php. All rights reserved.</li>
						<li>Design: <a href="https://fengyi.tel">Yi</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/lp.js"></script>
<?php include "themes/analytics.php"; ?>
	</body>
</html>