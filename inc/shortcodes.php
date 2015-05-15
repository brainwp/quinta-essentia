<?php
//[query] 

function short_query_func( $atts ) {
	$html='';
    $a = shortcode_atts( array(
	        'post_type' => 'flauta',
	        ), $atts );
	switch ($a['post_type']) {
	   case 'flauta':
	        $per_page= '999999999';
			$thumb='thumb-flauta';
			$html = '<h1>Flautas</h1>';
	         break;
	   case 'projeto':
		     $per_page= '99999';
			$thumb='thumb-projeto';
		
	         break;
	   case 'midia':
			 $per_page= '9';
			$thumb='thumb-midia';
			
	         break;
		case 'equipe':
				 $per_page= '999999';
				$thumb='thumb-equipe';
        
		         break;
	    case 'disco':
	    		 $per_page= '99999';
	    		$thumb='thumb-disco';
       
	             break;
		 case 'post':
		 		 $per_page= '1';
		 		$thumb='thumb-blog';
        
		          break;
	}  
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	
	$args = array(
		'post_type' => $a['post_type'],
		'posts_per_page' => $per_page,
		'paged'         => $paged,
	    
	);

	$query = new WP_Query( $args );
	$html .= "<div id='interno-".$a['post_type']."'><div id='interno-nav-".$a['post_type']."'>";
	if($query->have_posts()) : 
	    while($query->have_posts()) : 
	    	$query->the_post();
        	
			$html .="<div class='cada-".$a['post_type']."'>".get_the_post_thumbnail($query->post->ID, $thumb)."</div>";
			
		endwhile;
			
		    wp_reset_postdata();   	
		else: 
		    $html = 'Adicionar um '.$a['post_type'];

	
	   endif;
	$html .= "</div></div>";
    return $html;
}
add_shortcode( 'query', 'short_query_func' );





