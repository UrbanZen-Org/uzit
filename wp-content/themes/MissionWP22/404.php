<?php get_header(); ?>

<?php 
    $headerimg = get_post_meta(get_the_ID(), 'headerimg', true);
    $sidebar = get_post_meta(get_the_ID(), 'sidebar', true);
?>
<div class="container">
    
    <img src="http://uzit.urbanzen.org/wp-content/uploads/2014/01/404.jpg" alt="404">

</div>
<?php get_footer(); ?>