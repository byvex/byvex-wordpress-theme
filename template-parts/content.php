<?php

/**
 * @package Byvex
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title default-max-width text-break"><?php the_title() ?></h1>
		<p>Posted under <?php the_category(', ', 'vg'); ?> On <?php byvex_posted_on(); ?> By <?php byvex_posted_by(); ?> </p>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<footer class="entry-footer default-max-width">
		<?php byvex_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article>