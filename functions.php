<?php

if (!function_exists('coastline_theme_support')) {
  function coastline_theme_support() {
    add_theme_support('title-tag');
    add_theme_support( 'block-templates' );
    add_theme_support( 'block-template-parts' );
    add_theme_support('custom-logo');
    add_theme_support('wp-block-styles');
    add_editor_style('style.css');
    add_theme_support( 'woocommerce');
  }
}
add_action( 'after_setup_theme', 'coastline_theme_support' );

function coastline_register_styles() {
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('coastline-style', get_template_directory_uri() . "/style.css", [], $version, 'all');
}

add_action('wp_enqueue_scripts', 'coastline_register_styles');

function coastline_register_scripts() {
  wp_enqueue_script('coastline-script', get_template_directory_uri() . "/assets/js/main.js", [], '1.0', 'true');
}

add_action('wp_enqueue_scripts', 'coastline_register_scripts');
?>