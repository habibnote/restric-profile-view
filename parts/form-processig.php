<?php 

    require_once ABSPATH . 'wp-admin/includes/image.php';
    require_once ABSPATH . 'wp-admin/includes/file.php';
    require_once ABSPATH . 'wp-admin/includes/media.php';

    if( isset( $_POST['rpv-form-submit'] ) ){
        if( wp_verify_nonce( $_POST['_wpnonce'], 'rpv_nonce' ) ) {

            $rpv_title              = sanitize_text_field( $_POST['rpv-title'] ) ?? '';
            $rpv_name               = sanitize_text_field( $_POST['rpv-name'] ) ?? '';
            $rpv_company            = sanitize_text_field( $_POST['rpv-company'] ) ?? '';
            $rpv_addr               = sanitize_text_field( $_POST['rpv-addr'] ) ?? '';
            $rpv_city               = sanitize_text_field( $_POST['rpv-city'] ) ?? '';
            $rpv_country            = sanitize_text_field( $_POST['rpv-country'] ) ?? '';
            $rpv_job_title          = sanitize_text_field( $_POST['rpv-job-title'] ) ?? '';
            $rpv_email              = sanitize_text_field( $_POST['rpv-email'] ) ?? '';
            $rpv_telicom            = sanitize_text_field( $_POST['rpv-telicom'] ) ?? '';
            $rpv_mobile             = sanitize_text_field( $_POST['rpv-mobile'] ) ?? '';
            $rpv_company_profile    = sanitize_text_field( $_POST['rpv-company-profile'] ) ?? '';
            $rpv_key_com            = sanitize_text_field( $_POST['rpv-key-com'] ) ?? '';
            $rpv_business_partner   = sanitize_text_field( $_POST['rpv-business-partner'] ) ?? '';
            $rpv_project_tar        = sanitize_text_field( $_POST['rpv-project-tar'] ) ?? '';
            $rpv_countries_tar      = sanitize_text_field( $_POST['rpv-countries-tar'] ) ?? '';
            $rpv_industriy_sector   = sanitize_text_field( $_POST['rpv-industriy-sector'] ) ?? '';
            $rpv_network_event      = sanitize_text_field( $_POST['rpv-network-event'] ) ?? '';
            
            //retrive logo and save it on wordpress media
            $rpv_logo               = $_FILES['rpv-logo'] ?? '';
            $rpv_logo_id            = rvp_get_attachment_id( $rpv_logo );

            // retrive proflie pci and save it on wordpress media
            $rpv_profile_pic        = $_FILES['rpv-profile-pic'] ?? '';
            $rpv_profile_pic_id     = rvp_get_attachment_id(  $rpv_profile_pic );

            /**
             * New Post Array
             */
            $new_post = array(
                'post_title'    => $rpv_name,
                'post_content'  => '',
                'post_status'   => 'draft',
                'post_type'     => 'profiles'
            );

            $post_id = wp_insert_post($new_post);

            if( $post_id ) {
                update_field( 'title', $rpv_title, $post_id );
                update_field( 'name', $rpv_name, $post_id );
                update_field( 'company', $rpv_company, $post_id );
                update_field( 'address', $rpv_addr, $post_id );
                update_field( 'city', $rpv_city, $post_id );
                update_field( 'country', $rpv_country, $post_id );
                update_field( 'job_title', $rpv_job_title, $post_id );
                update_field( 'email', $rpv_email, $post_id );
                update_field( 'telecom', $rpv_telicom, $post_id );
                update_field( 'mobile', $rpv_mobile, $post_id );
                update_field( 'company_profile', $rpv_title, $post_id );
                update_field( 'key_competitors_in_africa', $rpv_key_com, $post_id );
                update_field( 'business_partnerships_sought', $rpv_business_partner, $post_id );
                update_field( 'projects_targeted_for_investments', $rpv_project_tar, $post_id );
                update_field( 'countries_targeted', $rpv_countries_tar, $post_id );
                update_field( 'industry_sectors', $rpv_industriy_sector, $post_id );
                update_field( 'networking_events_planned_to_attend',  $rpv_network_event, $post_id );

                //Update images
                update_field( 'logo', $rpv_logo_id, $post_id );
                update_field( 'profile_pic', $rpv_profile_pic_id, $post_id );
            }

            echo "Post has been created";
        }
    }
?>