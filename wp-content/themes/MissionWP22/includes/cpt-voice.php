<?php
function cpt_voice(){
    global $options;
    if ( $options ) {
        $url_rewrite = $options['theme_voice_item_url'];
        if( !$url_rewrite ) { 
            $url_rewrite = 'howweuzit-post'; 
        }
    } 
    else {
        $url_rewrite = 'howeuzit-post';
    }

	register_post_type('post_voice',
		array(
			'labels' => array(
				'name' => 'Voice of the Community',
				'singular_name' => 'Voice Item',
				'add_new' => 'Add New Voice',
				'add_new_item' => 'Add New Voice Item',
				'edit' => 'Edit',
				'edit_item' => 'Edit Voice Item',
				'new_item' => 'New Voice Item',
				'view' => 'View',
				'view_item' => 'View Voice Item',
				'search_items' => 'Search Voice Items',
				'not_found' => 'No Voice items found',
				'not_found_in_trash' => 'No Voice items found in Trash',
				'parent' => 'Voices Voice Item'
			),
			'description' => 'Easily lets you create a Voice.',
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

function tax_voice() {
	global $options;
        
       if ( $options ) {
           $url_rewrite = $options['theme_voice_item_type_url'];
           if( !$url_rewrite ) {
               $url_rewrite = 'howweuzit'; 
           }
       } 
       else {
           $url_rewrite = 'howweuzit';
       }

	register_taxonomy('voice_item_types', 'post_voice', 
         
		array( 
			'hierarchical' => true, 
			'labels' => array(
				  'name' => 'Voice Item Category',
				  'singular_name' => 'Voice Item Categories',
				  'search_items' =>  'Search Voices Categories',
				  'popular_items' => 'Popular Voices Categories',
				  'all_items' => 'All Voices Categories',
				  'parent_item' => 'Parent Categories',
				  'parent_item_colon' => 'Parent Category:',
				  'edit_item' => 'Edit Voice Category',
				  'update_item' => 'Update Voice Category',
				  'add_new_item' => 'Add New Voice Category',
				  'new_item_name' => 'New Voice Category Name'
			),
			'show_ui' => true,
			'query_var' => true, 
			'rewrite' => array('slug' => $url_rewrite)
		) 
	); 
	flush_rewrite_rules();	
}

add_action('init', 'cpt_voice');
add_action('init', 'tax_voice');