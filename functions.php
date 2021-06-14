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


// Enqueue scripts and styles
require get_template_directory() . '/inc/enqueue-scripts.php';


// Add preload for CDN
require get_template_directory() . '/inc/resource-hints.php';


// Custom template functions for this theme
require get_template_directory() . '/inc/template-functions.php';


// Custom template tags for this theme
require get_template_directory() . '/inc/template-tags.php';


// Register widget area
require get_template_directory() . '/inc/widgets-init.php';


// Load custom WordPress nav walker
require get_template_directory() . '/inc/bootstrap_walker_nav_menu.php';


// Load plugin compatibility file
// require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';
