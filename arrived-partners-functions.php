<?php
/*
 * Plugin Name: Arrived Partners Functions
 * description: Functions for ArrivedPartners.com
 * Version: 1.0
 * Author: Parker Nilson
 * Author URI: https://github.com/parkernilson
 * License: Apache License 2.0
 */

//TODO: comment all of this

/**************************************
 * Enqueue custom javascript
 */
function arrivedpartners_enqueue_scripts() {
    //enqueue front end js for the inquiry form
    wp_enqueue_script('submit-property-owner-inquiry', plugins_url('arrived-partners-functions/js/submit-property-owner-inquiry.js'), array('jquery'), '1.0.1');
}

add_action('wp_enqueue_scripts', 'arrivedpartners_enqueue_scripts');

//TODO: See: https://www.smashingmagazine.com/2011/09/how-to-create-a-wordpress-plugin/#:~:text=To%20create%20a%20plugin%2C%20all,php.
//TODO: include register_activation_hook()
//TODO: include register_deactivation_hook()
//TODO: include register_uninstall_hook() or uninstall.php



//TODO: get the rest API working to send email in response to property owner inquiry.
//set up a rest api endpoint to handle property owner inquiries
// add_action('rest_api_init', function() {
//     register_rest_route('arrivedpartners/v1', '/property-owner-inquiry', array(
//         'methods' => 'POST',
//         'callback' => 'handle_property_owner_inquiry'
//     ));
// });

/** 
 * REST Endpoint which handles property owner inquiries
 */
// function handle_property_owner_inquiry(WP_REST_Request $request) {
//     $dump = var_dump($request);
//     file_put_contents(__FILE__ . "/test.txt", $dump);
// }


?>