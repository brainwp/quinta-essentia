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
		<div class=" imagem-modal col-md-4 ">
			<?php the_post_thumbnail();?>
			<?php if($url = get_post_meta(get_the_ID(), 'oembed_url_disco', true)):?>
				<div class="disco-oembed">
					<?php echo wp_oembed_get(__($url));?>
				</div>
		    <?php endif;?>	
		</div>
		<div id="container-modal-titulo" class="col-md-8">
			<div id="fundo-modal-titulo" class="col-md-12">
					<div class="col-md-6" id="tiangulo-modal"></div>
					<h1 class="col-md-6"><?php the_title(); ?></h1>
			</div>
			
		
			<div class="col-md-12">
				<?php the_content();?>
			</div>
		</div>
	</div>
	
<?php endwhile; ?>
<?php endif; ?>
