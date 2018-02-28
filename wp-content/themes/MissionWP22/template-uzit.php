<?php 
/*
    Template Name: UZIT Page Templates
*/ 
?>


<?php get_header(); ?>


<?php 
    $headerimg = get_post_meta(get_the_ID(), 'headerimg', true);
    $sidebar = get_post_meta(get_the_ID(), 'sidebar', true);
    $pageTitle = get_post_meta(get_the_ID(), 'pageTitle', true);
    $lightboxHTML = get_post_meta(get_the_ID(), 'lightboxHTML', true);
    $jQueryCycleScript = get_post_meta(get_the_ID(), 'jQueryCycleScript', true);
    //$jQueryLazyLoad = get_post_meta(get_the_ID(), 'jQueryLazyLoad', true);
?>
<?php if(ot_get_option( 'slider_uzit_training')):?>
<div id="UzitSlider" class="sliderWrapper">
    <div id="slider" class="flexslider">
        <div class="sliderLogo" style="display:none;">
            <a href="<?php echo home_url(); ?>"><img alt="" src="<?php echo ot_get_option('logo') ?>" /></a>
        </div>
        <ul class="slides">
            <?php 
            if ( function_exists( 'ot_get_option' ) ) {
                /* get the slider array */
                $slides = ot_get_option( 'slider_uzit_training', array() );
                if ( ! empty( $slides ) ) {
                    foreach( $slides as $slide ) {
                        echo '<li><a href="'.$slide['btnurl'].'"><img src="'.$slide['image'].'" alt="'.$slide['title'].'" /></a><div class="flex-holder"><div class="flex-caption"><div>';
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
                    }
                }
            }
            ?>
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
</div>
<?php endif; ?>
<div class="uzit-posts pageContent" style="background-color:#fff;">
    
    <?php 
    if( $headerimg) { 
    ?>
    
    <div class="container" style="background-color:#fff;display:none">
        
        <?php 
        if ($sidebar  == 'yes') { 
        ?>
        
        <div class="nine columns offset-by-one">
            
        <?php 
        } else { 
        ?>
        
        <div class="fourteen columns offset-by-one">
        
        <?php 
            } 
        ?>
    <?php 
    } else { 
    ?>
    <div class="container noBannerContent">
        <?php 
        if ($sidebar  == 'yes') { 
        ?>
        <div class="eleven columns">
        <?php 
        } else { 
        ?>
        <div class="sixteen columns">
        <?php 
        } 
        ?>
    <?php 
    } 
    ?>
    
    <?php if($pageTitle): ?>
    <h1 class="pageTitle"><?php the_title(); ?></h1>
    <?php endif; ?>
    
    <?php if($lightboxHTML): ?>
        <?php echo $lightboxHTML; ?>
    <?php endif; ?>
    
    <?php
    if (have_posts ()) {
        while (have_posts ()) {
            (the_post());
    ?>
    <?php
        $pageSlider = get_post_meta(get_the_ID(), 'pageSlider', true);
    ?>
    <?php 
    if( $pageSlider) { 
    ?>
    <div class="sliderWrapper">
        <div id="slider" class="flexslider">
            <ul class="slides">
                <?php
                /* get the slider array */
                $list = get_post_meta($post->ID, 'pageSlider', TRUE) ;
                if (!empty($list)) {
                    foreach ($list as $slide) {
                        echo '<li><img src="' . $slide['pageSliderImg'] . '" alt="' . $slide['title'] . '" /></a></li>';
                    }
                }
                ?>
            </ul>
            
            <script type="text/javascript">
                jQuery(window).load(function() {
                    jQuery('#slider').flexslider({
                        animation: "slide",
                        controlNav: false,
                        animationLoop: true,
                        slideshow: false,
                        sync: "#carousel",
                        start: function(slider){
                            jQuery('body').removeClass('loading');
                        }
                    });
                });
            </script>
        </div>
    </div>
    <?php 
    } 
    ?>
    <div class="postContent"><?php the_content(); ?></div>
    <?php }} else { ?>
    <div class="post box">
        <h3><?php _e('There is not post available.', 'localization'); ?></h3>
    </div>
    <?php } ?>
    
    </div>
        
    <?php 
    if ($sidebar  == 'yes') { 
    ?>
    <ul class="sidebar four columns offset-by-one clearfix">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Pages")) ; ?>
    </ul>
    <?php
    }
    ?>
    </div>
</div>

<?php if($jQueryCycleScript): ?>
    <script type="text/javascript" src="/wp-content/themes/MissionWP22/js/jquery.cycle.all.latest.js"></script>
<!-- jQuery Cycle -->
<script>
    <?php echo $jQueryCycleScript; ?>
</script>
<!-- end -->
<?php endif; ?>

<?php get_footer(); ?>