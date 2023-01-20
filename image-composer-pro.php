
<?php 
/*
Plugin Name: Image Composer Pro
Plugin URI: https://www.example.com
Description: A plugin for composing images.
Version: 1.0.0
Author: John Doe
Author URI: https://www.example.com
License: GPLv2 or later
Text Domain: image-composer-pro
*/

// Register the plugin
function register_image_composer_pro() {
    $plugin = new Image_Composer_Pro();
    $plugin->register_shortcodes();
}
add_action( 'plugins_loaded', 'register_image_composer_pro' );

// Enqueue public assets
function image_composer_pro_enqueue_scripts() {
    wp_enqueue_script( 'image-composer-pro-script', plugins_url( '/public/js/image-composer-pro.js', __FILE__ ), array(), '1.0.0', true );
    wp_enqueue_style( 'image-composer-pro-style', plugins_url( '/public/css/image-composer-pro.css', __FILE__ ), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'image_composer_pro_enqueue_scripts' );