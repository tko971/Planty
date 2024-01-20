<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
 <div id="branding">
  <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
  <a href="http://localhost/wordpress/"><img src="<?= get_stylesheet_directory_uri() . "/images/Logo source.png"?>" alt="logo" ></a>
  </div>
 </div>

 <div class="menuderoulant">
 <button class="deroulant">MENU</button>
  <?php
  wp_nav_menu(
    [
      "theme_location"=>"main-menu",
      "container"=>"nav",
      "container_id"=>"menu",
      "menu_class"=>"menu",
    ]
  ); 
  ?>
  </div>
</header>
<div id="container">
<main id="content" role="main">