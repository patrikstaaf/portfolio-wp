<?php

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

if (function_exists('acf_add_local_field_group')) {

    acf_add_local_field_group(array(
        'key' => 'field_footer',
        'title' => 'Footer',
        'fields' => array(
            array(
                'key' => 'field_footer_contact_label',
                'label' => 'Contact Label',
                'name' => 'client-label',
                'type' => 'text',
                'default_value' => 'Contact',
            ),
            array(
                'key' => 'field_footer_email',
                'label' => 'Footer email',
                'name' => 'footer-email',
                'type' => 'email',
            ),

            array(
                'key' => 'field_footer_copyright',
                'label' => 'Copyright',
                'name' => 'footer-copyright',
                'type' => 'text',
            )
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
                ),
            ),
        ),
    ));
};
