<?php define('BLUDIT', true); define('PATH_ROOT', __DIR__.DIRECTORY_SEPARATOR); include('php/config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php l('head description') ?>">
	<meta name="title" content="<?php l('head title') ?>">
	<title><?php l('head title') ?></title>

	<meta name="author" content="Diego Najar">

	<!-- CSS files -->
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<?php
		css('scribbler-global.css');
		css('scribbler-landing.css');
		css('bludit.css');
	?>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo DOMAIN ?>/img/favicon.png">

	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@bludit" />
	<meta name="twitter:title" content="<?php l('head title') ?>" />
	<meta name="twitter:description" content="<?php l('head description') ?>" />
	<meta name="twitter:image" content="<?php echo DEFAULT_TWITTER_CARD ?>" />

	<!-- Open Graph -->
	<meta property="og:locale" content="<?php echo $currentLanguage ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php l('head title') ?>" />
	<meta property="og:description" content="<?php l('head description') ?>" />
	<meta property="og:url" content="<?php echo $_topbar['website'] ?>" />
	<meta property="og:image" content="<?php echo DEFAULT_FACEBOOK_CARD ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:alt" content="Bludit" />

	<!-- Canonical -->
	<link rel="canonical" href="<?php echo $_topbar['website'] ?>" />

	<!-- Google hreflang tag -->
	<?php foreach ($_hreflang as $hreflang=>$href): ?>
	<link rel="alternate" hreflang="<?php echo $hreflang ?>" href="<?php echo $href ?>" />
	<?php endforeach ?>
	<link rel=”alternate” hreflang=”x-default” href=”https://www.bludit.com” />
</head>
<body>
	<nav>
		<div class="logo"></div>
		<ul class="menu">
			<div class="menu__item toggle"><span></span></div>
			<li class="menu__item"><a href="<?php echo $_topbar['themes'] ?>" class="link link--dark"><?php l('Themes') ?></a></li>
			<li class="menu__item"><a href="<?php echo $_topbar['plugins'] ?>" class="link link--dark"><?php l('Plugins') ?></a></li>
			<li class="menu__item"><a href="<?php echo $_topbar['documentation'] ?>" class="link link--dark"><?php l('Documentation') ?></a></li>
			<li class="menu__item"><a href="<?php echo $_topbar['pro'] ?>" class="link link--dark">Bludit PRO</a></li>
			<li class="menu__item"><a href="" class="link link--dark"><i class="fa fa-facebook"></i></a></li>
			<li class="menu__item"><a href="" class="link link--dark"><i class="fa fa-twitter"></i></a></li>
			<li class="menu__item"><a href="" class="link link--dark"><i class="fa fa-github"></i></a></li>
		</ul>
	</nav>
	<div class="hero">
		<h1 class="hero__title">Bludit</h1>
		<p class="hero__description"><?php l('bludit-slogan1') ?></p>
		<p class="hero__description"><?php l('bludit-slogan2') ?></p>
	</div>
	<div class="hero__terminal">
		<img src="<?php echo $_topbar['slider1'] ?>" />
	</div>
	<div class="wrapper">

		<div class="callout">
			<a href="<?php echo $version['stable']['downloadLink'] ?>" class="button--primary button--download"><i class="fa fa-download"></i> <?php l('Download') ?> v<?php echo $version['stable']['version'] ?></a>
			<a href="<?php echo $version['stable']['downloadLink'] ?>" class="button--primary button--download"><i class="fa fa-desktop"></i> <?php l('Demo') ?></a>
		</div>

		<div class="feature">
			<div class="feature__item">
				<h3 class="section__title"><?php l('Flat File') ?></h3>
				<p><?php l('bludit-feature1') ?></p>
			</div>
			<div class="feature__item">
				<h3 class="section__title"><?php l('Themes') ?></h3>
				<p><?php l('bludit-feature2') ?></p>
			</div>
			<div class="feature__item">
				<h3 class="section__title"><?php l('Plugins') ?></h3>
				<p><?php l('bludit-feature3') ?></p>
			</div>
			<div class="feature__item">
				<h3 class="section__title"><?php l('SEO friendly') ?></h3>
				<p><?php l('bludit-feature4') ?></p>
			</div>
			<div class="feature__item">
				<h3 class="section__title"><?php l('Markdown support') ?></h3>
				<p><?php l('bludit-feature5') ?></p>
			</div>
			<div class="feature__item">
				<h3 class="section__title"><?php l('GDPR Compliant') ?></h3>
				<p><?php l('bludit-feature6') ?></p>
			</div>
		</div>

		<div class="callout">
			<p><?php l('bludit-documentation') ?></p>
			<a href="https://docs.bludit.com" class="button--secondary"><i class="fa fa-book"></i> <?php l('Documentation') ?></a>
		</div>

		<div class="callout">
			<p><?php l('bludit-support') ?></p>
			<a href="https://docs.bludit.com" class="button--secondary"><i class="fa fa-support"></i> <?php l('Forum') ?></a>
			<a href="https://docs.bludit.com" class="button--secondary"><i class="fa fa-commenting-o"></i> <?php l('Chat') ?></a>
			<a href="https://docs.bludit.com" class="button--secondary"><i class="fa fa-github"></i> Github Issues</a>
		</div>

	</div>
	<div class="changelog">
		<div class="wrapper wrapper-tweets">
			<a data-height="500" class="twitter-timeline" href="https://twitter.com/bludit?ref_src=twsrc%5Etfw">Tweets by bludit</a>
			<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
	</div>
	<footer class="footer">
		<div><a href="https://www.bludit.com">English</a><a href="https://www.bludit.com/de/">Deutsch</a><a href="https://www.bludit.com/es/">Español</a><a href="https://www.bludit.com/it/">Italiano</a></div>
		<div>Bludit © 2015-18. All Rights Reserved.</div>
	</footer>
	<?php
		js('scribbler.js');
	?>
</body>
</html>