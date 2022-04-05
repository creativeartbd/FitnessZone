<?php
function fitnesszone_kirki_config() {
	return 'fitnesszone_kirki_config';
}

function fitnesszone_defaults( $key = '' ) {
	$defaults = array();

	# site identify
	$defaults['use-custom-logo'] = '1';
	$defaults['custom-logo'] = FITNESSZONE_THEME_URI.'/images/logo.png';
	$defaults['custom-light-logo'] = FITNESSZONE_THEME_URI.'/images/light-logo.png';
	$defaults['site_icon'] = FITNESSZONE_THEME_URI.'/images/favicon.ico';

	# site layout
	$defaults['site-layout'] = 'wide';

	# site skin
	$defaults['use-predefined-skin'] 	= '0';
	$defaults['use-dark-skin'] 			= '0';
	$defaults['predefined-skin']		= 'green';
	$defaults['primary-color'] 			= '#9bb70d';
	$defaults['secondary-color'] 		= '#869f07';
	$defaults['tertiary-color'] 		= '#685e58';
	$defaults['quaternary-color'] 		= 'rgba(255,255,255,0.9)';
	$defaults['body-bg-color'] 			= '#ffffff';
    $defaults['body-content-color'] 	= '#6a695e';
    $defaults['body-a-color'] 			= '#9bb70d';
	$defaults['body-a-hover-color'] 	= '#868686';
	$defaults['custom-title-color'] 	= '#ffffff';

	# site breadcrumb
	$defaults['customize-breadcrumb-title-typo'] = '1';
	$defaults['breadcrumb-title-typo'] = array( 'font-family' => 'Roboto Condensed',
		'variant' 			=> '300',
		'subsets' 			=> array( 'latin-ext' ),
		'font-size' 		=> '40px',
		'line-height' 		=> 'normal',
		'letter-spacing' 	=> '3px',
		'color' 			=> '#9bb70d',
		'text-align' 		=> 'unset',
		'text-transform' => 'uppercase' );
	$defaults['customize-breadcrumb-typo'] = '1';
	$defaults['breadcrumb-typo'] = array( 'font-family' => 'Roboto',
		'variant' 			=> '400',
		'subsets' 			=> array( 'latin-ext' ),
		'font-size'			=> '14px',
		'line-height' 		=> '28px',
		'letter-spacing' 	=> '0px',
		'color'				=> '#9bb70d',
		'text-align'		=> 'unset',
		'text-transform' 	=> 'none' );

	# site footer
	$defaults['customize-footer-title-typo'] = '1';
	$defaults['footer-title-typo'] = array( 'font-family' => 'Roboto Condensed',
		'variant' 			=> '400',
		'subsets' 			=> array( 'latin-ext' ),
		'font-size' 		=> '18px',
		'line-height' 		=> 'normal',
		'letter-spacing'	=> '0px',
		'color' 			=> '#ffffff',
		'text-align' 		=> 'unset',
		'text-transform' => 'none' );
	$defaults['customize-footer-content-typo'] = '1';
	$defaults['footer-content-typo'] = array( 'font-family' => 'Roboto',
		'variant' 			=> '300',
		'subsets' 			=> array( 'latin-ext' ),
		'font-size' 		=> '13px',
		'line-height' 		=> '28px',
		'letter-spacing' 	=> '0px',
		'color' 			=> '#d2d1d0',
		'text-align' 		=> 'unset',
		'text-transform' 	=> 'none' );
	
	$defaults['footer-content-a-color'] = '#d2d1d0';
	$defaults['footer-content-a-hover-color'] = '#9bb70d';

	# site typography
	$defaults['customize-body-h1-typo'] = '1';
	$defaults['h1'] = array(
		'font-family' => 'Roboto Condensed',
		'variant' 			=> '400',
		'font-size' 		=> '32px',
		'line-height' 		=> 'normal',
		'letter-spacing' 	=> '0px',
		'color' 			=> '#4d4d4d',
		'text-align' 		=> 'unset',
		'text-transform' 	=> 'none'
	);
	$defaults['customize-body-h2-typo'] = '1';
	$defaults['h2'] = array(
		'font-family' 		=> 'Roboto Condensed',
		'variant' 			=> '400',
		'font-size' 		=> '30px',
		'line-height' 		=> 'normal',
		'letter-spacing' 	=> '0px',
		'color' 			=> '#4d4d4d',
		'text-align' 		=> 'unset',
		'text-transform' 	=> 'none'
	);
	$defaults['customize-body-h3-typo'] = '1';
	$defaults['h3'] = array(
		'font-family' 		=> 'Roboto Condensed',
		'variant' 			=> '400',
		'font-size' 		=> '28px',
		'line-height' 		=> 'normal',
		'letter-spacing' 	=> '0px',
		'color' 			=> '#4d4d4d',
		'text-align' 		=> 'unset',
		'text-transform' 	=> 'none'
	);
	$defaults['customize-body-h4-typo'] = '1';
	$defaults['h4'] = array(
		'font-family' => 'Roboto Condensed',
		'variant' 			=> '400',
		'font-size' 		=> '25px',
		'line-height'		=> 'normal',
		'letter-spacing' 	=> '0px',
		'color' 			=> '#4d4d4d',
		'text-align' 		=> 'unset',
		'text-transform' 	=> 'none'
	);
	$defaults['customize-body-h5-typo'] = '1';
	$defaults['h5'] = array(
		'font-family' 		=> 'Roboto Condensed',
		'variant' 			=> '400',
		'font-size' 		=> '23px',
		'line-height' 		=> 'normal',
		'letter-spacing' 	=> '0px',
		'color' 			=> '#4d4d4d',
		'text-align' 		=> 'unset',
		'text-transform' 	=> 'none'
	);
	$defaults['customize-body-h6-typo'] = '1';
	$defaults['h6'] = array(
		'font-family' 		=> 'Roboto Condensed',
		'variant' 			=> '400',
		'font-size' 		=> '20px',
		'line-height' 		=> 'normal',
		'letter-spacing' 	=> '0px',
		'color' 			=> '#4d4d4d',
		'text-align' 		=> 'unset',
		'text-transform' 	=> 'none'
	);
	$defaults['customize-body-content-typo'] = '1';
	$defaults['body-content-typo'] = array(
		'font-family' 		=> 'Roboto',
		'variant' 			=> '300',
		'font-size' 		=> '14px',
		'line-height' 		=> '28px',
		'letter-spacing' 	=> '0px',
		'color' 			=> '#6a695e',
		'text-align' 		=> 'unset',
		'text-transform' 	=> 'none'
	);

	if( !empty( $key ) && array_key_exists( $key, $defaults) ) {
		return $defaults[$key];
	}

	return '';
}

function fitnesszone_image_positions() {

	$positions = array( "top left" => esc_attr__('Top Left','fitnesszone'),
		"top center"    => esc_attr__('Top Center','fitnesszone'),
		"top right"     => esc_attr__('Top Right','fitnesszone'),
		"center left"   => esc_attr__('Center Left','fitnesszone'),
		"center center" => esc_attr__('Center Center','fitnesszone'),
		"center right"  => esc_attr__('Center Right','fitnesszone'),
		"bottom left"   => esc_attr__('Bottom Left','fitnesszone'),
		"bottom center" => esc_attr__('Bottom Center','fitnesszone'),
		"bottom right"  => esc_attr__('Bottom Right','fitnesszone'),
	);

	return $positions;
}

function fitnesszone_image_repeats() {

	$image_repeats = array( "repeat" => esc_attr__('Repeat','fitnesszone'),
		"repeat-x"  => esc_attr__('Repeat in X-axis','fitnesszone'),
		"repeat-y"  => esc_attr__('Repeat in Y-axis','fitnesszone'),
		"no-repeat" => esc_attr__('No Repeat','fitnesszone')
	);

	return $image_repeats;
}

function fitnesszone_border_styles() {

	$image_repeats = array(
		"none"	 => esc_attr__('None','fitnesszone'),
		"dotted" => esc_attr__('Dotted','fitnesszone'),
		"dashed" => esc_attr__('Dashed','fitnesszone'),
		"solid"	 => esc_attr__('Solid','fitnesszone'),
		"double" => esc_attr__('Double','fitnesszone'),
		"groove" => esc_attr__('Groove','fitnesszone'),
		"ridge"	 => esc_attr__('Ridge','fitnesszone'),
	);

	return $image_repeats;
}

function fitnesszone_animations() {

	$animations = array(
		'' 					 => esc_html__('Default','fitnesszone'),	
		"bigEntrance"        =>  esc_attr__("bigEntrance",'fitnesszone'),
        "bounce"             =>  esc_attr__("bounce",'fitnesszone'),
        "bounceIn"           =>  esc_attr__("bounceIn",'fitnesszone'),
        "bounceInDown"       =>  esc_attr__("bounceInDown",'fitnesszone'),
        "bounceInLeft"       =>  esc_attr__("bounceInLeft",'fitnesszone'),
        "bounceInRight"      =>  esc_attr__("bounceInRight",'fitnesszone'),
        "bounceInUp"         =>  esc_attr__("bounceInUp",'fitnesszone'),
        "bounceOut"          =>  esc_attr__("bounceOut",'fitnesszone'),
        "bounceOutDown"      =>  esc_attr__("bounceOutDown",'fitnesszone'),
        "bounceOutLeft"      =>  esc_attr__("bounceOutLeft",'fitnesszone'),
        "bounceOutRight"     =>  esc_attr__("bounceOutRight",'fitnesszone'),
        "bounceOutUp"        =>  esc_attr__("bounceOutUp",'fitnesszone'),
        "expandOpen"         =>  esc_attr__("expandOpen",'fitnesszone'),
        "expandUp"           =>  esc_attr__("expandUp",'fitnesszone'),
        "fadeIn"             =>  esc_attr__("fadeIn",'fitnesszone'),
        "fadeInDown"         =>  esc_attr__("fadeInDown",'fitnesszone'),
        "fadeInDownBig"      =>  esc_attr__("fadeInDownBig",'fitnesszone'),
        "fadeInLeft"         =>  esc_attr__("fadeInLeft",'fitnesszone'),
        "fadeInLeftBig"      =>  esc_attr__("fadeInLeftBig",'fitnesszone'),
        "fadeInRight"        =>  esc_attr__("fadeInRight",'fitnesszone'),
        "fadeInRightBig"     =>  esc_attr__("fadeInRightBig",'fitnesszone'),
        "fadeInUp"           =>  esc_attr__("fadeInUp",'fitnesszone'),
        "fadeInUpBig"        =>  esc_attr__("fadeInUpBig",'fitnesszone'),
        "fadeOut"            =>  esc_attr__("fadeOut",'fitnesszone'),
        "fadeOutDownBig"     =>  esc_attr__("fadeOutDownBig",'fitnesszone'),
        "fadeOutLeft"        =>  esc_attr__("fadeOutLeft",'fitnesszone'),
        "fadeOutLeftBig"     =>  esc_attr__("fadeOutLeftBig",'fitnesszone'),
        "fadeOutRight"       =>  esc_attr__("fadeOutRight",'fitnesszone'),
        "fadeOutUp"          =>  esc_attr__("fadeOutUp",'fitnesszone'),
        "fadeOutUpBig"       =>  esc_attr__("fadeOutUpBig",'fitnesszone'),
        "flash"              =>  esc_attr__("flash",'fitnesszone'),
        "flip"               =>  esc_attr__("flip",'fitnesszone'),
        "flipInX"            =>  esc_attr__("flipInX",'fitnesszone'),
        "flipInY"            =>  esc_attr__("flipInY",'fitnesszone'),
        "flipOutX"           =>  esc_attr__("flipOutX",'fitnesszone'),
        "flipOutY"           =>  esc_attr__("flipOutY",'fitnesszone'),
        "floating"           =>  esc_attr__("floating",'fitnesszone'),
        "hatch"              =>  esc_attr__("hatch",'fitnesszone'),
        "hinge"              =>  esc_attr__("hinge",'fitnesszone'),
        "lightSpeedIn"       =>  esc_attr__("lightSpeedIn",'fitnesszone'),
        "lightSpeedOut"      =>  esc_attr__("lightSpeedOut",'fitnesszone'),
        "pullDown"           =>  esc_attr__("pullDown",'fitnesszone'),
        "pullUp"             =>  esc_attr__("pullUp",'fitnesszone'),
        "pulse"              =>  esc_attr__("pulse",'fitnesszone'),
        "rollIn"             =>  esc_attr__("rollIn",'fitnesszone'),
        "rollOut"            =>  esc_attr__("rollOut",'fitnesszone'),
        "rotateIn"           =>  esc_attr__("rotateIn",'fitnesszone'),
        "rotateInDownLeft"   =>  esc_attr__("rotateInDownLeft",'fitnesszone'),
        "rotateInDownRight"  =>  esc_attr__("rotateInDownRight",'fitnesszone'),
        "rotateInUpLeft"     =>  esc_attr__("rotateInUpLeft",'fitnesszone'),
        "rotateInUpRight"    =>  esc_attr__("rotateInUpRight",'fitnesszone'),
        "rotateOut"          =>  esc_attr__("rotateOut",'fitnesszone'),
        "rotateOutDownRight" =>  esc_attr__("rotateOutDownRight",'fitnesszone'),
        "rotateOutUpLeft"    =>  esc_attr__("rotateOutUpLeft",'fitnesszone'),
        "rotateOutUpRight"   =>  esc_attr__("rotateOutUpRight",'fitnesszone'),
        "shake"              =>  esc_attr__("shake",'fitnesszone'),
        "slideDown"          =>  esc_attr__("slideDown",'fitnesszone'),
        "slideExpandUp"      =>  esc_attr__("slideExpandUp",'fitnesszone'),
        "slideLeft"          =>  esc_attr__("slideLeft",'fitnesszone'),
        "slideRight"         =>  esc_attr__("slideRight",'fitnesszone'),
        "slideUp"            =>  esc_attr__("slideUp",'fitnesszone'),
        "stretchLeft"        =>  esc_attr__("stretchLeft",'fitnesszone'),
        "stretchRight"       =>  esc_attr__("stretchRight",'fitnesszone'),
        "swing"              =>  esc_attr__("swing",'fitnesszone'),
        "tada"               =>  esc_attr__("tada",'fitnesszone'),
        "tossing"            =>  esc_attr__("tossing",'fitnesszone'),
        "wobble"             =>  esc_attr__("wobble",'fitnesszone'),
        "fadeOutDown"        =>  esc_attr__("fadeOutDown",'fitnesszone'),
        "fadeOutRightBig"    =>  esc_attr__("fadeOutRightBig",'fitnesszone'),
        "rotateOutDownLeft"  =>  esc_attr__("rotateOutDownLeft",'fitnesszone')
    );

	return $animations;
}

function fitnesszone_custom_fonts( $standard_fonts ){

	$custom_fonts = array();

	$fonts = cs_get_option('custom_font_fields');
	if( is_countable( $fonts ) && count( $fonts ) > 0 ):
		foreach( $fonts as $font ):
			$custom_fonts[$font['custom_font_name']] = array(
				'label' 	=> $font['custom_font_name'],
				'variants' 	=> array( '100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic' ),
				'stack' 	=> $font['custom_font_name'] . ', sans-serif'
			);
		endforeach;
	endif;

	return array_merge_recursive( $custom_fonts, $standard_fonts );
}
add_filter( 'kirki/fonts/standard_fonts', 'fitnesszone_custom_fonts', 20 );