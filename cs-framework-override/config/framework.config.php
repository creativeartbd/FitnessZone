<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly. 
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => constant('FITNESSZONE_THEME_NAME').' '.esc_html__('Options', 'fitnesszone'),
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => constant('FITNESSZONE_THEME_NAME') .' '. esc_html__('Admin Panel', 'fitnesszone'),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

$options[]      = array(
  'name'        => 'general',
  'title'       => esc_html__('General', 'fitnesszone'),
  'icon'        => 'fa fa-gears',

  'fields'      => array(

	array(
	  'type'    => 'subheading',
	  'content' => esc_html__( 'General Options', 'fitnesszone' ),
	),
	
	array(
		'id'	=> 'header',
		'type'	=> 'select',
		'title'	=> esc_html__('Site Header', 'fitnesszone'),
		'class'	=> 'chosen',
		'options'	=> 'posts',
		'query_args'	=> array(
			'post_type'	=> 'dt_headers',
			'orderby'	=> 'title',
			'order'	=> 'ASC',
			'posts_per_page' => -1
		),
		'default_option'	=> esc_attr__('Select Header', 'fitnesszone'),
		'attributes'	=> array ( 'style'	=> 'width:50%'),
		'info'	=> esc_html__('Select default header.','fitnesszone'),
	),
	
	array(
		'id'	=> 'footer',
		'type'	=> 'select',
		'title'	=> esc_html__('Site Footer', 'fitnesszone'),
		'class'	=> 'chosen',
		'options'	=> 'posts',
		'query_args'	=> array(
			'post_type'	=> 'dt_footers',
			'orderby'	=> 'title',
			'order'	=> 'ASC',
			'posts_per_page' => -1
		),
		'default_option'	=> esc_attr__('Select Footer', 'fitnesszone'),
		'attributes'	=> array ( 'style'	=> 'width:50%'),
		'info'	=> esc_html__('Select defaultfooter.','fitnesszone'),
	),

	array(
	  'id'  	 => 'use-site-loader',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Site Loader', 'fitnesszone'),
	  'info'	 => esc_html__('YES! to use site loader.', 'fitnesszone')
	),	

	array(
	  'id'  	 => 'enable-stylepicker',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Style Picker', 'fitnesszone'),
	  'info'	 => esc_html__('YES! to show the style picker.', 'fitnesszone')
	),		

	array(
	  'id'  	 => 'show-pagecomments',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Globally Show Page Comments', 'fitnesszone'),
	  'info'	 => esc_html__('YES! to show comments on all the pages. This will globally override your "Allow comments" option under your page "Discussion" settings.', 'fitnesszone'),
	  'default'  => true,
	),

	array(
	  'id'  	 => 'showall-pagination',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Show all pages in Pagination', 'fitnesszone'),
	  'info'	 => esc_html__('YES! to show all the pages instead of dots near the current page.', 'fitnesszone')
	),



	array(
	  'id'      => 'google-map-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Google Map API Key', 'fitnesszone'),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid google account api key here', 'fitnesszone').'</p>',
	),

	array(
	  'id'      => 'mailchimp-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Mailchimp API Key', 'fitnesszone'),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid mailchimp account api key here', 'fitnesszone').'</p>',
	),

	array(
		'type'    => 'subheading',
		'content' => esc_html__( "Currency Settings", 'fitnesszone' ),
	  ),

	  array(
		'id'    => 'currency-symbol',
		'type'   => 'text',
		'title' => esc_html__('Currency Symbol', 'fitnesszone'),
		'info'  => esc_html__('Please set default currency symbol which will be used in front end display', 'fitnesszone')
	  ),

	  array(
		'id'           => 'currency-membership',
		'type'         => 'select',
		'title'        => esc_html__('Currency Membership', 'fitnesszone'),
		'attributes'	=> array ( 'style'	=> 'width:20%'),
		'options'      => array(
			'ADF' => esc_html__('ADF', 'fitnesszone'),
			'ADP' => esc_html__('ADP', 'fitnesszone'),
			'AED' => esc_html__('AED', 'fitnesszone'),
			'AFA' => esc_html__('AFA', 'fitnesszone'),
			'AFN' => esc_html__('AFN', 'fitnesszone'),
			'ALL' => esc_html__('ALL', 'fitnesszone'),
			'AMD' => esc_html__('AMD', 'fitnesszone'),
			'ANG' => esc_html__('ANG', 'fitnesszone'),
			'AOA' => esc_html__('AOA', 'fitnesszone'),
			'AON' => esc_html__('AON', 'fitnesszone'),
			'ARS' => esc_html__('ARS', 'fitnesszone'),
			'ATS' => esc_html__('ATS', 'fitnesszone'),
			'AUD' => esc_html__('AUD', 'fitnesszone'),
			'AWG' => esc_html__('AWG', 'fitnesszone'),
			'AZN' => esc_html__('AZN', 'fitnesszone'),
			'BAM' => esc_html__('BAM', 'fitnesszone'),
			'BBD' => esc_html__('BBD', 'fitnesszone'),
			'BDT' => esc_html__('BDT', 'fitnesszone'),
			'BEF' => esc_html__('BEF', 'fitnesszone'),
			'BGN' => esc_html__('BGN', 'fitnesszone'),
			'BHD' => esc_html__('BHD', 'fitnesszone'),
			'BIF' => esc_html__('BIF', 'fitnesszone'),
			'BMD' => esc_html__('BMD', 'fitnesszone'),
			'BND' => esc_html__('BND', 'fitnesszone'),
			'BOB' => esc_html__('BOB', 'fitnesszone'),
			'BRL' => esc_html__('BRL', 'fitnesszone'),
			'BSD' => esc_html__('BSD', 'fitnesszone'),
			'BTN' => esc_html__('BTN', 'fitnesszone'),
			'BWP' => esc_html__('BWP', 'fitnesszone'),
			'BYR' => esc_html__('BYR', 'fitnesszone'),
			'BZD' => esc_html__('BZD', 'fitnesszone'),
			'CAD' => esc_html__('CAD', 'fitnesszone'),
			'CDF' => esc_html__('CDF', 'fitnesszone'),
			'CFP' => esc_html__('CFP', 'fitnesszone'),
			'CHF' => esc_html__('CHF', 'fitnesszone'),
			'CLP' => esc_html__('CLP', 'fitnesszone'),
			'CNY' => esc_html__('CNY', 'fitnesszone'),
			'COP' => esc_html__('COP', 'fitnesszone'),
			'CRC' => esc_html__('CRC', 'fitnesszone'),
			'CSK' => esc_html__('CSK', 'fitnesszone'),
			'CUC' => esc_html__('CUC', 'fitnesszone'),
			'CUP' => esc_html__('CUP', 'fitnesszone'),
			'CVE' => esc_html__('CVE', 'fitnesszone'),
			'CYP' => esc_html__('CYP', 'fitnesszone'),
			'CZK' => esc_html__('CZK', 'fitnesszone'),
			'DEM' => esc_html__('DEM', 'fitnesszone'),
			'DJF' => esc_html__('DJF', 'fitnesszone'),
			'DKK' => esc_html__('DKK', 'fitnesszone'),
			'DOP' => esc_html__('DOP', 'fitnesszone'),
			'DZD' => esc_html__('DZD', 'fitnesszone'),
			'ECS' => esc_html__('ECS', 'fitnesszone'),
			'EEK' => esc_html__('EEK', 'fitnesszone'),
			'EGP' => esc_html__('EGP', 'fitnesszone'),
			'ESP' => esc_html__('ESP', 'fitnesszone'),
			'ETB' => esc_html__('ETB', 'fitnesszone'),
			'EUR' => esc_html__('EUR', 'fitnesszone'),
			'FIM' => esc_html__('FIM', 'fitnesszone'),
			'FJD' => esc_html__('FJD', 'fitnesszone'),
			'FKP' => esc_html__('FKP', 'fitnesszone'),
			'FRF' => esc_html__('FRF', 'fitnesszone'),
			'GBP' => esc_html__('GBP', 'fitnesszone'),
			'GEL' => esc_html__('GEL', 'fitnesszone'),
			'GHC' => esc_html__('GHC', 'fitnesszone'),
			'GHS' => esc_html__('GHS', 'fitnesszone'),
			'GIP' => esc_html__('GIP', 'fitnesszone'),
			'GMD' => esc_html__('GMD', 'fitnesszone'),
			'GNF' => esc_html__('GNF', 'fitnesszone'),
			'GRD' => esc_html__('GRD', 'fitnesszone'),
			'GTQ' => esc_html__('GTQ', 'fitnesszone'),
			'GYD' => esc_html__('GYD', 'fitnesszone'),
			'HKD' => esc_html__('HKD', 'fitnesszone'),
			'HNL' => esc_html__('HNL', 'fitnesszone'),
			'HRK' => esc_html__('HRK', 'fitnesszone'),
			'HTG' => esc_html__('HTG', 'fitnesszone'),
			'HUF' => esc_html__('HUF', 'fitnesszone'),
			'IDR' => esc_html__('IDR', 'fitnesszone'),
			'IEP' => esc_html__('IEP', 'fitnesszone'),
			'ILS' => esc_html__('ILS', 'fitnesszone'),
			'INR' => esc_html__('INR', 'fitnesszone'),
			'IQD' => esc_html__('IQD', 'fitnesszone'),
			'IRR' => esc_html__('IRR', 'fitnesszone'),
			'ISK' => esc_html__('ISK', 'fitnesszone'),
			'ITL' => esc_html__('ITL', 'fitnesszone'),
			'JMD' => esc_html__('JMD', 'fitnesszone'),
			'JOD' => esc_html__('JOD', 'fitnesszone'),
			'JPY' => esc_html__('JPY', 'fitnesszone'),
			'KES' => esc_html__('KES', 'fitnesszone'),
			'KGS' => esc_html__('KGS', 'fitnesszone'),
			'KHR' => esc_html__('KHR', 'fitnesszone'),
			'KMF' => esc_html__('KMF', 'fitnesszone'),
			'KPW' => esc_html__('KPW', 'fitnesszone'),
			'KRW' => esc_html__('KRW', 'fitnesszone'),
			'KWD' => esc_html__('KWD', 'fitnesszone'),
			'KYD' => esc_html__('KYD', 'fitnesszone'),
			'KZT' => esc_html__('KZT', 'fitnesszone'),
			'LAK' => esc_html__('LAK', 'fitnesszone'),
			'LBP' => esc_html__('LBP', 'fitnesszone'),
			'LKR' => esc_html__('LKR', 'fitnesszone'),
			'LRD' => esc_html__('LRD', 'fitnesszone'),
			'LSL' => esc_html__('LSL', 'fitnesszone'),
			'LTL' => esc_html__('LTL', 'fitnesszone'),
			'LUF' => esc_html__('LUF', 'fitnesszone'),
			'LVL' => esc_html__('LVL', 'fitnesszone'),
			'LYD' => esc_html__('LYD', 'fitnesszone'),
			'MAD' => esc_html__('MAD', 'fitnesszone'),
			'MDL' => esc_html__('MDL', 'fitnesszone'),
			'MGF' => esc_html__('MGF', 'fitnesszone'),
			'MKD' => esc_html__('MKD', 'fitnesszone'),
			'MMK' => esc_html__('MMK', 'fitnesszone'),
			'MNT' => esc_html__('MNT', 'fitnesszone'),
			'MOP' => esc_html__('MOP', 'fitnesszone'),
			'MRO' => esc_html__('MRO', 'fitnesszone'),
			'MTL' => esc_html__('MTL', 'fitnesszone'),
			'MUR' => esc_html__('MUR', 'fitnesszone'),
			'MVR' => esc_html__('MVR', 'fitnesszone'),
			'MWK' => esc_html__('MWK', 'fitnesszone'),
			'MXN' => esc_html__('MXN', 'fitnesszone'),
			'MYR' => esc_html__('MYR', 'fitnesszone'),
			'MZM' => esc_html__('MZM', 'fitnesszone'),
			'MZN' => esc_html__('MZN', 'fitnesszone'),
			'NAD' => esc_html__('NAD', 'fitnesszone'),
			'NGN' => esc_html__('NGN', 'fitnesszone'),
			'NIO' => esc_html__('NIO', 'fitnesszone'),
			'NLG' => esc_html__('NLG', 'fitnesszone'),
			'NOK' => esc_html__('NOK', 'fitnesszone'),
			'NPR' => esc_html__('NPR', 'fitnesszone'),
			'NZD' => esc_html__('NZD', 'fitnesszone'),
			'OMR' => esc_html__('OMR', 'fitnesszone'),
			'PAB' => esc_html__('PAB', 'fitnesszone'),
			'PEN' => esc_html__('PEN', 'fitnesszone'),
			'PGK' => esc_html__('PGK', 'fitnesszone'),
			'PHP' => esc_html__('PHP', 'fitnesszone'),
			'PKR' => esc_html__('PKR', 'fitnesszone'),
			'PLN' => esc_html__('PLN', 'fitnesszone'),
			'PTE' => esc_html__('PTE', 'fitnesszone'),
			'PYG' => esc_html__('PYG', 'fitnesszone'),
			'QAR' => esc_html__('QAR', 'fitnesszone'),
			'ROL' => esc_html__('ROL', 'fitnesszone'),
			'RON' => esc_html__('RON', 'fitnesszone'),
			'RSD' => esc_html__('RSD', 'fitnesszone'),
			'RUB' => esc_html__('RUB', 'fitnesszone'),
			'SAR' => esc_html__('SAR', 'fitnesszone'),
			'SBD' => esc_html__('SBD', 'fitnesszone'),
			'SCR' => esc_html__('SCR', 'fitnesszone'),
			'SDD' => esc_html__('SDD', 'fitnesszone'),
			'SDG' => esc_html__('SDG', 'fitnesszone'),
			'SDP' => esc_html__('SDP', 'fitnesszone'),
			'SEK' => esc_html__('SEK', 'fitnesszone'),
			'SGD' => esc_html__('SGD', 'fitnesszone'),
			'SHP' => esc_html__('SHP', 'fitnesszone'),
			'SIT' => esc_html__('SIT', 'fitnesszone'),
			'SKK' => esc_html__('SKK', 'fitnesszone'),
			'SLL' => esc_html__('SLL', 'fitnesszone'),
			'SOS' => esc_html__('SOS', 'fitnesszone'),
			'SRD' => esc_html__('SRD', 'fitnesszone'),
			'SRG' => esc_html__('SRG', 'fitnesszone'),
			'STD' => esc_html__('STD', 'fitnesszone'),
			'SVC' => esc_html__('SVC', 'fitnesszone'),
			'SYP' => esc_html__('SYP', 'fitnesszone'),
			'SZL' => esc_html__('SZL', 'fitnesszone'),
			'THB' => esc_html__('THB', 'fitnesszone'),
			'TMM' => esc_html__('TMM', 'fitnesszone'),
			'TND' => esc_html__('TND', 'fitnesszone'),
			'TOP' => esc_html__('TOP', 'fitnesszone'),
			'TRL' => esc_html__('TRL', 'fitnesszone'),
			'TRY' => esc_html__('TRY', 'fitnesszone'),
			'TTD' => esc_html__('TTD', 'fitnesszone'),
			'TWD' => esc_html__('TWD', 'fitnesszone'),
			'TZS' => esc_html__('TZS', 'fitnesszone'),
			'UAH' => esc_html__('UAH', 'fitnesszone'),
			'UGS' => esc_html__('UGS', 'fitnesszone'),
			'USD' => esc_html__('USD', 'fitnesszone'),
			'UYU' => esc_html__('UYU', 'fitnesszone'),
			'UZS' => esc_html__('UZS', 'fitnesszone'),
			'VEF' => esc_html__('VEF', 'fitnesszone'),
			'VND' => esc_html__('VND', 'fitnesszone'),
			'VUV' => esc_html__('VUV', 'fitnesszone'),
			'WST' => esc_html__('WST', 'fitnesszone'),
			'XAF' => esc_html__('XAF', 'fitnesszone'),
			'XCD' => esc_html__('XCD', 'fitnesszone'),
			'XOF' => esc_html__('XOF', 'fitnesszone'),
			'XPF' => esc_html__('XPF', 'fitnesszone'),
			'YER' => esc_html__('YER', 'fitnesszone'),
			'YUN' => esc_html__('YUN', 'fitnesszone'),
			'ZAR' => esc_html__('ZAR', 'fitnesszone'),
			'ZMK' => esc_html__('ZMK', 'fitnesszone'),
			'ZWD' => esc_html__('ZWD', 'fitnesszone'),
		),
		'class'        => 'chosen',
		'default_option'=> esc_attr__('USD', 'fitnesszone'),
		'info'         => esc_html__('Please select your curreny symbol which will be used in s2member for payment.', 'fitnesszone')
	  ),

  ),
);

$options[]      = array(
  'name'        => 'layout_options',
  'title'       => esc_html__('Layout Options', 'fitnesszone'),
  'icon'        => 'dashicons dashicons-exerpt-view',
  'sections' => array(

	// -----------------------------------------
	// Header Options
	// -----------------------------------------
	array(
	  'name'      => 'breadcrumb_options',
	  'title'     => esc_html__('Breadcrumb Options', 'fitnesszone'),
	  'icon'      => 'fa fa-sitemap',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Breadcrumb Options", 'fitnesszone' ),
		  ),

		  array(
			'id'  		 => 'show-breadcrumb',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Breadcrumb', 'fitnesszone'),
			'info'		 => esc_html__('YES! to display breadcrumb for all pages.', 'fitnesszone'),
			'default' 	 => true,
		  ),

		  array(
			'id'           => 'breadcrumb-delimiter',
			'type'         => 'icon',
			'title'        => esc_html__('Breadcrumb Delimiter', 'fitnesszone'),
			'info'         => esc_html__('Choose delimiter style to display on breadcrumb section.', 'fitnesszone'),
		  ),

		  array(
			'id'           => 'breadcrumb-style',
			'type'         => 'select',
			'title'        => esc_html__('Breadcrumb Style', 'fitnesszone'),
			'options'      => array(
			  'default' 							=> esc_html__('Default', 'fitnesszone'),
			  'aligncenter'    						=> esc_html__('Align Center', 'fitnesszone'),
			  'alignright'  						=> esc_html__('Align Right', 'fitnesszone'),
			  'breadcrumb-left'    					=> esc_html__('Left Side Breadcrumb', 'fitnesszone'),
			  'breadcrumb-right'     				=> esc_html__('Right Side Breadcrumb', 'fitnesszone'),
			  'breadcrumb-top-right-title-center'  	=> esc_html__('Top Right Title Center', 'fitnesszone'),
			  'breadcrumb-top-left-title-center'  	=> esc_html__('Top Left Title Center', 'fitnesszone'),
			),
			'class'        => 'chosen',
			'default'      => 'breadcrumb-right',
			'info'         => esc_html__('Choose alignment style to display on breadcrumb section.', 'fitnesszone'),
		  ),

		  array(
			  'id'                 => 'breadcrumb-position',
			  'type'               => 'select',
			  'title'              => esc_html__('Position', 'fitnesszone' ),
			  'options'            => array(
				  'header-top-absolute'    => esc_html__('Behind the Header','fitnesszone'),
				  'header-top-relative'    => esc_html__('Default','fitnesszone'),
			  ),
			  'class'        => 'chosen',
			  'default'      => 'header-top-relative',
			  'info'         => esc_html__('Choose position of breadcrumb section.', 'fitnesszone'),
		  ),

		  array(
			'id'    => 'breadcrumb_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'fitnesszone'),
			'desc'  => esc_html__('Choose background options for breadcrumb title section.', 'fitnesszone'),
		  ),

		),
	),

  ),
);

$options[]      = array(
  'name'        => 'allpage_options',
  'title'       => esc_html__('All Page Options', 'fitnesszone'),
  'icon'        => 'fa fa-files-o',
  'sections' => array(

	// -----------------------------------------
	// Post Options
	// -----------------------------------------
	array(
	  'name'      => 'post_options',
	  'title'     => esc_html__('Post Options', 'fitnesszone'),
	  'icon'      => 'fa fa-file',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Single Post Options", 'fitnesszone' ),
		  ),
		
		  array(
			'id'  		 => 'single-post-authorbox',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Single Author Box', 'fitnesszone'),
			'info'		 => esc_html__('YES! to display author box in single blog posts.', 'fitnesszone'),
			'default' 	 => true,
		  ),

		  array(
			'id'  		 => 'single-post-related',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Single Related Posts', 'fitnesszone'),
			'info'		 => esc_html__('YES! to display related blog posts in single posts.', 'fitnesszone')
		  ),

		  array(
			'id'  		 => 'single-post-navigation',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Single Post Navigation', 'fitnesszone'),
			'info'		 => esc_html__('YES! to display post navigation in single posts.', 'fitnesszone')
		  ),

		  array(
			'id'  		 => 'single-post-comments',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Posts Comments', 'fitnesszone'),
			'info'		 => esc_html__('YES! to display single blog post comments.', 'fitnesszone'),
			'default' 	 => true,
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Post Archives Page Layout", 'fitnesszone' ),
		  ),

		  array(
			'id'      	 => 'post-archives-page-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Page Layout', 'fitnesszone'),
			'options'    => array(
			  'content-full-width'   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => FITNESSZONE_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => FITNESSZONE_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'post-archives-page-layout',
			),
		  ),

		  array(
			'id'  		 => 'show-standard-left-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Left Sidebar', 'fitnesszone'),
			'dependency' => array( 'post-archives-page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
			'default' 	 => true,
		  ),

		  array(
			'id'  		 => 'show-standard-right-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Right Sidebar', 'fitnesszone'),
			'dependency' => array( 'post-archives-page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Post Archives Post Layout", 'fitnesszone' ),
		  ),

		  array(
			'id'      	   => 'post-archives-post-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Post Layout', 'fitnesszone'),
			'options'      => array(
			  'one-column' 		  => FITNESSZONE_THEME_URI . '/cs-framework-override/images/one-column.png',
			  'one-half-column'   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'  => FITNESSZONE_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			  '1-2-2'			  => FITNESSZONE_THEME_URI . '/cs-framework-override/images/1-2-2.png',
			  '1-2-2-1-2-2' 	  => FITNESSZONE_THEME_URI . '/cs-framework-override/images/1-2-2-1-2-2.png',
			  '1-3-3-3'			  => FITNESSZONE_THEME_URI . '/cs-framework-override/images/1-3-3-3.png',
			  '1-3-3-3-1' 		  => FITNESSZONE_THEME_URI . '/cs-framework-override/images/1-3-3-3-1.png',
			),
			'default'      => 'one-half-column',
		  ),

		  array(
			'id'           => 'post-style',
			'type'         => 'select',
			'title'        => esc_html__('Post Style', 'fitnesszone'),
			'options'      => array(
			  'blog-default-style' 		=> esc_html__('Default', 'fitnesszone'),
			  'entry-date-left'      	=> esc_html__('Date Left', 'fitnesszone'),
			  'entry-date-left outer-frame-border'      	=> esc_html__('Date Left Modern', 'fitnesszone'),
			  'entry-date-author-left'  => esc_html__('Date and Author Left', 'fitnesszone'),
			  'blog-modern-style'       => esc_html__('Modern', 'fitnesszone'),
			  'bordered'      			=> esc_html__('Bordered', 'fitnesszone'),
			  'classic'      			=> esc_html__('Classic', 'fitnesszone'),
			  'entry-overlay-style' 	=> esc_html__('Trendy', 'fitnesszone'),
			  'overlap' 				=> esc_html__('Overlap', 'fitnesszone'),
			  'entry-center-align'		=> esc_html__('Stripe', 'fitnesszone'),
			  'entry-fashion-style'	 	=> esc_html__('Fashion', 'fitnesszone'),
			  'entry-minimal-bordered' 	=> esc_html__('Minimal Bordered', 'fitnesszone'),
			  'blog-medium-style'       => esc_html__('Medium', 'fitnesszone'),
			  'blog-medium-style dt-blog-medium-highlight'     					 => esc_html__('Medium Hightlight', 'fitnesszone'),
			  'blog-medium-style dt-blog-medium-highlight dt-sc-skin-highlight'  => esc_html__('Medium Skin Highlight', 'fitnesszone'),
			),
			'class'        => 'chosen',
			'default'      => 'entry-date-author-left',
			'info'         => esc_html__('Choose post style to display post archives pages.', 'fitnesszone'),
		  ),

		  array(
			'id'  		 => 'post-archives-enable-excerpt',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Allow Excerpt', 'fitnesszone'),
			'info'		 => esc_html__('YES! to allow excerpt', 'fitnesszone'),
			'default'    => true,
		  ),

		  array(
			'id'  		 => 'post-archives-excerpt',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Excerpt Length', 'fitnesszone'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Put Excerpt Length', 'fitnesszone').'</span>',
			'default' 	 => 40,
		  ),

		  array(
			'id'  		 => 'post-archives-enable-readmore',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Read More', 'fitnesszone'),
			'info'		 => esc_html__('YES! to enable read more button', 'fitnesszone'),
			'default'    => true
		  ),

		  array(
			'id'  		 => 'post-archives-readmore',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Read More Shortcode', 'fitnesszone'),
			'info'		 => esc_html__('Paste any button shortcode here', 'fitnesszone'),
			'default'	 => '[dt_sc_button title="'.esc_attr__('Read More','fitnesszone').'" size="small " style="" icon_type="fontawesome" iconalign="icon-right with-icon" class="" iconclass="fa fa-angle-double-right"]',
			
			
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Single Post & Post Archive options", 'fitnesszone' ),
		  ),

		  array(
			'id'      => 'post-format-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Post Format Meta', 'fitnesszone' ),
			'info'	  => esc_html__('YES! to show post format meta information', 'fitnesszone'),
			'default' => false
		  ),

		  array(
			'id'      => 'post-author-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Author Meta', 'fitnesszone' ),
			'info'	  => esc_html__('YES! to show post author meta information', 'fitnesszone'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-date-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Date Meta', 'fitnesszone' ),
			'info'	  => esc_html__('YES! to show post date meta information', 'fitnesszone'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-comment-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Comment Meta', 'fitnesszone' ),
			'info'	  => esc_html__('YES! to show post comment meta information', 'fitnesszone'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-category-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Category Meta', 'fitnesszone' ),
			'info'	  => esc_html__('YES! to show post category information', 'fitnesszone'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-tag-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Tag Meta', 'fitnesszone' ),
			'info'	  => esc_html__('YES! to show post tag information', 'fitnesszone'),
			'default' => true
		  ),

		),
	),

	// -----------------------------------------
	// 404 Options
	// -----------------------------------------
	array(
	  'name'      => '404_options',
	  'title'     => esc_html__('404 Options', 'fitnesszone'),
	  'icon'      => 'fa fa-warning',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "404 Message", 'fitnesszone' ),
		  ),
		  
		  array(
			'id'      => 'enable-404message',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Message', 'fitnesszone' ),
			'info'	  => esc_html__('YES! to enable not-found page message.', 'fitnesszone'),
			'default' => true
		  ),

		  array(
			'id'           => 'notfound-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'fitnesszone'),
			'options'      => array(
			  'type1' 	   => esc_html__('Modern', 'fitnesszone'),
			  'type2'      => esc_html__('Classic', 'fitnesszone'),
			  'type4'  	   => esc_html__('Diamond', 'fitnesszone'),
			  'type5'      => esc_html__('Shadow', 'fitnesszone'),
			  'type6'      => esc_html__('Diamond Alt', 'fitnesszone'),
			  'type7'  	   => esc_html__('Stack', 'fitnesszone'),
			  'type8'  	   => esc_html__('Minimal', 'fitnesszone'),
			),
			'class'        => 'chosen',
			'default'      => 'type8',
			'info'         => esc_html__('Choose the style of not-found template page.', 'fitnesszone')
		  ),

		  array(
			'id'      => 'notfound-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('404 Dark BG', 'fitnesszone' ),
			'info'	  => esc_html__('YES! to use dark bg notfound page for this site.', 'fitnesszone'),
		  ),

		  array(
			'id'           => 'notfound-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'fitnesszone'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'fitnesszone'),
			'info'       	 => esc_html__('Choose the page for not-found content.', 'fitnesszone')
		  ),
		  
		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Background Options", 'fitnesszone' ),
		  ),

		  array(
			'id'    => 'notfound_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'fitnesszone'),
		  ),

		  array(
			'id'  		 => 'notfound-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'fitnesszone'),
			'info'		 => esc_html__('Paste custom CSS styles for not found page.', 'fitnesszone')
		  ),

		),
	),

	// -----------------------------------------
	// Underconstruction Options
	// -----------------------------------------
	array(
	  'name'      => 'comingsoon_options',
	  'title'     => esc_html__('Under Construction Options', 'fitnesszone'),
	  'icon'      => 'fa fa-thumbs-down',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Under Construction", 'fitnesszone' ),
		  ),
	
		  array(
			'id'      => 'enable-comingsoon',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Coming Soon', 'fitnesszone' ),
			'info'	  => esc_html__('YES! to check under construction page of your website.', 'fitnesszone')
		  ),
	
		  array(
			'id'           => 'comingsoon-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'fitnesszone'),
			'options'      => array(
			  'type1' 	   => esc_html__('Diamond', 'fitnesszone'),
			  'type2'      => esc_html__('Teaser', 'fitnesszone'),
			  'type3'  	   => esc_html__('Minimal', 'fitnesszone'),
			  'type4'      => esc_html__('Counter Only', 'fitnesszone'),
			  'type5'      => esc_html__('Belt', 'fitnesszone'),
			  'type6'  	   => esc_html__('Classic', 'fitnesszone'),
			  'type7'  	   => esc_html__('Boxed', 'fitnesszone')
			),
			'class'        => 'chosen',
			'default'      => 'type1',
			'info'         => esc_html__('Choose the style of coming soon template.', 'fitnesszone'),
		  ),

		  array(
			'id'      => 'uc-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('Coming Soon Dark BG', 'fitnesszone' ),
			'info'	  => esc_html__('YES! to use dark bg coming soon page for this site.', 'fitnesszone')
		  ),

		  array(
			'id'           => 'comingsoon-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'fitnesszone'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'fitnesszone'),
			'info'       	 => esc_html__('Choose the page for comingsoon content.', 'fitnesszone')
		  ),

		  array(
			'id'      => 'show-launchdate',
			'type'    => 'switcher',
			'title'   => esc_html__('Show Launch Date', 'fitnesszone' ),
			'info'	  => esc_html__('YES! to show launch date text.', 'fitnesszone'),
		  ),

		  array(
			'id'      => 'comingsoon-launchdate',
			'type'    => 'text',
			'title'   => esc_html__('Launch Date', 'fitnesszone'),
			'attributes' => array( 
			  'placeholder' => '10/30/2016 12:00:00'
			),
			'after' 	=> '<p class="cs-text-info">'.esc_html__('Put Format: 12/30/2016 12:00:00 month/day/year hour:minute:second', 'fitnesszone').'</p>',
		  ),

		  array(
			'id'           => 'comingsoon-timezone',
			'type'         => 'select',
			'title'        => esc_html__('UTC Timezone', 'fitnesszone'),
			'options'      => array(
			  '-12' => '-12', '-11' => '-11', '-10' => '-10', '-9' => '-9', '-8' => '-8', '-7' => '-7', '-6' => '-6', '-5' => '-5', 
			  '-4' => '-4', '-3' => '-3', '-2' => '-2', '-1' => '-1', '0' => '0', '+1' => '+1', '+2' => '+2', '+3' => '+3', '+4' => '+4',
			  '+5' => '+5', '+6' => '+6', '+7' => '+7', '+8' => '+8', '+9' => '+9', '+10' => '+10', '+11' => '+11', '+12' => '+12'
			),
			'class'        => 'chosen',
			'default'      => '0',
			'info'         => esc_html__('Choose utc timezone, by default UTC:00:00', 'fitnesszone'),
		  ),

		  array(
			'id'    => 'comingsoon_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'fitnesszone')
		  ),

		  array(
			'id'  		 => 'comingsoon-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'fitnesszone'),
			'info'		 => esc_html__('Paste custom CSS styles for under construction page.', 'fitnesszone'),
		  ),

		),
	),

  ),
);

// -----------------------------------------
// Widget area Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'widgetarea_options',
  'title'       => esc_html__('Widget Area', 'fitnesszone'),
  'icon'        => 'fa fa-trello',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Custom Widget Area for Sidebar", 'fitnesszone' ),
	  ),

	  array(
		'id'           => 'wtitle-style',
		'type'         => 'select',
		'title'        => esc_html__('Sidebar widget Title Style', 'fitnesszone'),
		'options'      => array(
		 'default' => esc_html__('Choose any type', 'fitnesszone'),
		  'type1' 	   => esc_html__('Double Border', 'fitnesszone'),
		  'type2'      => esc_html__('Tooltip', 'fitnesszone'),
		  'type3'  	   => esc_html__('Title Top Border', 'fitnesszone'),
		  'type4'      => esc_html__('Left Border & Pattren', 'fitnesszone'),
		  'type5'      => esc_html__('Bottom Border', 'fitnesszone'),
		  'type6'  	   => esc_html__('Tooltip Border', 'fitnesszone'),
		  'type7'  	   => esc_html__('Boxed Modern', 'fitnesszone'),
		  'type8'  	   => esc_html__('Elegant Border', 'fitnesszone'),
		  'type9' 	   => esc_html__('Needle', 'fitnesszone'),
		  'type10' 	   => esc_html__('Ribbon', 'fitnesszone'),
		  'type11' 	   => esc_html__('Content Background', 'fitnesszone'),
		  'type12' 	   => esc_html__('Classic BG', 'fitnesszone'),
		  'type13' 	   => esc_html__('Tiny Boders', 'fitnesszone'),
		  'type14' 	   => esc_html__('BG & Border', 'fitnesszone'),
		  'type15' 	   => esc_html__('Classic BG Alt', 'fitnesszone'),
		  'type16' 	   => esc_html__('Left Border & BG', 'fitnesszone'),
		  'type17' 	   => esc_html__('Basic', 'fitnesszone'),
		  'type18' 	   => esc_html__('BG & Pattern', 'fitnesszone'),
		),
		'class'          => 'chosen',
		'default_option' => esc_html__('Choose any type', 'fitnesszone'),
		'info'           => esc_html__('Choose the style of sidebar widget title.', 'fitnesszone'),
		'default'          => 'type18'
	  ),

	  array(
		'id'              => 'widgetarea-custom',
		'type'            => 'group',
		'title'           => esc_html__('Custom Widget Area', 'fitnesszone'),
		'button_title'    => esc_html__('Add New', 'fitnesszone'),
		'accordion_title' => esc_html__('Add New Widget Area', 'fitnesszone'),
		'fields'          => array(

		  array(
			'id'          => 'widgetarea-custom-name',
			'type'        => 'text',
			'title'       => esc_html__('Name', 'fitnesszone'),
		  ),

		)
	  ),

	),
);

// -----------------------------------------
// Woocommerce Options
// -----------------------------------------
if( function_exists( 'is_woocommerce' ) && ! class_exists ( 'DTWooPlugin' ) ){

	$options[]      = array(
	  'name'        => 'woocommerce_options',
	  'title'       => esc_html__('Woocommerce', 'fitnesszone'),
	  'icon'        => 'fa fa-shopping-cart',

	  'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Woocommerce Shop Page Options", 'fitnesszone' ),
		  ),

		  array(
			'id'  		 => 'shop-product-per-page',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Products Per Page', 'fitnesszone'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Number of products to show in catalog / shop page', 'fitnesszone').'</span>',
			'default' 	 => 12,
		  ),

		  array(
			'id'           => 'product-style',
			'type'         => 'select',
			'title'        => esc_html__('Product Style', 'fitnesszone'),
			'options'      => array(
			  'woo-type1' 	   => esc_html__('Thick Border', 'fitnesszone'),
			  'woo-type4'      => esc_html__('Diamond Icons', 'fitnesszone'),
			  'woo-type8' 	   => esc_html__('Modern', 'fitnesszone'),
			  'woo-type10' 	   => esc_html__('Easing', 'fitnesszone'),
			  'woo-type11' 	   => esc_html__('Boxed', 'fitnesszone'),
			  'woo-type12' 	   => esc_html__('Easing Alt', 'fitnesszone'),
			  'woo-type13' 	   => esc_html__('Parallel', 'fitnesszone'),
			  'woo-type14' 	   => esc_html__('Pointer', 'fitnesszone'),
			  'woo-type16' 	   => esc_html__('Stack', 'fitnesszone'),
			  'woo-type17' 	   => esc_html__('Bouncy', 'fitnesszone'),
			  'woo-type20' 	   => esc_html__('Masked Circle', 'fitnesszone'),
			  'woo-type21' 	   => esc_html__('Classic', 'fitnesszone'),
			  'woo-type22'        => esc_html__('Wishlist', 'fitnesszone')
			),
			'class'        => 'chosen',
			'default' 	   => 'woo-type21',
			'info'         => esc_html__('Choose products style to display shop & archive pages.', 'fitnesszone')
		  ),

		  array(
			'id'      	 => 'shop-page-product-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Product Layout', 'fitnesszone'),
			'options'    => array(
				  1   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/one-column.png',
				  2   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/one-half-column.png',
				  3   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/one-third-column.png',
				  4   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
			),
			'default'      => 3,
			'attributes'   => array(
			  'data-depend-id' => 'shop-page-product-layout',
			),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Detail Page Options", 'fitnesszone' ),
		  ),

		  array(
			'id'      	   => 'product-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'fitnesszone'),
			'options'      => array(
			  'content-full-width'   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => FITNESSZONE_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => FITNESSZONE_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'fitnesszone'),
			'dependency'   	 => array( 'product-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'fitnesszone'),
			'dependency' 	 => array( 'product-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  		 	 => 'enable-related',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Related Products', 'fitnesszone'),
			'info'	  		 => esc_html__("YES! to display related products on single product's page.", 'fitnesszone')
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Category Page Options", 'fitnesszone' ),
		  ),

		  array(
			'id'      	   => 'product-category-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'fitnesszone'),
			'options'      => array(
			  'content-full-width'   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => FITNESSZONE_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => FITNESSZONE_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-category-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-category-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'fitnesszone'),
			'dependency'   	 => array( 'product-category-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-category-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'fitnesszone'),
			'dependency' 	 => array( 'product-category-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),
		  
		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Tag Page Options", 'fitnesszone' ),
		  ),

		  array(
			'id'      	   => 'product-tag-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'fitnesszone'),
			'options'      => array(
			  'content-full-width'   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => FITNESSZONE_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => FITNESSZONE_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-tag-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-tag-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'fitnesszone'),
			'dependency'   	 => array( 'product-tag-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-tag-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'fitnesszone'),
			'dependency' 	 => array( 'product-tag-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),
		  
		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Gift Card Email Settings", 'fitnesszone' ),
		  ),
		  
		  array(
		  'id'      => 'gcemail-subject',
		  'type'    => 'text',
		  'title'   => esc_html__('Email Subject', 'fitnesszone'),
		  'after' 	=> '<p class="cs-text-info">'.esc_html__('You can paste your email subject of gift card notification. ', 'fitnesszone').'</p>',
		),
		  
		  
		  array(
			'id'  		 => 'gcemail-template',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Email Template', 'fitnesszone'),
			'info'		 => esc_html__('You can paste your email template of gift card notification. ', 'fitnesszone')
		  ),

	  ),
	);
}



// -----------------------------------------
// Events Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'event_options',
  'title'       => esc_html__('Event Options', 'fitnesszone'),
  'icon'        => 'fa fa-font',

  'fields'      => array(

	  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Timetable Event Detail", 'fitnesszone' ),
			),
			
		  array(
			'id'      	 => 'tt-event-detail-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Page Layout', 'fitnesszone'),
			'options'    => array(
			  'content-full-width'   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => FITNESSZONE_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => FITNESSZONE_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'with-right-sidebar',
			'attributes'   => array(
			  'data-depend-id' => 'tt-event-detail-layout',
			),
		  ),

		  array(
			'id'  		 => 'show-standard-left-sidebar-for-tt-event-detail',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Left Sidebar', 'fitnesszone'),
			'dependency' => array( 'tt-event-detail-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
			'default' 	 => true,
		  ),

		  array(
			'id'  		 => 'show-standard-right-sidebar-for-tt-event-detail',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Right Sidebar', 'fitnesszone'),
			'dependency' => array( 'tt-event-detail-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),


   ),
);

// -----------------------------------------
// Hook Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'hook_options',
  'title'       => esc_html__('Hooks', 'fitnesszone'),
  'icon'        => 'fa fa-paperclip',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Top Hook", 'fitnesszone' ),
	  ),

	  array(
		'id'  	=> 'enable-top-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Top Hook', 'fitnesszone'),
		'info'	=> esc_html__("YES! to enable top hook.", 'fitnesszone')
	  ),

	  array(
		'id'  		 => 'top-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Top Hook', 'fitnesszone'),
		'info'		 => esc_html__('Paste your top hook, Executes after the opening &lt;body&gt; tag.', 'fitnesszone')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content Before Hook", 'fitnesszone' ),
	  ),

	  array(
		'id'  	=> 'enable-content-before-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content Before Hook', 'fitnesszone'),
		'info'	=> esc_html__("YES! to enable content before hook.", 'fitnesszone')
	  ),

	  array(
		'id'  		 => 'content-before-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content Before Hook', 'fitnesszone'),
		'info'		 => esc_html__('Paste your content before hook, Executes before the opening &lt;#primary&gt; tag.', 'fitnesszone')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content After Hook", 'fitnesszone' ),
	  ),

	  array(
		'id'  	=> 'enable-content-after-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content After Hook', 'fitnesszone'),
		'info'	=> esc_html__("YES! to enable content after hook.", 'fitnesszone')
	  ),

	  array(
		'id'  		 => 'content-after-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content After Hook', 'fitnesszone'),
		'info'		 => esc_html__('Paste your content after hook, Executes after the closing &lt;/#main&gt; tag.', 'fitnesszone')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Bottom Hook", 'fitnesszone' ),
	  ),

	  array(
		'id'  	=> 'enable-bottom-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Bottom Hook', 'fitnesszone'),
		'info'	=> esc_html__("YES! to enable bottom hook.", 'fitnesszone')
	  ),

	  array(
		'id'  		 => 'bottom-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Bottom Hook', 'fitnesszone'),
		'info'		 => esc_html__('Paste your bottom hook, Executes after the closing &lt;/body&gt; tag.', 'fitnesszone')
	  ),

  array(
		'id'  	=> 'enable-analytics-code',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Tracking Code', 'fitnesszone'),
		'info'	=> esc_html__("YES! to enable site tracking code.", 'fitnesszone')
	  ),

	  array(
		'id'  		 => 'analytics-code',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Google Analytics Tracking Code', 'fitnesszone'),
		'info'		 => esc_html__('Enter your Google tracking id (UA-XXXXX-X) here. If you want to offer your visitors the option to stop being tracked you can place the shortcode [dt_sc_privacy_google_tracking] somewhere on your site', 'fitnesszone')
	  ),

   ),
);

// -----------------------------------------
// Custom Font Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'font_options',
  'title'       => esc_html__('Custom Fonts', 'fitnesszone'),
  'icon'        => 'fa fa-font',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Custom Fonts", 'fitnesszone' ),
	  ),

	  array(
		'id'              => 'custom_font_fields',
		'type'            => 'group',
		'title'           => esc_html__('Custom Font', 'fitnesszone'),
		'info'            => esc_html__('Click button to add font name & urls.', 'fitnesszone'),
		'button_title'    => esc_html__('Add New Font', 'fitnesszone'),
		'accordion_title' => esc_html__('Adding New Font Field', 'fitnesszone'),
		'fields'          => array(
		  array(
			'id'          => 'custom_font_name',
			'type'        => 'text',
			'title'       => esc_html__('Font Name', 'fitnesszone')
		  ),

		  array(
			'id'      => 'custom_font_woof',
			'type'    => 'upload',
			'title'   => esc_html__('Upload File (*.woff)', 'fitnesszone'),
			'after'   => '<p class="cs-text-muted">'.esc_html__('You can upload custom font family (*.woff) file here.', 'fitnesszone').'</p>',
		  ),

		  array(
			'id'      => 'custom_font_woof2',
			'type'    => 'upload',
			'title'   => esc_html__('Upload File (*.woff2)', 'fitnesszone'),
			'after'   => '<p class="cs-text-muted">'.esc_html__('You can upload custom font family (*.woff2) file here.', 'fitnesszone').'</p>',
		  )
		)
	  ),

   ),
);

// ------------------------------
// backup                       
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => esc_html__('Backup', 'fitnesszone'),
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => esc_html__('You can save your current options. Download a Backup and Import.', 'fitnesszone')
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

// ------------------------------
// license
// ------------------------------
$options[]   = array(
  'name'     => 'theme_version',
  'title'    => constant('FITNESSZONE_THEME_NAME').esc_html__(' Log', 'fitnesszone'),
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => constant('FITNESSZONE_THEME_NAME').esc_html__(' Theme Change Log', 'fitnesszone')
    ),
    array(
      'type'    => 'content',
	  'content' => '<pre>

	  2022.03.02 - version 5.0

		* Fixed Kirki Customizer Issue

	  2021.01.28 - version 4.9

		* Lightbox script update

	  2021.01.25 - version 4.8

		* Compatible with wordpress 5.6
		* Some design issues updated
		* Updated: All premium plugins

	  2020.11.27 - version 4.7

		* Latest jQuery fixes updated
		* Updated: All premium plugins

	  2020.10.23 - version 4.6

		* Woocommerce header cart issue
		* Dark skin issue
		* Coming soon page enabled - sticky menu issue
		* RTL Languages compatible
		* Change currency Symbol option added

	  2020.09.10 - version 4.5

		* Compatible with wordpress 5.5.1
		* Workouts taxonomy page added
		* Updated: Coming soon enabled sticky menu issue
		* Updated: Notice errors
		* Updated: Fatal error on other theme activation
		* Updated: Dashboard notice errors
		* Updated: All premium plugins including timetable plugin
		* Updated: Gallery type 9 icon issue
		* Updated: Package item shortcode date issue
		* Updated: Outdated copies of some WooCommerce template files

	  2020.08.13 - version 4.4
	  
		* Compatible with wordpress 5.5
	  
	   2020.07.28 - version 4.3

		* Updated: Envato Theme check
		* Updated: sanitize_text_field added
		* Updated: All wordpress theme standards
		* Updated: All premium plugins

      	2020.02.06 - version 4.2

		* Updated : All premium plugins
      
		2020.01.28 – version 4.1

		* Compatible with wordpress 5.3.2
		* Updated: All premium plugins
		* Updated: All wordpress theme standards
		* Updated: Privacy and Cookies concept
		* Updated: Gutenberg editor support for custom post types

		* Fixed: Google Analytics issue
		* Fixed: Mailchimp email client issue
		* Fixed: Privacy Button Issue
		* Fixed: Gutenberg check for old wordpress version

		* Improved: Tags taxonomy added for portfolio
		* Improved: Single product breadcrumb section
		* Improved: Revisions options added for all custom posts

		2019.11.28 – version 4.0

		* Compatible with wordpress 5.3
		* Compatible with gutenberg editor
		* Major update of Fitness Zone theme.
		* All the demo contents updated to Visual Composer modules
		* Reservation removed from themes files and added as a separate plugin.
		* Compatible with wordpress 5.0.3
		* Themes options with codestar framework.
		* Customizer options with Kirki plugin.
		* Gutenberg compatible.
		* Updated documentation.
		* Clients please do not upload the new version Fitness Zone theme or plugin files to your existing fitnesszone old version, since the site will crash. If you need to continue with your old version, we have provided the old version fitnesszone-old.zip(2.4) separately please use those files. If you need to go with the new visual composer version, you need to install it in a fresh site.
		* Please follow this KB steps for installing the new 3.0 version http://support.wedesignthemes.com/knowledge-base/steps-to-install-new-themes-version/</pre>',
    ),

  )
);

// ------------------------------
// Seperator
// ------------------------------
$options[] = array(
  'name'   => 'seperator_1',
  'title'  => esc_html__('Plugin Options', 'fitnesszone'),
  'icon'   => 'fa fa-plug'
);


CSFramework::instance( $settings, $options );