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
				<a href="./" class="title">lang-php Homepage</a>
				<nav>
					<ul>
						<li><a href="https://lang-php.com/go/lp-docs">Docs</a></li>
						<li><a href="https://lang-php.com/go/lp-downloads" class="active">Downloads</a></li>
					</ul>
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<h1 class="major">Quick Guide</h1>

						<!-- Text -->
							<section>
								<p>This quick guide will show you how to use and create it to master and master the tutorial.</p>
							</section>
						</div>
					</section>

						<!-- lp-docs-two -->
							<section id="lp-contents" class="wrapper style3 fade-up">
								<div class="inner">
									<h2>Table of Contents</h2>
								</div>
							</section>

						<!-- lp-contents-ext -->
							<section id="lp-contents-ext" class="wrapper">
								<div class="inner">
									<ul>
										<li><a href="/go/lp-docs-example">Example</a>
										<ul>
											<li><a href="/go/lp-docs-one">Example 1: User-defined selection &amp; Catalog</a></li>
											<li><a href="/go/lp-docs-two">Example 2: Loading files internally &amp; Embedded</a></li>
											<li><a href="/go/lp-docs-three">Example 3: Read configuration file &amp; Loading</a></li>
											<li><a href="/go/lp-docs-four">Example 4: Save Settings &amp; Configuration</a></li>
											<li><a href="/go/lp-docs-fives">Example 5: database &amp; Array</a></li>
											<li><a href="/go/lp-docs-six">Example 6: Standalone &amp; Portable</a></li>
										</ul>
										<li><a href="/go/lp-docs-supplements">Other supplements</a></li>
										<ul>
											<li><a href="/go/lp-docs-url" id="supplements-url-link">How to use the dynamic URL feature</a></li>
											<li><a href="/go/lp-docs-js" id="supplements-js-link">Use Javascript (JS) to switch languages and hide parameters</a></li>
											<li><a href="/go/lp-docs-domain" id="supplements-domain-link">Jump to the specified domain name</a></li>
										</ul>
									</ul>
								</div>
							</section>

				<!-- example -->
					<section id="example" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>Example</h2>
							<p>Includes: Provides different ones for you to choose and use.</p>
						</div>
					</section>

				<!-- lp-docs-one -->
					<section id="lp-docs-one" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>Example 1: User-defined selection &amp; Catalog</h2>
							<p>Steering after first run 'choose-country-region'Directory, select the language directory to match, with memory function.
							<br>Source: latest.zip -> /example/01-directory</p>
						</div>
					</section>

				<!-- lp-docs-two -->
					<section id="lp-docs-two" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>Example 2: Loading files internally &amp; Embedded</h2>
							<p>Automatically search for files in the matching directory. If no file is found, the default file is selected.
							<br>Source: latest.zip -> /example/02-embed</p>
						</div>
					</section>

				<!-- lp-docs-two-ext -->
					<section id="lp-docs-two-ext" class="wrapper">
						<div class="inner">
							<h3>1. Create a matching language file under themes. E.g:</h3>
							<pre><code>en-us.php

Embedded en-us.php files;

zh-cn.php

Embed zh-cn.php file;</code></pre>
							<p>See the files in the latest.zip->/example/02-embed/themes/homepage directory.</p>

							<h3>2. Create new page!</h3>
							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Use template 02-embed/templets.php File, the user can change it to the new file name ( example: newpage.php ).</h4>
							<pre><code>$lp = new lp();

$lp->masterCatalogue = "themes/{newpage}";

$lp->run();</code></pre>
							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create directories and matching languages</h4>
							<pre><code>Enter 02-embed/themes/newpage, the created directory must be consistent with the {newpage} variable name.</code></pre>

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Directory Structure</h4>
							<pre><code>02-embed/newpage.php
02-embed/themes/newpage</code></pre>
						</div>
					</section>

				<!-- lp-docs-three -->
					<section id="lp-docs-three" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>Example 3: Read the configuration file &amp; Loading</h2>
							<p>Automatically search for matching language files and load them after loading, including: string characters, parameters, etc.
							<br>Source: latest.zip -> /example/03-load</p>
						</div>
					</section>

				<!-- lp-docs-three-ext -->
					<section id="lp-docs-three-ext" class="wrapper">
						<div class="inner">
							<h4>1. Create new page!</h4>
							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Use template 03-load/templets.php File, the user can change it to the new file name (example: newpage.php).</h4>
							<pre><code>$lp = new lp();

$lp->masterCatalogue = 'languages/{newpage}';
$lp->userThemes      = '{newpage}';

$lp->run();</code></pre>
							<p>See latest.zip -> /example/03-load/template.php</p>

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create the theme skin</h4>
							<pre><code>Enter 03-load/themes And create {newpage}.php</code></pre>

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create matchable language templates. E.g:</h4>
							<pre><code>en-us.php

$lpvar = array (
	'lang_available'   => 'Available Languages:',
);

zh-cn.php

$lpvar = array (
	'lang_available'   => '可用语言:',
);</code></pre>
							<p>See latest.zip -> /example/03-load/languages/ en-us.php & zh-cn.php files in the directory.</p>

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Directory Structure</h4>
							<pre><code>03-load/{newpage}.php
03-load/languages/{newpage}
03-load/themes/{newpage}</code></pre>

							<h4>2. Html is mixed with PHP language, for example:</h4>
							<pre><code>&lt;?php echo $lpvar['lang_available']; ?></code></pre>
						</div>
					</section>

				<!-- lp-docs-four -->
					<section id="lp-docs-four" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>Example 4: Save Settings &amp; Configuration</h2>
							<p>This example is different from dynamically reading and writing cookies; save the configuration to xml or cfg, read to select the available preferred language pack, and do not accept the browser's default language for preference.
							<br>Source: latest.zip -> /example/04-settings</p>
						</div>
					</section>

				<!-- lp-docs-four-ext -->
					<section id="lp-docs-four-ext" class="wrapper">
						<div class="inner">
							<h4>1. Create a usable global parameter. E.g:</h4>
							<pre><code>XML
&lt;?xml version="1.0" encoding="UTF-8" ?>
&lt;setting>
	&lt;languages>
		en-us
	&lt;/languages>
&lt;/setting>

See latest.zip -> /example/04-settings/lp.xml file.

lp.cfg
Global_DFLT_Lang=en-us

See latest.zip -> /example/04-settings/lp.cfg file.</code></pre>

							<h3>2. Create new page!</h3>
							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Use template 04-settings/templets.php File, the user can change it to the new file name (example: newpage.php).</h4>
							<pre><code>$lp = new lp();

$lp->masterCatalogue = "themes/{newpage}";

$lp->run();</code></pre>
							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create directories and matching languages</h4>
							<pre><code>Enter 04-settings/themes/newpage, The created directory must match the {newpage} variable name.</code></pre>

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Directory Structure</h4>
							<pre><code>04-settings/newpage.php
04-settings/themes/newpage</code></pre>
						</div>
					</section>

				<!-- lp-docs-fives -->
					<section id="lp-docs-fives" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>Example 5: Database &amp; Array</h2>
							<p>Connects to SQL database through PDO, and supports MySQL and SQLite. And use the Array function to list all available data.
							<br>Source: latest.zip -> /example/05-database</p>
						</div>
					</section>

				<!-- lp-docs-fives-ext -->
					<section id="lp-docs-fives-ext" class="wrapper">
						<div class="inner">
							<h4>1. Create a database global configuration file.</h4>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Use template latest.zip -> /example/05-database/lp-config.sample.php File, change to new file name: lp-config.php</p>

							<h4>2. Changing parameters is the same as your server configuration.</h4>
							<pre><code>define('Database_Mode', '');

define('DB_HOST',       'localhost');

define('DB_NAME',       'lang-php');

define('DB_USER',       'username');

define('DB_PWD',        'password');

define('DB_PREFIX',     'lp_');

define('DB_CHARSET',    'utf8mb4');</code></pre>


							<h4>3. Dynamic page connection code.</h4>
							<pre><code>include_once('lp-load.php');

$page_team = 'homepage';

$current_lng = $db->select(DB_PREFIX."translate", "section = '$page_team'");
$lpna = $db->arraymodify($current_lng, $lng);</code></pre>
							<p>See latest.zip -> /example/05-database/index.php File.</p>

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Array calling method.</h4>
							<pre><code>&lt;?php echo $lpna['lang_use_title1']['lp_variable']; ?></code></pre>

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Use the print_r command to output all arrays.</h4>
							<pre><code>print_r($current_page);
print_r($lpna);</code></pre>

							<h4>4. Create new page!</h4>
							<p>Use template latest.zip -> /example/05-database/templets.php File, the user can change it to the new file name (example: newpage.php).</p>
							<pre><code>Modify the current page name for indexing.
$page_team = 'newpage';</code></pre>
						</div>
					</section>

				<!-- lp-docs-six -->
					<section id="lp-docs-six" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>Example 6: Standalone version &amp; Portable</h2>
							<p>Use the array() language structure to build an array and complete all operations through functions; compared to other versions, the portable version is completed by a file.
							<br>Source: latest.zip -> /example/06-portable</p>
						</div>
					</section>

				<!-- lp-docs-six-ext -->
					<section id="lp-docs-six-ext" class="wrapper">
						<div class="inner">
							<h4>1. The available language packs are set in advance and are done by query conditions.</h4>
							<pre><code>$global_lp_all = array('en-us', 'zh-cn', 'zh-tw', 'ja-jp', 'ko-kr', 'ru-ru');</code></pre>

							<h4>2. Create an array.</h4>
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

							<h4>3. Array calling method.</h4>
							<pre><code>&lt;?php echo $lpna['lang_page_title'][$lng]; ?></code></pre>
							<p>Please pay attention to the writing of the array when using it, the array demo is only listed in part, please refer to the source code:latest.zip -> /example/06-portable/index.php</p>

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Use the print_r command to output all arrays.</h4>
							<pre><code>print_r($lpna);</code></pre>

							<h4>4. Resource conversion.</h4>
							<p>In the process of using the portable version, such as pictures, ICOs, you need to convert to base64 encoding. Javascript, CSS and other resources are completed with embedded code. Shortening tools can be used.</p>

							<h4>5. Online conversion website recommendation</h4>
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
							<h2>Other supplements</h2>
							<p>Supplement refers to the hidden usage and other functions in use.</p>
						</div>
					</section>

				<!-- supplements-js -->
					<section id="supplements-url" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>How to use the dynamic URL feature</h2>
							<p>Submit all requests to index.php for processing, including Nginx, Apache, IIS, etc.</p>
						</div>
					</section>

				<!-- lsupplements-url-ext -->
					<section id="supplements-url-ext" class="wrapper">
						<div class="inner">
							<h4>&nbsp;&nbsp;1. Nginx configuration example:</h4>
							<pre><code>location / {
	try_files $uri $uri/ /index.php?$uri&$args;
}</code></pre>

							<h4>&nbsp;&nbsp;2. Apache, create .htaccess in the home directory of the website</h4>
							<pre><code>RewriteEngine On
RewriteBase /
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]</code></pre>

							<h4>&nbsp;&nbsp;3. After opening index.php, enable the URL function.</h4>
							<pre><code>$lp->isDynamic = true;</code></pre>
						</div>
					</section>

				<!-- supplements-js -->
					<section id="supplements-js" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>Use Javascript(JS) to switch languages and hide parameters</h2>
						</div>
					</section>

				<!-- lsupplements-js-ext -->
					<section id="supplements-js-ext" class="wrapper">
						<div class="inner">
							<p>What is Javascript (JS) to switch languages and hide parameters? The purpose is to remove the suffix.<br>
Before using mode 1: https://lang-php.com/?lang=zh-cn；<br>
After using mode 2: https://lang-php.com，后缀没有了。</p>

							<h4>1. HTML template.</h4>
							<pre><code>&lt;html&gt;
&lt;headl&gt;
	&lt;script src="assets/js/lp.js"&gt;&lt;/script&gt;
&lt;/headl&gt;
&lt;body&gt;
	&lt;a href="?lang=en-us"&gt;Switch&lt;/a&gt;
&lt;/body&gt;
&lt;/html&gt;</script></code></pre>
							<p>Source: latest.zip -> /example/*/assets/js/lp.js</p>
						</div>
					</section>

				<!-- supplements-domain -->
					<section id="supplements-domain" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>Jump to the specified domain name</h2>
							<p>What is the jump to the specified domain name? Some examples are by reading and matching the files in the directory. If you want to jump to the specified domain name, please refer to the following code:</p>
						</div>
					</section>

				<!-- lp-docs-three-ext -->
					<section id="supplements-domain-ext" class="wrapper">
						<div class="inner">
							<h4>Add code to the page you need to jump to!</h4>
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
							<h2>Choose your country or region.</h2>
							<h3>North America</h3>
							<dt><span class="flag-icon flag-icon-us"></span>&nbsp; <a href="javascript:lang('en-US')">United States - English</a></dt>
							<br />
							<h3>Asia Pacific</h3>
							<dt><span class="flag-icon flag-icon-cn"></span>&nbsp; <a href="javascript:lang('zh-CN')">简体中文 - 中国</a></dt>
							<dt><span class="flag-icon flag-icon-tw"></span>&nbsp; <a href="javascript:lang('zh-TW')">繁體中文 - 中國</a></dt>
							<dt><span class="flag-icon flag-icon-jp"></span>&nbsp; <a href="javascript:lang('ja-JP')">日本 - 日本語</a></dt>
							<dt><span class="flag-icon flag-icon-kr"></span>&nbsp; <a href="javascript:lang('ko-KR')">대한민국 - 한국어</a></dt>
							<br />
							<h3>Europe</h3>
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