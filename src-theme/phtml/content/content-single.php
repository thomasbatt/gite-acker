<div id="page">
	<div class="pagecontainer <?= $content['name'] ?>">
  		<div class="row text-justify">

			    <div class="col-xs-12">
			    <?php if (have_posts()) : ?>
			        <?php while (have_posts()) : the_post(); ?>
			            <div class="post">
			                <?php the_post_thumbnail('large'); ?>
			            </div>
			        <?php endwhile; ?>
			    <?php else : ?>
			        <p class="nothing">
			            Aucune image à afficher !
			        </p>
			    <?php endif; ?>
			    </div>
		</div>

  	</div>
</section>
