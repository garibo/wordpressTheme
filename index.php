<!doctype html>

<html <?php language_attributes(); ?> >
<head>
	<meta content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>">
	<title> <?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url') ?>">
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url') ?>">
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url') ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory')/favicon.ico ?>">
</head>
<body>

	<div id="wrapper">
		<div class="container" class="group">
			<header class="group">
				<h1><img src="<?php print IMAGES; ?>/logo.jpg" alt="<?php bloginfo('name'); ?>"></h1>
			</header>
			<?php get_search_form(); ?>
			<?php wp_nav_menu(array('menu' => 'Main', 'container'=>'nav')); ?>
		</div>
	</div>

	<footer class="group">
		<p>
			<?php bloginfo('name'); ?> - Todos los derechos reservaods.
		</p>
	</footer>
	<?php wp_footer(); ?>

</body>
</html>