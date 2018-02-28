<?php
/**
 * Initialize the UZIT VOICE meta boxes.
 */
add_action( 'admin_init', '_voice_meta_boxes' );

function _voice_meta_boxes() {
    $voice_post_meta = array(
        'id'          => 'voice_post_meta',
        'title'       => 'Voice of the Community Post Options',
        'desc'        => '',
        'pages'       => array('post_voice'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
                            array(
                            'label'       => 'Thumbnail Upload',
                            'id'          => 'voice_thumbnail_src',
                            'type'        => 'upload',
                            'desc'        => 'Upload thumbnail for grid (id: voice_thumbnail_src)',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            array(
                            'label'       => 'Audio File Upload',
                            'id'          => 'voice_audio_src',
                            'type'        => 'upload',
                            'desc'        => 'Audio File Format mp3, mp4, ogg (id: voice_audio_src)',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            array(
                            'label'       => 'Video Embed Code',
                            'id'          => 'voice_video_embed',
                            'type'        => 'textarea',
                            'desc'        => 'Paste the embed code for the video (Vimeo) (id: voice_video_embed)',
                            'std'         => '',
                            'rows'        => '4',
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
                            'label'       => 'URL Link',
                            'id'          => 'url_link',
                            'type'        => 'text',
                            'desc'        => 'Link to the blog page (include http://).',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            )
                        )
    );
    ot_register_meta_box( $voice_post_meta );
}