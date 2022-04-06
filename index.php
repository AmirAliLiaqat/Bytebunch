<?php
/**
 * Main Template File.
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
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="content">
                                    <?php
                                        if(have_posts()) {
                                            while(have_posts()) {
                                                the_post();
                                    ?>
                                    <article>
                                        <div class="post-header">
                                            <div class="time float-start text-center">
                                                <span class="date"><?php the_date('j'); ?></span> <br>
                                                <span class="months"><?php echo get_the_date('F'); ?></span>
                                            </div><!--time-->
                                            <div class="title float-start py-2">
                                                <h2>
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h2>
                                                Written By <span><a href="" class="link"><?php the_author(); ?></a></span>
                                            </div><!--title-->
                                            <div class="clearboth"></div>
                                        </div><!--post-header--> <br><br><br><br>
                                        <div class="post-content">
                                            <?php the_excerpt(); ?>
                                            <a href="<?php the_permalink(get_the_ID()); ?>" class="orange-btn">Read More</a>
                                        </div><!--post-content-->
                                        <div class="post-footer">
                                            <span>
                                                <img src="https://img.icons8.com/glyph-neue/16/000000/messaging-.png"/>  
                                                <a href="" class="link"><?php echo get_comments_number(); ?> comment</a>
                                            </span>
                                        </div><!--post-footer-->
                                    </article>
                                    <?php }
                                        }
                                    ?>
                                    <?php wp_reset_postdata(); ?>
                                    <div class="pagination mb-3">
                                        <?php echo paginate_links(); ?>
                                    </div><!--pagination-->
                                </div><!--content-->
                            </div><!--col-md-8-->
                            <div class="col-md-4">
                                <?php get_sidebar(); ?>
                            </div><!--col-md-4-->
                        </div><!--row-->
                    </div><!--col-md-12-->
                </div><!--row-->
            </div><!--container-->
       </main>
    </section>
    <!-------------------- Section End -------------------->

<?php
get_footer();
?>