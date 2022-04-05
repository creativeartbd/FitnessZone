<?php
$config = fitnesszone_kirki_config();

FITNESSZONE_Kirki::add_section( 'dt_site_layout_section', array(
	'title' => esc_html__( 'Site Layout', 'fitnesszone' ),
	'priority' => 20
) );

	# site-layout
	FITNESSZONE_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'site-layout',
		'label'    => esc_html__( 'Site Layout', 'fitnesszone' ),
		'section'  => 'dt_site_layout_section',
		'default'  => fitnesszone_defaults('site-layout'),
		'choices' => array(
			'boxed' =>  FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/boxed.png',
			'wide' => FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/wide.png',
		)
	));

	# site-boxed-layout
	FITNESSZONE_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'site-boxed-layout',
		'label'    => esc_html__( 'Customize Boxed Layout?', 'fitnesszone' ),
		'section'  => 'dt_site_layout_section',
		'default'  => '1',
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'fitnesszone' ),
			'off' => esc_attr__( 'No', 'fitnesszone' )
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
		)			
	));

	# body-bg-type
	FITNESSZONE_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-type',
		'label'    => esc_html__( 'Background Type', 'fitnesszone' ),
		'section'  => 'dt_site_layout_section',
		'multiple' => 1,
		'default'  => 'none',
		'choices'  => array(
			'pattern' => esc_attr__( 'Predefined Patterns', 'fitnesszone' ),
			'upload' => esc_attr__( 'Set Pattern', 'fitnesszone' ),
			'none' => esc_attr__( 'None', 'fitnesszone' ),
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-pattern
	FITNESSZONE_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'body-bg-pattern',
		'label'    => esc_html__( 'Predefined Patterns', 'fitnesszone' ),
		'description'    => esc_html__( 'Add Background for body', 'fitnesszone' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'choices' => array(
			FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern1.jpg'=> FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern1.jpg',
			FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern2.jpg'=> FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern2.jpg',
			FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern3.jpg'=> FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern3.jpg',
			FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern4.jpg'=> FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern4.jpg',
			FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern5.jpg'=> FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern5.jpg',
			FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern6.jpg'=> FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern6.jpg',
			FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern7.jpg'=> FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern7.jpg',
			FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern8.jpg'=> FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern8.jpg',
			FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern9.jpg'=> FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern9.jpg',
			FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern10.jpg'=> FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern10.jpg',
			FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern11.jpg'=> FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern11.jpg',
			FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern12.jpg'=> FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern12.jpg',
			FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern13.jpg'=> FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern13.jpg',
			FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern14.jpg'=> FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern14.jpg',
			FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern15.jpg'=> FITNESSZONE_THEME_URI.'/kirki/assets/images/site-layout/pattern15.jpg',
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'pattern' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)						
	));

	# body-bg-image
	FITNESSZONE_Kirki::add_field( $config, array(
		'type' => 'image',
		'settings' => 'body-bg-image',
		'label'    => esc_html__( 'Background Image', 'fitnesszone' ),
		'description'    => esc_html__( 'Add Background Image for body', 'fitnesszone' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'upload' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-position
	FITNESSZONE_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-position',
		'label'    => esc_html__( 'Background Position', 'fitnesszone' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-position' )
		),
		'default' => 'center',
		'multiple' => 1,
		'choices' => fitnesszone_image_positions(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload') ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-repeat
	FITNESSZONE_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-repeat',
		'label'    => esc_html__( 'Background Repeat', 'fitnesszone' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-repeat' )
		),
		'default' => 'repeat',
		'multiple' => 1,
		'choices' => fitnesszone_image_repeats(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload' ) ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));	