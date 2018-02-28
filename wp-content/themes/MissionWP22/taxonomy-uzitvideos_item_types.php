<?php 
    $_SESSION['uzit-nav']=1;
    $_SESSION['page-title-prefix']='VIDEOS';
    get_header(); 
?>

<?php
    $headerimg = get_post_meta(get_the_ID(), 'headerimg', true);
    $sidebar = get_post_meta(get_the_ID(), 'sidebar', true);
?>
<div id="UzitVideoLightBoxContainer">
    <div class="horizontal-center">
        <a id="UzitVideoClose" href="javascript:void(0);">Close</a>
        <div id="VimeoPopUp"></div>
        <script>
            jQuery('a#UzitVideoClose').click(function(){
                jQuery('div#UzitVideoLightBoxContainer div#VimeoPopUp iframe').remove();
                jQuery('div#UzitVideoLightBoxContainer').hide();
            });
        </script>
    </div>
</div>

<div id="UzitVideos" class="uzit-posts blog pageContent">
    <div class="container noBannerContent">
        <div class="sixteen columns">
            
            <div class="blog-header" style="position:relative;padding-bottom:10px;">
                <img src="/wp-content/themes/MissionWP22/images/assets/blog/voice_of_uzit.jpg" alt="Voice of UZIT" />
            </div>
            
            <div>
                <h1 class="sub-head-a">UZIT VIDEOS</h1>
            </div>
            
            <div class="blog-nav clearfix" style="width:100%;">
                <div class="ul-container clearfix" style="display:block;min-width:550px;margin:0 auto;width:550px;">
                <ul>
                    <?php
                        $taxonomies = array( 
                            'uzitvideos_item_types',
                        );
                        $args = array(
                            'orderby'       => 'name', 
                            'order'         => 'DESC',
                            /*
                            'orderby'       => 'id', 
                            'order'         => 'ASC',
                            
                            'hide_empty'    => true, 
                            'exclude'       => array(), 
                            'exclude_tree'  => array(), 
                            'include'       => array(),
                            'number'        => '', 
                            'fields'        => 'all', 
                            'slug'          => '', 
                            'parent'         => '',
                            'hierarchical'  => true, 
                            'child_of'      => 0, 
                            'get'           => '', 
                            'name__like'    => '',
                            'pad_counts'    => false, 
                            'offset'        => '', 
                            'search'        => '', 
                            'cache_domain'  => 'core'
                            */
                        );
                        
                        $terms = get_terms($taxonomies, $args);
                        foreach($terms as $term){
                            echo '<li><a id="" class="blog-filter '.$term->slug.'" href="javascript:void(0);" data-option-value=".'. $term->slug .'">'. $term->name .'</a></li>';
                        }
                        
                    ?>
                    <li><a id="" class="blog-filter active" href="javascript:void(0);" data-option-value="*">ALL</a></li>
                </ul>
                </div>
                
            </div>
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $arguments = array(
                    'post_type' => 'post_uzitvideos',
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
                    $uzitvideos_video_thumbnail = get_post_meta(get_the_ID(), 'uzitvideos_video_thumbnail', true);
                    $uzitvideos_category = get_post_meta(get_the_ID(), 'uzitvideos_category', true);
                    $uzitvideos_vimeo_url = get_post_meta(get_the_ID(), 'uzitvideos_vimeo_url', true);
                    $uzitvideos_vimeo_embed = get_post_meta(get_the_ID(), 'uzitvideos_vimeo_embed', true);
                    $permalink = get_permalink(get_the_ID());
                    
                    $classes = get_the_terms( get_the_ID(), 'uzitvideos_item_types' );
                    $class_string = '';
                    $class_array = array();
                    foreach ( $classes as $class ) {
                        $class_array[] = $class->slug;
                    }
                    $class_string = join( " ", $class_array );
                ?>
                <div class="blog-post video-post <?php echo $class_string; ?>">
                    <a id="UzitVideo-<?php echo get_the_ID(); ?>" class="button" href="<?php echo $uzitvideos_vimeo_url; ?>" target="_blank">
                        <div class="overlay"></div>
                        <img src="<?php echo $uzitvideos_video_thumbnail; ?>" style="width:100%;"/>
                        <span style="display:block;text-align:left;padding:0 5px;"><?php echo the_title(); ?></span>
                    </a>
                    <?php if($uzitvideos_vimeo_embed): ?>
                    <script>
                        jQuery('#UzitVideo-<?php echo get_the_ID(); ?>').click(function(){
                            jQuery('#VimeoPopUp').html('<?php echo $uzitvideos_vimeo_embed; ?>');
                            jQuery('div#UzitVideoLightBoxContainer').show();
                            return false
                        });
                    </script>
                    <?php endif; ?>
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
<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/isotope.css' type='text/css' media='all' />
<script src="/wp-content/themes/MissionWP22/js/custom/jquery.isotope.min.js"></script>
<style>
    h1.sub-head-a{text-align:center;}
</style>
<script>
    jQuery(function(){
        <?php if($_GET['sort']): ?>
        var selector = '.<?php echo $_GET['sort']; ?>';
        jQuery('#BlogContainer').isotope({
            itemSelector : '.blog-post',
            filter: selector
        });
        jQuery('a.blog-filter').each(function(){
            jQuery(this).removeClass('active');
        });
        jQuery('a.blog-filter.<?php echo $_GET['sort']; ?>').addClass('active');
        <?php endif; ?>
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
