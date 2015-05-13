<?php
/////////////CPT secao
add_action( 'init', 'secoes_cpt' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function secoes_cpt() {
	$labels = array(                        
		'name'               => ' Seções',
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
/////////////////////////////////////////



	/////////////CPT Equipe
	add_action( 'init', 'equipe_cpt' );
	/**
	 * Register a book post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 */
	function equipe_cpt() {
		$labels = array(                        
			'name'               => ' Pessoas',
			'singular_name'      => 'Pessoa ',
			'menu_name'          => 'Equipe ',
			'name_admin_bar'     => ' Pessoa',
			'add_new'            => 'Adicionar Nova ',
			'add_new_item'       => 'Adicionar Nova Pessoa',
			'new_item'           => 'Nova Pessoa ' ,
			'edit_item'          => 'Editar Pessoa ',
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
			'rewrite'            => array( 'slug' => 'equipe' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_icon' => 'dashicons-groups',
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);

		register_post_type( 'equipe', $args );
	}
	/////////////////////////////////////////
	
	/////////////CPT Ações
	add_action( 'init', 'acoes_cpt' );
	/**
	 * Register a book post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 */
	function acoes_cpt() {
		$labels = array(                        
			'name'               => ' acoes',
			'singular_name'      => 'Ação ',
			'menu_name'          => 'Ações ',
			'name_admin_bar'     => ' Ações',
			'add_new'            => 'Adicionar Nova ',
			'add_new_item'       => 'Adicionar Nova Ação',
			'new_item'           => 'Nova Ação ' ,
			'edit_item'          => 'Editar Ação ',
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
			'rewrite'            => array( 'slug' => 'acao' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_icon' => 'dashicons-megaphone',
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);

		register_post_type( 'acao', $args );
	}
	/////////////////////////////////////////