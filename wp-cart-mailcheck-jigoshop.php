<?php

class wpcm_jigoshop {



	function __construct() {


		add_action ( 'wp_enqueue_scripts', array ( &$this, 'enqueue_scripts' ), 10 );

	}



	function enqueue_scripts() {

		wp_enqueue_script ( 'wpcm-jigoshop', plugins_url( 'js/jigoshop.js', __FILE__ ), array ( 'wpcm' ) );

	}


}

$wpcm_jigoshop = new wpcm_jigoshop();