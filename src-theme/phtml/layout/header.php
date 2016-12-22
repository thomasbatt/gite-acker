<!-- <header class="header wow slideInDown <?= $content['name'] ?>" data-wow-delay="1s" data-wow-offset="10" > -->
<header class="header <?= $content['name'] ?>">
	<div class="header-logo">
		<a href="<?php bloginfo('url');?>">
<!-- LOGO SVG -->
			<?php include get_template_directory() . "/phtml/components/svg-header.php"; ?>
<!-- LOGO SVG -->
		</a>
	</div>
	<div class="header-links wow slideInDown" data-wow-delay="1s" data-wow-offset="10">
		<ul>
			<li>
				<a href="#" class="js-scrollTo scale" data-target="0" data-fade="false"><?php echo get_settings('giteacker_menu_item1'); ?></a>
				<span></span>
			</li>
			<li>
				<a href="#" class="js-scrollTo" data-target="1" data-fade="false"><?php echo get_settings('giteacker_menu_item2'); ?></a>
				<span></span>
			</li>
			<li>
				<a href="#" class="js-scrollTo" data-target="2" data-fade="false"><?php echo get_settings('giteacker_menu_item3'); ?></a>
				<span></span>
			</li>
			<li >
				<a href="<?php bloginfo('url');?>" class="js-scrollTo scale" data-fade="false"><?php echo get_settings('giteacker_menu_item1'); ?></a>
				<span></span>
			</li>
		</ul>
	</div>
</header>
