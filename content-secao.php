<?php
/**
 * The template used for displaying sections.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article style="background-color:<?php the_field('cor_fundo'); ?>" id="<?php echo $post->post_name ?>" <?php post_class('row'); ?>>
	<div class="secao-conteudo col-md-12"  >
		<?php the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' ); ?>
		<?php
		the_content();
		?>
		
	</div>
</article><!-- #post-## -->
