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

get_header();
$odin_general_opts = get_option( 'odin_general' );


?>
	<!--[if lt IE 9]>
	<script>
	document.createElement('video');
	</script>
	<![endif]-->
	<div id="primary" class="<?php echo odin_classes_page_full(); ?>">
		<main id="main-content" class="site-main" role="main">


					<article id="capa" <?php post_class('row secao'); ?>>

						<div class="description">
							<div class="container">
								<h2>Entre para nossa comunidade!</h2>
								<h3>Assine nossa <a href="#contato">newsletter</a></h3>
								<div id="vidbuttons">
									<a class="button" id="vidaudio"><span class="red vidbutton glyphicon  glyphicon-volume-off" aria-hidden="true"></span></a>
									<a class="button" id="vidpause"><span class="redvidbutton glyphicon  glyphicon-pause" aria-hidden="true"></span></a>
								</div>
							</div>
						</div>

						<div class="capa-capa"></div>
						<?php
							if (!wp_is_mobile()) {
								?>
						<video muted autoplay
						poster="<?php echo get_stylesheet_directory_uri();?>/assets/videos/capa.png" id="bgvid">
							<source src="<?php echo get_stylesheet_directory_uri();?>/assets/videos/capa2.webm" type="video/webm">
							<source src="<?php echo get_stylesheet_directory_uri();?>/assets/videos/capa2.mp4" type="video/mp4">
						</video>
						<?php
					}
				 ?>
				 	
					</article><!-- #post-## -->



			<article id="destaque" <?php post_class('row secao'); ?>>
				<?php
				if (isset($odin_general_opts['destaque_check'])){
					$destaque = $odin_general_opts['destaque'];
					$destaque_img = wp_get_attachment_image($odin_general_opts['destaque_img'], 'full');
					?>
					<div id="destaque_texto" class="col-sm-7 pull-right">
							<?php
								echo $destaque;
							?>
					</div>
					<div id="destaque_img" class="col-sm-5 pull-left" >
						<?php
							echo $destaque_img;
						?>
					</div>


				<?php
				}

				?>
			</article>

			<?php

		$args = array(
			'post_type' => 'secao',
			// 'meta_key' => 'ordem',
			// 			'orderby' => 'meta_value',
			// 			'order'   => 'ASC'
		);
		$cont=0;
		global $count;
		$query = new WP_Query( $args );			// the query
			$query_secao = new WP_Query( $args ); ?>

			<?php if ( $query_secao->have_posts() ) : ?>

				<!-- pagination here -->

				<!-- the loop -->
				<?php while ( $query_secao->have_posts() ) : $query_secao->the_post();

						get_template_part( 'content', 'secao' );

					endwhile; ?>
				<!-- end of the loop -->

				<!-- pagination here -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Crie umaseção', 'odin' ); ?></p>

			<?php endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
