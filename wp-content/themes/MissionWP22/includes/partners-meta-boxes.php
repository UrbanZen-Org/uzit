<?php
/**
 * Initialize the UZIT meta boxes. 
 */
add_action( 'admin_init', '_partners_meta_boxes' );

function _partners_meta_boxes() {
    $uzit_post_meta = array(
        'id'          => 'uzit_post_meta',
        'title'       => 'Partner Post Options',
        'desc'        => '',
        'pages'       => array('post_partners'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
                            array(
                            'label'       => 'Logo Upload',
                            'id'          => 'logo_img',
                            'type'        => 'upload',
                            'desc'        => 'Upload ',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            $partnerSlideshow = array(
                                'label'       => 'Slideshow',
                                'id'          => 'partnerSlideshow',
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
                                                      ),
                                                      
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
    ot_register_meta_box( $uzit_post_meta );
}