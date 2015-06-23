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
			<div class="dropdown">
				<button class="btn btn-default btn-loadmore active dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					<?php _e('Filtrar por ano','odin');?>
					<span class="caret"></span>
			    </button>
			    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
			    	<?php $year = intval(date('Y')) + 2;?>
			    	<?php for ($i = 2006; $i < $year; $i++): ?>
			    	    <?php $link = array('by_year' => $i);?>
			    		<li>
			    			<a href="<?php echo esc_url(add_query_arg($link,get_post_type_archive_link('eventos' )));?>">
			    				<?php echo $i;?>
			    			</a>
			    		</li>
			    	<?php endfor;?>
			    </ul>
			</div>
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


			
			?>
	        <div class="text-center col-md-12">
	        	<?php 
	    	    // Page navigation.
		        odin_paging_nav();
		        ?>
	        </div><!-- .text-center col-md-12 -->
		</main><!-- #main -->
		<div class="clearfix"></div>
		
	</section><!-- #primary -->

<?php
get_footer('page');
