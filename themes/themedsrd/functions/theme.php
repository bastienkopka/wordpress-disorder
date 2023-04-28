<?php

declare(strict_types=1);

function themedsrd_menu(): void {
	register_nav_menu('main-menu-left', __('Menu principal gauche'));
	register_nav_menu('main-menu-right', __('Menu principal droit'));
}
add_action('init', 'themedsrd_menu');

function themedsrd_styles(): void {
	wp_register_style('reset', 'https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css');
	wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

	wp_enqueue_style('reset');
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('style_css', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'themedsrd_styles');