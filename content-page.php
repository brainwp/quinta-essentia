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


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
				the_title( '<h1 class="entry-title">', '</h1>' );
		?>

	</header><!-- .entry-header -->

		<div id="page-content">
			<?php
				the_content( );
				comments_template();
				?>	
		</div><!-- #page-content -->
		

	
</article><!-- #post-## -->
