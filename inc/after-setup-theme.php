<?php

/**
 * Theme support
 *
 * @package Byvex
 */

if (!function_exists('byvex_setup')) :
  /**
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function byvex_setup()
  {

    add_theme_support('automatic-feed-links');
    add_theme_support(
      'custom-logo',
      array(
        'height' => 100,
        'weight' => 100,
        'flex-height' => true,
        'flex-weight' => true,
      )
    );
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support(
      'html5',
      array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        'navigation-widgets'
      )
    );
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus(array(
      'primary' => esc_html__('Primary', 'byvex'),
    ));

    function byvex_add_editor_styles()
    {
      add_editor_style('assets/css/bootstrap.min.css');
    }
    add_action('admin_init', 'byvex_add_editor_styles');

    /**
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Byvex, use a find and replace
     * to change 'byvex' to the name of your theme in all the template files.
     */
    // load_theme_textdomain('byvex', get_template_directory() . '/languages');

  }
endif;
add_action('after_setup_theme', 'byvex_setup');