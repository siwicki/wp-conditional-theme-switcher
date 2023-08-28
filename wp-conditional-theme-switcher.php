<?php
/**
 * Plugin Name: Conditional Theme Switcher
 * Description: Switches to the default theme for a specific IP address.
 * Version: 1.0
 * Author: Lukasz Siwicki
 */

add_filter( 'template', 'conditionally_switch_theme' );
add_filter( 'stylesheet', 'conditionally_switch_theme' );

function conditionally_switch_theme( $theme ) {
    // Check for the specific IP address
    if ( $_SERVER['REMOTE_ADDR'] == '122.12.12.12' ) {
        // Set to the directory name of the default theme you want to switch to
        return 'twentytwentyone';
    }
    return $theme;
}
