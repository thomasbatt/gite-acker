<header class="header wow slideInDown <?= $content['name'] ?>" data-wow-delay="1s" data-wow-offset="10" >
	<div class="header-logo">
		<a href="<?php bloginfo('url');?>">
<!-- LOGO SVG -->
			<?php include get_template_directory() . "/phtml/components/svg-header.php"; ?>
<!-- LOGO SVG -->
		</a>
	</div>
	<div class="header-links">
		<ul>
			<li>
				<a href="<?php bloginfo('url');?>"><?php echo get_settings('giteacker_menu_item1'); ?></a>
				<span></span>
			</li>
<!-- 			<li>
				<a href="#about" class="js-scrollTo" data-fade="false"><?php echo get_settings('giteacker_menu_item2'); ?></a>
				<span></span>
			</li>
			<li>
				<a href="#contact" class="js-scrollTo" data-fade="false"><?php echo get_settings('giteacker_menu_item3'); ?></a>
				<span></span>
			</li> -->
		</ul>
	</div>
</header>
