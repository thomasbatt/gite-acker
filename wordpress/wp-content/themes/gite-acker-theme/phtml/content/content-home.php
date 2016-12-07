<div id="page">
	<div class="pagecontainer">
	  <section id="accueil" class="background">
	    <div class="content-wrapper">
	      <p class="content-title"><?php bloginfo( 'name' ); ?></p>
	      <p class="content-subtitle"><?php bloginfo('description'); ?></p>
	    </div>
	  </section>
	  <section id="about" class="background">
	    <div class="content-wrapper">
			<p class="content-title"><?php echo get_settings('giteacker_description_title'); ?></p>
			<div class="content-subtitle text-justify">
				<p><?php echo get_settings('giteacker_description_content'); ?></p>
	    		<div class="wrapper-images row ">
					<?php
				    $actus = get_posts(array(
				    	"category"=> 1,
				    	'posts_per_page'   => 30
				    ));
				    ?>
					<?php if (have_posts()) : ?>
		                <?php 
		                    foreach($actus as $post) :
					    	setup_postdata($post); 
		                ?>
		                      
		                <article class="col-xs-6 col-sm-3 col-md-2">  
		                    <div class="post">
		                    	<div class="img-wrapper">
		                    		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
		                        </div>
		                      </div>
		                </article>
		                <?php 	endforeach;
		                wp_reset_postdata(); ?>

		            <?php else : ?>
		                <p class="nothing">
		                    Aucune post à afficher !
		                </p>
		            <?php endif; ?>
				</div>
    		</div>
    	</div>
	  </section>
	  <section id="contact" class="background">
	    <div class="content-wrapper">
			<div class="content-contact">
				<p class="content-title"><?php echo get_settings('giteacker_contact_title'); ?></p>
				<p class="content-subtitle">
				<p><?php echo get_settings('giteacker_contact_name'); ?></p>
				<p><?php echo get_settings('giteacker_contact_phone_fixe'); ?></p>
				<p><?php echo get_settings('giteacker_contact_phone_cell'); ?></p>
				</p>
				<div class="img"></div>
			</div>
	    </div>
	  </section>
	</div>
</div>