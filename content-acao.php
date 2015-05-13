<?php
/**
 * The template used for displaying sections.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<div id="<?php echo $post->post_name ?>" <?php post_class('col-md-4'); ?>>
	<a href="<?php echo get_permalink($post->post_id); ?>">
		<div class="acao-imagem "> 
			<?php the_post_thumbnail();?>
		</div>
		<div class="acao-conteudo" >
			<?php the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' ); ?>
		</div>
	</a>
</div><!-- #post-## -->
