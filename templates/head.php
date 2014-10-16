<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Averia+Serif+Libre:400,700' rel='stylesheet' type='text/css'>

  <?php wp_head(); ?>
  
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
  <?php $upload_dir = wp_upload_dir(); ?>
  <link rel="shortcut icon" href="<?php echo $upload_dir['baseurl']; ?>/2014/06/Favicon.ico" type="image/x-icon">
</head>
