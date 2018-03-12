<?php 

define( 'THEME_PATH', get_template_directory_uri() );
if ( ! isset( $content_width ) ) $content_width = 940;
       

/* ========================================================================================================================
	
	Load OptionTree
	
======================================================================================================================== */

/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
 */

add_filter( 'ot_show_pages', '__return_true' );

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

global $options;
$options = get_option('option_tree');

/**
 * Required: include OptionTree.
 */
include_once( get_template_directory() . '/option-tree/ot-loader.php' );

/* ========================================================================================================================
	
	Required External Files
	
======================================================================================================================== */

require_once get_template_directory() . '/includes/comment-list.php';

//UZIT
include('includes/cpt-community.php');
include('includes/cpt-partners.php');
include('includes/cpt-blog.php');
include('includes/cpt-uzitvideos.php');
include('includes/cpt-voice.php');
include('includes/cpt-press.php');
include('includes/cpt-team.php');
include('includes/cpt-training.php');
include('includes/cpt-howiuzit.php');

include_once("includes/partners-meta-boxes.php");
include_once("includes/blog-meta-boxes.php");
include_once("includes/community-meta-boxes.php");
include_once("includes/uzitvideos-meta-boxes.php");
include_once("includes/voice-meta-boxes.php");
include_once("includes/press-meta-boxes.php");
include_once("includes/team-meta-boxes.php");
include_once("includes/training-meta-boxes.php");

include('includes/cpt-causes.php');
include('includes/cpt-events.php');
include('includes/cpt-staff.php');
include('includes/theme-options.php');
include 'includes/shortcodes/shortcodes.php';
include("includes/widget-causes.php");
include("includes/widget-events.php");
include("includes/widget-news.php");
include_once("includes/tgn-meta-boxes.php");


#include('includes/cpt-uzit.php');
//include("includes/widget-uzit.php");
//END

/* ========================================================================================================================
	
	Custom Paginattion
	
======================================================================================================================== */


function kriesi_pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<ul class='pagination clearfix'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a class='button-small grey rounded3' href='".get_pagenum_link(1)."'>&laquo;</a></li>";
         if($paged > 1 && $showitems < $pages) echo "<a class='button-small-theme rounded3' href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li><span class='button-small-theme rounded3 current'>".$i."</span></li>":"<li><a class='button-small grey rounded3 inactive' href='".get_pagenum_link($i)."' >".$i."</a></li>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<li><a class='button-small-theme rounded3' href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a class='button-small-theme rounded3' href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
         echo "</ul>\n";
     }
}

/* ========================================================================================================================
	
	Custom Menu
	
======================================================================================================================== */


add_theme_support('nav-menus');
register_nav_menu('main_menu', 'Main Menu');
register_nav_menu('uzit_menu', 'UZIT Main Menu');
register_nav_menu('footer_menu', 'Footer Menu');

function display_home2() {
    echo '<ul class="nav clearfix sf-menu sf-js-enabled sf-shadow">
		<li class="homelink"><a href="' . home_url() . '">Home</a></li>';
    wp_list_pages('title_li=&depth=3');
    echo '</nav>';
}

add_theme_support('automatic-feed-links');
// Ready for theme localisation
load_theme_textdomain('localization');

/* ========================================================================================================================
	
	Registering our sidebar
	
======================================================================================================================== */

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Home Full',
'before_widget' => '<li class="homeFull widget clearfix"><div id="%1$s" class="%2$s">',
'after_widget' => '</div></li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Home One Half',
'before_widget' => '<li class="eight columns widget"><div id="%1$s" class="%2$s">',
'after_widget' => '</div></li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Home One Third',
'before_widget' => '<li class="one-third column widget"><div id="%1$s" class="%2$s">',
'after_widget' => '</div></li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

}
if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Home Two Thirds',
'before_widget' => '<li class="two-thirds column widget"><div id="%1$s" class="%2$s">',
'after_widget' => '</div></li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Home One Fourth',
'before_widget' => '<li class="four columns widget"><div id="%1$s" class="%2$s">',
'after_widget' => '</div></li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Pages',
'before_widget' => '<li class="widget"><div id="%1$s" class="%2$s">',
'after_widget' => '</div></li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Causes',
'before_widget' => '<li class="widget"><div id="%1$s" class="%2$s">',
'after_widget' => '</div></li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Events',
'before_widget' => '<li class="widget"><div id="%1$s" class="%2$s">',
'after_widget' => '</div></li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'News',
'before_widget' => '<li class="widget"><div id="%1$s" class="%2$s">',
'after_widget' => '</div></li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Staff',
'before_widget' => '<li class="widget"><div id="%1$s" class="%2$s">',
'after_widget' => '</div></li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Single Causes',
'before_widget' => '<li class="widget"><div id="%1$s" class="%2$s">',
'after_widget' => '</div></li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
}
if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Single Events',
'before_widget' => '<li class="widget"><div id="%1$s" class="%2$s">',
'after_widget' => '</div></li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Single News',
'before_widget' => '<li class="widget"><div id="%1$s" class="%2$s">',
'after_widget' => '</div></li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Single Staff',
'before_widget' => '<li class="widget"><div id="%1$s" class="%2$s">',
'after_widget' => '</div></li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Footer',
'before_widget' => '<li class="widget one-third column"><div id="%1$s" class="%2$s">',
'after_widget' => '</div></li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
}

//UZIT SIDEBARS
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'UZIT Home Full',
        'before_widget' => '<li class="homeFull widget clearfix"><div id="%1$s" class="%2$s">',
        'after_widget' => '</div></li>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'UZIT Home One Half',
        'before_widget' => '<li class="eight columns widget"><div id="%1$s" class="%2$s">',
        'after_widget' => '</div></li>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
//End


/* ========================================================================================================================
	
	Set Custom Query
	
======================================================================================================================== */

function dd_set_query($custom_query=null) { global $wp_query, $wp_query_old, $post, $orig_post;
	$wp_query_old = $wp_query;
	$wp_query = $custom_query;
	$orig_post = $post;
}

function dd_restore_query() {  global $wp_query, $wp_query_old, $post, $orig_post;
	$wp_query = $wp_query_old;
	$post = $orig_post;
	setup_postdata($post);
}

/* ========================================================================================================================
	
	Adding Excerpt to custom posts
	
======================================================================================================================== */

add_post_type_support( 'post_causes', 'excerpt' );
add_post_type_support( 'post_events', 'excerpt' );
add_post_type_support( 'post_staff', 'excerpt' );

/* ========================================================================================================================
	
	Enqueues scripts and styles for front-end.
	
======================================================================================================================== */

function mission_scripts_styles() {
	global $wp_styles;

	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Adds JavaScript for handling the navigation menu hide-and-show behavior.
	 */
        
        wp_enqueue_script("jquery"); 
	/*wp_enqueue_script( 'mission-script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true );*/
/*        wp_enqueue_script( 'mission-prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), '1.0', true );*/
        wp_enqueue_script( 'mission-superfish', get_template_directory_uri() . '/js/superfish.js', array(), '1.0', true );
        wp_enqueue_script( 'mission-flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), '1.0', true );
/*        wp_enqueue_script( 'mission-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0', true );*/
        wp_enqueue_script("jquery"); 

	/*
	 * Loads our main stylesheet.
	 */
	wp_enqueue_style( 'mission-style', get_stylesheet_uri() );

        /*
	 * Loads other stylesheet.
	 */
  
    /*    wp_enqueue_style( 'mission-prettyPhoto', get_template_directory_uri() . '/stylesheets/prettyPhoto.css', array( 'mission-style' ), '20121010' );*/
        wp_enqueue_style( 'mission-custom', get_template_directory_uri() . '/stylesheets/custom.php', array( 'mission-style' ), '20121010' );
        wp_enqueue_style( 'mission-superfish', get_template_directory_uri() . '/stylesheets/superfish.css', array( 'mission-style' ), '20121010' );
        wp_enqueue_style( 'mission-flexslider', get_template_directory_uri() . '/stylesheets/flexslider.css', array( 'mission-style' ), '20121010' );
     /*   wp_enqueue_style( 'mission-btn', get_template_directory_uri() . '/stylesheets/btn.css', array( 'mission-style' ), '20121010' );*/
        wp_enqueue_style( 'mission-skeleton', get_template_directory_uri() . '/stylesheets/skeleton.css', array( 'mission-style' ), '20121010' );
       /* wp_enqueue_style( 'mission-bootstrap', get_template_directory_uri() . '/stylesheets/bootstrap.css', array( 'mission-style' ), '20121010' );
        wp_enqueue_style( 'mission-fontello', get_template_directory_uri() . '/font/css/fontello.css', array( 'mission-style' ), '20121010' );
        wp_enqueue_style( 'mission-fontelloie7', get_template_directory_uri() . '/font/css/fontello-ie7.css', array( 'mission-style' ), '20121010' );*/
        wp_enqueue_style( 'mission-base', get_template_directory_uri() . '/stylesheets/base.css', array( 'mission-style' ), '20121010' );
  
        
	/*
	 * Loads the Internet Explorer specific stylesheet.
	 */
        
	wp_enqueue_style( 'mission-ie6', get_template_directory_uri() . '/stylesheets/ie6.css', array( 'mission-style' ), '20121010' );
        wp_enqueue_style( 'mission-ie7', get_template_directory_uri() . '/stylesheets/ie7.css', array( 'mission-style' ), '20121010' );
        wp_enqueue_style( 'mission-ie8', get_template_directory_uri() . '/stylesheets/ie8.css', array( 'mission-style' ), '20121010' );
	$wp_styles->add_data( 'mission-ie6', 'conditional', 'lt IE 6' );
        $wp_styles->add_data( 'mission-ie7', 'conditional', 'lt IE 7' );
        $wp_styles->add_data( 'mission-ie8', 'conditional', 'lt IE 8' );
   
}
add_action( 'wp_enqueue_scripts', 'mission_scripts_styles' );


/*** CUSTOM ***/
function the_slug($echo=true){
    $slug = basename(get_permalink());
    do_action('before_slug', $slug);
    $slug = apply_filters('slug_filter', $slug);
    if( $echo ) echo $slug;
    do_action('after_slug', $slug);
    return $slug;
}

class wp_bootstrap_navwalker extends Walker_Nav_Menu {
	/**
	 * @see Walker::start_lvl()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int $depth Depth of page. Used for padding.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul role=\"menu\" class=\" dropdown-menu\">\n";
	}
	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item Menu item data object.
	 * @param int $depth Depth of menu item. Used for padding.
	 * @param int $current_page Menu item ID.
	 * @param object $args
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		/**
		 * Dividers, Headers or Disabled
		 * =============================
		 * Determine whether the item is a Divider, Header, Disabled or regular
		 * menu item. To prevent errors we use the strcasecmp() function to so a
		 * comparison that is not case sensitive. The strcasecmp() function returns
		 * a 0 if the strings are equal.
		 */
		if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="divider">';
		} else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="divider">';
		} else if ( strcasecmp( $item->attr_title, 'dropdown-header') == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_attr( $item->title );
		} else if ( strcasecmp($item->attr_title, 'disabled' ) == 0 ) {
			$output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr( $item->title ) . '</a>';
		} else {
			$class_names = $value = '';
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;
			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
			if ( $args->has_children )
				$class_names .= ' dropdown';
			if ( in_array( 'current-menu-item', $classes ) )
				$class_names .= ' active';
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
			$output .= $indent . '<li' . $id . $value . $class_names .'>';
			$atts = array();
			$atts['title']  = ! empty( $item->title )	? $item->title	: '';
			$atts['target'] = ! empty( $item->target )	? $item->target	: '';
			$atts['rel']    = ! empty( $item->xfn )		? $item->xfn	: '';
			// If item has_children add atts to a.
			if ( $args->has_children && $depth === 0 ) {
				$atts['href']   		= '#';
				$atts['data-toggle']	= 'dropdown';
				$atts['class']			= 'dropdown-toggle';
				$atts['aria-haspopup']	= 'true';
			} else {
				$atts['href'] = ! empty( $item->url ) ? $item->url : '';
			}
			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if ( ! empty( $value ) ) {
					$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}
			$item_output = $args->before;
			/*
			 * Glyphicons
			 * ===========
			 * Since the the menu item is NOT a Divider or Header we check the see
			 * if there is a value in the attr_title property. If the attr_title
			 * property is NOT null we apply it as the class name for the glyphicon.
			 */
			if ( ! empty( $item->attr_title ) )
				$item_output .= '<a'. $attributes .'><span class="glyphicon ' . esc_attr( $item->attr_title ) . '"></span>&nbsp;';
			else
				$item_output .= '<a'. $attributes .'>';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= ( $args->has_children && 0 === $depth ) ? ' <span class="caret"></span></a>' : '</a>';
			$item_output .= $args->after;
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}
	/**
	 * Traverse elements to create list from elements.
	 *
	 * Display one element if the element doesn't have any children otherwise,
	 * display the element and its children. Will only traverse up to the max
	 * depth and no ignore elements under that depth.
	 *
	 * This method shouldn't be called directly, use the walk() method instead.
	 *
	 * @see Walker::start_el()
	 * @since 2.5.0
	 *
	 * @param object $element Data object
	 * @param array $children_elements List of elements to continue traversing.
	 * @param int $max_depth Max depth to traverse.
	 * @param int $depth Depth of current element.
	 * @param array $args
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return null Null on failure with no changes to parameters.
	 */
	public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        if ( ! $element )
            return;
        $id_field = $this->db_fields['id'];
        // Display this element.
        if ( is_object( $args[0] ) )
           $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );
        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
	/**
	 * Menu Fallback
	 * =============
	 * If this function is assigned to the wp_nav_menu's fallback_cb variable
	 * and a manu has not been assigned to the theme location in the WordPress
	 * menu manager the function with display nothing to a non-logged in user,
	 * and will add a link to the WordPress menu manager if logged in as an admin.
	 *
	 * @param array $args passed from the wp_nav_menu function.
	 *
	 */
	public static function fallback( $args ) {
		if ( current_user_can( 'manage_options' ) ) {
			extract( $args );
			$fb_output = null;
			if ( $container ) {
				$fb_output = '<' . $container;
				if ( $container_id )
					$fb_output .= ' id="' . $container_id . '"';
				if ( $container_class )
					$fb_output .= ' class="' . $container_class . '"';
				$fb_output .= '>';
			}
			$fb_output .= '<ul';
			if ( $menu_id )
				$fb_output .= ' id="' . $menu_id . '"';
			if ( $menu_class )
				$fb_output .= ' class="' . $menu_class . '"';
			$fb_output .= '>';
			$fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">Add a menu</a></li>';
			$fb_output .= '</ul>';
			if ( $container )
				$fb_output .= '</' . $container . '>';
			echo $fb_output;
		}
	}
}

class CSS_Menu_Walker extends Walker {

  var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
  
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul>\n";
  }
  
  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
  
    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $class_names = $value = ''; 
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    
    /* Add active class */
    if(in_array('current-menu-item', $classes)) {
      $classes[] = 'active';
      unset($classes['current-menu-item']);
    }
    
    /* Check for children */
    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' =>'_menu_item_menu_item_parent', 'meta_value' => $item->ID));
    if (!empty($children)) {
      $classes[] = 'has-sub';
    }
    
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
    
    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
    
    $output .= $indent . '<li' . $id . $value . $class_names .'>';
    
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    
    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'><span>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</span></a>';
    $item_output .= $args->after;
    
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
  
  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li>\n";
  }
} 

function new_content_more($more) {
       global $post;
       return ' <a href="' . get_permalink() . "#more-{$post->ID}\" class=\"button spacing pull-left\">Read More</a>";
}   
add_filter( 'the_content_more_link', 'new_content_more' );


?>