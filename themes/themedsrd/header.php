<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Maxence LEBLOND">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header role="banner" class="header">
      <div class="header__container">

        <div class="search">Recherche</div>

        <div class="header__left">
          <div><?php require get_template_directory() . '/templates/header/social-media.php'; ?></div>
          <div>
            <?php wp_nav_menu([
              'theme_location' => 'main-menu-left',
              'container_class' => 'menu',
              'menu_class' => 'menu__left',
            ]); ?>
          </div>
        </div>

        <div class="header__middle">
          <?php require get_template_directory() . '/templates/header/logo.php'; ?>
        </div>

        <div class="header__right">
          <div></div>
          <div>
            <?php wp_nav_menu([
              'theme_location' => 'main-menu-right',
              'container_class' => 'menu',
              'menu_class' => 'menu__right',
            ]); ?>
          </div>
        </div>
      </div>
    </header>