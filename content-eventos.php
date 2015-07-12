<?php
/**
 * The default template for displaying content.
 *
 * Used for both single and index/archive/author/catagory/search/tag.
 *
 * @package Odin
 * @since 2.2.0
 */



?>


<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4'); ?>>
		<div class="cada-eventos">
			<a class="col-md-12" href="<?php echo get_permalink();?>">
				<div class="texto_disco ">
					<div class="hora_data">
						<h7 class="data-evento"><?php echo date('d/m/y',intval(get_post_meta( $post->ID, "agenda-event-date", true )));?></h7> <br>
						<h7 class="hora"><?php echo get_post_meta( $post->ID, 'agenda_horario_inic', true );?></h7><br>
					</div><!--hora_data-->
					<div class="thumb-eventos">
						<?php echo get_the_post_thumbnail($post->ID, 'thumb-eventos');?>
					</div>
					<?php the_title( '<h2 class="titulo_disco">', '</h2>' );?>
					<h7 class="endereco-eventos"><?php echo get_post_meta( $post->ID, "agenda_endereco", true );?></h7>
				</div>
				
			</a>
		</div>
		<a class="mais-disco col-md-12" href="<?php echo get_permalink();?>">
		</a>	
		
</article><!-- #post-## -->
