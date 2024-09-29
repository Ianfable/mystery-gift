<div class="gift-container">
    <h6><?php echo esc_html($giftTitle); ?></h6>
    <span class="gift-notification" style="background: <?php echo esc_attr($mysteryGiftNotificationColor); ?> !important;">
        <div>
            <img src="<?php echo plugin_dir_url(__FILE__) . '../../img/gift-icon.png' ?>">
        </div>
        <div class="gift-notification-message">
            Only $<span class="gift-notification-price">50</span> left until the surprise!
        </div>
    </span>
    <a class="gift-button" style="background: <?php echo esc_attr($mysteryGiftBtnColor); ?> !important;" href="<?php echo esc_html($mysteryGiftUrl); ?>"><?php echo esc_html($mysteryButtonText); ?></a>
</div>
