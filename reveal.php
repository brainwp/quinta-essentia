<?php
/* reveal modal template file */
global $wp_query;
if(is_object($wp_query) && is_object($wp_query->post) && !empty($wp_query->post->ID)){
  $type = get_post_type($wp_query->post->ID); 
  if($type == 'eventos'){
    get_template_part('modal','eventos');
  }
  elseif($type == 'discos'){
    get_template_part('modal','discos');
  }
else{
	get_template_part('modal');
    
}
}