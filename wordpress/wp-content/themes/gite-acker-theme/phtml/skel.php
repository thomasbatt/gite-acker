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
* {
  box-sizing: border-box; }

html {
  font-size: 10px; }
  html body {
    overflow: hidden;
    margin: 0;
    font-family: 'Rubik'; }
    html body a:hover {
      color: #004988; }
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
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  padding: 1% 10%; }
  .header:after {
    content: "";
    clear: both; }
  .header .header-logo a {
    position: relative;
    top: -20px;
    display: inline-block; }
    .header .header-logo a svg {
      width: 220px;
      height: 180px;
      cursor: pointer;
      stroke: #FFF;
      stroke-dasharray: 1000;
      stroke-dashoffset: 1000;
      animation-name: drawVectorHeader;
      animation-duration: 3s;
      animation-iteration-count: 1;
      animation-fill-mode: forwards;
      animation-timing-function: linear; }
  .header .header-links {
    display: inline-block;
    position: absolute;
    right: 10%;
    top: 25%; }
    .header .header-links ul {
      display: block;
      list-style: none;
      font-size: 2rem;
      padding: 0;
      margin: 0; }
      .header .header-links ul li {
        display: inline-block; }
        .header .header-links ul li a {
          display: inline-block;
          margin: 10px;
          padding: 8px 20px;
          text-decoration: none;
          color: #fff;
          border: 2px solid #FFF;
          border-radius: 3px;
          transition-duration: 0.2s; }
          .header .header-links ul li a:hover {
            transform: scale(1.1); }

@keyframes drawVectorHeader {
  0% {
    fill-opacity: 0; }
  70% {
    fill-opacity: 0;
    stroke-dasharray: 0;
    stroke-dashoffset: 0; }
  100% {
    fill-opacity: 1;
    stroke-dasharray: 0;
    stroke-dashoffset: 0; } }

@keyframes drawVectorHome {
  0% {
    fill-opacity: 0; }
  70% {
    fill-opacity: 0;
    stroke-dasharray: 0;
    stroke-dashoffset: 0; }
  100% {
    fill-opacity: 1;
    stroke-dasharray: 0;
    stroke-dashoffset: 0; } }

@keyframes moveRoll {
  0% {
    fill-opacity: 1; }
  100% {
    fill-opacity: 0;
    transform: translateY(10px); } }

@media screen and (max-width: 1030px) {
  #page .content-wrapper {
    font-size: 2vw; }
  #page #about .content-title {
    font-size: 5vh; }
  #page #about .content-subtitle {
    padding: 20px;
    width: 100%; }
    #page #about .content-subtitle .wrapper-images {
      padding: 10px 5px 5px 0px; }
      #page #about .content-subtitle .wrapper-images article {
        padding-left: 5px; } }

@media screen and (max-width: 640px) {
  .header {
    padding: 0%; }
    .header .header-links {
      top: 20%;
      right: 2%; }
  .footer {
    display: none;
    /*section{
			font-size: 1.5rem;
			.footer{
				&-meta-links{
					width: 75%;
				}
				&-admin-links{
					width: 25%;
				}
			}
		}*/ }
  #page .content-wrapper {
    font-size: 3.5vw; }
  #page .scrolldown {
    bottom: 55px; }
    #page .scrolldown svg {
      width: 100px; }
      #page .scrolldown svg path[id=roll], #page .scrolldown svg path {
        display: none; }
  #page #acceuil .content-wrapper .content-subtitle {
    font-size: 3vh !important; }
  #page #about .content-title {
    font-size: 4vh; }
  #page #about .content-subtitle {
    padding: 30px;
    width: 100%; }
    #page #about .content-subtitle .wrapper-images {
      padding: 10px 30px; }
      #page #about .content-subtitle .wrapper-images article img {
        width: 130px;
        height: 130px; }
  #page #contact .content-contact {
    padding: 0 5%; }
    #page #contact .content-contact p {
      font-size: 3vh; }
    #page #contact .content-contact .img {
      display: none; } }
</style>

		
		<link rel='stylesheet' href='<?php bloginfo('template_url')?>/css/vendors.min.css?v=1b4ba605ff20'/>
		<link rel='stylesheet' href='<?php bloginfo('template_url')?>/css/website.min.css?v=1b4ba605ff20'/>
	</head>

	<body>
		<?php require('components/preloader.php'); ?>
		<?php require('layout/header.php'); ?>
		<?php require('content/content-'.$content['name'].'.php'); ?>
		<?php require('layout/footer.php'); ?>
	</body>

	
	<script type='text/javascript' src='<?php bloginfo('template_url');?>/js/vendors.min.js?v=1b4ba605ff20'></script>
	<script type='text/javascript' src='<?php bloginfo('template_url');?>/js/website.min.js?v=1b4ba605ff20'></script>
</html>