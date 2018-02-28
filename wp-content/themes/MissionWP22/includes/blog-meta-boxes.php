<?php
/**
 * Initialize the UZIT meta boxes. 
 */
add_action( 'admin_init', '_blog_meta_boxes' );

function _blog_meta_boxes() {
    $uzit_blog_post_meta = array(
        'id'          => 'uzit_blog_post_meta',
        'title'       => 'Blog Post Options',
        'desc'        => '',
        'pages'       => array('post_blog'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
                            array(
                                'label'       => 'Slogan',
                                'id'          => 'blog_slogan',
                                'type'        => 'text',
                                'desc'        => 'Sub title (optional)',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                            array(
                                'label'       => 'Blog Thumbnail Upload',
                                'id'          => 'blog_img',
                                'type'        => 'upload',
                                'desc'        => 'Upload ',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                            array(
                                'label'       => 'Category (used for shorting)',
                                'id'          => 'blog_category',
                                'type'        => 'text',
                                'desc'        => 'Used for sorting (300px x 189px) ',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                            array(
                                'label'       => 'Author',
                                'id'          => 'blog_author',
                                'type'        => 'text',
                                'desc'        => 'Blog author',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                            array(
                                'label'       => 'Date',
                                'id'          => 'blog_date',
                                'type'        => 'text',
                                'desc'        => 'Example: March 29, 2013',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            )
                        )
    );
    ot_register_meta_box( $uzit_blog_post_meta );
}