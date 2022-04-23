<?php
/**
 * Template Name: Contact Template.
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
        <div class="map">
            <?php dynamic_sidebar('contact-1'); ?>
        </div><!--map-->
        <div class="container section-row">
            <div class="row  justify-content-end">
                <div class="col-md-5 text-center" style="background-color: #fff; padding: 20px;">
                    <?php dynamic_sidebar('contact-2'); ?>
                </div><!--col-md-12-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->
<?php 
        }
    }
?>
<?php get_footer(); ?>