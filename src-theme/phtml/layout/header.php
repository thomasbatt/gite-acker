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
				<a  class="js-scrollTo scale" target="0" data-fade="false"><?php echo get_settings('giteacker_menu_item1'); ?></a>
				<span></span>
			</li>
			<li>
				<a  class="js-scrollTo" target="1" data-fade="false"><?php echo get_settings('giteacker_menu_item2'); ?></a>
				<span></span>
			</li>
			<li>
				<a  class="js-scrollTo" target="2" data-fade="false"><?php echo get_settings('giteacker_menu_item3'); ?></a>
				<span></span>
			</li>
			<li >
				<a href="<?php bloginfo('url');?>" class="js-scrollTo scale" target="0" data-fade="false"><?php echo get_settings('giteacker_menu_item1'); ?></a>
				<span></span>
			</li>
		</ul>
	</div>
</header>
