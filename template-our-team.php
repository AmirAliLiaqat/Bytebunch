<?php
/**
 * Template Name: Our Team
 *
 * @package ByteBunch
*/
get_header();
?>

    <!-------------------- Section Start -------------------->
    <section>
       <main>
            <div class="container">
                <div class="row my-4">
                    <h2 class="text-center mt-3">Our Team</h2>
                    <?php
                        $all_posts = new WP_Query( array(
                            'post_type' => 'team', 
                            'posts_per_page' => 4,
                            'order' => 'ASC'
                            )
                        ); 
                        if($all_posts->have_posts()) {
                            while($all_posts->have_posts()) {
                                $all_posts->the_post();
                    ?>
                    <div class="col-md-6">
                        <div class="team">
                            <?php the_post_thumbnail(); ?>
                            <div class="info my-3">
                                <strong><b><?php the_title(); ?></b></strong> <br>
                                <strong><i><?php the_excerpt(); ?></i></strong>
                                <div class="social-links">
                                    <a href="https://www.facebook.com/mehar.amir.liaqat">Fac</i></a>
                                    <a href="https://twitter.com/AmirLiaqat0309">Twi</a>
                                    <a href="amirliaqat2020@gmail.com">Goo</a>
                                    <a href="https://www.youtube.com/channel/UCg5Eqzm0NbbnePWdmCylW2w">You</a>
                                    <a href="https://github.com/AmirAliLiaqat">Git</a>
                                </div><!--social-links-->
                            </div><!--info-->
                            <?php the_content(); ?>
                        </div><!--team-->
                    </div><!--col-md-6-->
                    <?php 
                            }
                        }
                    ?>
                    <?php wp_reset_postdata(); ?>
                </div><!--row-->
            </div><!--container-->
       </main>
    </section>
    <!-------------------- Section End -------------------->

<?php
get_footer();
?>