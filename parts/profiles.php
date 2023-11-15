
<div class="rpv-profiles-container">

    <?php
        if( array_search( get_current_user_id() ,all_post_cretor_ids() ) !== false ) {
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