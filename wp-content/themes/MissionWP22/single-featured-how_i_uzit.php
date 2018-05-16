<?php 
$args = array(
	'post_type'              => array( 'how_i_uzit' ),
	'post_status'            => 'publish',
	'posts_per_page'         => '6',
	'orderby'                => 'date',
);

$stories = new WP_Query( $args );
?>
<?php if (count($stories)): ?>	
	<div class="featured-stories-section">
		<h2>Featured Stories</h2>
		<div class="featured-stories">
			<?php foreach ($stories->posts as $story): ?>
				<?php setup_postdata($story); ?>
				<a href="<?php get_the_permalink($story->ID); ?>" class="featured-story">
					<?php 
						$thumbnail = wp_get_attachment_url( get_post_thumbnail_id($story->ID));
					?>
					<img src="<?php echo $thumbnail; ?>">
					<h4><?php echo get_the_title($story->ID) ?></h4>
				</a>
			<?php endforeach; ?>			
	</div>
<?php endif; ?>

