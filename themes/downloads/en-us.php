<!DOCTYPE html>
<html>
	<head>
		<title>Lang-php - Downloads</title>
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
							<h1 class="major">Downloads</h1>

							<!-- Text -->
								<section>
									<p>Upgrading to the latest version not only replaces old code and gets the latest solutions; if you do n’t update, these versions are sometimes outdated and may lack the latest features. Also, the configuration process varies from package to package and may not follow official documentation. Having said that, staying updated is the fastest and easiest way.</p>
									<hr />
								</section>

							<!-- Table -->
								<section>
									<h2>PHP Multilingual Framework v6.5 Latest Version</h2>
									<p>Released 2020-01-02, see <a href="https://lang-php.com/go/lp-release-notes">release notes</a> for details.</p>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>File</th>
													<th>Size</th>
													<th>Verification</th>
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
									<h2>Verifying Lang-php releases</h2>
									<p>Starting with the v6.5 version number, all lang-php distributions are cryptographically signed by the released developer, who is a 'Lang-php.com Security Team', His key ID is 0x2499B7924675A12B, his PGP fingerprint is:</p></p>
									<pre><code>4F2B AB7B 8FA3 A53E 4DBD 9594 2499 B792 4675 A12B</code></pre>
									<p>You should verify that the signature matches the file you downloaded. This way, you can be sure that the code used is the same as the one posted. You should also verify the date of the signature to ensure that you downloaded the latest version.</p>

									<h4>Every file comes with <code>.asc</code> There are files containing PGP signatures. After putting them in the same folder, you can verify the signature:</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: Can't check signature: public key not found</code></pre>
									<hr />

									<h4>As you can see, gpg prompts that it does not know the public key. At this point, you should perform one of the following steps:</h4>
									<hr />

									<h4>1. Download from official <code><a href="https://lang-php.com/go/lp-pgp">Latest public key</a></code> and import the key:</h4>
									<pre><code>https://lang-php.com/lang-php.pgp.asc</code></pre>
									<h4>Download online and import directly</h4>
									<pre><code>$ wget --no-check-certificate https://lang-php.com/lang-php.pgp.asc && gpg --import lang-php.pgp.asc
$ curl https://lang-php.com/lang-php.pgp.asc | gpg --import

# Or use the command line to import the keys after manual download
$ gpg --import lang-php.pgp.asc</code></pre>
									<hr />

									<h4>2. Download and import keys from one of the key servers:</h4>
									<pre><code>$ gpg --keyserver keys.gnupg.net --recv-keys 4F2BAB7B8FA3A53E4DBD95942499B7924675A12B</code></pre>

									<h4>Gpg prompts after importing keys: no ultimately trusted keys found</h4>
									<pre><code>gpg: no ultimately trusted keys found</code></pre>

									<h4>To improve this situation, you can verify that the signature of the specified key is correct, but you still cannot trust the name used in the key:</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: WARNING: This key is not certified with a trusted signature!
gpg:          There is no indication that the signature belongs to the owner." [full]</code></pre>

									<p>The problem here is that anyone can use that name to publish the key. You need to ensure that the key is actually owned by the person mentioned. The GNU Privacy Manual is in the "<a href="https://www.gnupg.org/gph/en/manual.html#AEN335">Verify other keys on the public key ring</a>" Covers this topic. The most reliable way is to meet with the developers in person and exchange key fingerprints, but you can also rely on a network of trust. This way, you can do so by signing from someone else who has encountered the developer in person Pass the trusted key.</p>
									<hr />

									<h4>Once the key is trusted, no warning occurs:</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: Good signature from "Lang-php.com Security Team &lt;security@lang-php.com>&gt; [full]</code></pre>

									<h4>If the signature is invalid (the archive has changed), you get a clear error whether the key is trusted or not:</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: BAD signature from "Lang-php.com Security Team &lt;security@lang-php.com&gt;" [full]</code></pre>

									<h4>After that, you can delete the public key:</h4>
									<pre><code>$ gpg --delete-key 4F2BAB7B8FA3A53E4DBD95942499B7924675A12B</code></pre>
								</section>

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