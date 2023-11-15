<?php 

/**
 * get attachment id by form file input
 */
if( ! function_exists( 'rvp_get_attachment_id' ) ) {

    function rvp_get_attachment_id( $file ) {
        if( $file == '' ) {
            return;
        }
    
        // Check if the file is an image
        $file_type = wp_check_filetype( basename( $file['name'] ), null );
        $allowed_types = array( 'jpg', 'jpeg', 'png', 'gif' );
        
        if ( in_array( $file_type['ext'], $allowed_types ) ) {
    
            $upload_overrides = array( 'test_form' => false );
            $upload_result = wp_handle_upload( $file, $upload_overrides );
        
            if ( $upload_result && ! isset( $upload_result['error'] ) ) {
                // Image uploaded successfully
                $attachment = array(
                    'post_title'        => basename($upload_result['file']),
                    'post_content'      => '',
                    'post_status'       => 'inherit',
                    'post_mime_type'    => $file_type['type'],
                );
        
                // Insert the attachment into the media library
                $attachment_id = wp_insert_attachment($attachment, $upload_result['file']);
                require_once ABSPATH . 'wp-admin/includes/image.php';
                $attachment_data = wp_generate_attachment_metadata($attachment_id, $upload_result['file']);
                wp_update_attachment_metadata($attachment_id, $attachment_data);
        
                return $attachment_id;
            }
        }
    } 
}

/**
 * Main loop
 */
if( ! function_exists( 'rpv_loop' ) ) {

    function rpv_loop( $post_type, $posts_per_page = 1 ) {

        $args = array(
            'post_type'         => $post_type,
            'posts_per_page'    => $posts_per_page,
        );

        $query = new WP_Query($args);

        while( $query->have_posts() ) {
            $query->the_post();
            ?> 
                <!-- start signle posts  -->
                <div class="rpv-single-profile">
                    <div class="rpv-image-area">
                        <div class="rvp-logo">
                            <img src="https://corporate-africa.com/wp-content/uploads/2023/08/abulink.png" alt="">
                        </div>
                        <div class="rpv-profile-pic">
                            <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" alt="">
                        </div>
                    </div>
                    <div class="rpv-content-area">
                        <?php echo get_post_meta( get_the_ID(), 'rpv_user_id', true );?>
                    </div>
                    <div class="rpv-profile-desc">
                        
                    </div>
                    <div class="rpv-start-chat">
                        <a href="https://corporate-africa.com/send-message/"> <?php _e( 'Start chat', 'restric-p-v' ) ?> </a>
                    </div>
                </div>

            <?php 
        }

    }
}

/**
 * all post author
 */
if( ! function_exists( 'all_post_cretor_ids' ) ){

    function all_post_cretor_ids() {

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

        return $all_user_id_form_post_meta;
    }
}

/**
 * Check user email is avaiale
 */
if( ! function_exists( 'rpv_is_email_avaiable' ) ) {
    
    function rpv_is_email_avaiable( $email ) {

        $user = get_user_by( 'email', $email );

        if ( $user ) {
            return false;
        } else {
            return true;
        }
    }
}

/**
 * Alert message
 */
if( ! function_exists( 'rpv_alert' ) ) {

    function rpv_alert( $message = '' ) {
        printf( "<script> alert(' %s '); </script>", $message );
    }
}