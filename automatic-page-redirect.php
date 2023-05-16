<?php

/*
Plugin Name: Automatic logged-in Page Redirect
Plugin Url: https://github.com/patrickstecker/automatic-page-redirect/
Description: Redirect logged-in users to a custom page when they try to access a page. Works in combination with ACF Plugin. If you set the ACF Field "Redirect to Page if Logged in" (redirect_to_page_if_logged_in), then it will automatically redirect you from there if it is set.
Version: 1.0.1
Author: Patrick Stecker
Author URI: https://patrickstecker.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Requires plugins: advanced-custom-fields
*/

function redirect_logged_in_users() {
  // Get the redirect link from the custom field
  $redirect_link = get_field('redirect_to_page_if_logged_in');

  // Check if the redirect link is set and different from the current page
  if ($redirect_link) {
    // Check if the current user is logged in
    if (is_user_logged_in()) {
      // Redirect to the custom redirect link
      wp_redirect($redirect_link);
      exit;
    }
  }
}

add_action('template_redirect', 'redirect_logged_in_users');