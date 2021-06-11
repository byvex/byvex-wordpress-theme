<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Byvex
 */

get_header();
?>
<div class="container py-4">
  <?php

  if (have_posts()) {

    // Load posts loop.
    while (have_posts()) {
      the_post();

      get_template_part('template-parts/content', 'excerpt');
    }

    // Previous/next page navigation.
    // twenty_twenty_one_the_posts_navigation();

  } else {

    // If no content, include the "No posts found" template.
    get_template_part('template-parts/content-none');
  }

  ?>
</div>
<?php

get_footer();
