<?php
/**
 * Template Name: Login Template.
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
            <div class="row" style="background-color: #fff;">
                <div class="col-md-12">
                    <h2 style="margin: 10px;"><?php the_title(); ?></h2>
                </div><!--col-md-12-->
            </div><!--row-->
            <div class="row mt-4" style="background-color: #fff;">
                <div class="col-md-6 login-col">
                    <?php dynamic_sidebar('login-1'); ?>
                </div><!--col-md-6-->
                <div class="col-md-6 login-col">
                    <?php dynamic_sidebar('login-2'); ?>
                </div><!--col-md-6-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->
<?php 
        }
    }
?>
<?php get_footer(); ?>