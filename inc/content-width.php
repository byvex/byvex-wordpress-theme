<?php

/**
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @package Byvex
 */

function byvex_content_width()
{
  $GLOBALS['content-width'] = apply_filters('byvex_content_width', 1400);
}
add_action('after_setup_theme', 'byvex_content_width', 0);
