<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 05/08/14
 * Time: 17:52
 */ ?>
	<div id="triangulo-close-modal"></div>

<?php if ( have_posts() ) : ?>
	

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div id="modal-quinta" class="row modal-<?php echo get_post_type();?>">
		<div id="container-modal-titulo" class="col-md-12">
			<div id="fundo-modal-titulo" class="col-md-12">
					<div class="col-md-12" id="tiangulo-modal"></div>
					<h1 class="col-md-6"><?php the_title(); ?></h1>
			</div>
			
		
			<div class="img-midia col-md-12">
				<?php echo get_the_post_thumbnail($query2->post->ID, $thumb);?>
			</div>
		</div>
	</div>
	
<?php endwhile; ?>
<?php endif; ?>
