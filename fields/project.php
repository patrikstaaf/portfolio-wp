<?php

if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'project_info',
        'title' => 'Project info',
        'fields' => array(
            array(
                'key' => 'field_client_name',
                'label' => 'Client name',
                'name' => 'client-name',
                'type' => 'text',
                'instructions' => 'Fill out the client for the project',

            ),
            array(
                'key' => 'field_client_website',
                'label' => 'Client website',
                'name' => 'client-website',
                'type' => 'url',
                'instructions' => 'Fill out the client website',
            )
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'project',
                ),
            ),
        ),
    ));

endif;
