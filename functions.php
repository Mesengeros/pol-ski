<?php

/**
 * Load our custom parcel-built CSS and JavaScript.
 */
add_action('wp_enqueue_scripts', function () {
  // Load our custom CSS.
  wp_enqueue_style('parcel', get_stylesheet_directory_uri() . '/dist/main.css', array(), '1.0');

  // Load our custom scripts.
  wp_enqueue_script('parcel', get_stylesheet_directory_uri() . '/dist/main.js', array(), '1.0', true);
});