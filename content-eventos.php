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
			<a class="col-md-12" href="<?php get_permalink();?>">
				<div class="">
					<img width="305" height="130" src="<?php get_the_post_thumbnail();?>" class="attachment-thumb-eventos wp-post-image" alt="eventos">
				</div>
				<div class="texto_disco ">
					<h7><?php echo date('d/m/Y',get_post_meta( $post->ID, "agenda-event-date", true ));?></h7> - 
					<h7><?php echo get_post_meta( $post->ID, 'agenda_horario_inic', true );?></h7>
					<br>
					<h7><?php echo get_post_meta( $post->ID, "agenda_endereco", true );?></h7>
					<?php 
						the_title( '<h1 class="titulo_disco">', '</h1>' );
						the_content( );
					?>
				</div>
				<div class="mais-disco"></div>
			</a>
		</div>
</article><!-- #post-## -->
