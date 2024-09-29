<?php
// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit;
}

function mystery_gift_admin_menu() {
    add_menu_page(
        'Mystery Gift Settings',    
        'Mystery Gift',             
        'manage_options',           
        'mystery-gift-settings',   
        'mystery_gift_settings_page', 
        plugin_dir_url(__FILE__) . '../img/mystery-gift-plugin-icon.png',           
        75                         
    );
}

add_action('admin_menu', 'mystery_gift_admin_menu');

function mystery_gift_settings_page() {
    ?>
<div class="wrap">
    <h1>WooCommerce Mystery Gift</h1>
    <?php 

    if (isset($_POST['mystery_gift_threshold']) || isset($_POST['mystery_gift_title']) || isset($_POST['mystery_gift_position']) || isset($_POST['mystery_gift_buttontext']) || isset($_POST['mystery_gift_url']) || isset($_POST['mystery_gift_button_color']) || isset($_POST['mystery_gift_notification_color']) || isset($_POST['mystery_gift_message'])) {
      
        check_admin_referer('mystery_gift_save_settings');

        
        update_option('mystery_gift_title', sanitize_text_field($_POST['mystery_gift_title']));
        update_option('mystery_gift_threshold', sanitize_text_field($_POST['mystery_gift_threshold']));
        update_option('mystery_gift_position', sanitize_text_field($_POST['mystery_gift_position']));
        update_option('mystery_gift_buttontext', sanitize_text_field($_POST['mystery_gift_buttontext']));
        update_option('mystery_gift_url', sanitize_text_field($_POST['mystery_gift_url']));
        update_option('mystery_gift_button_color', sanitize_text_field($_POST['mystery_gift_button_color']));
        update_option('mystery_gift_notification_color', sanitize_text_field($_POST['mystery_gift_notification_color']));
        update_option('mystery_gift_message', sanitize_text_field($_POST['mystery_gift_message']));
    }

        $giftTitle = get_option('mystery_gift_title', 'Get Mystery Gift'); 
        $giftThreshold = get_option('mystery_gift_threshold', 150); 
        $selectedPosition = get_option('mystery_gift_position', 'none'); 
        $mysteryButtonText = get_option('mystery_gift_buttontext', 'Continue Shopping'); 
        $mysteryGiftUrl = get_option('mystery_gift_url', '#'); 
        $mysteryGiftBtnColor = get_option('mystery_gift_button_color', '#226F54'); 
        $mysteryGiftNotificationColor = get_option('mystery_gift_notification_color', '#9ED1AD');
        $mysteryGiftMessage = get_option('mystery_gift_message', 'Your mystery gift awaits you');
       

        include_once plugin_dir_path(__FILE__) . '../admin/template/mystery-gift-admin-html.php';
}

function mystery_gift_admin_scripts($hook) {

    if($hook != 'toplevel_page_mystery-gift-settings') {
        return;
    }

    wp_enqueue_style('mystery-gift-admin-css', plugin_dir_url(__FILE__) . '../css/admin.css');
    wp_enqueue_script('wp-color-picker');
    wp_enqueue_script('mystery-gift-admin-js', plugin_dir_url(__FILE__) . '../js/admin.js');
}

add_action('admin_enqueue_scripts', 'mystery_gift_admin_scripts');