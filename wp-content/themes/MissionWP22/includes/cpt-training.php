<?php
function cpt_training(){
    global $options;
    if ( $options ) {
        $url_rewrite = $options['theme_training_item_url'];
        if( !$url_rewrite ) { 
            $url_rewrite = 'training'; 
        }
    } 
    else {
        $url_rewrite = 'training';
    }

	register_post_type('post_training',
		array(
			'labels' => array(
				'name' => 'Training',
				'singular_name' => 'Training Item',
				'add_new' => 'Add New training',
				'add_new_item' => 'Add New Training Item',
				'edit' => 'Edit',
				'edit_item' => 'Edit Training Item',
				'new_item' => 'New Training Item',
				'view' => 'View',
				'view_item' => 'View Training Item',
				'search_items' => 'Search training Items',
				'not_found' => 'No training items found',
				'not_found_in_trash' => 'No training items found in Trash',
				'parent' => 'training Items'
			),
			'description' => 'Easily lets you create a training class.',
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

function tax_training() {
	global $options;
        
       if ( $options ) {
           $url_rewrite = $options['theme_training_item_type_url'];
           if( !$url_rewrite ) {
               $url_rewrite = 'trainings'; 
           }
       } 
       else {
           $url_rewrite = 'trainings';
       }

	register_taxonomy('training_item_types', 'post_training', 
         
		array( 
			'hierarchical' => true, 
			'labels' => array(
				  'name' => 'Training Item Category',
				  'singular_name' => 'Training Item Categories',
				  'search_items' =>  'Search Training Categories',
				  'popular_items' => 'Popular Training Categories',
				  'all_items' => 'All Training Categories',
				  'parent_item' => 'Parent Categories',
				  'parent_item_colon' => 'Parent Category:',
				  'edit_item' => 'Edit Training Category',
				  'update_item' => 'Update Training Category',
				  'add_new_item' => 'Add New Training Category',
				  'new_item_name' => 'New Training Category Name'
			),
			'show_ui' => true,
			'query_var' => true, 
			'rewrite' => array('slug' => $url_rewrite)
		) 
	); 
	flush_rewrite_rules();	
}

add_action('init', 'cpt_training');
add_action('init', 'tax_training');