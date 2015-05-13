<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
	
	<div id="primary" class="<?php echo odin_classes_page_full(); ?>">
		<main id="main-content" class="site-main" role="main">
			<article id="capa" <?php post_class('row secao'); ?>>
				<div class="secao-imagem col-md-6"> 
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/capa.png">
				</div>
				<div class="secao-conteudo col-md-6" >
					<?php

					?>

				</div>

				<div class="entry-content">

				</div><!-- .entry-content -->
			</article><!-- #post-## -->
			
			<?php 
			get_template_part( '/parts/acoes-home' );	
			
		$args = array(
			'post_type' => 'secao',
			'meta_key' => 'ordem',
			'orderby' => 'meta_value',
			'order'   => 'ASC'
		);
		$cont=0;
		global $count;
		$query = new WP_Query( $args );			// the query
			$the_query = new WP_Query( $args ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

				<!-- pagination here -->

				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
					
						get_template_part( 'content', 'secao' );						
					
					endwhile; ?>
				<!-- end of the loop -->

				<!-- pagination here -->

				<?php wp_reset_postdata(); ?>
				
			<?php else : ?>
				<p><?php _e( 'Crie uma´seção', 'odin' ); ?></p>
			
			<?php endif; 
			?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
