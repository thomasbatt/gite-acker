<div id="page">
	<div class="pagecontainer">
	  <section id="accueil" class="background">
	    <div class="content-wrapper">
	      <p class="content-title">GITES ACKER</p>
	      <p class="content-subtitle">Labellisé Gîtes de France depuis 2003</p>
	    </div>
	  </section>
	  <section id="about" class="background">
	    <div class="content-wrapper">
			<p class="content-title">Description</p>
			<div class="content-subtitle text-justify">
				<p>Gîte aménagé à l'étage de la maison du propriétaire située en périphérie de village. 1 ch (3 lits 1p), séjour avec accès direct sur balcon couvert (1 lit 2p, prise TV), petite cuisine (micro-ondes), salle de bain avec wc. Chauffage central inclus. Location de draps. Présence du G714 sur la propriété. En commun : Lave-linge au sous-sol, jardin, mobilier de jardin, bac à sable, barbecue, ping-pong, parking dans cour. Supplément animaux: 5€/jour/animal.</p>
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
					<p class="content-title">Contact</p>
						<p class="content-subtitle">
						<p>Labellisé Gîte de France depuis 2003</p>
						<p>Antoine ACKER</p>
						<p>Tél: 03 88 80 06 19</p>
						<p>Tél: 06 41 77 04 31 </p>
					</p>
					<img src="../src-theme/img/map.png" alt="">
				</div>
			</div>
		</section>
	</div>
</div>