<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
	    <meta charset="UTF-8">
	    <title><?php bloginfo('name') ?> - <?php the_title(); ?></title>
		<link href="<?php bloginfo('template_url'); ?>/img/Orque.png?v=@version@" rel="shortcut icon">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1,user-scalable=no">

	    <?php require('components/seo.php') ?>

		<style type="text/css">/*========================================
=            	PRELOADING
			LIGNE DE FLOTTAISON          =
========================================*/
html body {
  overflow: hidden;
  margin: 0; }
  html body header, html body #page, html body footer {
    display: block;
    opacity: 0; }
  html body .transition {
    transition: all 0.5s; }
  html body .display {
    display: block !important; }
  html body .no-display {
    opacity: 0 !important;
    transition: 1s opacity;
    display: none !important; }
</style>

		
		<link rel='stylesheet' href='<?php bloginfo('template_url')?>/css/vendors.min.css?v=1ab13be27758'/>
		<link rel='stylesheet' href='<?php bloginfo('template_url')?>/css/website.min.css?v=1ab13be27758'/>
	</head>

	<body>
		<?php require('components/preloader.php'); ?>
		<?php require('layout/header.php'); ?>
		<?php require('content/content-'.$content['name'].'.php'); ?>
		<?php require('layout/footer.php'); ?>
	</body>

	
	<script type='text/javascript' src='<?php bloginfo('template_url');?>/js/vendors.min.js?v=1ab13be27758'></script>
	<script type='text/javascript' src='<?php bloginfo('template_url');?>/js/website.min.js?v=1ab13be27758'></script>
</html>