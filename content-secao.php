<?php
/**
 * The template used for displaying sections.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article style="background-color:<?php the_field('cor_fundo'); ?>" id="<?php echo $post->post_name ?>" <?php post_class('row'); ?>>
	<div style="background-color:<?php the_field('cor_imagem'); ?>" class="secao-imagem col-md-6"> 
		<?php the_post_thumbnail();
		echo $count;?>
	</div>
	<div class="secao-conteudo col-md-6"  >
		<div id="triangulo"></div>
		<?php the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' ); ?>
		<?php
		the_content();
		?>
		
	</div>
	
	<div class="entry-content">

	</div><!-- .entry-content -->
</article><!-- #post-## -->
<?php ++$count;?>
