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

    $team_facebook_url = get_post_meta(get_the_ID(), 'team_facebook_url', true);
    $team_twitter_url = get_post_meta(get_the_ID(), 'team_twitter_url', true);
    $team_website_url = get_post_meta(get_the_ID(), 'team_website_url', true);
    
    $pageSlider = get_post_meta(get_the_ID(), 'pressSlider', true);
    
    

    $classes = get_the_terms( get_the_ID(), 'voice_item_types' );
    $class_string = '';
    $class_array = array();
    foreach ( $classes as $class ) {
        $class_array[] = $class->slug;
    }
    $class_string = join( " ", $class_array );
    
?>
<?php if(!$is_ajax): ?>
<div class="container noBannerContent">
    <div class="sixteen columns" style="margin:20px 0;">
<?php endif; ?>

        <div id="TeamMember">
            <div class="clearfix">
                
                <?php if( $pageSlider): ?>
                <div class="column slider-container" style="width:80%;margin:0 auto;">
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
                                //jQuery('.slider-container').css('height', '300px');
                            },
                            after: function(){
                                jQuery(".ui-dialog-content").dialog("option", "position", ['center', 'center']);
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
                                    //jQuery('.slider-container').css('height', '250px');
                                },
                            });
                        });
                        <?php endif; ?>
                    </script>
                </div>
                <?php endif; ?>
    
                <div class="column article-details">
                    <h1><?php echo the_title(); ?></h1>
                    <div class="single-post-content">
                        <?php
                            if (have_posts ()) {
                                while (have_posts ()) {
                                    (the_post());
                                    the_content();
                                }
                            }
                        ?>
                    </div>
            
                </div>
    
            </div>
    
            <?php if($team_website_url || $team_facebook_url || $team_twitter_url): ?>
            <div class="social clearfix">
        
                <?php if($team_facebook_url): ?>
                <a href="<?php echo $team_facebook_url; ?>" target="_blank">FACEBOOK</a>
                <span class="separate">:</span>
                <?php endif; ?>
        
                <?php if($team_twitter_url): ?>
                <a href="<?php echo $team_twitter_url; ?>" target="_blank">TWITTER</a>
                <span class="separate">:</span>
                <?php endif; ?>
        
                <?php if($team_website_url): ?>
                <a href="<?php echo $team_website_url; ?>" target="_blank">WEBSITE</a>
                <?php endif; ?>
    
            </div>
            <?php endif; ?>
    
        </div>
        
<?php if(!$is_ajax): ?>      
    </div>
</div>
<?php endif; ?>

<?php
/* AJAX check  */
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
}
else{
    echo "<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/team.css' type='text/css' media='all' />";
    get_footer();
}
?>
