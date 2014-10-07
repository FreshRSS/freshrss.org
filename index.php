<!doctype html>
<!--[if lte IE 7]> <html class="no-js ie67 ie678" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 ie678" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]> <!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
		<meta charset="UTF-8">
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
		<title>FreshRSS, a free, self-hostable aggregator…</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="css/knacss.css" media="all">
		<link rel="stylesheet" href="css/styles.css" media="all">
		<link rel="icon" href="./favicon.ico" />
		<meta name="description" content="Official website of FreshRSS" />
</head>
<body class="mw960p center">
	
	<header role="banner" class="header grid">
		<div class="grid2-1">
			<div class="mod title">
				<h1><a href="/"><img class="logo" width="300" height="150" src="./img/freshrss_logo.png" alt="FreshRSS" /></a></h1>
				<p class="tagline"><a href="/">A free, self-hostable aggregator… probably the best! <small>(in my opinion)</small></a></p>
			</div>
			<div class="mod support">
				<p>You are awesome!</p>
				<p><a class="FlattrButton" href="http://github.com/marienfressinaud/FreshRSS">Flattr it!</a></p>
			</div>
		</div>
	</header>

	<?php
		if (file_exists('version.txt')) {
			$next_version = trim(file_get_contents('version.txt'));
	?>
	<div id="ribbon">
		<p><a target="_blank" href="https://github.com/marienfressinaud/FreshRSS/issues/327">Try the <?php echo $next_version; ?>!</a></p>
	</div>
	<?php
		}
	?>

	<div id="main" role="main" class="grid pam">

		<section class="presentation grid2-1">
			<div class="mod screenshot">
				<img width="600" height="400" src="./img/screenshot.png" alt="FreshRSS" />
			</div>
			<div class="mod download">
				<p><a class="btn important icon icon-dl" href="https://github.com/marienfressinaud/FreshRSS/archive/master.zip">Download</a><br /><small>(<a href="https://www.gnu.org/licenses/agpl-3.0.html">it's free and always will be</a>)</small></p>
				<p>or</p>
				<p><a class="btn demo" href="http://demo.freshrss.org">Give it a try</a></p>
				<p>or</p>
				<p><a href="http://doc.freshrss.org/doku.php?id=en:developers">Learn more about the source code</a></p>
			</div>
		</section>

		<section class="overview grid3">
			<div class="mod">
				<h2>Fast</h2>
				<img width="150" height="150" src="img/fast.png" alt="FreshRSS is fast" />
				<p>FreshRSS can manage +100k articles without complaining.</p>
			</div>
			<div class="mod">
				<h2>Responsive</h2>
				<img width="150" height="150" src="img/mobile.png" alt="FreshRSS works on mobile" />
				<p>Read your RSS feeds on your mobile without requiring any third-party application.</p>
			</div>
			<div class="mod">
				<h2>Self hostable</h2>
				<img width="150" height="150" src="img/server.png" alt="FreshRSS is yours" />
				<p>Your data is yours! Host your aggregator and do not depend on anyone.</p>
			</div>
		</section>

		<div class="requirements-title row"><h1>Requirements</h1></div>
		<div class="requirements line txtcenter">
			<p class="left">You are convinced by FreshRSS but you do not know what you need? Keep calm and have a look to the following table:</p>

			<table class="alternate striped-vert">
				<caption>Software basis for FreshRSS</caption>
				<thead>
					<tr>
						<th class="txtright" scope="col">Software</th>
						<th scope="col">Recommended</th>
						<th scope="col">Works also with</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="txtright">Web server</td>
						<td><strong>Apache2</strong></td>
						<td>Nginx</td>
					</tr>
					<tr>
						<td class="txtright">PHP</td>
						<td><strong>PHP 5.3.7+</strong></td>
						<td>PHP 5.2+</td>
					</tr>
					<tr>
						<td class="txtright">PHP modules</td>
						<td>
							<p>Required: <a href="http://php.net/xml">libxml</a>, <a href="http://php.net/curl">cURL</a>, <a href="http://php.net/pdo-mysql">PDO_MySQL</a>, <a href="http://fr2.php.net/pcre">PCRE</a> and <a href="http://fr2.php.net/ctype">ctype</a></p>
							<p>Recommended: <a href="http://fr2.php.net/json">JSON</a>, <a href="http://php.net/zlib">Zlib</a>, <a href="http://php.net/mbstring">mbstring</a>, <a href="http://php.net/iconv">iconv</a></p>
						</td>
						<td>

						</td>
					</tr>
					<tr>
						<td class="txtright">Database</td>
						<td><strong>MySQL 5.0.3+</strong></td>
						<td>SQLite 3.7.4+ (soon)</td>
					</tr>
					<tr>
						<td class="txtright">Web browser</td>
						<td><strong>Firefox</strong></td>
						<td>Chrome, Opera, Safari or IE 9+</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="help-title row"><h1>Are you feeling a bit confused?</h1></div>
		<section class="help grid3">
			<div class="mod">
				<h2><a href="http://doc.freshrss.org/doku.php?id=en:users">Read the documentation</a></h2>
				<a href="http://doc.freshrss.org/doku.php?id=en:users"><img width="150" height="150" src="img/doc.png" alt="documentation" /></a>
				<p>The documentation is your best friend. I guess the answer you are searching is already in!<br />(still under construction)</p>
			</div>
			<div class="mod">
				<h2><a href="https://github.com/marienfressinaud/FreshRSS/issues">Report a bug</a></h2>
				<a href="https://github.com/marienfressinaud/FreshRSS/issues"><img width="150" height="150" src="img/bug.png" alt="bug" /></a>
				<p>Oh crap! FreshRSS has crashed? Maybe the bug is already known… or maybe not. Have a look to the bug tracker and do not hesitate to open a new issue.</p>
			</div>
			<div class="mod">
				<h2><a href="mailto:dev@marienfressinaud.fr">Send me an email</a></h2>
				<a href="mailto:dev@marienfressinaud.fr"><img width="150" height="150" src="img/mail.png" alt="contact me" /></a>
				<p>You did not find any answer? Or you do not want to create an account on GitHub? Don't hesitate to contact me by email.</p>
			</div>
		</section>
	</div>

	<footer id="footer" role="contentinfo" class="grid">
		<div class="grid2-1">
			<div>
				<p>Made by <a href="http://marienfressinaud.fr">Marien Fressinaud</a> and <a href="https://github.com/marienfressinaud/FreshRSS/graphs/contributors">amazing contributors</a>.</p>
				<p>Code licensed under <a href="https://www.gnu.org/licenses/agpl-3.0.html">AGPL</a>.</p>
				<p>Hosted by <a href="http://ovh.com">OVH</a>.</p>
				<p>This site uses <a href="http://knacss.com/">KNACSS</a> and <a href="http://ftp.gnome.org/pub/GNOME/sources/gnome-icon-theme-symbolic/">GNOME icons</a>.</p>
			</div>

			<div>
				<p>FreshRSS does not correspond to your attempts?<br />
				<noscript><a href="http://alternativeto.net/software/freshrss/">Have a look to some alternatives</a></noscript>
				<span id="a2itemwidget"></span></p>
			</div>
		</div>
	</footer>

	<script type="text/javascript" async="true" src="http://api.flattr.com/js/0.6/load.js?mode=auto"></script>
	<script type="text/javascript" async="true" src="scripts/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
	function init_widget() {
		if (!window.$) {
			if (window.console) {
				console.log('Waiting for JS…');
			}
			window.setTimeout(init_widget, 100);
			return;
		}

		$(function () {
			$.getJSON('http://api.alternativeto.net/software/freshrss/widget/blue/?jsoncallback=?',
				function (json) {
					//doucment.write(json.Widget);
					$('#a2itemwidget').html(json.Widget);
				}
			);
		});
	}
	init_widget();
</script>
</body>
</html>
