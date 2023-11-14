<?php 
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
            $rpv_logo               = sanitize_text_field( $_POST['rpv-logo'] ) ?? '';
            $rpv_profile_pic        = sanitize_text_field( $_POST['rpv-profile-pic'] ) ?? '';

            
        }
    }
?>