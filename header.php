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
	<div class="container">
		<header id="header-principal" class ="row" id="header" role="banner">
			<svg>
				<polygon id="triangulo_header_topo" points=""/>
			  	<polygon id="poligono_header" points=""/>
			  	<polygon id="triangulo_header_baixo" points=""/>
			
			  
			</svg>
			<nav id="main-navigation" class=" col-md-12 navbar navbar-default" role="navigation">
				<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'odin' ); ?>"><?php _e( 'Skip to content', 'odin' ); ?></a>
				<div class="navbar-header">
					<svg>
						<polygon id="triangulo_menu" points="0,0 0,150 150,0"/>
						
					</svg>
					<button type="button" class="navbar-toggle" data-toggle="" data-target=".navbar-main-navigation">
					<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<?php /*

					<a class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

					*/ ?>
				</div>

				<div class="  navbar-main-navigation">
				
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

					
				</div><!-- .navbar-collapse -->
			</nav><!-- #main-menu -->
		</header><!-- #header -->

		<div id="main" class="site-main row">
