<?php
/**
 * Plugin Name: WooCommerce Mystery Gift
 * Description: This plugin enhances the WooCommerce shopping experience by adding a mystery gift notification to the cart.
 * Version: 1.0
 * Author: Marko Jankovic
 * Text Domain: mystery-gift-woocommerce
 */

// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit;
}

// Include frontend and admin files
include_once plugin_dir_path(__FILE__) . 'frontend/index.php';
include_once plugin_dir_path(__FILE__) . 'admin/index.php';

// Enqueue CSS and JS
function mystery_gift_enqueue_scripts() {
    if (class_exists('WooCommerce')) {
        wp_enqueue_style('mystery-gift-css', plugin_dir_url(__FILE__) . 'css/public.css');
        wp_enqueue_script('mystery-gift-js', plugin_dir_url(__FILE__) . 'js/public.js', array('jquery'), '1.0', true);
        
        $giftThreshold = get_option('mystery_gift_threshold', 150);
        $mysteryGiftMessage = get_option('mystery_gift_message', 'Your mystery gift awaits you');

        wp_localize_script('mystery-gift-js', 'mysteryGiftData', array(
        'giftThreshold' => $giftThreshold,
        'mysteryGiftMessage' => $mysteryGiftMessage
    ));
    }
}

add_action('wp_enqueue_scripts', 'mystery_gift_enqueue_scripts');


//Add link to settings

function mystery_gift_add_settings_link($links) {
    $settings_link = '<a href="' . admin_url('admin.php?page=mystery-gift-settings') . '">Settings</a>';
    array_unshift($links, $settings_link);
    return $links;
}

add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'mystery_gift_add_settings_link');
