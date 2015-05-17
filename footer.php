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
	echo "logooo".$logo;
?>

		</div><!-- #main -->

		<footer id="footer" role="contentinfo">
			<div class="site-info row">
				<div id="logo_footer" class="col-sm-6">
				 	<img src="<?php echo $logo;?>"/>
					<div>Alguns Direitos Reservados</br>Quinta Essentia Quarteto 2015</div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cc.png">
				</div>
				<div id="parcerias" class="col-sm-6">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wp.png">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/brasa.png">
					
				</div>
			</div><!-- .site-info -->
		</footer><!-- #footer -->
	</div><!-- .container -->

	<?php wp_footer(); ?>
</body>
</html>
