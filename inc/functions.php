<?php 

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
                'post_title' => basename($upload_result['file']),
                'post_content' => '',
                'post_status' => 'inherit',
                'post_mime_type' => $file_type['type'],
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
