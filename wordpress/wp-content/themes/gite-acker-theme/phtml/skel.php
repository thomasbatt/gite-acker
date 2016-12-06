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
html {
  font-size: 10px; }
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

.header {
  z-index: 40;
  position: relative; }
  .header ul {
    position: fixed;
    list-style: none;
    font-family: 'Trebuchet MS';
    font-size: 1.7rem;
    text-align: center;
    padding: 10px;
    width: 100%;
    background-color: #171717;
    margin: 0; }
  .header li {
    position: relative;
    display: inline; }
  .header li a {
    text-decoration: none;
    color: #fff;
    display: inline-block;
    padding: 10px; }
  .header span {
    display: block;
    width: calc(100% - 23px);
    height: 2px;
    background: #5eb1ff;
    position: absolute;
    left: 10px;
    bottom: -10px; }
  .header li a:hover {
    color: #5eb1ff; }
  .header li a:hover ~ span {
    animation: ul 0.3s ease-out;
    background: #fff; }

@keyframes ul {
  0% {
    width: 0; }
  100% {
    width: calc(100% - 23px); } }
</style>

		
		<link rel='stylesheet' href='<?php bloginfo('template_url')?>/css/vendors.min.css?v=1ac6555f22e8'/>
		<link rel='stylesheet' href='<?php bloginfo('template_url')?>/css/website.min.css?v=1ac6555f22e8'/>
	</head>

	<body>
		<?php require('components/preloader.php'); ?>
		<?php require('layout/header.php'); ?>
		<?php require('content/content-'.$content['name'].'.php'); ?>
		<?php require('layout/footer.php'); ?>
	</body>

	
	<script type='text/javascript' src='<?php bloginfo('template_url');?>/js/vendors.min.js?v=1ac6555f22e8'></script>
	<script type='text/javascript' src='<?php bloginfo('template_url');?>/js/website.min.js?v=1ac6555f22e8'></script>
</html>