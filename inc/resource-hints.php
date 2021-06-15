<?php

/**
 * Preload External Resources
 *
 * @package Byvex
 */

function byvex_preload($hints, $relation_type)
{
	if ('preconnect' === $relation_type && get_theme_mod('cdn_assets_setting') === 'yes') {
		// uncomment the code below when using jsdelivr.net cdn
		// $hints[] = [
		// 	'href'        => 'https://cdn.jsdelivr.net/',
		// 	'crossorigin' => 'anonymous',
		// ];

		// uncomment the code below when using fontawesome.com cdn
		// $hints[] = [
		// 	'href'        => 'https://use.fontawesome.com/',
		// 	'crossorigin' => 'anonymous',
		// ];

		// google font cdn
		$hints[] = [
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		];
	}
	return $hints;
}

add_filter('wp_resource_hints', 'byvex_preload', 10, 2);
