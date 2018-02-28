<?php
    $_SESSION['uzit-nav'] = 1;
    get_header(); 
?>
<script>
    jQuery('li#menu-item-2340').addClass('current-menu-item');
</script>

<?php 

    $blog_img_src = get_post_meta(get_the_ID(), 'blog_img_src', true);
    $blog_date = get_post_meta(get_the_ID(), 'blog_date', true);
    $blog_author = get_post_meta(get_the_ID(), 'blog_author', true);
    $blog_slogan = get_post_meta(get_the_ID(), 'blog_slogan', true);
    $blog_category = get_post_meta(get_the_ID(), 'blog_category', true);

?>


<div class="pageContent">
    
    <div class="container noBannerContent">
        
        <div id="Blog" class="clearfix">
            
            <div class="blog-header" style="position:relative;">
                <img src="/wp-content/themes/MissionWP22/images/assets/blog/voice_of_uzit.jpg" alt="Voice of UZIT" />
                <div style="position:absolute;bottom:15px;left:15px;">
                    <h1 class="sub-head-a">VOICE</h1>
                    <h1 class="sub-head-b">OF THE UZIT</h1>
                </div>
            </div>
            
            <div class="blog-nav clearfix">
                
                <ul>
                    <li><a class="blog-filter" href="/blogs/all" data-option-value="*">Back to Blogs</a></li>
                </ul>
            </div>
            
            <div style="background-color:#fff;">
            
                <div class="blog-top">
                    <div class="blog-info">
                        <p>
                            <?php echo $blog_date; ?> 
                            <?php if($blog_author): ?>
                            by <?php echo $blog_author; ?>
                            <?php endif; ?>
                        </p>
                    </div>
                    <div class="blog-title">
                        <h3><?php the_title(); ?></h3>
                        <?php if($blog_slogan): ?>
                        <h3 class="slogan"><?php echo $blog_slogan; ?></h3>
                        <?php endif ;?>
                    </div>
                </div>
            
                <?php
                    if (have_posts ()) {
                        while (have_posts ()) {
                            (the_post());
                            the_content();
                        }
                    }
                ?>
                
            </div>
        
        </div>
        
    </div>
    

</div>
<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/blog.css' type='text/css' media='all' />
<?php get_footer(); ?>