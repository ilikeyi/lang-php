<!DOCTYPE html>
<html>
	<head>
		<title>Lang-php - 下載</title>
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
				<a href="./" class="title">官方主頁</a>
				<nav>
					<ul>
						<li><a href="https://lang-php.com/go/lp-docs">文檔</a></li>
						<li><a href="https://lang-php.com/go/lp-downloads" class="active">下載</a></li>
					</ul>
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<h1 class="major">下載</h1>

							<!-- Text -->
								<section>
									<p>升級到最新版，不僅能替換舊代碼和獲得最新解決方案；如果您未更新，這些版本有時會有些過時，因此可能會缺少最新功能。另外，配置過程因軟件包而異，並且可能不遵守官方文檔。話雖如此，所以保持更新是最快、最簡單的方法。</p>
									<hr />
								</section>

							<!-- Table -->
								<section>
									<h2>PHP 多國語框架 v6.5 最新版</h2>
									<p>發佈於 2020-01-02，有關詳細信息，請參閱：<a href="https://lang-php.com/go/lp-release-notes">發行說明</a>。</p>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>文件</th>
													<th>大小</th>
													<th>驗證</th>
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
									<h2>驗證 Lang-php 版本</h2>
									<p>從即日起，所有 lang-php 發行版均由發布的開發人員進行加密簽名，該開發人員都是 'Lang-php.com Security Team'，他的密钥 ID 为 0x2499B7924675A12B，他的 PGP 指紋為：</p></p>
									<pre><code>4F2B AB7B 8FA3 A53E 4DBD 9594 2499 B792 4675 A12B</code></pre>
									<p>您應該驗證簽名是否與您下載的檔案匹配。這樣，您可以確保使用的代碼與發布的相同。您還應該驗證簽名的日期，以確保您下載了最新版本。</p>

									<h4>每個檔案都隨附 <code>.asc</code> 有包含 PGP 簽名的文件。將它們放在同一個文件夾中後，即可驗證簽名：</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: Can't check signature: public key not found</code></pre>
									<hr />

									<h4>如您所見，gpg 提示不知道公鑰。此時，您應該執行以下步驟之一：</h4>
									<hr />

									<h4>1. 從官方下載 <code><a href="https://lang-php.com/go/lp-pgp">最新公共密鑰</a></code> 並導入密鑰：</h4>
									<pre><code>https://lang-php.com/lang-php.pgp.asc</code></pre>
									<h4>通過在線下載並導入</h4>
									<pre><code>$ wget --no-check-certificate https://lang-php.com/lang-php.pgp.asc && gpg --import lang-php.pgp.asc
$ curl https://lang-php.com/lang-php.pgp.asc | gpg --import

# 或手動下載後使用命令行導入密鑰
$ gpg --import lang-php.pgp.asc</code></pre>
									<hr />

									<h4>2. 從其中一台密鑰服務器下載並導入密鑰：</h4>
									<pre><code>$ gpg --keyserver keys.gnupg.net --recv-keys 4F2BAB7B8FA3A53E4DBD95942499B7924675A12B</code></pre>

									<h4>導入密鑰後，gpg 提示：未找到最終信任的密鑰</h4>
									<pre><code>gpg: no ultimately trusted keys found</code></pre>

									<h4>為改善這種情況，您可以驗證指定密鑰的簽名正確，但是您仍然不能信任密鑰中使用的名稱：</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: WARNING: This key is not certified with a trusted signature!
gpg:          There is no indication that the signature belongs to the owner." [full]</code></pre>

									<p>這裡的問題是任何人都可以使用該名稱來發布密鑰。您需要確保密鑰實際上由所提及的人擁有。 《 GNU 隱私手冊》在“<a href="https://www.gnupg.org/gph/en/manual.html#AEN335">驗證公共密鑰環上的其他密鑰</a>”一章中涵蓋了該主題。最可靠的方法是親自與開發人員會面並交換密鑰指紋，但是，您也可以依靠信任網絡。這樣，您可以通過親身遇到開發人員的其他人的簽名來傳遞信任的密鑰。</p>
									<hr />

									<h4>一旦密鑰被信任，就不會發生警告：</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: Good signature from "Lang-php.com Security Team &lt;security@lang-php.com>&gt; [full]</code></pre>

									<h4>如果簽名無效（存檔已更改），則無論密鑰是否受信任，您都會得到一個明確的錯誤：</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: BAD signature from "Lang-php.com Security Team &lt;security@lang-php.com>&gt; [full]</code></pre>

									<h4>之後，您可以刪除公鑰：</h4>
									<pre><code>$ gpg --delete-key 4F2BAB7B8FA3A53E4DBD95942499B7924675A12B</code></pre>
								</section>

						</div>
					</section>

				<!-- Language -->
					<section id="language" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>選擇您的國家或地區。</h2>
							<h3>北美洲</h3>
							<dt><span class="flag-icon flag-icon-us"></span>&nbsp; <a href="javascript:lang('en-US')">United States - English</a></dt>
							<br />
							<h3>亞太地區</h3>
							<dt><span class="flag-icon flag-icon-cn"></span>&nbsp; <a href="javascript:lang('zh-CN')">简体中文 - 中国</a></dt>
							<dt><span class="flag-icon flag-icon-tw"></span>&nbsp; <a href="javascript:lang('zh-TW')">繁體中文 - 中國</a></dt>
							<dt><span class="flag-icon flag-icon-jp"></span>&nbsp; <a href="javascript:lang('ja-JP')">日本 - 日本語</a></dt>
							<dt><span class="flag-icon flag-icon-kr"></span>&nbsp; <a href="javascript:lang('ko-KR')">대한민국 - 한국어</a></dt>
							<br />
							<h3>歐洲</h3>
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