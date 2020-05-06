<!-- start header.php -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/037b8e2be6.js" crossorigin="anonymous"></script>
  </head>
  <body <?php body_class(); ?>>
    <nav id="side-nav">
      <!-- <ul>
        <li><a href="#">About Me</a></li>
        <li><a href="#">Resume</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Dev-Notes</a></li>
        <li><a href="#">Contact</a></li>
      </ul> -->
      <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>
    <div id="container">
      <header class="page-width">
        <div id="navToggleBtnContainer"><button onclick="toggleNav()"><i class="fas fa-bars"></i><i style="display: none;" class="fas fa-times"></i></button></div>
        <div>James Hill</div>
        <nav id="main-nav">
          <!-- <ul>
            <li><a href="#">About Me</a></li>
            <li><a href="#">Resume</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Dev-Notes</a></li>
            <li><a href="#">Contact</a></li>
          </ul> -->
          <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>
        <div id="downloadBtnContainer"><i class="fas fa-file-download"></i></div>
      </header>
      <!-- end header.php -->
