<?php
/**
 * Initialize the UZIT PRESS meta boxes.
 */
add_action( 'admin_init', '_press_meta_boxes' );

function _press_meta_boxes() {
    $press_post_meta = array(
        'id'          => 'press_post_meta',
        'title'       => 'Press Article Post Options',
        'desc'        => '',
        'pages'       => array('post_press'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
                            array(
                            'label'       => 'Article Date',
                            'id'          => 'press_date',
                            'type'        => 'text',
                            'desc'        => 'When the article was posted',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            array(
                            'label'       => 'Logo Thumbnail Upload',
                            'id'          => 'logo_thumbnail_src',
                            'type'        => 'upload',
                            'desc'        => 'Upload thumbnail logo for grid and popup',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            array(
                            'label'       => 'Download File Upload',
                            'id'          => 'download_src',
                            'type'        => 'upload',
                            'desc'        => '',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            /*
                            array(
                            'label'       => 'Facebook Share Link',
                            'id'          => 'fb_link',
                            'type'        => 'text',
                            'desc'        => '',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            array(
                            'label'       => 'Twitter Share Link',
                            'id'          => 'twitter_link',
                            'type'        => 'text',
                            'desc'        => '',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            */
                            $testingSlider = array(
                                'label'       => 'Article Slideshow',
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
    ot_register_meta_box( $press_post_meta );
}