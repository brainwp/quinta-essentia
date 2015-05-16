<?php
/**
 * The template used for displaying sections.
 *
 * @package Odin
 * @since 2.2.0
 */

global $odin_general_opts;
$parallax_1 = wp_get_attachment_url($odin_general_opts['parallax_1'], 'full');
switch ($post->post_name) {
   case 'sobre':
        $background = 	$parallax_1;
		$entre = "<div id='triangulo'></div>";
         break;
	}
?>
<article style='background-image:url("<?php echo  $background ?>");' id="<?php echo $post->post_name ?>" <?php post_class('row'); ?>>
	<div class="secao-conteudo col-md-12"  >
		<?php 
		echo $entre;
		
		the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' ); ?>
		<?php
		the_content();
		?>
		
	</div>
</article><!-- #post-## -->
