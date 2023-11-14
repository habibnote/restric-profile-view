<?php 

namespace Restric_Profile_View\Inc;

class Shortcode {

    /**
     * class constructor
     */
    function __construct() {
        add_action( 'wp_enqueue_scripts', [$this, 'rpv_load_assets'] );
        add_shortcode( 'rpv_shortcode', [$this, 'rpv_main_shortcode'] );
    }

    /**
     * Load shortcode assets
     */
    function rpv_load_assets() {
        if( ! is_admin() ) {
            wp_enqueue_style( 'shortcode-form', RPV_ASSET . '/front/css/form.css', array(), time() );
        } ;
    }

    /**
     * Main shortcode init
    */
    function rpv_main_shortcode() {
        
        include_once( RPV_DIR . "/parts/form.php" );
    }

}