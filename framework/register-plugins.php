<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Kriya for publication on ThemeForest
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once FITNESSZONE_THEME_DIR . '/framework/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'fitnesszone_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function fitnesszone_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		array(
			'name'     				=> esc_html__('DesignThemes Core Features Plugin', 'fitnesszone'),
			'slug'     				=> 'designthemes-core-features',
			'source'   				=> FITNESSZONE_THEME_DIR . '/framework/plugins/designthemes-core-features.zip',
			'required' 				=> true,
			'version' 				=> '3.6',
		),
		
		array(
			'name' 					=> esc_html__('Contact Form 7', 'fitnesszone'),
			'slug' 					=> 'contact-form-7',
			'required' 				=> false,
		),
		
		array(
			'name' 					=> esc_html__('BBPress', 'fitnesszone'),
			'slug' 					=> 'bbpress',
			'required' 				=> false,
		),
			
		array(
			'name' 					=> esc_html__('BuddyPress', 'fitnesszone'),
			'slug' 					=> 'buddypress',
			'required' 				=> false,
		),

		array(
			'name' 					=> esc_html__('WooCommerce - excelling eCommerce', 'fitnesszone'),
			'slug' 					=> 'woocommerce',
			'required' 				=> false,
		),
		
		array(
			'name'        =>    esc_html__('YITH WooCommerce Wishlist','fitnesszone'),
			'slug'        =>    'yith-woocommerce-wishlist',
			'required'    =>    false
        ),


		array(
			'name'        =>    esc_html__('YITH WooCommerce Zoom Magnifier','fitnesszone'),
			'slug'        =>    'yith-woocommerce-zoom-magnifier',
			'required'    =>    false
        ),
		
	
		array(
			'name' 					=> esc_html__('Like This', 'fitnesszone'),
			'slug' 					=> 'roses-like-this',
			'required'			 	=> false,
		),
		
		array(
			'name'     				=> esc_html__('The Events Calendar', 'fitnesszone'),
			'slug'     				=> 'the-events-calendar',
			'required' 				=> true,
		),
		
		array(
			'name'     				=> esc_html__('Timetable Responsive Schedule For WordPress', 'fitnesszone'),
			'slug'     				=> 'timetable',
			'source'   				=> FITNESSZONE_THEME_DIR . '/framework/plugins/timetable.zip',
			'required' 				=> false,
			'version' 				=> '6.4',
			),

		array(
			'name' 					=> esc_html__('s2Member Framework', 'fitnesszone'),
			'slug' 					=> 's2member',
			'required' 				=> false,
		),

		array(
			'name'     				=> esc_html__('Unyson', 'fitnesszone'),
			'slug'     				=> 'unyson',
			'required' 				=> true,
		),

		array(
			'name'     				=> esc_html__('Kirki Toolkit', 'fitnesszone'),
			'slug'     				=> 'kirki',
			'required' 				=> true,
		)
	);

	$args = array(
		'user-agent' => 'WordPress/' . get_bloginfo( 'version' ) . '; ' . network_site_url(),
		'timeout'    => 30,
	);

	$response = wp_remote_get( 'http://wedesignthemes.com/plugins/designthemes/version-new.php', $args );
	$data = json_decode( wp_remote_retrieve_body( $response ), true );

	if ( is_array( $data ) && ! empty( $data ) ) {
		$updated_plugin_list = array_merge( $data, $plugins );
	} else {
		$updated_plugin_list = $plugins;
	}

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'fitnesszone',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                    // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $updated_plugin_list, $config );
}?>