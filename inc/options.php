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
				    'id'          => 'destaque', // Obrigatório
				    'label'       => __( 'Destaque', 'odin' ), // Obrigatório
				    'type'        => 'editor', // Obrigatório
				    'default'     => '', // Opcional
				    'description' => __( 'Preencha com o destaque da home, quando em branco não será exibido', 'odin' ), // Opcional
				    'options'     => array( // Opcional (aceita argumentos do wp_editor)
				        'textarea_rows' => 10
				    ),
				)
            )
        ),
    )
);