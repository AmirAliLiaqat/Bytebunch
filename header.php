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
<body>

  <!-------------------- Header Start -------------------->
  <header>
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
          ?>
        </div><!--collapse navbar-collapse-->
      </div><!--container-->
    </nav>
  </header>
  <!-------------------- Header End -------------------->
    