<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 05/08/14
 * Time: 17:52
 */ ?>
<?php if ( have_posts() ) : ?>

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div id="modal-quinta" class="row modal-<?php echo get_post_type();?>">
		<div class=" imagem-modal col-sm-4 ">
			<?php the_post_thumbnail();?>
		</div>
		<div id="container-modal-titulo" class="col-sm-8">
			<div id="fundo-modal-titulo" class="col-sm-12">
					<div class="col-sm-6" id="tiangulo-modal"></div>
					<h1 class="col-sm-6"><?php the_title(); ?></h1>
				
			</div>
			
		
			
		</div>
		<div class="col-sm-12">	<div id="info">
				<?php $data_invert = get_post_meta( $post->ID , 'agenda-event-date' , true );
				$data_explo = explode("/", $data_invert);
				echo
				'<span id="data">' .
				date('d/m', $data_invert)
				. '</span>'; 
				echo '<span > <div id="horario">' .get_post_meta( $post->ID , 'agenda_horario_inic' , true ). '</div>'; 
				echo '<div id="endereco" >' .get_post_meta( $post->ID , 'agenda_endereco' , true ). '</div></span>';?>
			</div>
			<?php the_content();?>
		</div>
	</div>
	
<?php endwhile; ?>
<?php endif; ?>
