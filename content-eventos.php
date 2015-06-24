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
				<div class="">
					<?php echo get_the_post_thumbnail($post->ID, 'eventos');
					the_title( '<h1 class="titulo_disco">', '</h1>' );
					
					?>
				</div>
				<div class="texto_disco ">
					<h7 class="data-evento"><?php echo date('d/m',intval(get_post_meta( $post->ID, "agenda-event-date", true )));?></h7> 
					<div class="endereco-eventos">
						<h7><?php echo get_post_meta( $post->ID, 'agenda_horario_inic', true );?> - </h7>
						<h7><?php echo get_post_meta( $post->ID, "agenda_endereco", true );?></h7>
					</div>
					<?php 
						$content = get_the_content();
						$trimmed_content = wp_trim_words( $content, 30, '...');
						echo "<br/>".$trimmed_content;
						?>
				</div>
			</a>
		</div>
		<a class="col-md-12" href="<?php echo get_permalink();?>">
			<div class="mais-disco"></div>
		</a>	
		
</article><!-- #post-## -->
