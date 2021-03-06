<div id="page">
	<div class="pagecontainer">
<!-- ACCEUIL -->	
		<section id="accueil" class="background">
			<div class="content-wrapper">
				<p class="content-title">
		<!-- LOGO SVG -->
					<?php include get_template_directory() . "/phtml/components/svg-title.php"; ?>
		<!-- LOGO SVG -->
				</p>
			</div>
		</section>
<!-- DESCRIPTION -->
		<section id="about" class="background no-visible">
			<div class="content-wrapper">
				<div class="content-subtitle text-justify">
					<p><?php echo get_settings('giteacker_description_title'); ?></p>
					<p>Aménagés à l'étage de la maison du propiétaire.</p>
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

<!-- CONTACT -->
		<section id="contact" class="background no-visible">
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