<?php 

namespace Restric_Profile_View\Inc;

class Shortcode {

    /**
     * class constructor
     */
    function __construct() {
        add_action( 'wp_enqueue_scripts', [$this, 'rpv_load_assets'] );
        add_shortcode( 'rpv_shortcode', [$this, 'rpv_main_shortcode'] );
        add_shortcode( 'rpv_form', [$this, 'rpv_form_shortcode'] );
        add_shortcode( 'rpv_filter', [$this, 'rpv_filter'] );
    }

    /**
     * Filter Form
     */
    public function rpv_filter() {
        ob_start();
        ?>  
            <form class="filter-form" method="GET">
                <div class="single-col">
                    <label>Region</label>
                    <select name="region">
                        <option value="">Select</option>
                    </select>
                </div>
                <div class="single-col">
                    <label>Industry</label>
                    <select name="industry">
                        <option value="">Select</option>
                    </select>
                </div>
                <div class="single-col">
                    <label>Country</label>
                    <select name="country">
                        <option value="">Select</option>
                    </select>
                </div>
                <div class="single-col">
                    <button type="submit" name="filter">Filter</button>
                </div>
            </form>
        <?php 
    
    }

    /**
     * Form
     */
    function rpv_form_shortcode() {
        
        /**
         * Current user has any post or not
         */
        if( ! ( array_search( get_current_user_id() ,all_post_cretor_ids() ) !== false ) ) {

            include_once( RPV_DIR . "/parts/form.php" );
        }

        include_once( RPV_DIR . "/parts/form-processig.php" );
    }

    /**
     * Load shortcode assets
     */
    function rpv_load_assets() {
        if( ! is_admin() ) {
            wp_enqueue_style( 'front', RPV_ASSET . '/front/css/front.css', array(), time() );
            wp_enqueue_style( 'shortcode-form', RPV_ASSET . '/front/css/form.css', array(), time() );
        } ;
    }

    /**
     * Main shortcode init
    */
    function rpv_main_shortcode() {
        include_once( RPV_DIR . "/parts/profiles.php" );
    }

}