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
          <ul class="navbar-nav text-center">
            <li class="nav-item" style="background-color:#e55a21;">
              <a class="nav-link active" aria-current="page" href="index.html">
                <img src="https://img.icons8.com/glyph-neue/48/FFFFFF/home.png"/><br>
                HOME
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="login.html">
                <img src="https://img.icons8.com/glyph-neue/48/CCCCCC/guest-male.png"/><br>
                LOG IN
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="register.html">
                <img src="https://img.icons8.com/glyph-neue/48/CCCCCC/add-user-male.png"/><br>
                REGISTER
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="contact.html">
                <img src="https://img.icons8.com/glyph-neue/48/CCCCCC/phone.png"/><br>
                CONTACT
                </a>
            </li>
          </ul>
        </div><!--collapse navbar-collapse-->
      </div><!--container-->
    </nav>
  </header>
  <!-------------------- Header End -------------------->
    