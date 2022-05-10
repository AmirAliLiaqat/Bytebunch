<?php
/**
 * Template Name: About Us Template.
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
                    <div class="col-md-8">
                        <div class="p-4 mb-3" style="background-color: #fff;">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div><!-- col-md-12 -->
                        <div class="content">
                            <?php
                                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                                $all_posts = new WP_Query( array(
                                    'post_type' => 'post', 
                                    'posts_per_page' => 4,
                                    'paged' => $paged,
                                    )
                                ); 
                                if($all_posts->have_posts()) {
                                    while($all_posts->have_posts()) {
                                        $all_posts->the_post();
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
                                    <a href="<?php the_permalink(); ?>" class="orange-btn">Read More</a>
                                </div><!--post-content-->
                                <div class="post-footer">
                                    <span class="facebook_share">
                                        <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook_like.png"/></a>
                                    </span>
                                    <span class="twitter_share">
                                        <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/tweet.png"/></a>
                                    </span>
                                    <span class="linkedin_share hidden-xs">
                                        <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/linked_share.png"/></a>
                                    </span>
                                    <span class="google_share hidden-xs">
                                        <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/google-plus-icon.png"/></a>
                                    </span>
                                    <span class="post_comments">
                                        <a href="<?php the_permalink(); ?>" class="link"><img src="https://img.icons8.com/glyph-neue/16/000000/messaging-.png"/> <?php echo get_comments_number(); ?> comment</a>
                                    </span>
                                </div><!--post-footer-->
                            </article>
                            <?php 
                                    }
                                } else {
                                    echo 'Sorry, no posts matched your criteria.';
                                }
                            ?>
                            <?php wp_reset_postdata(); ?>
                            <div class="pagination">
                                <?php 
                                    echo paginate_links( array(
                                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                        'total'        => $all_posts->max_num_pages,
                                        'current'      => max( 1, get_query_var( 'paged' ) ),
                                        'format'       => '?paged=%#%',
                                        'show_all'     => false,
                                        'type'         => 'plain',
                                        'end_size'     => 2,
                                        'mid_size'     => 1,
                                        'prev_next'    => true,
                                        'prev_text'    => sprintf( '<i></i> %1$s', __( '« Previous', 'text-domain' ) ),
                                        'next_text'    => sprintf( '%1$s <i></i>', __( 'Next »', 'text-domain' ) ),
                                        'add_args'     => false,
                                        'add_fragment' => '',
                                    ) );
                                ?>
                            </div><!--pagination-->
                        </div><!--content-->
                    </div><!--col-md-8-->
                    <div class="col-md-4">
                        <?php get_sidebar(); ?>
                    </div><!--col-md-4-->
                </div><!--row-->
            </div><!--container-->
       </main>
    </section>
    <!-------------------- Section End -------------------->

<?php
get_footer();
?>