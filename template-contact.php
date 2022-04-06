<?php
/**
 * Template Name: Contact Template.
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
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.6525990683112!2d74.35811671542261!3d31.423696259052836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391907f981d3f509%3A0x45c363073ca58a20!2sByteBunch!5e0!3m2!1sen!2s!4v1640074953441!5m2!1sen!2s" 
            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div><!--map-->
        <div class="container section-row">
            <div class="row  justify-content-end">
                <div class="col-md-5" style="background-color: #fff; padding: 20px;">
                    <h2 class="text-center">Get in Touch </h2>
                    <p>Please fill out the form below and we will get back to you within 1-2 business days. We look forward to serving you!</p>
                    <form action="" method="post">
                        <input type="text" name="user_name" placeholder="Name*" required>
                        <input type="text" name="user_subject" placeholder="Subject*" required>
                        <input type="text" name="user_email" placeholder="Email*" required>
                        <textarea name="user_message" id="" cols="30" rows="5" spellcheck="false" placeholder="Message*" required></textarea>
                        <img src="images/contact.php" class="text-left">
                        <input type="text" name="captcha" placeholder="Type the digits shown in above image." required>
                        <input type="submit" value="Submit">
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