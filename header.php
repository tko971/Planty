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
 <nav id="menu">
  <ul>
    <li class="contacter"><a href="localhost/wordpress/nous-rencontrer/" title="contacter">Nous contacter</a></li>
    <li class="admin"><a href="" title="admin">Admin</a></li>
    <li class="commander"><a href="localhost/wordpress/commander/" title="commander">Commander</a></li>
  </ul>
 </nav>
</header>
<div id="container">
<main id="content" role="main">