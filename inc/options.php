<?php $odin_theme_options = new Odin_Theme_Options( 
    'slug-da-pagina', // Slug/ID da página (Obrigatório)
    __( 'Opções do tema', 'odin' ), // Titulo da página (Obrigatório)
    'manage_options' // Nível de permissão (Opcional) [padrão é manage_options]
);
$odin_theme_options->set_tabs(
    array(
        array(
            'id' => 'odin_general', // ID da aba e nome da entrada no banco de dados.
            'title' => __( 'Home', 'odin' ), // Título da aba.
        ),
		array(
		     'id' => 'parallax_tab',
		     'title' => __( 'Parallax', 'odin' )
   		),
		array(
		     'id' => 'sobre_tab',
		     'title' => __( 'Sobre', 'odin' )
   		),
		array(
		     'id' => 'contato_tab',
		     'title' => __( 'Informação de contato', 'odin' )
   		),
    )
);
$odin_theme_options->set_fields(
    array(
        'general_section' => array(
            'tab'   => 'odin_general', // Sessão da aba odin_general
            'title' => __( 'Destaque', 'odin' ),
            'fields' => array(
                array(   
				    'id'          => 'destaque_check', // Required
				    'label'       => __( 'Mostrar destaque na home?', 'odin' ), // Required
				    'type'        => 'checkbox', // Required
				    // 'attributes' => array(), // Optional (html input elements)
				    // 'default'    => '', // Optional (1 for checked)
				    'description' => __( 'Marcar para exibir o destaque na home', 'odin' ), // Optional
				),
				array(
				    'id'          => 'destaque', // Obrigatório
				    'label'       => __( 'Testo de destaque', 'odin' ), // Obrigatório
				    'type'        => 'editor', // Obrigatório
				    'default'     => '', // Opcional
				    'description' => __( 'Preencha com o destaque da home', 'odin' ), // Opcional
				    'options'     => array( // Opcional (aceita argumentos do wp_editor)
				        'textarea_rows' => 10
				    ),
				),
				array(
				    'id'          => 'destaque_img', // Obrigatório
				    'label'       => __( 'Imagem do destaque', 'odin' ), // Obrigatório
				    'type'        => 'image', // Obrigatório
				    'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)
				    'description' => __( 'Imagem da Seção de destaque', 'odin' ), // Opcional
				),
				
            )
        ),
		'parallax_section' => array(
            'tab'   => 'parallax_tab', // Sessão da aba odin_general
            'title' => __( 'Imagens de Paralax', 'odin' ),
            'fields' => array(
   				array(
				    'id'          => 'parallax_1', // Obrigatório
				    'label'       => __( 'Imagem de fundo paralax 1', 'odin' ), // Obrigatório
				    'type'        => 'image', // Obrigatório
				    'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)
				    'description' => __( 'Imagem entre destaque e Sobre', 'odin' ), // Opcional
				),
				array(
				    'id'          => 'parallax_2', // Obrigatório
				    'label'       => __( 'Imagem de fundo paralax 2', 'odin' ), // Obrigatório
				    'type'        => 'image', // Obrigatório
				    'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)
				    'description' => __( 'Imagem entre midia e discografia', 'odin' ), // Opcional
				)
            )
        ),
		'sobre_section' => array(
            'tab'   => 'sobre_tab', // Sessão da aba odin_general
            'title' => __( 'Opções da seção Sobre', 'odin' ),
            'fields' => array(
   				array(
				    'id'          => 'logo', // Obrigatório
				    'label'       => __( 'Logotipo', 'odin' ), // Obrigatório
				    'type'        => 'image', // Obrigatório
				    'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)
				    'description' => __( 'Logotipo do grupo', 'odin' ), // Opcional
				)
            )
        ),
		'contato_section' => array(
            'tab'   => 'contato_tab', // Sessão da aba odin_general
            'title' => __( 'Informações para o contato do grupo', 'odin' ),
            'fields' => array(
   				array(
				      'id' => 'nome_contato',
				      'label' => __( 'Nome para contato', 'odin' ),
				      'type' => 'text'
				),
				array(
				      'id' => 'telefone_contato',
				      'label' => __( 'Telefone para contato', 'odin' ),
				      'type' => 'text'
				),
				array(
				      'id' => 'email_contato',
				      'label' => __( 'Email para contato', 'odin' ),
				      'type' => 'text'
				),
				array(
				      'id' => 'facebook',
				      'label' => __( 'Facebook', 'odin' ),
				      'type' => 'text'
				),
				array(
				      'id' => 'twitter',
				      'label' => __( 'Twitter', 'odin' ),
				      'type' => 'text'
				),
				array(
				      'id' => 'instagram',
				      'label' => __( 'Instagram', 'odin' ),
				      'type' => 'text'
				),
				array(
				      'id' => 'youtube',
				      'label' => __( 'Youtube', 'odin' ),
				      'type' => 'text'
				),
				array(
				      'id' => 'soundcloud',
				      'label' => __( 'Sound cloud', 'odin' ),
				      'type' => 'text'
				),
				array(
				      'id' => 'reverbnation',
				      'label' => __( 'Reverbnation', 'odin' ),
				      'type' => 'text'
				),
				array(
				      'id' => 'vimeo',
				      'label' => __( 'Vimeo', 'odin' ),
				      'type' => 'text'
				),
            )
        ),
		
    )
);