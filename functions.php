<?php
/**
 * Theme Functions
 *
 * @package DTtheme
 * @author DesignThemes
 * @link http://wedesignthemes.com
 */
define( 'FITNESSZONE_THEME_DIR', get_template_directory() );
define( 'FITNESSZONE_THEME_URI', get_template_directory_uri() );
define( 'FITNESSZONE_CORE_PLUGIN', WP_PLUGIN_DIR.'/designthemes-core-features' );

if (function_exists ('wp_get_theme')) :
	$themeData = wp_get_theme();
	define( 'FITNESSZONE_THEME_NAME', $themeData->get('Name'));
	define( 'FITNESSZONE_THEME_VERSION', $themeData->get('Version'));
endif;

/* ---------------------------------------------------------------------------
 * Loads Kirki
 * ---------------------------------------------------------------------------*/
require_once( FITNESSZONE_THEME_DIR .'/kirki/index.php' );

/* ---------------------------------------------------------------------------
 * Loads Codestar
 * ---------------------------------------------------------------------------*/
if( !defined( 'CS_OPTION' ) ) {  define( 'CS_OPTION', '_fitnesszone_cs_options' ); }

require_once FITNESSZONE_THEME_DIR .'/cs-framework/cs-framework.php';
if( !defined( 'CS_ACTIVE_TAXONOMY' ) ) { define( 'CS_ACTIVE_TAXONOMY',   false ); }
if( !defined( 'CS_ACTIVE_SHORTCODE' ) ) { define( 'CS_ACTIVE_SHORTCODE',  false ); }
if( !defined( 'CS_ACTIVE_CUSTOMIZE' ) ) { define( 'CS_ACTIVE_CUSTOMIZE',  false ); }

/* ---------------------------------------------------------------------------
 * Create function to get theme options
 * --------------------------------------------------------------------------- */
function fitnesszone_cs_get_option($key, $value = '') {

	$v = cs_get_option( $key );

	if ( !empty( $v ) ) {
		return $v;
	} else {
		return $value;
	}
}

/* ---------------------------------------------------------------------------
 * Loads Theme Textdomain
 * ---------------------------------------------------------------------------*/ 
define( 'FITNESSZONE_LANG_DIR', FITNESSZONE_THEME_DIR. '/languages' );
load_theme_textdomain( 'fitnesszone', FITNESSZONE_LANG_DIR );

/* ---------------------------------------------------------------------------
 * Loads the Admin Panel Style
 * ---------------------------------------------------------------------------*/
function fitnesszone_admin_scripts() {
	wp_enqueue_style('fitnesszone-admin', FITNESSZONE_THEME_URI .'/cs-framework-override/style.css');
}
add_action( 'admin_enqueue_scripts', 'fitnesszone_admin_scripts' );

/* ---------------------------------------------------------------------------
 * Loads Theme Functions
 * ---------------------------------------------------------------------------*/

// Functions --------------------------------------------------------------------
require_once( FITNESSZONE_THEME_DIR .'/framework/register-functions.php' );

// Header -----------------------------------------------------------------------
require_once( FITNESSZONE_THEME_DIR .'/framework/register-head.php' );

// Hooks ------------------------------------------------------------------------
require_once( FITNESSZONE_THEME_DIR .'/framework/register-hooks.php' );

// Post Functions ---------------------------------------------------------------
require_once( FITNESSZONE_THEME_DIR .'/framework/register-post-functions.php' );
new fitnesszone_post_functions;

// Widgets ----------------------------------------------------------------------
add_action( 'widgets_init', 'fitnesszone_widgets_init' );
function fitnesszone_widgets_init() {
	require_once( FITNESSZONE_THEME_DIR .'/framework/register-widgets.php' );
}
// Plugins ---------------------------------------------------------------------- 
require_once( FITNESSZONE_THEME_DIR .'/framework/register-plugins.php' );

// WooCommerce ------------------------------------------------------------------
if( function_exists( 'is_woocommerce' ) && ! class_exists ( 'DTWooPlugin' ) ){
	require_once( FITNESSZONE_THEME_DIR .'/framework/register-woocommerce.php' );
}

// WP Store Locator -------------------------------------------------------------
if( class_exists( 'WP_Store_locator' ) ){
	require_once( FITNESSZONE_THEME_DIR .'/framework/register-storelocator.php' );
}

// Register Gutenberg -----------------------------------------------------------
require_once( FITNESSZONE_THEME_DIR .'/framework/register-gutenberg-editor.php' );