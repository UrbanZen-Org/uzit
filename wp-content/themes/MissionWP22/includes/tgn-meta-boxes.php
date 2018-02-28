<?php
/**
 * Initialize the meta boxes. 
 */
add_action( 'admin_init', '_custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types
 * in demo-theme-options.php.
 *
 * @return    void
 *
 * @access    private
 * @since     2.0
 */
function _custom_meta_boxes() {
    
    /*
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
    $my_meta_box1 = array(
        'id'          => 'my_meta_box1',
        'title'       => 'Causes Post Options',
        'desc'        => '',
        'pages'       => array('post_causes'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
                            array(
                            'label'       => 'Image',
                            'id'          => 'bigimg',
                            'type'        => 'upload',
                            'desc'        => '',
                            'std'         => '',
                            'rows'        => '',
                            'post_type'   => '',
                            'taxonomy'    => '',
                            'class'       => '',
                            'section'     => 'miscellaneous'
                            ),
                            array(
                                'label'       => 'Donate Button Text',
                                'id'          => 'donatetext',
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
                                'label'       => 'Donate Button URL',
                                'id'          => 'donateurl',
                                'type'        => 'text',
                                'desc'        => '',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            )
                        )
    );
  
    $my_meta_box7 = array(
        'id'          => 'my_meta_box7',
        'title'       => 'Events Post Options',
        'desc'        => '',
        'pages'       => array('post_events'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
                            array(
                                'label'       => 'Image',
                                'id'          => 'bigimg',
                                'type'        => 'upload',
                                'desc'        => '',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                            array(
                                'label'       => 'Allow Event Module On This Page?',
                                'id'          => 'eventModule',
                                'type'        => 'select',
                                'desc'        => '',
                                'choices'     => array(
                                                    array(
                                                        'label'       => 'Make your choice',
                                                        'value'       => 'choice'
                                                    ),
                                                    array(
                                                        'label'       => 'Yes',
                                                        'value'       => 'yes'
                                                    ),
                                                    array(
                                                        'label'       => 'No',
                                                        'value'       => 'no'
                                                    )
                                                ),
                                'std'         => 'maybe',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                            array(
                                'label'       => 'Facebook Button Text',
                                'id'          => 'facebooktext',
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
                                'label'       => 'Facebook Button URL',
                                'id'          => 'facebookurl',
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
                                'label'       => 'Month',
                                'id'          => 'eventsmonth',
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
                                'label'       => 'Day',
                                'id'          => 'eventsday',
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
                                'label'       => 'Info 1 (Use H3 + text, like this < h3>TIME</h3> 5:00PM to 9:00PM)',
                                'id'          => 'info1',
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
                                'label'       => 'Info 2 (Use H3 + text, like this < h3>TIME</h3> 5:00PM to 9:00PM)',
                                'id'          => 'info2',
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
                                'label'       => 'Info 3 (Use H3 + text, like this < h3>TIME</h3> 5:00PM to 9:00PM)',
                                'id'          => 'info3',
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
                                'label'       => 'Info 4 (Use H3 + text, like this < h3>TIME</h3> 5:00PM to 9:00PM)',
                                'id'          => 'info4',
                                'type'        => 'text',
                                'desc'        => '',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                        )
    );
  
    $my_meta_box8 = array(
        'id'          => 'my_meta_box8',
        'title'       => 'Staff Post Options',
        'desc'        => '',
        'pages'       => array('post_staff'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
                            array(
                                'label'       => 'Image',
                                'id'          => 'bigimg',
                                'type'        => 'upload',
                                'desc'        => '',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                            array(
                                'label'       => 'Info 1 (Use span for description, like this : Phone: < span >(514) 505-1548< /span >)',
                                'id'          => 'info1',
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
                                'label'       => 'Info 2 ((Use span for description, like this : Phone: < span >(514) 505-1548< /span >)',
                                'id'          => 'info2',
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
                                'label'       => 'Info 3 (Use span for description, like this : Phone: < span >(514) 505-1548< /span >)',
                                'id'          => 'info3',
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
                                'label'       => 'Info 4 (Use span for description, like this : Phone: < span >(514) 505-1548< /span >)',
                                'id'          => 'info4',
                                'type'        => 'text',
                                'desc'        => '',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
        )
    );
  
    
    $my_meta_box2 = array(
        'id'          => 'my_meta_box2',
        'title'       => 'Pages Options',
        'desc'        => '',
        'pages'       => array( 'page', 'post_events', 'post_causes','post_staff', 'post', 'post_community'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
                            array(
                                'label'       => 'Header Image',
                                'id'          => 'headerimg',
                                'type'        => 'upload',
                                'desc'        => '',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                            array(
                                'label'       => 'Body Background Color',
                                'id'          => 'BodyBackgroundColor',
                                'type'        => 'text',
                                'desc'        => '',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'hex color (include has) e.g. #000000, leave blank for default'
                            ),
                            array(
                                'label'       => 'Allow Sidebar On This Page?',
                                'id'          => 'sidebar',
                                'type'        => 'select',
                                'desc'        => '',
                                'choices'     => array(
                                                    array(
                                                        'label'       => 'Make your choice',
                                                        'value'       => 'choice'
                                                    ),
                                                    array(
                                                        'label'       => 'Yes',
                                                        'value'       => 'yes'
                                                    ),
                                                    array(
                                                        'label'       => 'No',
                                                        'value'       => 'no'
                                                    )
                                                ),
                                'std'         => 'maybe',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                            array(
                                'label'       => 'Slider Animation',
                                'id'          => 'pageSliderAnimation',
                                'type'        => 'select',
                                'desc'        => '',
                                'choices'     => array(
                                                    array(
                                                        'label'       => 'Slide',
                                                        'value'       => 'slide'
                                                    ),
                                                    array(
                                                        'label'       => 'Fade',
                                                        'value'       => 'fade'
                                                    )
                                                ),
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                            array(
                                'label'       => 'Slider Control Nav',
                                'id'          => 'pageSliderControlNav',
                                'type'        => 'select',
                                'desc'        => 'If Disabled, Control Nav disappears and slideshow starts automatically',
                                'choices'     => array(
                                                    array(
                                                        'label'       => 'Enable',
                                                        'value'       => 'true'
                                                    ),
                                                    array(
                                                        'label'       => 'Disable',
                                                        'value'       => 'false'
                                                    )
                                                ),
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                            $testingSlider = array(
                                'label'       => 'Page Slider',
                                'id'          => 'pageSlider',
                                'type'        => 'list-item',
                                'settings'    => array(
                                                    array(
                                                        'label'       => 'Title Color',
                                                        'id'          => 'pageSliderTitleColor',
                                                        'type'        => 'text',
                                                        'std'         => '',
                                                        'rows'        => '',
                                                        'post_type'   => '',
                                                        'taxonomy'    => '',
                                                        'class'       => '',
                                                        'desc'        => 'Hex color with hash e.g. #000000'
                                                      ),
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
                                                      array(
                                                          'label'       => 'Caption',
                                                          'id'          => 'pageSliderCaption',
                                                          'type'        => 'text',
                                                          'std'         => '',
                                                          'rows'        => '',
                                                          'post_type'   => '',
                                                          'taxonomy'    => '',
                                                          'class'       => ''
                                                        ),
                                                        array(
                                                          'label'       => 'Caption Color',
                                                          'id'          => 'pageSliderCaptionColor',
                                                          'type'        => 'text',
                                                          'std'         => '',
                                                          'rows'        => '',
                                                          'post_type'   => '',
                                                          'taxonomy'    => '',
                                                          'class'       => '',
                                                          'desc'        => 'Hex color'
                                                        ),
                                                        array(
                                                          'label'       => 'Caption Alignment',
                                                          'id'          => 'pageSliderCaptionAlign',
                                                          'type'        => 'select',
                                                          'choices'     => array(
                                                                              array(
                                                                                  'label'       => 'left',
                                                                                  'value'       => 'left'
                                                                              ),
                                                                              array(
                                                                                  'label'       => 'right',
                                                                                  'value'       => 'right'
                                                                              )
                                                                          ),
                                                          'std'         => '',
                                                          'rows'        => '',
                                                          'post_type'   => '',
                                                          'taxonomy'    => '',
                                                          'class'       => ''
                                                        ),
                                                        array(
                                                              'label'       => 'Caption Link',
                                                              'id'          => 'pageSliderHref',
                                                              'type'        => 'text',
                                                              'std'         => '',
                                                              'rows'        => '',
                                                              'post_type'   => '',
                                                              'taxonomy'    => '',
                                                              'class'       => '',
                                                              'raw'         =>'true'
                                                            ),
                                                ),
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'general_default'
                            ),
                            array(
                                'label'       => 'Page Specific CSS',
                                'id'          => 'pageCSS',
                                'type'        => 'textarea',
                                'desc'        => 'Keep CSS post/page specific. Adhere to strict id/class scope specific rules. No globals.',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                            array(
                                'label'       => 'Show Page Title',
                                'id'          => 'pageTitle',
                                'type'        => 'select',
                                'desc'        => '',
                                'choices'     => array(
                                                    array(
                                                        'label'       => 'Yes',
                                                        'value'       => 'yes'
                                                    ),
                                                    array(
                                                        'label'       => 'No',
                                                        'value'       => ''
                                                    )
                                                ),
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                            array(
                                'label'       => 'Lightbox HTML Contents',
                                'id'          => 'lightboxHTML',
                                'type'        => 'textarea',
                                'desc'        => 'This is where you put your thickbox contents. Add class="thickbox" on the link. More info: <a href="http://codex.wordpress.org/ThickBox" target="_blank">http://codex.wordpress.org/ThickBox</a>',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                            array(
                                'label'       => 'jQuery Cycle Script',
                                'id'          => 'jQueryCycleScript',
                                'type'        => 'textarea',
                                'desc'        => 'Enter your jQuery Cycle Script.',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                            array(
                                'label'       => 'jQuery Lazy Load',
                                'id'          => 'jQueryLazyLoad',
                                'type'        => 'textarea',
                                'desc'        => 'Initialize lazy load and options. <a href="http://www.appelsiini.net/projects/lazyload" target="_blank">Lazy Load References</a>',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            ),
                        )
    );
    
    $my_meta_box3 = array(
        'id'          => 'my_meta_box3',
        'title'       => 'Custom Posts Options',
        'desc'        => '',
        'pages'       => array('post_classes', 'post_trainers'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
                            array(
                                'label'       => 'Quote (Will go under the page title)',
                                'id'          => 'quote',
                                'type'        => 'text',
                                'desc'        => '',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            )
                        )
    );
    
    $my_meta_box4 = array(
        'id'          => 'my_meta_box4',
        'title'       => 'Trainer Posts Options',
        'desc'        => '',
        'pages'       => array('post_trainers'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
                            array(
                                'label'       => 'Contact Email',
                                'id'          => 'contactemail',
                                'type'        => 'text',
                                'desc'        => '',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            )
                        )
    );
    
    $my_meta_box5 = array(
        'id'          => 'my_meta_box5',
        'title'       => 'Post Options',
        'desc'        => '',
        'pages'       => array('post'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(      
                            array(
                                'label'       => 'Thumb Image',
                                'id'          => 'bigimg',
                                'type'        => 'upload',
                                'desc'        => '',
                                'std'         => '',
                                'rows'        => '',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => '',
                                'section'     => 'miscellaneous'
                            )
                        )
    );
    
    $my_meta_box6 = array(
        'id'          => 'my_meta_box6',
        'title'       => 'Classes Posts Options',
        'desc'        => '',
        'pages'       => array('post_classes'),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(   
                            array(
                                'label'       => 'Difficulty Level',
                                'id'          => 'difficulty',
                                'type'        => 'textarea-simple',
                                'desc'        => 'This is where you put the HTML snippet (see documentation) for the difficulty level widget.',
                                'std'         => '',
                                'rows'        => '10',
                                'post_type'   => '',
                                'taxonomy'    => '',
                                'class'       => ''
                            )
                        )
    );

    /*
    * Register our meta boxes using the 
    * ot_register_meta_box() function.
    */
    ot_register_meta_box( $my_meta_box1 );
    ot_register_meta_box( $my_meta_box2 );
    ot_register_meta_box( $my_meta_box3 );
    ot_register_meta_box( $my_meta_box4 );
    ot_register_meta_box( $my_meta_box5 );
    ot_register_meta_box( $my_meta_box6 );
    ot_register_meta_box( $my_meta_box7 );
    ot_register_meta_box( $my_meta_box8 );
}