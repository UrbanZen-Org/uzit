<?php 
    $_SESSION['uzit-nav']=1;
    $_SESSION['page-title-prefix']='UZIT Training Courses';
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
                
                <h1>UZIT TRAINING COURSES</h1>
            
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $arguments = array(
                        'post_type' => 'post_training',
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
                    $training_position = get_post_meta(get_the_ID(), 'training_position', true);
					$training_location = get_post_meta(get_the_ID(), 'training_location', true);
                    $training_picture_src = get_post_meta(get_the_ID(), 'training_picture_src', true);
                    $training_quote = get_post_meta(get_the_ID(), 'training_quote', true);
                
                    $classes = get_the_terms( get_the_ID(), 'training_item_types' );
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
							 <a href="<?php echo get_permalink($post->ID); ?>">
                            <img src="<?php echo $training_picture_src; ?>" alt="Training Sessions" />
						</a>
                        </div>
                        <div class="profile details">
                            <div class="inner-content">
                                <a href="<?php echo get_permalink($post->ID); ?>"><h2><?php echo the_title(); ?></h2></a>
                                <p class="position"><?php echo $training_position; ?><br>
								<i><?php echo $training_location; ?></i></p>
                                <div class="quote">
                                    <h3><?php echo $training_quote; ?></h3>
                                </div>
                                <div class="summary">
                                    <?php the_content('Learn More'); ?>
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
        
        jQuery('div.dialog-container').load(url + '#teamMember', function(){
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
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us16.list-manage.com","uuid":"8ded742a34e557c8b387cfddf","lid":"9a2f7b58e1"}) })</script>