<?php 
    $_SESSION['uzit-nav']=1;
    $_SESSION['page-title-prefix']='PRESS';
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

<div id="Voice" class="uzit-posts blog pageContent">
    <div class="container noBannerContent">
        <div class="sixteen columns">
            
            <div class="blog-header" style="position:relative;padding-bottom:10px;">
                <img src="/wp-content/themes/MissionWP22/images/assets/blog/voice_of_uzit.jpg" alt="Voice of UZIT" />
            </div>
            
            <div>
                <h1 class="sub-head-a" style="text-align:center;">PRESS</h1>
            </div>
            
            <div class="blog-nav clearfix" style="width:100%;">
                <div class="ul-container clearfix" style="">
                <ul class="clearfix" style="display: block;margin: 0 auto;width: 410px;">
                    <?php
                        $taxonomies = array( 
                            'press_item_types',
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
                
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $arguments = array(
                    'post_type' => 'post_press',
                    'post_status' => 'publish',
                    'posts_per_page' => 100,
                    'paged' => $paged,
                    'orderby' => 'created',
                    'order' => 'ASC'
                );
                $blog_query = new WP_Query($arguments);
                dd_set_query($blog_query);
            ?>
            
            
            <div id="PressGrid">
            
                <div id="PressGridContainer" style="margin: 0 auto;max-width: 900px;">
                
                    <?php 
                        if ($blog_query->have_posts()) : while ($blog_query->have_posts()) : $blog_query->the_post(); 
                    ?>
                    <?php
                        $press_id = get_the_ID();
                        $logo_thumbnail_src = get_post_meta(get_the_ID(), 'logo_thumbnail_src', true);
                        $press_date = get_post_meta(get_the_ID(), 'press_date', true);
                        $permalink = get_permalink(get_the_ID());
                    
                        $classes = get_the_terms( get_the_ID(), 'voice_item_types' );
                        $class_string = '';
                        $class_array = array();
                        foreach ( $classes as $class ) {
                            $class_array[] = $class->slug;
                        }
                        $class_string = join( " ", $class_array );
                    ?>
                
                    <a id="Press-<?php echo $press_id; ?>" class="article" href="<?php echo $permalink; ?>" title="<?php echo the_title(); ?>">
                    
                        <div class="content <?php echo $class_string; ?>">
                            
                            <div class="overlay">
                                <span class="overlay-date"><?php echo $press_date; ?></span>
                                <span class="overlay-title"><?php echo the_title(); ?></span>
                                <span class="overlay-link">READ FULL ARTICLE</span>
                            </div>
                            <div class="centerer">
                                <img src="<?php echo $logo_thumbnail_src; ?>" style="width:100%;"/>
                            </div>
                        </div>
                    
                    </a>
                
                    <?php endwhile; ?>
                    <?php endif; ?>
                
                </div>
            
            </div>
            
            
        </div>
    </div>
</div>
            
            
            
<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/blog.css' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/uzitvideos.css' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/press.css' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/isotope.css' type='text/css' media='all' />
<script src="/wp-content/themes/MissionWP22/js/custom/jquery.isotope.min.js"></script>

<?php get_footer(); ?>



<div class="dialog-container"></div>
<script>
/* Init isotope */
jQuery(window).load(function(){
    jQuery('#PressGridContainer').isotope({
        layoutMode : 'masonry',
        masonry : {
            columnWidth : 1
        }
    }); 
    jQuery('#PressGridContainer').css('visibility','visible');
});
/* load video in temp container, load dialog | so can open multiple times */
jQuery('a.article').each(function(){
    jQuery(this).click(function(){
        var url = jQuery(this).attr('href');
        var title = jQuery(this).attr('title');
        
        jQuery('div.dialog-container').load(url + '#PressArticle', function(){
            jQuery(".ui-dialog-content").dialog("option", "position", ['center', 'center']);
        });
        
        jQuery('div.dialog-container').dialog({
            title: title,
            modal: true,
            draggable: false,
            minWidth: 820,
            resizable: false
        });
        
        return false;
    });
});
/* Scroll/Resize center dialog */
jQuery(window).resize(function() {
    jQuery(".ui-dialog-content").dialog("option", "position", ['center', 'center']);
});
jQuery(window).scroll(function(){
    jQuery(".ui-dialog-content").dialog("option", "position", ['center', 'center']);
});
jQuery('#PressGridContainer').isotope({
    layoutMode : 'masonry',
    masonry : {
        columnWidth : 1
    }
});
</script>
