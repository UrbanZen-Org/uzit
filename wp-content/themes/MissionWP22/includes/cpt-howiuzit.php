<?php 
// Create Post Types

function create_how_i_uzit() {
  $labels = array(
    'name'               => __( 'How I Uzit'),
    'singular_name'      => __( 'How I Uzit'),
    'menu_name'          => __( 'How I Uzit'),
    'name_admin_bar'     => __( 'How I Uzit'),
    'add_new'            => __( 'Add New'),
    'add_new_item'       => __( 'Add New How I Uzit Post'),
    'new_item'           => __( 'New How I Uzit Post'),
    'edit_item'          => __( 'Edit How I Uzit Post'),
    'view_item'          => __( 'View How I Uzit Posts'),
    'all_items'          => __( 'All How I Uzit Posts'),
    'search_items'       => __( 'Search How I Uzit Posts'),
    'parent_item_colon'  => __( 'Parent How I Uzit:'),
    'not_found'          => __( 'No How I Uzit Posts found.'),
    'not_found_in_trash' => __( 'No How I Uzit Posts found in Trash.')
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'query_var'          => true,
    'menu_icon'          => 'dashicons-format-gallery',
    'menu_position'      => 34,
    'rewrite'            => array( 'slug' => 'how-i-uzit'),
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => true,
    'taxonomies'          => array('category','post_tag'),
    'supports'           => array('title','thumbnail', 'editor','excerpt')
  );
  register_post_type( 'how_i_uzit', $args );
}
add_action( 'init', 'create_how_i_uzit' );
