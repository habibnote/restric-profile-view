<?php 
    
    $user_id_query = new WP_Query( [
        'post_type'         => 'profiles',
        'posts_per_page'    => -1,
    ] );

    /**
     * Collect all user id that we will saved as post meta for tracking who created post
     */
    $all_user_id_form_post_meta = [];

    while( $user_id_query->have_posts() ) {
        $user_id_query->the_post();

        //get user id from post
        $user_id = get_post_meta( get_the_ID(), 'rpv_user_id', true );

        if( $user_id ) {
            array_push( $all_user_id_form_post_meta, $user_id );
        }
    }
?>


<div class="rpv-profiles-container">

    <?php
        if( array_search( get_current_user_id() ,$all_user_id_form_post_meta ) !== false ) {
            /**
             * Load all Posts
             */
            rpv_loop( 'profiles', -1 ); 
        }else{
            /**
             * load only one posts
             */
            rpv_loop( 'profiles' );
        }
    ?>
</div>