<?php 
/*
    Template Name: UZIT Video
*/ 
?>


<?php get_header(); ?>


<?php 
    $headerimg = get_post_meta(get_the_ID(), 'headerimg', true);
    $sidebar = get_post_meta(get_the_ID(), 'sidebar', true);
    $pageTitle = get_post_meta(get_the_ID(), 'pageTitle', true);
    $lightboxHTML = get_post_meta(get_the_ID(), 'lightboxHTML', true);
?>


<div class="uzit-posts pageContent video" style="background-color:#fff;">
    
    <iframe src="http://vimeo.com/channels/uzit" style="width:100%;height:100%;" />
    
</div>

<?php if($jQueryCycleScript): ?>
    <script type="text/javascript" src="/wp-content/themes/MissionWP22/includes/js/jquery.cycle.all.latest.js"></script>
<!-- jQuery Cycle -->
<script>
    <?php echo $jQueryCycleScript; ?>
</script>
<!-- end -->
<?php endif; ?>

<?php get_footer(); ?>