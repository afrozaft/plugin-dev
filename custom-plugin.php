<?php
/**
 * Plugin Name: Employee Management System
 * Plugin URI: https://www.example.com
 * Description: A simple CRUD employee management system plugin.
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
    add_menu_page('Employee System | Employee Management Sytem', 'Employee System ', 'manage_options', 'employee-system', 'ems_crud_system', 'dashicons-businessman', 26);
}

// Handle the callback function of the admin menu
function ems_crud_system(){

    echo "<h1>Welcome To Employee Management System</h1>";
}


?>