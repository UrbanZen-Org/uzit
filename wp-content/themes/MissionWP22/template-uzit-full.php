<?php 
/*
    Template Name: UZIT Page (Full) Template
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

<?php
    $pageSlider = get_post_meta(get_the_ID(), 'pageSlider', true);
    $animation = get_post_meta(get_the_ID(), 'pageSliderAnimation', true);
    $controlNav = get_post_meta(get_the_ID(), 'pageSliderControlNav', true);
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
                    echo '<li><div class="slide-title"><h1>'. $slide['title'] .'</h1></div><img src="' . $slide['pageSliderImg'] . '" alt="' . $slide['title'] . '" /></a></li>';
                }
            }
            ?>
        </ul>
        
        <script type="text/javascript">
            jQuery(window).load(function() {
                jQuery('#slider').flexslider({
                    animation: '<?php if($animation){echo $animation;}else{echo 'slide';} ?>',
                    <?php if($controlNav == 'true'): ?>
                    directionNav: true,
                    controlNav: true,
                    slideshow: false,
                    <?php else: ?>
                    directionNav: false,
                    controlNav: false,
                    slideshow: true,
                    slideshowSpeed: 6000,
                    <?php endif; ?>
                    animationLoop: true,
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

<div class="uzit-posts pageContent" style="background-color:#000;">
    
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
        <div >
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
<style>
div.slide-title{
    position: absolute;
    font-size: 3em;
    font-weight: 100;
    top: 50%;
    line-height: 1.3em;
    margin-top: -23px;
    left: 20%;
}
</style>
<?php if($jQueryCycleScript): ?>
    <script type="text/javascript" src="/wp-content/themes/MissionWP22/js/jquery.cycle.all.latest.js"></script>
<!-- jQuery Cycle -->
<script>
    <?php echo $jQueryCycleScript; ?>
</script>
<!-- end -->
<?php endif; ?>

<?php get_footer(); ?>