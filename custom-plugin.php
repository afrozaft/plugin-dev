<?php
/**
 * Plugin Name: Custom Plugin
 * Plugin URI: https://www.example.com
 * Description: This is a custom plugin
 * Plugin URI: https://www.example.com
 * Author: Afroz Alam
 * Author URI: https://www.github.com/afrozaft/custom-plugin
 * Version: 1.0.0
 * Requires at least: 6.3.2
 * Requires PHP: 7.0
 * Text Domain: cp
 *
 */

 // Calling action hook to add admin menu
add_action('admin_menu', 'cp_add_admin_menu');

// Add a custom menu in the admin panel
function cp_add_admin_menu() {
    add_menu_page('Custom Plugin Menu', 'Custom Plugin', 'manage_options', 'cp-plugin', 'cp_handle_admin_menu', 'dashicons-admin-settings', 26);
}

// Handle the callback function of the admin menu
function cp_handle_admin_menu(){

    echo "<h2>Welcome To Custom Plugin!!!</h2>";
}


?>