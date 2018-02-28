<?php 
    $_SESSION['uzit-nav']=1;
    $_SESSION['page-title-prefix']='TEAM';
    get_header(); 
?>

<?php
    $headerimg = get_post_meta(get_the_ID(), 'headerimg', true);
    $sidebar = get_post_meta(get_the_ID(), 'sidebar', true);
?>

<div id="Team" class="pageContent">
    <div class="container noBannerContent">
        <div class="sixteen columns">
            
            <div class="content-container">
                
                <h1>EXECUTIVE TEAM</h1>
            
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $arguments = array(
                        'post_type' => 'post_team',
                        'post_status' => 'publish',
                        'posts_per_page' => 100,
                        'paged' => $paged,
                        //'orderby' => 'title',
                        'order' => 'ASC'
                    );
                    $blog_query = new WP_Query($arguments);
                    dd_set_query($blog_query);
                ?>
                <?php 
                    if ($blog_query->have_posts()) : while ($blog_query->have_posts()) : $blog_query->the_post(); 
                ?>
                <?php
                    //$voice_id = get_the_ID();
                    $team_position = get_post_meta(get_the_ID(), 'team_position', true);
                    $team_picture_src = get_post_meta(get_the_ID(), 'team_picture_src', true);
                    $team_quote = get_post_meta(get_the_ID(), 'team_quote', true);
                
                    $classes = get_the_terms( get_the_ID(), 'team_item_types' );
                    $class_string = '';
                    $class_array = array();
                    foreach ( $classes as $class ) {
                        $class_array[] = $class->slug;
                    }
                    $class_string = join( " ", $class_array );
                ?>
                
                <div class="member">
                    
                    <div class="clearfix">
                        <div class="profile image">
                            <img src="<?php echo $team_picture_src; ?>" alt="<?php echo the_title(); ?>" />
                        </div>
                        <div class="profile details">
                            <div class="inner-content">
                                <h2><?php echo the_title(); ?></h2>
                                <p class="position"><?php echo $team_position; ?></p>
                                <div class="quote">
                                    <h3><?php echo $team_quote; ?></h3>
                                </div>
                                <div class="summary">
                                    <?php the_content('READ BIO'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <?php endwhile; ?>
                <?php endif; ?>
            
            </div>
            
        </div>
    </div>
</div>
            
<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/base.css' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/team.css' type='text/css' media='all' />

<?php get_footer(); ?>

<div class="dialog-container"></div>

<script>
/* load video in temp container, load dialog | so can open multiple times */
jQuery('.summary a').each(function(){
    jQuery(this).click(function(){
        var url = jQuery(this).attr('href');
        var title = jQuery(this).attr('title');
        
        jQuery('div.dialog-container').load(url + '#TeamMember', function(){
            jQuery(".ui-dialog-content").dialog("option", "position", ['center', 'center']);
        });
        
        jQuery('div.dialog-container').dialog({
            title: title,
            modal: true,
            draggable: false,
            minWidth: 900,
            height: 600,
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
</script>
