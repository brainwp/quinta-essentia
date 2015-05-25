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
$depois ='';
$antes = '';
$entre = '';

$post_antigo = $post;
$classe_conteudo = "";

$parallax_1 = wp_get_attachment_url($parallax_options['parallax_1'], 'full');
switch ($post->post_name) {
   case 'sobre':
		
        $background = 	$parallax_1;
		$antes = '<div style="background-image:url('.$background.');" class="secao-background"></div>
		<svg height="210" width="500">
		  <polygon id="triangulo_laranja" points=""/>
		  <polygon id="triangulo_sobre" points=""  />
		  <polygon id="poligono_branco" points=""  />
		</svg><header class="entry-header"><h1 class="entry-title">'.get_the_title($post->ID).'</h1></header><!-- .entry-header -->';
		
		$entre .="<div id='cabecalho_sobre'> <img src='".$logo."'/><h1>Quinta Essentia</h1></div> ";
         break;
	case 'projetos':
		$antes = '<header class="entry-header"><h1 class="entry-title">'.get_the_title($post->ID).'</h1></header><!-- .entry-header -->';
	    $entre .= '<div class="col-sm-4 pull-right" id="youtube-feed"></div>';

	  	break;
	case 'midia':
	
     	$parallax_2 = wp_get_attachment_url($parallax_options['parallax_2'], 'full');
	 	$entre = '';
		$depois = 
		'<svg id="svg_midia" height="400" width="500">
		 		<polygon id="triangulo_amarelo" points=""/>
		</svg>
			<div id="parallax_midia" style="background-image:url('.$parallax_2.');" class="secao-background"></div>
		<svg id="svg_disco">
			<polygon id="poligono_disco" points=""/>
		</svg>';
         break;
	 case 'discografia':
	  	$entre = '';
	  	$antes = '<header class="entry-header"><h1 class="entry-title">'.get_the_title($post->ID).'</h1></header><!-- .entry-header -->';
	 	$depois = '<svg height="400" width="500">
	 		<polygon id="poligono_social" points=""/>
 			<polygon id="triangulo_social" points=""/>
		</svg>';
	     break;
		
	case 'social':
	$antes = '<header class="entry-header"><h1 class="entry-title">'.get_the_title($post->ID).'</h1></header><!-- .entry-header -->';
 		$depois = '';
		
  		$entre .= '<div class="col-md-4 blog-feed pull-right">';
    	$entre .= '<div id="blog-feed"><h4>'.__('Nosso Blog','odin').'</h4>'.do_shortcode( '[query post_type=post]' ).'</div>';
  		$entre .= '</div><!--blog-->';
	  	$entre .= '<div class="col-md-4 social-feed pull-right"><h4>'.__('Nos acompanhe nas redes sociais','odin').'</h4>';
	  	$entre .= '<div class="facebook-icone"></div><a target="_blank" href="http://www.facebook.com/5EOficial"><h5>/5EOficial</h5></a><div id="facebook-feed"></div>';
	    $entre .= '<div class="twitter-icone"></div><a target="_blank" href="https://twitter.com/quinta_essentia"><h5>@quinta_essentia</h5></a><div id="twitter-feed"></div><div class="clearfix"></div>';
 		$entre .= '<div class="sound_cloud-icone"></div><a target="_blank" href="https://soundcloud.com/quintaessentiaquarteto"><h5>/quintaessentiaquarteto</h5></a><div class="clearfix"></div>';
	    $entre .= '<div class="reverbnation-icone"></div><a target="_blank" href="http://www.reverbnation.com/quintaessentiaquarteto"><h5>/quintaessentiaquarteto</h5></a><div class="clearfix"></div>';
 		$entre .= '<div class="youtube-icone"></div><a target="_blank" href="http://www.youtube.com/essentiaquarteto"><h5>/essentiaquarteto</h5></a><div class="clearfix"></div>';
		
	  	$entre .= '</div>';
		$classe_conteudo = "col-sm-4";
	  	
	
	  	
	     break;
	 case 'agenda':
	   		
		break;
	}
	
	$post=$post_antigo;
?>
<article id="<?php echo $post->post_name ?>" <?php post_class('row'); ?>>
	<?php echo $antes;?>
	
	
	<div  style='background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>);' class="secao-interno col-md-12"  >
		
		<div class="conteudo-secao" >
			<?php echo $entre;?>
			<?php 
			$content = apply_filters( 'the_content', $post->post_content );
			$content = str_replace( ']]>', ']]&gt;', $content );
			
			?>
			<div class="<?php echo $classe_conteudo;?>" >
			<?php echo $content;
			?>
			</div>
			<div class="clearfix"></div>
			
		</div>
	</div>
	
</article><!-- #post-## -->
<div class="depois"><?php echo $depois;?>
</div>
<div class="clearfix"></div>


