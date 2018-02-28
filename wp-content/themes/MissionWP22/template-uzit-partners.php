<?php 
/*
    Template Name: UZIT Partners Page Template
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
?>
<div class="uzit-posts pageContent">
    
    <div class="container" style="background-color:#000;padding-top:0;">
        
        <?php
        if (have_posts ()) {
            while (have_posts ()) {
                (the_post());
        ?>
        <?php }} else { ?>
        <?php } ?>
        
        <?php the_content(); ?>
        
        <?php if( $pageSlider): ?>
        <div class="clearfix" style="margin:20px 0;">
            <?php
            /* get the slider array */
            $list = get_post_meta($post->ID, 'pageSlider', TRUE) ;
            if (!empty($list)) {
                foreach ($list as $slide) {
                    echo '<div class="partner" style="background-image:url('. $slide['pageSliderImg'] .')"><div class="overlay"><div class="caption-container"><span class="title">'. $slide['title'] .'</span><span class="caption">'. $slide['pageSliderCaption'] .'</span></div></div></div>';
                }
            }
            ?>
        </div>
        <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>