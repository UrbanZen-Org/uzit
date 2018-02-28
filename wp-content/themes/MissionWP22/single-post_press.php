<?php
/* AJAX check  */
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $is_ajax = 1;
}
else{
    $is_ajax = 0;
    get_header();
}
?>
<?php
    $press_id = get_the_ID();
    $logo_thumbnail_src = get_post_meta(get_the_ID(), 'logo_thumbnail_src', true);
    $download_src = get_post_meta(get_the_ID(), 'download_src', true);
    $fb_link = get_post_meta(get_the_ID(), 'fb_link', true);
    $twitter_link = get_post_meta(get_the_ID(), 'twitter_link', true);
    $press_date = get_post_meta(get_the_ID(), 'press_date', true);
    
    $pageSlider = get_post_meta(get_the_ID(), 'pressSlider', true);
    
    $permalink = get_permalink(get_the_ID());

    $classes = get_the_terms( get_the_ID(), 'voice_item_types' );
    $class_string = '';
    $class_array = array();
    foreach ( $classes as $class ) {
        $class_array[] = $class->slug;
    }
    $class_string = join( " ", $class_array );
    
?>



<div id="PressArticle">
    
    <div class="clearfix">
    
        <div class="column slider-container">
            <?php if( $pageSlider): ?>
            <div class="sliderWrapper">
                <div id="slider" class="flexslider">
                    <ul class="slides">
                        <?php
                        $list = $pageSlider;
                        if (!empty($list)) {
                            foreach ($list as $slide) {
                                echo '<li><img src="' . $slide['pageSliderImg'] . '" alt="' . $slide['title'] . '" /></a></li>';
                            }
                        }
                        ?>
                    </ul>
                    
                </div>
            </div>
            
            <script type="text/javascript">
                <?php if($is_ajax): ?>
                jQuery('#slider').flexslider({
                    animation: 'slide',
                    directionNav: true,
                    controlNav: true,
                    slideshow: false,
                    slideshowSpeed: 6000,
                    animationLoop: true,
                    sync: "#carousel",
                    start: function(slider){
                        jQuery('.slider-container').css('height', '550px');
                    },
                    after: function(){
                        //jQuery(".ui-dialog-content").dialog("option", "position", ['center', 'center']);
                    } 
                });
                <?php else: ?>
                jQuery(window).load(function() {
                    jQuery('#slider').flexslider({
                        animation: 'slide',
                        directionNav: true,
                        controlNav: true,
                        slideshow: false,
                        slideshowSpeed: 6000,
                        animationLoop: true,
                        sync: "#carousel",
                        start: function(slider){
                            jQuery('.slider-container').css('height', '550px');
                        },
                    });
                });
                <?php endif; ?>
            </script>
            
            <?php endif; ?>
        </div>
    
        <div class="column article-details">
            
            <img class="press-logo" src="<?php echo $logo_thumbnail_src; ?>" />
            
            <h1><?php echo the_title(); ?></h1>
            
            <?php if($press_date): ?>
            <p><?php echo $press_date; ?></p>
            <?php endif ?>
            
            <?php if($download_src): ?>
            <a class="download-link" href="<?php echo $download_src; ?>" title="download" target="_blank">Download</a>
            <?php endif ?>
            
            
            <div class="social">
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink; ?>" target="_blank">Share on Facebook</a>
                <br />
                <script src="http://platform.twitter.com/widgets.js"></script>
                <a href="https://twitter.com/intent/tweet?original_referer=<?php echo rawurlencode($permalink); ?>&text=PRESS%20-%20<?php echo rawurlencode(the_title()); ?>&tw_p=tweetbutton&url=<?php echo rawurlencode($permalink); ?>" class="twitter-share-button" data-count="none" target="_blank">Share on Twitter</a>  
            </div>
            
            
            <?php if($fb_link || $twitter_link): ?>
            <?php if($fb_link): ?>
            <a href="<?php echo $fb_link; ?>">FB</a>
            <?php endif; ?>
            <?php if($twitter_link): ?>
            <a href="<?php echo $twitter_link; ?>">FB</a>
            <?php endif; ?>
            <?php endif; ?>
            
        </div>
    
    </div>
    
</div>

<?php
/* AJAX check  */
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
}
else{
    echo "<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/press.css' type='text/css' media='all' />";
    get_footer();
}
?>
