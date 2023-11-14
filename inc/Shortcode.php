<?php 

namespace Restric_Profile_View\Inc;

class Shortcode {

    function __construct() {
        add_action( 'wp_head', [$this, 'hello'] );
    }

    function hello() {
        echo "Bangladesh";
    }

}