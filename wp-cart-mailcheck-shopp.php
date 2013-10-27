<?php

class wpcm_shopp {



	function __construct() {


		add_action ( 'wp_enqueue_scripts', array ( &$this, 'enqueue_scripts' ), 10 );

	}



	function enqueue_scripts() {

		wp_enqueue_script ( 'wpcm-shopp', plugins_url( 'js/shopp.js', __FILE__ ), array ( 'wpcm' ) );

	}


}

$wpcm_shopp = new wpcm_shopp();