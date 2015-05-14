<?php
/////////////CPT secao
add_action( 'init', 'secoes_cpt' );
function secoes_cpt() {
	$labels = array(                        
		'name'               => 'Seções',
		'singular_name'      => 'Seção ',
		'menu_name'          => 'Seções ',
		'name_admin_bar'     => ' Seção',
		'add_new'            => 'Adicionar Nova ',
		'add_new_item'       => 'Adicionar Nova Seção',
		'new_item'           => 'Nova Seção ' ,
		'edit_item'          => 'Editar Seção ',
		'view_item'          => 'Ver todas' ,
		'all_items'          => 'Todas' ,
		'search_items'       => 'Buscar',
		'parent_item_colon'  => 'Pai' ,
		'not_found'          => 'Nenhuma encontrado' ,
		'not_found_in_trash' => 'Nenhuma encontrado na lixeira' ,
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'secao' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon' => 'dashicons-format-gallery',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' )
	);

	register_post_type( 'secao', $args );
}
