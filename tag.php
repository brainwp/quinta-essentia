<?php
/**
 * The template for displaying Tag pages.
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header('blog'); ?>

	<div class="row blog-container">
		<div id="primary" class="<?php echo odin_classes_page_sidebar(); ?>">
			
			<main id="main-content" class="site-main" role="main">
				<article id="slider">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				//	the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				</header><!-- .page-header -->

				<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

							/*
							 * Include the post format-specific template for the content. If you want to
							 * use this in a child theme, then include a file called called content-___.php
							 * (where ___ is the post format) and that will be used instead.
							 */
							get_template_part( 'content', 'posts' );

						endwhile;

						// Page navigation.
						odin_paging_nav();

					else :
						// If no content, include the "No posts found" template.
						get_template_part( 'content', 'none' );

				endif;
			?>
				</article>
					
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php get_sidebar();?>
		
	</div><!-- #row -->

<?php
get_sidebar();
get_footer('page');
