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
$depois_conteudo= "";
$post_antigo = $post;
$classe_conteudo = "";
// print_r($post);
$parallax_1 = wp_get_attachment_url($parallax_options['parallax_1'], 'full');
switch ($post->post_name) {
   case 'sobre':
		$classe_conteudo = 'sobre-conteudo';
		
        $background = 	$parallax_1;
		$antes = '<div style="background-image:url('.$background.');" class="secao-background"></div>
		<svg id="svg_sobre">
			<defs>
			    <pattern id="image2" patternUnits="userSpaceOnUse" height="400" width="400">
			      <image x="0" y="0" height="400" width="400" xlink:href="'.get_template_directory_uri().'/assets/images/black-paper-svg.jpg"></image>
			    </pattern>
			  </defs>
		  <polygon id="triangulo_laranja" points=""/>
		  <polygon fill="url(#image2)" id="triangulo_sobre" points=""  />
		  <polygon id="poligono_branco" points=""  />
		</svg>
		<header class="entry-header">
			<h1 class="entry-title">'
				.get_the_title($post->ID)
			.'</h1>
		</header><!-- .entry-header -->';
		
		$entre .="
		<div id='cabecalho_sobre'>
			<img id='sobre-escrito' src='".get_template_directory_uri()."/assets/images/escrito.png'/>
		</div>";
         break;
	case 'projetos':
		$antes = '<header class="entry-header"><h1 class="entry-title">'.get_the_title($post->ID).'</h1></header><!-- .entry-header -->';
	    $entre .= '<div class="col-sm-4 pull-right" ><div id="youtube-feed"></div><div id="triangulo_projetos"></div><div id="retangulo_projetos"></div></div>';
	
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
	 	$depois = '<svg>
	 		<polygon id="poligono_social" points=""/>
 			<polygon id="triangulo_social" points=""/>
		</svg>';
	     break;
		
	case 'social':
		$antes = '<header class="entry-header"><h1 class="entry-title">'.get_the_title($post->ID).'</h1></header><!-- .entry-header -->';
 		$depois = '';
	
	  	$entre .= '<div class="col-md-12"><h4>' . __('Nos acompanhe nas redes sociais','odin') . '</h4></div><!-- .col-md-12 -->';
		$entre .= '<div class="col-md-4 social-feed">';
		$entre .= '<div class="social-icon-wrapper"><a target="_blank" href="https://www.instagram.com/5e_oficial/"><div class="instagram-icone icone"></div><h5>/5e_oficial</h5></a>'. do_shortcode('[instagram-feed feed=1]') .'</div>';
		$entre .= '<div class="social-icon-wrapper"><a target="_blank" href="https://api.whatsapp.com/send?phone=5511996660497"><div class="whatsapp-icone icone"></div><h5>55-11-996660497</h5></a></div>';
		$entre .= '<div class="social-icon-wrapper"><a target="_blank" href="https://www.youtube.com/essentiaquarteto"><div class="youtube-icone icone"></div><h5>/essentiaquarteto</h5></a></div>';
		$entre .= '<div class="social-icon-wrapper"><a target="_blank" href="https://music.apple.com/artist/quinta-essentia-quarteto/699384309"><div class="apple-music-icone icone"></div><h5>Quinta Essentia</h5></a></div>';
		$entre .= '<div class="social-icon-wrapper"><a target="_blank" href="https://open.spotify.com/artist/0NSJKW3FTsrp5B9gXRcIRn"><div class="spotify-icone icone"></div><h5>Quinta Essentia</h5></a></div>';
		$entre .= '<div class="social-icon-wrapper"><a target="_blank" href="https://twitter.com/quinta_essentia"><div class="twitter-icone icone"></div><h5>@quinta_essentia</h5></a></div>';
		$entre .= '<div class="social-icon-wrapper"><a target="_blank" href="https://soundcloud.com/quintaessentiaquarteto"><div class="sound_cloud-icone icone"></div><h5>/quintaessentiaquarteto</h5></a></div>';
		$entre .= '<div class="social-icon-wrapper"><a target="_blank" href="http://www.reverbnation.com/quintaessentiaquarteto"><div class="reverbnation-icone icone"></div><h5>/quintaessentiaquarteto</h5></a></div>';
		$entre .= '</div><!-- .social-feed -->';
		$entre .= '<div class="col-md-4 social-feed">';
		$entre .= '<div class="social-icon-wrapper"><a target="_blank" href="http://www.facebook.com/5EOficial"><div class="facebook-icone icone"></div><h5>/5EOficial</h5></a>' . do_shortcode('[custom-facebook-feed feed=1]') . '</div>';
		$entre .= '</div>';
		  
		$depois_conteudo .= '<div class="col-md-4 blog-feed ">';
    	$depois_conteudo .= '<div id="blog-feed"><h4>'.__('Nosso Blog','odin').'</h4>'.do_shortcode( '[query post_type=post]' ).'</div>';
		$lang = qtrans_getLanguage();
		$depois_conteudo .= '</div><!--blog-->';  		
		$depois_conteudo .= '';
		$classe_conteudo = "hidden";
	  	
	     break;
	 case 'agenda':
	   			$antes = '<h1 id="titulo_agenda">'.get_the_title($post->ID).'</h1><svg id="svg_agenda" ><defs>
				    <pattern id="image" patternUnits="userSpaceOnUse" height="349" width="466">
				      <image x="0" y="0" height="349" width="466" xlink:href="'.get_template_directory_uri().'/assets/images/asfalt.jpg"></image>
				    </pattern>
				  </defs>
			 		<polygon  id="triangulo_agenda" points=""/>
		 			<polygon fill="url(#image)" id="poligono_agenda" points=""/>
				</svg>';
				$depois_conteudo = '<a class="btn btn-carregarmais" href="eventos/">'.__('+ Agenda','odin').'</a><div class="clearfix"></div>';
		break;
	 case 'contato':
	   			$antes = '<header class="entry-header"><h1 class="entry-title">' . get_the_title($post->ID) . '</h1></header>';
		break;
	}
	
	$post=$post_antigo;
?>
<article name="<?php echo $post->post_name; ?>" id="<?php echo $post->post_name; ?>" <?php post_class('row'); ?>>
	<?php echo $antes;?>
	
	
	<div  style='background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>);' class="background-image secao-interno col-md-12"  >
		
		<div class="conteudo-secao" >
			<?php echo $entre;?>
			<?php 
			$content = apply_filters( 'the_content', $post->post_content );
			$content = str_replace( ']]>', ']]&gt;', $content );
			?>
			<div class="<?php echo $classe_conteudo;?>" >
				<?php echo $content;?>
				<div class="clearfix "></div>
		 	</div>
			<?php echo $depois_conteudo;?>
		</div>
	</div>
	
</article><!-- #post-## -->
<div class="depois"><?php echo $depois;?>
</div>
<div class="clearfix sem-altura"></div>


