<?php
function greenblue_theme_setup() {
  add_theme_support('title-tag');
  register_nav_menus(array(
    'main-menu' => __('Main Menu', 'greenblue'),
    'footer-menu' => __('Footer Menu', 'greenblue'),
  ));
}
add_action('after_setup_theme', 'greenblue_theme_setup');

function greenblue_enqueue_styles() {
  wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
  wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css');
  wp_enqueue_style('theme-style', get_stylesheet_uri());
  wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'greenblue_enqueue_styles');
?>
