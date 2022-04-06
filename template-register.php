<?php
/**
 * Template Name: Register Template.
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
            <div class="row mt-4 p-2" style="background-color: #fff;">
                <div class="col-md-12 login-col">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="fname">
                                    <strong>First Name:</strong>
                                    <span class="forum_star">*</span>
                                </label>
                                <br>
                                <small>Length must be between 3 characters and 20 characters.</small>
                            </div><!--col-md-4-->
                            <div class="col-md-8">
                                <input type="text" id="fname" pattern=".{3,20}" title="3 Characters minimum" required>
                            </div><!--col-md-8-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-md-4">
                                <label for="lname">
                                    <strong>Last Name:</strong>
                                    <span class="forum_star">*</span>
                                </label>
                                <br>
                                <small>Length must be between 3 characters and 20 characters.</small>
                            </div><!--col-md-4-->
                            <div class="col-md-8">
                                <input type="text" id="lname" pattern=".{3,20}" title="3 Characters minimum" required>
                            </div><!--col-md-8-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-md-4">
                                <label for="email">
                                    <strong>Email Address:</strong>
                                    <span class="forum_star">*</span>
                                </label>
                                <br>
                                <small>Use your actual Email address we will send a confirmation message on this email address to activate your account.</small>
                            </div><!--col-md-4-->
                            <div class="col-md-8">
                                <input type="text" id="email" required>
                            </div><!--col-md-8-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-md-4">
                                <label for="password">
                                    <strong>Password:</strong>
                                    <span class="forum_star">*</span>
                                </label>
                                <br>
                                <small>Must be between 6 characters and 100 characters.</small>
                            </div><!--col-md-4-->
                            <div class="col-md-8">
                                <input type="password" id="password" pattern=".{6, 100}" title="6 Characters minimum" required>
                            </div><!--col-md-8-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-md-4">
                                <label for="cpassword">
                                    <strong>Confirm Password:</strong>
                                    <span class="forum_star">*</span>
                                </label>
                            </div><!--col-md-4-->
                            <div class="col-md-8">
                                <input type="password" id="cpassword" required>
                            </div><!--col-md-8-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/contact.php"> 
                                <br>
                                <small>Type the digits shown in above image into input field.</small>
                            </div><!--col-md-4-->
                            <div class="col-md-8">
                                <input type="text" id="captcha" autocomplete="off" required>
                            </div><!--col-md-8-->
                        </div><!--row-->
                        <p>
                            By creating an account, you confirm that you are agree to our 
                            <a href="">Terms of Use</a>
                        </p>
                        <p>
                            <input type="submit" value="Register" class="small-btn-Ube" style="width:20% !important;">
                        </p>
                    </form>
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