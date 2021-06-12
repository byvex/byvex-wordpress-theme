<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Byvex
 */
?>

</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<footer id="colophon" class="site-footer mt-auto" role="contentinfo">

	<?php get_template_part('template-parts/footer-widgets'); ?>


	<div class="site-info bg-dark text-white">
		<div class="container pt-3 pb-4">

			<div class="row justify-content-between">
				<div class="col-sm-6">
					<p>&copy; <?php echo date('Y'); ?>
						<a href="<?php echo esc_html(home_url()); ?>" class="fw-bold link-light text-decoration-none" title="<?php echo get_bloginfo('name'); ?>"><?php echo get_bloginfo('name'); ?></a>
					</p>
				</div>
				<div class="col-sm-6 text-sm-end">
					<p>
						<a href="https://byvex.com" title="Crafted by Byvex Team" class="fw-bold link-light text-decoration-none" target="_blank" rel="noopener noreferrer nofollow">Byvex.com</a>
					</p>
				</div>
			</div>

		</div>
	</div><!-- close .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>