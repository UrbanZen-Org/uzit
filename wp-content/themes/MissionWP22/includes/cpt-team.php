<?php
function cpt_team(){
    global $options;
    if ( $options ) {
        $url_rewrite = $options['theme_team_item_url'];
        if( !$url_rewrite ) { 
            $url_rewrite = 'team'; 
        }
    } 
    else {
        $url_rewrite = 'team';
    }

	register_post_type('post_team',
		array(
			'labels' => array(
				'name' => 'Team',
				'singular_name' => 'Team Item',
				'add_new' => 'Add New Team',
				'add_new_item' => 'Add New Team Item',
				'edit' => 'Edit',
				'edit_item' => 'Edit Team Item',
				'new_item' => 'New Team Item',
				'view' => 'View',
				'view_item' => 'View Team Item',
				'search_items' => 'Search Team Items',
				'not_found' => 'No Team items found',
				'not_found_in_trash' => 'No Team items found in Trash',
				'parent' => 'Team Items'
			),
			'description' => 'Easily lets you create a Team Member.',
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

function tax_team() {
	global $options;
        
       if ( $options ) {
           $url_rewrite = $options['theme_team_item_type_url'];
           if( !$url_rewrite ) {
               $url_rewrite = 'teams'; 
           }
       } 
       else {
           $url_rewrite = 'teams';
       }

	register_taxonomy('team_item_types', 'post_team', 
         
		array( 
			'hierarchical' => true, 
			'labels' => array(
				  'name' => 'Team Item Category',
				  'singular_name' => 'Team Item Categories',
				  'search_items' =>  'Search Team Categories',
				  'popular_items' => 'Popular Team Categories',
				  'all_items' => 'All Team Categories',
				  'parent_item' => 'Parent Categories',
				  'parent_item_colon' => 'Parent Category:',
				  'edit_item' => 'Edit Team Category',
				  'update_item' => 'Update Team Category',
				  'add_new_item' => 'Add New Team Category',
				  'new_item_name' => 'New Team Category Name'
			),
			'show_ui' => true,
			'query_var' => true, 
			'rewrite' => array('slug' => $url_rewrite)
		) 
	); 
	flush_rewrite_rules();	
}

add_action('init', 'cpt_team');
add_action('init', 'tax_team');