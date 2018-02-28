<?php
/**
 * Initialize the UZIT PRESS meta boxes.
 */
add_action( 'admin_init', '_training_meta_boxes' );

function _training_meta_boxes() {
    $training_post_meta = array(
        'id'          => 'training_post_meta',
        'title'       => 'training Post Options',
        'desc'        => '',
        'pages'       => array('post_training'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
                            array(
                            'label'       => 'Profile Picture',
                            'id'          => 'training_picture_src',
                            'type'        => 'upload',
                            'desc'        => 'Upload picture. Base dimension 450x350. [id="training_picture_src"]',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            array(
                            'label'       => 'Date of Training',
                            'id'          => 'training_position',
                            'type'        => 'text',
                            'desc'        => 'Date this training. [id=training_position]',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            array(
                            'label'       => 'Training Description',
                            'id'          => 'training_quote',
                            'type'        => 'textarea',
                            'desc'        => '[id="training_quote"]',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            array(
                            'label'       => 'Training Location',
                            'id'          => 'training_location',
                            'type'        => 'text',
                            'desc'        => '[id="training_location"]',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            array(
                            'label'       => 'Contact Email',
                            'id'          => 'training_contact_email',
                            'type'        => 'text',
                            'desc'        => '[id="training_contact_email"]',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            array(
                            'label'       => 'Website URL',
                            'id'          => 'training_website_url',
                            'type'        => 'text',
                            'desc'        => '[id="training_website_url"]',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            array(
                            'label'       => 'Button Name',
                            'id'          => 'training_button_name',
                            'type'        => 'text',
                            'desc'        => '[id="training_button_name"]',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            $testingSlider = array(
                                'label'       => 'Single Image / Slideshow',
                                'id'          => 'pressSlider',
                                'type'        => 'list-item',
                                'settings'    => array(
                                                    array(
                                                        'label'       => 'Upload',
                                                        'id'          => 'pageSliderImg',
                                                        'type'        => 'upload',
                                                        'std'         => '',
                                                        'rows'        => '',
                                                        'post_type'   => '',
                                                        'taxonomy'    => '',
                                                        'class'       => ''
                                                    )
                                                ),
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'general_default'
                            ),
                        )
    );
    ot_register_meta_box( $training_post_meta );
}