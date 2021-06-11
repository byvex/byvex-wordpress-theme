<?php

/**
 * Template part for displaying post archives and search results
 *
 *  @package Byvex
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('h-100'); ?>>
  <div class="card h-100 shadow-sm">
    <?php
    if (has_post_thumbnail()) :
    ?>
      <a href="<?php the_permalink(); ?>">
        <?php
        the_post_thumbnail('thumbnail', array('class' => 'card-img-top h-auto'));
        ?>
      </a>
    <?php
    endif;
    ?>
    <div class="card-header h5">
      <?php the_title(); ?>
    </div>
    <div class="card-body">
      <small class="d-block text-truncate">
        <?php byvex_posted_on();
        ?>
        &nbsp;By&nbsp;
        <?php
        // esc_url(get_author_posts_url(get_the_author_meta('ID')));
        byvex_posted_by();
        ?>
      </small>
      <a href="<?php the_permalink(); ?>" class="text-decoration-none text-body">
        <?php the_excerpt(); ?>

      </a>
    </div>
    <div class="card-footer d-flex justify-content-between
    <?php
    if (('post' !== get_post_type())) :
      echo 'd-none';
    endif;
    ?>
    ">
      <?php
      byvex_entry_footer();
      ?>
    </div>
  </div>
</article>