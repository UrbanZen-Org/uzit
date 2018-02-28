<?php 
    $_SESSION['uzit-nav']=1;
    $_SESSION['page-title-prefix']='How We UZIT';
    get_header(); 
?>

<?php
    $headerimg = get_post_meta(get_the_ID(), 'headerimg', true);
    $sidebar = get_post_meta(get_the_ID(), 'sidebar', true);
?>

<div id="Voice" class="pageContent">
    <div class="container noBannerContent">
        <div class="sixteen columns">
            
            <div class="single-content-container">
                
                <div class="breadcrumbs">
                    <a href="/howweuzit/all/">< Back to How We UZIT</a>
                </div>
                
                <h1><?php the_title(); ?></h1>
                
                <?php 
                    if (have_posts ()) {
                        while (have_posts ()) {
                            (the_post());
                ?>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
                <?php }} else { ?>
                <div class="post box">
                    <h3><?php _e('There is not post available.', 'localization'); ?></h3>
                </div>
                <?php } ?>
                
            </div>
            <div class="addthis_inline_share_toolbox"></div>
            
        </div>
    </div>
</div>
            
<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/base.css' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/voice.css' type='text/css' media='all' />

<?php get_footer(); ?>