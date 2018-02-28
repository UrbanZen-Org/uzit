<?php
function cpt_partners(){
    global $options;
    if ( $options ) {
        $url_rewrite = $options['theme_partners_item_url'];
        if( !$url_rewrite ) { 
            $url_rewrite = 'partner'; 
        }
    } 
    else {
        $url_rewrite = 'partners';
    }

	register_post_type('post_partners',
		array(
			'labels' => array(
				'name' => 'Partners',
				'singular_name' => 'Partner Item',
				'add_new' => 'Add New Partner',
				'add_new_item' => 'Add New Partner Item',
				'edit' => 'Edit',
				'edit_item' => 'Edit Partner Item',
				'new_item' => 'New Partner Item',
				'view' => 'View',
				'view_item' => 'View Partners Item',
				'search_items' => 'Search Partners Items',
				'not_found' => 'No Partners items found',
				'not_found_in_trash' => 'No Partners items found in Trash',
				'parent' => 'Parent Causes Item'
			),
			'description' => 'Easily lets you create Partners.',
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

function tax_partners() {
	global $options;
        
       if ( $options ) {
           $url_rewrite = $options['theme_partners_item_type_url'];
           if( !$url_rewrite ) {
               $url_rewrite = 'partners'; 
           }
       } 
       else {
           $url_rewrite = 'partners-category';
       }

	register_taxonomy('partners_item_types', 'post_partners', 
         
		array( 
			'hierarchical' => true, 
			'labels' => array(
				  'name' => 'Partners Item Category',
				  'singular_name' => 'Partners Item Category',
				  'search_items' =>  'Search Partners Categories',
				  'popular_items' => 'Popular Partners Categories',
				  'all_items' => 'All Partners Categories',
				  'parent_item' => 'Partners Parent Categories',
				  'parent_item_colon' => 'Partners Parent Category:',
				  'edit_item' => 'Edit Partners Category',
				  'update_item' => 'Update Partners Category',
				  'add_new_item' => 'Add New Partners Category',
				  'new_item_name' => 'New Partners Category Name'
			),
			'show_ui' => true,
			'query_var' => true, 
			'rewrite' => array('slug' => $url_rewrite)
		) 
	); 
	flush_rewrite_rules();	
}

add_action('init', 'cpt_partners');
add_action('init', 'tax_partners');