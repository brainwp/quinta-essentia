<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header('page'); ?>

	<section id="primary" class="page-eventos single <?php echo odin_classes_page_full('row'); ?>">
		<main id="main-content" class="site-main" role="main">
			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', 'eventos' );

					endwhile;

					// Page navigation.
					odin_paging_nav();

			
			?>
		</main><!-- #main -->
		<div class="clearfix"></div>
		
	</section><!-- #primary -->

<?php
get_footer('page');
