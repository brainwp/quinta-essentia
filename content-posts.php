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
	<?php if( has_post_thumbnail($post->ID)  ){?>
			<div class="post-lista-thumb">
				<?php echo get_the_post_thumbnail($post->ID, 'thumb-blog-lista');?>
				<header class="entry-header titulo-post">
					<?php the_title( '<h2 class="entry-title ">', '</h2>' );?>
				</header><!-- .entry-header -->
				<div class="data-post">
					<h3><?php the_time( 'd/' ); ?></h3>
					<h4><?php the_time( 'm/y' ); ?> </h4>
				</div>
			</div>
			
			<?php } 
			else { ?>
				<header class="entry-header titulo-post">
					<?php the_title( '<h2 class="entry-title ">', '</h2>' );?>
				</header><!-- .entry-header -->
				<div class="data-post">
					<h3><?php the_time( 'd/' ); ?></h3>
					<h4><?php the_time( 'm/y' ); ?> </h4>
				</div>
			<?php }?>
	
		<div class="page-content">
			<?php
				the_content( );
				echo '<hr>';
				$count =0;
				$post_categories = wp_get_post_categories($post->ID );
				$cats = array();

				foreach($post_categories as $c){

					$cat = get_category( $c );
					if ($count!=0){
						echo ' <span>●</span> ';
					}
					echo '<span>'.$cat->name.'</span>';
					$count++;

				}
				?>	
				
		</div><!-- #page-content -->


	
</article><!-- #post-## -->
