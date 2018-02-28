<?php
/**
 * Initialize the options before anything else.
 */
add_action( 'admin_init', 'custom_theme_options', 1 );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array(
      
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'topbar',
        'title'       => 'Top Bar'
      ),
      array(
        'id'          => 'headerHomepage',
        'title'       => 'Header (Homepage)'
      ),
      array(
          'id'        => 'headerUZIT',
          'title'     => 'Header (UZIT)'
      ),
      array(
        'id'          => 'bodystyling',
        'title'       => 'Styling Options'
      ),
      array(
        'id'          => 'slidersettings',
        'title'       => 'Slider (Homepage)'
      ),
      array(
        'id'          => 'slidersettings_uzit',
        'title'       => 'Slider (UZIT Homepage)'
      ),
      array(
          'id'          => 'slidersettings_uzit_training',
          'title'       => 'Slider (UZIT Training)'
        ),
      array(
        'id'          => 'footer',
        'title'       => 'Footer'
      ),
      array(
        'id'          => 'cps',
        'title'       => 'Custom Post Slug'
      ),
      array(
        'id'          => 'custompagetitle',
        'title'       => 'Custom Page Title'
      ),
      array(
        'id'          => 'custom_page_header_img',
        'title'       => 'Custom Page Header IMG'
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'topbarsearch',
        'label'       => 'Display Search Icon?',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'topbar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'sdfasdf',
            'label'       => 'Make Your Choice :',
            'src'         => ''
          ),
          array(
            'value'       => 'yes',
            'label'       => 'Yes',
            'src'         => ''
          ),
          array(
            'value'       => 'no',
            'label'       => 'No',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'donatelink',
        'label'       => 'Donate Button URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'topbar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'donatebtntext',
        'label'       => 'Donate Button Text',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'topbar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'contactlink',
        'label'       => 'Contact Button URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'topbar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'youtubelink',
        'label'       => 'Youtube URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'topbar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'twitterlink',
        'label'       => 'Twitter URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'topbar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'facebooklink',
        'label'       => 'Facebook URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'topbar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'vimeolink',
        'label'       => 'Vimeo URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'topbar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'googlelink',
        'label'       => 'Google + URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'topbar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'flickrlink',
        'label'       => 'Flickr URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'topbar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'pinterestlink',
        'label'       => 'Pinterest URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'topbar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'linkedinlink',
        'label'       => 'Linkedin URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'topbar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'dribbblelink',
        'label'       => 'Dribbble URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'topbar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'instagramlink',
        'label'       => 'Instagram URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'topbar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'behancelink',
        'label'       => 'Behance URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'topbar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'logo',
        'label'       => 'Homepage Logo',
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'headerHomepage',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
          'id'          => 'logoSlogan',
          'label'       => 'Homepage Slogan',
          'desc'        => '',
          'std'         => '',
          'type'        => 'text',
          'section'     => 'headerHomepage',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'class'       => ''
        ),
    array(
        'id'          => 'logoSloganColor',
        'label'       => 'Slogan Text Color',
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'headerHomepage',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
     array(
          'id'          => 'logoSloganSize',
          'label'       => 'Slogan Text Size',
          'desc'        => 'In pixels eg: 12px',
          'std'         => '',
          'type'        => 'text',
          'section'     => 'headerHomepage',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'class'       => ''
        ),
     array(
             'id'          => 'logoTitle',
             'label'       => 'Logo Title & Alternate Text',
             'desc'        => '',
             'std'         => '',
             'type'        => 'text',
             'section'     => 'headerHomepage',
             'rows'        => '',
             'post_type'   => '',
             'taxonomy'    => '',
             'class'       => ''
           ),
       array(
            'id'          => 'logoHref',
            'label'       => 'Logo Link',
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'section'     => 'headerHomepage',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
      array(
          'id'          => 'logoUZIT',
          'label'       => 'UZIT Logo',
          'desc'        => '',
          'std'         => '',
          'type'        => 'upload',
          'section'     => 'headerUZIT',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'class'       => ''
        ),
        array(
              'id'          => 'logoUZITSlogan',
              'label'       => 'UZIT Slogan',
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'headerUZIT',
              'rows'        => '',
              'post_type'   => '',
              'taxonomy'    => '',
              'class'       => ''
            ),
        array(
            'id'          => 'logoUZITSloganColor',
            'label'       => 'Slogan Text Color',
            'desc'        => '',
            'std'         => '',
            'type'        => 'colorpicker',
            'section'     => 'headerUZIT',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
      array(
           'id'          => 'logoUZITSloganSize',
           'label'       => 'Slogan Text Size',
           'desc'        => 'In pixels eg: 12px',
           'std'         => '',
           'type'        => 'text',
           'section'     => 'headerUZIT',
           'rows'        => '',
           'post_type'   => '',
           'taxonomy'    => '',
           'class'       => ''
         ),
      array(
            'id'          => 'logoUZITTitle',
            'label'       => 'UZIT Logo Title & Alternate Text',
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'section'     => 'headerUZIT',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
      array(
          'id'          => 'logoUZITHref',
          'label'       => 'Logo Link',
          'desc'        => '',
          'std'         => '',
          'type'        => 'text',
          'section'     => 'headerUZIT',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'class'       => ''
        ),
    array(
          'id'          => 'logoUZITThumbnail1',
          'label'       => 'UZIT Thumbnail 1',
          'desc'        => '',
          'std'         => '',
          'type'        => 'upload',
          'section'     => 'headerUZIT',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'class'       => ''
        ),
    array(
          'id'          => 'logoUZITThumbnail2',
          'label'       => 'UZIT Thumbnail 2',
          'desc'        => '',
          'std'         => '',
          'type'        => 'upload',
          'section'     => 'headerUZIT',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'class'       => ''
        ),
    array(
          'id'          => 'logoUZITThumbnail3',
          'label'       => 'UZIT Thumbnail 3',
          'desc'        => '',
          'std'         => '',
          'type'        => 'upload',
          'section'     => 'headerUZIT',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'class'       => ''
        ),
    array(
          'id'          => 'logoUZITThumbnail4',
          'label'       => 'UZIT Thumbnail 4',
          'desc'        => '',
          'std'         => '',
          'type'        => 'upload',
          'section'     => 'headerUZIT',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'class'       => ''
        ),
      array(
        'id'          => 'accent',
        'label'       => 'Accent Color',
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'bodystyling',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'buttons',
        'label'       => 'Buttons Colors',
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'bodystyling',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'page',
        'label'       => 'Page Background Color',
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'bodystyling',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'footercolor',
        'label'       => 'Footer Background Color',
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'bodystyling',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'smallfooter',
        'label'       => 'Small Footer Background Color',
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'bodystyling',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'linkscolor',
        'label'       => 'Links Color',
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'bodystyling',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'linkshovercolor',
        'label'       => 'Links Hover Color',
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'bodystyling',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'autoslide',
        'label'       => 'Enable Auto Slide?',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'slidersettings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'make_your_choice',
            'label'       => 'Make Your Choice',
            'src'         => ''
          ),
          array(
            'value'       => 'yes',
            'label'       => 'Yes',
            'src'         => ''
          ),
          array(
            'value'       => 'no',
            'label'       => 'No',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'delay',
        'label'       => 'Delay Between Slides (milliseconds, so 3000 = 3 seconds)',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'slidersettings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
            'id'          => 'speed_homepage',
            'label'       => 'Speed of transition, in miliseconds (3000 = 3 seconds)',
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'section'     => 'slidersettings',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
      array(
        'id'          => 'my_slider',
        'label'       => 'Slides',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'slidersettings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'settings'    => array( 
          array(
            'id'          => 'title2',
            'label'       => 'Title 2',
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          array(
            'id'          => 'textcolor',
            'label'       => 'Title Text Color',
            'desc'        => '',
            'std'         => '',
            'type'        => 'colorpicker',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          array(
            'id'          => 'backgroundcolor',
            'label'       => 'Title Background Color',
            'desc'        => '',
            'std'         => '',
            'type'        => 'colorpicker',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          array(
            'id'          => 'description',
            'label'       => 'Caption',
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          array(
            'id'          => 'image',
            'label'       => 'Image',
            'desc'        => '',
            'std'         => '',
            'type'        => 'upload',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          array(
            'id'          => 'thumbimage',
            'label'       => 'Thumb Image',
            'desc'        => '',
            'std'         => '',
            'type'        => 'upload',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          array(
            'id'          => 'btntext',
            'label'       => 'Button Text',
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          array(
            'id'          => 'btnurl',
            'label'       => 'Button URL',
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          )
        )
      ),
      //UZIT SLIDER SETTINGS
      array(
        'id'          => 'autoslide_uzit',
        'label'       => 'Enable Auto Slide?',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'slidersettings_uzit',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'make_your_choice',
            'label'       => 'Make Your Choice',
            'src'         => ''
          ),
          array(
            'value'       => 'yes',
            'label'       => 'Yes',
            'src'         => ''
          ),
          array(
            'value'       => 'no',
            'label'       => 'No',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'delay_uzit',
        'label'       => 'Delay Between Slides (milliseconds, so 3000 = 3 seconds)',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'slidersettings_uzit',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
          'id'          => 'speed_uzit',
          'label'       => 'Speed of transition, in miliseconds (3000 = 3 seconds)',
          'desc'        => '',
          'std'         => '',
          'type'        => 'text',
          'section'     => 'slidersettings_uzit',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'class'       => ''
        ),
      array(
        'id'          => 'slider_uzit',
        'label'       => 'Slides',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'slidersettings_uzit',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'settings'    => array( 
          array(
            'id'          => 'title2',
            'label'       => 'Title 2',
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          array(
            'id'          => 'textcolor',
            'label'       => 'Title Text Color',
            'desc'        => '',
            'std'         => '',
            'type'        => 'colorpicker',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          array(
            'id'          => 'backgroundcolor',
            'label'       => 'Title Background Color',
            'desc'        => '',
            'std'         => '',
            'type'        => 'colorpicker',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          array(
            'id'          => 'description',
            'label'       => 'Caption',
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          array(
            'id'          => 'image',
            'label'       => 'Image',
            'desc'        => '',
            'std'         => '',
            'type'        => 'upload',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          array(
            'id'          => 'thumbimage',
            'label'       => 'Thumb Image',
            'desc'        => '',
            'std'         => '',
            'type'        => 'upload',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          array(
              'id'          => 'thumbimageCaption',
              'label'       => 'Thumb Image Caption',
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'rows'        => '',
              'post_type'   => '',
              'taxonomy'    => '',
              'class'       => ''
            ),
          array(
            'id'          => 'btntext',
            'label'       => 'Button Text',
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          array(
            'id'          => 'btnurl',
            'label'       => 'Button URL',
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          )
        )
      ),
      //END
      // UZIT Training Slider
      array(
          'id'          => 'autoslide_uzit_training',
          'label'       => 'Enable Auto Slide?',
          'desc'        => '',
          'std'         => '',
          'type'        => 'select',
          'section'     => 'slidersettings_uzit_training',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'class'       => '',
          'choices'     => array( 
            array(
              'value'       => 'make_your_choice',
              'label'       => 'Make Your Choice',
              'src'         => ''
            ),
            array(
              'value'       => 'yes',
              'label'       => 'Yes',
              'src'         => ''
            ),
            array(
              'value'       => 'no',
              'label'       => 'No',
              'src'         => ''
            )
          ),
        ),
        array(
          'id'          => 'delay_uzit_training',
          'label'       => 'Delay Between Slides (milliseconds, so 3000 = 3 seconds)',
          'desc'        => '',
          'std'         => '',
          'type'        => 'text',
          'section'     => 'slidersettings_uzit_training',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'class'       => ''
        ),
        array(
            'id'          => 'speed_uzit_training',
            'label'       => 'Speed of transition, in miliseconds (3000 = 3 seconds)',
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'section'     => 'slidersettings_uzit_training',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
        array(
          'id'          => 'slider_uzit_training',
          'label'       => 'Slides',
          'desc'        => '',
          'std'         => '',
          'type'        => 'list-item',
          'section'     => 'slidersettings_uzit_training',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'class'       => '',
          'settings'    => array( 
            array(
              'id'          => 'title2',
              'label'       => 'Title 2',
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'rows'        => '',
              'post_type'   => '',
              'taxonomy'    => '',
              'class'       => ''
            ),
            array(
              'id'          => 'textcolor',
              'label'       => 'Title Text Color',
              'desc'        => '',
              'std'         => '',
              'type'        => 'colorpicker',
              'rows'        => '',
              'post_type'   => '',
              'taxonomy'    => '',
              'class'       => ''
            ),
            array(
              'id'          => 'backgroundcolor',
              'label'       => 'Title Background Color',
              'desc'        => '',
              'std'         => '',
              'type'        => 'colorpicker',
              'rows'        => '',
              'post_type'   => '',
              'taxonomy'    => '',
              'class'       => ''
            ),
            array(
              'id'          => 'description',
              'label'       => 'Caption',
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'rows'        => '',
              'post_type'   => '',
              'taxonomy'    => '',
              'class'       => ''
            ),
            array(
              'id'          => 'image',
              'label'       => 'Image',
              'desc'        => '',
              'std'         => '',
              'type'        => 'upload',
              'rows'        => '',
              'post_type'   => '',
              'taxonomy'    => '',
              'class'       => ''
            ),
            array(
              'id'          => 'thumbimage',
              'label'       => 'Thumb Image',
              'desc'        => '',
              'std'         => '',
              'type'        => 'upload',
              'rows'        => '',
              'post_type'   => '',
              'taxonomy'    => '',
              'class'       => ''
            ),
            array(
              'id'          => 'thumbimageCaption',
              'label'       => 'Thumb Image Caption',
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'rows'        => '',
              'post_type'   => '',
              'taxonomy'    => '',
              'class'       => ''
            ),
            array(
              'id'          => 'btntext',
              'label'       => 'Button Text',
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'rows'        => '',
              'post_type'   => '',
              'taxonomy'    => '',
              'class'       => ''
            ),
            array(
              'id'          => 'btnurl',
              'label'       => 'Button URL',
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'rows'        => '',
              'post_type'   => '',
              'taxonomy'    => '',
              'class'       => ''
            )
          )
        ),
      //End
      array(
        'id'          => 'smallfooterrightcontent',
        'label'       => 'Small Footer Right Content',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'theme_events_item_url',
        'label'       => 'Slug Name For "Events"',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'cps',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'theme_events_item_type_url',
        'label'       => 'Taxonomy Name For "Events"',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'cps',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'theme_causes_item_url',
        'label'       => 'Slug Name For "Causes"',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'cps',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'theme_causes_item_type_url',
        'label'       => 'Taxonomy Name For "Causes"',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'cps',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'theme_staff_item_url',
        'label'       => 'Slug Name For "Staff"',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'cps',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'theme_staff_item_type_url',
        'label'       => 'Taxonomy Name For "Staff"',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'cps',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      //UZIT SLUGS
      array(
        'id'          => 'theme_uzit_item_url',
        'label'       => 'Slug Name For "UZIT"',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'cps',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'theme_uzit_item_type_url',
        'label'       => 'Taxonomy Name For "UZIT"',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'cps',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      //end
      array(
        'id'          => 'trainertitle',
        'label'       => 'Trainer Single Post Title',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'custompagetitle',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'classestitle',
        'label'       => 'Classes Single Post Title',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'custompagetitle',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'blogtitle',
        'label'       => 'Blog Single Post Title',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'custompagetitle',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'searchtitle',
        'label'       => 'Search Page Title',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'custompagetitle',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'searchbanner',
        'label'       => 'Search Page Header IMG',
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'custom_page_header_img',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'authorbanner',
        'label'       => 'Author Page Header IMG',
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'custom_page_header_img',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'archivebanner',
        'label'       => 'Archive Page Header IMG',
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'custom_page_header_img',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'datebanner',
        'label'       => 'Date Page Header IMG',
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'custom_page_header_img',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}