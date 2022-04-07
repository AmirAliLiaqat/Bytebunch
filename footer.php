<?php
/**
 * Footer Template.
 *
 * @package ByteBunch
*/
?>

    <!-------------------- Footer Start -------------------->
    <footer>
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-3">
                    <?php dynamic_sidebar('footer-1'); ?>
                </div><!--col-md-3-->
                <div class="col-md-3">
                    <?php dynamic_sidebar('footer-2'); ?>
                </div><!--col-md-3-->
                <div class="col-md-3">
                    <?php dynamic_sidebar('footer-3'); ?>
                </div><!--col-md-3-->
                <div class="col-md-3">
                    <?php dynamic_sidebar('footer-4'); ?>
                </div><!--col-md-3-->
            </div><!--row-->
        </div><!--container-->
        
        <div class="copyright_text">
            <div class="container">
                <?php if ( true == get_theme_mod( 'toggle_footer_menu', 'on' ) ) : ?>
                    <div class="footer_menu">
                        <?php 
                            wp_nav_menu( array (
                                'theme_location' => 'secondary',
                                'container' => ''
                            ) ); 
                        ?>
                    </div><!--footer_menu-->
                <?php endif; ?>
                <?php if ( true == get_theme_mod( 'toggle_footer_copyright', 'on' ) ) : ?>
                    <p style="font-size: 1rem; margin-top: 10px;">	
                        <?php echo get_theme_mod( 'footer_copyright_text', '© Copyright 2021. Theme by ByteBunch' ) ?>
                    </p>
                <?php endif; ?>
            </div><!--container-->
        </div><!--copyright_text-->
    </footer>
    <!-------------------- Footer End -------------------->

    <?php wp_footer(); ?>

</body>
</html>