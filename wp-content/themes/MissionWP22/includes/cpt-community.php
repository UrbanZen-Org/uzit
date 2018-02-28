<?php
function cpt_community(){
	global $options;
	if ( $options ) {
	    $url_rewrite = $options['theme_community_item_url'];
	    if( !$url_rewrite ) {
	        $url_rewrite = 'community-service';
	    }
	}
	else {
	    $url_rewrite = 'community-service';
	}

	register_post_type('post_community',
		array(
			'labels' => array(
				'name' => 'Community Service',
				'singular_name' => 'Community Service Item',
				'add_new' => 'Add New Community Service',
				'add_new_item' => 'Add New Community Service Item',
				'edit' => 'Edit',
				'edit_item' => 'Edit Community Service Item',
				'new_item' => 'New Community Service Item',
				'view' => 'View',
				'view_item' => 'View Community Service Item',
				'search_items' => 'Search Community Service Items',
				'not_found' => 'No Community Service items found',
				'not_found_in_trash' => 'No Community Service items found in Trash',
				'parent' => 'Parent Community Service Item'
			),
			'description' => 'Posts for Community Service section.',
			'public' => true,
			'show_ui' => true, 
			'_builtin' => false,
			'capability_type' => 'page',
			'hierarchical' => true,
			'rewrite' => array('slug' => $url_rewrite),
			'supports' => array('title', 'editor', 'thumbnail', 'comments'),
		)
	); 
	flush_rewrite_rules();
}

function tax_community() {
	global $options;
	if ( $options ) {
	    $url_rewrite = $options['theme_community_item_type_url'];
	    if( !$url_rewrite ) { 
	        $url_rewrite = 'community-services'; 
	    }
	} 
	else {
	    $url_rewrite = 'community-services';
	}

	register_taxonomy('community_item_types', 'post_community', 
         
		array( 
			'hierarchical' => true, 
			'labels' => array(
				  'name' => 'Community Service Item Category',
				  'singular_name' => 'Community Service Item Categories',
				  'search_items' =>  'Search Community Service Categories',
				  'popular_items' => 'Popular Community Service Categories',
				  'all_items' => 'All Community Service Categories',
				  'parent_item' => 'Parent Community Service Categories',
				  'parent_item_colon' => 'Parent Community Service Category:',
				  'edit_item' => 'Edit Community Service Category',
				  'update_item' => 'Update Community Service Category',
				  'add_new_item' => 'Add New Community Service Category',
				  'new_item_name' => 'New Community Service Category Name'
			),
			'show_ui' => true,
			'query_var' => true, 
			'rewrite' => array('slug' => $url_rewrite)
		) 
	); 
	flush_rewrite_rules();	
}

add_action('init', 'cpt_community');
add_action('init', 'tax_community');