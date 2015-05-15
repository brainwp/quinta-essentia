<?php $odin_theme_options = new Odin_Theme_Options( 
    'slug-da-pagina', // Slug/ID da página (Obrigatório)
    __( 'Opções do tema', 'odin' ), // Titulo da página (Obrigatório)
    'manage_options' // Nível de permissão (Opcional) [padrão é manage_options]
);
$odin_theme_options->set_tabs(
    array(
        array(
            'id' => 'odin_general', // ID da aba e nome da entrada no banco de dados.
            'title' => __( 'Configurações', 'odin' ), // Título da aba.
        ),
        
    )
);
$odin_theme_options->set_fields(
    array(
        'general_section' => array(
            'tab'   => 'odin_general', // Sessão da aba odin_general
            'title' => __( 'Configuração', 'odin' ),
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
				    'label'       => __( 'Destaque', 'odin' ), // Obrigatório
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
				)
            )
        ),
    )
);