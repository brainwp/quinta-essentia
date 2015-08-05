<?php
/**
 * Template Name: Blog
 *
 * .
 *
 * @package Odin
 * @since 2.2.0
 */

get_header('blog'); 
?>

	<div class="row blog-container">
		<div id="primary" class="<?php echo odin_classes_page_sidebar(); ?>">
			
			<main id="main-content" class="site-main" role="main">
				<article id="slider">
					<?php echo do_shortcode('[brasa_slider name=blog]');?>
				</article>
					<?php 

				$args = array(
					'post_type' => 'post',
					'posts_per_page'=> 99999
					// 'meta_key' => 'ordem',
					// 			'orderby' => 'meta_value',
					// 			'order'   => 'ASC'
				);
			
				$query = new WP_Query( $args );			// the query
					$query_secao = new WP_Query( $args ); ?>

					<?php if ( $query_secao->have_posts() ) : ?>

						<!-- pagination here -->

						<!-- the loop -->
						<?php while ( $query_secao->have_posts() ) : $query_secao->the_post(); 

								get_template_part( 'content', 'posts' );						

							endwhile; ?>
						<!-- end of the loop -->

						<?php 
			    	    // Page navigation.
				        odin_paging_nav();
				        ?>
						<?php wp_reset_postdata(); ?>

					<?php endif; 
					?>
			
			
			
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php get_sidebar();?>
		
	</div><!-- #row -->
	
<?php
get_footer('page');
