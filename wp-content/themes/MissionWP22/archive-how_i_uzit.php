<?php get_header();

?>
<div class="pageContent how-i-uzit-archive">
	<div class="how-i-uzit-archive">
		<div class="archive-header" style="background-image: url('<?php echo get_field('header_image','option'); ?>');">
			<h1>How I Uzit</h1>
		</div>
		<div class="how-i-uzit-posts">
			
			<?php foreach ($posts as $post): ?>
				<?php setup_postdata($post); ?>
				<a class="hiu-post" href="<?php the_permalink(); ?>">					
					<img src="<?php the_post_thumbnail_url('large'); ?>">
					<div class="post-titles">
						<div>
						<h2><?php the_title(); ?></h2>
						<?php the_excerpt();?>	
						</div>
					</div>
					
				</a>
			<?php endforeach; ?>
		</div>

</div>


<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/blog.css' type='text/css' media='all' />
<?php get_footer(); ?>