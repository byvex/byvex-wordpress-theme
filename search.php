<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Byvex
 */

get_header();
?>
<div class="container py-4">

	<?php
	if (have_posts()) :
	?>

		<header class="page-header alignwide">
			<h1 class="page-title">
				<?php
				/* translators: %s: Search term. */
				printf(
					esc_html__('Results for "%s" ', 'byvex'),
					'<span>' . esc_html(get_search_query()) . '</span>'
				);
				?>
			</h1>
			<p class="search-result-count default-max-width lead fw-normal">
				<?php
				printf(
					esc_html(
						/* translators: %d: The number of search results. */
						_n(
							'We found %d result for your search.',
							'We found %d results for your search.',
							(int) $wp_query->found_posts,
							'byvex'
						)
					),
					(int) $wp_query->found_posts
				);
				?>
			</p>
		</header><!-- .page-header -->
		<div class="loop-container">
			<?php
			// Start the Loop.
			while (have_posts()) :
				the_post();
				get_template_part('template-parts/content-excerpt');
			endwhile; // End the loop.
			?>
		</div>
	<?php
		byvex_the_posts_pagination();
	else :
		get_template_part('template-parts/content-none');
	endif;
	?>

</div>
<?php
get_footer();
