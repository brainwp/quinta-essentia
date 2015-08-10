<?php

// Adiciona uma nova coluna a listagem (WP-ADMIN) de Eventos
	function nova_coluna_eventos( $eventos_columns ) {
		$new_columns['cb'] = '<input type="checkbox" />';
		$new_columns['title'] = _x('Titulo', 'column name');
		$new_columns['source'] = __('Data do Evento');
		return $new_columns;
	}
	add_filter( 'manage_edit-eventos_columns', 'nova_coluna_eventos' );
// Fim


// Content da nova coluna de listagem (WP-ADMIN) de Eventos
	function content_nova_coluna_eventos ( $column_name, $id ) {
		global $post;
		switch ($column_name) {
			case 'source':
				$data_invert = get_post_meta( $post->ID , 'agenda-event-date' , true );
				$data_explo = explode("/", $data_invert);
				echo
				'<span style="font-size:15px;">' .
				date('d/m/Y', intval($data_invert))
				. '</span>';
				break;
			default:
				break;
		} // Fim switch
	}
	add_action( 'manage_eventos_posts_custom_column', 'content_nova_coluna_eventos', 10, 2 );
// Fim


// Ordena automaticamente os Eventos da Agenda de forma ascendente (ASC)
	function agenda_pre_get_posts( $query ) {
	
		if (is_post_type_archive('eventos') && $query->is_main_query()) {
			$query->set('meta_key', 'agenda-event-date');
			$query->set('orderby', 'meta_value');
			$query->set('order', 'DESC');
		}
		if(is_post_type_archive('eventos') && isset($_GET['by_year']) && $query->is_main_query()){
			$meta_query = array(
				array(
					'key'     => 'agenda-event-year',
					'value'   => $_GET['by_year'],
					'compare' => '=',
				),
			);
			$query->set('meta_query',$meta_query);
		}
	}
	add_filter( 'pre_get_posts' , 'agenda_pre_get_posts' );
// Fim
add_action( 'save_post', 'brasa_eventos_save', 13, 2 );
function brasa_eventos_save($post_id){
	if(get_post_type($post_id) != 'eventos')
		return;
	if(isset($_POST['agenda-event-date']) && !empty($_POST['agenda-event-date'])){
		$date = explode('/', $_POST['agenda-event-date']);
		update_post_meta( $post_id, 'agenda-event-year', $date[2] );
	}
	else{
		delete_post_meta( $post_id, 'agenda-event-year' );
	}
}
?>