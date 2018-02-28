<?php 
/*
    Template Name: UZIT About Page
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
    $list = get_post_meta($post->ID, 'pageSlider', TRUE) ;
?>
<div id="About" class="uzit-posts pageContent">
    
    
    
    
    <?php if( $pageSlider): ?>
              
    <?php if(!empty($list)): ?>
        
    <?php foreach($list as $slide): ?>
    <div class="sliderWrapper" style="margin:0;">
        <div id="slider" class="flexslider">
            <ul class="slides">
                <li style="position:relative;max-height:650px;overflow:hidden;">
                    
                    <img src="<?php echo $slide['pageSliderImg']; ?>" alt="<?php echo  $slide['title']; ?>" />
                    
                    <div class="caption-container">
                        <div class="caption-inner" style="text-align:<?php if($slide['pageSliderCaptionAlign']){echo $slide['pageSliderCaptionAlign'];}else{echo 'left';}?>">
                            <div class="clearfix">
                                <h1 style="margin-bottom:0;font-size: 50px;line-height:1.1em;color:<?php if($slide['pageSliderCaptionColor']){echo $slide['pageSliderCaptionColor'];}else{echo '#fff';} ?>"><?php echo  $slide['title']; ?></h1>
                                <?php if($slide['pageSliderCaption']): ?>
                                <h3 style="color:<?php if($slide['pageSliderCaptionColor']){echo $slide['pageSliderCaptionColor'];}else{echo '#fff';} ?>"><?php echo $slide['pageSliderCaption']; ?></h3>
                                <?php endif; ?>
                            </div>
                            <?php if($slide['pageSliderCaption']): ?>
                            <a class="learn-more" href="<?php echo $slide['pageSliderHref']; ?>" style="margin-top:15px;width:180px;border-width:2px;float:<?php if($slide['pageSliderCaptionAlign']){echo $slide['pageSliderCaptionAlign'];}else{echo 'left';}?>">LEARN MORE</a>
                            <?php endif ?>
                        </div>
                    </div>
                </li>
                
            </ul>
        </div>
    </div>
    <?php endforeach; ?>
    
    <style>
    .sliderWrapper .caption-container{
        width:100%;position:absolute;bottom:50px;/*background: url('/wp-content/themes/MissionWP22/stylesheets/override/images/trans_black_bg.png') repeat center center*/;
    }
    .sliderWrapper .caption-inner{
        /*width:940px;margin:0 auto;*/position:relative;
        width:940px;
        text-align:left;
        /*width: 90%;*/
        margin: 0 auto;
    }
    .sliderWrapper .caption-inner h2{
        font-family: "Conv_HelveticaNeueLTStd-ThEx", "Helvetica", "Open Sans", Arial, serif;
        color:#fff;margin-bottom:0;line-height:1.3em;
    }
    .sliderWrapper .caption-inner h3{
        font-family: "Conv_HelveticaNeueLTStd-ThEx", "Helvetica", "Open Sans", Arial, serif;
        font-size: 20px;
        color: #FFF;
        margin-bottom: 0;
        line-height: 1.3em !important;
        display: inline-block;
    }
    .sliderWrapper a.learn-more{
        color: #63BFDA;
        border: 1px solid #63BFDA;
        padding: 10px 20px;
        text-decoration: none;
        font-size: 18px;
        height: 16px;
        display: block;
        width: 210px;
        text-align: center;
    }
    .sliderWrapper a.learn-more:hover{
        background-color:#63bfda;
        color:#fff;
    }
    </style>
    
    <?php endif; ?>
    <script type="text/javascript">
    jQuery(window).load(function() {
        jQuery('.flexslider').each(function(i){
            jQuery(this).flexslider({
                animation: "fade", //or slide
                animationSpeed: 1000, 
                controlNav: false,
                animationLoop: false,
                slideshow: false,//Boolean: Animate slider automatically
                slideshowSpeed: 4000,
                sync: "#carousel",
                start: function(slider){
                    jQuery('body').removeClass('loading');
                }
            });
        });
    });
    </script>
    <?php endif; ?>
    
</div>

<div class="container">
    <div class="sixteen columns">
        <div class="grid buttons clearfix" style="margin-top:50px;">
            
            <a class="box" href="/uzit/locate-a-class/">
                <div class="box-text">
                    FIND A CLASS
                </div>
            </a>
            <a class="box" href="/uzit/contact">
                <div class="box-text two-lines">
                    BECOME A UZIT<br />
                    CONTACT US
                </div>
            </a>
            <a class="box" href="/donate/">
                <div class="box-text">
                    DONATE
                </div>
            </a>
            
        </div>
    </div>
</div>


<style>
a.box{
    width:296px;
    float:left;
    margin-right:15px;
    border:1px solid #63bfda;
    position:relative;
    height:65px;
    background-color:#000;
}
a.box:last{
    margin-right:0;
}
a.box div.box-text{
    text-align: center;
    width: 100%;
    position:absolute;
    top:50%;
    margin-top:-10px;
}
a.box div.box-text.two-lines{
    margin-top:-20px;
}
a.box:hover{
    background-color: #63bfda;
    color:#fff;
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