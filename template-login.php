<?php
/**
 * Template Name: Login Template.
 *
 * @package ByteBunch
*/
get_header();
?>
<?php

require_once 'config.php';

if(isset($_POST['login'])) {

    global $wpdb;

    $table_name = $wpdb->prefix . "users";
    $user_name = $_POST['username'];
    $user_password = $_POST['password'];

    $code = rand(1000,9999);

    $add_activaction_key = "UPDATE $table_name SET `user_activation_key`='$code' WHERE `user_login` = '$user_name'";
    $add_activaction_key_query = mysqli_query($conn, $add_activaction_key) or die('Query Failed');
    
    $get_email = "SELECT * FROM $table_name WHERE `user_login` = '$user_name' ";
    $get_email_query = mysqli_query($conn, $get_email) or die('Query Failed');

    if(mysqli_num_rows($get_email_query) > 0) {
        while($row = mysqli_fetch_assoc($get_email_query)) {
            $email = $row['user_email'];
            $admin_email = get_option('admin_email');
            $subject = 'Login Verification Code From '. $admin_email;
            $body = "Name: $user_name \n\n Email: $email \n\n Verification Code: $code";

            $mail_send = wp_mail($email, $subject, $body);
            
            if($mail_send) {
                $message[] = 'Verification code has been send to your email...';
            }
        }
    } else {
        $message[] = 'Login details are incorrect! Please type correct details to login.';
    }
}

if(isset($_POST['verify'])) {
    global $wpdb;

    $table_name = $wpdb->prefix . "users";
    $verification_code = $_POST['verfication'];

    $check_code = "SELECT * FROM $table_name WHERE user_activation_key = '$verification_code'";
    $check_code_query = mysqli_query($conn, $check_code) or die("Query Failed");

    if($check_code_query) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $credentials = array(
            'user_login'    => $username,
            'user_password' => $password,
            'remember'      => true
        );
        $user = wp_signon( $credentials, true );

        $message[] = "Hurrah! Login Successfully...";
    } else {
        $message[] = "Verification code that you entered was wrong! Please try again.";
    }
}

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
                <div class="col-lg-6 col-md-12 mt-3 verify-col">
                    <form action="" method="post">
                        <p>
                            <input type="hidden" id="username" name="username" value="<?php if(isset($user_name)) {echo $user_name;} ?>">
                            <input type="hidden" id="password" name="password" value="<?php if(isset($user_password)) {echo $user_password;} ?>">
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