<?php 
    $_SESSION['uzit-nav']=1;
    $_SESSION['page-title-prefix']='PARTNERS';
    get_header(); 
?>

<?php
    $headerimg = get_post_meta(get_the_ID(), 'headerimg', true);
    $sidebar = get_post_meta(get_the_ID(), 'sidebar', true);
?>

<div class="uzit-posts blog pageContent">
    <div class="container noBannerContent">
        <div class="sixteen columns">
            
            <div class="blog-header" style="position:relative;">
                <img src="/wp-content/themes/MissionWP22/images/assets/blog/voice_of_uzit.jpg" alt="Voice of UZIT" />
                <div style="position:absolute;bottom:15px;left:15px;">
                    <h1 class="sub-head-a">VOICE</h1>
                    <h1 class="sub-head-b">OF THE UZIT</h1>
                </div>
            </div>
            
            <div class="blog-nav clearfix">
                <ul>
                    <li><a id="AALL" class="blog-filter active" href="javascript:void(0);" data-option-value="*">ALL</a></li>
                    <li><a id="ABLOG" class="blog-filter" href="javascript:void(0);" data-option-value=".blog">BLOG</a></li>
                    <!--<li><a id="APRESS" class="blog-filter" href="javascript:void(0);" data-option-value=".press">PRESS</a></li>-->
                    <li><a id="ATestimonials" class="blog-filter" href="javascript:void(0);" data-option-value=".testimonials">TESTIMONIALS</a></li>
                </ul>
            </div>
            
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $arguments = array(
                    'post_type' => 'post_blog',
                    'post_status' => 'publish',
                    'posts_per_page' => 100,
                    'paged' => $paged,
                    'orderby' => 'title',
                    'order' => 'ASC'
                );
                $blog_query = new WP_Query($arguments);
                dd_set_query($blog_query);
            ?>
            <div id="BlogContainer" class="clearfix">
                
                <?php 
                    if ($blog_query->have_posts()) : while ($blog_query->have_posts()) : $blog_query->the_post(); 
                ?>
                <?php
                    $blog_src = get_post_meta(get_the_ID(), 'blog_img', true);
                    $blog_category = get_post_meta(get_the_ID(), 'blog_category', true);
                    $permalink = get_permalink(get_the_ID());
                ?>
                <div class="blog-post <?php echo $blog_category; ?>">
                    <img src="<?php echo $blog_src; ?>" />
                    <a class="button" href="<?php echo $permalink; ?> "><?php echo the_title(); ?></a>
                </div>
                
                <?php endwhile; ?>
                <?php endif; ?>
                
            </div>
            
            
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
            
        </div>
    </div>
</div>

<style>
    
</style>
<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/blog.css' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/isotope.css' type='text/css' media='all' />
<script src="/wp-content/themes/MissionWP22/js/custom/jquery.isotope.min.js"></script>
<script>
    jQuery(function(){
        
        jQuery('a.blog-filter').each(function(){
            jQuery(this).removeClass('active');
        });
        
        var selector = window.location.hash;
        
        if(selector == '#blog'){
            jQuery('a#ABLOG').addClass('active');
        }
        else if(selector == '#press'){
            jQuery('a#APRESS').addClass('active');
        }
        else if(selector == '#testimonials'){
            jQuery('a#ATESTIMONIALS').addClass('active');
        }
        else{
            jQuery('a#AALL').addClass('active');
        }
        
        selector = selector.replace('#', '.');
        
        jQuery('#BlogContainer').isotope({
            itemSelector : '.blog-post',
            //masonry: {columnWidth: jQuery('#BlogContainer').width() / 3},
            filter: selector
        });
    });
    jQuery('a.blog-filter').click(function(){
        
        jQuery('a.blog-filter').each(function(){
            jQuery(this).removeClass('active');
        });
        jQuery(this).addClass('active');
        
        var selector = jQuery(this).attr('data-option-value');
        
        jQuery('#BlogContainer').isotope({
            itemSelector: '.blog-post',
            filter: selector 
        });
        return false;
    });
      
    
</script>

<?php get_footer(); ?>