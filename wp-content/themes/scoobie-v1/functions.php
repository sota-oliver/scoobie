<?php
if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    
    add_filter( 'widget_text', 'do_shortcode' );
}


// Default 
include 'functions/admin-login.php';
//
// Post types
// include 'functions/post-type/photos.php'; 