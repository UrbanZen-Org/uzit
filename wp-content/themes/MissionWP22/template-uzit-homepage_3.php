<?php /* Template Name: UZIT Homepage with Grid */ ?>

<?php get_header(); ?>


<div id="UzitContent" class="homePageContent container">
    <div class="sixteen columns">
        <iframe 
            src="https://player.vimeo.com/video/180962509?color=ffffff&title=0&byline=0&portrait=0" 
            width="100%" 
            height="540" 
            frameborder="0" 
            webkitallowfullscreen mozallowfullscreen allowfullscreen>
        </iframe>
    </div>
    
    <ul class="sixteen columns">
           <li class="four columns">
    		   <a class="carousel-thumb-url" href="/about/donnas-message/">
    			   <div class="carousel-thumb">
    				   <span class="carousel-thumb-caption">Donna's Message</span>
    				   <img src="http://s3-us-east-2.amazonaws.com/uzit-wordpress/wp-content/uploads/2015/12/28010314/Slider-thumbnail_Donnas-Message-1.jpg" alt="A MESSAGE FROM OUR FOUNDER">
    			   </div>
    		   </a>
    	   </li>
           <li class="four columns">
    		   <a class="carousel-thumb-url" href="/about/our-impact/">
    			   <div class="carousel-thumb">
    				  <span class="carousel-thumb-caption">Our Impact</span>
    				  <img src="http://s3-us-east-2.amazonaws.com/uzit-wordpress/wp-content/uploads/2015/12/28010314/Slider-thumbnail_UZIT.jpg" alt="OUR IMPACT">
    			   </div>
    		   </a>
    	   </li>
           <li class="four columns">
    		   <a class="carousel-thumb-url" href="/partners/all/">
    			   <div class="carousel-thumb">
    				  <span class="carousel-thumb-caption">Partners</span>
    				  <img src="http://s3-us-east-2.amazonaws.com/uzit-wordpress/wp-content/uploads/2016/09/28010517/UZIT_HP_Thb_Partners.jpg" alt="Partners">
    			   </div>
    		   </a>
    	   </li>
           <li class="four columns">
    		   <a class="carousel-thumb-url" href="/trainings/training-courses/">
    			   <div class="carousel-thumb">
    				   <span class="carousel-thumb-caption">Trainings</span>
    				   <img src="http://s3-us-east-2.amazonaws.com/uzit-wordpress/wp-content/uploads/2013/05/28005917/findaclass_thumb.jpg" alt="FIND A CLASS">
    			   </div>
    		   </a>
    	   </li>


       </ul>
    
    <div class="sixteen columns" style="margin:20px 0;">
        <?php if (have_posts ()) {
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
    
    <div class="grid">
        <?php 
            $args = array(
                'posts_per_page'   => 30,
                'offset'           => 0,
                'category'         => '',
                'category_name'    => 'Featured',
                'orderby'          => 'title',
                'order'            => 'ASC',
                'include'          => '',
                'exclude'          => '',
                'meta_key'         => '',
                'meta_value'       => '',
                'post_type'        => 'post',
                'post_mime_type'   => '',
                'post_parent'      => '',
                'author'	       => '',
                'author_name'	   => '',
                'post_status'      => 'publish',
                'suppress_filters' => true 
            );
            $posts_array = get_posts( $args );
        ?>
        <?php foreach ( $posts_array as $post ) : //setup_postdata( $post ); ?>
            <a href="<?php echo get_permalink($post->ID); ?>" title="<?php echo $post->post_title ?>" style="inline-block;">
            <div class="five columns" style="position:relative;margin:20px;min-height:150px;background-image: url(<?php echo get_post_meta($post->ID, 'bigimg')[0]; ?>);background-size:cover;background-repeat:no-repeat;"> 
                <div class="carousel-thumb" style="text-align: center;position: absolute;top: 50%;margin-top: -8px;margin-left: auto;margin-right: auto;display: block;width: 100%;font-size: 20px;">
                    <span class="carousel-thumb-caption"><?php echo $post->post_title ?></span>
                </div>
                
            </div>
            </a>
        <?php endforeach; ?>
   </div>
</div>

<style>
/* Put inside a stylsheet */

</style>
<?php get_footer(); ?>