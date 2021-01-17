<!DOCTYPE html>
<html>
	<head>
		<title>Lang-php - 下载</title>
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
						<li><a href="https://lang-php.com/go/lp-docs">文档</a></li>
						<li><a href="https://lang-php.com/go/lp-downloads" class="active">下载</a></li>
					</ul>
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<h1 class="major">下载</h1>

							<!-- Text -->
								<section>
									<p>升级到最新版，不仅能替换旧代码和获得最新解决方案；如果您未更新，这些版本有时会有些过时，因此可能会缺少最新功能。另外，配置过程因软件包而异，并且可能不遵守官方文档。话虽如此，所以保持更新是最快、最简单的方法。</p>
									<hr />
								</section>

							<!-- Table -->
								<section>
									<h2>PHP 多国语框架 v6.5 最新版</h2>
									<p>发布于 2020-01-02，有关详细信息，请参阅：<a href="https://lang-php.com/go/lp-release-notes">发行说明</a>。</p>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>文件</th>
													<th>大小</th>
													<th>验证</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="lang-php-latest-master.zip">lang-php-latest-master.zip</a></td>
													<td>310kb</td>
													<td>[<a href="lang-php-latest-master.zip.asc">PGP</a>] [<a href="lang-php-latest-master.zip.sha256">SHA256</a>]</td>
												</tr>
											</tbody>
											<tbody>
												<tr>
													<td><a href="lang-php-latest-master.tar.gz">lang-php-latest-master.tar.gz</a></td>
													<td>228kb</td>
													<td>[<a href="lang-php-latest-master.tar.gz.asc">PGP</a>] [<a href="lang-php-latest-master.tar.gz.sha256">SHA256</a>]</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="lang-php-latest-master.tar.xz">lang-php-latest-master.tar.xz</a></td>
													<td>89kb</td>
													<td>[<a href="lang-php-latest-master.tar.xz.asc">PGP</a>] [<a href="lang-php-latest-master.tar.xz.sha256">SHA256</a>]</td>
												</tr>
											</tbody>
										</table>
									</div>
									<hr />
								</section>

							<!-- PGP -->
								<section>
									<h2>验证 Lang-php 版本</h2>
									<p>从即日起，所有 lang-php 发行版均由发布的开发人员进行加密签名，该开发人员都是 'Lang-php.com Security Team'，他的密钥 ID 为 0x2499B7924675A12B，他的 PGP 指纹为：</p></p>
									<pre><code>4F2B AB7B 8FA3 A53E 4DBD 9594 2499 B792 4675 A12B</code></pre>
									<p>您应该验证签名是否与您下载的档案匹配。这样，您可以确保使用的代码与发布的相同。您还应该验证签名的日期，以确保您下载了最新版本。</p>

									<h4>每个档案都随附 <code>.asc</code> 有包含 PGP 签名的文件。将它们放在同一个文件夹中后，即可验证签名：</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: Can't check signature: public key not found</code></pre>
									<hr />

									<h4>如您所见，gpg 提示不知道公钥。此时，您应该执行以下步骤之一：</h4>
									<hr />

									<h4>1. 从官方下载 <code><a href="https://lang-php.com/go/lp-pgp">最新公共密钥</a></code> 并导入密钥：</h4>
									<pre><code>https://lang-php.com/lang-php.pgp.asc</code></pre>
									<h4>通过在线下载并导入</h4>
									<pre><code>$ wget --no-check-certificate https://lang-php.com/lang-php.pgp.asc && gpg --import lang-php.pgp.asc
$ curl https://lang-php.com/lang-php.pgp.asc | gpg --import

# 或手动下载后使用命令行导入密钥
$ gpg --import lang-php.pgp.asc</code></pre>
									<hr />

									<h4>2. 从其中一台密钥服务器下载并导入密钥：</h4>
									<pre><code>$ gpg --keyserver keys.gnupg.net --recv-keys 4F2BAB7B8FA3A53E4DBD95942499B7924675A12B</code></pre>

									<h4>导入密钥后，gpg 提示：未找到最终信任的密钥</h4>
									<pre><code>gpg: no ultimately trusted keys found</code></pre>

									<h4>为改善这种情况，您可以验证指定密钥的签名正确，但是您仍然不能信任密钥中使用的名称：</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: WARNING: This key is not certified with a trusted signature!
gpg:          There is no indication that the signature belongs to the owner." [full]</code></pre>

									<p>这里的问题是任何人都可以使用该名称来发布密钥。您需要确保密钥实际上由所提及的人拥有。《 GNU 隐私手册》在“<a href="https://www.gnupg.org/gph/en/manual.html#AEN335">验证公共密钥环上的其他密钥</a>”一章中涵盖了该主题。最可靠的方法是亲自与开发人员会面并交换密钥指纹，但是，您也可以依靠信任网络。这样，您可以通过亲身遇到开发人员的其他人的签名来传递信任的密钥。</p>
									<hr />

									<h4>一旦密钥被信任，就不会发生警告：</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: Good signature from "Lang-php.com Security Team &lt;security@lang-php.com>&gt; [full]</code></pre>

									<h4>如果签名无效（存档已更改），则无论密钥是否受信任，您都会得到一个明确的错误：</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: BAD signature from "Lang-php.com Security Team &lt;security@lang-php.com>&gt; [full]</code></pre>

									<h4>之后，您可以删除公钥：</h4>
									<pre><code>$ gpg --delete-key 4F2BAB7B8FA3A53E4DBD95942499B7924675A12B</code></pre>
								</section>

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