<?php
/*
 * Plugin Name: Arrived Partners Functions
 * description: Functions for ArrivedPartners.com
 * Version: 1.0
 * Author: Parker Nilson
 * Author URI: https://github.com/parkernilson
 * License: Apache License 2.0
 */

/**************************************
 * Enqueue custom javascript
 */
function arrivedpartners_enqueue_scripts() {
    //enqueue front end js for the inquiry form
    wp_enqueue_script('arrived-partners-functions', plugins_url('arrived-partners-functions/js/functions.js'), array('jquery'), '1.0.2');
}

add_action('wp_enqueue_scripts', 'arrivedpartners_enqueue_scripts');

//TODO: See: https://www.smashingmagazine.com/2011/09/how-to-create-a-wordpress-plugin/#:~:text=To%20create%20a%20plugin%2C%20all,php.
//TODO: include register_activation_hook()
//TODO: include register_deactivation_hook()
//TODO: include register_uninstall_hook() or uninstall.php

?>