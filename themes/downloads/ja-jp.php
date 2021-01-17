<!DOCTYPE html>
<html>
	<head>
		<title>Lang-php - ダウンロードする</title>
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
				<a href="./" class="title">公式ホームページ</a>
				<nav>
					<ul>
						<li><a href="https://lang-php.com/go/lp-docs">ドキュメンテーション</a></li>
						<li><a href="https://lang-php.com/go/lp-downloads" class="active">ダウンロードする</a></li>
					</ul>
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<h1 class="major">ダウンロードする</h1>

							<!-- Text -->
								<section>
									<p>最新バージョンにアップグレードすると、古いコードが置き換えられて最新のソリューションが得られるだけでなく、更新しないと、これらのバージョンが古くなり、最新の機能が不足する場合があります。 また、構成プロセスはパッケージごとに異なり、公式のドキュメントに従っていない場合があります。 とはいえ、最新の状態を維持することは、最も速くて簡単な方法です。</p>
									<hr />
								</section>

							<!-- Table -->
								<section>
									<h2>PHP 多言語フレームワーク v6.5 最新バージョン</h2>
									<p>に投稿 2020-01-02, 詳細については、以下を参照してください: <a href="https://lang-php.com/go/lp-release-notes">リリースノート</a>。</p>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>ファイル</th>
													<th>大きさ</th>
													<th>確認する</th>
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
									<h2>確認する Lang-php バージョン</h2>
									<p>これから, すべて lang-php リリースは、リリースされた開発者によって暗号で署名されています, 開発者は 'Lang-php.com Security Team', 彼のキー ID は 0x2499B7924675A12B, その PGP 指紋は次のとおりです:</p></p>
									<pre><code>4F2B AB7B 8FA3 A53E 4DBD 9594 2499 B792 4675 A12B</code></pre>
									<p>署名がダウンロードしたファイルと一致することを確認する必要があります。 これにより、使用するコードが投稿されたものと同じであることを確認できます。 また、署名の日付を確認して、最新バージョンをダウンロードしたことを確認する必要があります。</p>

									<h4>すべてのファイルが付属しています <code>.asc</code> 持っている PGP 署名済み文書。 それらを同じフォルダーに入れた後、署名を検証できます:</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: Can't check signature: public key not found</code></pre>
									<hr />

									<h4>ご覧のとおり, 公開鍵を知らないプロンプト。 この時点で、次のいずれかの手順を実行する必要があります:</h4>
									<hr />

									<h4>1. 公式からダウンロード <code><a href="https://lang-php.com/go/lp-pgp">最新の公開鍵</a></code> キーをインポートします:</h4>
									<pre><code>https://lang-php.com/lang-php.pgp.asc</code></pre>
									<h4>オンラインでダウンロードしてインポート</h4>
									<pre><code>$ wget --no-check-certificate https://lang-php.com/lang-php.pgp.asc && gpg --import lang-php.pgp.asc
$ curl https://lang-php.com/lang-php.pgp.asc | gpg --import

# または、手動でダウンロードした後、コマンドラインを使用してキーをインポートします
$ gpg --import lang-php.pgp.asc</code></pre>
									<hr />

									<h4>2. キーサーバーの1つからキーをダウンロードしてインポートします:</h4>
									<pre><code>$ gpg --keyserver keys.gnupg.net --recv-keys 4F2BAB7B8FA3A53E4DBD95942499B7924675A12B</code></pre>

									<h4>キーがインポートされた後, gpg ヒント：最終的に信頼できるキーはありませんでした</h4>
									<pre><code>gpg: no ultimately trusted keys found</code></pre>

									<h4>この状況を改善するには、指定されたキーの署名が正しいことを確認できますが、キーで使用されている名前を信頼することはできません:</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: WARNING: This key is not certified with a trusted signature!
gpg:          There is no indication that the signature belongs to the owner." [full]</code></pre>

									<p>ここでの問題は、誰でもその名前を使用してキーを公開できることです。 キーが実際に言及された人によって所有されていることを確認する必要があります。《 GNU プライバシーマニュアル 》で“<a href="https://www.gnupg.org/gph/en/manual.html#AEN335">公開キーリング上の他のキーを確認する</a>”このトピックについては、章で説明します。 最も信頼できる方法は、開発者と直接会って鍵の指紋を交換することですが、信頼のネットワークに依存することもできます。 このようにして、開発者に直接会った他の人の署名を通して信頼できるキーを渡すことができます。</p>
									<hr />

									<h4>キーが信頼されると、警告は発生しません:</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: Good signature from "Lang-php.com Security Team &lt;security@lang-php.com>&gt; [full]</code></pre>

									<h4>署名が無効である（アーカイブが変更されている）場合、キーが信頼されているかどうかにかかわらず、明確なエラーが表示されます:</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: BAD signature from "Lang-php.com Security Team &lt;security@lang-php.com>&gt; [full]</code></pre>

									<h4>その後、公開鍵を削除できます:</h4>
									<pre><code>$ gpg --delete-key 4F2BAB7B8FA3A53E4DBD95942499B7924675A12B</code></pre>
								</section>

						</div>
					</section>

				<!-- Language -->
					<section id="language" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>国または地域を選択します。</h2>
							<h3>北アメリカ</h3>
							<dt><span class="flag-icon flag-icon-us"></span>&nbsp; <a href="javascript:lang('en-US')">United States - English</a></dt>
							<br />
							<h3>アジア太平洋</h3>
							<dt><span class="flag-icon flag-icon-cn"></span>&nbsp; <a href="javascript:lang('zh-CN')">简体中文 - 中国</a></dt>
							<dt><span class="flag-icon flag-icon-tw"></span>&nbsp; <a href="javascript:lang('zh-TW')">繁體中文 - 中國</a></dt>
							<dt><span class="flag-icon flag-icon-jp"></span>&nbsp; <a href="javascript:lang('ja-JP')">日本 - 日本語</a></dt>
							<dt><span class="flag-icon flag-icon-kr"></span>&nbsp; <a href="javascript:lang('ko-KR')">대한민국 - 한국어</a></dt>
							<br />
							<h3>ヨーロッパ</h3>
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