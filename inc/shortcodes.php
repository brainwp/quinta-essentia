<?php
//[query] 

function short_query_func( $atts ) {
	$html='';
	$antes_interno = '';
	$depois_interno = '';
	$class_item = '';
	$class_container = "";
	$class_thumb = "";
	
	
    $a = shortcode_atts( array(
	        'post_type' => 'flauta',
	        'paged'     => get_query_var( 'paged', 1 )
	        ), $atts );
	switch ($a['post_type']) {
	   case 'flauta':
	        $per_page= '999999999';
			$thumb='thumb-flauta';
			$html = '<h1 id="titulo_flautas">Flautas</h1>';
			$antes_interno = '<a href="" class="botao" id="left"><span class="esquerda glyphicon glyphicon glyphicon-menu-left"></span></a>';
    		$depois_interno = '<a class="botao" href="" id="right"><span class="direita glyphicon glyphicon glyphicon-menu-right"></span></a>';
	         break;
	   case 'projeto':
		     $per_page= '99999';
			$thumb='thumb-projeto';
			$class_container = "col-sm-8";
			
		
	         break;
	   case 'midia':
			 $per_page= '3';
			$thumb='thumb-midia';
			$class_item = 'col-sm-4';
			$class_container = "row";

	         break;
		case 'equipe':
				 $per_page= '999999';
				$thumb='thumb-equipe';
				$class_item = 'col-sm-3';
				$class_container = "row";
				
		         break;
	    case 'disco':
	    		 $per_page= '99999';
	    		$thumb='thumb-disco';
				$class_container = "row";
				$class_thumb = "col-sm-4 ";
				$class_item = 'row';
				
	
				
       
	             break;
		 case 'post':
		 		 $per_page= '1';
		 		$thumb='thumb-blog';
		
        
		          break;
	}  
	$paged = $a['paged'];
	
	$args = array(
		'post_type' => $a['post_type'],
		'posts_per_page' => $per_page,
		'paged'         => $paged,
	    
	);

	$query = new WP_Query( $args );
	$html .= "<div class='".$class_container."' id='interno-".$a['post_type']."'>".$antes_interno."<div id='interno-nav-".$a['post_type']."'>";
	if($query->have_posts()) : 
	    while($query->have_posts()) : 
	    	$query->the_post();
        	
			
			if ($a['post_type'] == 'disco'){
				$html .="<div class='".$class_item." cada-".$a['post_type']."'>
							<div class='".$class_thumb."'>".get_the_post_thumbnail($query->post->ID, $thumb)."</div>";
					$html .= '<div class="texto_disco col-sm-8"><h1 class="titulo-disco">'.get_the_title( $query->post->ID).'</h1>'; 
					$content = get_the_content();
					$trimmed_content = wp_trim_words( $content, 100, '...');
					$html .= $trimmed_content."</div></div><div class='clearfix'></div>";

			}
			else{
				if($a['post_type'] == 'midia' && !defined('DOING_AJAX')){
					$depois_interno  = '<a class="btn btn-loadmore" data-paged="2" data-loading="'.__('Carregando...', 'odin').'" data-selector="#interno-nav-midia" data-max-paged="'.$query->max_num_pages.'">';
					$depois_interno .= __('Carregar +','odin');
					$depois_interno .= '</a>';
				}
				$html .="<div class='".$class_item." cada-".$a['post_type']."'>".get_the_post_thumbnail($query->post->ID, $thumb)."</div>";
			}
		endwhile;
		    wp_reset_postdata();   	
		else: 
		    $html = 'Adicionar um '.$a['post_type'];

	
	   endif;
	$html .= "</div>".$depois_interno."</div>";
    return $html;
}
add_shortcode( 'query', 'short_query_func' );



//[query] 

function info_contato(  ) {
	$contato_options= get_option( 'contato_tab' );
	$html = "<div class='row_contato'><div class='col-sm-3'><h3>Contrate o Grupo</h3></div><div class='col-sm-4'><h5>".$contato_options['nome_contato']."</h5></div><div class='col-sm-5'><h5>".$contato_options['telefone_contato']."</h5></div><div class='clearfix'></div></div>";
    return $html;
}
add_shortcode( 'contato', 'info_contato' );


function lista_videos(  ) {
	$contato_options= get_option( 'contato_tab' );
	$html = "<div class='col-sm-4'></div>";
    return $html;
}
add_shortcode( 'videos', 'lista_videos' );

//ajax midia
function ajax_midia_load_posts(){
	echo do_shortcode('[query post_type="midia" paged="'.$_POST['paged'].'"]');
	wp_die();
}
add_action( 'wp_ajax_midia_load_posts', 'ajax_midia_load_posts' );
add_action( 'wp_ajax_nopriv_midia_load_posts', 'ajax_midia_load_posts' );