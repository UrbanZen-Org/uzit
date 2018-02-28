<?php 
/*
    Template Name: UZIT Page (Default) Template
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
    $pageSlider = get_post_meta(get_the_ID(), 'pageSlider', true);
    $BodyBackgroundColor = get_post_meta(get_the_ID(), 'BodyBackgroundColor', true);
?>



<div class="uzit-posts pageContent">
    
    <?php 
    if( $headerimg) { 
    ?>
    
    <div class="container" style="background-color:#000;display:none">
        
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
        <div id="<?php if($BodyBackgroundColor == '#ffffff' || $BodyBackgroundColor == '#FFFFFF'){echo 'BGWhite'; } ?>" class="sixteen columns" style="background-color:<?php echo $BodyBackgroundColor; ?>">
        <?php 
        } 
        ?>
    <?php 
    } 
    ?>
    
    
    <?php if( $pageSlider): ?>
    <div class="sliderWrapper">
        <div id="slider" class="flexslider">
            <ul class="slides">
                <?php
                /* get the slider array */
                $list = get_post_meta($post->ID, 'pageSlider', TRUE) ;
                if (!empty($list)) {
                    foreach ($list as $slide) {
                        echo '<li>';
                        if($slide['pageSliderHref']) {
                            echo '<a href="'.$slide['pageSliderHref'].'" title="Learn More">';
                        }
                        echo '<div class="flex-caption-default" style="left:25px;top:50%;margin:-31px 0 0 0;">';
                        echo '<h1 style="color:' . $slide['pageSliderTitleColor'] . '">'. $slide['title'] .'</h1>';
                        if($slide['pageSliderCaption']) {
                            echo '<span class="flex-caption-decription" style="color:' . $slide['pageSliderCaptionColor']. '">';
                            echo $slide['pageSliderCaption'];
                            if($slide['pageSliderHref']) { 
                                echo '<a class="button" href="'.$slide['pageSliderHref'].'" style="width: 100%;display: block;">LEARN MORE</a>';
                            }
                            echo '</span>';
                        }
                        echo '</div>';
                        echo '<img src="' . $slide['pageSliderImg'] . '" alt="' . $slide['title'] . '" />';
                        if($slide['pageSliderHref']) {
                            echo '</a>';
                        }
                        echo '</li>';
                    }
                }
                ?>
            </ul>
            <?php
                $animation = get_post_meta($post->ID, 'pageSliderAnimation', TRUE);
            ?>
            <script type="text/javascript">
                jQuery(window).load(function() {
                    jQuery('#slider').flexslider({
                        animation: "<?php if($animation){echo $animation;}else{echo 'slide';} ?>",
                        controlNav: false,
                        //directionNav:true,
                        animationLoop: true,
                        slideshow: true,
                        sync: "#carousel",
                        start: function(slider){
                            //jQuery('body').removeClass('loading');
                        }
                    });
                });
            </script>
        </div>
    </div>
    <?php endif; ?>
    
    
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