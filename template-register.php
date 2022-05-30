<?php
/**
 * Template Name: Register Template.
 *
 * @package ByteBunch
*/
get_header();
?>
<?php

    // require_once 'config.php';

    if(isset($_POST['register'])) {
        $user_login = $_POST['fname'];
        $lname = $_POST['lname'];
        $pass = $_POST['pass'];
        $user_pass = wp_hash_password( $pass );
        $user_email = $_POST['email'];
        $cpassword = $_POST['cpassword'];
        $captcha = $_POST['captcha'];
        $email = $_POST['email'];

        // $fname = $_POST['fname'];
        // $lname = $_POST['lname'];
        // $pass = $_POST['pass'];
        // $cpassword = $_POST['cpassword'];
        // $password = wp_hash_password( $pass );
        // $email = $_POST['email'];


        if(strlen($user_login) > 3 && strlen($user_login) < 20 && strlen($lname) > 3 && strlen($lname) < 20) {
            if(strlen($pass) > 6 && strlen($pass) < 100) {
                if($pass === $cpassword) {
                    $emailTo = get_option('admin_email');
                    $login_url = 'http://localhost/wordpress/register?action=register';
                    $subject = 'Registeration Email From ByteBunch';
                    $body = "Name: $user_login $lname \n\n Email: $email \n\n Login URL: $login_url";

                    $emailSent = wp_mail($email, $subject, $body);

                    if($emailSent) {
                        $message[] = 'Registeration email has been send to your email...';
                    }
                } else {
                    $message[] = 'Password does`t match...';
                }
            }  else {
                $message[] = 'Password must be between 6 characters and 100 characters...';
            }
        } else {
            $message[] = 'Name must be between 3 characters and 20 characters...';
        }
        
    }

    if(isset($_GET['action'])) {
        $action = $_GET['action'];

        if($action == 'register') {
            $register_user_query = register_new_user( $user_login, $user_email );

            // global $wpdb;    
            // $table_name = $wpdb->prefix . "users";

            // $register_user = "INSERT INTO $table_name (`user_login`, `user_pass`,`user_email`)
            // VALUES ('$fname','$password','$email')";
            // $register_user_query = mysqli_query($conn, $register_user) or die("Query Failed");


            if($register_user_query) {
                $message[] = 'User register successfully...';
            }

            // register_new_user( $user_login, $user_email );
            // $user_pass = wp_hash_password( $pass );
            // $user_id = wp_create_user( $user_login, $user_pass, $user_email );
        }
    }

?>
<?php
    if(isset($message)) {
        foreach ($message as $message) {
            echo '
            <div class="message">
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
            <div class="row mt-4 p-2" style="background-color: #fff;">
                <div class="col-md-12 login-col">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="fname">
                                    <strong>First Name:</strong>
                                    <span class="forum_star">*</span>
                                </label><br>
                                <small>Length must be between 3 characters and 20 characters.</small>
                            </div><!--col-md-4-->
                            <div class="col-md-8">
                                <input type="text" id="fname" name="fname" pattern=".{3,20}" title="3 Characters minimum" class="w-50" required="required">
                            </div><!--col-md-8-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-md-4">
                                <label for="lname">
                                    <strong>Last Name:</strong>
                                    <span class="forum_star">*</span>
                                </label><br>
                                <small>Length must be between 3 characters and 20 characters.</small>
                            </div><!--col-md-4-->
                            <div class="col-md-8">
                                <input type="text" id="lname" name="lname" pattern=".{3,20}" title="3 Characters minimum" class="w-50" required="required">
                            </div><!--col-md-8-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-md-4">
                                <label for="email">
                                    <strong>Email Address:</strong>
                                    <span class="forum_star">*</span>
                                </label><br>
                                <small>Use your actual Email address we will send a confirmation message on this<br>
                                email address to activate your account.</small>
                            </div><!--col-md-4-->
                            <div class="col-md-8">
                                <input type="text" id="email" name="email" class="w-50" required="required">
                            </div><!--col-md-8-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-md-4">
                                <label for="password">
                                    <strong>Password:</strong>
                                    <span class="forum_star">*</span>
                                </label><br>
                                <small>Must be between 6 characters and 100 characters.</small>
                            </div><!--col-md-4-->
                            <div class="col-md-8">
                                <input type="password" id="password" name="pass" pattern=".{6, 100}" title="6 Characters 
                                minimum" class="w-50" required="required">
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
                                <input type="password" id="cpassword" name="cpassword" class="w-50" required="required">
                            </div><!--col-md-8-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-md-4">
                                <img src="https://test.bytebunch.com/wp-content/themes/bbblog/lib/captcha/contact.php"><br>
                                <small>Type the digits shown in above image into input field.</small>
                            </div><!--col-md-4-->
                            <div class="col-md-8">
                                <input type="text" id="captcha" name="captcha" class="w-50" autocomplete="off" required="required">
                            </div><!--col-md-8-->
                        </div><!--row-->
                        <p>
                            By creating an account, you confirm that you are agree to our
                            <a href="http://localhost/wordpress/terms-of-use/">Terms of Use</a>
                        </p>
                        <p>
                            <input type="submit" value="Register" name="register" class="orange-btn" style="max-width:15%;">
                        </p>
                    </form>
                </div><!--col-md-12-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->
<?php get_footer(); ?>