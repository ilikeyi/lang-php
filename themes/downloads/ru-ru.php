<!DOCTYPE html>
<html>
	<head>
		<title>Lang-php - скачать</title>
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
				<a href="./" class="title">Официальный сайт</a>
				<nav>
					<ul>
						<li><a href="https://lang-php.com/go/lp-docs">файл</a></li>
						<li><a href="https://lang-php.com/go/lp-downloads" class="active">скачать</a></li>
					</ul>
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<h1 class="major">скачать</h1>

							<!-- Text -->
								<section>
									<p>Обновление до последней версии не только заменяет старый код и получает последние решения, но если вы не обновляете, эти версии иногда устаревают и могут не иметь последних функций. Кроме того, процесс настройки варьируется от пакета к пакету и может не соответствовать официальной документации. Сказав это, оставаться в курсе - самый быстрый и простой способ.</p>
									<hr />
								</section>

							<!-- Table -->
								<section>
									<h2>PHP Многоязычная структура v6.5 Последняя версия</h2>
									<p>Опубликовано на 2020-01-02, Для получения дополнительной информации, смотреть: <a href="https://lang-php.com/go/lp-release-notes">Примечания к выпуску</a>.</p>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>файл</th>
													<th>размер</th>
													<th>верификация</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="https://lang-php.com/go/lp-zip">lang-php-latest-master.zip</a></td>
													<td>310kb</td>
													<td>[<a href="https://lang-php.com/go/lp-zip-pgp">PGP</a>] [<a href="https://lang-php.com/go/lp-zip-sha256">SHA256</a>]</td>
												</tr>
											</tbody>
											<tbody>
												<tr>
													<td><a href="https://lang-php.com/go/lp-gz">lang-php-latest-master.tar.gz</a></td>
													<td>228kb</td>
													<td>[<a href="https://lang-php.com/go/lp-gz-pgp">PGP</a>] [<a href="https://lang-php.com/go/lp-gz-sha256">SHA256</a>]</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="https://lang-php.com/go/lp-xz">lang-php-latest-master.tar.xz</a></td>
													<td>89kb</td>
													<td>[<a href="https://lang-php.com/go/lp-xz-pgp">PGP</a>] [<a href="https://lang-php.com/go/lp-xz-sha256">SHA256</a>]</td>
												</tr>
											</tbody>
										</table>
									</div>
									<hr />
								</section>

							<!-- PGP -->
								<section>
									<h2>верификация Lang-php издание</h2>
									<p>С сегодняшнего дня, все lang-php Распространения криптографически подписаны разработчиком, который выпустил их, 'Lang-php.com Security Team', Его ключ ID есть 0x2499B7924675A12B, его PGP Отпечаток пальца:</p></p>
									<pre><code>4F2B AB7B 8FA3 A53E 4DBD 9594 2499 B792 4675 A12B</code></pre>
									<p>Вы должны убедиться, что подпись соответствует загруженному вами файлу. Таким образом, вы можете быть уверены, что используемый код такой же, как и опубликованный. Вы также должны проверить дату подписи, чтобы убедиться, что вы загрузили последнюю версию.</p>

									<h4>Каждый файл поставляется с <code>.asc</code> Включили PGP Подписанный документ. Поместив их в одну папку, вы можете проверить подпись:</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: Can't check signature: public key not found</code></pre>
									<hr />

									<h4>Как видите, gpg Подскажите не зная публичного ключа. На этом этапе вы должны выполнить один из следующих шагов:</h4>
									<hr />

									<h4>1. Скачать с официального <code><a href="https://lang-php.com/go/lp-pgp">Последний открытый ключ</a></code> И импортировать ключ:</h4>
									<pre><code>https://lang-php.com/lang-php.pgp.asc</code></pre>
									<h4>Скачать и импортировать онлайн</h4>
									<pre><code>$ wget --no-check-certificate https://lang-php.com/lang-php.pgp.asc && gpg --import lang-php.pgp.asc
$ curl https://lang-php.com/lang-php.pgp.asc | gpg --import

# Или используйте командную строку для импорта ключей после ручной загрузки
$ gpg --import lang-php.pgp.asc</code></pre>
									<hr />

									<h4>2. Загрузите и импортируйте ключи с одного из серверов ключей:</h4>
									<pre><code>$ gpg --keyserver keys.gnupg.net --recv-keys 4F2BAB7B8FA3A53E4DBD95942499B7924675A12B</code></pre>

									<h4>После того, как ключ импортирован, gpg СОВЕТ: Ключ окончательно не доверен</h4>
									<pre><code>gpg: no ultimately trusted keys found</code></pre>

									<h4>Чтобы улучшить эту ситуацию, вы можете проверить правильность подписи указанного ключа, но вы все еще не можете доверять имени, используемому в ключе:</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: WARNING: This key is not certified with a trusted signature!
gpg:          There is no indication that the signature belongs to the owner." [full]</code></pre>

									<p>Проблема здесь в том, что любой может использовать это имя для публикации ключа. Вы должны убедиться, что ключ действительно принадлежит упомянутому лицу. < GNU Руководство по конфиденциальности > в "<a href="https://www.gnupg.org/gph/en/manual.html#AEN335">Проверьте другие ключи на кольце открытых ключей</a>" Эта тема рассматривается в главе. Самый надежный способ - лично встретиться с разработчиками и обменяться ключевыми отпечатками пальцев, но вы также можете положиться на сеть доверия. Таким образом, вы можете передать доверенный ключ через подписи тех, кто лично встречался с разработчиком.</p>
									<hr />

									<h4>Если ключ является доверенным, предупреждение не появляется:</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: Good signature from "Lang-php.com Security Team &lt;security@lang-php.com>&gt; [full]</code></pre>

									<h4>Если подпись недействительна (архив изменился), вы получите явную ошибку независимо от того, является ли ключ доверенным или нет:</h4>
									<pre><code>$ gpg --verify lang-php-latest-master.zip.asc

gpg: BAD signature from "Lang-php.com Security Team &lt;security@lang-php.com>&gt; [full]</code></pre>

									<h4>После этого вы можете удалить открытый ключ:</h4>
									<pre><code>$ gpg --delete-key 4F2BAB7B8FA3A53E4DBD95942499B7924675A12B</code></pre>
								</section>

						</div>
					</section>

				<!-- Language -->
					<section id="language" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>Выберите свою страну или регион.</h2>
							<h3>Северная Америка</h3>
							<dt><span class="flag-icon flag-icon-us"></span>&nbsp; <a href="javascript:lang('en-US')">United States - English</a></dt>
							<br />
							<h3>Азиатско-Тихоокеанский регион</h3>
							<dt><span class="flag-icon flag-icon-cn"></span>&nbsp; <a href="javascript:lang('zh-CN')">简体中文 - 中国</a></dt>
							<dt><span class="flag-icon flag-icon-tw"></span>&nbsp; <a href="javascript:lang('zh-TW')">繁體中文 - 中國</a></dt>
							<dt><span class="flag-icon flag-icon-jp"></span>&nbsp; <a href="javascript:lang('ja-JP')">日本 - 日本語</a></dt>
							<dt><span class="flag-icon flag-icon-kr"></span>&nbsp; <a href="javascript:lang('ko-KR')">대한민국 - 한국어</a></dt>
							<br />
							<h3>Европа</h3>
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