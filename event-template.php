<?php get_header();

    $settings = get_post_meta($post->ID,'_tpl_default_settings',TRUE);
    $settings = is_array( $settings ) ?  array_filter( $settings )  : array();

    $global_breadcrumb = cs_get_option( 'show-breadcrumb' );

    $header_class = '';
    if( !isset( $settings['enable-sub-title'] ) || !$settings['enable-sub-title']  ) {
        if( isset( $settings['show_slider'] ) && $settings['show_slider'] ) {
            if( isset( $settings['slider_type'] ) ) {
                $header_class =  $settings['slider_position'];
            }
        }
    }
    
    if( !empty( $global_breadcrumb ) ) {
        if( isset( $settings['enable-sub-title'] ) && $settings['enable-sub-title'] ) {
            $header_class = $settings['breadcrumb_position'];
		}
	}?>
<!-- ** Header Wrapper ** -->
<div id="header-wrapper" class="<?php echo esc_attr($header_class); ?>">              
    
    <!-- **Header** -->
    <header id="header">

        <div class="container"><?php
            /**
             * fitnesszone_header hook.
             * 
             * @hooked fitnesszone_vc_header_template - 10
             *
             */
            do_action( 'fitnesszone_header' ); ?>
        </div>
    </header><!-- **Header - End ** -->

    <!-- ** Slider ** -->
    <?php
        if( !isset( $settings['enable-sub-title'] ) || !$settings['enable-sub-title'] ) {
            if( isset( $settings['show_slider'] ) && $settings['show_slider'] ) {
                if( isset( $settings['slider_type'] ) ) {
                    if( $settings['slider_type'] == 'layerslider' && !empty( $settings['layerslider_id'] ) ) {
                        echo '<div id="slider">';
                        echo '  <div id="dt-sc-layer-slider" class="dt-sc-main-slider">';
                        echo    do_shortcode('[layerslider id="'.$settings['layerslider_id'].'"/]');
                        echo '  </div>';
                        echo '</div>';
					} elseif( $settings['slider_type'] == 'revolutionslider' && !empty( $settings['revolutionslider_id'] ) ) {
                        echo '<div id="slider">';
                        echo '  <div id="dt-sc-rev-slider" class="dt-sc-main-slider">';
                        echo    do_shortcode('[rev_slider '.$settings['revolutionslider_id'].'/]');
                        echo '  </div>';
                        echo '</div>';
					} elseif( $settings['slider_type'] == 'customslider' && !empty( $settings['customslider_sc'] ) ) {
                        echo '<div id="slider">';
                        echo '  <div id="dt-sc-custom-slider" class="dt-sc-main-slider">';
                        echo    do_shortcode( $settings['customslider_sc'] );
                        echo '  </div>';
                        echo '</div>';
					}
                }
            }
        }
    ?><!-- ** Slider End ** -->

    <!-- ** Breadcrumb ** -->
    <?php 
        # Global Breadcrumb
        if( !empty( $global_breadcrumb ) ) {

			if(empty($settings)) { $settings['enable-sub-title'] = true; }
            if( isset( $settings['enable-sub-title'] ) && $settings['enable-sub-title'] ) {
                $breadcrumbs = array();
                $bstyle = fitnesszone_cs_get_option( 'breadcrumb-style', 'default' );

                if( $post->post_parent ) {
                    $parent_id  = $post->post_parent;
                    $parents = array();

                    while( $parent_id ) {
                        $page = get_page( $parent_id );
                        $parents[] = '<a href="' . get_permalink( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a>';
                        $parent_id  = $page->post_parent;
                    }

                    $parents = array_reverse( $parents );
                    $breadcrumbs = array_merge_recursive($breadcrumbs, $parents);
                }

                $breadcrumbs[] = the_title( '<span class="current">', '</span>', false );
				$bcsettings = isset( $settings['breadcrumb_background'] ) ? $settings['breadcrumb_background'] : array();
                $style = fitnesszone_breadcrumb_css( $bcsettings );
                fitnesszone_breadcrumb_output ( the_title( '<h1>', '</h1>',false ), $breadcrumbs, $bstyle, $style );
            }
        }
    ?><!-- ** Breadcrumb End ** -->
</div><!-- ** Header Wrapper - End ** -->
<?php
#Getting meta values...
     $page_layout = cs_get_option('tt-event-detail-layout');
      //echo "===>".$page_layout;

      //$page_layout  = array_key_exists( "layout", $settings ) ? $settings['layout'] : "content-full-width";
        $layout = fitnesszone_page_layout( $page_layout );
        extract( $layout ); 
       
    ?>
<!-- **Main** -->
<div id="main">
          <!-- main-content starts here -->
          <div id="main-content">
              <div class="container">
                  <div class="dt-sc-hr-invisible"></div>
                  <div class="dt-sc-hr-invisible"></div>
                  <?php if($page_layout != 'content-full-width'): ?>
                        <section id="primary" class="page-with-sidebar page-<?php echo esc_attr($page_layout); ?>">
                  <?php else: ?>
                        <section id="primary" class="content-full-width">
                  <?php endif; ?>

                  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                      <div class="tt_event_theme_page timetable_clearfix">
                          <div class="tt_event_page_left">
                              <?php the_post_thumbnail("blog-onecol", array("alt" => get_the_title(), "title" => "")); ?>
                              <div class="dt-sc-hr-invisible-small"></div><div class="dt-sc-clear"></div>
                              <h2 class="border-title"><span><?php the_title(); ?></span></h2>
                              <?php
                              $subtitle = get_post_meta(get_the_ID(), "timetable_subtitle", true);
                              if($subtitle!=""): ?>
                                  <h5 class="section-title"><?php echo esc_attr($subtitle); ?></h5>
								  <div class="dt-sc-hr-invisible-small"></div><?php
                              endif;
                              if(have_posts()) : while (have_posts()) : the_post();
                                  echo tt_remove_wpautop(get_the_content());
                              endwhile; endif; ?>
                          </div>
                      </div>
				  </article>
                  
                  </section>
                <?php
                if ( $show_sidebar ) {
                    if ( $show_left_sidebar ) {
                        $sticky_class = ( array_key_exists('enable-sticky-sidebar', $settings) && $settings['enable-sticky-sidebar'] == 'true' ) ? ' sidebar-as-sticky' : '';?>
                        
                        <!-- Secondary Left -->
                        <section id="secondary-left" class="secondary-sidebar <?php echo esc_attr( $sidebar_class.$sticky_class ); ?>"><?php
    				get_sidebar('left'); ?>
                        </section><!-- Secondary Left End --><?php
                    }
                }

                if ( $show_sidebar ) {
                    if ( $show_right_sidebar ) {
                        $sticky_class = ( array_key_exists('enable-sticky-sidebar', $settings) && $settings['enable-sticky-sidebar'] == 'true' ) ? ' sidebar-as-sticky' : '';?>

                        <!-- Secondary Right -->
                        <section id="secondary-right" class="secondary-sidebar <?php echo esc_attr( $sidebar_class.$sticky_class ); ?>"><?php
    				get_sidebar('right'); ?>
                        </section><!-- Secondary Right End --><?php
                    }
                }
            ?>
              </div>
              <div class="dt-sc-hr-invisible-large"></div>
          </div>
      </div><!-- **Main - End ** -->    
<?php get_footer(); ?>