<?php 

namespace Restric_Profile_View\Inc;

class Shortcode {

    /**
     * class constructor
     */
    function __construct() {
        
        add_shortcode( 'rpv_shortcode', [$this, 'rpv_main_shortcode'] );
    }

    /**
     * Main shortcode init
    */
    function rpv_main_shortcode() {
        
        // include_once( dirname( __FILE__ ) . "/parts/form.php" );
    }

}