<?php if(function_exists("register_field_group"))
{
	register_field_group(array (
			'id' => 'acf_disco',
			'title' => '[:pb]Disco[:]',
			'fields' => array (
				array (
					'key' => 'field_55c12fcedd94d',
					'label' => 'Ordem',
					'name' => 'ordem',
					'type' => 'number',
					'default_value' => 0,
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => '',
					'max' => '',
					'step' => '',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'disco',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'normal',
				'layout' => 'no_box',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 0,
		));
	register_field_group(array (
		'id' => 'acf_secoes',
		'title' => 'seções',
		'fields' => array (
			array (
				'key' => 'field_55415259ba739',
				'label' => 'Ordem',
				'name' => 'ordem',
				'type' => 'number',
				'instructions' => 'quanto mais perto de zero mais em cima da página ela irá aparecer.',
				'required' => 1,
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'secao',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_opcoes-de-midia',
		'title' => 'Opções de mídia',
		'fields' => array (
			array (
				'key' => 'field_557b35cdbcb0f',
				'label' => 'URL do audio no spotify',
				'name' => 'oembed_url',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
	
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'midia',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_opcoes-de-midia-discos',
		'title' => 'Opções de mídia do disco',
		'fields' => array (
			array (
				'key' => 'field_b35cd557bcb0f',
				'label' => 'URL do disco no spotify (modal)',
				'name' => 'oembed_url_disco',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_db7b3555cf',
				'label' => 'URL da musica do disco ( para home )',
				'name' => 'oembed_url',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'disco',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
