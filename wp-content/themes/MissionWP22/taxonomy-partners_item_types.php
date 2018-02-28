<?php 
    $_SESSION['uzit-nav']=1;
    $_SESSION['page-title-prefix']='PARTNERS';
    get_header(); 
?>

<?php
    $headerimg = get_post_meta(get_the_ID(), 'headerimg', true);
    $sidebar = get_post_meta(get_the_ID(), 'sidebar', true);
?>

<link rel='stylesheet' href='/wp-content/themes/MissionWP22/stylesheets/custom/partners.css' type='text/css' media='all' />

<div id="Partners" class="uzit-posts pageContent">
    <div class="container noBannerContent">
        <div class="sixteen columns">
            
            <h1 style="margin-top:15px;">SPECIAL THANKS TO OUR PARTNERS</h1>
            
            
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $arguments = array(
                    'post_type' => 'post_partners',
                    'post_status' => 'publish',
                    'posts_per_page' => 100,
                    'paged' => $paged,
                    'orderby' => 'title',
                    'order' => 'ASC'
                );
                $partners_query = new WP_Query($arguments);
                dd_set_query($partners_query);
            ?>
            <div id="PartnerContainer" class="clearfix">
                
                <?php 
                    if ($partners_query->have_posts()) : while ($partners_query->have_posts()) : $partners_query->the_post(); 
                ?>
                <?php
                    $logo_src = get_post_meta(get_the_ID(), 'logo_img', true);
                    $permalink = get_permalink(get_the_ID());
                ?>
                <div class="partner" style="background-image:url('<?php echo $logo_src; ?>');">
                    <span class="order" style="display:none;visibility:hidden;"><?php echo the_slug(); ?></span>
                    <div class="overlay">
                        <div class="caption-container">
                            <a class="button" href="<?php echo $permalink; ?> ">Read More</a>
                        </div>
                    </div>
                </div>
            
                <?php endwhile; ?>
                <?php endif; ?>
                <script>
                    jQuery('div.partner').each(function(){
                        jQuery(this).click(function(){
                            var button_url = jQuery(this).find('a.button').attr('href');
                            window.location = button_url;
                        });
                    });
                </script>
            
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

<?php get_footer(); ?>