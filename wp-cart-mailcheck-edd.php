<?php

class wpcm_edd {



    function __construct() {


        add_action ( 'wp_enqueue_scripts', array ( &$this, 'enqueue_scripts' ), 10 );

    }



    function enqueue_scripts() {

        wp_enqueue_script ( 'wpcm-edd', plugins_url( 'js/edd.js', __FILE__ ), array ( 'wpcm' ) );

    }


}

$wpcm_edd = new wpcm_edd();