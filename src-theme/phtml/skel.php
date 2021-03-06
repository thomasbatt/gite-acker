<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
	    <meta charset="UTF-8">
	    <title><?php bloginfo('name') ?> - Gîtes de France</title>
		<link href="<?php bloginfo('template_url'); ?>/img/logo.png?v=@version@" rel="shortcut icon">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1,user-scalable=no">

	    <?php require('components/seo.php') ?>

		<style type="text/css">@@include( '../../wordpress/wp-content/themes/gite-acker-theme/css/ldf.min.css')</style>

		@@if (develop === true) {
		<link rel='stylesheet' href='<?php bloginfo('template_url')?>/css/vendors.min.css?v=@version@'/>}
		<link rel='stylesheet' href='<?php bloginfo('template_url')?>/css/website.min.css?v=@version@'/>
	</head>

	<body id="body">
		<?php require('components/preloader.php'); ?>
		<?php require('layout/header.php'); ?>
		<?php require('content/content-'.$content['name'].'.php'); ?>
		<?php require('components/mentions-legales.php'); ?>
		<?php require('layout/footer.php'); ?>
	</body>

	@@if (develop === true) {
	<script type='text/javascript' src='<?php bloginfo('template_url');?>/js/vendors.min.js?v=@version@'></script>}
	<script type='text/javascript' src='<?php bloginfo('template_url');?>/js/website.min.js?v=@version@'></script>
</html>