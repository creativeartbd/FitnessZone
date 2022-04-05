<?php
$config = fitnesszone_kirki_config();

# Breadcrumb Settings
FITNESSZONE_Kirki::add_section( 'dt_site_breadcrumb_section', array(
	'title' => esc_html__( 'Breadcrumb', 'fitnesszone' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 5
) );

	# customize-breadcrumb-title-typo
	FITNESSZONE_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-breadcrumb-title-typo',
		'label'    => esc_html__( 'Customize Title ?', 'fitnesszone' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => fitnesszone_defaults('customize-breadcrumb-title-typo'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'fitnesszone' ),
			'off' => esc_attr__( 'No', 'fitnesszone' )
		)			
	));
	
	# breadcrumb-title-typo
	FITNESSZONE_Kirki::add_field( $config, array(
		'type'     => 'typography',
		'settings' => 'breadcrumb-title-typo',
		'label'    => esc_html__( 'Title Typography', 'fitnesszone' ),
		'section'  => 'dt_site_breadcrumb_section',
		'output' => array(
			array( 'element' => '.main-title-section h1, h1.simple-title' )
		),
		'default' => fitnesszone_defaults( 'breadcrumb-title-typo' ),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),		
		'active_callback' => array(
			array( 'setting' => 'customize-breadcrumb-title-typo', 'operator' => '==', 'value' => '1' )
		)		
	));		
	
	# customize-breadcrumb-typo
	FITNESSZONE_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-breadcrumb-typo',
		'label'    => esc_html__( 'Customize Link ?', 'fitnesszone' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => fitnesszone_defaults('customize-breadcrumb-typo'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'fitnesszone' ),
			'off' => esc_attr__( 'No', 'fitnesszone' )
		)			
	));
	
	# breadcrumb-typo
	FITNESSZONE_Kirki::add_field( $config, array(
		'type'     => 'typography',
		'settings' => 'breadcrumb-typo',
		'label'    => esc_html__( 'Link Typography', 'fitnesszone' ),
		'section'  => 'dt_site_breadcrumb_section',
		'output' => array(
			array( 'element' => 'div.breadcrumb a' )
		),
		'default' => fitnesszone_defaults( 'breadcrumb-typo' ),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),
		'active_callback' => array(
			array( 'setting' => 'customize-breadcrumb-typo', 'operator' => '==', 'value' => '1' )
		)		
	));
# Breadcrumb Settings

# Body Content
FITNESSZONE_Kirki::add_section( 'dt_body_content_typo_section', array(
	'title' => esc_html__( 'Body', 'fitnesszone' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 15
) );

	# customize-body-content-typo
	FITNESSZONE_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-body-content-typo',
		'label'    => esc_html__( 'Customize Content Typo', 'fitnesszone' ),
		'section'  => 'dt_body_content_typo_section',
		'default'  => fitnesszone_defaults( 'customize-body-content-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'fitnesszone' ),
			'off' => esc_attr__( 'No', 'fitnesszone' )
		)
	));

	# body-content-typo
	FITNESSZONE_Kirki::add_field( $config ,array(
		'type' => 'typography',
		'settings' => 'body-content-typo',
		'label'    => esc_html__('Settings', 'fitnesszone'),
		'section'  => 'dt_body_content_typo_section',
		'output' => array( 
			array( 'element' => 'body' ),
			array( 
				'element' => '.editor-styles-wrapper > *',
				'context' => array ('editor')
			)
		),
		'default' => fitnesszone_defaults('body-content-typo'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),
		'active_callback' => array(
			array( 'setting' => 'customize-body-content-typo', 'operator' => '==', 'value' => '1' )
		)
	));	

# Heading
FITNESSZONE_Kirki::add_section( 'dt_headings_typo_section', array(
	'title' => esc_html__( 'Headings', 'fitnesszone' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 20
) );

	# H1
	# customize-body-h1-typo
	FITNESSZONE_Kirki::add_field( 'fitnesszone_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h1-typo',
		'label'    => esc_html__( 'Customize H1 Tag', 'fitnesszone' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => fitnesszone_defaults( 'customize-body-h1-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'fitnesszone' ),
			'off' => esc_attr__( 'No', 'fitnesszone' )
		)
	));

	# h1 tag typography	
	FITNESSZONE_Kirki::add_field( 'fitnesszone_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h1',
		'label'    =>__('H1 Tag Settings', 'fitnesszone'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h1' ),
			array( 
				'element' => '.editor-post-title__block .editor-post-title__input, .editor-styles-wrapper .wp-block h1, body#tinymce.wp-editor.content h1',
				'context' => array ('editor')
			),
		),
		'default' => fitnesszone_defaults('h1'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),					
		'active_callback' => array(
			array( 'setting' => 'customize-body-h1-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H1 Divider
	FITNESSZONE_Kirki::add_field( 'fitnesszone_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h1-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H2
	# customize-body-h2-typo
	FITNESSZONE_Kirki::add_field( 'fitnesszone_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h2-typo',
		'label'    => esc_html__( 'Customize H2 Tag', 'fitnesszone' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => fitnesszone_defaults( 'customize-body-h2-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'fitnesszone' ),
			'off' => esc_attr__( 'No', 'fitnesszone' )
		)
	));

	# h2 tag typography	
	FITNESSZONE_Kirki::add_field( 'fitnesszone_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h2',
		'label'    =>__('H2 Tag Settings', 'fitnesszone'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h2' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h2',
				'context' => array ('editor')
			),
		),
		'default' => fitnesszone_defaults('h2'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),									
		'active_callback' => array(
			array( 'setting' => 'customize-body-h2-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H2 Divider
	FITNESSZONE_Kirki::add_field( 'fitnesszone_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h2-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H3
	# customize-body-h3-typo
	FITNESSZONE_Kirki::add_field( 'fitnesszone_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h3-typo',
		'label'    => esc_html__( 'Customize H3 Tag', 'fitnesszone' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => fitnesszone_defaults( 'customize-body-h3-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'fitnesszone' ),
			'off' => esc_attr__( 'No', 'fitnesszone' )
		)
	));

	# h3 tag typography	
	FITNESSZONE_Kirki::add_field( 'fitnesszone_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h3',
		'label'    =>__('H3 Tag Settings', 'fitnesszone'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h3' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h3',
				'context' => array ('editor')
			),
		),
		'default' => fitnesszone_defaults('h3'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),									
		'active_callback' => array(
			array( 'setting' => 'customize-body-h3-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H3 Divider
	FITNESSZONE_Kirki::add_field( 'fitnesszone_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h3-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H4
	# customize-body-h4-typo
	FITNESSZONE_Kirki::add_field( 'fitnesszone_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h4-typo',
		'label'    => esc_html__( 'Customize H4 Tag', 'fitnesszone' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => fitnesszone_defaults( 'customize-body-h4-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'fitnesszone' ),
			'off' => esc_attr__( 'No', 'fitnesszone' )
		)
	));

	# h4 tag typography	
	FITNESSZONE_Kirki::add_field( 'fitnesszone_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h4',
		'label'    =>__('H4 Tag Settings', 'fitnesszone'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h4' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h4',
				'context' => array ('editor')
			),
		),
		'default' => fitnesszone_defaults('h4'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),									
		'active_callback' => array(
			array( 'setting' => 'customize-body-h4-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H4 Divider
	FITNESSZONE_Kirki::add_field( 'fitnesszone_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h4-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H5
	# customize-body-h5-typo
	FITNESSZONE_Kirki::add_field( 'fitnesszone_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h5-typo',
		'label'    => esc_html__( 'Customize H5 Tag', 'fitnesszone' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => fitnesszone_defaults( 'customize-body-h5-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'fitnesszone' ),
			'off' => esc_attr__( 'No', 'fitnesszone' )
		)
	));

	# h5 tag typography	
	FITNESSZONE_Kirki::add_field( 'fitnesszone_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h5',
		'label'    =>__('H5 Tag Settings', 'fitnesszone'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h5' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h5',
				'context' => array ('editor')
			),
		),
		'default' => fitnesszone_defaults('h5'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),									
		'active_callback' => array(
			array( 'setting' => 'customize-body-h5-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H5 Divider
	FITNESSZONE_Kirki::add_field( 'fitnesszone_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h5-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H6
	# customize-body-h6-typo
	FITNESSZONE_Kirki::add_field( 'fitnesszone_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h6-typo',
		'label'    => esc_html__( 'Customize H6 Tag', 'fitnesszone' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => fitnesszone_defaults( 'customize-body-h6-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'fitnesszone' ),
			'off' => esc_attr__( 'No', 'fitnesszone' )
		)
	));

	# h6 tag typography	
	FITNESSZONE_Kirki::add_field( 'fitnesszone_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h6',
		'label'    =>__('H6 Tag Settings', 'fitnesszone'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h6' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h6',
				'context' => array ('editor')
			),
		),
		'default' => fitnesszone_defaults('h6'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),									
		'active_callback' => array(
			array( 'setting' => 'customize-body-h6-typo', 'operator' => '==', 'value' => '1' )
		)
	));
	
# Footer Typography
	FITNESSZONE_Kirki::add_section( 'dt_footer_typo', array(
		'title'	=> esc_html__( 'Footer', 'fitnesszone' ),
		'panel' => 'dt_site_typography_panel',
		'priority' => 100,
	) );

		# customize-footer-title-typo
		FITNESSZONE_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-title-typo',
			'label'    => esc_html__( 'Customize Title ?', 'fitnesszone' ),
			'section'  => 'dt_footer_typo',
			'default'  => fitnesszone_defaults('customize-footer-title-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'fitnesszone' ),
				'off' => esc_attr__( 'No', 'fitnesszone' )
			),
		));
		
		# footer-title-typo
	FITNESSZONE_Kirki::add_field( 'fitnesszone_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'footer-title-typo',
		'label'    =>__('Title Typography', 'fitnesszone'),
		'section'  => 'dt_footer_typo',
		'output' => array( 
			array( 'element' => '#footer h3' )
		),
		'default' => fitnesszone_defaults('footer-title-typo'),								
		'active_callback' => array(
			array( 'setting' => 'customize-footer-title-typo', 'operator' => '==', 'value' => '1' )
		)
	));

		# Divider
		FITNESSZONE_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'footer-title-typo-divider',
			'section'  => 'dt_footer_typo',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'customize-footer-title-typo', 'operator' => '==', 'value' => '1' )
			)			
		));

		# customize-footer-content-typo
		FITNESSZONE_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-content-typo',
			'label'    => esc_html__( 'Customize Content ?', 'fitnesszone' ),
			'section'  => 'dt_footer_typo',
			'default'  => fitnesszone_defaults('customize-footer-content-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'fitnesszone' ),
				'off' => esc_attr__( 'No', 'fitnesszone' )
			),
		));

		# footer-content-typo
		FITNESSZONE_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-content-typo',
			'label'    => esc_html__( 'Content Typography', 'fitnesszone' ),
			'section'  => 'dt_footer_typo',
			'output' => array(
				array( 'element' => '#footer, .footer-copyright, div.footer-widgets .widget' )
			),
			'default' => fitnesszone_defaults( 'footer-content-typo' ),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# footer-content-a-color		
		FITNESSZONE_Kirki::add_field( $config, array(
			'type'     => 'color',
			'settings' => 'footer-content-a-color',
			'label'    => esc_html__( 'Anchor Color', 'fitnesszone' ),
			'section'  => 'dt_footer_typo',
			'choices' => array( 'alpha' => true ),
			'output' => array(
				array( 'element' => '.footer-widgets a, #footer a' )
			),
			'default' => fitnesszone_defaults( 'footer-content-a-color' ),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# footer-content-a-hover-color
		FITNESSZONE_Kirki::add_field( $config, array(
			'type'     => 'color',
			'settings' => 'footer-content-a-hover-color',
			'label'    => esc_html__( 'Anchor Hover Color', 'fitnesszone' ),
			'section'  => 'dt_footer_typo',
			'choices' => array( 'alpha' => true ),			
			'output' => array(
				array( 'element' => '.footer-widgets a:hover, #footer a:hover' )
			),
			'default' => fitnesszone_defaults( 'footer-content-a-hover-color' ),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));