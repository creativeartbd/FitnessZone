<?php
	global $post;

	$show_author_meta = cs_get_option( 'post-author-meta' );
	$show_author_meta = !empty( $show_author_meta ) ? "" : "hidden";

	$show_date_meta = cs_get_option( 'post-date-meta' );
	$show_date_meta = !empty( $show_date_meta ) ? "" : "hidden";	

	$show_comment_meta = cs_get_option( 'post-comment-meta' );
	$show_comment_meta = !empty( $show_comment_meta ) ? "" : "hidden";

	$show_category_meta = cs_get_option( 'post-category-meta' );
	$show_category_meta = !empty( $show_category_meta ) ? "" : "hidden";

	$show_tag_meta = cs_get_option( 'post-tag-meta' );
	$show_tag_meta = !empty( $show_tag_meta ) ? "" : "hidden"; ?>

    <!-- Featured Image -->
    <div class="entry-thumb">
        <?php get_template_part( 'framework/loops/partials/entry', 'thumb' ); ?>
        <!-- .entry-meta -->
        <div class="entry-meta bottom-left"><?php
			$cats = wp_get_object_terms(get_the_ID(),'category');
			if( !empty($cats) && $show_category_meta != 'hidden' ):
				$count = count($cats);
				echo '<p class="category">';
					foreach( $cats as $key => $term ) {
						$meta = get_term_meta( $term->term_id, '_post_category_options', false );
						$color = !empty($meta[0]['c_color']) ? 'style="background: '.$meta[0]['c_color'].'"' : '';

						echo '<a href="'.get_term_link( $term->slug ,'category').'" rel="category" '.$color.'>'.esc_html( $term->name ).'</a>';
						$key += 1;

						if( $key !== $count ){
							echo ' ';
						}
					}
				echo '</p>';
			endif; ?>

            <div class="entry-title">
                <h4><a href="<?php the_permalink();?>" title="<?php printf( esc_attr__('Permalink to %s','fitnesszone'), the_title_attribute('echo=0'));?>"><?php the_title(); ?></a></h4>
            </div>

            <div class="entry-info">
                <div class="author <?php echo esc_attr( $show_author_meta );?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?> <?php esc_html_e('By', 'fitnesszone');?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" title="<?php esc_attr_e('View all posts by ', 'fitnesszone'); echo get_the_author();?>"><?php echo get_the_author();?></a></div>

                <div class="date <?php echo esc_attr($show_date_meta);?>"><span><?php esc_html_e('On', 'fitnesszone');?></span><?php echo get_the_date ( get_option('date_format') );?></div>

				<div class="comments <?php echo esc_attr($show_comment_meta);?>"><?php  if( ! post_password_required() ) {
                comments_popup_link('<i class="fa fa-comments"> </i> 0','<i class="fa fa-comments"> </i> 1','<i class="fa fa-comments"> </i> % ',$show_comment_meta ,'<i class="fa fa-comments"> </i> 0');
            } else {
                echo '<div class="password-protect"><i class="fa fa-lock"> </i>'.esc_html__('Enter your password to view comments.', 'fitnesszone')."</div>";
            } ?></div>

				<?php if( shortcode_exists( 'dt_sc_post_view_count' ) && class_exists( 'DTCorePlugin' ) ): ?>
                    <div class="views"><i class="zmdi zmdi-eye zmdi-hc-fw"> </i> <?php echo do_shortcode('[dt_sc_post_view_count post_id="'.$post->ID.'" /]');?> </div>
                <?php endif;?>

                <?php if( shortcode_exists( 'dt_sc_post_like_count' ) && class_exists( 'DTCorePlugin' ) ): ?>
                    <div class="likes dt_like_btn">
                        <i class="zmdi zmdi-favorite-outline zmdi-hc-fw"> </i>
                        <a href="#" data-postid="<?php the_ID(); ?>" data-action="like">
                            <i><?php echo do_shortcode('[dt_sc_post_like_count post_id="'.$post->ID.'" /]');?></i>
                        </a>
                    </div>
                <?php endif;?>
            </div>
        </div><!-- .entry-meta -->
    </div><!-- Featured Image -->

	<div class="entry-details">
        <div class="entry-body">
			<?php the_content();?>
            <?php wp_link_pages( array( 'before'=>'<div class="page-link">', 'after'=>'</div>', 'link_before'=>'<span>', 'link_after'=>'</span>', 'next_or_number'=>'number',
                            'pagelink' => '%', 'echo' => 1 ) );?>
        </div>

        <!-- Category & Tag -->
        <div class="entry-meta-data">
        	<?php the_tags("<p class='tags {$show_tag_meta}'><span><i class='zmdi zmdi-tag zmdi-hc-fw'> </i></span>",' ',"</p>"); ?>
        </div><!-- Category & Tag -->

        <!-- Share -->
        <?php if( shortcode_exists( 'dt_sc_post_social_share' ) && class_exists( 'DTCorePlugin' ) ):
                  echo do_shortcode('[dt_sc_post_social_share post_id="'.$post->ID.'" /]');
              endif;?><!-- Share -->

        <?php edit_post_link( esc_html__( ' Edit ','fitnesszone' ) ); ?>
    </div><!-- .entry-details -->