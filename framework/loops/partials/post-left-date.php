<?php
	global $post;

	$show_format_meta = cs_get_option( 'post-format-meta' );
	$show_format_meta = !empty( $show_format_meta ) ? "" : "hidden";

	$show_author_meta = cs_get_option( 'post-author-meta' );
	$show_author_meta = !empty( $show_author_meta ) ? "" : "hidden";

	$show_date_meta = cs_get_option( 'post-date-meta' );
	$show_date_meta = !empty( $show_date_meta ) ? "" : "hidden";	

	$show_comment_meta = cs_get_option( 'post-comment-meta' );
	$show_comment_meta = !empty( $show_comment_meta ) ? "" : "hidden";

	$show_category_meta = cs_get_option( 'post-category-meta' );
	$show_category_meta = !empty( $show_category_meta ) ? "" : "hidden";

	$show_tag_meta = cs_get_option( 'post-tag-meta' );
	$show_tag_meta = !empty( $show_tag_meta ) ? "" : "hidden";

	$post_meta = get_post_meta($post->ID, '_dt_post_settings', TRUE);
	$post_meta = is_array($post_meta) ? $post_meta : array();
	
	$format = !empty( $post_meta['post-format-type'] ) ? $post_meta['post-format-type'] : 'standard'; ?>
    
    <!-- Featured Image -->
    <div class="entry-thumb">
        <div class="blog-image">
            <?php get_template_part( 'framework/loops/partials/entry', 'thumb' ); ?>
        </div>
		<div class="entry-meta">
            <div class="entry-date <?php echo esc_attr( $show_date_meta );?>">
                <span> <strong><?php echo get_the_date('d');?></strong><br><?php echo get_the_date('M');?><br><?php echo get_the_date('Y');?></span>
            </div>
        </div>
    </div><!-- Featured Image -->
    <!-- Entry Details -->
    <div class="entry-details">
    <!-- Entry Meta Data -->
    <div class="entry-meta-data">
		<p class="author <?php echo esc_attr( $show_author_meta );?>"><span class='fa fa-user'></span><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" title="<?php esc_attr_e('View all posts by ', 'fitnesszone'); echo get_the_author();?>"><?php echo get_the_author();?></a></p><p><?php  if( ! post_password_required() ) {
                comments_popup_link('<span class="fa fa-comment"> </span> 0 ','<span class="fa fa-comment"> </span> 1 ',
          '<span class="fa fa-comment"> </span> % ',$show_comment_meta ,'<span class="fa fa-comment"> </span> 0 ');
            } else {
                echo '<div class="password-protect"><i class="fa fa-lock"> </i>'.esc_html__('Enter your password to view comments.', 'fitnesszone')."</div>";
            } ?></p>
        <?php if(isset($show_tag_meta) && empty( $show_tag_meta ) ): ?>
        <?php the_tags("<p class='tags '> <span class='fa fa-tags'> </span>"); ?>
        <?php endif; ?>
		<?php $categories = get_the_category();
			if ( ! empty( $categories ) ):?>
				<p><span class='fa fa-folder-open <?php echo esc_attr( $show_category_meta );?>'></span><span class="<?php echo esc_attr( $show_category_meta );?> category"><?php the_category(', '); ?></p><?php
			endif; ?>

    </div><!-- Entry Meta Data -->
    
        <div class="entry-body">
           <?php the_content();?>
           <?php wp_link_pages( array( 'before'=>'<div class="page-link">', 'after'=>'</div>', 'link_before'=>'<span>', 'link_after'=>'</span>', 'next_or_number'=>'number',
                            'pagelink' => '%', 'echo' => 1 ) );?>
        </div>

        <!-- Meta -->
        <!--<div class="entry-meta hidden">

            <div class="comments <?php echo esc_attr($show_comment_meta);?>">
            	<i class="fa fa-comment"> </i>
                	<?php  if( ! post_password_required() ) {
				        comments_popup_link('<i class="fa fa-comment"> </i> 0','<i class="fa fa-comment"> </i> 1',
                  '<i class="fa fa-comment"> </i> % ',$show_comment_meta ,'<i class="fa fa-comment"> </i> 0');
                    } else {
                        echo '<i class="fa fa-lock"> </i>'.esc_html__('Enter your password to view comments.', 'fitnesszone');
                    } ?>
            </div>

            <?php if( shortcode_exists( 'dt_sc_post_view_count' ) && shortcode_exists( 'dt_sc_post_like_count' ) && class_exists( 'DTCorePlugin' ) ): ?>
                <div class="entry-info">
                    <div class="dt-sc-like-views">
                        <div class="views">
                            <i class="fa fa-eye"> </i>
                            <span><?php echo do_shortcode('[dt_sc_post_view_count post_id="'.$post->ID.'" /]'); ?></span>
                        </div>
                        
                        <div class="likes dt_like_btn">
                            <i class="fa fa-heart"> </i>
                            <a href="#" data-postid="<?php the_ID(); ?>" data-action="like">
                                <i><?php echo do_shortcode('[dt_sc_post_like_count post_id="'.$post->ID.'" /]'); ?></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif;?>    
        </div>--><!-- Meta -->
    </div><!-- Entry Details -->

	<?php edit_post_link( esc_html__( ' Edit ','fitnesszone' ) ); ?>