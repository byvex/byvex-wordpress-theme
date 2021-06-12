<?php

/**
 * Custom template tags for this theme
 *
 * @package Byvex
 */


function byvex_add_class_to_excerpt($excerpt)
{
	return str_replace('<p', '<p class="mb-2"', $excerpt);
}
add_filter('the_excerpt', 'byvex_add_class_to_excerpt');



function byvex_excerpt_more($more)
{
	return '...';
}
add_filter('excerpt_more', 'byvex_excerpt_more');



if (!function_exists('byvex_posted_on')) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function byvex_posted_on()
	{
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if (get_the_time('U') !== get_the_modified_time('U')) {
			$time_string = '<time class="entry-date published visually-hidden" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr(get_the_date(DATE_W3C)),
			esc_html(get_the_date()),
			esc_attr(get_the_modified_date(DATE_W3C)),
			esc_html(get_the_modified_date())
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x('%s', 'post date', 'byvex'),
			'<a href="' . esc_url(get_permalink()) . '" title="' . esc_html(get_the_title()) . '" rel="bookmark" class="text-decoration-none">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;



if (!function_exists('byvex_posted_by')) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function byvex_posted_by()
	{
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x('%s', 'post author', 'byvex'),
			'<span><a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_html(get_the_author()) . '" class="text-decoration-none">' . esc_html(get_the_author()) . '</a></span>'
		);
		echo $byline; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
endif;



if (!function_exists('byvex_entry_footer')) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function byvex_entry_footer()
	{
		// Hide category and tag text for pages.
		if ('post' === get_post_type()) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list(esc_html__(' ', 'byvex'));
			if ($categories_list) {
				/* translators: 1: list of categories. */
				printf('<span class="cat-links me-1">' . esc_html__('%1$s', 'byvex') . '</span>', $categories_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list('', esc_html_x(' ', 'list item separator', 'byvex'));
			if ($tags_list) {
				/* translators: 1: list of tags. */
				printf('<span class="tags-links">' . esc_html__('%1$s', 'byvex') . '</span>', $tags_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}
	}
endif;



// Print the next and previous posts navigation.
if (!function_exists('byvex_the_post_navigation')) {
	function byvex_the_post_navigation()
	{
		the_post_navigation(
			array(
				'prev_text' => '<span>' . esc_html__('<&nbsp;', 'byvex') . '</span> <span>%title</span>',
				'next_text' => '<span>%title</span> <span>' . esc_html__('&nbsp;>', 'byvex') . '</span>',
			)
		);
	}
}


// Print numbered pagination
if (!function_exists('byvex_the_posts_pagination')) {
	/**
	 * Print the next and previous posts navigation.
	 *
	 * @return void
	 */
	function byvex_the_posts_pagination()
	{
		the_posts_pagination(
			array(
				'type' => 'list',
				'class' => 'my-2',
				'mid_size' => 1,
				'end_size' => 2,
			)
		);
	}
}
