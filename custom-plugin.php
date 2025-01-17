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

// Define the plugin path constant
define("EMS_PLUGIN_PATH", plugin_dir_path(__FILE__));

define("EMS_PLUGIN_URL", plugin_dir_url(__FILE__));
// Calling action hook to add admin menu
add_action('admin_menu', 'cp_add_admin_menu');

// Add a custom menu in the admin panel
function cp_add_admin_menu()
{
    add_menu_page('Employee System | Employee Management Sytem', 'Employee System ', 'manage_options', 'employee-system', 'ems_crud_system', 'dashicons-businessman', 26);

    // Add Submenu
    add_submenu_page('employee-system', 'Add Employee', 'Add Employee', 'manage_options', 'employee-system', 'ems_crud_system');

    // Add Submenu
    add_submenu_page('employee-system', 'List Employee', 'List Employee', 'manage_options', 'list-employee', 'ems_list_emmployee');
}


// Handle the callback function of the admin menu
function ems_crud_system()
{

    include_once(EMS_PLUGIN_PATH . 'pages/add-employee.php');
}

// Handle the callback function of the admin submenu
function ems_list_emmployee()
{

    include_once(EMS_PLUGIN_PATH . 'pages/list-employee.php');
}

// Activation of this plugin to create database table
register_activation_hook(__FILE__, 'ems_create_table');

function ems_create_table()
{

    global $wpdb;
    $table_prefix = $wpdb->prefix; //wp_
    $sql = "
    
        CREATE TABLE {$table_prefix}ems_form_data (
        `id` int NOT NULL AUTO_INCREMENT,
        `name` varchar(120) DEFAULT NULL,
        `email` varchar(80) DEFAULT NULL,
        `phoneNo` varchar(50) DEFAULT NULL,
        `gender` enum('male','female','other') DEFAULT NULL,
        `designation` varchar(50) DEFAULT NULL,
        PRIMARY KEY (`id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

    ";

    include_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    // Create wordpress page
    $pageData = [
        'post_title' => 'Employee Management System',
        'post_status' => 'publish',
        'post_type' => 'page',
        'post_content' => "This is sample content",
        'post_name' => 'employee-management-system-page'
    ];
    wp_insert_post($pageData);
}

// Uninstall this plugin to delete database table
register_uninstall_hook(__FILE__, 'ems_drop_table');

function ems_drop_table()
{

    global $wpdb;
    $table_prefix = $wpdb->prefix; //wp_

    $sql = "DROP TABLE IF EXISTS {$table_prefix}ems_form_data";

    $wpdb->query($sql);

    // Delete wordpress page
    $pageSlug = 'employee-management-system-page';
    $pageInfo = get_page_by_path($pageSlug);

    if (!empty($pageInfo)) {

        $pageId = $pageInfo->ID;

        wp_delete_post($pageId, true);
    }
}

// Enqueue scripts and styles
add_action('admin_enqueue_scripts', 'ems_add_plugin_assets');

function ems_add_plugin_assets()
{
    // css files
    wp_enqueue_style("ems-bootstrap-css", EMS_PLUGIN_URL . "css/bootstrap.min.css", array(), "1.0.0", "all");
    wp_enqueue_style("ems-datatable-css", EMS_PLUGIN_URL . "css/dataTables.dataTables.min.css", array(), "1.0.0", "all");
    wp_enqueue_style("ems-custom-css", EMS_PLUGIN_URL . "css/custom.css", array(), "1.0.0", "all");

    // js files
    wp_enqueue_script("ems-bootstrap-js", EMS_PLUGIN_URL . "js/bootstrap.min.js", array("jquery"), "1.0.0", true);
    wp_enqueue_script("ems-datatable-js", EMS_PLUGIN_URL . "js/dataTables.min.js", array("jquery"), "1.0.0", true);
    wp_enqueue_script("ems-validate-js", EMS_PLUGIN_URL . "js/jquery.validate.min.js", array("jquery"), "1.0.0", true);
    // wp_enqueue_script("ems-custom-js", EMS_PLUGIN_URL . "js/custom.js", array("jquery"), "1.0.0", true);

    wp_add_inline_script('ems-validate-js', file_get_contents(EMS_PLUGIN_URL . 'js/custom.js'));
}
