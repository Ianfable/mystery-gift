<div class="wrap-grid">
    <div class="grid-item">
        <h3>Mystery Gift Settings</h3>
        <form method="post" action="">
            <?php wp_nonce_field('mystery_gift_save_settings'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th class="th-mystery-gift" scope="row">Gift Title:</th>
                    <td><input type="text" name="mystery_gift_title" value="<?php echo esc_attr($giftTitle); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th class="th-mystery-gift" scope="row">Gift Threshold:
                    </th>
                    <td><input type="number" name="mystery_gift_threshold"
                            value="<?php echo esc_attr($giftThreshold); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th class="th-mystery-gift" scope="row">Button Text:
                    </th>
                    <td><input type="text" name="mystery_gift_buttontext"
                            value="<?php echo esc_attr($mysteryButtonText); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th class="th-mystery-gift" scope="row">Button Color:
                    </th>
                    <td>
                        <input type="text" name="mystery_gift_button_color"
                            value="<?php echo esc_attr($mysteryGiftBtnColor); ?>" class="color-field" />
                    </td>
                </tr>
                <tr valign="top">
                    <th class="th-mystery-gift" scope="row">URL to Redirect:
                    </th>
                    <td><input type="text" name="mystery_gift_url" value="<?php echo esc_attr($mysteryGiftUrl); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th class="th-mystery-gift" scope="row">Notification Color:
                    </th>
                    <td>
                        <input type="text" name="mystery_gift_notification_color"
                            value="<?php echo esc_attr($mysteryGiftNotificationColor); ?>"
                            class="color-field-notification" />
                    </td>
                </tr>
                <tr valign="top">
                    <th class="th-mystery-gift" scope="row">Output Message:
                    </th>
                    <td><input type="text" name="mystery_gift_message"
                            value="<?php echo esc_attr($mysteryGiftMessage); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th class="th-mystery-gift" scope="row">Position:
                    </th>
                    <td>
                        <select name="mystery_gift_position">
                            <option value="none" <?php selected($selectedPosition, 'none'); ?>>None</option>
                            <option value="woocommerce_after_cart"
                                <?php selected($selectedPosition, 'woocommerce_after_cart'); ?>>After Cart</option>
                            <option value="woocommerce_before_cart"
                                <?php selected($selectedPosition, 'woocommerce_before_cart'); ?>>Before Cart</option>
                            <option value="woocommerce_after_cart_contents"
                                <?php selected($selectedPosition, 'woocommerce_after_cart_contents'); ?>>After Cart
                                Content</option>
                            <option value="woocommerce_before_cart_table"
                                <?php selected($selectedPosition, 'woocommerce_before_cart_table'); ?>>Before Cart Table
                            </option>
                            <option value="woocommerce_proceed_to_checkout"
                                <?php selected($selectedPosition, 'woocommerce_proceed_to_checkout'); ?>>Proceed to Checkout
                            </option>
                            <option value="woocommerce_after_cart_totals"
                                <?php selected($selectedPosition, 'woocommerce_after_cart_totals'); ?>>After Cart Totals
                            </option>
                        </select>
                    </td>
                </tr>

            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <div class="grid-item">
        <div class="mystery-gift-tutorial">
            <p><strong>Shortcode Usage:</strong> Use the shortcode <code>[mystery_gift]</code> for easy integration with
                page builders. This allows flexible placement of the Mystery Gift box within your pages.</p>

            <h3>Plugin Settings</h3>
            <ul>
                <li><strong>Gift Title:</strong> Enter the gift's title, displayed to customers.</li>
                <li><strong>Gift Threshold:</strong> Set the minimum order amount for gift eligibility.</li>
                <li><strong>Button Text:</strong> Specify the text for the mystery gift button.</li>
                <li><strong>Button Color:</strong> Choose the button color using a color picker or hex code.</li>
                <li><strong>URL to Redirect:</strong> Enter the URL for redirection after button click.</li>
                <li><strong>Notification Color:</strong> Select the color for mystery gift notifications.</li>
                <li><strong>Output Message:</strong> The message we will show to the customer when they reach the
                    desired amount for receiving a gift.</li>
                <li><strong>Position:</strong> Select the position for the gift box from the dropdown (e.g., After
                    Cart).</li>
            </ul>

            <p><strong>Advanced Placement:</strong> Without the shortcode, position the gift box using WooCommerce hooks
                for specific placement needs. Refer to WooCommerce documentation for more details on hooks.</p>
        </div>

    </div>
</div>