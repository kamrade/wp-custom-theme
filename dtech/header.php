<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,900" rel="stylesheet">
  <title><?php bloginfo('name') ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header class="site-header">
    <div class="container">
      <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name '); ?></a></h1>
      <h5><?php bloginfo('description'); ?></h5>
      <hr/>
    </div>
  </header>
