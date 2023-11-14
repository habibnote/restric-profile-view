<?php 

namespace Restric_Profile_View\Inc;

class Acf {

    /**
     * Class Constructor
     */
    function __construct() {
        add_action( 'acf/include_fields', [$this, 'rpv_acf_all_field'] );
        add_action( 'init', [$this, 'rpv_acf_custom_post_type'] );
    }

    /**
     * Acf regiter custom post type
     */
    function rpv_acf_custom_post_type() {
        register_post_type( 'profiles', array(
            'labels' => array(
                'name' => 'Profiles',
                'singular_name' => 'Profile',
                'menu_name' => 'Profiles',
                'all_items' => 'All Profiles',
                'edit_item' => 'Edit Profile',
                'view_item' => 'View Profile',
                'view_items' => 'View Profiles',
                'add_new_item' => 'Add New Profile',
                'new_item' => 'New Profile',
                'parent_item_colon' => 'Parent Profile:',
                'search_items' => 'Search Profiles',
                'not_found' => 'No profiles found',
                'not_found_in_trash' => 'No profiles found in Trash',
                'archives' => 'Profile Archives',
                'attributes' => 'Profile Attributes',
                'insert_into_item' => 'Insert into profile',
                'uploaded_to_this_item' => 'Uploaded to this profile',
                'filter_items_list' => 'Filter profiles list',
                'filter_by_date' => 'Filter profiles by date',
                'items_list_navigation' => 'Profiles list navigation',
                'items_list' => 'Profiles list',
                'item_published' => 'Profile published.',
                'item_published_privately' => 'Profile published privately.',
                'item_reverted_to_draft' => 'Profile reverted to draft.',
                'item_scheduled' => 'Profile scheduled.',
                'item_updated' => 'Profile updated.',
                'item_link' => 'Profile Link',
                'item_link_description' => 'A link to a profile.',
            ),
            'public' => true,
            'hierarchical' => true,
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-businessman',
            'supports' => array(
                0 => 'title',
                1 => 'thumbnail',
            ),
            'delete_with_user' => false,
        ) );
    }

    /**
     * Acf all register field
     */
    function rpv_acf_all_field() {

        if ( ! function_exists( 'acf_add_local_field_group' ) ) {
            return;
        }

        acf_add_local_field_group( array(
        'key' => 'group_6553910e7a19f',
        'title' => 'Profiles Meta Data',
        'fields' => array(
        array(
            'key' => 'field_6553910e3a4fd',
            'label' => 'Title',
            'name' => 'title',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_655391beb187a',
            'label' => 'Name',
            'name' => 'name',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_655391cdb187b',
            'label' => 'Company',
            'name' => 'company',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_655391ed2807a',
            'label' => 'Address',
            'name' => 'address',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_655392032807b',
            'label' => 'City',
            'name' => 'city',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_655392132807c',
            'label' => 'Country',
            'name' => 'country',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_655392242807d',
            'label' => 'Job Title',
            'name' => 'job_title',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_655392392807e',
            'label' => 'Email',
            'name' => 'email',
            'aria-label' => '',
            'type' => 'email',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_655392932807f',
            'label' => 'Telecom',
            'name' => 'telecom',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_655392a928080',
            'label' => 'Mobile',
            'name' => 'mobile',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_655392b828081',
            'label' => 'Company Profile',
            'name' => 'company_profile',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_655392ec28082',
            'label' => 'Key Competitors in Africa',
            'name' => 'key_competitors_in_africa',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_655392fb28083',
            'label' => 'Business Partnerships Sought',
            'name' => 'business_partnerships_sought',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_6553930528084',
            'label' => 'Projects Targeted for Investments',
            'name' => 'projects_targeted_for_investments',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_6553931328085',
            'label' => 'Countries Targeted',
            'name' => 'countries_targeted',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_6553932228086',
            'label' => 'Industry Sectors',
            'name' => 'industry_sectors',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_6553933528087',
            'label' => 'Networking Events Planned to Attend',
            'name' => 'networking_events_planned_to_attend',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_6553933b28088',
            'label' => 'Logo',
            'name' => 'logo',
            'aria-label' => '',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'url',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_6553935f28089',
            'label' => 'Profile Pic',
            'name' => 'profile_pic',
            'aria-label' => '',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'url',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
            'preview_size' => 'medium',
        ),
        ),
        'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'profiles',
            ),
        ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
        ),
        );
    }
}