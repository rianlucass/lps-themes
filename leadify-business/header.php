<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <h2><?php bloginfo('name'); ?></h2>
  <nav>
    <a href="<?php echo home_url(); ?>">Home</a>
    <a href="#">Sobre</a>
    <a href="#">Contato</a>
  </nav>
</header>
