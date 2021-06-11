<?php

/**
 * Byvex functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Byvex
 */

// Set up theme defaults and register support for various WordPress features
require get_template_directory() . '/inc/after-setup-theme.php';


// Set the content width in pixels, based on the theme's design and stylesheet
require get_template_directory() . '/inc/content-width.php';


// Customizer additions
require get_template_directory() . '/inc/customizer.php';


// Enqueue scripts and styles
require get_template_directory() . '/inc/enqueue-scripts.php';


// The Password Form
require get_template_directory() . '/inc/password-form.php';


// Custom template functions for this theme
require get_template_directory() . '/inc/template-functions.php';


// Custom template tags for this theme
require get_template_directory() . '/inc/template-tags.php';


// Register widget area
require get_template_directory() . '/inc/widgets-init.php';


// Load custom WordPress nav walker
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';


// Load plugin compatibility file
// require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';
