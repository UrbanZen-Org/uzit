<?php
function cpt_press(){
    global $options;
    if ( $options ) {
        $url_rewrite = $options['theme_press_item_url'];
        if( !$url_rewrite ) { 
            $url_rewrite = 'article'; 
        }
    } 
    else {
        $url_rewrite = 'article';
    }

	register_post_type('post_press',
		array(
			'labels' => array(
				'name' => 'Press',
				'singular_name' => 'Press Item',
				'add_new' => 'Add New Press',
				'add_new_item' => 'Add New Press Item',
				'edit' => 'Edit',
				'edit_item' => 'Edit Press Item',
				'new_item' => 'New Press Item',
				'view' => 'View',
				'view_item' => 'View Press Item',
				'search_items' => 'Search Press Items',
				'not_found' => 'No Press items found',
				'not_found_in_trash' => 'No Press items found in Trash',
				'parent' => 'Press Items'
			),
			'description' => 'Easily lets you create a Press.',
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

function tax_press() {
	global $options;
        
       if ( $options ) {
           $url_rewrite = $options['theme_press_item_type_url'];
           if( !$url_rewrite ) {
               $url_rewrite = 'press'; 
           }
       } 
       else {
           $url_rewrite = 'press';
       }

	register_taxonomy('press_item_types', 'post_press', 
         
		array( 
			'hierarchical' => true, 
			'labels' => array(
				  'name' => 'Press Item Category',
				  'singular_name' => 'Press Item Categories',
				  'search_items' =>  'Search Press Categories',
				  'popular_items' => 'Popular Press Categories',
				  'all_items' => 'All Press Categories',
				  'parent_item' => 'Parent Categories',
				  'parent_item_colon' => 'Parent Category:',
				  'edit_item' => 'Edit Press Category',
				  'update_item' => 'Update Press Category',
				  'add_new_item' => 'Add New Press Category',
				  'new_item_name' => 'New Press Category Name'
			),
			'show_ui' => true,
			'query_var' => true, 
			'rewrite' => array('slug' => $url_rewrite)
		) 
	); 
	flush_rewrite_rules();	
}

add_action('init', 'cpt_press');
add_action('init', 'tax_press');