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
                    <form action="" method="post">
                        <p>
                            <label for="username">Username:</label> <br>
                            <input type="text" id="username" required="">
                        </p>
                        <p>
                            <label for="password">Passowrd:</label> <br>
                            <input type="password" id="password" required="">
                        </p>
                        <p>
                            <input type="checkbox" id="remember_me" checked="">
                            <label for="remember_me">Log me on automatically each visit</label>
                        </p>
                        <p>
                            <a href="http://localhost/wordpress/forgot-password/">Forgot your password?</a>
                        </p>
                        <p>
                            <input type="submit" value="Log In" class="orange-btn" style="max-width:30%;">
                        </p>
                    </form>
                    <?php //dynamic_sidebar('login-1'); ?>
                </div><!--col-md-6-->
                <div class="col-md-6 login-col">
                    <h2>New User</h2>
                    <p>In order to log in, you must be registered. Registering takes only a few moments but gives you increased capabilities. The board administrator may also grant additional permissions to registered users. Before you register please ensure you are familiar with our terms of use and related policies. Please ensure you read any forum rules as you navigate around the board.</p>
                    <p>
                        <a href="">Terms of use</a> | <a href="">Privacy policy</a>
                    </p>
                        <a href="http://localhost/wordpress/register/" class="orange-btn">Create My Account</a>
                    </p>
                    <?php //dynamic_sidebar('login-2'); ?>
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