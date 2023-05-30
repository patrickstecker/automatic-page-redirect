<?php

/*
Plugin Name: Automatic logged-in Page Redirect
Plugin URI: https://github.com/patrickstecker/automatic-page-redirect/
Description: Redirect logged in or logged out users seperately to different urls. Either with a custom field or with a query param in the url of the link.
Version: 1.1.0
Author: Patrick Stecker
Author URI: https://patrickstecker.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Requires plugins: advanced-custom-fields
*/

function redirect_logged_in_users() {
  // Get the redirect link from the custom field
  if (isset($_GET['redirect_logged_in'])) {
    $redirect_link_logged_in = $_GET['redirect_logged_in'];
  } else {
    $redirect_link_logged_in = get_field('redirect_to_page_if_logged_in');
  }
  if (isset($_GET['redirect_logged_out'])) {
    $redirect_link_logged_out = $_GET['redirect_logged_out'];
  } else {
    $redirect_link_logged_out = get_field('redirect_to_page_if_not_logged_in');
  }

  // Check if the redirect link is set and different from the current page
  if ($redirect_link_logged_in) {
    // Check if the current user is logged in
    if (is_user_logged_in()) {
      // Redirect to the custom redirect link
      wp_redirect($redirect_link_logged_in);
      exit;
    }
  }
  if ($redirect_link_logged_out) {
    // Check if the current user is logged in
    if (!is_user_logged_in()) {
      // Redirect to the custom redirect link
      wp_redirect($redirect_link_logged_out);
      exit;
    }
  }
}

add_action('template_redirect', 'redirect_logged_in_users');
