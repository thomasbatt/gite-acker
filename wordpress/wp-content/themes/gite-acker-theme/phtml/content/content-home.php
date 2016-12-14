<div id="page">
	<div class="pagecontainer">
		<section id="accueil" class="background">
			<div class="content-wrapper">
				<p class="content-title">
					<?php include get_template_directory() . "/phtml/components/title-svg.php"; ?>
				</p>
				<p class="content-subtitle"><?php bloginfo('description'); ?></p>
			</div>
<!-- 			<div class="scrolldown">
					<svg class="js-scrollTo" version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="185.667px" viewBox="0 0 80 185.667" enable-background="new 0 0 80 185.667" xml:space="preserve">
						<g>
							<path fill="#FFF" d="M41,5v6h0.154c7.965,0,14.03,0.462,18.559,4.835c6.028,5.821,9.123,18.766,9.123,38.352
								c0,19.194-3.234,32.045-9.651,38.134c-4.769,4.525-10.946,4.915-17.399,4.915l-0.969,0.006l-0.945,0.003l-0.95,0.003l-0.976,0.002
								c-6.463,0-12.659-0.374-17.419-4.896c-6.405-6.084-9.652-18.905-9.652-38.106c0-19.491,3.146-32.487,9.351-38.38
								C24.852,11.474,30.981,11,38.513,11h0.682h0.679h0.716h0.715L41,5.249 M41.305,5c-0.478,0-0.957,0-1.431,0c-0.45,0-0.904,0-1.361,0
								C23.578,5,4.874,5.842,4.874,54.125c0,47.88,19.696,49.065,33.072,49.065c0.659,0,1.303,0.028,1.928,0.028
								c0.623,0,1.263,0.018,1.921,0.018c13.332,0,33.079-1.243,33.079-49.119C74.874,5.831,56.949,5,41.305,5L41.305,5z"/>
						</g>
						<polygon id="arrow" fill="#FFF" points="52.996,119.211 50.012,116.227 39.945,126.294 29.877,116.227 26.893,119.211 39.789,132.107 39.945,131.951 
							40.1,132.107 "/>
						<path id="roll" fill="#FFF" transform="translate(0)" d="M43,35.399c0,1.022-1.458,1.851-3,1.851l0,0c-1.542,0-3-0.829-3-1.851V19.851C37,18.829,38.458,18,40,18l0,0
							c1.542,0,3,0.829,3,1.851V35.399z"
							/>
					</svg>
			</div> -->
		</section>
		<section id="about" class="background">
			<div class="content-wrapper">
				<p class="content-title"><?php echo get_settings('giteacker_description_title'); ?></p>
				<div class="content-subtitle text-justify">
					<p><?php echo get_settings('giteacker_description_content'); ?></p>
					<div class="wrapper-images">
						<?php
							$actus = get_posts(array(
								"category"=> 1,
								'posts_per_page'   => 6
							));
						?>
						<?php if (have_posts()) : ?>
							<?php 
								foreach($actus as $post) :
								setup_postdata($post); 
							?>

							<article>
								<div class="post">
									<div class="img-wrapper">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
									</div>
								</div>
							</article>
							<?php 	endforeach;
							wp_reset_postdata(); ?>

						<?php else : ?>
							<p class="nothing">Aucune post à afficher !</p>
						<?php endif; ?>
					</div>
				</div>
			</div>

		</section>
		<section id="contact" class="background">
			<div class="content-wrapper">
				<div class="content-contact">
					<h3 class="content-title"><?php echo get_settings('giteacker_contact_title'); ?></h3>
					<p class="content-subtitle"></p>
					<p><?php echo get_settings('giteacker_contact_name'); ?></p>
					<p><?php echo get_settings('giteacker_contact_phone_fixe'); ?></p>
					<p><?php echo get_settings('giteacker_contact_phone_cell'); ?></p>
					<p>Tarifs et Réservations sur Gîtes de France :</p>
					<p><a href="https://www.gites-de-france.com/location-vacances-Rittershoffen-Gite-67G714.html" target="_blank">Gîte n°1</a> / <a href="https://www.gites-de-france.com/location-vacances-Rittershoffen-Gite-67G833.html" target="_blank">Gîte n°2</a></p>
					<div class="img"></div>
				</div>
			</div>
		</section>
	</div>
</div>