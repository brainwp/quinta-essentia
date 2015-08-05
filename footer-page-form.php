<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
$sobre_options= get_option( 'sobre_tab' );
$logo = wp_get_attachment_url($sobre_options['logo'], 'full');
$args = array(
	'post_type' => 'secao',
  	'name' => 'social',
);
	$query = new WP_Query( $args );			// the query
		$query_secao = new WP_Query( $args ); ?>
		<svg style="position:relative" >
	 		<polygon id="poligono_social" points=""/>
 			<polygon id="triangulo_social" points=""/>
		</svg>
			<!-- the loop -->
			<?php while ( $query_secao->have_posts() ) : $query_secao->the_post(); 
				
					get_template_part( 'content', 'secao' );						
				
				endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->

			<?php wp_reset_postdata(); ?>

		</div><!-- #main -->
		
		<footer id="footer-page" role="contentinfo">
			<svg id="svg_social_depois_page" >
		 		<polygon id="poligono_social_depois_page" points=""/></svg>
			<div class="site-info row">
				<div id="logo_footer" class="col-sm-6">
				 	<?php echo __('Criado em ','odin');?>  
					<a href="http://br.wordpress.org/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wp.png"></a>
					<?php echo __('pela ','odin');?>
					<a href="http://www.brasa.art.br" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/brasa.png"></a>
				</div>
				<div id="parcerias" class="col-sm-6">
					<div id="cc"><?php echo __('Alguns Direitos Reservados','odin');?></br>Quinta Essentia Quarteto 2015</div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cc.png">
					
				</div>
			</div><!-- .site-info -->
			
		</footer><!-- #footer -->
	</div><!-- .container -->

	<?php wp_footer(); ?>
</body>
</html>
