<?php
/**
 * Initialize the UZIT meta boxes. 
 */
add_action( 'admin_init', '_uzitvideos_meta_boxes' );

function _uzitvideos_meta_boxes() {
    $uzitvideos_meta_boxes = array(
        'id'          => 'uzitvideos_post_meta',
        'title'       => 'UZIT Videos Post Options',
        'desc'        => '',
        'pages'       => array('post_uzitvideos'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
                            array(
                                'label'       => 'Video Thumbnail Upload',
                                'id'          => 'uzitvideos_video_thumbnail',
                                'type'        => 'upload',
                                'desc'        => 'Upload (300px x 189px)',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                            array(
                                'label'       => 'Category (used for sorting)',
                                'id'          => 'uzitvideos_category',
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
                                'label'       => 'Vimeo URL',
                                'id'          => 'uzitvideos_vimeo_url',
                                'type'        => 'text',
                                'desc'        => 'include http:// or https://',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                            array(
                                'label'       => 'Vimeo Embed',
                                'id'          => 'uzitvideos_vimeo_embed',
                                'type'        => 'textarea',
                                'desc'        => 'Copy and Paste the embed code from Vimeo. Filling this in will activate the lightbox.',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            )
                        )
    );
    ot_register_meta_box( $uzitvideos_meta_boxes );
}