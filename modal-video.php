<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 05/08/14
 * Time: 17:52
 */ ?>
	<div id="triangulo-close-modal"></div>

<?php if ( have_posts() ) : ?>
	

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	
	
<?php endwhile; ?>
<?php endif; ?>
