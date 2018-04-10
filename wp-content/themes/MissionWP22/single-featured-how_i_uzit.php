<?php 
$stories = get_field('featured_stories');
?>
<?php if ($stories): ?>	
	<div class="featured-stories-section">
		<h2>Featured Stories</h2>
		<div class="featured-stories">
			<?php foreach ($stories as $story): ?>
				<div class="featured-story">
					<?php 
						$thumbnail = wp_get_attachment_url( get_post_thumbnail_id($story->ID));
					?>
					<img src="<?php echo $thumbnail; ?>">
					<h4><?php echo get_the_title($story->ID) ?></h4>
				</div>
			<?php endforeach; ?>
			<?php foreach ($stories as $story): ?>
				<div class="featured-story">
					<?php 
						$thumbnail = wp_get_attachment_url( get_post_thumbnail_id($story->ID));
					?>
					<img src="<?php echo $thumbnail; ?>">
					<h4><?php echo get_the_title($story->ID) ?></h4>
				</div>
			<?php endforeach; ?>
			<?php foreach ($stories as $story): ?>
				<div class="featured-story">
					<?php 
						$thumbnail = wp_get_attachment_url( get_post_thumbnail_id($story->ID));
					?>
					<img src="<?php echo $thumbnail; ?>">
					<h4><?php echo get_the_title($story->ID) ?></h4>
				</div>
			<?php endforeach; ?>
		
	</div>
<?php endif; ?>

