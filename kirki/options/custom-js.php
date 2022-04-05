<?php
$config = fitnesszone_kirki_config();

FITNESSZONE_Kirki::add_section( 'dt_custom_js_section', array(
	'title' => esc_html__( 'Additional JS', 'fitnesszone' ),
	'priority' => 210
) );

	# custom-js
	FITNESSZONE_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'enable-custom-js',
		'section'  => 'dt_custom_js_section',
		'label'    => esc_html__( 'Enable Custom JS?', 'fitnesszone' ),
		'default'  => fitnesszone_defaults('enable-custom-js'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'fitnesszone' ),
			'off' => esc_attr__( 'No', 'fitnesszone' )
		)		
	));

	# custom-js
	FITNESSZONE_Kirki::add_field( $config, array(
		'type'     => 'code',
		'settings' => 'custom-js',
		'section'  => 'dt_custom_js_section',
		'transport' => 'postMessage',
		'label'    => esc_html__( 'Add Custom JS', 'fitnesszone' ),
		'choices'     => array(
			'language' => 'javascript',
			'theme'    => 'dark',
		),
		'active_callback' => array(
			array( 'setting' => 'enable-custom-js' , 'operator' => '==', 'value' =>'1')
		)
	));