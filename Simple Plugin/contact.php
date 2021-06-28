<?php

/**
 * Plugin Name: Contact Form R3
 * Plugin URI:        ####
 * Description:       Contact plugin
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            REDKHAY
 * Author URI:        #
 * License:           GPL v2 or later
 * License URI:       #
 * Text Domain:       contact
 * Domain Path:       /languages
 */


//  require "core.php";



function hellow()
{
    ob_start();
    require ABSPATH . 'wp-content/plugins/contact/send.php';
    require ABSPATH . 'wp-content/plugins/contact/form.php';
    $html = ob_get_contents();
    ob_get_clean();
    return $html;
}

add_shortcode( "contact" , 'hellow');


?>
