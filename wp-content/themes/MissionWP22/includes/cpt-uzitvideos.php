<?php
function cpt_uzitvideos(){
    global $options;
    if ( $options ) {
        $url_rewrite = $options['theme_uzitvideos_item_url'];
        if( !$url_rewrite ) { 
            $url_rewrite = 'video'; 
        }
    } 
    else {
        $url_rewrite = 'video';
    }

	register_post_type('post_uzitvideos',
		array(
			'labels' => array(
				'name' => 'UZIT Videos',
				'singular_name' => 'Videos Item',
				'add_new' => 'Add New Video',
				'add_new_item' => 'Add New Video Item',
				'edit' => 'Edit',
				'edit_item' => 'Edit Video Item',
				'new_item' => 'New Video Item',
				'view' => 'View',
				'view_item' => 'View Video Item',
				'search_items' => 'Search Video Items',
				'not_found' => 'No Video items found',
				'not_found_in_trash' => 'No Video items found in Trash',
				'parent' => 'Videos Video Item'
			),
			'description' => 'Easily lets you create Video.',
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

function tax_uzitvideos() {
	global $options;
        
       if ( $options ) {
           $url_rewrite = $options['theme_uzitvideos_item_type_url'];
           if( !$url_rewrite ) {
               $url_rewrite = 'videos'; 
           }
       } 
       else {
           $url_rewrite = 'videos';
       }

	register_taxonomy('uzitvideos_item_types', 'post_uzitvideos', 
         
		array( 
			'hierarchical' => true, 
			'labels' => array(
				  'name' => 'UZIT Video Item Category',
				  'singular_name' => 'Video Item Categories',
				  'search_items' =>  'Search Videos Categories',
				  'popular_items' => 'Popular Videos Categories',
				  'all_items' => 'All Videos Categories',
				  'parent_item' => 'Parent Categories',
				  'parent_item_colon' => 'Parent Category:',
				  'edit_item' => 'Edit Video Category',
				  'update_item' => 'Update Video Category',
				  'add_new_item' => 'Add New Video Category',
				  'new_item_name' => 'New Video Category Name'
			),
			'show_ui' => true,
			'query_var' => true, 
			'rewrite' => array('slug' => $url_rewrite)
		) 
	); 
	flush_rewrite_rules();	
}

add_action('init', 'cpt_uzitvideos');
add_action('init', 'tax_uzitvideos');