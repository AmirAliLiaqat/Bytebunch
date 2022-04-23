<?php
/**
 * Page File.
 *
 * @package ByteBunch
*/
get_header();
?>
<?php
    if(have_posts()) {
        while(have_posts()) {
            the_post();
?>
    <!-------------------- Section Start -------------------->
    <section>
        <div class="container my-4">
            <div class="row mt-4">
                <div class="col-md-8 login-col">
                    <div class="my-2 p-3" style="background: #fff;">
                        <h2><?php the_title(); ?></h2>
                    </div><!--my-2-->
                    <div class="my-4 p-3" style="background: #fff;">
                        <?php dynamic_sidebar('forgot-widget'); ?>
                    </div><!--my-2-->
                </div><!--col-md-8-->
                <div class="col-md-4 login-col">
                    <?php get_sidebar(); ?>
                </div><!--col-md-4-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->
<?php 
        }
    }
?>
<?php get_footer(); ?>