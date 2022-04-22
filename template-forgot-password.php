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
                        <h3><?php the_title(); ?></h3>
                    </div><!--my-2-->
                    <div class="my-4 p-3" style="background: #fff;">
                        <div class="web_boxp">
                            <form action="" class="jquery_validated_form" method="post">
                                    <p>
                                        <label for="password">
                                            <strong>E-mail: </strong>
                                            <span class="forum_star">*</span>
                                        </label><br>
                                        <small>This must be the e-mail address associated with your account. If you have not changed this via your user control panel then it is the e-mail address you registered your account with.</small>
                                        <input type="text" class="w-50" name="user_email" id="email" class="required" required="required">
                                    </p>
                                    <p>
                                    </p>
                                    <p>
                                        <!-- <label for="captcha"><strong>Captcha: <span class="forum_star">*</span></strong></label> -->
                                        <img src="https://test.bytebunch.com/wp-content/themes/bbblog/lib/captcha/contact.php" alt="captcha code" style="margin-bottom:10px;border:1px solid #ccc; display:block;">
                                        <input type="text" class="w-50" name="captcha" id="captcha" autocomplete="off" required="required">
                                        <!-- <small>Type the digits shown in above image.</small> -->
                                    </p>
                                <p><input type="submit" value="Submit" style="width:30% !important;"></p>
                            </form>
                            <div class="clearboth"></div>
                        </div><!--web_boxp-->
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