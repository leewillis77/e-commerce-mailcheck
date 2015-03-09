<?php

class wpcm_shopp {

	function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ), 10 );
	}

	function enqueue_scripts() {
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		wp_enqueue_script( 'wpcm-shopp', plugins_url( "js/shopp{$suffix}.js", __FILE__ ), array( 'wpcm' ) );
	}
}
$wpcm_shopp = new wpcm_shopp();