<?php
/**
 * Plugin Name: Makeitdigi Hide Shipping Methods
 * Description: Automatically hides all other shipping methods when "Free Shipping" (Ücretsiz Kargo) is available during checkout.
 * Version: 1.2
 * Author: makeitdigi - www.makeitdigi.com
 * GitHub Plugin URI: https://github.com/montecit/woocommerce-hide-shipping-methods
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_filter('woocommerce_package_rates', 'wc_hide_other_shipping_when_free', 100, 2);

function wc_hide_other_shipping_when_free($rates, $package) {
    // Debug: Log available shipping methods
    if (defined('WP_DEBUG') && WP_DEBUG) {
        error_log(print_r($rates, true));
    }

    $free_shipping = array();

    // Check if Free Shipping exists
    foreach ($rates as $rate_id => $rate) {
        if ('free_shipping' === $rate->method_id) {
            $free_shipping[$rate_id] = $rate;
            break; // Stop checking after finding Free Shipping
        }
    }

    // If Free Shipping exists, return only it
    return !empty($free_shipping) ? $free_shipping : $rates;
}
