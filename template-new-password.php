<?php
/**
 * Template Name: New Password
 *
 * @package ByteBunch
*/
get_header();
?>

<?php

require_once 'config.php';

if(isset($_POST['update'])) {
    $id = $_GET['id'];
    $pass = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $password = wp_hash_password( $pass );

    if(strlen($pass) > 6 && strlen($pass) < 100) {
        if($pass === $cpassword) {
            $table_name = $wpdb->prefix . "users";
            $update_password = "UPDATE $table_name SET  `user_pass`= '$password' WHERE `ID` = '$id'";
            $update_password_query = mysqli_query($conn, $update_password) or die('Query Failed');

            if($update_password_query) {
                $message[] = 'Password Updated Successfully...';
            }
        }  else {
            $message[] = 'Password does`t match...';
        }
    } else {
        $message[] = 'Password must be between 6 characters and 100 characters...';
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
            <div class="row mt-4">
                <div class="col-md-8 login-col">
                    <div class="my-2 p-3" style="background: #fff;">
                        <h2><?php the_title(); ?></h2>
                    </div><!--my-2-->
                    <div class="web_boxp my-4 p-3" style="background: #fff;">
                        <form action="" class="jquery_validated_form" method="post">
                            <p>
                                <label for="password">
                                    <strong>New Password: </strong>
                                    <span class="forum_star">*</span>
                                </label><br>
                                <input type="text" name="password" id="password" class="w-50"  required>
                            </p>
                            <p>
                                <label for="cpassword">
                                    <strong>Confirm Password: </strong>
                                    <span class="forum_star">*</span>
                                </label><br>
                                <input type="text" name="cpassword" id="cpassword" class="w-50"  required>
                            </p>
                            <p><input type="submit" value="Update" name="update" style="max-width:20%;"></p>
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