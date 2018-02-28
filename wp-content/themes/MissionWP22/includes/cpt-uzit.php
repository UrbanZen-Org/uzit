<?php
function cpt_uzit(){
	global $options;

    if ( $options ) {
	    $url_rewrite = $options['theme_uzit_item_url'];
	    if( !$url_rewrite ) { 
		    $url_rewrite = 'uzit'; 
		}
	} 
	else {
		$url_rewrite = 'uzit';
	}
	
	register_post_type('post_uzit',
		array(
			'labels' => array(
				'name' => 'UZIT',
				'singular_name' => 'UZIT Item',
				'add_new' => 'Add New UZIT',
				'add_new_item' => 'Add New UZIT Item',
				'edit' => 'Edit',
				'edit_item' => 'Edit UZIT Item',
				'new_item' => 'New UZIT Item',
				'view' => 'View',
				'view_item' => 'View UZIT Item',
				'search_items' => 'Search UZIT Items',
				'not_found' => 'No UZIT items found',
				'not_found_in_trash' => 'No UZIT items found in Trash',
				'parent' => 'Parent UZIT Item'
			),
			'description' => 'UZIT items.',
			'public' => true,
			'show_ui' => true, 
			'_builtin' => false,
			'capability_type' => 'page',
			'hierarchical' => true,
			'rewrite' => array('slug' => $url_rewrite),
			'supports' => array('title', 'editor', 'thumbnail', 'comments', 'page-attributes'),
		)
	);
	flush_rewrite_rules();
}

function tax_uzit() {
	global $options;

	if ( $options ) {  
		$url_rewrite = $options['theme_uzit_item_type_url'];

		if( !$url_rewrite ) { 
			$url_rewrite = 'uzit-category'; 
		}
	} 
		
	else {
		$url_rewrite = 'uzit-category';
	}

	register_taxonomy('uzit_item_types', 'post_uzit', 
	    array( 
			'hierarchical' => true, 
			'labels' => array(
				  'name' => 'Item Category',
				  'singular_name' => 'Item Categories',
				  'search_items' =>  'Search Categories',
				  'popular_items' => 'Popular Categories',
				  'all_items' => 'All Categories',
				  'parent_item' => 'Parent Categories',
				  'parent_item_colon' => 'Parent Category:',
				  'edit_item' => 'Edit Category',
				  'update_item' => 'Update Category',
				  'add_new_item' => 'Add New Category',
				  'new_item_name' => 'New Category Name'
			),
			'show_ui' => true,
			'query_var' => true, 
			'rewrite' => array('slug' => $url_rewrite)
		) 
	); 
	flush_rewrite_rules();	
}

add_action('init', 'cpt_uzit');
add_action('init', 'tax_uzit');
