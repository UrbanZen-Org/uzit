<?php /*
  Template Name: Causes Template
 */ ?>


<?php get_header(); ?>


<?php 
    $logo_src = get_post_meta(get_the_ID(), 'logo_img', true);
    $sidebar = get_post_meta(get_the_ID(), 'sidebar', true);
    $pageSlider = get_post_meta(get_the_ID(), 'partnerSlideshow', true);
?>

<script>
    jQuery('li#menu-item-3020').addClass('current-menu-item');
</script>

<div class="pageContent withContent">
    
    <div class="container noBannerContent">
        
        <div id="Partner" class="clearfix">
        
            <div class="partner-logo">
                <img src="<?php echo $logo_src; ?>" alt="<?php the_title(); ?>" />
            </div>
            
            <div class="partner-description">
                <h3><?php the_title(); ?></h3>
                <?php
                    if (have_posts ()) {
                        while (have_posts ()) {
                            (the_post());
                            the_content();
                        }
                    }
                ?>
                
                <?php if( $pageSlider): ?>
                <div class="sliderWrapper">
                    <div id="slider" class="flexslider">
                        <ul class="slides">
                            <?php
                                if (!empty($pageSlider)) {
                                    foreach ($pageSlider as $slide) {
                                        echo '<li><div class="slide-title"><h1>'. $slide['title'] .'</h1></div><img src="' . $slide['pageSliderImg'] . '" alt="' . $slide['title'] . '" /></a></li>';
                                    }   
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <script type="text/javascript">
                    jQuery(window).load(function() {
                        jQuery('#slider').flexslider({
                            animation: 'slide',
                            directionNav: true,
                            controlNav: true,
                            slideshow: true,
                            animationLoop: true,
                            sync: "#carousel",
                            start: function(slider){
                                //jQuery('body').removeClass('loading');
                            }
                        });
                    });
                </script>
                <?php endif; ?>
            </div>
        
        </div>
        
    </div>
    
    <?php if ($sidebar  == 'yes') { ?>
    <ul class="sidebar four columns offset-by-one clearfix">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Causes")) ; ?>
    </ul>
    <?php }  ?>

</div>

<?php get_footer(); ?>