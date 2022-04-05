<?php
$config = fitnesszone_kirki_config();

FITNESSZONE_Kirki::add_section( 'dt_site_skin_section', array(
	'title' 	=> esc_html__( 'Site Skin', 'fitnesszone' ),
	'priority'  => 23
) );

	# use-predefined-skin
	FITNESSZONE_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'use-predefined-skin',
		'label'    => esc_html__( 'Predefined Skin ?', 'fitnesszone' ),
		'section'  => 'dt_site_skin_section',
		'priority' => 1,
		'default'  => fitnesszone_defaults('use-predefined-skin' ),
		'choices'  => array(
			'on'   => esc_attr__( 'Yes', 'fitnesszone' ),
			'off'  => esc_attr__( 'No', 'fitnesszone' )
		)
	));

	# predefined-skin
	FITNESSZONE_Kirki::add_field( $config, array(
		'type' 				=> 'select',
		'settings' 			=> 'predefined-skin',
		'label'    			=> esc_html__( 'Skin', 'fitnesszone' ),
		'section'  			=> 'dt_site_skin_section',
		'default' 			=> fitnesszone_defaults('predefined-skin' ),
		'multiple' 			=> 1,
		'priority' 			=> 2,
		'active_callback'	=> array(
			array( 'setting'=> 'use-predefined-skin', 'operator' => '==', 'value' => '1' )
		),
		'choices' => array(
			'blue'				=>	esc_attr__('Blue','fitnesszone'),
			'grayish-orange'	=>	esc_attr__('Grayish Orange','fitnesszone'),
			'green'				=>	esc_attr__('Green','fitnesszone'),
			'khaki'				=>	esc_attr__('Khaki','fitnesszone'),
			'light-red'			=>	esc_attr__('Light Red','fitnesszone'),
			'megenta'			=>	esc_attr__('Megenta','fitnesszone'),
			'ocean'				=>	esc_attr__('Ocean','fitnesszone'),
			'orange'			=>	esc_attr__('Orange','fitnesszone'),
			'pink'				=>	esc_attr__('Pink','fitnesszone'),
			'purple'			=>	esc_attr__('Purple','fitnesszone'),
			'red'				=>	esc_attr__('Red','fitnesszone'),
			'yellow'			=>	esc_attr__('Yellow','fitnesszone'),
			
		)
	));


	# use-predefined-skin
	FITNESSZONE_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'use-dark-skin',
		'label'    => esc_html__( 'Enable Dark Skin', 'fitnesszone' ),
		'section'  => 'dt_site_skin_section',
		'priority' => 1,
		'default'  => fitnesszone_defaults('use-dark-skin' ),
		'choices'  => array(
			'on'   => esc_attr__( 'Yes', 'fitnesszone' ),
			'off'  => esc_attr__( 'No', 'fitnesszone' )
		)
	));

	# primary-color
	FITNESSZONE_Kirki::add_field( $config, array(
		'type' 				=> 'color',
		'settings' 			=> 'primary-color',
		'label'    			=> esc_html__( 'Primary Color', 'fitnesszone' ),
		'section'  			=> 'dt_site_skin_section',
		'priority' 			=> 3,
		'choices' 			=> array( 'alpha' => true ),
		'default'  			=> fitnesszone_defaults('primary-color'),
		'active_callback' 	=> array(
			array( 'setting'=> 'use-predefined-skin', 'operator' => '==', 'value' => '0' )
		),
		'output' => array(

			array( 'element' => '.has-primary-background-color', 'property' => 'background-color' ),
			array( 'element' => '.has-primary-color', 'property' => 'color' ),

			# Primary Color - Base	
			array( 'element' => 'a, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, .breadcrumb a:hover, .ls-container h2.skin, .ls-container h3.skin', 'property' => 'color' ),

			# Primary Color - Header
			array( 'element' => '.dt-header-menu ul.dt-primary-nav li > a:hover, .dt-header-menu ul.dt-primary-nav li:hover > a, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li > a:hover, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li:hover > a, .cart-info span:hover, .dt-sc-add2 h3 span,

				.dt-header-menu ul.dt-primary-nav li.current-menu-item > a, .dt-header-menu ul.dt-primary-nav li.current-page-item > a, .dt-header-menu ul.dt-primary-nav li.current-menu-ancestor > a, .dt-header-menu ul.dt-primary-nav li.current-page-ancestor > a, 

				.dt-header-menu ul.dt-primary-nav li.current_menu_item > a, .dt-header-menu ul.dt-primary-nav li.current_page_item > a, .dt-header-menu ul.dt-primary-nav li.current_menu_ancestor > a, .dt-header-menu ul.dt-primary-nav li.current_page_ancestor > a, 


				.dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current-menu-item > a, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current-page-item > a, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current-menu-ancestor > a, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current-page-ancestor > a, 

				.dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current_menu_item > a, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current_page_item > a, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current_menu_ancestor > a, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current_page_ancestor > a, 

				.dt-header-menu ul.dt-primary-nav li ul.children li.current-menu-item > a, .dt-header-menu ul.dt-primary-nav li ul.children li.current-page-item > a, .dt-header-menu ul.dt-primary-nav li ul.children li.current-menu-ancestor > a, .dt-header-menu ul.dt-primary-nav li ul.children li.current-page-ancestor > a, 

				.dt-header-menu ul.dt-primary-nav li ul.children li.current_menu_item > a, .dt-header-menu ul.dt-primary-nav li ul.children li.current_page_item > a, .dt-header-menu ul.dt-primary-nav li ul.children li.current_menu_ancestor > a, .dt-header-menu ul.dt-primary-nav li ul.children li.current_page_ancestor > a, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li a.link, #header .dt-sc-testimonial.type2 .dt-sc-testimonial-author cite, #header .dt-sc-contact-info a, #header .header1-topbar .dt-sc-contact-info a:hover,.is-style-outline .wp-block-button__link:hover,
				


				.mobile-menu ul.dt-primary-nav li > a:hover, .mobile-menu ul.dt-primary-nav li:hover > a, .mobile-menu ul.dt-primary-nav li ul.sub-menu li > a:hover, .mobile-menu ul.dt-primary-nav li ul.sub-menu li:hover > a, 

				.mobile-menu ul.dt-primary-nav li.current-menu-item > a, .mobile-menu ul.dt-primary-nav li.current-page-item > a, .mobile-menu ul.dt-primary-nav li.current-menu-ancestor > a, .mobile-menu ul.dt-primary-nav li.current-page-ancestor > a,

				.mobile-menu ul.dt-primary-nav li.current_menu_item > a, .mobile-menu ul.dt-primary-nav li.current_page_item > a, .mobile-menu ul.dt-primary-nav li.current_menu_ancestor > a, .mobile-menu ul.dt-primary-nav li.current_page_ancestor > a,

				.mobile-menu ul.dt-primary-nav li ul.sub-menu li.current-menu-item > a, .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current-page-item > a, .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current-menu-ancestor > a, .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current-page-ancestor > a,

				.mobile-menu ul.dt-primary-nav li ul.sub-menu li.current_menu_item > a, .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current_page_item > a, .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current_menu_ancestor > a, .mobile-menu ul.dt-primary-nav li ul.sub-menu li.current_page_ancestor > a,	
				
				.mobile-menu ul.dt-primary-nav li ul.children li.current-menu-item > a, .mobile-menu ul.dt-primary-nav li ul.children li.current-page-item > a, .mobile-menu ul.dt-primary-nav li ul.children li.current-menu-ancestor > a, .mobile-menu ul.dt-primary-nav li ul.children li.current-page-ancestor > a,

				.mobile-menu ul.dt-primary-nav li ul.children li.current_menu_item > a, .mobile-menu ul.dt-primary-nav li ul.children li.current_page_item > a, .mobile-menu ul.dt-primary-nav li ul.children li.current_menu_ancestor > a, .mobile-menu ul.dt-primary-nav li ul.children li.current_page_ancestor > a,								


				.menu-icons-wrapper .overlay-search #searchform:before, #header .header-25 .dt-sc-sociable:before, #header .header-25 .menu-icons-wrapper .search a, #header .header-25 .cart-info:before, #header .header-25  .dt-header-menu .dt-primary-nav > li:before, .cart-info span i, .dt-header-tpl .dt-custom-login li a span, .dt-header-tpl .dt-custom-login li a i, .dt-header-tpl .dt-custom-login li a:hover, a.cart-info:hover span span, a.cart-info:hover span, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li.current_page_item > a i.menu-item-icon:before, .dt-header-menu ul.dt-primary-nav li ul.sub-menu li > a:hover i.menu-item-icon:before', 'property' => 'color' ), 
			
			# Primary Color - Blog
			array( 'element' => '.blog-entry .entry-meta a:hover, .blog-entry.entry-date-left .entry-date a:hover, .blog-entry.entry-date-author-left .entry-date-author .comments:hover, .entry-meta-data p a:hover, .blog-entry.entry-date-author-left .entry-date-author .entry-author a:hover, .blog-entry.entry-date-author-left .entry-date-author .comments a:hover, .dt-sc-dark-bg .blog-medium-style.white-highlight .dt-sc-button.fully-rounded-border, .blog-entry.blog-thumb-style .entry-title h4 a:hover, .blog-entry.blog-thumb-style a.read-more:hover, .blog-entry .dt-sc-button.simple:hover, .blog-entry.bordered:hover .date, .blog-entry.post-info-within-image .entry-meta .entry-title h4 a:hover, .blog-entry.post-info-within-image .entry-meta a:hover, .blog-entry.post-info-within-image .entry-meta a:hover i, .blog-entry.post-standard .entry-meta .entry-info a:hover, .blog-entry.post-info-vertical-image .entry-meta .entry-info > *:hover, .blog-entry.post-info-vertical-image .entry-meta a:hover, .blog-entry.post-info-vertical-image .entry-meta .entry-info > *:hover i, .blog-entry.post-info-vertical-image .entry-meta .entry-title h4:hover a, .blog-entry.post-info-bottom-image .entry-meta .entry-info a:hover, .blog-entry.post-info-bottom-image .entry-meta .entry-info a:hover i, .blog-entry.entry-date-author-left .entry-date-author .comments a:hover, .blog-entry.entry-date-author-left .entry-format a:hover, .blog-entry.entry-date-author-left a.dt-sc-button, .blog-entry.entry-date-author-left .entry-details .entry-meta-data a:hover, .blog-entry.blog-thumb a.dt-sc-button, .blog-entry.blog-thumb .entry-meta-data p a:hover, .blog-entry.blog-thumb-style.entry-date-left .blog-post-meta li.comments a:hover, .single-post .blog-entry.post-left-date .entry-meta-data .author  span, .single-post .blog-entry.post-left-date .entry-meta-data p  span, .blog-entry.blog-thumb:hover .blog-entry-inner .entry-title h4 a, .blog-entry.entry-date-author-left:hover .entry-details .entry-title h4 a, .post-left-date.blog-entry .entry-meta-data p a:hover, .post-left-date.blog-entry .entry-meta-data p i:hover', 'property' => 'color' ),

			# Primary Color - Widgets	
			array( 'element' => '
				.widget #wp-calendar td a:hover, .dt-sc-dark-bg .widget #wp-calendar td a:hover, .secondary-sidebar .widget ul li > a:hover, .dt-sc-practices-list li:before, ul.dt-sc-fancy-list li a:hover, .secondary-sidebar .type15 .widget.widget_recent_reviews ul li .reviewer, .secondary-sidebar .type15 .widget.widget_top_rated_products ul li .amount.amount,  .widget ul li > a:hover, #footer .widget .recent-posts-widget li .author a, #footer .widget .recent-posts-widget li .entry-meta .comments a, 

				#main-menu .menu-item-widget-area-container .widget ul li > a:hover, #main-menu .dt-sc-dark-bg .menu-item-widget-area-container .widget ul li > a:hover, #main-menu .dt-sc-dark-bg .menu-item-widget-area-container .widget_recent_posts .entry-title h4 a:hover, #main-menu ul li.menu-item-simple-parent.dt-sc-dark-bg ul li a:hover, #main-menu .menu-item-widget-area-container .widget li:hover:before, .widget ul.quick_links li > a, .widget .dt-sc-service-pack .section-title3 span', 'property' => 'color' ),

			# Primary Color - Footer	
			array( 'element' => '#footer .footer-copyright .menu-links li a:hover, #footer .footer-copyright .copyright-left a:hover, #footer .dt-sc-dark-bg .recent-posts-widget li .entry-meta a:hover, #footer .dt-sc-dark-bg .entry-title h4 a:hover, #footer .dt-sc-dark-bg a:hover, .left-header-footer .dt-sc-sociable.filled li a, .footer-widgets a:hover, #footer a:hover, .dt-sc-skin-color, .dt-sc-skin-color a, #footer .wpcf7-form.bottom-bordered input[type="submit"], #footer .wpcf7-form.bottom-bordered button, #footer .wpcf7-form.bottom-bordered input[type="button"], #footer .wpcf7-form.bottom-bordered input[type="reset"], #footer h1, #footer h2, #footer h3, #footer h4, #footer h5, #footer h6, #footer .dt-sc-dark-bg.map-with-overlay .map-overlay.wpb_column .dt-sc-tabs-horizontal-container ul.dt-sc-tabs-horizontal > li > a:hover, #footer .dt-sc-dark-bg.map-with-overlay .map-overlay.wpb_column .dt-sc-tabs-horizontal-container ul.dt-sc-tabs-horizontal > li > a.current, #footer .dt-sc-light-bg.map-with-overlay .map-overlay.wpb_column .dt-sc-tabs-horizontal-container ul.dt-sc-tabs-horizontal > li > a:hover, #footer .dt-sc-light-bg.map-with-overlay .map-overlay.wpb_column .dt-sc-tabs-horizontal-container ul.dt-sc-tabs-horizontal > li > a.current, .footer-19 .blog-entry.blog-default-style .entry-meta .date, #footer .footer-19 .blog-entry.blog-default-style a.dt-sc-button.small, .footer-20 .widget .recent-posts-widget li .entry-meta p, #footer .footer-21 .dt-sc-sociable.partially-rounded li > a:hover > i, #footer .footer-22 .dt-sc-newsletter-section.type6 .dt-sc-subscribe-frm input[type="submit"], #footer .footer-22 .dt-sc-newsletter-section.type6 .dt-sc-subscribe-frm input[type="email"], #footer .footer-22 .dt-sc-newsletter-section.type6 .dt-sc-subscribe-frm input[type="text"], #footer .footer-24 .widget.widget_recent_entries ul li .post-date, #footer .footer-25.dt-sc-skin-highlight input[type="submit"], #footer .footer-25.dt-sc-skin-highlight button, #footer .footer-25.dt-sc-skin-highlight input[type="button"], #footer .footer-25.dt-sc-skin-highlight input[type="reset"], #footer .footer-29 .dt-sc-button.fully-rounded-border, .footer-29 .dt-sc-contact-info.type1:hover span, .footer-30 .dt-sc-contact-info.type1 span, #footer .footer-30 .dt-mc-subscribe form .btn-wrap.icon-only i, .footer-34 .wpb_column:hover h3:before, #footer .footer-27 .dt-sc-contact-info.type1 a:hover, #footer .footer-28.footer-copyright.dt-sc-dark-bg a:hover, #footer .copyright .wpb_wrapper p a, h3.dt-sc-skin-color', 'property' => 'color' ),

			# Primary Color - Gallery	
			array( 'element' => '.gallery .image-overlay .links a:hover, .gallery.type7 .image-overlay .links a, .project-details li a:hover, .gallery-categories a, .dt-gallery-single-slider-wrapper #bx-pager a.active:hover:before, .dt-gallery-single-slider-wrapper #bx-pager a, .gallery.type8 .image-overlay .links a, .widget.woocommerce ul.product-categories li a:hover, .widget.widget_layered_nav ul li a:hover, .gallery.type11:hover .gallery-subtitle h5 a', 'property' => 'color' ),

			# Primary Color - Miscellaneous/Shortcodes	
			array( 'element' => '.dt-skin-primary-color, ul.side-nav li a:hover, .available-domains li span, .dt-sc-popular-procedures .details .duration, .dt-sc-popular-procedures .details .price, .dt-sc-text-with-icon span, blockquote.type4 > cite, .dt-sc-contact-info.type3 span, .dt-sc-pr-tb-col.type2 .dt-sc-buy-now a, .dt-sc-events-list .dt-sc-event-title h5 a, .woocommerce-MyAccount-navigation ul > li.is-active > a, .woocommerce.single-product div.product .summary .price .amount, .side-navigation.type5 ul.side-nav li.current_page_item a, .side-navigation.type5 ul.side-nav>li>a:hover, .dt-sc-appointment-wrapper .title h6 span, .dt-sc-pr-tb-col.classic .dt-sc-tb-content li:before, .dt-sc-pr-tb-col.standard .dt-sc-tb-content li:before, .dt-sc-programs:hover .dt-sc-pro-detail .dt-sc-pro-content h3, .sample-link p a, ul.products li.product .woo-type21 .product-wrapper:hover .product-details h5 a, .dt-sc-event.type2:hover .event-detail h2 a, .tribe-events-sub-nav li a', 'property' => 'color' ),

			# Primary Color - Buttons	
			array( 'element' => '.dt-sc-button.fully-rounded-border, .dt-sc-button.rounded-border, .dt-sc-button.bordered, .dt-sc-button.with-shadow.white, .dt-sc-skin-highlight .dt-sc-button.rounded-border:hover, .dt-sc-skin-highlight .dt-sc-button.bordered:hover, .dt-sc-dark-bg.skin-color .dt-sc-button.fully-rounded-border:hover', 'property' => 'color' ),

			# Primary Color - Icon Boxes	
			array( 'element' => '.dt-sc-icon-box.type1 .icon-wrapper .icon, .dt-sc-icon-box.type2 .icon-wrapper .icon, .dt-sc-icon-box.type4 .icon-wrapper span, .dt-sc-icon-box.type5:hover .icon-content h4 a, .dt-sc-icon-box.type5.no-icon-bg .icon-wrapper span, .dt-sc-icon-box.type5.no-icon-bg:hover .icon-wrapper span, .dt-sc-icon-box.type10 .icon-wrapper span, .dt-sc-icon-box.type10:hover .icon-content h4, .dt-sc-icon-box.type13 .icon-content h4, .dt-sc-icon-box.type14 .icon-content h4, .dt-sc-icon-box.type5.no-icon-bg .icon-content h5, .dt-sc-icon-box.type5 .icon-content h4 a, .dt-sc-icon-box.type5.no-icon .icon-content h5, .dt-sc-icon-box.type3 .icon-content h4 a, .dt-sc-dark-bg .dt-sc-icon-box.type2.rounded-left-bg .icon-wrapper span, .dt-sc-image-caption.type3.rounded-img .dt-sc-image-content p, .dt-sc-image-caption.type3.rounded-icon .dt-sc-image-title h6, .dt-sc-icon-box.type13.inside-icons .icon-wrapper span, .dt-sc-icon-box.type2.rounded-left-light-bg .icon-wrapper span, .dt-sc-icon-box.type2.rounded-left-light-bg2 .icon-wrapper span', 'property' => 'color' ),

			# Primary Color - Testimonials	
			array( 'element' => '.dt-sc-testimonial.type4 .dt-sc-testimonial-author cite, .dt-sc-testimonial.type5 .dt-sc-testimonial-author cite, .dt-sc-testimonial.type7 .dt-sc-testimonial-quote blockquote cite, .dt-sc-testimonial.type8 .dt-sc-testimonial-quote blockquote q:before, .dt-sc-testimonial.type8 .dt-sc-testimonial-quote blockquote q:after, .dt-sc-testimonial-special-wrapper:after, .dt-sc-special-testimonial-images-holder .dt-sc-testimonial-image.slick-current .dt-sc-testimonial-author cite, .dt-sc-team-carousel-wrapper .dt-sc-team-details .dt-sc-team-social li a:hover, .ult-carousel-wrapper.ult_horizontal .slick-arrow:hover', 'property' => 'color' ),

			# Primary Color - Horizontal Tabs	
			array( 'element' => 'ul.dt-sc-tabs-horizontal-frame > li > a.current, ul.dt-sc-tabs-horizontal > li > a:hover, ul.dt-sc-tabs-horizontal-frame > li > a:hover, .type7 ul.dt-sc-tabs-horizontal-frame > li > a.current', 'property' => 'color' ),

			# Primary Color - Vertical Tabs	
			array( 'element' => 'ul.dt-sc-tabs-vertical-frame > li > a:hover,  ul.dt-sc-tabs-vertical > li > a.current, .dt-sc-tabs-vertical-frame-container.type2 ul.dt-sc-tabs-vertical-frame > li > a.current:before, ul.dt-sc-tabs-vertical > li > a:hover, .heading-border h5 a, .dt-sc-toggle-group-set.type3 h5.dt-sc-toggle a', 'property' => 'color' ),

			# Primary Color - Toggles	
			array( 'element' => '.dt-sc-toggle-frame-set > .dt-sc-toggle-accordion.active > a, .dt-sc-toggle-group-set .dt-sc-toggle.active > a, .dt-sc-toggle-frame h5.dt-sc-toggle-accordion.active a, .dt-sc-toggle-frame h5.dt-sc-toggle.active a, .dt-sc-toggle-panel h2 span', 'property' => 'color' ),

			# Primary Color - Headings/Titles	
			array( 'element' => '.dt-sc-appointment-wrapper .dt-sc-title h6, .dt-sc-title.script-with-sub-title h2, .dt-sc-title.with-two-color-stripe h2, .dt-sc-hexagon-title h2 span, #footer .footer-22 .dt-sc-title.script-with-sub-title h3, .side-navigation-content .dt-sc-title.script-with-sub-title strong, .dt-sc-title.border-title.with-sub-title *:nth-child(2)', 'property' => 'color' ),

			# Primary Color - Image Caption	
			array( 'element' => '.dt-sc-image-with-caption h3 a, .dt-sc-image-caption.type3 .dt-sc-image-content h3, .dt-sc-event-image-caption .dt-sc-image-content h3, .dt-sc-image-caption.type8:hover .dt-sc-image-content h3 a:hover, .dt-sc-image-caption.type3 .dt-sc-image-wrapper .icon-wrapper span', 'property' => 'color' ),

			# Primary Color - Team	
			array( 'element' => '.dt-sc-team.hide-social-role-show-on-hover .dt-sc-team-social.rounded-square li a, .dt-sc-team.rounded .dt-sc-team-details .dt-sc-team-social li a:hover, .dt-sc-team.rounded.team_rounded_border:hover .dt-sc-team-details h4, .dt-sc-team.type2 .dt-sc-team-social.rounded-border li a:hover, .dt-sc-team.type2 .dt-sc-team-social.rounded-square li a:hover, .dt-sc-team.type2 .dt-sc-team-social.square-border li a:hover, .dt-sc-team.type2 .dt-sc-team-social.hexagon-border li a:hover, .dt-sc-team.type2 .dt-sc-team-social.diamond-square-border li a:hover', 'property' => 'color' ),

			# Primary Color - Timeline	
			array( 'element' => '.dt-sc-timeline .dt-sc-timeline-content h2 span, .dt-sc-hr-timeline-section.type2 .dt-sc-hr-timeline-content:hover h3, .dt-sc-timeline-section.type4 .dt-sc-timeline:hover .dt-sc-timeline-content h2', 'property' => 'color' ),

			# Primary Color - Sociables	
			array( 'element' => '.dt-sc-sociable.diamond-square-border li:hover a, .dt-sc-sociable.hexagon-border li:hover a, .dt-sc-sociable.hexagon-with-border li:hover a, .dt-sc-sociable.no-margin li a', 'property' => 'color' ),

			# Primary Color - Counters	
			array( 'element' => '.dt-sc-counter.type3.diamond-square h4, .dt-sc-counter.type6:hover h4', 'property' => 'color' ),


			# Primary BG Color - Base
			array( 'element' => 'th, input[type="submit"], button, input[type="reset"], .loader', 'property' => 'background-color' ),

			# Primary BG Color - Header
			array( 'element' => '.overlay .overlay-close, #header .header-25 .dt-sc-sociable li a, #header .header-27 .cart-info:before, #header .header-28 .cart-icon span, .mobile-nav-container', 'property' => 'background-color' ),

			# Primary BG Color - Footer
			array( 'element' => '#footer .wpcf7-form.bottom-bordered input[type="submit"]:hover, #footer .wpcf7-form.bottom-bordered button:hover, #footer .wpcf7-form.bottom-bordered input[type="button"]:hover, #footer .wpcf7-form.bottom-bordered input[type="reset"]:hover, .footer-20 .footer-20-contact .vc_column-inner, #footer .footer-22 .dt-sc-newsletter-section.type6 .dt-sc-subscribe-frm input[type="submit"]:hover, #footer .footer-24 .widget.widget_recent_entries ul li:before, .footer-29 h3:before, .footer-28 .dt-sc-contact-info.type8:hover span', 'property' => 'background-color' ),

			# Primary BG Color - Blog
			array( 'element' => '
				.entry-format a, .blog-entry.blog-medium-style:hover .entry-format a,  .blog-entry.blog-medium-style.dt-blog-medium-highlight.dt-sc-skin-highlight, .blog-entry.blog-medium-style.dt-blog-medium-highlight.dt-sc-skin-highlight .entry-format a, .dt-sc-dark-bg .blog-medium-style.white-highlight .dt-sc-button.fully-rounded-border:hover,  .page-link a:hover, .post-edit-link:hover, .vc_inline-link:hover, .pagination ul li a:hover, .pagination ul li span, .page-link .post-page-numbers.current, .blog-entry.post-info-within-image .entry-meta .dt_scroll_down a:hover, .blog-entry.post-info-within-image .entry-meta p.category a:hover, .blog-entry.post-info-within-image .entry-meta-data p a:hover, .blog-entry.post-standard .entry-meta p.category a:hover, .blog-entry.post-standard .entry-meta-data p a:hover, .blog-entry.post-standard .entry-meta .entry-info .author:hover i.zmdi:after, .blog-entry.post-standard .entry-meta .entry-info .date:hover i.zmdi:after, .blog-entry.post-standard .entry-meta .entry-info .comments:hover i.zmdi:after, .blog-entry.post-standard .entry-meta .entry-info .views:hover i.zmdi:after, .blog-entry.post-standard .entry-meta .entry-info .likes:hover i.zmdi:after, .blog-entry.post-info-above-image .entry-meta p.category a:hover, .blog-entry.post-info-above-image .entry-meta-data p a:hover, .blog-entry.post-info-vertical-image .entry-meta p.category a:hover, .blog-entry.post-info-vertical-image .entry-meta-data p a:hover, .blog-entry.post-info-vertical-image .entry-thumb .entry-meta .entry-title h4:hover:after, .blog-entry.post-info-vertical-image .entry-thumb .entry-meta .entry-title h4:hover:before, .blog-entry.post-info-bottom-image .entry-meta-data p a:hover, .blog-entry.post-info-bottom-image .entry-meta.bottom-left p.category a:hover, .pagination ul li a.prev, .pagination ul li a.next, .blog-entry.entry-date-author-left .entry-thumb .entry-date, .blog-entry.entry-date-author-left .featured-post, .blog-entry.post-left-date .entry-thumb .entry-date, .blog-entry.blog-thumb .blog-entry-inner .entry-thumb .entry-date, .blog-entry.blog-thumb .featured-post, .blog-entry.blog-thumb-style.entry-date-left .blog-post-meta li.categories a:hover', 'property' => 'background-color' ),			

			# Primary BG Color - Widgets
			array( 'element' => '
				.widget .dt-sc-newsletter-section.boxed .dt-sc-subscribe-frm input[type="submit"]:hover, .tagcloud a:hover, .widgettitle:before, .widget.widget_archive ul li > a:hover span, 

				.dt-sc-dark-bg .tagcloud a:hover, .dt-sc-dark-bg .widget.widget_categories ul li > a:hover span, #footer .dt-sc-dark-bg .widget.widget_categories ul li > a:hover span, #footer .dt-sc-dark-bg .widget.widget_archive ul li > a:hover span', 'property' => 'background-color' ),	

			# Primary BG Color - Gallery
			array( 'element' => '.gallery.type2 .image-overlay-details, .gallery.type2 .image-overlay .links a:hover, .dt-sc-gallery-sorting.type2, .dt-sc-gallery-sorting.type2:before, .gallery.type6 .image-overlay .links a:hover, .gallery.type7 .image-overlay-details .categories a:before, .gallery.type7 .image-overlay .links a:hover:before, .dt-sc-gallery-sorting a.active-sort, .dt-sc-gallery-sorting a:hover, .gallery.type10 figure .image-thumb .links a:hover, .gallery.type10 .image-overlay:before, .bx-controls a.bx-prev:hover, .bx-controls a.bx-next:hover', 'property' => 'background-color' ),		

			# Primary BG Color - Miscellaneous/Shortcodes	
			array( 'element' => '.dt-skin-primary-bg, div[class*="dt-skin-primary-bg-opaque"]:not(.ult-vc-hide-row):before, div[class*="dt-skin-primary-bg-opaque"] .upb_row_bg:before, section[class*="dt-skin-primary-bg-opaque"]:before, ul.side-nav li a:hover:before, ul.side-nav > li.current_page_item > a:before, ul.side-nav > li > ul > li.current_page_item > a:before, ul.side-nav > li > ul > li > ul > li.current_page_item > a:before, .dt-sc-small-separator, .dt-sc-diamond-separator,  .carousel-arrows a:hover, .dt-sc-images-wrapper .carousel-arrows a:hover, .diamond-narrow-square-border li:hover:before, .dt-sc-sociable.hexagon-with-border li, .dt-sc-skin-highlight, .dt-sc-skin-highlight.extend-bg-fullwidth-left:after, .dt-sc-skin-highlight.extend-bg-fullwidth-right:after, .dt-skin-primary-bg.extend-bg-fullwidth-left:after, .dt-skin-primary-bg.extend-bg-fullwidth-right:after, .two-color-section:before, .dt-sc-readmore-plus-icon:hover:before, .dt-sc-readmore-plus-icon:hover:after, .dt-sc-content-with-hexagon-shape, .dt-sc-hexagons li .dt-sc-hexagon-overlay, .available-domains li .tdl:before, .available-domains li:hover .dt-sc-button, .domain-search-container .domain-search-form, .dt-sc-newsletter-section.type1 h2:before, .dt-sc-newsletter-section.type1 h2:after, .side-navigation.type2 ul.side-nav > li.current_page_item > a, .side-navigation.type3 ul.side-nav > li.current_page_item > a, .side-navigation.type3 ul.side-nav > li:hover > a, .side-navigation.type4 ul.side-nav li a:after, .side-navigation.type5 ul.side-nav li:after, .dt-mc-subscribe.only-border-bottom form:before, .dt-sc-add1, .dt-excersise-detail-cnt, blockquote.type6, .tt_tabs_navigation li a:hover, .tt_tabs_navigation li a.selected,
				.tt_tabs_navigation li.ui-tabs-active a, .dt-excersises.type2:hover .dt-excersise-detail-title p.count, .dt-excersise-title.title p.count, #buddypress .activity-list li.load-more a, .buddypress .buddypress-wrap input[type="submit"], .woocommerce div.product .woocommerce-tabs ul.tabs li.active a', 'property' => 'background-color' ),

			# Primary BG Color - Buttons
			array( 'element' => '.dt-sc-button.filled, .dt-sc-button:hover, .dt-sc-button.rounded-border:hover, .dt-sc-button.bordered:hover, .dt-sc-button.fully-rounded-border:hover, .dt-sc-colored-big-buttons:hover, .dt-sc-colored-big-buttons span, .post-nav-container a, .dt-sc-button.transforms3d span:before, a.dt-sc-button.transforms3d.bordered:hover span', 'property' => 'background-color' ),

			# Primary BG Color - Contact Info
			array( 'element' => '.dt-sc-contact-info.type2:hover span, .dt-sc-contact-info.type3, .dt-sc-contact-info.type4 span:after, .dt-sc-contact-info.type4:before, .dt-sc-contact-info.type5 .dt-sc-contact-icon, .dt-sc-contact-info.type5:hover, .dt-sc-contact-info.type6, .dt-sc-contact-info.type7 span:after, .dt-sc-contact-info.type4:after, .university-contact-form .button-field i', 'property' => 'background-color' ),	

			# Primary BG - Counters
			array( 'element' => '.dt-sc-counter.type1 .icon-wrapper:before, .dt-sc-counter.type2 .dt-sc-couter-icon-holder, .dt-sc-counter.type3:hover .icon-wrapper, .dt-sc-counter.type3.diamond-square .dt-sc-couter-icon-holder .icon-wrapper:before, .dt-sc-counter.type4:hover .dt-sc-couter-icon-holder, .dt-sc-counter.type5:hover:after, .dt-sc-counter.type6 h4:before, .dt-sc-counter.type6:hover .dt-sc-couter-icon-holder:before', 'property' => 'background-color' ),	

			# Primary BG Color - Icon Boxes
			array( 'element' => '.dt-sc-icon-box.type1 .icon-content h4:before,.dt-sc-icon-box.type1 .icon-wrapper, .dt-sc-icon-box.type3.dt-sc-diamond:hover .icon-wrapper:after, .dt-sc-icon-box.type5.rounded-skin .icon-wrapper, .dt-sc-icon-box.type5.rounded:hover .icon-wrapper, .dt-sc-icon-box.type5:hover .icon-wrapper:before, .dt-sc-icon-box.type5.alter .icon-wrapper:before, .dt-sc-icon-box.type6 .icon-wrapper, .dt-sc-icon-box.type7 .icon-wrapper, .dt-sc-contact-info.type8:hover span, .dt-sc-icon-box.type10:hover .icon-wrapper:before, .dt-sc-icon-box.type10 .icon-content h4:before, .dt-sc-icon-box.type11:before, .dt-sc-icon-box.type12, .dt-sc-icon-box.type13:hover, .dt-sc-icon-box.type14:hover, .dt-sc-icon-box.type15 .icon-content, .dt-sc-icon-box.type5 .icon-wrapper:after, .dt-sc-icon-box.type3 .icon-wrapper, .dt-sc-icon-box.type4.rounded-style:hover .icon-wrapper, .dt-sc-icon-box.type4.rounded-style .icon-wrapper:after, .dt-sc-icon-box.type2.rounded-left-bg:hover .icon-wrapper, .type3.rounded-img .dt-sc-image-wrapper .icon-wrapper:before, .type3.rounded-img .dt-sc-image-wrapper, .type3.rounded-icon:hover .dt-sc-image-wrapper, .dt-sc-icon-box.type13.inside-icons .icon-wrapper:after, .dt-sc-icon-box.type2.rounded-left-light-bg:hover .icon-wrapper, .dt-sc-icon-box.type2.rounded-left-light-bg2:hover .icon-wrapper', 'property' => 'background-color' ),

			# Primary BG Color - Testimonials
			array( 'element' => '.dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a:hover, .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a.active, .dt-sc-special-testimonial-images-holder.slick-slider .slick-dots li button:hover:before, .dt-sc-special-testimonial-images-holder.slick-slider .slick-dots li.slick-active button:before', 'property' => 'background-color' ),

			# Primary BG Color - Headings/Titles
			array( 'element' => '.dt-sc-title.with-two-color-bg:after, .dt-sc-triangle-title:after, .dt-sc-title.with-right-border-decor:after, .dt-sc-title.with-right-border-decor:before, .dt-sc-title.with-boxed, .mz-title .mz-title-content h2, .mz-title-content h3.widgettitle, .mz-title .mz-title-content:before, .mz-blog .comments a, .mz-blog div.vc_gitem-post-category-name, .mz-blog .ico-format, .side-navigation-content .dt-sc-wings-heading:after', 'property' => 'background-color' ),	

			# Primary BG Color - Team
			array( 'element' => '.dt-sc-team-social.hexagon-border li:hover, .dt-sc-team .dt-sc-team-social.diamond-square-border li:hover, .dt-sc-team.hide-social-role-show-on-hover .dt-sc-team-social.rounded-square li:hover a, .dt-sc-infinite-gallery-load-more, .dt-sc-single-hexagon .dt-sc-single-hexagon-overlay, .dt-sc-team-social.rounded-border li a:hover, .dt-sc-team-social.rounded-square li a, .dt-sc-team.hide-social-show-on-hover:hover .dt-sc-team-details, .dt-sc-team-social.square-border li a:hover, .dt-sc-team.rounded:hover .dt-sc-team-thumb:after, .dt-sc-team.hide-social-role-show-on-hover .dt-sc-team-social li:hover, .dt-sc-team.style2 .dt-sc-sociable li a, .dt-sc-team.style2 .dt-sc-team-details .view-details:hover, .dt-sc-team.default  .dt-sc-team-details, .dt-sc-team.default .dt-sc-team-social', 'property' => 'background-color' ),

			# Primary BG Color - Pricing Tables
			array( 'element' => '.dt-sc-pr-tb-col.minimal:hover .dt-sc-price, .dt-sc-pr-tb-col.minimal.selected .dt-sc-price, .dt-sc-pr-tb-col:hover .dt-sc-buy-now a, .dt-sc-pr-tb-col.selected .dt-sc-buy-now a, .dt-sc-pr-tb-col.minimal:hover .icon-wrapper:before, .dt-sc-pr-tb-col.minimal.selected .icon-wrapper:before, .dt-sc-pr-tb-col.type1:hover .dt-sc-tb-header, .dt-sc-pr-tb-col.type1.selected .dt-sc-tb-header, .dt-sc-pr-tb-col.type2 .dt-sc-tb-header .dt-sc-tb-title:before, .dt-sc-pr-tb-col.type2 .dt-sc-tb-content:before, .dt-sc-pr-tb-col.type2 .dt-sc-tb-content li .highlight, .dt-sc-pr-tb-col.type2:hover .dt-sc-price:before, .dt-sc-pr-tb-col.type2.selected .dt-sc-price:before, .dt-sc-pr-tb-col.type2:hover .dt-sc-buy-now a, .dt-sc-pr-tb-col.standard .dt-sc-buy-now .dt-sc-button:hover span, .dt-sc-pr-tb-col.standard:hover .dt-sc-price, .dt-sc-pr-tb-col.standard.selected .dt-sc-price', 'property' => 'background-color' ),

			# Primary BG Color - HR Timeline
			array( 'element' => '.dt-sc-hr-timeline-section.type1:before, .dt-sc-hr-timeline-section.type1 .dt-sc-hr-timeline .dt-sc-hr-timeline-content:after, .dt-sc-hr-timeline-section.type1 .dt-sc-hr-timeline-wrapper:before, .dt-sc-hr-timeline-section.type1 .dt-sc-hr-timeline-wrapper:after, .dt-sc-hr-timeline-section.type2 .dt-sc-hr-timeline-content h3:before, .dt-sc-hr-timeline-section.type2 .dt-sc-hr-timeline:hover .dt-sc-hr-timeline-thumb:before', 'property' => 'background-color' ),

			# Primary BG Color - Vertical Timeline
			array( 'element' => '.dt-sc-timeline-section.type2:before, .dt-sc-timeline-section.type3 .dt-sc-timeline .dt-sc-timeline-content h2:before, .dt-sc-timeline-section.type4 .dt-sc-timeline .dt-sc-timeline-content h2:before, .dt-sc-timeline-section.type4 .dt-sc-timeline:hover .dt-sc-timeline-thumb:before', 'property' => 'background-color' ),	

			# Primary BG Color - Image Caption
			array( 'element' => '.dt-sc-image-caption.type2:hover .dt-sc-image-title:before, .dt-sc-image-caption.type4:hover .dt-sc-button, .dt-sc-image-caption.type8 .dt-sc-image-content:before, .dt-sc-event-image-caption:hover, .dt-sc-image-caption.type3.rounded-icon:hover .dt-sc-image-content a.dt-sc-button, .dt-sc-image-caption.type3.rounded-img:hover .dt-sc-image-content a.dt-sc-button', 'property' => 'background-color' ),	

			# Primary BG Color - Horizontal Tabs
			array( 'element' => '.dt-sc-tabs-horizontal-frame-container.type4 ul.dt-sc-tabs-horizontal-frame > li > a.current > span:after, .dt-sc-tabs-horizontal-frame-container.type5 ul.dt-sc-tabs-horizontal-frame > li > a.current, .dt-sc-tabs-horizontal-frame-container.type6 ul.dt-sc-tabs-horizontal-frame > li > a, .type8 ul.dt-sc-tabs-horizontal-frame > li > a.current, .type8 ul.dt-sc-tabs-horizontal-frame > li > a:hover, .dt-sc-tabs-vertical-frame-container.type5 ul.dt-sc-tabs-vertical-frame > li > a.current', 'property' => 'background-color' ),

			# Primary BG Color - Toggles
			array( 'element' => '.heading-bg h5.dt-sc-toggle-accordion.active, .dt-sc-toggle-group-set.type3 .dt-sc-toggle-frame h5.dt-sc-toggle.active', 'property' => 'background-color' ),

			# Primary BG Color - Vertical Tabs
			array( 'element' => '.dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a:hover, .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a.current, .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame > li > a:before, .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame > li > a:after', 'property' => 'background-color' ),

            # Primary BG Color - Tooltip
			array( 'element' => '#tribe-events-content .tribe-events-tooltip h4, .dt-sc-tooltip-one .tooltip-inner, .dt-sc-tooltip-three .tooltip-content, .dt-sc-tooltip-two .tooltip-content', 'property' => 'background-color' ),

			# Primary BG Color - Video Manager
			array( 'element' => '.dt-sc-video-wrapper .video-overlay-inner a, .dt-sc-video-item:hover .dt-sc-vitem-detail, .dt-sc-video-item.active .dt-sc-vitem-detail, .type2 .dt-sc-video-item:hover, .type2 .dt-sc-video-item.active, .nicescroll-rails.dt-sc-skin', 'property' => 'background-color' ),

			# Primary BG Color - Add-ons/Custom Modules
			array( 'element' => '.live-chat a, .dt-bmi-inner-content tbody th, .dt-bmi-inner-content tbody tr:nth-child(2n+1) th, .dt-sc-menu .menu-categories a:before, .hotel-search-container form input[type="submit"]:hover, .hotel-search-container .selection-box:after, .dt-sc-training-details-overlay, .custom-navigation .vc_images_carousel .vc_carousel-indicators li, .dt-sc-doctors.style1 .dt-sc-doctors-thumb-wrapper .dt-sc-button, .dt-sc-doctors-single .dt-sc-doctors.style1 .dt-sc-doctors-details ul.dt-sc-sociable li a, .dt-sc-procedure-item:hover, .dt-sc-fitnesszone-procedure-sorting a, ul.dt-sc-vertical-nav > li.active > a, ul.time-table > li:before, ul.time-table > li.selected, .dt-sc-available-times ul.time-slots, #wpsl-search-btn, #wpsl-stores li > p span, #wpsl-stores li > p, #wpsl-stores li > p ~ .wpsl-directions, .dt-sc-toggle-advanced-options span', 'property' => 'background-color' ),

			# Primary Border Color - Footer
			array( 'element' => ' #footer .wpcf7-form.bottom-bordered input[type="submit"]:hover, #footer .wpcf7-form.bottom-bordered button:hover, #footer .wpcf7-form.bottom-bordered input[type="button"]:hover, #footer .wpcf7-form.bottom-bordered input[type="reset"]:hover, #footer .footer-22 .dt-sc-newsletter-section.type6 .dt-sc-subscribe-frm input[type="submit"]:hover, .checkout-button.button, .footer-26 .tagcloud a:hover, .dt-header-menu ul.dt-primary-nav li:not(.has-mega-menu) ul.sub-menu, .header1-menu .menu-container ul.dt-primary-nav  li.current_page_item > a:before', 'property' => 'border-color' ),

			# Primary Border Color - Blog
            array( 'element' => '.blog-entry.entry-date-left .entry-date span, .blog-entry.blog-medium-style:hover .entry-format a, .dt-sc-dark-bg .blog-medium-style.white-highlight .dt-sc-button.fully-rounded-border, .pagination ul li a:hover, .post-nav-container .post-next-link a:hover, .post-nav-container .post-prev-link a:hover,  .page-link a:hover, .blog-entry.bordered:hover .date, .blog-entry.bordered .entry-details:after, .blog-entry.bordered, .blog-entry.post-standard .entry-meta .entry-info > *:hover, .pagination ul li a.prev, .pagination ul li a.next,  .blog-entry.entry-date-author-left:after, .blog-entry.entry-date-author-left:before', 'property' => 'border-color' ),
            
            # Primary Border Color - tTooltip
            array( 'element' => '.dt-sc-tooltip-one .tooltip-content::after, .dt-sc-tooltip-one.bottom .tooltip-content .tooltip-text,.dt-sc-tooltip-one .tooltip-content::after', 'property' => 'border-top-color' ),

			# Primary Border Color - Widgets
			array( 'element' => '.widget .dt-sc-newsletter-section.boxed, .widget .dt-sc-newsletter-section.boxed .dt-sc-subscribe-frm input[type="submit"], .tagcloud a:hover, .dt-sc-dark-bg .tagcloud a:hover, .secondary-sidebar .type3 .widgettitle, .secondary-sidebar .type6 .widgettitle, .secondary-sidebar .type13 .widgettitle:before, .secondary-sidebar .type14 .widgettitle, .secondary-sidebar .type16 .widgettitle', 'property' => 'border-color' ),

			# Primary Border Color - Galleries
			array( 'element' => '.gallery.type7 .image-overlay .links a:before', 'property' => 'border-color' ),

			# Primary Border Color - Buttons
			array( 'element' => '.dt-sc-colored-big-buttons, .dt-sc-button.fully-rounded-border, .dt-sc-button.fully-rounded-border:hover, .dt-sc-button.rounded-border.black:hover, .dt-sc-button.bordered.black:hover, .dt-sc-button.bordered:hover, .dt-sc-button.rounded-border:hover, .woocommerce a.button', 'property' => 'border-color' ),

			# Primary Border Color - Sociables
			array( 'element' => '.dt-sc-sociable.rounded-border li a:hover, .dt-sc-dark-bg .dt-sc-sociable.rounded-border li a:hover, .dt-sc-dark-bg .dt-sc-sociable.square-border li a:hover, .dt-sc-sociable.diamond-square-border li:hover, .diamond-narrow-square-border li:before', 'property' => 'border-color' ),

			# Primary Border Color - Team
			array( 'element' => '.dt-sc-team .dt-sc-team-social.diamond-square-border li:hover, .dt-sc-team-social.hexagon-border li:hover, .dt-sc-team-social.hexagon-border li:hover:before, .dt-sc-team-social.hexagon-border li:hover:after, .dt-sc-team-social.rounded-border li a:hover, .dt-sc-team-social.square-border li a:hover, .dt-sc-team.team_rounded_border.rounded:hover .dt-sc-team-thumb:before, .dt-sc-team.hide-social-role-show-on-hover:hover .dt-sc-team-thumb img', 'property' => 'border-color' ),

			# Primary Border Color - Testimonials
			array( 'element' => '.dt-sc-testimonial.type5 .dt-sc-testimonial-quote, .dt-sc-testimonial-images li.selected div, .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a:hover, .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a.active, .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a.active:before, .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a.active:hover:before, .dt-sc-testimonial.type5 .dt-sc-testimonial-author img', 'property' => 'border-color' ),

			# Primary Border Color - Tabs
			array( 'element' => '
				ul.dt-sc-tabs-vertical > li > a.current, 
				.dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a:hover, .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a.current', 'property' => 'border-color' ),

			# Primary Border Top Color - Tabs
			array( 'element' => '.dt-sc-tabs-horizontal-frame-container.type6 ul.dt-sc-tabs-horizontal-frame > li > a:before', 'property' => 'border-top-color' ),

			# Primary Border Color - Toggles
			array( 'element' => '.type2 .dt-sc-toggle-frame h5.dt-sc-toggle-accordion.active, .type2 .dt-sc-toggle-frame h5.dt-sc-toggle.active', 'property' => 'border-color' ),

			# Primary Border Color - Timeline
			array( 'element' => ' .dt-sc-hr-timeline-section.type1 .dt-sc-hr-timeline .dt-sc-hr-timeline-content:before, .dt-sc-timeline-section.type2 .dt-sc-timeline-image-wrapper, .dt-sc-timeline-section.type2 .dt-sc-timeline .dt-sc-timeline-content:after, .dt-sc-timeline-section.type2:after', 'property' => 'border-color' ),

			# Primary Border Color - Counters
			array( 'element' => '.dt-sc-counter.type3 .icon-wrapper:before, .dt-sc-counter.type3.diamond-square, .dt-sc-counter.type5:hover:before, .dt-sc-counter.type5:hover:after, .dt-sc-counter.type6, .dt-sc-counter.type6 .dt-sc-couter-icon-holder:before', 'property' => 'border-color' ),

			# Primary Border Color - Contact Info
			array( 'element' => '.dt-sc-contact-info.type2:hover, .dt-sc-contact-info.type4, .last .dt-sc-contact-info.type4', 'property' => 'border-color' ),

			# Primary Border Color - Icon Boxes
			array( 'element' => '.dt-sc-icon-box.type5.no-icon .icon-content h4, .dt-sc-icon-box.type5.no-icon, .dt-sc-icon-box.type10, .dt-sc-icon-box.type10 .icon-wrapper:before, .dt-sc-icon-box.type3.dt-sc-diamond:hover .icon-wrapper:after, .dt-sc-icon-box.type11:before, .dt-sc-image-caption.type3.rounded-img:before, .dt-sc-image-caption.type3.rounded-img:after, .dt-sc-image-caption.type3.rounded-icon:before, .dt-sc-image-caption.type3.rounded-icon:after', 'property' => 'border-color' ),

			# Primary Border Color - Image Caption
			array( 'element' => '.dt-sc-image-caption.type2 .dt-sc-image-title:before, .dt-sc-image-caption.type4, .dt-sc-image-caption.type4:hover .dt-sc-button, .dt-sc-icon-box.type10:hover .icon-wrapper:before, .dt-sc-image-caption.type5:hover img, .dt-sc-image-caption.type5:hover .dt-sc-image-wrapper:before', 'property' => 'border-color' ),

			# Primary Border Color - Miscellaneous/Shortcodes
			array( 'element' => '.dt-skin-primary-border, .dt-sc-title.with-right-border-decor h2:before, .dt-sc-pr-tb-col.type2 .dt-sc-tb-header:before,  .dt-sc-text-with-icon.border-bottom, .dt-sc-text-with-icon.border-right, .dt-sc-hexagons li:hover, .dt-sc-hexagons li:hover:before, .dt-sc-hexagons li:hover:after, .dt-sc-hexagons li, .dt-sc-hexagons li:before, .dt-sc-hexagons li .dt-sc-hexagon-overlay:before, .dt-sc-hexagons li:after, .dt-sc-hexagons li .dt-sc-hexagon-overlay:after, .dt-sc-single-hexagon, .dt-sc-single-hexagon:before, .dt-sc-single-hexagon .dt-sc-single-hexagon-overlay:before, .dt-sc-single-hexagon:after, .dt-sc-single-hexagon .dt-sc-single-hexagon-overlay:after, .dt-sc-single-hexagon:hover, .dt-sc-single-hexagon:hover:before, .dt-sc-single-hexagon:hover:after, .carousel-arrows a:hover, .vc_custom_carousel .slick-slider .slick-dots, .vc_custom_carousel .slick-slider:before, .dt-sc-team-navigation .dt-sc-team-pager-prev:before, .dt-sc-team-navigation .dt-sc-team-pager-next:before, ul.dt-sc-vertical-nav, ul.dt-sc-vertical-nav > li:first-child > a, .dt-sc-loading:before, .side-navigation.type2 ul.side-nav, .side-navigation.type2 ul.side-nav li, .side-navigation.type2 ul.side-nav li ul, blockquote.type2, blockquote.type4, ul.sub-menu li.menu-item.menu-item-object-dt_mega_menus, .dt-sc-callout-box.type2.with-icon.alignleft:not(.border-style), .gallery:hover .image-overlay, .dt-sc-special-testimonial-images-holder .dt-sc-testimonial-image img:hover', 'property' => 'border-color' ),

			# Primary Border Top Color - Miscellaneous/Shortcodes
			array( 'element' => '.dt-sc-triangle-wrapper:hover .dt-sc-triangle-content:before, .dt-sc-pr-tb-col.type2 .dt-sc-tb-content:after, .dt-sc-content-with-hexagon-shape:after, .type7 ul.dt-sc-tabs-horizontal-frame > li > a.current:before, .type7 ul.dt-sc-tabs-horizontal-frame > li > a.current:after, .skin-highlight .dt-sc-tabs-horizontal-frame-container.type6 ul.dt-sc-tabs-horizontal-frame > li > a:before, .dt-sc-doctors-filter .selection-box:before', 'property' => 'border-top-color' ),

			# Primary Border Bottom Color - Miscellaneous/Shortcodes
			array( 'element' => '.dt-sc-up-arrow:before, .dt-sc-image-caption .dt-sc-image-wrapper .icon-wrapper:before, .dt-sc-triangle-wrapper.alter:hover .dt-sc-triangle-content:before, .dt-sc-content-with-hexagon-shape:before, .dt-sc-tabs-horizontal-frame-container.type3 ul.dt-sc-tabs-horizontal-frame > li > a.current, .dt-sc-tabs-horizontal-frame-container.type4 ul.dt-sc-tabs-horizontal-frame > li > a.current, #footer .footer-22 .dt-sc-newsletter-section.type6', 'property' => 'border-bottom-color' ),

			# Primary Border Left Color - Miscellaneous/Shortcodes
			array( 'element' => '.type3 .dt-sc-toggle-frame .dt-sc-toggle-content, .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a.current:before, .dt-sc-event-image-caption:hover .dt-sc-image-content:before, .side-navigation.type2 ul.side-nav > li.current_page_item > a:after, .side-navigation.type2 ul.side-nav > li > ul > li.current_page_item > a:after', 'property' => 'border-left-color' ),

			# Primary Border Right Color - Footer
			array( 'element' => '#footer .footer-22.slope-bg.dt-sc-skin-highlight:before, #footer .footer-22 .dt-sc-newsletter-section.type6', 'property' => 'border-right-color' ),

			# Primary Border Color - Add-ons/Custom Modules
			array( 'element' => '.dt-sc-attorney-sorting, .dt-sc-menu-sorting a.active-sort, .dt-sc-menu .image-overlay .price, .hotel-search-container form input[type="submit"]', 'property' => 'border-color' ),


			# Primary BG Color - 404/Not-Found
			array( 'element' => '.error404 .type2 a.dt-sc-back, .error404 .type4 .error-box:before, .error404 .type4 .dt-sc-newsletter-section input[type="submit"], .error404 .type8 .dt-go-back', 'property' => 'background-color' ),

			# Primary Color - 404/Not-Found
			array( 'element' => '.error404 .type2 h2, .error404 .type8 h2, .error404 .type8 .dt-go-back:hover i', 'property' => 'color' ),


			# Primary BG Color - Coming Soon
			array( 'element' => '.under-construction.type4 .dt-sc-counter-wrapper, .under-construction.type1 .dt-sc-newsletter-section form input[type="submit"], .under-construction.type1 .dt-sc-counter-wrapper .counter-icon-wrapper:before, .under-construction.type2 .dt-sc-sociable > li:hover a, .under-construction.type7 .dt-sc-sociable > li:hover a, .under-construction.type3 .dt-sc-newsletter-section form input[type="submit"], .under-construction.type3 .dt-sc-sociable > li:hover a, .under-construction.type7 .dt-sc-counter-wrapper, .under-construction.type7 .dt-sc-newsletter-section form input[type="submit"]', 'property' => 'background-color' ),

			# Primary Border Color - Coming Soon
			array( 'element' => '.under-construction.type3 .dt-sc-sociable > li:hover a', 'property' => 'border-color' ),

			# Primary Color - Coming Soon
			array( 'element' => '.under-construction.type4 .wpb_wrapper > h2 span, .under-construction.type4 .read-more i, .under-construction.type4  .wpb_wrapper >  h4:after, .under-construction.type4 .wpb_wrapper > h4:before, .under-construction.type1 .read-more span.fa, .under-construction.type1 .read-more a:hover, .under-construction.type2 .counter-icon-wrapper .dt-sc-counter-number, .under-construction.type2 h2, .under-construction.type2 .dt-sc-counter-wrapper h3, .under-construction.type2 .mailchimp-newsletter h3,  .under-construction.type7 h2, .under-construction.type7 .mailchimp-newsletter h3, .under-construction.type3 p, .under-construction.type5 h2 span, .under-construction.type5 .dt-sc-counter-number, .under-construction.type5 footer .dt-sc-team-social li:hover a, .under-construction.type5 input[type="email"], .under-construction.type7 .aligncenter .wpb_text_column h2', 'property' => 'color' ),


			# Primary BG Color - BuddyPress
			array( 'element' => '#buddypress div.pagination .pagination-links span, #buddypress div.pagination .pagination-links a:hover, #buddypress #group-create-body #group-creation-previous, #item-header-content #item-meta > #item-buttons .group-button, #buddypress div#subnav.item-list-tabs ul li.feed a:hover, #buddypress div.activity-meta a:hover, #buddypress div.item-list-tabs ul li.selected a span, #buddypress .activity-list li.load-more a, #buddypress .activity-list li.load-newest a, .buddypress-wrap .bp-navs li.selected a, #buddypress div.pagination .pagination-links a.page-numbers', 'property' => 'background-color' ),

			# Primary Border Color - BuddyPress
			array( 'element' => '#buddypress div.pagination .pagination-links span, #buddypress div.pagination .pagination-links a:hover, #buddypress #members-dir-list ul li:hover', 'property' => 'border-color' ),

			# Primary Color - BuddyPress
			array( 'element' => '
				#members-list.item-list.single-line li h5 span.small a.button, #buddypress div.item-list-tabs ul li.current a, #buddypress #group-create-tabs ul li.current a, #buddypress a.bp-primary-action:hover span, #buddypress div.item-list-tabs ul li.selected a, 
				.widget.buddypress div.item-options a:hover, .widget.buddypress div.item-options a.selected, #footer .footer-widgets.dt-sc-dark-bg .widget.buddypress div.item-options a.selected, .widget.widget_bp_core_members_widget div.item .item-title a:hover, .widget.buddypress .bp-login-widget-user-links > div.bp-login-widget-user-link a:hover', 'property' => 'color' ),


			# Primary BG Color - BbPress
			array( 'element' => '#bbpress-forums li.bbp-header, .bbp-submit-wrapper #bbp_topic_submit, .bbp-reply-form #bbp_reply_submit, .bbp-pagination-links a:hover, .bbp-pagination-links span.current, #bbpress-forums #subscription-toggle a.subscription-toggle', 'property' => 'background-color' ),

			# Primary Border Color - BbPress
			array( 'element' => '.bbp-pagination-links a:hover, .bbp-pagination-links span.current', 'property' => 'border-color' ),

			# Primary Color - BbPress
			array( 'element' => '.bbp-forums .bbp-body .bbp-forum-info::before', 'property' => 'color' ),


			# Primary BG Color - Events
			array( 'element' => '#tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option a:hover, #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option.tribe-bar-active a:hover, #tribe-bar-form .tribe-bar-submit input[type="submit"], #tribe-bar-views .tribe-bar-views-list li.tribe-bar-active a, .tribe-events-calendar thead th, #tribe-events-content .tribe-events-tooltip h4, .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"], .tribe-events-read-more, #tribe-events .tribe-events-button, .tribe-events-button, .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"] > a, .tribe-events-back > a, #tribe_events_filters_toggle,  #tribe-events-content .tribe-events-tooltip h3, .dt-sc-event.type1 .dt-sc-event-thumb span, .dt-sc-event.type1:hover .dt-sc-event-title p.count', 'property' => 'background-color' ),

			# Primary Border Color - Events
			array( 'element' => '.tribe-events-list .tribe-events-event-cost span, #tribe-bar-views ul.tribe-bar-views-list li.tribe-bar-views-option.tribe-bar-active', 'property' => 'border-color' ),

			# Primary BG Color - Events Pro
			array( 'element' => '.tribe-grid-header', 'property' => 'background-color' ),


			# Primary BG Color - Event Detail
			array( 'element' => '.type1.tribe_events .event-image-wrapper .event-datetime > span, .type3.tribe_events .event-date, .event-meta-tab ul.dt-sc-tabs-horizontal-frame > li > a', 'property' => 'background-color' ),

			# Primary Color - Event Detail
			array( 'element' => '.type1 .event-schedule, .type1.tribe_events .nav-top-links a:hover, .type1.tribe_events .event-image-wrapper .event-datetime > i, .type1.tribe_events .event-image-wrapper .event-venue > i, .type1.tribe_events h4 a, .type2.tribe_events .date-wrapper p span, .type2.tribe_events h4 a, .type3.tribe_events .right-calc a:hover, .type3.tribe_events .tribe-events-sub-nav li a:hover, .type3.tribe_events .tribe-events-sub-nav li a span, .type4.tribe_events .data-wrapper p span, .type4.tribe_events .data-wrapper p i, .type4.tribe_events .event-organize h4 a, .type4.tribe_events .event-venue h4 a, .type5.tribe_events .event-details h3, .type5.tribe_events .event-organize h3, .type5.tribe_events .event-venue h3, .type5.tribe_events .data-wrapper p span, .data-wrapper p i, .type5.tribe_events .event-organize h4 a, .type5.tribe_events .event-venue h4 a', 'property' => 'color' ),


			# Primary BG Color - Event Listing Shortcode
			array( 'element' => '.dt-sc-event.type1 .dt-sc-event-thumb p, .dt-sc-event.type1 .dt-sc-event-meta:before, .dt-sc-event.type2:hover .dt-sc-event-meta, .dt-sc-event.type3 .dt-sc-event-date, .dt-sc-event.type3:hover .dt-sc-event-meta', 'property' => 'background-color' ),

			# Primary Border Bottom Color - Event Listing Shortcode
			array( 'element' => '.dt-sc-event.type4 .dt-sc-event-date:after, .dt-sc-tooltip-one.bottom .tooltip-content::after,
            .dt-sc-tooltip-one .tooltip-text', 'property' => 'border-bottom-color' ),

			# Primary Color - Event Listing Shortcode
			array( 'element' => '.dt-sc-event.type1 .dt-sc-event-meta p span, .dt-sc-event.type1:hover h2.entry-title a, .dt-sc-event.type3:hover h2.entry-title a, .dt-sc-event.type4 .dt-sc-event-date span', 'property' => 'color' ),


			# Primary BG Color - Event Widgets
			array( 'element' => '
				.widget.tribe_mini_calendar_widget .tribe-mini-calendar thead.tribe-mini-calendar-nav td, 

				.widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-present, .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-has-events.tribe-mini-calendar-today, .tribe-mini-calendar .tribe-events-has-events.tribe-events-present a:hover, .widget.tribe_mini_calendar_widget .tribe-mini-calendar td.tribe-events-has-events.tribe-mini-calendar-today a:hover, 

				.dt-sc-dark-bg .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-present, .dt-sc-dark-bg .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-has-events.tribe-mini-calendar-today, .dt-sc-dark-bg .tribe-mini-calendar .tribe-events-has-events.tribe-events-present a:hover, .dt-sc-dark-bg .widget.tribe_mini_calendar_widget .tribe-mini-calendar td.tribe-events-has-events.tribe-mini-calendar-today a:hover', 'property' => 'background-color' ),

			# Primary Border Color - Event Widgets
			array( 'element' => '.widget.tribe_mini_calendar_widget .tribe-mini-calendar thead.tribe-mini-calendar-nav td', 'property' => 'border-color' ),		

			# Primary Color - Event Widgets
			array( 'element' => '.widget.tribe-events-countdown-widget .tribe-countdown-text a:hover', 'property' => 'color' ),			


			# Primary BG Color - WooCommerce Defaults
			array( 'element' => '.woocommerce a.button, .woocommerce button.button, .woocommerce button, .woocommerce input.button, .woocommerce input[type=button], .woocommerce input[type=submit]:hover, .woocommerce #respond input#submit, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce .product .summary .add_to_wishlist, .woocommerce .wishlist_table .add_to_cart.button, .woocommerce .yith-wcwl-add-button a.add_to_wishlist, .woocommerce .yith-wcwl-popup-button a.add_to_wishlist, .woocommerce .wishlist_table a.ask-an-estimate-button, .woocommerce .wishlist-title a.show-title-form, .woocommerce .hidden-title-form a.hide-title-form, .woocommerce .yith-wcwl-wishlist-new button, .woocommerce .wishlist_manage_table a.create-new-wishlist, .woocommerce .wishlist_manage_table button.submit-wishlist-changes, .woocommerce .yith-wcwl-wishlist-search-form button.wishlist-search-button, .woocommerce .cart input.button, .woocommerce .shop_table th, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a:after, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page button, .woocommerce-page input.button, .woocommerce-page input[type=button], .woocommerce-page input[type=submit]:hover, .woocommerce-page #respond input#submit, .woocommerce-page a.button.alt, .woocommerce-page button.button.alt, .woocommerce-page input.button.alt, .woocommerce-page #respond input#submit.alt, .woocommerce-page .product .summary .add_to_wishlist, .woocommerce-page .wishlist_table .add_to_cart.button, .woocommerce-page .yith-wcwl-add-button a.add_to_wishlist, .woocommerce-page .yith-wcwl-popup-button a.add_to_wishlist, .woocommerce-page .wishlist_table a.ask-an-estimate-button, .woocommerce-page .wishlist-title a.show-title-form, .woocommerce-page .hidden-title-form a.hide-title-form, .woocommerce-page .yith-wcwl-wishlist-new button, .woocommerce-page .wishlist_manage_table a.create-new-wishlist, .woocommerce-page .wishlist_manage_table button.submit-wishlist-changes, .woocommerce-page .yith-wcwl-wishlist-search-form button.wishlist-search-button, .woocommerce-page .cart input.button, .woocommerce-page .shop_table th, .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a:after, .woocommerce ul.products li.product .featured-tag, .woocommerce ul.products li.product:hover .featured-tag, .woocommerce.single-product .featured-tag, .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content, .woocommerce ul.products li.product .default .product-buttons-wrapper .wc_inline_buttons > .wc_btn_inline a:hover, .woocommerce .view-mode a:hover, .woocommerce .view-mode a.active, .swiper-button-prev, .swiper-button-next, .woocommerce ul.products li.product .default .product-buttons-wrapper a.added_to_cart.wc-forward, .dt-carousel-navigation a, .woocommerce ul.products li.product .style-2 .product-buttons-wrapper a.added_to_cart, .woocommerce ul.products li.product .style-2 .product-thumb .yith-wcwl-wishlistexistsbrowse a, .woocommerce ul.products li.product .style-3 .product-buttons-wrapper a.added_to_cart, .woocommerce ul.products li.product .style-3 .product-thumb .yith-wcwl-wishlistexistsbrowse a, .woocommerce ul.products li.product .woo-type22 .product-thumb .onsale, .woocommerce span.onsale, .woocommerce ul.products li.product .woo-type22:hover .product-buttons-wrapper .wc_inline_buttons > .wc_btn_inline a', 'property' => 'background-color' ),

			# Primary Border Color - WooCommerce Defaults
			array( 'element' => '.woocommerce ul.products li.product .featured-tag:after, .woocommerce ul.products li.product:hover .featured-tag:after, .woocommerce.single-product .featured-tag:after', 'property' => 'border-color' ),
			
			# Primary Border Color - WooCommerce Defaults
			array( 'element' => '.swiper-pagination-bullets .swiper-pagination-bullet-active, .swiper-pagination.swiper-pagination-progress .swiper-pagination-progressbar', 'property' => 'background' ),

			# Primary Color - WooCommerce Defaults
			array( 'element' => '.woocommerce-checkout #payment ul.payment_methods li a:hover, .woocommerce ul.products li.product .default .product-details .product-price .price, .woocommerce .default span.price del .amount, .woocommerce .default .product-price del .amount, .woocommerce ul.products li.product .woo-type22 .product-wrapper:hover a, .woocommerce ul.products li.product .woo-type22:hover .product-details .price .amount', 'property' => 'color' ),


			# Primary BG Color - Woo Type1/Fashion Theme
			array( 'element' => 'ul.products li.product .woo-type1 .product-thumb a.add_to_cart_button:hover, ul.products li.product .woo-type1 .product-thumb a.button.product_type_simple:hover, ul.products li.product .woo-type1 .product-thumb a.button.product_type_variable:hover, ul.products li.product .woo-type1 .product-thumb a.added_to_cart.wc-forward:hover, ul.products li.product .woo-type1 .product-thumb a.add_to_wishlist:hover, ul.products li.product .woo-type1 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover, ul.products li.product .woo-type1 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover, ul.products li.product .woo-type1 .product-buttons-wrapper a.yith-wcqv-button:hover, ul.products li.product .woo-type1 .product-buttons-wrapper a.yith-woocompare-button:hover, ul.products li.product .woo-type1 .product-buttons-wrapper a.product_type_external:hover, ul.products li.product .woo-type1 .product-buttons-wrapper a.button.product_type_grouped:hover', 'property' => 'background-color' ),

			# Primary Color - Woo Type1/Fashion Theme
			array( 'element' => '.woo-type1 ul.products li.product-category:hover .product-details h5, .woo-type1 ul.products li.product-category:hover .product-details h5 .count, ul.products li.product .woo-type1 .product-details .product-price .amount, ul.products li.product .woo-type1 .product-details span.price, ul.products li.product .woo-type1 .product-details span.price del, ul.products li.product .woo-type1 .product-details span.price del .amount, ul.products li.product .woo-type1 .product-details span.price ins, ul.products li.product .woo-type1 .product-details span.price ins .amount, .woo-type1.woocommerce.single-product .product .summary .product_meta a:hover, .woo-type1.woocommerce div.product .woocommerce-tabs ul.tabs li.active a', 'property' => 'color' ),


			# Primary BG Color - Woo Type4/Hosting Theme
			array( 'element' => 'ul.products li.product .woo-type4 .product-thumb a.add_to_cart_button:after, ul.products li.product .woo-type4 .product-thumb a.button.product_type_simple:after, ul.products li.product .woo-type4 .product-thumb a.button.product_type_variable:after, ul.products li.product .woo-type4 .product-thumb a.added_to_cart.wc-forward:after, ul.products li.product .woo-type4 .product-thumb a.add_to_wishlist:after, ul.products li.product .woo-type4 .product-thumb .yith-wcwl-wishlistaddedbrowse a:after, ul.products li.product .woo-type4 .product-thumb .yith-wcwl-wishlistexistsbrowse a:after, ul.products li.product .woo-type4 .product-buttons-wrapper a.yith-wcqv-button:after, ul.products li.product .woo-type4 .product-buttons-wrapper a.yith-woocompare-button:after, ul.products li.product .woo-type4 .product-buttons-wrapper a.product_type_external:after, ul.products li.product .woo-type4 .product-buttons-wrapper a.button.product_type_grouped:after, ul.products li.product .woo-type4 .product-details h5:after', 'property' => 'background-color' ),

			# Primary Color - Woo Type4/Hosting Theme
			array( 'element' => 'ul.products li.product-category:hover .woo-type4 .product-details h5, ul.products li.product-category:hover .woo-type4 .product-details h5 .count', 'property' => 'color' ),


			# Primary BG Color - Woo Type8/Insurance Theme
			array( 'element' => 'ul.products li.product .woo-type8 .product-details, ul.products li.product:hover .woo-type8 .product-details h5:before', 'property' => 'background-color' ),

			# Primary Color - Woo Type8/Insurance Theme
			array( 'element' => 'ul.products li.product .woo-type8 .product-thumb a.add_to_cart_button:hover:before, ul.products li.product .woo-type8 .product-thumb a.button.product_type_simple:hover:before, ul.products li.product .woo-type8 .product-thumb a.button.product_type_variable:hover:before, ul.products li.product .woo-type8 .product-thumb a.added_to_cart.wc-forward:hover:before, ul.products li.product .woo-type8 .product-thumb a.add_to_wishlist:hover:before, ul.products li.product .woo-type8 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover:before, ul.products li.product .woo-type8 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover:before, ul.products li.product .woo-type8 .product-buttons-wrapper a.yith-wcqv-button:hover:before, ul.products li.product .woo-type8 .product-buttons-wrapper a.yith-woocompare-button:hover:before, ul.products li.product .woo-type8 .product-buttons-wrapper a.product_type_external:hover:before, ul.products li.product .woo-type8 .product-buttons-wrapper a.button.product_type_grouped:hover:before, ul.products li.product:hover .woo-type8 .product-details h5 a:hover', 'property' => 'color' ),

			# Primary BG Color - Woo Type10/Medical Theme
			array( 'element' => 'ul.products li.product .woo-type10 .product-thumb a.add_to_cart_button, ul.products li.product .woo-type10 .product-thumb a.button.product_type_simple, ul.products li.product .woo-type10 .product-thumb a.button.product_type_variable, ul.products li.product .woo-type10 .product-thumb a.added_to_cart.wc-forward, ul.products li.product .woo-type10 .product-thumb a.add_to_wishlist, ul.products li.product .woo-type10 .product-thumb .yith-wcwl-wishlistaddedbrowse a, ul.products li.product .woo-type10 .product-thumb .yith-wcwl-wishlistexistsbrowse a, ul.products li.product .woo-type10 .product-thumb .yith-wcwl-wishlistexistsbrowse a, ul.products li.product .woo-type10 .product-buttons-wrapper a.yith-wcqv-button, ul.products li.product .woo-type10 .product-buttons-wrapper a.product_type_external, ul.products li.product .woo-type10 .product-buttons-wrapper a.button.product_type_grouped, ul.products li.product:hover .woo-type10 .product-details', 'property' => 'background-color' ),

			# Primary Border Color - Woo Type10/Medical Theme
			array( 'element' => 'ul.products li.product:hover .woo-type10 .product-wrapper', 'property' => 'border-color' ),
				
			# Primary Border Bottom Color - Woo Type10/Medical Theme
			array( 'element' => 'ul.products li.product:hover .woo-type10 .product-details:before, ul.products li.product:hover .woo-type10 .product-details:after', 'property' => 'border-bottom-color' ),


			# Primary BG Color - Woo Type11/Model Theme
			array( 'element' => 'ul.products li.product .woo-type11 .product-thumb a.add_to_cart_button:hover, ul.products li.product .woo-type11 .product-thumb a.button.product_type_simple:hover, ul.products li.product .woo-type11 .product-thumb a.button.product_type_variable:hover, ul.products li.product .woo-type11 .product-thumb a.added_to_cart.wc-forward:hover, ul.products li.product .woo-type11 .product-thumb a.add_to_wishlist:hover, ul.products li.product .woo-type11 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover, ul.products li.product .woo-type11 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover, ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-wcqv-button:hover, ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-woocompare-button:hover, ul.products li.product .woo-type11 .product-buttons-wrapper a.product_type_external:hover, ul.products li.product .woo-type11 .product-buttons-wrapper a.button.product_type_grouped:hover, 

				.woocommerce .woo-type11 div.product .woocommerce-tabs ul.tabs li.active a:after, ul.products li.product .woo-type11 .product-details', 'property' => 'background-color' ),

			# Primary Color - Woo Type11/Model Theme
			array( 'element' => 'ul.products li.product .woo-type11 .product-thumb a.add_to_cart_button:before, ul.products li.product .woo-type11 .product-thumb a.button.product_type_simple:before, ul.products li.product .woo-type11 .product-thumb a.button.product_type_variable:before, ul.products li.product .woo-type11 .product-thumb a.added_to_cart.wc-forward:before, ul.products li.product .woo-type11 .product-thumb a.add_to_wishlist:before, ul.products li.product .woo-type11 .product-thumb .yith-wcwl-wishlistaddedbrowse a:before, ul.products li.product .woo-type11 .product-thumb .yith-wcwl-wishlistexistsbrowse a:before, ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-wcqv-button:before, ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-woocompare-button:before, ul.products li.product .woo-type11 .product-buttons-wrapper a.product_type_external:before, ul.products li.product .woo-type11 .product-buttons-wrapper a.button.product_type_grouped:before', 'property' => 'color' ),
			
			# Primary Border Color - Woo Type11/Model Theme
			array( 'element' => 'ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-wcqv-button:hover, ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-woocompare-button:hover', 'property' => 'border-color' ),

			# Primary BG Color - Woo Type12/Attorney Theme
			array( 'element' => 'ul.products li.product .woo-type12 .product-thumb a.add_to_cart_button, ul.products li.product .woo-type12 .product-thumb a.button.product_type_simple, ul.products li.product .woo-type12 .product-thumb a.button.product_type_variable, ul.products li.product .woo-type12 .product-thumb a.added_to_cart.wc-forward, ul.products li.product .woo-type12 .product-thumb a.add_to_wishlist, ul.products li.product .woo-type12 .product-thumb .yith-wcwl-wishlistaddedbrowse a, ul.products li.product .woo-type12 .product-thumb .yith-wcwl-wishlistexistsbrowse a, ul.products li.product .woo-type12 .product-buttons-wrapper a.yith-wcqv-button, ul.products li.product .woo-type12 .product-buttons-wrapper a.yith-woocompare-button, ul.products li.product .woo-type12 .product-buttons-wrapper a.product_type_external, ul.products li.product .woo-type12 .product-buttons-wrapper a.button.product_type_grouped, 

				ul.products li.product:hover .woo-type12 .product-details, ul.products li.product .woo-type12 .product-details h5:after', 'property' => 'background-color' ),


			# Primary BG Color - Woo Type13/Architecture Theme
			array( 'element' => 'ul.products li.product .woo-type13 .product-details h5:before', 'property' => 'background-color' ),

			# Primary Color - Woo Type13/Architecture Theme
			array( 'element' => 'ul.products li.product .woo-type13 .product-thumb a.add_to_cart_button:hover:before, ul.products li.product .woo-type13 .product-thumb a.button.product_type_simple:hover:before, ul.products li.product .woo-type13 .product-thumb a.button.product_type_variable:hover:before, ul.products li.product .woo-type13 .product-thumb a.added_to_cart.wc-forward:hover:before, ul.products li.product .woo-type13 .product-thumb a.add_to_wishlist:hover:before, ul.products li.product .woo-type13 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover:before, ul.products li.product .woo-type13 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover:before, ul.products li.product .woo-type13 .product-buttons-wrapper a.yith-wcqv-button:hover:before, ul.products li.product .woo-type13 .product-buttons-wrapper a.yith-woocompare-button:hover:before, ul.products li.product .woo-type13 .product-buttons-wrapper a.product_type_external:hover:before, ul.products li.product .woo-type13 .product-buttons-wrapper a.button.product_type_grouped:hover:before, ul.products li.product:hover .woo-type13 .product-details h5 a', 'property' => 'color' ),


			# Primary BG Color - Woo Type14/Fitness Zone Theme
			array( 'element' => 'ul.products li.product:hover .woo-type14 .product-details, ul.products li.product .woo-type14 .product-details h5:before, ul.products li.product:hover .woo-type14 .product-details h5:after', 'property' => 'background-color' ),

			# Primary Border Color - Woo Type14/Fitness Zone Theme
			array( 'element' => 'ul.products li.product:hover .woo-type14 .product-details h5:after', 'property' => 'border-color' ),

			# Primary BG Color - Woo Type16/Photography Theme
			array( 'element' => 'ul.products li.product .woo-type16 .product-wrapper:before, 

				ul.products li.product .woo-type16 .product-thumb a.add_to_cart_button:hover, ul.products li.product .woo-type16 .product-thumb a.button.product_type_simple:hover, ul.products li.product .woo-type16 .product-thumb a.button.product_type_variable:hover, ul.products li.product .woo-type16 .product-thumb a.added_to_cart.wc-forward:hover, ul.products li.product .woo-type16 .product-thumb a.add_to_wishlist:hover, ul.products li.product .woo-type16 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover, ul.products li.product .woo-type16 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover, ul.products li.product .woo-type16 .product-buttons-wrapper a.yith-wcqv-button:hover:hover, ul.products li.product .woo-type16 .product-buttons-wrapper a.yith-woocompare-button:hover:hover, ul.products li.product .woo-type16 .product-buttons-wrapper a.product_type_external:hover, ul.products li.product .woo-type16 .product-buttons-wrapper a.button.product_type_grouped:hover,

			 .woo-type16.woocommerce .shop_table th, .woo-type16 .woocommerce .shop_table th, .woo-type16.woocommerce div.product .woocommerce-tabs ul.tabs li.active a:after', 'property' => 'background-color' ),


			# Primary BG Color - Woo Type17/Restaurant Theme
			array( 'element' => 'ul.products li.product .woo-type17 .product-thumb a.add_to_cart_button:hover:after, ul.products li.product .woo-type17 .product-thumb a.button.product_type_simple:hover:after, ul.products li.product .woo-type17 .product-thumb a.button.product_type_variable:hover:after, ul.products li.product .woo-type17 .product-thumb a.added_to_cart.wc-forward:hover:after, ul.products li.product .woo-type17 .product-thumb a.add_to_wishlist:hover:after, ul.products li.product .woo-type17 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover:after, ul.products li.product .woo-type17 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover:after, ul.products li.product .woo-type17 .product-buttons-wrapper a.yith-wcqv-button:hover:after, ul.products li.product .woo-type17 .product-buttons-wrapper a.yith-woocompare-button:hover:after, ul.products li.product .woo-type17 .product-buttons-wrapper a.product_type_external:hover:after, ul.products li.product .woo-type17 .product-buttons-wrapper a.button.product_type_grouped:hover:after, ul.products li.product:hover .woo-type17 .product-details', 'property' => 'background-color' ),

			# Primary Border Color - Woo Type17/Restaurant Theme
			array( 'element' => 'ul.products li.product:hover .woo-type17 .product-wrapper, ul.products li.product .woo-type17 .product-details h5 a:after, ul.products li.product-category .woo-type17 .product-details h5:after, ul.products li.product .woo-type17 .price,

				ul.products li.product:hover .woo-type17 .product-thumb a.add_to_cart_button:after, ul.products li.product:hover .woo-type17 .product-thumb a.button.product_type_simple:after, ul.products li.product:hover .woo-type17 .product-thumb a.button.product_type_variable:after, ul.products li.product:hover .woo-type17 .product-thumb a.added_to_cart.wc-forward:after, ul.products li.product:hover .woo-type17 .product-thumb a.add_to_wishlist:after, ul.products li.product:hover .woo-type17 .product-thumb .yith-wcwl-wishlistaddedbrowse a:after, ul.products li.product:hover .woo-type17 .product-thumb .yith-wcwl-wishlistexistsbrowse a:after, ul.products li.product:hover .woo-type17 .product-buttons-wrapper a.yith-wcqv-button:after, ul.products li.product:hover .woo-type17 .product-buttons-wrapper a.yith-woocompare-button:after, ul.products li.product:hover .woo-type17 .product-buttons-wrapper a.product_type_external:after, ul.products li.product:hover .woo-type17 .product-buttons-wrapper a.button.product_type_grouped:after', 'property' => 'border-color' ),

			# Primary Color - Woo Type17/Restaurant Theme
			array( 'element' => 'ul.products li.product .woo-type17 .product-thumb a.add_to_cart_button, ul.products li.product .woo-type17 .product-thumb a.button.product_type_simple, ul.products li.product .woo-type17 .product-thumb a.button.product_type_variable, ul.products li.product .woo-type17 .product-thumb a.added_to_cart.wc-forward, ul.products li.product .woo-type17 .product-thumb a.add_to_wishlist, ul.products li.product .woo-type17 .product-thumb .yith-wcwl-wishlistaddedbrowse a, ul.products li.product .woo-type17 .product-thumb .yith-wcwl-wishlistexistsbrowse a, ul.products li.product .woo-type17 .product-buttons-wrapper a.yith-wcqv-button, ul.products li.product .woo-type17 .product-buttons-wrapper a.yith-woocompare-button, ul.products li.product .woo-type17 .product-buttons-wrapper a.product_type_external, ul.products li.product .woo-type17 .product-buttons-wrapper a.button.product_type_grouped, 

				ul.products li.product .woo-type17 .product-thumb a.add_to_cart_button:before, ul.products li.product .woo-type17 .product-thumb a.button.product_type_simple:before, ul.products li.product .woo-type17 .product-thumb a.button.product_type_variable:before, ul.products li.product .woo-type17 .product-thumb a.added_to_cart.wc-forward:before, ul.products li.product .woo-type17 .product-thumb a.add_to_wishlist:before, ul.products li.product .woo-type17 .product-thumb .yith-wcwl-wishlistaddedbrowse a:before, ul.products li.product .woo-type17 .product-thumb .yith-wcwl-wishlistexistsbrowse a:before, ul.products li.product .woo-type17 .product-buttons-wrapper a.yith-wcqv-button:before, ul.products li.product .woo-type17 .product-buttons-wrapper a.yith-woocompare-button:before, ul.products li.product .woo-type17 .product-buttons-wrapper a.product_type_external:before, ul.products li.product .woo-type17 .product-buttons-wrapper a.button.product_type_grouped:before, 

				ul.products li.product .woo-type17 .product-details h5 a, ul.products li.product-category .woo-type17 .product-details h5, ul.products li.product-category .woo-type17 .product-details h5 .count, ul.products li.product .woo-type17 .product-details .product-price .amount, ul.products li.product .woo-type17 .product-details span.price, ul.products li.product .woo-type17 .product-details span.price del, ul.products li.product .woo-type17 .product-details span.price del .amount, ul.products li.product .woo-type17 .product-details span.price ins, ul.products li.product .woo-type17 .product-details span.price ins .amount, .woo-type17 .widget.woocommerce ul li:hover:before', 'property' => 'color' ),

			# Primary Border Color - Woo Type20/Yoga Theme
			array( 'element' => 'ul.products li.product .woo-type20 .product-thumb a.add_to_cart_button, ul.products li.product .woo-type20 .product-thumb a.button.product_type_simple, ul.products li.product .woo-type20 .product-thumb a.button.product_type_variable, ul.products li.product .woo-type20 .product-thumb a.added_to_cart.wc-forward, ul.products li.product .woo-type20 .product-thumb a.add_to_wishlist, ul.products li.product .woo-type20 .product-thumb .yith-wcwl-wishlistaddedbrowse a, ul.products li.product .woo-type20 .product-thumb .yith-wcwl-wishlistexistsbrowse a, ul.products li.product .woo-type20 .product-buttons-wrapper a.yith-wcqv-button, ul.products li.product .woo-type20 .product-buttons-wrapper a.yith-woocompare-button, ul.products li.product .woo-type20 .product-buttons-wrapper a.product_type_external, ul.products li.product .woo-type20 .product-buttons-wrapper a.button.product_type_grouped, 

				ul.products li.product .woo-type20 .product-wrapper:after, .woo-type20.woocommerce ul.products li.product .product-details h5, ul.products li.product .woo-type20 .product-details h5, ul.products li.product-category .woo-type20 .product-wrapper h3', 'property' => 'border-color' ),

			# Primary Color - Woo Type20/Yoga Theme
			array( 'element' => 'ul.products li.product .woo-type20 .product-thumb a.add_to_cart_button:before, ul.products li.product .woo-type20 .product-thumb a.button.product_type_simple:before, ul.products li.product .woo-type20 .product-thumb a.button.product_type_variable:before, ul.products li.product .woo-type20 .product-thumb a.added_to_cart.wc-forward:before, ul.products li.product .woo-type20 .product-thumb a.add_to_wishlist:before, ul.products li.product .woo-type20 .product-thumb .yith-wcwl-wishlistaddedbrowse a:before, ul.products li.product .woo-type20 .product-thumb .yith-wcwl-wishlistexistsbrowse a:before, ul.products li.product .woo-type20 .product-buttons-wrapper a.yith-wcqv-button:before, ul.products li.product .woo-type20 .product-buttons-wrapper a.yith-woocompare-button:before, ul.products li.product .woo-type20 .product-buttons-wrapper a.product_type_external:before, ul.products li.product .woo-type20 .product-buttons-wrapper a.button.product_type_grouped:before, 

				ul.products li.product .woo-type20 .product-details h5 a, ul.products li.product-category  .woo-type20 .product-details h5, ul.products li.product-category  .woo-type20 .product-details h5 .count, ul.products li.product .woo-type20 .product-details .product-price .amount, ul.products li.product .woo-type20 .product-details span.price, ul.products li.product .woo-type20 .product-details span.price del, ul.products li.product .woo-type20 .product-details span.price del .amount, ul.products li.product .woo-type20 .product-details span.price ins, ul.products li.product .woo-type20 .product-details span.price ins .amount, ul.products li.product .woo-type20 .product-details .product-rating-wrapper .star-rating:before, ul.products li.product .woo-type20 .product-details .product-rating-wrapper .star-rating span:before', 'property' => 'color' ),


			# Primary BG Color - Woo Type21/StyleShop Theme
			array( 'element' => '
				 ul.products li.product .woo-type21 .product-thumb a.added_to_cart.wc-forward:hover,  ul.products li.product .woo-type21 .product-buttons-wrapper a.product_type_external:hover, ul.products li.product .woo-type21 .product-buttons-wrapper a.button.product_type_grouped:hover, 

				.woo-type21 .woocommerce a.button:hover, .woo-type21 .woocommerce button.button:hover, .woo-type21 .woocommerce button:hover, .woo-type21 .woocommerce input.button:hover, .woo-type21 .woocommerce input[type=button]:hover, .woo-type21 .woocommerce input[type=submit]:hover, .woo-type21 .woocommerce #respond input#submit:hover, .woo-type21 .woocommerce a.button.alt:hover, .woo-type21 .woocommerce button.button.alt:hover, .woo-type21 .woocommerce input.button.alt:hover, .woo-type21 .woocommerce #respond input#submit.alt:hover, .woo-type21 .woocommerce .product .summary .add_to_wishlist:hover, .woo-type21 .woocommerce .wishlist_table .add_to_cart.button:hover, .woo-type21 .woocommerce .yith-wcwl-add-button a.add_to_wishlist:hover, .woo-type21 .woocommerce .yith-wcwl-popup-button a.add_to_wishlist:hover, .woo-type21 .woocommerce .wishlist_table a.ask-an-estimate-button:hover, .woo-type21 .woocommerce .wishlist-title a.show-title-form:hover, .woo-type21 .woocommerce .hidden-title-form a.hide-title-form:hover, .woo-type21 .woocommerce .yith-wcwl-wishlist-new button:hover, .woo-type21 .woocommerce .wishlist_manage_table a.create-new-wishlist:hover, .woo-type21 .woocommerce .wishlist_manage_table button.submit-wishlist-changes:hover, .woo-type21 .woocommerce .yith-wcwl-wishlist-search-form button.wishlist-search-button:hover, .woo-type21 .woocommerce .cart input.button:hover, 

				.woo-type21.woocommerce a.button:hover, .woo-type21.woocommerce button.button:hover, .woo-type21.woocommerce button:hover, .woo-type21.woocommerce input.button:hover, .woo-type21.woocommerce input[type=button]:hover, .woo-type21.woocommerce input[type=submit]:hover, .woo-type21.woocommerce #respond input#submit:hover, .woo-type21.woocommerce a.button.alt:hover, .woo-type21.woocommerce button.button.alt:hover, .woo-type21.woocommerce input.button.alt:hover, .woo-type21.woocommerce #respond input#submit.alt:hover, .woo-type21.woocommerce .product .summary .add_to_wishlist:hover, .woo-type21.woocommerce .wishlist_table .add_to_cart.button:hover, .woo-type21.woocommerce .yith-wcwl-add-button a.add_to_wishlist:hover, .woo-type21.woocommerce .yith-wcwl-popup-button a.add_to_wishlist:hover, .woo-type21.woocommerce .wishlist_table a.ask-an-estimate-button:hover, .woo-type21.woocommerce .wishlist-title a.show-title-form:hover, .woo-type21.woocommerce .hidden-title-form a.hide-title-form:hover, .woo-type21.woocommerce .yith-wcwl-wishlist-new button:hover, .woo-type21.woocommerce .wishlist_manage_table a.create-new-wishlist:hover, .woo-type21.woocommerce .wishlist_manage_table button.submit-wishlist-changes:hover, .woo-type21.woocommerce .yith-wcwl-wishlist-search-form button.wishlist-search-button:hover, .woo-type21.woocommerce .cart input.button:hover,
				.woocommerce ul.products li.product .product-buttons-wrapper .wc_inline_buttons > .wc_btn_inline:nth-child(1):nth-last-child(2) a, .woocommerce ul.products li.product .product-buttons-wrapper .wc_inline_buttons > .wc_btn_inline:nth-child(2):nth-last-child(1) a,

				.woo-type21 .woocommerce .product .summary .add_to_wishlist:hover:before, .woo-type21.woocommerce .product .summary .add_to_wishlist:hover:before ', 'property' => 'background-color' ),

				array( 'element' => 'ul.products li.product .woo-type21 .onsale', 'property' => 'border-top-color' ),


			# Primary Color - Woo Type21/StyleShop Theme
			array( 'element' => '.woo-type21 .woocommerce .product .summary .add_to_wishlist:hover, .woo-type21.woocommerce .product .summary .add_to_wishlist:hover, .woocommerce ul.products li.product .woo-type21 .product-thumb a.add_to_cart_button:hover::before, .woocommerce ul.products li.product .woo-type21 .product-thumb a.button.product_type_simple:hover::before, .woocommerce ul.products li.product .woo-type21 .product-thumb a.add_to_wishlist:hover::before, .woocommerce ul.products li.product .woo-type21 .product-buttons-wrapper .wc_inline_buttons > .wc_btn_inline:nth-child(2):nth-last-child(1) a:hover:before, .woocommerce ul.products li.product .woo-type21 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover, .woo-type21 .woocommerce.single-product div.product .product-thumb-wrapper .add_to_wishlist:hover:before, .woocommerce ul.products li.product .woo-type21 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover::before, .woocommerce ul.products li.product .woo-type21 .product-thumb a.added_to_cart.wc-forward:hover::before, .woocommerce ul.products li.product .woo-type21 .product-buttons-wrapper a.button.product_type_variable:hover:before', 'property' => 'color' ),

			# Primary Color - Cookie and Privacy Settings
			array( 'element' => '.dt-inline-modal > h4', 'property' => 'background-color' ),
			

		)
	));

	# secondary-color
	FITNESSZONE_Kirki::add_field( $config, array(
		'type' => 'color',
		'settings' => 'secondary-color',
		'label'    => esc_html__( 'Secondary Color', 'fitnesszone' ),
		'section'  => 'dt_site_skin_section',
		'priority' => 4,
		'choices' => array( 'alpha' => true ),
		'default'  => fitnesszone_defaults('secondary-color'),
		'active_callback' => array(
			array( 'setting' => 'use-predefined-skin', 'operator' => '==', 'value' => '0' )
		),
		'output' => array(

			array( 'element' => '.has-secondary-background-color', 'property' => 'background-color' ),
			array( 'element' => '.has-secondary-color', 'property' => 'color' ),

			# Secondary Color - Miscellaneous/Shortcodes
			array( 'element' => '
				.dt-skin-secondary-color', 'property' => 'color' ),

			# Secondary BG Color - Miscellaneous/Shortcodes
			array( 'element' => '
				.dt-skin-secondary-bg, div[class*="dt-skin-secondary-bg-opaque"]:not(.ult-vc-hide-row):before, div[class*="dt-skin-secondary-bg-opaque"] .upb_row_bg:before, section[class*="dt-skin-secondary-bg-opaque"]:before, .dt-skin-secondary-bg.extend-bg-fullwidth-left:after, .dt-skin-secondary-bg.extend-bg-fullwidth-right:after, input[type="submit"]:hover, button:hover, input[type="reset"]:hover, .mz-blog .comments a:hover, .mz-blog div.vc_gitem-post-category-name:hover,  .dt-sc-infinite-gallery-load-more:hover, .dt-sc-button.filled:hover, .dt-sc-button.with-icon.icon-right.type1:hover, .dt-sc-counter.type2:hover .dt-sc-couter-icon-holder, .dt-sc-newsletter-section.type2 .dt-sc-subscribe-frm input[type="submit"]:hover, .skin-highlight .dt-sc-testimonial.type6 .dt-sc-testimonial-author:before, .skin-highlight .dt-sc-testimonial.type6:after, .dt-sc-team-social.rounded-square li a:hover, .dt-sc-video-wrapper .video-overlay-inner a:hover, .side-navigation.type2 ul.side-nav li a:before, .side-navigation.type2 ul.side-nav > li.current_page_item > a:before, .side-navigation.type2 ul.side-nav > li > ul > li.current_page_item > a:before, .side-navigation.type2 ul.side-nav > li > ul > li > ul > li.current_page_item > a:before, .blog-entry.post-standard .entry-meta p.category a, .blog-entry.post-standard .entry-meta-data p a, .post-nav-container a:hover, #buddypress .activity-list li.load-more a:hover, .buddypress .buddypress-wrap input[type="submit"]:hover, #buddypress div.pagination .pagination-links a.page-numbers:hover', 'property' => 'background-color' ),

			# Secondary Border Color - Miscellaneous/Shortcodes
			array( 'element' => '.dt-skin-secondary-border, .dt-sc-contact-info.type5 .dt-sc-contact-icon, .dt-sc-contact-info.type5 .dt-sc-contact-icon:before, .dt-sc-contact-info.type5 .dt-sc-contact-icon:after, .dt-sc-image-caption.type2:hover .dt-sc-image-title, .dt-sc-sociable.hexagon-with-border li, .dt-sc-sociable.hexagon-with-border li:before, .dt-sc-sociable.hexagon-with-border li:after, .side-navigation.type5 ul.side-nav, .side-navigation.type5 ul.side-nav li a, .side-navigation.type5 ul.side-nav li ul', 'property' => 'border-color' ),	


			# Secondary BG Color - 404/Not-Found
			array( 'element' => '.error404 .type2 a.dt-sc-back:hover, .error404 .type4 .dt-sc-newsletter-section input[type="submit"]:hover', 'property' => 'background-color' ),


			# Secondary BG Color - BuddyPress
			array( 'element' => '#item-header-content #item-meta > #item-buttons .group-button:hover, #buddypress .activity-list li.load-more a:hover, #buddypress .activity-list li.load-newest a:hover', 'property' => 'background-color' ),

			# Secondary BG Color - BbPress
			array( 'element' => '#bbpress-forums #subscription-toggle a.subscription-toggle:hover, .bbp-submit-wrapper #bbp_topic_submit:hover', 'property' => 'background-color' ),

			# Secondary BG Color - Events
			array( 'element' => '#tribe-bar-form .tribe-bar-submit input[type="submit"]:hover, .tribe-events-read-more:hover, #tribe-events .tribe-events-button:hover, .tribe-events-button:hover, .tribe-events-back > a:hover, .datepicker thead tr:first-child th:hover, .datepicker tfoot tr th:hover, #tribe_events_filters_toggle:hover', 'property' => 'background-color' ),

			# Secondary BG Color - Events Pro
			array( 'element' => '.tribe-grid-header .tribe-week-today', 'property' => 'background-color' ),
			

			# Secondary BG Color - WooCommerce Defaults
			array( 'element' => '.woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce button:hover, .woocommerce input.button:hover, .woocommerce input[type=button]:hover, .woocommerce input[type=submit]:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce .product .summary .add_to_wishlist:hover, .woocommerce .wishlist_table .add_to_cart.button:hover, .woocommerce .yith-wcwl-add-button a.add_to_wishlist:hover, .woocommerce .yith-wcwl-popup-button a.add_to_wishlist:hover, .woocommerce .wishlist_table a.ask-an-estimate-button:hover, .woocommerce .wishlist-title a.show-title-form:hover, .woocommerce .hidden-title-form a.hide-title-form:hover, .woocommerce .yith-wcwl-wishlist-new button:hover, .woocommerce .wishlist_manage_table a.create-new-wishlist:hover, .woocommerce .wishlist_manage_table button.submit-wishlist-changes:hover, .woocommerce .yith-wcwl-wishlist-search-form button.wishlist-search-button:hover, .woocommerce .cart input.button:hover, .woocommerce-page a.button:hover, .woocommerce-page button.button:hover, .woocommerce-page button:hover, .woocommerce-page input.button:hover, .woocommerce-page input[type=button]:hover, .woocommerce-page input[type=submit]:hover, .woocommerce-page #respond input#submit:hover, .woocommerce-page a.button.alt:hover, .woocommerce-page button.button.alt:hover, .woocommerce-page input.button.alt:hover, .woocommerce-page #respond input#submit.alt:hover, .woocommerce-page .product .summary .add_to_wishlist:hover, .woocommerce-page .wishlist_table .add_to_cart.button:hover, .woocommerce-page .yith-wcwl-add-button a.add_to_wishlist:hover, .woocommerce-page .yith-wcwl-popup-button a.add_to_wishlist:hover, .woocommerce-page .wishlist_table a.ask-an-estimate-button:hover, .woocommerce-page .wishlist-title a.show-title-form:hover, .woocommerce-page .hidden-title-form a.hide-title-form:hover, .woocommerce-page .yith-wcwl-wishlist-new button:hover, .woocommerce-page .wishlist_manage_table a.create-new-wishlist:hover, .woocommerce-page .wishlist_manage_table button.submit-wishlist-changes:hover, .woocommerce-page .yith-wcwl-wishlist-search-form button.wishlist-search-button:hover, .woocommerce-page .cart input.button:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt[disabled]:disabled, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt[disabled]:disabled, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt[disabled]:disabled, .woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt[disabled]:disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt[disabled]:disabled:hover, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt[disabled]:disabled:hover, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt[disabled]:disabled:hover, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt[disabled]:disabled:hover, .woocommerce a.button.disabled:hover, .woocommerce a.button:disabled:hover, .woocommerce a.button:disabled[disabled]:hover, .woocommerce button.button.disabled:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce input.button.disabled:hover, .woocommerce input.button:disabled:hover, .woocommerce input.button:disabled[disabled]:hover, .woocommerce #respond input#submit.disabled:hover, .woocommerce #respond input#submit:disabled:hover, .woocommerce #respond input#submit:disabled[disabled]:hover', 'property' => 'background-color' ),

			# Secondary BG Color - Woo Type4/Hosting Theme
			array( 'element' => 'ul.products li.product .woo-type4 .product-thumb a.add_to_cart_button:hover:after, ul.products li.product .woo-type4 .product-thumb a.button.product_type_simple:hover:after, ul.products li.product .woo-type4 .product-thumb a.button.product_type_variable:hover:after, ul.products li.product .woo-type4 .product-thumb a.added_to_cart.wc-forward:hover:after, ul.products li.product .woo-type4 .product-thumb a.add_to_wishlist:hover:after, ul.products li.product .woo-type4 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover:after, ul.products li.product .woo-type4 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover:after, ul.products li.product .woo-type4 .product-buttons-wrapper a.yith-wcqv-button:hover:after, ul.products li.product .woo-type4 .product-buttons-wrapper a.yith-woocompare-button:hover:after, ul.products li.product .woo-type4 .product-buttons-wrapper a.product_type_external:hover:after, ul.products li.product .woo-type4 .product-buttons-wrapper a.button.product_type_grouped:hover:after', 'property' => 'background-color' ),
			
			# Secondary Border Color - Woo Type8/Insurance Theme
			array( 'element' => 'ul.products li.product:hover .woo-type8 .product-wrapper', 'property' => 'border-color' ),


			# Secondary BG Color - Woo Type10/Medical Theme
			array( 'element' => 'ul.products li.product .woo-type10 .product-thumb a.add_to_cart_button:hover, ul.products li.product .woo-type10 .product-thumb a.button.product_type_simple:hover, ul.products li.product .woo-type10 .product-thumb a.button.product_type_variable:hover, ul.products li.product .woo-type10 .product-thumb a.added_to_cart.wc-forward:hover, ul.products li.product .woo-type10 .product-thumb a.add_to_wishlist:hover, ul.products li.product .woo-type10 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover, ul.products li.product .woo-type10 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover, ul.products li.product .woo-type10 .product-buttons-wrapper a.yith-wcqv-button:hover, ul.products li.product .woo-type10 .product-buttons-wrapper a.yith-woocompare-button:hover, ul.products li.product .woo-type10 .product-buttons-wrapper a.product_type_external:hover, ul.products li.product .woo-type10 .product-buttons-wrapper a.button.product_type_grouped:hover,

				.woo-type10.woocommerce ul.products li.product .featured-tag, .woo-type10 .woocommerce ul.products li.product .featured-tag, .woo-type10.woocommerce.single-product .featured-tag', 'property' => 'background-color' ),


			# Secondary Border Color - Woo Type11/Model Theme
			array( 'element' => 'ul.products li.product .woo-type11 .product-thumb a.add_to_cart_button, ul.products li.product .woo-type11 .product-thumb a.button.product_type_simple, ul.products li.product .woo-type11 .product-thumb a.button.product_type_variable, ul.products li.product .woo-type11 .product-thumb a.added_to_cart.wc-forward, ul.products li.product .woo-type11 .product-thumb a.add_to_wishlist, ul.products li.product .woo-type11 .product-thumb .yith-wcwl-wishlistaddedbrowse a, ul.products li.product .woo-type11 .product-thumb .yith-wcwl-wishlistexistsbrowse a, ul.products li.product:hover .woo-type11 .product-wrapper:before, ul.products li.product:hover .woo-type11 .product-wrapper:after, ul.products li.product .woo-type11 .product-thumb, ul.products li.product .woo-type11 .product-thumb, ul.products li.product-category .woo-type11 a img, ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-wcqv-button, ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-woocompare-button, ul.products li.product .woo-type11 .product-buttons-wrapper a.product_type_external, ul.products li.product .woo-type11 .product-buttons-wrapper a.button.product_type_grouped', 'property' => 'border-color' ),


			# Secondary BG Color - Woo Type12/Attorney Theme
			array( 'element' => 'ul.products li.product .woo-type12 .product-thumb a.add_to_cart_button:hover, ul.products li.product .woo-type12 .product-thumb a.button.product_type_simple:hover, ul.products li.product .woo-type12 .product-thumb a.button.product_type_variable:hover, ul.products li.product .woo-type12 .product-thumb a.added_to_cart.wc-forward:hover, ul.products li.product .woo-type12 .product-thumb a.add_to_wishlist:hover, ul.products li.product .woo-type12 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover, ul.products li.product .woo-type12 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover, ul.products li.product .woo-type12 .product-buttons-wrapper a.yith-wcqv-button:hover, ul.products li.product .woo-type12 .product-buttons-wrapper a.yith-woocompare-button:hover, ul.products li.product .woo-type12 .product-buttons-wrapper a.product_type_external:hover, ul.products li.product .woo-type12 .product-buttons-wrapper a.button.product_type_grouped:hover, ul.products li.product:hover .woo-type12 .product-details h5:after', 'property' => 'background-color' ),

			# Secondary Border Color - Woo Type12/Attorney Theme
			array( 'element' => 'ul.products li.product:hover .woo-type12 .product-wrapper', 'property' => 'border-color' ),


			# Secondary BG Color - Woo Type14/Fitness Zone Theme
			array( 'element' => 'ul.products li.product .woo-type14 .product-thumb a.add_to_cart_button:hover, ul.products li.product .woo-type14 .product-thumb a.button.product_type_simple:hover, ul.products li.product .woo-type14 .product-thumb a.button.product_type_variable:hover, ul.products li.product .woo-type14 .product-thumb a.added_to_cart.wc-forward:hover, ul.products li.product .woo-type14 .product-thumb a.add_to_wishlist:hover, ul.products li.product .woo-type14 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover, ul.products li.product .woo-type14 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover, ul.products li.product .woo-type14 .product-buttons-wrapper a.yith-wcqv-button:hover, ul.products li.product .woo-type14 .product-buttons-wrapper a.yith-woocompare-button:hover, ul.products li.product .woo-type14 .product-buttons-wrapper a.product_type_external:hover, ul.products li.product .woo-type14 .product-buttons-wrapper a.button.product_type_grouped:hover', 'property' => 'background-color' ),

			# Secondary BG Color - Woo Type17/Restaurant Theme
			array( 'element' => '.woo-type17.woocommerce ul.products li.product .featured-tag, .woo-type17 .woocommerce ul.products li.product .featured-tag, .woo-type17.woocommerce.single-product .featured-tag', 'property' => 'background-color' ),
			
			# Secondary BG Color - Woo Type20/Yoga Theme
			array( 'element' => '.woo-type20.woocommerce .shop_table th, .woo-type20 .woocommerce .shop_table th, .woo-type20.woocommerce div.product .woocommerce-tabs ul.tabs li.active a:after', 'property' => 'background-color' ),

			# Secondary Border Color - Woo Type20/Yoga Theme
			array( 'element' => '.woo-type20 ul.products li.product:hover .product-wrapper:after, .woo-type20 div.product div.images img', 'property' => 'border-color' ),

			# Secondary Color - Woo Type20/Yoga Theme
			array( 'element' => '.woo-type20.woocommerce-checkout #payment ul.payment_methods li a:hover', 'property' => 'color' ),
			
			
			# Secondary BG Color 
			array( 'element' => '.header_search.simple-header-search #searchform input[type="submit"]:hover', 'property' => 'background-color' ),
			
			
			# Secondary Border Color
			array( 'element' => '.dt-sc-button, .dt-sc-sorting-container a.active-sort, .dt-sc-sorting-container a:hover, .pagination a.prev-post, .pagination a.next-post, .dt-gallery-single-slider-wrapper #bx-pager a.active:before, .post-nav-container .post-prev-link a, .post-nav-container .post-next-link a, .widget.widget_tag_cloud .tagcloud a:hover, .widget.widget_product_tag_cloud .tagcloud a:hover, input[type="submit"], button, input[type="button"], .dt-sc-callout-box.type1, .dt-sc-callout-box.type3, .pagination .prev-post a, .pagination .next-post a, #header #searchform input[type="submit"]:hover, #primary #searchform input[type="submit"]:hover, .dt-sc-gallery-sorting a.active-sort:before, .dt-sc-gallery-sorting a:hover:before', 'property' => 'border-color' ),
		),
	));

	# tertiary-color
	FITNESSZONE_Kirki::add_field( $config, array(
		'type' => 'color',
		'settings' => 'tertiary-color',
		'label'    => esc_html__( 'Tertiary Color', 'fitnesszone' ),
		'section'  => 'dt_site_skin_section',
		'priority' => 5,
		'choices' => array( 'alpha' => true ),
		'default'  => fitnesszone_defaults('tertiary-color'),
		'active_callback' => array(
			array( 'setting' => 'use-predefined-skin', 'operator' => '==', 'value' => '0' )
		),
		'output' => array(

			array( 'element' => '.has-tertiary-background-color', 'property' => 'background-color' ),
			array( 'element' => '.has-tertiary-color', 'property' => 'color' ),

			# Tertiary Color - Miscellaneous/Shortcodes
			array( 'element' => '
				.dt-skin-tertiary-color, .tribe-events-sub-nav li a:hover', 'property' => 'color' ),

			# Tertiary BG Color - Miscellaneous/Shortcodes
			array( 'element' => '.dt-skin-tertiary-bg, div[class*="dt-skin-tertiary-bg-opaque"]:not(.ult-vc-hide-row):before, div[class*="dt-skin-tertiary-bg-opaque"] .upb_row_bg:before, section[class*="dt-skin-tertiary-bg-opaque"]:before, .dt-skin-tertiary-bg.extend-bg-fullwidth-left:after, .dt-skin-tertiary-bg.extend-bg-fullwidth-right:after, .dt-sc-triangle-title:before, .dt-sc-icon-box.type10 .icon-wrapper:after, .side-navigation.type1 ul.side-nav > li.current_page_item > a, .side-navigation.type1 ul.side-nav > li > ul > li.current_page_item > a, .side-navigation.type1 ul.side-nav > li > ul > li > ul > li.current_page_item > a', 'property' => 'background-color' ),	

			# Tertiary Border Color - Miscellaneous/Shortcodes
			array( 'element' => '.dt-skin-tertiary-border', 'property' => 'border-color' ),	
			
			# Tertiary Border Color - Miscellaneous/Shortcodes
			array( 'element' => '.footer-22 .footer-copyright.vc_row', 'property' => 'border-top-color' ),	
		),
	));
	
	# quaternary-color
    FITNESSZONE_Kirki::add_field( $config, array(
        'type' => 'color',
        'settings' => 'quaternary-color',
        'label'    => esc_html__( 'Quaternary Color', 'fitnesszone' ),
        'section'  => 'dt_site_skin_section',
        'priority' => 5,
        'choices' => array( 'alpha' => true ),
        'default'  => fitnesszone_defaults('quaternary-color'),
        'active_callback' => array(
            array( 'setting' => 'use-predefined-skin', 'operator' => '==', 'value' => '0' )
        ),
        'output' => array(
		
		# Quaternary Border Color - Miscellaneous/Shortcodes
			array( 'element' => '.dt-sc-icon-box.type3.left_icon:hover .icon-wrapper', 'property' => 'border-color' ),
			
			# Quaternary BG Color - BbPress
			array( 'element' => '.dt-sc-gift-cards:hover:before,  .gallery.type11 .image-overlay, .gallery.type11 .image-overlay', 'property' => 'background-color' ),
                
        ),
    ));

	# Divider
	FITNESSZONE_Kirki::add_field( $config ,array(
		'type'=> 'custom',
		'settings' => 'custom-skin-divider',
		'section'  => 'dt_site_skin_section',
		'default'  => '<div class="customize-control-divider"></div>',
		'active_callback' => array(
			array( 'setting' => 'use-predefined-skin', 'operator' => '==', 'value' => '0' )
		)			
	));

	# body-bg-color
	FITNESSZONE_Kirki::add_field( $config, array(
		'type' => 'color',
		'settings' => 'body-bg-color',
		'label'    => esc_html__( 'Site BG Color', 'fitnesszone' ),
		'section'  => 'dt_site_skin_section',
		'output' => array(
			array( 'element' => '
				body, .layout-boxed .inner-wrapper, 
				.secondary-sidebar .type8 .widgettitle, .secondary-sidebar .type10 .widgettitle:after, 
				.dt-sc-contact-info.type3::after, .dt-sc-image-caption .dt-sc-image-wrapper .icon-wrapper::after, 
				ul.products li .product-wrapper, .woocommerce-tabs .panel, .select2-results, .woocommerce .woocommerce-message, .woocommerce .woocommerce-info, .woocommerce .woocommerce-error, .woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woo-type13 ul.products li.product:hover .product-details h5 a, .tribe-events-list-separator-month span' , 'property' => 'background-color' ),
			array( 'element' => '.dt-sc-image-caption.type8 .dt-sc-image-content::before' , 'property' => 'border-color' ),
			array( 'element' => '.secondary-sidebar .type14 .widgettitle:before, .widget.buddypress div.item-options a.selected' , 'property' => 'border-bottom-color' ),
			array( 'element' => '.dt-sc-testimonial.type2 blockquote::before' , 'property' => 'border-top-color' ),

		),
		'choices' => array( 'alpha' => true ),
		'default'  => fitnesszone_defaults('body-bg-color'),
		'active_callback' => array(
			array( 'setting' => 'use-predefined-skin', 'operator' => '==', 'value' => '0' ),
			array( 
				'element' => '.editor-styles-wrapper',
				'context' => array ('editor'), 
				'property' => 'background-color'
			),
		)
	));

	# body-content-color 			
	FITNESSZONE_Kirki::add_field( $config, array(
		'type' => 'color',
		'settings' => 'body-content-color',
		'label'    => esc_html__( 'Site Content Color', 'fitnesszone' ),
		'section'  => 'dt_site_skin_section',
		'output' => array(
			array( 'element' => 'body, .wp-block-pullquote' , 'property' => 'color' ),
			array( 
				'element' => '.editor-styles-wrapper > *, .editor-styles-wrapper pre, .wp-block-pullquote',
				'context' => array ('editor'), 
				'property' => 'color'
			),
		),
		'choices' => array( 'alpha' => true ),
		'default'  => fitnesszone_defaults('body-content-color'),
		'active_callback' => array(
			array( 'setting' => 'use-predefined-skin', 'operator' => '==', 'value' => '0' ),
		)
	));

	# body-a-color 			
	FITNESSZONE_Kirki::add_field( $config, array(
		'type' => 'color',
		'settings' => 'body-a-color',
		'label'    => esc_html__( 'Site Link Color', 'fitnesszone' ),
		'section'  => 'dt_site_skin_section',
		'output' => array(
			array( 'element' => 'a' , 'property' => 'color' ),
			array( 
				'element' => '.editor-styles-wrapper a',
				'context' => array ('editor'), 
				'property' => 'color'
			),
		),
		'choices' => array( 'alpha' => true ),
		'default'  => fitnesszone_defaults('body-a-color'),
		'active_callback' => array(
			array( 'setting' => 'use-predefined-skin', 'operator' => '==', 'value' => '0' ),
		)
		
	));

	# body-a-hover-color 			
	FITNESSZONE_Kirki::add_field( $config, array(
		'type' => 'color',
		'settings' => 'body-a-hover-color',
		'label'    => esc_html__( 'Site Link Hover Color', 'fitnesszone' ),
		'section'  => 'dt_site_skin_section',
		'output' => array(
			array( 'element' => 'a:hover' , 'property' => 'color' ),
			array( 
				'element' => '.editor-styles-wrapper a:focus, .editor-styles-wrapper a:hover',
				'context' => array ('editor'), 
				'property' => 'color'
			),
		),
		'choices' => array( 'alpha' => true ),
		'default'  => fitnesszone_defaults('body-a-hover-color'),
		'active_callback' => array(
			array( 'setting' => 'use-predefined-skin', 'operator' => '==', 'value' => '0' ),
		)
	));					