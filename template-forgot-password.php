<?php
/**
 * Template Name: Forgot Password
 *
 * @package ByteBunch
*/
get_header();
?>
<?php

    require_once 'config.php';

    if(isset($_POST['verify'])) {

        global $wpdb;

        $table_name = $wpdb->prefix . "users";
        $email = $_POST['user_email'];
        $admin_email = get_option('admin_email');

        $check_email = "SELECT * FROM $table_name WHERE `user_email` = '$email' ";
        $check_email_query = mysqli_query($conn, $check_email) or die('Query Failed');

        if(mysqli_num_rows($check_email_query) > 0) {
            while($row = mysqli_fetch_assoc($check_email_query)) {
                $email = $row['user_email'];
                $user_name = $row['user_login'];
                $ID = $row['ID'];
                $link = "http://localhost/wordpress/new-password?id=$ID";
                $subject = 'Reset Password Link From '. $admin_email;
                $body = "Name: $user_name \n\n Email: $email \n\n Reset Password Link: $link";

                wp_mail($email, $subject, $body);
                $message[] = 'Reset Password link has been send to your email.';
                
            }
        } else {
            $message[] = "Email that you entered was wrong! Please type correct email.";
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
            <div class="row mt-4">
                <div class="col-md-8 login-col">
                    <div class="my-2 p-3" style="background: #fff;">
                        <h2><?php the_title(); ?></h2>
                    </div><!--my-2-->
                    <div class="web_boxp my-4 p-3" style="background: #fff;">
                        <form action="" class="jquery_validated_form" method="post">
                            <p>
                                <label for="password">
                                    <strong>E-mail: </strong>
                                    <span class="forum_star">*</span>
                                </label><br>
                                <small>
                                    This must be the e-mail address associated with your account. 
                                    If you have not changed this via your user control panel then 
                                    it is the e-mail address you registered your account with.
                                </small>
                                <input type="text" name="user_email" id="email" class="w-50"  required>
                            </p>
                            <!-- <p>
                                <img src="https://test.bytebunch.com/wp-content/themes/bbblog/lib/captcha/contact.php" alt="captcha code" style="margin-bottom:10px;border:1px solid #ccc; display:block;">
                                <input type="text" name="captcha" id="captcha" autocomplete="off" class="w-50" required>
                            </p> -->
                            <p><input type="submit" value="Verify" name="verify" style="max-width:20%;"></p>
                        </form>
                    </div><!--web_boxp-->
                </div><!--col-md-8-->
                <div class="col-md-4 login-col">
                    <?php get_sidebar(); ?>
                </div><!--col-md-4-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->
<?php get_footer(); ?>