<?php

/**
 * Displays the footer widget area.
 *
 * @package Byvex
 */

if (is_active_sidebar('sidebar-1')) : ?>
  <div class="bg-light border-top">
    <div class="container my-4">
      <aside class="widget-area row gy-3 justify-content-between">
        <?php dynamic_sidebar('sidebar-1'); ?>
      </aside><!-- .widget-area -->
    </div>
  </div>

<?php endif; ?>