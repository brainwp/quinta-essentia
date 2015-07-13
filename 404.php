<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Odin
 * @since 2.2.0
 */

get_header('page'); ?>

<div id="primary" class="">
	<main id="main-content" class="site-main" role="main">
		<article class="nao-encontrado">
			<header class="entry-header">
				<h1><?php _e( 'Not Found', 'odin' ); ?></h1>
			</header><!-- .entry-header -->

			<div class="page-content">
				<h2><?php _e( 'It looks like nothing was found at this location.', 'odin' ); ?></h2>
			</div><!-- .page-content -->
		</article>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer('page');
