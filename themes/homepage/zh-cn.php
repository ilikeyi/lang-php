<!DOCTYPE html>
<html>
	<head>
		<title>PHP 多国语框架官方网站</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="PHP,多国语框架 by @FengYi" />
		<meta name="keywords" content="PHP, PHP 框架, PHP框架, PHP 多国语框架, PHP多国语框架, PHP多语言, PHP多国语, 多语言, 多语言php, php网站多语言, php 切换页面语言, php 国家 语言, php实现多国语言切换, php 框架中英文切换, by @FengYi" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/lp-icon.css" />
		<link rel="shortcut icon" href="assets/logo/logo.ico" type="image/x-icon">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">欢迎</a></li>
							<li><a href="#language">可用语言</a></li>
							<li><a href="#Example">示例</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>PHP 多国语框架 v6.5</h1>
							<p>这是一个通过框架来实现的多国语程序，以多种不同的方式实现，框架设计不仅让你网站搭建起来很简单、很快、也很高效，足以满足你。</p>
							<ul class="actions">
								<li><a href="https://lang-php.com/go/lp-docs" class="button scrolly">快速指南</a></li>
								<li><a href="https://lang-php.com/go/lp-downloads" class="button primary icon solid fa-download">下载</a></li>
							</ul>
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

				<!-- Example -->
					<section id="Example" class="wrapper style3 spotlights">
						<section>
							<div class="content">
								<div class="inner">
									<h3>用户自定义选择 &amp; 目录式</h3>
									<p>首次运行后转向 'choose-country-region' 目录，选择后转向匹配的语言目录，带记忆功能。</p>
									<ul class="actions">
										<li><a href="example/01-directory" target="_blank" class="button primary fit">演示</a></li>
										<li><a href="https://lang-php.com/go/lp-docs-one" target="_blank" class="button alt fit">快速指南</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>

					<section id="ExampleExt2" class="wrapper style4 spotlights">
						<section>
							<div class="content">
								<div class="inner">
									<h3>内部加载文件 &amp; 嵌入式</h3>
									<p>自动搜索匹配目录下的文件，没有搜索到则选择默认调用文件。</p>
									<ul class="actions">
										<li><a href="example/02-embed" target="_blank" class="button primary fit">演示</a></li>
										<li><a href="https://lang-php.com/go/lp-docs-two" target="_blank" class="button alt fit">快速指南</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>

					<section id="ExampleExt3" class="wrapper style2 spotlights">
						<section>
							<div class="content">
								<div class="inner">
									<h3>读取配置文件 &amp; 加载式</h3>
									<p>自动搜索匹配的语言文件并加载后调用，支持 HTML 混排；包括：字串符、数组、参数等。</p>
									<ul class="actions">
										<li><a href="example/03-load" target="_blank" class="button primary fit">演示</a></li>
										<li><a href="https://lang-php.com/go/lp-docs-three" target="_blank" class="button alt fit">快速指南</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>

					<section id="ExampleExt4" class="wrapper style3 spotlights">
						<section>
							<div class="content">
								<div class="inner">
									<h3>保存设置 &amp; 配置式</h3>
									<p>该示例与动态读写 Cookies 不同；将配置保存到 xml 或 cfg，通过读取来选择可用的首选语言包，不接受浏览器默认语言来优先选择。</p>
									<ul class="actions">
										<li><a href="example/04-settings" target="_blank" class="button primary fit">演示</a></li>
										<li><a href="https://lang-php.com/go/lp-docs-four" target="_blank" class="button alt fit">快速指南</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>

					<section id="ExampleExt5" class="wrapper style4 spotlights">
						<section>
							<div class="content">
								<div class="inner">
									<h3>数据库 &amp; 数组式</h3>
									<p>通过 PDO 方式连接 SQL 数据库，支持 MySQL、SQLite。并使用数组（Array）功能列出所有可用的数据。</p>
									<ul class="actions">
										<li><a href="example/05-database" target="_blank" class="button primary fit">演示</a></li>
										<li><a href="https://lang-php.com/go/lp-docs-fives" target="_blank" class="button alt fit">快速指南</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>

					<section id="ExampleExt6" class="wrapper style2 spotlights">
						<section>
							<div class="content">
								<div class="inner">
									<h3>独立版 &amp; 便携式</h3>
									<p>利用 array() 语言结构建一个数组，通过函数来完成所有操作；相对其它版本，便携版是由一个文件来完成。</p>
									<ul class="actions">
										<li><a href="example/06-portable" target="_blank" class="button primary fit">演示</a></li>
										<li><a href="https://lang-php.com/go/lp-docs-six" target="_blank" class="button alt fit">快速指南</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>

				<!-- License -->
					<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>创建多国语网站</h2>
							<p>与其他框架不同，Lang-php 的设计不受限制，提供多种方案。我们认为，这些方案给您比覆盖现有规则要容易得多。通过添加的几行代码，您可以自定义多语言的外观与您的 Web 项目一起使用。</p>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
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