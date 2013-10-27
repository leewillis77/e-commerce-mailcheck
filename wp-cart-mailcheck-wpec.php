<?php

class wpcm_wpec {



	function __construct() {

		add_action ( 'wp_enqueue_scripts', array ( &$this, 'enqueue_scripts' ) );

	}



	function enqueue_scripts() {

		wp_enqueue_script ( 'wpcm-wpec', plugins_url( 'js/wpec.js', __FILE__ ), array ( 'wpcm' ) );

	}


}

$wpcm_wpec = new wpcm_wpec();