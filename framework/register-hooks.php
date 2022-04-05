<?php
add_action( 'vc_before_init', 'fitnesszone_vc_compatible' );
function fitnesszone_vc_compatible() {
	
	vc_set_as_theme();

	$posts = apply_filters( 'fitnesszone_vc_default_cpt' , array ( 'page' )  );
	vc_set_default_editor_post_types( $posts );
}

/* ---------------------------------------------------------------------------
* Theme Hooks : To Resolve < style > ... </ style > in side body tag
* --------------------------------------------------------------------------- */
add_action( 'wp_head', 'fitnesszone_wp_head',999 );
if ( ! function_exists( 'fitnesszone_wp_head' ) ) {
   function fitnesszone_wp_head() {
       ob_start();
   }
}

add_action( 'wp_footer', 'fitnesszone_wp_footer',1000 );
if ( ! function_exists( 'fitnesszone_wp_footer' ) ) {
   function fitnesszone_wp_footer() {

       $content = ob_get_clean();
$regex = "#<style id='fitnesszone-custom-inline-inline-css' type='text/css'>([^<]*)</style>#";
preg_match($regex, $content, $matches);

$regex2 = "#<style id='font-awesome-inline-css' type='text/css'>([^<]*)</style>#";
preg_match($regex2, $content, $matches2);
$style = isset($matches[0]) ? $matches[0] : '';
$style2 = isset($matches2[0]) ? $matches2[0] : '';

$content = str_replace($style,'',$content);
$content = str_replace($style2,'',$content);
$content = str_replace('</head>',$style.$style2.'</head>',$content);
       
       echo "{$content}";
   }
}

/* ---------------------------------------------------------------------------
 * Hook of Top
 * --------------------------------------------------------------------------- */
function fitnesszone_hook_top() {
	if( cs_get_option( 'enable-top-hook' ) ) :
		echo '<!-- fitnesszone_hook_top -->';
			$hook = cs_get_option( 'top-hook' );
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo apply_filters( 'fitnesszone_top_hook', $hook );
		echo '<!-- fitnesszone_hook_top -->';
	endif;	
}
add_action( 'fitnesszone_hook_top', 'fitnesszone_hook_top', 10 );

/* ---------------------------------------------------------------------------
 * Page Loader
 * --------------------------------------------------------------------------- */
add_action( 'fitnesszone_hook_top', 'fitnesszone_page_loader', 20 );
function fitnesszone_page_loader() {
	$loader = cs_get_option( 'use-site-loader' );
	if( !empty($loader) ) {
		echo '<div class="loader"><div class="loader-inner"><span class="dot"></span><span class="dot dot1"></span><span class="dot dot2"></span><span class="dot dot3"></span><span class="dot dot4"></span></div></div>';
	}
}

/* ---------------------------------------------------------------------------
 * Hook of Content before
 * --------------------------------------------------------------------------- */
function fitnesszone_hook_content_before() {
	if( cs_get_option( 'enable-content-before-hook' ) ) :
		echo '<!-- fitnesszone_hook_content_before -->';
			$hook = cs_get_option( 'content-before-hook' );
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo do_shortcode( stripslashes($hook) );
		echo '<!-- fitnesszone_hook_content_before -->';
	endif;
}
add_action( 'fitnesszone_hook_content_before', 'fitnesszone_hook_content_before' );


/* ---------------------------------------------------------------------------
 * Hook of Content after
 * --------------------------------------------------------------------------- */
function fitnesszone_hook_content_after() {
	if( cs_get_option( 'enable-content-after-hook' ) ) :
		echo '<!-- fitnesszone_hook_content_after -->';
			$hook = cs_get_option( 'content-after-hook' );
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo do_shortcode( stripslashes($hook) );
		echo '<!-- fitnesszone_hook_content_after -->';
	endif;
}
add_action( 'fitnesszone_hook_content_after', 'fitnesszone_hook_content_after' );

/* ---------------------------------------------------------------------------
 * Main Header Hook
 * --------------------------------------------------------------------------- */
add_action( 'fitnesszone_header', 'fitnesszone_vc_header_template', 10 );
if( ! function_exists( 'fitnesszone_vc_header_template' ) ) {

    function fitnesszone_vc_header_template( $page_id ) {

        $id = '';

        if( is_singular() && empty( $page_id ) ) {

            global $post;

            $settings = get_post_meta( $post->ID,'_dt_custom_settings',TRUE );
            $settings = is_array( $settings ) ? $settings  : array();

            if( array_key_exists( 'show-header', $settings ) && !$settings['show-header'] )
                return;

            
            $id = isset( $settings['header'] ) ? $settings['header'] : '';
            $id = ( $id == '' ) ? cs_get_option( 'header' ) : $id;
        } elseif( !empty( $page_id ) ) {

            $settings = get_post_meta( $page_id, '_dt_custom_settings',TRUE );
            $settings = is_array( $settings ) ? $settings  : array();

            if( array_key_exists( 'show-header', $settings ) && !$settings['show-header'] )
                return;

            $id = isset( $settings['header'] ) ? $settings['header'] : '';
            $id = ( $id == '' ) ? cs_get_option( 'header' ) : $id;

        } else {
            
            $id = cs_get_option( 'header' );
        }

        $id = apply_filters( 'fitnesszone_header_id', $id );

        if( !$id || !function_exists( 'vc_lean_map' ) ) {
            get_template_part( 'template-parts/content', 'header' );
            return;
        }
        
        ob_start(); 
        wp_enqueue_style( 'fitnesszone-custom-inline' );

        if ( $custom_css = get_post_meta( $id, '_wpb_post_custom_css', true ) ) {
            wp_add_inline_style( 'fitnesszone-custom-inline' , $custom_css  );
        }

        if ( $shortcode_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true ) ) {
            wp_add_inline_style( 'fitnesszone-custom-inline' , $shortcode_custom_css  );
        }

        echo '<div id="header-'.esc_attr( $id ).'" class="dt-header-tpl header-' .esc_attr( $id ). '">';
            echo do_shortcode( get_post_field( 'post_content', $id ) );
        echo '</div>';

        $content = ob_get_clean();
		echo apply_filters( 'fitnesszone_header_content', $content );
    }
}

/* ---------------------------------------------------------------------------
 * Main Footer Hook
 * --------------------------------------------------------------------------- */
add_action( 'fitnesszone_footer', 'fitnesszone_vc_footer_template', 10 );
if( ! function_exists( 'fitnesszone_vc_footer_template' ) ) {

	function fitnesszone_vc_footer_template() {

		$id = '';

		if( is_singular() ) {

			global $post;

			$settings = get_post_meta( $post->ID,'_dt_custom_settings',TRUE );
			$settings = is_array( $settings ) ? $settings  : array();

			if( array_key_exists( 'show-footer', $settings ) && !$settings['show-footer'] )
				return;

            $id = isset( $settings['footer'] ) ? $settings['footer'] : '';
			$id = ( $id == '' ) ? cs_get_option( 'footer' ) : $id;
		} else {
            $id = cs_get_option( 'footer' );
        }
		
		$id = apply_filters( 'fitnesszone_footer_id', $id );
		
		if( !$id || !function_exists( 'vc_lean_map' ) ) {

			echo '<div class="dt-no-footer-builder-content footer-copyright aligncenter">
				<span>&copy; '.date( 'Y' ).' '.get_bloginfo( 'name' ).'. '. get_bloginfo( 'description', 'display' ).'</span>
			</div>';
			return;
		}

		
		ob_start();	
		wp_enqueue_style( 'fitnesszone-custom-inline' );

		if ( $custom_css = get_post_meta( $id, '_wpb_post_custom_css', true ) ) {
			wp_add_inline_style( 'fitnesszone-custom-inline' , $custom_css  );
		}

		if ( $shortcode_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true ) ) {
			wp_add_inline_style( 'fitnesszone-custom-inline' , $shortcode_custom_css  );
		}

		echo do_shortcode( get_post_field( 'post_content', $id ) );
		$content = ob_get_clean();
		echo apply_filters( 'fitnesszone_footer_content', $content );   
	}
}

/* ---------------------------------------------------------------------------
 * Hook of Bottom
 * --------------------------------------------------------------------------- */
function fitnesszone_hook_bottom() {
	if( cs_get_option( 'enable-bottom-hook' ) ) :
		echo '<!-- fitnesszone_hook_bottom -->';
			$hook = cs_get_option( 'bottom-hook' );
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo do_shortcode( stripslashes($hook) );
		echo '<!-- fitnesszone_hook_bottom -->';
	endif;
}
add_action( 'fitnesszone_hook_bottom', 'fitnesszone_hook_bottom' );


/* ---------------------------------------------------------------------------
 * Predefined Skins
 * --------------------------------------------------------------------------- */
function fitnesszone_skins( $arg ) {

    $skins = array (
		'green'				=>	array( 'primary-color'  => '#9bb70d', 'secondary-color'  => '#869f07', 'tertiary-color'  => '#685e58', 'quaternary-color'  => 'rgba(255,255,255,0.9)',),
		'ocean'				=>	array( 'primary-color'  => '#30a8ad', 'secondary-color'  => '#0e8f94', 'tertiary-color'  => '#b3ecee', 'quaternary-color'  => 'rgba(48, 168, 173, 0.9)',),
		'yellow'			=>	array( 'primary-color'  => '#e4bf00', 'secondary-color'  => '#caa900', 'tertiary-color'  => '#fff2ad', 'quaternary-color'  => 'rgba(228, 191, 0, 0.9)',),
		'red'				=>	array( 'primary-color'  => '#b60000', 'secondary-color'  => '#960000', 'tertiary-color'  => '#f4b4b4', 'quaternary-color'  => 'rgba(182, 0, 0, 0.9)',),
		'blue'				=>	array( 'primary-color'  => '#179ed6', 'secondary-color'  => '#0f88bb', 'tertiary-color'  => '#108bbe', 'quaternary-color'  => 'rgba(23, 158, 214, 0.9)',),
		'purple'			=>	array( 'primary-color'  => '#b44095', 'secondary-color'  => '#9a287c', 'tertiary-color'  => '#fcb2e7', 'quaternary-color'  => 'rgba(180, 64, 149, 0.9)',),
		'light-red'			=>	array( 'primary-color'  => '#f15c24', 'secondary-color'  => '#e34f18', 'tertiary-color'  => '#febba1', 'quaternary-color'  => 'rgba(241, 92, 36, 0.9)',),
		'orange'			=>	array( 'primary-color'  => '#faa71d', 'secondary-color'  => '#e59511', 'tertiary-color'  => '#bb0355', 'quaternary-color'  => 'rgba(228, 191, 0, 0.9)',),
		'megenta'			=>	array( 'primary-color'  => '#cb506d', 'secondary-color'  => '#ac2848', 'tertiary-color'  => '#fdb0c2', 'quaternary-color'  => 'rgba(203, 80, 109, 0.9)',),
		'grayish-orange'	=>	array( 'primary-color'  => '#857568', 'secondary-color'  => '#645142', 'tertiary-color'  => '#87342e', 'quaternary-color'  => 'rgba(133, 117, 104, 0.9)',),
		'khaki'				=>	array( 'primary-color'  => '#b8a15b', 'secondary-color'  => '#880E4F', 'tertiary-color'  => '#4A148C', 'quaternary-color'  => 'rgba(184, 161, 91, 0.9)',),
		'pink'				=>	array( 'primary-color'  => '#ff7992', 'secondary-color'  => '#978345', 'tertiary-color'  => '#477f53', 'quaternary-color'  => 'rgba(255, 121, 146, 0.9)',),  		      
    );

    $skin = array_key_exists( $arg , $skins ) ? $skins[ $arg ] : array();
    return $skin;    
}

/* ---------------------------------------------------------------------------
 * Page Layout  
 * --------------------------------------------------------------------------- */
function fitnesszone_page_layout( $layout = '' ) {

    $page_layout       = $sidebar_class = '';
    $show_sidebar      = $show_left_sidebar = $show_right_sidebar = false;
    $container_class   = "container";
    $image_size_class = '';

	switch ( $layout ) {

		case 'with-left-sidebar':
            $page_layout      = "page-with-sidebar with-left-sidebar";
            $show_sidebar     = $show_left_sidebar = true;
            $sidebar_class    = "secondary-has-left-sidebar";
            $image_size_class = 'default';
    	break;

    	case 'with-right-sidebar':
            $page_layout      = "page-with-sidebar with-right-sidebar";
            $show_sidebar     = $show_right_sidebar	= true;
            $sidebar_class    = "secondary-has-right-sidebar";
            $image_size_class = 'default';
    	break;

    	case 'with-both-sidebar':
            $page_layout      = "page-with-sidebar with-both-sidebar";
            $show_sidebar     = $show_left_sidebar = $show_right_sidebar = true;
            $sidebar_class    = "secondary-has-both-sidebar";
            $image_size_class = 'default';
    	break;

        case 'fullwidth':
            $container_class  = "gallery-fullwidth-container";
            $page_layout      = "content-full-width";
            $image_size_class = 'fullwidth';
        break;

    	case 'content-full-width':
    	default:
            $page_layout      = "content-full-width";
            $image_size_class = 'default';
    	break;
    }

    return array(
        'page_layout'        => $page_layout,
        'sidebar_class'      => $sidebar_class,
        'show_sidebar'       => $show_sidebar,
        'show_left_sidebar'  => $show_left_sidebar,
        'show_right_sidebar' => $show_right_sidebar,
        'container_class'    => $container_class,
        'image_size_class'   => $image_size_class,
    );
}

/* ---------------------------------------------------------------------------
 * Return Breadcrumb Style
 * --------------------------------------------------------------------------- */
function fitnesszone_breadcrumb_css( $settings = array() ) {

    $bg = $co = $repeat = $pos = $attach = $size = $style = '';

    $bg = !empty( $settings['image'] ) ? $settings['image'] : '';
    $co = !empty( $settings['color'] ) ? $settings['color'] : '';
	
    if(!empty($bg) || !empty($co)) :
        $repeat = !empty( $settings['repeat'] ) ? $settings['repeat'] :'repeat';
        $pos    = !empty( $settings['position'] ) ? $settings['position'] :'left top';
        $attach = !empty( $settings['attachment'] ) ? $settings['attachment'] :'scroll';
        $size   = !empty( $settings['size'] ) ? $settings['size'] :'auto';
    else:
        $bgoptions = cs_get_option( 'breadcrumb_background' );
        $bg         = !empty( $bgoptions['image'] ) ? $bgoptions['image'] : '';
        $attach     = !empty( $bgoptions['attachment'] ) ? $bgoptions['attachment'] :'scroll';
        $pos        = !empty( $bgoptions['position'] ) ? $bgoptions['position'] :'left top';
        $size       = !empty( $bgoptions['size'] ) ? $bgoptions['size'] :'auto';
        $repeat     = !empty( $bgoptions['repeat'] ) ? $bgoptions['repeat'] :'repeat';
        $co         = !empty( $bgoptions['color'] ) ? $bgoptions['color'] : '';
    endif;

	$style = !empty($bg) ? "background-image: url($bg); " : "";
	$style .= !empty($pos) ? "background-position: $pos; " : "";
	$style .= !empty($size) ? "background-size: $size; " : "";
	$style .= !empty($repeat) ? "background-repeat: $repeat; " : "";
	$style .= !empty($attach) ? "background-attachment: $attach; " : "";
    $style .= !empty($co) ? "background-color:$co;" : "";

    return $style;
}

/* ---------------------------------------------------------------------------
 * Breadcrumb
 * --------------------------------------------------------------------------- */
function fitnesszone_new_breadcrumbs( $args ) {

    $breadcrumbs = array();
    $output = '';

    $homeLink = esc_url( home_url('/') );
    $separator = '<span class="'.cs_get_option( 'breadcrumb-delimiter', 'default' ).'"></span>';
    $breadcrumbs[] =  '<a href="'. $homeLink .'">'. esc_html__('Home','fitnesszone') .'</a>';
    $breadcrumbs = array_merge( $breadcrumbs, $args );

    $output .=  '<div class="breadcrumb">';
        $count = count( $breadcrumbs );
        $i = 1;

        foreach( $breadcrumbs as $bk => $bc ){
            if( !is_object( $bc ) ) {
                if( strpos( $bc , $separator ) ) {
                    // category parents fix
                    $output .=  ($bc);
                } else {
                    if( $i == $count ) $separator = '';
                    $output .=  ($bc . $separator);
                }
            }
            $i++;
        }
    $output .=  '</div>';

    return $output;
}

function fitnesszone_breadcrumb_output( $title, $breadcrumbs, $class, $inline_css) {

    $inline_css = !empty( $inline_css ) ? "style='".esc_attr($inline_css)."'" : "";

    echo '<section class="main-title-section-wrapper '.esc_attr($class).'">';
    echo '  <div class="main-title-section-bg" '. $inline_css.'></div>';
    echo '  <div class="container">';
    echo '  	<div class="main-title-section">'. $title .' </div>'; 
    echo        fitnesszone_new_breadcrumbs( $breadcrumbs );
	//echo get_search_form();
    echo '  </div>';
    echo '</section>';
}