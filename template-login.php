<?php
/**
 * Template Name: Login Template.
 *
 * @package ByteBunch
*/
get_header();
?>
<?php



?>

<?php
    if(isset($message)) {
        foreach ($message as $message) {
            echo '
            <div class="message" id="showMessage">
                <span>'.$message.'</span>
                <i onclick="this.parentElement.remove();">&#10060;</i>
            </div><!--message-->
            ';
        }
    }
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
                <?php
                    if ( is_user_logged_in() ) {
                        $current_user = wp_get_current_user();
                        $username = $current_user->user_login;
                        echo '<div class="mt-3">You are logged in with this <span class="text-danger">'.$username.'</span> username. <a href="'.wp_logout_url("http://localhost/wordpress/login/").'">Click here to logout</a></div>';
                    } else {
                ?>
                <div class="col-lg-6 col-md-12 mt-3 login-col">
                    <form action="" method="post">
                        <p>
                            <label for="username">Username:</label> <br>
                            <input type="text" id="username" name="username" required="required">
                        </p>
                        <p>
                            <label for="password">Passowrd:</label> <br>
                            <input type="password" id="password" name="password" required="required">
                        </p>
                        <p>
                            <input type="checkbox" id="remember_me" name="remember_me" checked="checked">
                            <label for="remember_me">Log me on automatically each visit</label>
                        </p>
                        <p>
                            <a href="http://localhost/wordpress/forgot-password/">Forgot your password?</a>
                        </p>
                        <p>
                            <input type="submit" name="login" class="orange-btn text-uppercase" value="Log In" style="width: 110px;text-align: center;"></input>
                        </p>
                    </form>
                </div><!--col-md-6-->
                <div class="col-lg-6 col-md-12 mt-3 verify-col" style="display: none;">
                    <form action="" method="post">
                        <p>
                            <label for="verfication">Verification Code:</label> <br>
                            <input type="text" id="verfication" name="verfication" required="required">
                        </p>
                        <p>
                            <input type="submit" name="verify" class="orange-btn text-uppercase" value="Verify" style="width: 110px;text-align: center;"></input>
                        </p>
                    </form>
                </div><!--col-md-6-->
                <?php } ?>
                <div class="col-lg-6 col-md-12 mt-3">
                    <h2>New User</h2>
                    <p>In order to log in, you must be registered. Registering takes only a few moments but gives you increased capabilities. The board administrator may also grant additional permissions to registered users. Before you register please ensure you are familiar with our terms of use and related policies. Please ensure you read any forum rules as you navigate around the board.</p>
                    <p>
                        <a href="http://localhost/wordpress/terms-of-use/">Terms of use</a> | 
                        <a href="http://localhost/wordpress/privacy-policy/">Privacy policy</a>
                    </p>
                        <a href="http://localhost/wordpress/register/" class="orange-btn">Create My Account</a>
                    </p>
                </div><!--col-md-6-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->

<?php get_footer(); ?>