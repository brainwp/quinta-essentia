<?php
//[query] 

function short_query_func( $atts ) {
	$html='';
	$antes_interno = '';
	$depois_interno = '';
	$class_item = '';
	$class_container = "";
	$class_thumb = "";
	$per_page = -1;
	
    $a = shortcode_atts( array(
	        'post_type' => 'flauta',
	        'paged'     => get_query_var( 'paged', 1 ),
	        'category'  => false
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
			$antes_interno = '<a href="" class="botao" id="cima"><span class="cima glyphicon glyphicon glyphicon-menu-left"></span></a>';
    		$depois_interno = '<a class="botao" href="" id="baixo"><span class="baixo glyphicon glyphicon glyphicon-menu-right"></span></a>';
			
		
	         break;
	   case 'midia':
			 $per_page= '3';
			$thumb='thumb-midia';
			$class_item = 'col-sm-4';
			$class_container = "row ";
			if(!defined('DOING_AJAX')){
				$antes_interno  = '<div class="midia-category">';
				$antes_interno .= '<a class="btn btn-default btn-lg btn-ajax-categoria active" data-category="all">';
				$antes_interno .= __('Todos','odin');
				$antes_interno .= '</a>';
				$categories = get_categories(
					array(
						'type' => 'midia', 
						'taxonomy' => 'categoria',
					)
				);
				foreach ($categories as $cat) {
					$antes_interno .= '<a class="btn btn-default btn-lg btn-ajax-categoria" data-category="'.$cat->term_id.'">';
					$antes_interno .= apply_filters('the_title',$cat->name);
					$antes_interno .= '</a>';
				}

				$antes_interno .= '</div>';
			}

	         break;
		case 'equipe':
				 $per_page= '999999';
				$thumb='thumb-equipe';
				$class_item = 'col-sm-3';
				$class_container = "row ";
				
		         break;
	    case 'disco':
	    		 $per_page= '2';
	    		$thumb='thumb-disco';
				$class_container = "row ";
				$class_thumb = "col-xs-4 ";
				$class_item = 'row ';
				
	
				
       
	             break;
		 case 'post':
		 		 $per_page= '1';
		 		$thumb='thumb-blog';
		
        
		          break;
		 case 'eventos':			
		        $class_container = "col-md-12 ";
		 		$thumb='thumb-eventos';

		
				   break;
	}  
	
	$paged = $a['paged'];
	
	$args = array(
		'post_type' => $a['post_type'],
		'posts_per_page' => $per_page,
		'paged'         => $paged,
	    
	);
	if($a['category'] != false && $a['category'] !== 'all'){
		$args = array(
			'post_type' => $a['post_type'],
			'posts_per_page' => $per_page,
			'paged'         => $paged,
			'tax_query' => array(
				array(
					'taxonomy' => 'categoria',
					'field'    => 'term_id',
					'terms'    => $a['category'],
				),
			),
		);
	}
    if($a['post_type'] == 'eventos'){
		$args = array(
			'post_type' => $a['post_type'],
			'posts_per_page' => -1,
			'orderby'  => 'meta_value',
									'meta_key' => 'agenda-event-date',
									'order'   => 'DESC',
									'meta_query' => array(
										array(
											'key' => 'agenda-event-date',
											'compare' => '>',
											'value' =>  time()-86400
										),
									),		
		);
	}
	$query2 = new WP_Query( $args );
	$html .= "<div class='".$class_container."' id='interno-".$a['post_type']."'>".$antes_interno."<div id='interno-nav-".$a['post_type']."'>";
	if($query2->have_posts()) : 
	    while($query2->have_posts()) : 
	    	$query2->the_post();
        	
			
			if ($a['post_type'] == 'disco'){
				$html .="<a href='".get_permalink( $query2->post->ID)."'><div class='".$class_item."cada-".$a['post_type']." animated bounceIn'>
							<div class='".$class_thumb."'>".get_the_post_thumbnail($query2->post->ID, $thumb)."</div>";
					$html .= '<div class="texto_disco col-xs-8"><h1 class="titulo-disco">'.get_the_title( $query2->post->ID).'</h1>'; 
					$content = get_the_content();
					$trimmed_content = wp_trim_words( $content, 100, '...');
					$html .= $trimmed_content."</div><div class='mais-disco'></div></div><div class='clearfix'></div>";
			}
			else if ($a['post_type'] == 'eventos'){
				$html .="<div class='".$class_item." cada-".$a['post_type']."'><a class='col-md-12' href='".get_permalink( $query2->post->ID)."'>
							<div class='".$class_thumb."'>".get_the_post_thumbnail($query2->post->ID, $thumb)."</div>";
					$html .= '<div class="texto_disco "><h7>'.date('d/m/Y',get_post_meta( $query2->post->ID, "agenda-event-date", true )).'</h7><h1 class="titulo-disco">'.get_the_title( $query2->post->ID).'</h1>'; 
					$content = get_the_content();
					$trimmed_content = wp_trim_words( $content, 30, '...');
					$html .= $trimmed_content."</div><div class='mais-disco'></div></a></div>";
			}
			else if ($a['post_type'] == 'post'){
				$html .="<a href='".get_permalink( $query2->post->ID)."'><div class='".$class_item."cada-".$a['post_type']."'>
							<div class='".$class_thumb."'>".get_the_post_thumbnail($query2->post->ID, $thumb)."</div>";
					$html .= '<div class="texto_post "><h1 class="titulo-post">'.get_the_title( $query2->post->ID).'</h1>'; 
					$content = get_the_content();
					$trimmed_content = wp_trim_words( $content, 100, '...');
					$html .= $trimmed_content."</div><div class='mais-disco'></div></div><div class='clearfix'></div></a>";

			}
			else if ($a['post_type'] == 'equipe' ){
				$content = $query2->post->post_content;
				$trimmed_content_equipe = wp_trim_words( $content, 60, '...');
				$html .="<div class='link-equipe'> <div class='".$class_item." cada-equipe animated bounceIn'>".get_the_post_thumbnail($query2->post->ID, $thumb)."</div><!--cada-equipe--><div class='equipe-conteudo'><a href='".get_permalink( $query2->post->ID)."'>".$trimmed_content_equipe." <span class='glyphicon glyphicon-plus' aria-hidden='true'></span></a></div><!--equipe-conteudo--></div><!--link-equipe-->";
				
			}
			else{
				if($a['post_type'] == 'midia' && !defined('DOING_AJAX')){
					$depois_interno  = '<a class="btn btn-loadmore" data-paged="2" data-loading="'.__('Carregando...', 'odin').'" data-selector="#interno-nav-midia" data-max-paged="'.$query2->max_num_pages.'" data-category="all">';
					$depois_interno .= __('Carregar +','odin');
					$depois_interno .= '</a>';
				}
				$html .="<a href='".get_permalink( $query2->post->ID)."'><div class='".$class_item." cada-".$a['post_type']." animated bounceIn'>".get_the_post_thumbnail($query2->post->ID, $thumb)."</div></a>";
			}
		endwhile;
		    if(defined('DOING_AJAX') && DOING_AJAX){
		    	global $ajax_max_paged;
		    	$ajax_max_paged = $query2->max_num_pages;
			}
			if($a['post_type'] == 'disco' && !defined('DOING_AJAX')){
				$depois_interno  = '<a class="btn btn-primary btn-loadmore-discos" data-paged="2" data-loading="'.__('Carregando...', 'odin').'" data-selector="#interno-nav-disco" data-max-paged="'.$query2->max_num_pages.'">';
				$depois_interno .= __('Carregar +','odin');
				$depois_interno .= '</a>';
			}

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
	$html = "<div class='row_contato'><div class='col-sm-3'><h3>Contrate o Grupo</h3></div><div id='nome_contato' class='col-sm-4'><span class='glyphicon glyphicon-earphone' aria-hidden='true'></span> <h5>".$contato_options['nome_contato']."</h5><h5>".$contato_options['telefone_contato']."</h5></div><div class='col-sm-5' id='email_contato'><span class='glyphicon glyphicon-envelope
	' aria-hidden='true'></span><h5>".$contato_options['email_contato']."</h5></div><div class='clearfix'></div></div>";
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
	if(!isset($_POST['category']) || $_POST['category'] == 'all'){
		echo do_shortcode('[query post_type="midia" paged="'.$_POST['paged'].'"]');
	}
	else{
		echo do_shortcode('[query post_type="midia" paged="'.$_POST['paged'].'" category="'.$_POST['category'].'"]');
	}
	wp_die();
}
add_action( 'wp_ajax_midia_load_posts', 'ajax_midia_load_posts' );
add_action( 'wp_ajax_nopriv_midia_load_posts', 'ajax_midia_load_posts' );
//ajax load categories posts
function ajax_midia_load_category(){
	global $ajax_max_paged;
	$ajax_response = array();
	$ajax_response['html'] = do_shortcode('[query post_type="midia" category="'.$_POST['category'].'"]');
	$ajax_response['max_paged'] = $ajax_max_paged;
	echo json_encode($ajax_response);
	wp_die();
}
add_action( 'wp_ajax_midia_load_category', 'ajax_midia_load_category' );
add_action( 'wp_ajax_nopriv_midia_load_category', 'ajax_midia_load_category' );

function ajax_discos_load(){
	echo do_shortcode('[query post_type="disco" paged="'.$_POST['paged'].'"]');
	wp_die();
}
add_action( 'wp_ajax_discos_load', 'ajax_discos_load' );
add_action( 'wp_ajax_nopriv_discos_load', 'ajax_discos_load' );
