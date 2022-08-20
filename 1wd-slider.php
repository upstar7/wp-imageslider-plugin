<?php
/*
    Plugin Name: iWD Slider
    Plugin URI: https://1stwebdesigner.com/
    Description: Slider Comment for WordPress
    Version: 1.0
    Author: Tony Yuan
    Author URI: https://istwebdesigner.com/
    License: GPLv2 or later
*/

    function fwds_slider_activation() {
    }
    register_activation_hook(__FILE__, 'fwds_slider_activation');
    function fwds_slider_deactivation() {
    }
    register_activation_hook(__FILE__, 'fwds_slider_deactivation');

    add_action( 'wp_enqueue_scripts', 'fwds_scripts');
    function my_custom_function() {
        wp_enqueue_script('jquery');
    }
    add_action('', 'my_custom_function')
?>
