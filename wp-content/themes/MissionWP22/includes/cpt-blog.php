<?php
function cpt_blog(){
    global $options;
    if ( $options ) {
        $url_rewrite = $options['theme_blog_item_url'];
        if( !$url_rewrite ) { 
            $url_rewrite = 'blog'; 
        }
    } 
    else {
        $url_rewrite = 'blog';
    }

	register_post_type('post_blog',
		array(
			'labels' => array(
				'name' => 'Blog',
				'singular_name' => 'Blog Item',
				'add_new' => 'Add New Blog',
				'add_new_item' => 'Add New Blog Item',
				'edit' => 'Edit',
				'edit_item' => 'Edit Blog Item',
				'new_item' => 'New Blog Item',
				'view' => 'View',
				'view_item' => 'View Blog Item',
				'search_items' => 'Search Blog Items',
				'not_found' => 'No Blog items found',
				'not_found_in_trash' => 'No Blog items found in Trash',
				'parent' => 'Blog Causes Item'
			),
			'description' => 'Easily lets you create Blog.',
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

function tax_blog() {
	global $options;
        
       if ( $options ) {
           $url_rewrite = $options['theme_blog_item_type_url'];
           if( !$url_rewrite ) {
               $url_rewrite = 'blogs'; 
           }
       } 
       else {
           $url_rewrite = 'blog-category';
       }

	register_taxonomy('blog_item_types', 'post_blog', 
         
		array( 
			'hierarchical' => true, 
			'labels' => array(
				  'name' => 'Blog Item Category',
				  'singular_name' => 'Blog Item Categories',
				  'search_items' =>  'Search Blog Categories',
				  'popular_items' => 'Popular Blog Categories',
				  'all_items' => 'All Blog Categories',
				  'parent_item' => 'Parent Blog Categories',
				  'parent_item_colon' => 'Parent Blog Category:',
				  'edit_item' => 'Edit Blog Category',
				  'update_item' => 'Update Blog Category',
				  'add_new_item' => 'Add New Blog Category',
				  'new_item_name' => 'New Blog Category Name'
			),
			'show_ui' => true,
			'query_var' => true, 
			'rewrite' => array('slug' => $url_rewrite)
		) 
	); 
	flush_rewrite_rules();	
}

add_action('init', 'cpt_blog');
add_action('init', 'tax_blog');