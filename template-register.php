<?php
/**
 * Template Name: Register Template.
 *
 * @package ByteBunch
*/
get_header();
?>
<?php

    if(isset($_POST['register'])) {
        $user_login = $_POST['fname'];
        $lname = $_POST['lname'];
        $user_email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $captcha = $_POST['captcha'];
        $user_captcha = $_POST['user_captcha'];
        $website = "http://localhost/wordpress";

        if(strlen($user_login) > 3 && strlen($user_login) < 20 && strlen($lname) > 3 && strlen($lname) < 20) {
            if(strlen($password) > 6 && strlen($password) < 100) {
                if($password === $cpassword) {
                    if($user_captcha === $captcha) {

                        $emailTo = get_option('admin_email');
                        $login_url = 'http://localhost/wordpress/register?action=register';
                        $subject = 'Registeration Email From ByteBunch';
                        $body = "Name: $user_login $lname \n\n Email: $user_email \n\n Login URL: $login_url";

                        $emailSent = wp_mail($user_email, $subject, $body);

                        if($emailSent) {
                            $userdata = array(
                                'user_login' =>  $user_login,
                                'user_pass'  =>  $password,
                                'user_email'  =>  $user_email,
                                'user_url'   =>  $website,
                            );
                            $user = wp_insert_user( $userdata ) ;
                            $message[] = 'Registeration email has been send to your email...';
                        }
                        
                    } else {
                        $message[] = 'Wrong Captcha Code!';
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
            $message[] = 'User register successfully...';
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
                                <input type="password" id="password" name="password" pattern=".{6, 100}" title="6 Characters 
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
                                <?php require_once 'captcha.php'; echo $captcha; ?>
                                <small>Type the digits shown in above image into input field.</small>
                            </div><!--col-md-4-->
                            <div class="col-md-8">
                                <input type="hidden" id="captcha" name="captcha" class="w-50" value="<?php echo  $captcha_code; ?>">
                                <input type="text" id="user_captcha" name="user_captcha" class="w-50" required="required">
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