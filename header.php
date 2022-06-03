<?php
/**
 * Header Template.
 *
 * @package ByteBunch
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body class="site-body">

  <!-------------------- Header Start -------------------->
  <header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-dark" style="padding: 0;">
      <div class="container">
        <?php the_custom_logo(); ?>
        <button
          class="navbar-toggler" type="button" data-bs-toggle="collapse"  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <?php 
            wp_nav_menu( array (
              'theme_location' => 'primary',
              'container' => ''
            ) );  
            if ( is_user_logged_in() ) {
              $current_user = wp_get_current_user();
              $username = $current_user->user_login;
              echo "<div class='user-profile'>
                <span><img src='https://img.icons8.com/glyph-neue/36/undefined/guest-male.png'/><br>$username</span>
                <div class='profile-options'>
                  <a href='".wp_logout_url('http://localhost/wordpress/login/')."'>Logout</a>
                </div>
              </div>";
            } 
          ?>
        </div><!--collapse navbar-collapse-->
      </div><!--container-->
    </nav>
  </header>
  <!-------------------- Header End -------------------->
    