<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="theme-color" content="#000">
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/tether/tether.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/theme/css/style.css">
  <link rel="preload" as="style" href="<?php echo get_template_directory_uri(); ?>/assets/style/css/mbr-additional.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/css/mbr-additional.css" type="text/css">
  
</head>
<body>