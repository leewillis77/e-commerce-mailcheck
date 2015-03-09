<?php

class wpcm_woo {

	function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ), 10 );
	}

	function enqueue_scripts() {
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		wp_enqueue_script( 'wpcm-woo', plugins_url( "js/woo{$suffix}.js", __FILE__ ), array( 'wpcm' ) );
	}

}
$wpcm_woo = new wpcm_woo();