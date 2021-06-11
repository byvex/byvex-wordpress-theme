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
      &copy; <?php echo date('Y'); ?>
      <a href="<?php echo home_url(); ?>" class="fw-bold link-light"><?php echo get_bloginfo('name'); ?></a>
    </div>
  </div><!-- close .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>