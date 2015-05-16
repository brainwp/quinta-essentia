<?php
/**
 * The template used for displaying sections.
 *
 * @package Odin
 * @since 2.2.0
 */

global $odin_general_opts;
$parallax_options= get_option( 'parallax_tab' );
$sobre_options= get_option( 'sobre_tab' );
$logo = wp_get_attachment_url($sobre_options['logo'], 'full');

$parallax_1 = wp_get_attachment_url($parallax_options['parallax_1'], 'full');
switch ($post->post_name) {
   case 'sobre':
        $background = 	$parallax_1;
		$entre = '<div style="background-image:url('.$background.');" class="secao-background"></div>
		<svg height="210" width="500">
		  <polygon id="triangulo_laranja" points=""/>
		  <polygon id="triangulo_sobre" points=""  />
		  <polygon id="poligono_branco" points=""  />
		
		
		</svg><header class="entry-header"><h1 class="entry-title">'.get_the_title($post->ID).'</h1></header><!-- .entry-header -->';
		
		$entre .="<div id='cabecalho_sobre'> <img src='".$logo."'/><h1>Quinta Essentia</h1></div>";
         break;
	}
?>
<article id="<?php echo $post->post_name ?>" <?php post_class('row'); ?>>
	
<?php echo $entre;?>
	
	<div class="secao-interno col-md-12"  >
		
		<div class="conteudo-secao">
			<?php
			the_content();
			?>
		</div>
	</div>
</article><!-- #post-## -->
