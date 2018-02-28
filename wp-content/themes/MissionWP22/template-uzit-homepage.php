<?php /*
  Template Name: UZIT Homepage
 */ ?>


<?php get_header(); ?>

    <div id="UzitSlider" class="sliderWrapper">
        <div id="slider" class="flexslider">
            <div class="sliderLogo" style="display:none;">
                <a href="<?php echo home_url(); ?>"><img alt="" src="<?php echo ot_get_option('logo') ?>" /></a>
            </div>
            <ul class="slides">
                <?php 
                if ( function_exists( 'ot_get_option' ) ) {
                    /* get the slider array */
                    $slides = ot_get_option( 'slider_uzit', array() );
                    $count = 0;
                    if ( ! empty( $slides ) ) {
                        foreach( $slides as $slide ) {
                            echo '<li id="Slide-'.  $count .'"><a href="'.$slide['btnurl'].'"><img src="'.$slide['image'].'" alt="'.$slide['title'].'" /></a><div class="flex-holder"><div class="flex-caption"><div>';
                            if($slide['title']) {
                                echo '<a href="'.$slide['btnurl'].'"><h1 style="color: '.$slide['textcolor'].'; background: '.$slide['backgroundcolor'].';">'.$slide['title'].'</h1><br>';
                            }
                            if($slide['title2']) {
                                echo '<h1 style="color: '.$slide['textcolor'].'; background: '.$slide['backgroundcolor'].';">'.$slide['title2'].'</h1>';
                            }
                            echo '</a>';
                            if($slide['description']) {
                                echo '<span class="flex-caption-decription">';
                                echo $slide['description'];
                                echo '</span>';
                            }
                            if($slide['btntext']) { 
                                echo '   <ul class="caption-btn"><li><a href="'.$slide['btnurl'].'">'.$slide['btntext'].' &rarr;</a></li></ul>';
                            }
                            echo ' </div></div></div></li>';
                            $count++;
                        }
                    }
                }
                ?>
                <script>
                jQuery('li#Slide-4 .flex-caption div').css('margin-top','-140px').css('top','50%');
                </script>
            </ul>
            <script type="text/javascript">
            jQuery(window).load(function() {
                jQuery('#carousel').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    itemWidth: 215,
                    itemMargin: 20,
                    asNavFor: '#slider'
                });
                jQuery('#slider').flexslider({
                    animation: "fade",
                    animationSpeed: 600, 
                    controlNav: false,
                    animationLoop: true,
                    <?php if (ot_get_option('autoslide_uzit') == 'yes') { ?>
                    slideshow: true, //Boolean: Animate slider automatically
                    slideshowSpeed: <?php echo ot_get_option('delay_uzit') ?>, 
                    <?php } else { ?>
                    slideshow: false,  
                    <?php }  ?>
                    sync: "#carousel",
                    start: function(slider){
                        jQuery('body').removeClass('loading');
                    }
                });
            });
            </script>
        </div>

    <?php if ( !empty( $slides ) ): ?>
    <div id="UzitCarousel" class="carouselWrapper">
        <div class="container">
            <div class="sixteen columns">
                
                <div id="carousel" class="flexslider">
                    <ul class="slides">
                        <?php 
                        if ( function_exists( 'ot_get_option' ) ) {
                            /* get the slider array */
                            $slides = ot_get_option( 'slider_uzit', array() );
                            
                            if ( ! empty( $slides ) ) {
                                foreach( $slides as $slide ) {
                                    echo '<li class="four columns">';
                                    if($slide['thumbimage']) { 
                                        echo '<img src="'.$slide['thumbimage'].'" alt="'.$slide['title'].'" />';
                                    }
                                    echo ' </li>';
                                }
                            }
                        }
                        ?>
                    </ul>
                </div>
        
            </div>
        </div>
    </div>
    <?php endif; ?>
    
</div>


<div id="UzitContent" class="homePageContent container">
    
    <script>
    (new Image()).src = "/wp-content/themes/MissionWP22/images/assets/uzit/trainings_1_hover.jpg";
    (new Image()).src = "/wp-content/themes/MissionWP22/images/assets/uzit/partners_1_hover.jpg";
    (new Image()).src = "/wp-content/themes/MissionWP22/images/assets/uzit/testimonials_1_hover.jpg";
    (new Image()).src = "/wp-content/themes/MissionWP22/images/assets/uzit/modalities_1_hover.jpg";
    </script>
    
    <div class="section clearfix">
        <div class="col trainings">
            <a href="/uzit/trainings">
                <img src="<?php echo ot_get_option('logoUZITThumbnail1'); ?>" alt="" />
                <!--
                <img src="/wp-content/themes/MissionWP22/images/assets/uzit/trainings_1.jpg" alt="" />
                -->
            </a>
        </div>
        <div class="col partners">
            <a href="/uzit/partners/">
                <img src="<?php echo ot_get_option('logoUZITThumbnail2'); ?>" alt="" />
                <!--
                <img src="/wp-content/themes/MissionWP22/images/assets/uzit/partners_1.jpg" alt="" />
                -->
            </a>
        </div>
        <div class="col testimonials">
            <a href="/uzit/testimonials/">
                <img src="<?php echo ot_get_option('logoUZITThumbnail3'); ?>" alt="" />
                <!--
                <img src="/wp-content/themes/MissionWP22/images/assets/uzit/testimonials_1.jpg" alt="" />
                -->
            </a>
        </div>
        <div class="col modalities">
            <a href="/uzit/modalities/ ">
                <img src="<?php echo ot_get_option('logoUZITThumbnail4'); ?>" alt="" />
                <!--
                <img src="/wp-content/themes/MissionWP22/images/assets/uzit/modalities_1.jpg" alt="" />
                -->
            </a>
        </div>
    </div>
    
    <ul class="horizontalWidgetArea clearfix">
        
         <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("UZIT Home Full")) ; ?>
         <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("UZIT Home One Half")) ; ?>
        
    </ul>
    
    <ul class="leftWidgetArea six columns clearfix">
        
        
        
    </ul>
    
    <ul class="rightWidgetArea ten columns clearfix">
        
        
        
    </ul>
    
</div>

<?php get_footer(); ?>