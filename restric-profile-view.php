<?php 
/*
 * Plugin Name:       Restric Profile View
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Restric Profile View Plugin View everthing after submittion form into page.
 * Version:           0.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Md. Habib
 * Author URI:        https://me.habibnote.com
 * Text Domain:       restric-p-v
*/

namespace Restric_Profile_View;

if( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Plugin Main Class
*/
final class RPV{
    static $instance = false;

    /**
     * Class Contructor
    */
    private function __construct() {
        $this->include();
        $this->hooks();
    }

    /**
     * Include all files
     */
    private function include() {
        require_once( dirname( __FILE__ ) . '/vendor/autoload.php' );
    }

    /**
     * All Hooks
     */
    private function hooks() {
        
        //kick of shortcode
        new Inc\Shortcode();
    }

    /**
     * Singleton Instance
     */
    static function get_rpv() {
        
        if( ! self::$instance ) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

/**
 * Cick off the plugin
 */
RPV::get_rpv();