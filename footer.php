    <?php
        /**
         * fitnesszone_hook_content_after hook.
         * 
         */
        do_action( 'fitnesszone_hook_content_after' );
    ?>

        <!-- **Footer** -->
        <footer id="footer">
            <div class="container">
            <?php
                /**
                 * fitnesszone_footer hook.
                 * 
                 * @hooked fitnesszone_vc_footer_template - 10
                 *
                 */
                do_action( 'fitnesszone_footer' );
            ?>
            </div>
        </footer><!-- **Footer - End** -->

    </div><!-- **Inner Wrapper - End** -->
        
</div><!-- **Wrapper - End** -->
<?php
    
    do_action( 'fitnesszone_hook_bottom' );

    wp_footer();
?>
</body>
</html>