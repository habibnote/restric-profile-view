
<div class="rpv-profiles-container">

    <?php
        if( array_search( get_current_user_id() ,all_post_cretor_ids() ) !== false ) {
            
             /**
             * Load all Filters Posts
             */
            $region     = sanitize_text_field( $_GET['region'] );
            $industry   = sanitize_text_field( $_GET['industry'] );
            $country    = sanitize_text_field( $_GET['country'] );
            if( $_GET['filter'] == true ) {
                rpv_loop( 
                    'profiles', 
                    -1, 
                    true,
                    array(
                        'relation' => 'OR',
                        array(
                            'key'     => 'city',
                            'value'   => $region,
                            'compare' => '=',
                        ),
                        array(
                            'key'     => 'company',
                            'value'   => $industry,
                            'compare' => '=',
                        ),
                        array(
                            'key'     => 'country',
                            'value'   => $country,
                            'compare' => '=',
                        ),
                    )
                ); 
            }
            else {
            /**
             * Load all Posts
             */
                rpv_loop( 'profiles', -1 ); 
            }

        }else{
            /**
             * load only one posts
             */
            rpv_loop( 'profiles' );
        }
    ?>
</div>