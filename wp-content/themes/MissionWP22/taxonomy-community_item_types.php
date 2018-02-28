<?php 
    $_SESSION['uzit-nav']=1;
    $_SESSION['page-title-prefix']='GIVING BACK';
    get_header(); 
?>

<?php
    $headerimg = get_post_meta(get_the_ID(), 'headerimg', true);
    $sidebar = get_post_meta(get_the_ID(), 'sidebar', true);
?>

<div id="UzitVideos" class="uzit-posts blog community pageContent">
    <div class="container noBannerContent">
        <div class="sixteen columns">
            
            <div class="blog-header" style="position:relative;padding-bottom:10px;">
                <img width="100%" src="/wp-content/themes/MissionWP22/images/assets/blog/voice_of_uzit.jpg" alt="Voice of UZIT" />
            </div>
            
            <div>
                <h1 class="sub-head-a">GIVING BACK</h1>
            </div>
            
            <div class="blog-nav clearfix" style="width:100%;">
                <div class="ul-container clearfix" >
                <ul>
                    <li><a id="" class="blog-filter active" href="javascript:void(0);" data-option-value="*">ALL</a></li>
                    <?php
                        $taxonomies = array( 
                            'community_item_types',
                        );
                        $terms = get_terms($taxonomies);
                        foreach($terms as $term){
                            echo '<li><a id="" class="blog-filter" href="javascript:void(0);" data-option-value=".'. $term->slug .'">'. $term->name .'</a></li>';
                        }
                    ?>
                </ul>
                </div>
                
            </div>
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $arguments = array(
                    'post_type' => 'post_community',
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
                    $community_service_thumbnail_src = get_post_meta(get_the_ID(), 'community_service_thumbnail_src', true);
                    $permalink = get_permalink(get_the_ID());
                    
                    $classes = get_the_terms( get_the_ID(), 'community_item_types' );
                    $class_string = '';
                    $class_array = array();
                    foreach ( $classes as $class ) {
                        $class_array[] = $class->slug;
                    }
                    $class_string = join( " ", $class_array );
                ?>
                <div class="blog-post post_community <?php echo $class_string; ?>">
                    <a class="button" href="<?php echo $permalink; ?>" style="background-image:url(<?php echo $community_service_thumbnail_src; ?>)">
                        <div class="overlay" style="position:absolute;width:100%;height:100%;z-index:100;"></div>
                        <div class="post-title"><?php echo the_title(); ?></div>
                    </a>
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
<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/blog.css' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/uzitvideos.css' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/community.css' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/isotope.css' type='text/css' media='all' />
<script src="/wp-content/themes/MissionWP22/js/custom/jquery.isotope.min.js"></script>
<style>
    h1.sub-head-a{text-align:center;}
</style>
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
