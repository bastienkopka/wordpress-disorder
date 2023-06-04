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

  wp_enqueue_script('main_js', get_stylesheet_directory_uri() . '/assets/js/main.js');
}
add_action('wp_enqueue_scripts', 'themedsrd_styles');

// Réecrire la class DsrdMenu et ajouter une div

class DsrdMenu extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='sub-menu-wrap'><ul class='sub-menu'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
}