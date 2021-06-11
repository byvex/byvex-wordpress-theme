<?php

/**
 * Custom template tags for this theme
 *
 * @package Byvex
 */




function byvex_add_class_to_excerpt($excerpt)
{
  return str_replace('<p', '<p class="mb-0"', $excerpt);
}
add_filter('the_excerpt', 'byvex_add_class_to_excerpt');



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
      '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
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
      '<span><a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
    );

    echo '<span> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

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
      $categories_list = get_the_category_list(esc_html__(', ', 'byvex'));
      if ($categories_list) {
        /* translators: 1: list of categories. */
        printf('<span class="cat-links"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder2 small me-2" viewBox="0 0 16 16"><path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v7a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 12.5v-9zM2.5 3a.5.5 0 0 0-.5.5V6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5zM14 7H2v5.5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5V7z" /></svg>' . esc_html__('%1$s', 'byvex') . '</span>', $categories_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      }

      /* translators: used between list items, there is a space after the comma */
      $tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'byvex'));
      if ($tags_list) {
        /* translators: 1: list of tags. */
        printf('<span class="tags-links"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags small me-2" viewBox="0 0 16 16"><path d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z" /><path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" /></svg>' . esc_html__('%1$s', 'byvex') . '</span>', $tags_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      }
    }
  }
endif;



// Print the next and previous posts navigation.
if (!function_exists('byvex_post_navigation')) {
  function byvex_post_navigation()
  {
    the_post_navigation(
      array(
        'prev_text' => '<span>' . esc_html__('<&nbsp;', 'byvex') . '</span> <span>%title</span>',
        'next_text' => '<span>%title</span> <span>' . esc_html__('&nbsp;>', 'byvex') . '</span>',
      )
    );
  }
}
