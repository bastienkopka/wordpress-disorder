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

        <!-- Social -->
        <div class="header__top">
          <div class="social-media"><?php require get_template_directory() . '/templates/header/social-media.php'; ?></div>
        </div>

        <!-- Mobile logo + Toggle -->
        <div class="header__mobile">
          <div class="header__logo">
            <?php require get_template_directory() . '/templates/header/logo.php'; ?>
          </div>

          <button class="header__toggle d-lg-none">
            <i class="fa-solid fa-bars"></i>
          </button>
        </div>

        <!-- Navigation -->
        <div class="header__navigation">
          <div class="header__navigation__left">
            <?php wp_nav_menu([
              'theme_location' => 'main-menu-left',
              'container_class' => 'menu',
              'menu_class' => 'menu__left',
            ]); ?>
          </div>

          <div class="header__logo header__logo--desktop">
            <?php require get_template_directory() . '/templates/header/logo.php'; ?>
          </div>

          <div class="header__navigation__right">
            <?php wp_nav_menu([
              'theme_location' => 'main-menu-right',
              'container_class' => 'menu',
              'menu_class' => 'menu__right',
            ]); ?>
          </div>
        </div>
      </div>
    </header>