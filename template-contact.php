<?php
/*
Template Name: Contact Template.
*
* @package ByteBunch
*/ 
get_header();
?>

<?php

    if(isset($_POST['submitted'])) {
        $username = $_POST['contactName'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];

        if(trim($username) === '') {
            $nameError = 'Please enter your name.';
            $hasError = true;
        } else {
            $name = trim($username);
        }

        if(trim($email) === '')  {
            $emailError = 'Please enter your email address.';
            $hasError = true;
        } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($email))) {
            $emailError = 'You entered an invalid email address.';
            $hasError = true;
        } else {
            $email = trim($email);
        }

        if(trim($comments) === '') {
            $commentError = 'Please enter a message.';
            $hasError = true;
        } else {
            if(function_exists('stripslashes')) {
                $comments = stripslashes(trim($comments));
            } else {
                $comments = trim($comments);
            }
        }

        if(!isset($hasError)) {

            $admin_email = get_option('admin_email');

            $subject = 'Contact Mail From '. $email;
            $body = "Name: $name \n\n Email: $email \n\n Comments: $comments";
            $headers = 'From: '. $admin_email;

            wp_mail($admin_email, $subject, $body, $headers);
            $emailSent = true;
        }

    } 
?>
    <!-------------------- Section Start -------------------->
    <section>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.6525990683112!2d74.35811671542261!3d31.423696259052836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391907f981d3f509%3A0x45c363073ca58a20!2sByteBunch!5e0!3m2!1sen!2s!4v1640074953441!5m2!1sen!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div><!--map-->
        <div class="container section-row">
            <div class="row justify-content-end">
                <div class="col-xs-12 col-sm-5 col-md-5" style="background-color: #fff; padding: 20px;">
                    <h2 class="text-center">Get in Touch </h2>
                    <p>Please fill out the form below and we will get back to you within 1-2 business days. We look forward to serving you!</p>
                    <div class="entry-content">
                        <?php if(isset($emailSent) && $emailSent == true) { ?>
                            <div class="message">
                                <span>Thanks, your email was sent successfully.</span>
                                <i onclick="this.parentElement.remove();">&#10060;</i>
                            </div><!--message-->
                        <?php } else { ?>
                            <?php the_content(); ?>
                            <?php if(isset($hasError) || isset($captchaError)) { ?>
                                <div class="message">
                                    <span>Sorry, an error occured.</span>
                                    <i onclick="this.parentElement.remove();">&#10060;</i>
                                </div><!--message-->
                            <?php } ?>

                            <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
                                <ul class="contactform list-unstyled mb-0">
                                    <li>
                                        <label for="contactName">Name:</label>
                                        <input type="text" name="contactName" class="m-0 form-control w-100" id="contactName" value="<?php if(isset($username)) echo $username;?>" class="required requiredField" />
                                        <?php if(isset($nameError) != '') { ?>
                                            <div class="message">
                                                <span><?=$nameError;?></span>
                                                <i onclick="this.parentElement.remove();">&#10060;</i>
                                            </div><!--message-->
                                        <?php } ?>
                                    </li>

                                    <li>
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="m-0 form-control w-100" id="email" value="<?php if(isset($email))  echo $email;?>" class="required requiredField email" />
                                        <?php if(isset($emailError) != '') { ?>
                                            <div class="message">
                                                <span><?=$emailError;?></span>
                                                <i onclick="this.parentElement.remove();">&#10060;</i>
                                            </div><!--message-->
                                        <?php } ?>
                                    </li>

                                    <li><label for="commentsText">Message:</label>
                                        <textarea name="comments" class="m-0 form-control mb-2" id="commentsText" rows="8" cols="30" class="required requiredField"><?php if(isset($comments)) { if(function_exists('stripslashes')) { echo stripslashes($comments); } else { echo $comments; } } ?></textarea>
                                        <?php if(isset($commentError) != '') { ?>
                                            <div class="message">
                                                <span><?=$commentError;?></span>
                                                <i onclick="this.parentElement.remove();">&#10060;</i>
                                            </div><!--message-->
                                        <?php } ?>
                                    </li>

                                    <li>
                                        <input type="submit" class="send w-100" value="Send email">
                                    </li>
                                </ul>
                                <input type="hidden" name="submitted" id="submitted" value="true" />
                            </form>
                        <?php } ?>
                    </div><!--entry-content-->
                </div><!--col-md-5-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-------------------- Section End -------------------->

<?php get_footer(); ?>