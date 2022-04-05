<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

// -----------------------------------------
// Custom Widgets                    -
// -----------------------------------------
function fitnesszone_custom_widgets() {
  $custom_widgets = array();
  $widgets = is_array( cs_get_option( 'widgetarea-custom' ) ) ? cs_get_option( 'widgetarea-custom' ) : array();
  $widgets = array_filter($widgets);

  if( isset( $widgets ) ):
    foreach ( $widgets as $widget ) :
      $id = mb_convert_case($widget['widgetarea-custom-name'], MB_CASE_LOWER, "UTF-8");
      $id = str_replace(" ", "-", $id);
      $custom_widgets[$id] = $widget['widgetarea-custom-name'];
    endforeach;
  endif;

  return $custom_widgets;
}

// -----------------------------------------
// Layer Sliders
// -----------------------------------------
function fitnesszone_layersliders() {
  $layerslider = array(  esc_html__('Select a slider','fitnesszone') );

  if( class_exists( 'LS_Sliders' ) ) {

    $sliders = LS_Sliders::find(array('limit' => 50));

    if(!empty($sliders)) {
      foreach($sliders as $key => $item){
        $layerslider[ $item['id'] ] = $item['name'];
      }
    }
  }

  return $layerslider;
}

// -----------------------------------------
// Revolution Sliders
// -----------------------------------------
function fitnesszone_revolutionsliders() {
  $revolutionslider = array( '' => esc_html__('Select a slider','fitnesszone') );

  if(class_exists( 'RevSlider' )) {
    $sld = new RevSliderSlider();
    $sliders = $sld->getArrSliders();
    if(!empty($sliders)){
      foreach($sliders as $key => $item) {
        $revolutionslider[$item->getAlias()] = $item->getTitle();
      }
    }    
  }

  return $revolutionslider;  
}

// -----------------------------------------
// Meta Layout Section
// -----------------------------------------
$meta_layout_section =array(
  'name'  => 'layout_section',
  'title' => esc_html__('Layout', 'fitnesszone'),
  'icon'  => 'fa fa-columns',
  'fields' =>  array(
    array(
      'id'  => 'layout',
      'type' => 'image_select',
      'title' => esc_html__('Page Layout', 'fitnesszone' ),
      'options'      => array(
          'content-full-width'   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
          'with-left-sidebar'    => FITNESSZONE_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
          'with-right-sidebar'   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
          'with-both-sidebar'    => FITNESSZONE_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
          'fullwidth'            => FITNESSZONE_THEME_URI . '/cs-framework-override/images/fullwidth.png',
      ),
      'default'      => 'content-full-width',
	  'info'		 => esc_html__('Layout "fullwidth" only apply for gallery template.', 'fitnesszone'),
      'attributes'   => array( 'data-depend-id' => 'page-layout' )
    ),
    array(
      'id'        => 'show-standard-sidebar-left',
      'type'      => 'switcher',
      'title'     => esc_html__('Show Standard Left Sidebar', 'fitnesszone' ),
      'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'        => 'widget-area-left',
      'type'      => 'select',
      'title'     => esc_html__('Choose Left Widget Areas', 'fitnesszone' ),
      'class'     => 'chosen',
      'options'   => fitnesszone_custom_widgets(),
      'attributes'  => array( 
        'multiple'  => 'multiple',
        'data-placeholder' => esc_html__('Select Left Widget Areas','fitnesszone'),
        'style' => 'width: 400px;'
      ),
      'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'          => 'show-standard-sidebar-right',
      'type'        => 'switcher',
      'title'       => esc_html__('Show Standard Right Sidebar', 'fitnesszone' ),
      'dependency'  => array( 'page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'        => 'widget-area-right',
      'type'      => 'select',
      'title'     => esc_html__('Choose Right Widget Areas', 'fitnesszone' ),
      'class'     => 'chosen',
      'options'   => fitnesszone_custom_widgets(),
      'attributes'    => array( 
        'multiple' => 'multiple',
        'data-placeholder' => esc_html__('Select Right Widget Areas','fitnesszone'),
        'style' => 'width: 400px;'
      ),
      'dependency'  => array( 'page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
    ),
  )
);

// -----------------------------------------
// Meta Breadcrumb Section
// -----------------------------------------
$meta_breadcrumb_section = array(
  'name'  => 'breadcrumb_section',
  'title' => esc_html__('Breadcrumb', 'fitnesszone'),
  'icon'  => 'fa fa-arrows-h',
  'fields' =>  array(
    array(
      'id'      => 'enable-sub-title',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Breadcrumb', 'fitnesszone' ),
      'default' => true
    ),
    array(
    	'id'                 => 'breadcrumb_position',
	'type'               => 'select',
      'title'              => esc_html__('Position', 'fitnesszone' ),
      'options'            => array(
        'header-top-absolute'    => esc_html__('Behind the Header','fitnesszone'),
        'header-top-relative' 	   => esc_html__('Default','fitnesszone'),
		),
		'default'            => 'header-top-relative',	
      'dependency'         => array( 'enable-sub-title', '==', 'true' ),
    ),    
    array(
      'id'    => 'breadcrumb_background',
      'type'  => 'background',
      'title' => esc_html__('Background', 'fitnesszone' ),
      'dependency'   => array( 'enable-sub-title', '==', 'true' ),
    ),
  )
);

// -----------------------------------------
// Meta Slider Section
// -----------------------------------------
$meta_slider_section = array(
  'name'  => 'slider_section',
  'title' => esc_html__('Slider', 'fitnesszone'),
  'icon'  => 'fa fa-slideshare',
  'fields' =>  array(
    array(
      'id'           => 'slider-notice',
      'type'         => 'notice',
      'class'        => 'danger',
      'content'      => esc_html__('Slider tab works only if breadcrumb disabled.','fitnesszone'),
      'class'        => 'margin-30 cs-danger',
      'dependency'   => array( 'enable-sub-title', '==', 'true' ),
    ),

    array(
      'id'           => 'show_slider',
      'type'         => 'switcher',
      'title'        => esc_html__('Show Slider', 'fitnesszone' ),
      'dependency'   => array( 'enable-sub-title', '==', 'false' ),
    ),
    array(
    	'id'                 => 'slider_position',
	'type'               => 'select',
	'title'              => esc_html__('Position', 'fitnesszone' ),
	'options'            => array(
		'header-top-relative'     => esc_html__('Top Header Relative','fitnesszone'),
		'header-top-absolute'    => esc_html__('Top Header Absolute','fitnesszone'),
		'bottom-header' 	   => esc_html__('Bottom Header','fitnesszone'),
	),
	'default'            => 'bottom-header',
	'dependency'         => array( 'enable-sub-title|show_slider', '==|==', 'false|true' ),
   ),
   array(
      'id'                 => 'slider_type',
      'type'               => 'select',
      'title'              => esc_html__('Slider', 'fitnesszone' ),
      'options'            => array(
        ''                 => esc_html__('Select a slider','fitnesszone'),
        'layerslider'      => esc_html__('Layer slider','fitnesszone'),
        'revolutionslider' => esc_html__('Revolution slider','fitnesszone'),
        'customslider'     => esc_html__('Custom Slider Shortcode','fitnesszone'),
      ),
      'validate' => 'required',
      'dependency'         => array( 'enable-sub-title|show_slider', '==|==', 'false|true' ),
    ),

    array(
      'id'          => 'layerslider_id',
      'type'        => 'select',
      'title'       => esc_html__('Layer Slider', 'fitnesszone' ),
      'options'     => fitnesszone_layersliders(),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|layerslider' )
    ),

    array(
      'id'          => 'revolutionslider_id',
      'type'        => 'select',
      'title'       => esc_html__('Revolution Slider', 'fitnesszone' ),
      'options'     => fitnesszone_revolutionsliders(),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|revolutionslider' )
    ),

    array(
      'id'          => 'customslider_sc',
      'type'        => 'textarea',
      'title'       => esc_html__('Custom Slider Code', 'fitnesszone' ),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|customslider' ),
	  'default'     => '[dt_sc_image align="aligncenter" id="enter_the_image_id_here"]'
    ),
  )  
);

// -----------------------------------------
// Blog Template Section
// -----------------------------------------
$blog_template_section = array(
  'name'  => 'blog_template_section',
  'title' => esc_html__('Blog Template', 'fitnesszone'),
  'icon'  => 'fa fa-files-o',
  'fields' =>  array(
    array(
      'id'           => 'blog-tpl-notice',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => esc_html__('Blog Tab Works only if page template set to Blog Template in Page Attributes','fitnesszone'),
      'class'        => 'margin-30 cs-success',      
    ),
    array(
      'id'                     => 'blog-post-layout',
      'type'                   => 'image_select',
      'title'                  => esc_html__('Post Layout', 'fitnesszone' ),
      'options'                => array(
          'one-column'         => FITNESSZONE_THEME_URI . '/cs-framework-override/images/one-column.png',
          'one-half-column'    => FITNESSZONE_THEME_URI . '/cs-framework-override/images/one-half-column.png',
          'one-third-column'   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/one-third-column.png',
		  '1-2-2'			   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/1-2-2.png',
		  '1-2-2-1-2-2' 	   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/1-2-2-1-2-2.png',
		  '1-3-3-3'			   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/1-3-3-3.png',
		  '1-3-3-3-1' 		   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/1-3-3-3-1.png',
      ),
      'default'                => 'one-third-column'
    ),
    array(
      'id'                     => 'blog-post-style',
      'type'                   => 'select',
      'title'                  => esc_html__('Post Style', 'fitnesszone' ),
      'options'                => array(
        'blog-default-style' => esc_html__('Default','fitnesszone'),
        'entry-date-left'    => esc_html__('Date Left','fitnesszone'),
		'entry-date-left outer-frame-border'      	=> esc_html__('Date Left Modern', 'fitnesszone'),
        'entry-date-author-left' => esc_html__('Date and Author Left','fitnesszone'),
		'blog-modern-style'      => esc_html__('Modern', 'fitnesszone'),
		'bordered'      		 => esc_html__('Bordered', 'fitnesszone'),
		'classic'      			 => esc_html__('Classic', 'fitnesszone'),
		'entry-overlay-style' 	 => esc_html__('Trendy', 'fitnesszone'),
		'overlap' 				 => esc_html__('Overlap', 'fitnesszone'),
		'entry-center-align'	 => esc_html__('Stripe', 'fitnesszone'),
		'entry-fashion-style'	 => esc_html__('Fashion', 'fitnesszone'),
		'entry-minimal-bordered' => esc_html__('Minimal Bordered', 'fitnesszone'),
        'blog-medium-style'  	 => esc_html__('Medium','fitnesszone'),
        'blog-medium-style dt-blog-medium-highlight' => esc_html__('Medium Highlight','fitnesszone'),
        'blog-medium-style dt-blog-medium-highlight dt-sc-skin-highlight' => esc_html__('Medium Skin Highlight','fitnesszone'),
		'blog-thumb' 			=> esc_html__('Blog Thumb', 'fitnesszone'),
      ),
	  'default'                => 'entry-date-author-left'
    ),
    array(
      'id'      => 'enable-blog-readmore',
      'type'    => 'switcher',
      'title'   => esc_html__('Read More', 'fitnesszone' ),
      'default' => true
    ),
    array(
      'id'           => 'blog-readmore',
      'type'         => 'textarea',
      'title'        => esc_html__('Read More Shortcode', 'fitnesszone' ),
      'default'      => '[dt_sc_button title="'.esc_attr__('Read More','fitnesszone').'"  size="small " style="" icon_type="fontawesome" iconalign="icon-right with-icon" class="" iconclass="fa fa-angle-double-right"]',
      'dependency'   => array( 'enable-blog-readmore', '==', 'true' ),
    ),
    array(
      'id'      => 'blog-post-excerpt',
      'type'    => 'switcher',
      'title'   => esc_html__('Allow Excerpt', 'fitnesszone' ),
      'default' => true
    ),
    array(
      'id'           => 'blog-post-excerpt-length',
      'type'         => 'number',
      'title'        => esc_html__('Excerpt Length', 'fitnesszone' ),
      'default'      => '40',
      'dependency'   => array( 'blog-post-excerpt', '==', 'true' ),
    ),
    array(
      'id'           => 'blog-post-per-page',
      'type'         => 'number',
      'title'        => esc_html__('Post Per Page', 'fitnesszone' ),
      'default'      => '-1',      
    ),
    array(
      'id'             => 'blog-post-cats',
      'type'           => 'select',
      'title'          => esc_html__('Categories','fitnesszone'),
      'options'        => 'categories',
      'default_option' => esc_html__('Select a categories','fitnesszone'),
      'class'              => 'chosen',
      'attributes'         => array(
        'multiple'         => 'only-key',
        'style'            => 'width: 200px;'
      ),
      'info'           => esc_html__('Select categories to exclude from your blog page.','fitnesszone'),
    ),
    array(
      'id'      => 'show-postformat-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Format Info', 'fitnesszone' ),
      'default' => false
    ),
    array(
      'id'      => 'show-author-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Author Info', 'fitnesszone' ),
      'default' => false,
    ),
    array(
      'id'      => 'show-date-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Date Info', 'fitnesszone' ),
      'default' => false
    ),
    array(
      'id'      => 'show-comment-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Comment Info', 'fitnesszone' ),
      'default' => false
    ),
    array(
      'id'      => 'show-category-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Category Info', 'fitnesszone' ),
      'default' => true
    ),
    array(
      'id'      => 'show-tag-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Tag Info', 'fitnesszone' ),
      'default' => false
    )    
  )
);

// -----------------------------------------
// Gallery Template Section
// -----------------------------------------
$gallery_template_section = array(
  'name'  => 'gallery_template_section',
  'title' => esc_html__('Gallery Template', 'fitnesszone'),
  'icon'  => 'fa fa-picture-o',
  'fields' =>  array(

    array(
      'id'           => 'gallery-tpl-notice',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => esc_html__('Gallery Tab Works only if page template set to Gallery Template in Page Attributes','fitnesszone'),
      'class'        => 'margin-30 cs-success',      
    ),

    array(
      'id'                     => 'gallery-post-layout',
      'type'                   => 'image_select',
      'title'                  => esc_html__('Post Layout', 'fitnesszone' ),
      'options'                => array(
	  	  'one-column'    	   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/one-column.png',
          'one-half-column'    => FITNESSZONE_THEME_URI . '/cs-framework-override/images/one-half-column.png',
          'one-third-column'   => FITNESSZONE_THEME_URI . '/cs-framework-override/images/one-third-column.png',
          'one-fourth-column'  => FITNESSZONE_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
      ),
      'default'                => 'one-half-column'
    ),

    array(
      'id'      => 'gallery-post-style',
      'type'    => 'select',
      'title'   => esc_html__('Post Style', 'fitnesszone' ),
      'options' => array(
        'type1' => esc_html__('Modern Title','fitnesszone'),
        'type2' => esc_html__('Title & Icons Overlay','fitnesszone'),
        'type3' => esc_html__('Title Overlay','fitnesszone'),
        'type4' => esc_html__('Icons Only','fitnesszone'),
        'type5' => esc_html__('Classic','fitnesszone'),
        'type6' => esc_html__('Minimal Icons','fitnesszone'),
        'type7' => esc_html__('Presentation','fitnesszone'),
        'type8' => esc_html__('Girly','fitnesszone'),
        'type9' => esc_html__('Art','fitnesszone'),
		'type10' => esc_html__('Like This','fitnesszone'),
      ),
	  'default'                => 'type10'
    ),
	
    array(
      'id'      => 'gallery-grid-space',
      'type'    => 'switcher',
      'title'   => esc_html__('Allow Grid Space', 'fitnesszone' ),
      'default' => false,
      'info'    => esc_html__('YES! to allow grid space in between Gallery item','fitnesszone')
    ),

    array(
      'id'      => 'filter',
      'type'    => 'switcher',
      'title'   => esc_html__('Allow Filters', 'fitnesszone' ),
      'default' => false,
      'info'    => esc_html__('YES! to allow filter options for Gallery items','fitnesszone')
    ),

    array(
      'id'           => 'gallery-post-per-page',
      'type'         => 'number',
      'title'        => esc_html__('Post Per Page', 'fitnesszone' ),
      'default'      => '-1',      
    ),

    array(
      'id'             => 'gallery-categories',
      'type'           => 'select',
      'title'          => esc_html__('Categories','fitnesszone'),
      'options'        => 'categories',
      'class'          => 'chosen',
      'query_args'     => array(
        'type'         => 'dt_galleries',
        'taxonomy'     => 'gallery_entries',
        'orderby'      => 'post_date',
        'order'        => 'DESC',
      ),
      'attributes'         => array(
        'data-placeholder' => esc_html__('Select a categories','fitnesszone'),
        'multiple'         => 'only-key',
        'style'            => 'width: 200px;'
      ),
      'info'           => esc_html__('Select categories to show in Gallery items.','fitnesszone'),
    ),   
  )
);


// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
array_push( $meta_layout_section['fields'], array(
  'id'        => 'enable-sticky-sidebar',
  'type'      => 'switcher',
  'title'     => esc_html__('Enable Sticky Sidebar', 'fitnesszone' ),
  'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-right-sidebar,with-both-sidebar' )
) );

$options[] = array(
	'id'        => '_tpl_default_settings',
    'title'     => esc_html__('Page Settings','fitnesszone'),
    'post_type' => 'page',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
		$meta_layout_section,
		$meta_breadcrumb_section,
		$meta_slider_section,
		$blog_template_section,
		$gallery_template_section,
		array(
		  'name'  => 'sidenav_template_section',
		  'title' => esc_html__('Side Navigation Template', 'fitnesszone'),
		  'icon'  => 'fa fa-th-list',
		  'fields' =>  array(

			array(
			  'id'           => 'sidenav-tpl-notice',
			  'type'         => 'notice',
			  'class'        => 'success',
			  'content'      => esc_html__('Side Navigation Tab Works only if page template set to Side Navigation Template in Page Attributes','fitnesszone'),
			  'class'        => 'margin-30 cs-success',      
			),

			array(
			  'id'     		 => 'sidenav-style',
			  'type'    	 => 'select',
			  'title'   	 => esc_html__('Side Navigation Style', 'fitnesszone' ),
			  'options'    => array(
				   'type1' => esc_html__('Type1','fitnesszone'),
				   'type2' => esc_html__('Type2','fitnesszone'),
				   'type3' => esc_html__('Type3','fitnesszone'),
				   'type4' => esc_html__('Type4','fitnesszone'),
				   'type5' => esc_html__('Type5','fitnesszone'),
				   'type6' => esc_html__('Type6','fitnesszone'),
				   'type7' => esc_html__('Type7','fitnesszone'),
				   'type8' => esc_html__('Type8','fitnesszone'),
				   'type9' => esc_html__('Type9','fitnesszone'),
				   'type10' => esc_html__('Type10','fitnesszone')
			  ),
			),

			array(
			  'id'    		 => 'sidenav-align',
			  'type'    	 => 'switcher',
			  'title'   	 => esc_html__('Align Right', 'fitnesszone' ),
			  'info'    	 => esc_html__('YES! to align right of side navigation.','fitnesszone')
			),

			array(
			  'id'    		 => 'sidenav-sticky',
			  'type'    	 => 'switcher',
			  'title'   	 => esc_html__('Sticky Side Navigation', 'fitnesszone' ),
			  'info'    	 => esc_html__('YES! to sticky side navigation content.','fitnesszone')
			),

			array(
			  'id'    		 => 'enable-sidenav-content',
			  'type'    	 => 'switcher',
			  'title'   	 => esc_html__('Show Content', 'fitnesszone' ),
			  'info'    	 => esc_html__('YES! to show content in below side navigation.','fitnesszone')
			),

			array(
			  'id'	    	 => 'sidenav-content',
			  'type'	     => 'textarea',
			  'title'  		 => esc_html__('Side Navigation Content', 'fitnesszone' ),
			  'info'    	 => esc_html__('Paste any shortcode content here','fitnesszone'),
			  'attributes' 	 => array(
				  'rows'     => 6,
			  ),
			),

		  )
		),
    )
);

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$post_meta_layout_section = $meta_layout_section;
$fields = $post_meta_layout_section['fields'];

	$fields[0]['title'] =  esc_html__('Post Layout', 'fitnesszone' );
	unset( $fields[0]['options']['with-both-sidebar'] );
	unset( $fields[0]['info'] );
	unset( $fields[0]['options']['fullwidth'] );
	unset( $fields[5] );
	unset( $post_meta_layout_section['fields'] );
	
	$post_meta_layout_section['fields']  =   $fields; 

	$post_format_section = array(
		'name'  => 'post_format_data_section',
		'title' => esc_html__('Post Format', 'fitnesszone'),
		'icon'  => 'fa fa-cog',
		'fields' =>  array(

			array(
				'id'      => 'show-featured-image',
				'type'    => 'switcher',
				'title'   => esc_html__('Show Featured Image', 'fitnesszone' ),
				'default' => true,
				'info'    => esc_html__('YES! to show featured image','fitnesszone')
			),

			array(
				'id'           => 'single-post-style',
				'type'         => 'select',
				'title'        => esc_html__('Post Style', 'fitnesszone'),
				'options'      => array(
				  'standard'      		=> esc_html__('Standard', 'fitnesszone'),
				  'info-within-image'   => esc_html__('Info WithIn Image', 'fitnesszone'),
				  'info-bottom-image'   => esc_html__('Info Over Image Bottom Left', 'fitnesszone'),
				  'info-vertical-image' => esc_html__('Info Over Image Vertically Center', 'fitnesszone'),
				  'info-above-image'    => esc_html__('Info Above Image', 'fitnesszone'),
				  'single-flat' 		=> esc_html__('Flat', 'fitnesszone'),
				  'left-date' 		 	=> esc_html__('Left Date', 'fitnesszone')
				),
				'class'        => 'chosen',
				'default'      => 'left-date',
				'info'         => esc_html__('Choose post style to display single post.', 'fitnesszone')
			),

			/*array(
			    'id'           => 'view_count',
			    'type'         => 'text',
			    'title'        => esc_html__('Views', 'fitnesszone' ),
				'info'         => esc_html__('No.of views of this post.', 'fitnesszone')
			),

			array(
			    'id'           => 'like_count',
			    'type'         => 'text',
			    'title'        => esc_html__('Likes', 'fitnesszone' ),
				'info'         => esc_html__('No.of likes of this post.', 'fitnesszone')
			),*/

			array(
				'id' => 'post-format-type',
				'title'   => esc_html__('Type', 'fitnesszone' ),
				'type' => 'select',
				'default' => 'standard',
				'options' => array(
					'standard'  => esc_html__('Standard', 'fitnesszone'),
					'status'	=> esc_html__('Status','fitnesszone'),
					'quote'		=> esc_html__('Quote','fitnesszone'),
					'gallery'	=> esc_html__('Gallery','fitnesszone'),
					'image'		=> esc_html__('Image','fitnesszone'),
					'video'		=> esc_html__('Video','fitnesszone'),
					'audio'		=> esc_html__('Audio','fitnesszone'),
					'link'		=> esc_html__('Link','fitnesszone'),
					'aside'		=> esc_html__('Aside','fitnesszone'),
					'chat'		=> esc_html__('Chat','fitnesszone')
				)
			),

			array(
				'id' 	  => 'post-gallery-items',
				'type'	  => 'gallery',
				'title'   => esc_html__('Add Images', 'fitnesszone' ),
				'add_title'   => esc_html__('Add Images', 'fitnesszone' ),
				'edit_title'  => esc_html__('Edit Images', 'fitnesszone' ),
				'clear_title' => esc_html__('Remove Images', 'fitnesszone' ),
				'dependency' => array( 'post-format-type', '==', 'gallery' ),
			),

			array(
				'id' 	  => 'media-type',
				'type'	  => 'select',
				'title'   => esc_html__('Select Type', 'fitnesszone' ),
				'dependency' => array( 'post-format-type', 'any', 'video,audio' ),
		      	'options'	=> array(
					'oembed' => esc_html__('Oembed','fitnesszone'),
					'self' => esc_html__('Self Hosted','fitnesszone'),
				)
			),

			array(
				'id' 	  => 'media-url',
				'type'	  => 'textarea',
				'title'   => esc_html__('Media URL', 'fitnesszone' ),
				'dependency' => array( 'post-format-type', 'any', 'video,audio' ),
			),
		)
	);

	$options[] = array(
		'id'        => '_dt_post_settings',
		'title'     => esc_html__('Post Settings','fitnesszone'),
		'post_type' => 'post',
		'context'   => 'normal',
		'priority'  => 'high',
		'sections'  => array(
			$post_meta_layout_section,
			$meta_breadcrumb_section,
			$post_format_section			
		)
	);

// -----------------------------------------
// Tribe Events Post Metabox Options
// -----------------------------------------
  array_push( $post_meta_layout_section['fields'], array(
    'id' => 'event-post-style',
    'title'   => esc_html__('Post Style', 'fitnesszone' ),
    'type' => 'select',
    'default' => 'type1',
    'options' => array(
      'type1'  => esc_html__('Classic', 'fitnesszone'),
      'type2'  => esc_html__('Full Width','fitnesszone'),
      'type3'  => esc_html__('Minimal Tab','fitnesszone'),
      'type4'  => esc_html__('Clean','fitnesszone'),
      'type5'  => esc_html__('Modern','fitnesszone'),
    ),
	'class'    => 'chosen',
	'info'     => esc_html__('Your event post page show at most selected style.', 'fitnesszone')
  ) );

  $options[] = array(
    'id'        => '_custom_settings',
    'title'     => esc_html__('Settings','fitnesszone'),
    'post_type' => 'tribe_events',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
      $post_meta_layout_section,
      $meta_breadcrumb_section
    )
  );


// -----------------------------------------
// Header And Footer Options Metabox
// -----------------------------------------
$post_types = apply_filters( 'fitnesszone_header_footer_default_cpt' , array ( 'post', 'page' )  );
$options[] = array(
	'id'	=> '_dt_custom_settings',
	'title'	=> esc_html__('Header & Footer','fitnesszone'),
	'post_type' => $post_types,
	'priority'  => 'high',
	'context'   => 'side', 
	'sections'  => array(
	
		# Header Settings
		array(
			'name'  => 'header_section',
			'title' => esc_html__('Header', 'fitnesszone'),
			'icon'  => 'fa fa-angle-double-right',
			'fields' =>  array(
			
				# Header Show / Hide
				array(
					'id'		=> 'show-header',
					'type'		=> 'switcher',
					'title'		=> esc_html__('Show Header', 'fitnesszone'),
					'default'	=>  true,
				),
				
				# Header
				array(
					'id'  		 => 'header',
					'type'  	 => 'select',
					'title' 	 => esc_html__('Choose Header', 'fitnesszone'),
					'class'		 => 'chosen',
					'options'	 => 'posts',
					'query_args' => array(
						'post_type'	 => 'dt_headers',
						'orderby'	 => 'ID',
						'order'		 => 'ASC',
						'posts_per_page' => -1,
					),
					'default_option' => esc_attr__('Select Header', 'fitnesszone'),
					'attributes' => array( 'style'	=> 'width:50%' ),
					'info'		 => esc_html__('Select custom header for this page.','fitnesszone'),
					'dependency'	=> array( 'show-header', '==', 'true' )
				),							
			)			
		),
		# Header Settings

		# Footer Settings
		array(
			'name'  => 'footer_settings',
			'title' => esc_html__('Footer', 'fitnesszone'),
			'icon'  => 'fa fa-angle-double-right',
			'fields' =>  array(
			
				# Footer Show / Hide
				array(
					'id'		=> 'show-footer',
					'type'		=> 'switcher',
					'title'		=> esc_html__('Show Footer', 'fitnesszone'),
					'default'	=>  true,
				),
				
				# Footer
		        array(
					'id'         => 'footer',
					'type'       => 'select',
					'title'      => esc_html__('Choose Footer', 'fitnesszone'),
					'class'      => 'chosen',
					'options'    => 'posts',
					'query_args' => array(
						'post_type'  => 'dt_footers',
						'orderby'    => 'ID',
						'order'      => 'ASC',
						'posts_per_page' => -1,
					),
					'default_option' => esc_attr__('Select Footer', 'fitnesszone'),
					'attributes' => array( 'style'  => 'width:50%' ),
					'info'       => esc_html__('Select custom footer for this page.','fitnesszone'),
					'dependency'    => array( 'show-footer', '==', 'true' )
				),			
			)			
		),
		# Footer Settings
		
	)	
);



	
CSFramework_Metabox::instance( $options );