<?php

/**
 * Password form
 *
 * @package Byvex
 */

function byvex_password_form()
{
	global $post;
	$label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);
	$o = '<form action="' . esc_url(home_url('wp-login.php?action=postpass', 'login_post')) . '" method="post">
    <div class="d-block mb-3">' . __("To view this protected post, enter the password below:", "byvex") . '</div>
    <div class="mb-3">
	<label for="' . $label . '" class="form-label visually-hidden">' . _("Password:", "byvex") . ' </label>
	<div class="d-flex">
	<input name="post_password" id="' . $label . '" type="password" placeholder="Enter password here" size="20" maxlength="20" class="form-control me-2 d-inline-block" /><input type="submit" name="Submit" value="' . esc_attr("Submit", "byvex") . '" class="btn btn-primary"/></div></div>
    </form>';
	return $o;
}
add_filter('the_password_form', 'byvex_password_form');
