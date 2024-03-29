<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" rel="shortcut icon" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div id="preloader"></div><!-- #preloader -->
	<div class="container" id="container-preload">
		<header id="header-principal" class ="row" id="header" role="banner">
			<div id="menu-lado" class ="aparecido com-fundo <?php
			if ( wp_is_mobile() ) {
				echo "mobile";
			}
			else{
				echo "desktop";
			}
			?>">
				<div id="triangulo_menu" ></div>
				<a class="menu-fechado" href="" title="">
				<button id="botao-menu" type="button" class=" navbar-toggle" data-toggle="" data-target=".navbar-main-navigation">
				<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				</a>
			</div><!--menu lado-->
			<svg id="svg_header">
				<defs>
				    <pattern id="image" patternUnits="userSpaceOnUse" height="349" width="466">
				      <image x="0" y="0" height="349" width="466" xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/asfalt.jpg"></image>
				    </pattern>
				  </defs>
				<polygon id="triangulo_header_topo" points=""/>
			  	<polygon fill="url(#image)" id="poligono_header" points=""/>
			  	<polygon id="triangulo_header_baixo" points=""/>
			</svg>
			<nav id="main-navigation" class=" aparecido menu-inicial col-md-12 navbar navbar-default <?php
			if ( wp_is_mobile() ) {
				echo "mobile";
			}
			else{
				echo "desktop";
			}
			?>" role="navigation">

				<div class="navbar-header">

					<?php /*

					<a class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

					*/ ?>
				</div>
				<div id="menu-interno" class="com-fundo navbar-main-navigation <?php
				if ( wp_is_mobile() ) {
					echo "mobile";
				}
				else{
					echo "desktop";
				}
				?>">

					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav navbar-nav',
								'fallback_cb'    => '',
								// 'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
					?>

					<?php if ( is_active_sidebar( 'linguas' ) ) : ?>
							<?php dynamic_sidebar( 'linguas' ); ?>
					<?php endif; ?>
				</div><!-- .navbar-collapse -->
			</nav><!-- #main-menu -->
		</header><!-- #header -->

			<?php
				if( has_post_thumbnail($post->ID)  ){
					$parallax_1 = get_the_post_thumbnail($post->ID, 'full');
					echo "<div id='single-header-img'> ".$parallax_1."</div>";
				}
				else{
					$parallax_options= get_option( 'parallax_tab' );
					$parallax_1 = wp_get_attachment_url($parallax_options['imagem'], 'full');
					echo "<div id='single-header-img'> <img  src='".$parallax_1."'></div>";
				}

			?>


		<div id="main" class="site-main row">
