<?php
// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit;
}

$giftTitle = get_option('mystery_gift_title', 'Get Mystery Gift'); 

$selectedPosition = get_option('mystery_gift_position', 'woocommerce_after_cart'); 

$mysteryButtonText = get_option('mystery_gift_buttontext', 'Continue Shopping');

$mysteryGiftUrl = get_option('mystery_gift_url', '#');

$mysteryGiftBtnColor = get_option('mystery_gift_button_color', '#226F54'); 

$mysteryGiftNotificationColor = get_option('mystery_gift_notification_color', '#9ED1AD');




function custom_gift_in_cart() {
    global $giftTitle;
    global $mysteryButtonText;
    global $mysteryGiftUrl;
    global $mysteryGiftBtnColor;
    global $mysteryGiftNotificationColor;
    echo mystery_gift_shortcode();
}
add_action($selectedPosition, 'custom_gift_in_cart');


function mystery_gift_shortcode() {
    global $giftTitle; 
    global $mysteryButtonText;
    global $mysteryGiftUrl;
    global $mysteryGiftBtnColor;
    global $mysteryGiftNotificationColor;
    ob_start();
    
    include_once plugin_dir_path(__FILE__) . '../frontend/template/mystery-gift-frontend-html.php';

    return ob_get_clean();
}

add_shortcode('mystery_gift', 'mystery_gift_shortcode');

