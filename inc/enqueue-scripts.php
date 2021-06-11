<?php

/**
 * Connect stylesheets & scripts
 *
 * @package Byvex
 */

function byvex_enqueue_scripts()
{
  // Webpack CSS Bundle
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), filemtime(get_template_directory() . "/assets/css/bootstrap.min.css"));

  // Style CSS
  wp_enqueue_style('byvex-style', get_stylesheet_uri());

  // Webpack JavaScript Bundle
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), filemtime(get_template_directory() . "/assets/js/bootstrap.min.js"), true);

  // Remove Block Styles
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
}
add_action('wp_enqueue_scripts', 'byvex_enqueue_scripts');
