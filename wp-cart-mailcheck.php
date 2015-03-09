<?php
/*
Plugin Name: WP Cart Mailcheck
Plugin URI: http://plugins.leewillis.co.uk/store/plugins/wp-cart-mailcheck/
Description: Adds mailcheck.js to your checkout forms automatically for WP e-Commerce, Jigshop or WooCommerce
Version: 1.0.5
Author: Lee Willis
Author URI: http://plugins.leewillis.co.uk/
*/

/*
 This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, version 2.
 This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 */


function wpcm_plugins_loaded() {
	if ( class_exists( 'WP_eCommerce' ) ) {
		require_once( 'wp-cart-mailcheck-wpec.php' );
	}
	if ( class_exists( 'Woocommerce' ) ) {
		require_once( 'wp-cart-mailcheck-woo.php' );
	}
	if ( defined( 'SHOPP_VERSION' ) ) {
		require_once( 'wp-cart-mailcheck-shopp.php' );
	}
	if ( class_exists( 'Easy_Digital_Downloads' ) ) {
		require_once( 'wp-cart-mailcheck-edd.php' );
	}
}
add_action( 'plugins_loaded', 'wpcm_plugins_loaded' );



function wpcm_enqueue_scripts() {
	wp_enqueue_script( 'wpcm', plugins_url( 'mailcheck-js/jquery.mailcheck.min.js', __FILE__ ), array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'wpcm_enqueue_scripts', 5 );



function wpcm_enqueue_styles() {
	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	wp_enqueue_style( 'wpcm', plugins_url( "css/wpcm{$suffix}.css", __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'wpcm_enqueue_styles', 5 );

