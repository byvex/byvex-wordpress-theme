<?php

/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package Byvex
 */

/**
 *  Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$byvex_unique_id = wp_unique_id('search-');
?>

<form class="" method="get" action="<?php echo esc_url(home_url('/')); ?>">

  <label for="<?php echo esc_attr($byvex_unique_id); ?>" class="form-label mb-0">Enter your search term</label>
  <div class="d-flex">
    <input type="search" name="s" placeholder="..." id="<?php echo esc_attr($byvex_unique_id); ?>" class="form-control mb-2 me-1" />
    <input type="submit" value="<?php echo esc_attr_x('Search', 'submit button', 'byvex'); ?>" class="btn btn-primary mb-2" />
  </div>
</form>