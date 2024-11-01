<?php

/*
 * Plugin Name: Simply Bootstrap
 * Description: Include the Bootstrap Framework CSS and JS
 * Version: 1.1
 * Author: Lee Collings
 * Author URI: https://leecollings.co
 */


function simply_bootstrap_admin_menu() {
    
    // Create Appearance submenu item
    add_theme_page(
        'Simply Bootstrap Settings',
        'Bootstrap',
        'edit_theme_options',
        'simply-bootstrap',
        'simply_bootstrap_settings_contents'
    );
    
    add_action('admin_init', 'simply_bootstrap_register_settings');
    
}
function simply_bootstrap_register_settings() {
    
    // Register settings
    register_setting('simply-bootstrap', 'simply-bootstrap-css');
    register_setting('simply-bootstrap', 'simply-bootstrap-js');
    
    
}
function simply_bootstrap_settings_contents() {
    
    include plugin_dir_path(__FILE__).'admin/settings.php';
    
}
add_action('admin_menu', 'simply_bootstrap_admin_menu');
 
function simply_bootstrap_enqueue_scripts() {
    
    // Check if CSS option is checked
    if(get_option('simply-bootstrap-css')) {
        
        // Enqueue CSS
        wp_enqueue_style('simply-bootstrap-css', plugin_dir_url(__FILE__).'bootstrap/4.5.3/css/bootstrap.min.css');
    }
    
    // Check if JS option is checked
    if(get_option('simply-bootstrap-js')) {
        
        // Enqueue JS
        wp_enqueue_script('simply-bootstrap-js', plugin_dir_url(__FILE__).'bootstrap/4.5.3/js/bootstrap.bundle.min.js', array(jQuery));
        
    }
    
}
add_action('wp_enqueue_scripts', 'simply_bootstrap_enqueue_scripts');