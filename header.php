<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head();?>
  </head>
  <body>
    <header class="header">
      <div class="menu-container">
        <a href="<?php echo get_home_url(); ?>">
            <img src="<?php bloginfo('template_directory');?>/img/svg/logo.svg" alt="Mon logo">
        </a>
        <?php wp_nav_menu(array('menu' => 'primary_menu')); ?>
      </div>
    </header>
    