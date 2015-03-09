<?php

class wpcm_wpec {

	function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}

	function enqueue_scripts() {
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		wp_enqueue_script( 'wpcm-wpec', plugins_url( "js/wpec{$suffix}.js", __FILE__ ), array( 'wpcm' ) );
	}

}

$wpcm_wpec = new wpcm_wpec();