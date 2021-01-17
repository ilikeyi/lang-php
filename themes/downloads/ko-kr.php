<!DOCTYPE html>
<html>
	<head>
		<title>Lang-php - 다운로드</title>
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
				<a href="./" class="title">공식 홈페이지</a>
				<nav>
					<ul>
						<li><a href="https://lang-php.com/go/lp-docs">문서</a></li>
						<li><a href="https://lang-php.com/go/lp-downloads" class="active">다운로드</a></li>
					</ul>
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<h1 class="major">다운로드</h1>

							<!-- Text -->
								<section>
									<p>최신 버전으로 업그레이드하면 이전 코드가 교체 될뿐만 아니라 최신 솔루션을 얻을 수 있습니다. 업데이트하지 않으면 이러한 버전이 오래되어 최신 기능이 없을 수 있습니다. 또한 구성 프로세스는 패키지마다 다르며 공식 문서를 따르지 않을 수 있습니다. 그러나 업데이트 상태를 유지하는 것이 가장 빠르고 쉬운 방법입니다.</p>
									<hr />
								</section>

							<!-- Table -->
								<section>
									<h2>PHP 다국어 프레임 워크 v6.5 최신 버전</h2>
									<p>에 게시 2020-01-02, 자세한 내용은, 참조: <a href="https://lang-php.com/go/lp-release-notes">릴리즈 노트</a>.</p>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>파일</th>
													<th>사이즈</th>
													<th>확인</th>
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
									<h2>확인 Lang-php 버전</h2>
									<p>오늘부터, 모두 lang-php 릴리스는 릴리스 된 개발자가 암호화하여 서명합니다, 개발자들은 'Lang-php.com Security Team', 그의 열쇠 ID 대한, 그것 PGP 지문은: </p></p>
									<pre><code>4F2B AB7B 8FA3 A53E 4DBD 9594 2499 B792 4675 A12B</code></pre>
									<p>서명이 다운로드 한 파일과 일치하는지 확인해야합니다. 이렇게하면 사용 된 코드가 게시 된 코드와 동일한 지 확인할 수 있습니다. 또한 서명 날짜를 확인하여 최신 버전을 다운로드했는지 확인해야합니다.</p>

									<h4>모든 파일은 <code>.asc</code> 가지고 PGP 서명 된 문서. 동일한 폴더에 넣은 후 서명을 확인할 수 있습니다: </h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: Can't check signature: public key not found</code></pre>
									<hr />

									<h4>보다시피, gpg 공개 키를 모르는 프롬프트. 이 시점에서 다음 단계 중 하나를 수행해야합니다: </h4>
									<hr />

									<h4>1. 공식에서 다운로드 <code><a href="https://lang-php.com/go/lp-pgp">최신 공개 키</a></code> 그리고 키를 가져옵니다: </h4>
									<pre><code>https://lang-php.com/lang-php.pgp.asc</code></pre>
									<h4>온라인 다운로드 및 가져 오기</h4>
									<pre><code>$ wget --no-check-certificate https://lang-php.com/lang-php.pgp.asc && gpg --import lang-php.pgp.asc
$ curl https://lang-php.com/lang-php.pgp.asc | gpg --import

# 또는 수동 다운로드 후 명령 행을 사용하여 키를 가져 오십시오.
$ gpg --import lang-php.pgp.asc</code></pre>
									<hr />

									<h4>2. 키 서버 중 하나에서 키를 다운로드하고 가져옵니다: </h4>
									<pre><code>$ gpg --keyserver keys.gnupg.net --recv-keys 4F2BAB7B8FA3A53E4DBD95942499B7924675A12B</code></pre>

									<h4>키를 가져온 후, gpg 팁 : 마지막으로 신뢰 된 키가 없습니다</h4>
									<pre><code>gpg: no ultimately trusted keys found</code></pre>

									<h4>이 상황을 개선하기 위해 지정된 키의 서명이 올바른지 확인할 수 있지만 여전히 키에 사용 된 이름을 신뢰할 수 없습니다:</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: WARNING: This key is not certified with a trusted signature!
gpg:          There is no indication that the signature belongs to the owner." [full]</code></pre>

									<p>여기서 문제는 누구나 해당 이름을 사용하여 키를 게시 할 수 있다는 것입니다. 언급 한 사람이 키를 실제로 소유하고 있는지 확인해야합니다. 《 GNU 프라이버시 매뉴얼 》 안으로“<a href="https://www.gnupg.org/gph/en/manual.html#AEN335">공개 키 링의 다른 키 확인</a>”이 주제는 장에서 다룹니다. 가장 신뢰할 수있는 방법은 개발자를 직접 만나고 주요 지문을 교환하는 것이지만 신뢰 네트워크에 의존 할 수도 있습니다. 이런 식으로 개발자를 직접 만난 다른 사람들의 서명을 통해 신뢰할 수있는 키를 전달할 수 있습니다.</p>
									<hr />

									<h4>키를 신뢰하면 경고가 발생하지 않습니다.</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: Good signature from "Lang-php.com Security Team &lt;security@lang-php.com>&gt; [full]</code></pre>

									<h4>서명이 유효하지 않은 경우 (아카이브가 변경됨) 키의 신뢰 여부에 대한 명확한 오류가 발생합니다.</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: BAD signature from "Lang-php.com Security Team &lt;security@lang-php.com>&gt; [full]</code></pre>

									<h4>그런 다음 공개 키를 삭제할 수 있습니다:</h4>
									<pre><code>$ gpg --delete-key 4F2BAB7B8FA3A53E4DBD95942499B7924675A12B</code></pre>
								</section>

						</div>
					</section>

				<!-- Language -->
					<section id="language" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>국가 또는 지역을 선택하십시오.</h2>
							<h3>북아메리카</h3>
							<dt><span class="flag-icon flag-icon-us"></span>&nbsp; <a href="javascript:lang('en-US')">United States - English</a></dt>
							<br />
							<h3>아시아 태평양</h3>
							<dt><span class="flag-icon flag-icon-cn"></span>&nbsp; <a href="javascript:lang('zh-CN')">简体中文 - 中国</a></dt>
							<dt><span class="flag-icon flag-icon-tw"></span>&nbsp; <a href="javascript:lang('zh-TW')">繁體中文 - 中國</a></dt>
							<dt><span class="flag-icon flag-icon-jp"></span>&nbsp; <a href="javascript:lang('ja-JP')">日本 - 日本語</a></dt>
							<dt><span class="flag-icon flag-icon-kr"></span>&nbsp; <a href="javascript:lang('ko-KR')">대한민국 - 한국어</a></dt>
							<br />
							<h3>유럽</h3>
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