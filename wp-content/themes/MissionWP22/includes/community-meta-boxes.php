<?php
/**
 * Initialize the UZIT meta boxes. 
 */
add_action( 'admin_init', '_community_meta_boxes' );

function _community_meta_boxes() {
    $uzit_community_post_meta = array(
        'id'          => 'uzit_community_post_meta',
        'title'       => 'Community Service Post Options',
        'desc'        => '',
        'pages'       => array('post_community'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
                            array(
                            'label'       => 'Thumbnail Upload',
                            'id'          => 'community_service_thumbnail_src',
                            'type'        => 'upload',
                            'desc'        => 'Upload thumbnail for grid',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            )
                        )
    );
    ot_register_meta_box( $uzit_community_post_meta );
}