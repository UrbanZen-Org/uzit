<?php
/**
 * Initialize the UZIT PRESS meta boxes.
 */
add_action( 'admin_init', '_team_meta_boxes' );

function _team_meta_boxes() {
    $team_post_meta = array(
        'id'          => 'team_post_meta',
        'title'       => 'Team Member Post Options',
        'desc'        => '',
        'pages'       => array('post_team'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
                            array(
                            'label'       => 'Profile Picture',
                            'id'          => 'team_picture_src',
                            'type'        => 'upload',
                            'desc'        => 'Upload profile picture of instructor. Base dimension 450x350. [id="team_picture_src"]',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            array(
                            'label'       => 'Title/Position',
                            'id'          => 'team_position',
                            'type'        => 'text',
                            'desc'        => 'Title or position of this person. [id=team_position]',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            array(
                            'label'       => 'Quote',
                            'id'          => 'team_quote',
                            'type'        => 'textarea',
                            'desc'        => '[id="team_quote"]',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            array(
                            'label'       => 'Facebook URL',
                            'id'          => 'team_facebook_url',
                            'type'        => 'text',
                            'desc'        => '[id="team_facebook_url"]',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            array(
                            'label'       => 'Twitter URL',
                            'id'          => 'team_twitter_url',
                            'type'        => 'text',
                            'desc'        => '[id="team_twitter_url"]',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            array(
                            'label'       => 'Website URL',
                            'id'          => 'team_website_url',
                            'type'        => 'text',
                            'desc'        => '[id="team_website_url"]',
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
    ot_register_meta_box( $team_post_meta );
}