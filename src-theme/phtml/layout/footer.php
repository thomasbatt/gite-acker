<footer class="footer <?= $content['name'] ?>">
	<section class="wow slideInUp" data-wow-delay="1.2s" data-wow-offset="10">
        <div class="footer-scrolldown-arrow js-scrollTo" target="next">
        	<?php include get_template_directory() . "/phtml/components/svg-footer.php"; ?>
        	<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
    	</div>
	    <div class="footer-meta-links">
	        <a href="./">Mentions légales</a> | <a href="./">Charte de confidentialité</a><br/>    
			<span>© Copyright 2016 
				<a href="http://www.thomasbatt.fr" target="_blank">Thomas BATT</a> & 
				<a href="http://www.faress.webatt.fr" target="_blank">Faress Hank</a>
			</span>
	    </div>
	    <div class="footer-admin-links">
		    <span class="loggedout">
		    	<br>
		        <a rel="nofollow" id="login" href="<?php bloginfo('url')?>/wp-login.php">Connexion </a>
		    </span>
        </div>
	</section>
</footer>

<div class="wp-footer">
	<?php wp_footer(); ?>
</div>
