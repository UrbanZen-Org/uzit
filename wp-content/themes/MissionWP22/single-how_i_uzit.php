<?php get_header();
setup_postdata($post);
?>
<div class="pageContent how-i-uzit-content" id="page_content">
  	<div class="how-i-uzit-post">

  		<div class="how-i-uzit-post-header">
        <div class="how-i-uzit-post-content" >
        	<a href="/how-i-uzit" class="back-to-hiu">< Back to How I Uzit</a>
    			<div class="post-title-excerpts">
            <div class="title-inner">
    	  			<h1><?php the_title(); ?></h1>
    	  			<div class="post-excerpt">
    	  				<?php the_excerpt();?>
    	  			</div>
            </div>
    			</div>
  				<div class="post-thumbnail">
  					<img src="<?php the_post_thumbnail_url(); ?>">
  				</div>
        </div>
  		</div>	  	
  		<div class="prev-next-story">
    		<?php $prev_post = get_adjacent_post(false, '', true); 
    					$next_post = get_adjacent_post(false, '', false); 
    		?>
      	<a href="<?php echo get_permalink($prev_post); ?>" class="prev-story"><img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $prev_post ), 'thumbnail')[
      	0]; ?>"><span><div class="arrow"></div>Previous<br> Story</span></a>
      	<a href="<?php echo get_permalink($next_post); ?>" class="next-story"><img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $next_post ), 'thumbnail')[
      	0]; ?>"><span>Next<br> Story<div class="arrow"></div></span></a>
    	</div>
      <div class="container noBannerContent">
        <div class="post-content">
          <?php the_content(); ?>
          <a data-target="#page_content" class="back-to-top"><div class="up-arrow"></div>TOP</a>
        	<!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>  
        </div>
        
      </div>
	    <?php get_template_part( 'single-featured-how_i_uzit' ); ?>
  	</div>

</div>


<link rel="stylesheet" id="admin-bar-css"  href="/wp-content/themes/MissionWP22/stylesheets/custom/blog.css" type="text/css" media="all" />
<?php get_footer(); ?>

<!-- Metadata -->
<?php $media = get_attached_media( 'image' ); ?>


<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "BlogPosting",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?php echo get_permalink(); ?>"
  },
  "headline": "<?php the_title(); ?>",
  "image": [
    <?php 
    	foreach ($media as $idx => $image):
    		echo '"' . wp_get_attachment_image_src($image->ID)[0] . '"';
    		if ($idx < (count($media) - 1)):
    			echo  ',';
    		endif;
    	endforeach;
    ?>
   ],
  "datePublished": "<?php echo $post->post_date; ?>",
  "dateModified": "<?php echo $post->post_date; ?>",
  "author": {
    "@type": "Organization",
    "name": "UZIT"
  },
   "publisher": {
    "@type": "Organization",
    "name": "UZIT",
    "logo": {
      "@type": "ImageObject",
      "url": "http://s3-us-east-2.amazonaws.com/uzit-wordpress/wp-content/uploads/2013/05/28002830/uzit_logo_new1.png"
    }
  },
  "description": "<?php echo $post->post_excerpt; ?>"
}
</script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5accafeeef677a1d"></script>