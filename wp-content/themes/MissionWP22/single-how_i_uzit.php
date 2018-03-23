<?php get_header();
setup_postdata($post);
?>
<div class="pageContent how-i-uzit-content">
  	<div class="how-i-uzit-post">

  		<div class="how-i-uzit-post-header">
        <div class="how-i-uzit-post-content">
    			<div class="post-title-excerpts">
  	  			<h1><?php the_title(); ?></h1>
  	  			<div class="post-excerpt">
  	  				<?php the_excerpt();?>
  	  			</div>
    			</div>
  				<div class="post-thumbnail">
  					<img src="<?php the_post_thumbnail_url(); ?>">
  				</div>
        </div>
  		</div>	  	
      <div class="container noBannerContent">
        <div class="post-content">
          <?php the_content(); ?>
          <div class="back-to-top"><div class="up-arrow"></div>TOP</div>
        </div>  
      </div>	
	    <?php get_template_part( 'single-featured-how_i_uzit' ); ?>
  	</div>

</div>


<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/blog.css' type='text/css' media='all' />
<?php get_footer(); ?>

<!-- Metadata -->
<?php $media = get_attached_media( 'image' ); ?>
<?php print_r(wp_get_attachment_image_src($media[0]->ID)); ?>
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