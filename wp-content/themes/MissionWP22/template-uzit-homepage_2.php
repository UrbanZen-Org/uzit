<?php /*
  Template Name: UZIT Homepage with Carousel
 */ ?>


<?php get_header(); ?>

    <div id="UzitSlider" class="sliderWrapper hide-mobile">
        <div id="slider" class="flexslider">
            <ul class="slides">
                <?php 
                if ( function_exists( 'ot_get_option' ) ) {
                    /* get the slider array */
                    $slides = ot_get_option( 'slider_uzit', array() );
                    $count = 0;
                    if ( ! empty( $slides ) ) {
                        foreach( $slides as $slide ) {
                            echo '<li id="Slide-'.  $count .'"><a href="'.$slide['btnurl'].'"><img src="'.$slide['image'].'" alt="'.$slide['title'].'" /></a><div class="flex-holder"><div class="flex-caption"><div class="flex-caption-container">';
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
                                echo '<a class="button" href="'.$slide['btnurl'].'">'.$slide['btntext'].'</a>';
                                //echo '   <ul class="caption-btn"><li><a href="'.$slide['btnurl'].'">'.$slide['btntext'].' &rarr;</a></li></ul>';
                            }
                            echo ' </div></div></div></li>';
                            $count++;
                        }
                    }
                }
                ?>
            </ul>
            
        </div>

  
    <script type="text/javascript">
    jQuery(window).load(function() {
        jQuery('#slider').flexslider({
            animation: "fade",
            animationSpeed: 600, 
            controlNav: false,
            animationLoop: true,
            <?php if (ot_get_option('autoslide_uzit') == 'yes') { ?>
            slideshow: true, //Boolean: Animate slider automatically
            slideshowSpeed: <?php echo ot_get_option('delay_uzit') ?>, 
            <?php }  ?>
            start: function(slider){
                jQuery('body').removeClass('loading');
            }
        });      
    });
    </script>
</div>

<!--
<div id="UzitContent" class="homePageContent container">
	<ul>
       <li class="four columns">
		   <a class="carousel-thumb-url" href="http://uzit.urbanzen.org/about/donnas-message/">
			   <div class="carousel-thumb">
				   <span class="carousel-thumb-caption" >Donna's Message</span>
				   <img src="/wp-content/uploads/2015/12/Slider-thumbnail_Donnas-Message-1.jpg" alt="A MESSAGE FROM <BR> OUR FOUNDER" />
			   </div>
		   </a>
	   </li>
       <li class="four columns">
		   <a class="carousel-thumb-url" href="http://uzit.urbanzen.org/about/our-impact/">
			   <div class="carousel-thumb">
				  <span class="carousel-thumb-caption" >Our Impact</span>
				  <img src="/wp-content/uploads/2015/12/Slider-thumbnail_UZIT.jpg" alt="OUR IMPACT" />
			   </div>
		   </a>
	   </li>
       <li class="four columns">
		   <a class="carousel-thumb-url" href="http://uzit.urbanzen.org/trainings/training-courses/">
			   <div class="carousel-thumb">
				  <span class="carousel-thumb-caption" >Upcoming Trainings</span>
				  <img src="/wp-content/uploads/2013/05/trainings-thumb.jpg" alt="UPCOMING TRAININGS" />
			   </div>
		   </a>
	   </li>
       <li class="four columns">
		   <a class="carousel-thumb-url" href="http://uzit.urbanzen.org/training-programs/locate-a-class/">
			   <div class="carousel-thumb">
				   <span class="carousel-thumb-caption" >Find a class</span>
				   <img src="/wp-content/uploads/2013/05/findaclass_thumb.jpg" alt="FIND A CLASS" />
			   </div>
		   </a>
	   </li>
       
       
   </ul> 

 
	   <div class="eight columns">
		   <iframe src="http://player.vimeo.com/video/39737872?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="100%" height="260" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		   <br>
	   </div>
       -->  
        <div class="container">
            <div class="center-text" style="text-align: center;">
                <h1 style="font-weight:100;color:#fff;font-family:&quot;Conv_HelveticaNeueLTStd-ThEx&quot;, &quot;Helvetica&quot;, Arial;letter-spacing: 2px;line-height: 1.1em;margin-bottom: 0;font-size:40px;padding-top:40px;">UZIT<span style="font-size:10px;vertical-align:top;line-height:10px;padding:0 5px;">™</span>MISSION</h1>
                <p>The mission of the Urban Zen Integrative Therapy program is to change the present healthcare paradigm, to treat the patient and not just the disease. Through our partnerships, we are transforming patient care in hospitals, healthcare education in nursing schools, self-care in the home and emergency relief in disasters.</p>
            </div>
        </div>    

<?php get_footer(); ?>