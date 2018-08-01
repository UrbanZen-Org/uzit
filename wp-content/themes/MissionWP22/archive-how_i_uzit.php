<?php get_header();
	$_REQUEST['html_title'] = 'How I Uzit';
	$query = new WP_Query(array('post_type'=> 'how_i_uzit', "posts_per_page" => -1));
	$posts_remaining = count($query->posts) - 12;
?>
<div class="pageContent how-i-uzit-archive">
	<div class="how-i-uzit-archive">
		<div class="archive-header">
			<img class="hide-mobile" src="<?php echo get_field('header_image','options'); ?>" >
			<img class="hide-desktop" src="<?php echo get_field('header_image_mobile','options'); ?>" >
			<div class="archive-header-content">			
				<h1>How I Uzit</h1>	
				<p><?php echo get_field('description','option'); ?></p>	
			</div>
		</div>
		
		<div class="how-i-uzit-posts" data-posts-remaining="<?php	echo $posts_remaining; ?>" data-post-offset="12">
			
			<?php foreach ($posts as $post): ?>
				<?php setup_postdata($post); ?>
					<a class="hiu-post" href="<?php the_permalink(); ?>">					
						<img src="<?php the_post_thumbnail_url('large'); ?>">
						<div class="post-titles">
							<div>
							<h2><?php the_title(); ?></h2>
							<p><?php echo get_field("location"); ?></p>
							</div>
						</div>
					</a>
			<?php endforeach; ?>
			<?php load_more_button(); ?>
		</div>

</div>


<link rel='stylesheet' id='admin-bar-css'  href='/wp-content/themes/MissionWP22/stylesheets/custom/blog.css' type='text/css' media='all' />
<?php get_footer(); ?>