<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            if (function_exists('is_tag') && is_tag()) {
                single_tag_title("Tag Archive for &quot;"); 
                echo '&quot; - ';
            }
            elseif ( is_front_page()) {
                //wp_title('');
                echo 'Home | Urban Zen Integrative Therapy Program';
            }
            elseif (is_archive()) {
                echo $_SESSION['page-title-prefix'] . ' - ';
                if($_SESSION['page-title']){
                    echo $_SESSION['page-title'] . ' - ';
                }
            }
            elseif (is_search()) {
                echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
            }
            elseif (!(is_404()) && ( is_single()) || (is_page()) ) {
                wp_title(''); 
                echo ' - ';
            }
            elseif (is_404()) {
                echo 'Not Found - ';
            }
            elseif (is_home()) {
                bloginfo('name'); echo ' - '; bloginfo('description');
            }
            else {
                bloginfo('name');
            }
            if ($paged>1) {
                echo ' - page '. $paged; 
            }
        ?>
    </title>
    
    <meta name="author" content="">
    
    <!-- Mobile Specific Metas ================================================== -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
    
    
    
    <?php if (is_search()) { ?>
    <meta name="robots" content="noindex, nofollow" /> 
    <?php } ?>
            
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" type="image/x-icon" href="http://uzit.urbanzen.org/wp-content/uploads/2014/01/favicon.ico">
    <link rel="icon" type="image/x-icon" href="http://uzit.urbanzen.org/wp-content/uploads/2014/01/favicon.ico">
    
	<link rel="icon" type="image/jpg" href="http://uzit.urbanzen.org/wp-content/uploads/2014/01/favicon.jpg">
	<link rel="apple-touch-icon" type="image/jpg" href="http://uzit.urbanzen.org/wp-content/uploads/2014/01/favicon.jpg">
	
    <!-- Theme Hook -->
        
    <?php wp_head(); ?>
    
    <?php add_thickbox(); ?>
    
    <!-- theme override css -->
    <link rel="stylesheet" href="/wp-content/themes/MissionWP22/stylesheets/override/base.css" type="text/css" media="all">
    <!-- end -->
    <script type="text/javascript">
	jQuery( document ).ready(function() {
	  jQuery('#cssmenu').prepend('<div id="menu-button"></div>');
	  jQuery('#cssmenu #menu-button').on('click', function(){
	    var menu = jQuery(this).next('ul');
	    if (menu.hasClass('open')) {
	      menu.removeClass('open');
	    } else {
	      menu.addClass('open');
	    }
	  });
	});
	</script>
</head>
<?php

        $logo_src = ot_get_option('logoUZIT');
        $logo_title = ot_get_option('logoUZITTitle');
        $logo_href = ot_get_option('logoUZITHref');
        $logo_slogan = ot_get_option('logoUZITSlogan');
        $slogan_color = ot_get_option('logoUZITSloganColor');
        $slogan_size = ot_get_option('logoUZITSloganSize');
        $orglogo_href = ot_get_option('logoHref');
        $orglogo_slogan = ot_get_option('logoSlogan');

?>


<body id="UZPost-<?php global $post; echo $postid = $post->ID;?>" data-target=".subnav" data-offset="50" <?php body_class(); ?> >

    <div id="topbar">
        
      
        <div class="top-back-link">
            <div class="container clearfix">
                <div class="sixteen columns">
                    <a href="http://www.urbanzen.org" alt="Urban Zen Foundation" style="font-size:12px;display:inline-block;padding:10px 0 5px;" style="padding:">&lt; URBANZEN.ORG</a>
                </div>
            </div>
        </div>
        
        
        <div class="container clearfix">

            <div class="sixteen columns">
                
                <div class="logo-container">
                    <div class="clearfix">
                        <a href="<?php echo $logo_href; ?>" style="position:relative;z-index:9999;">
                            <img src="<?php echo $logo_src; ?>" alt="<?php echo $logo_title; ?>" />
                        </a>
                        <div class="slogan-container" style="float:left;">
                            <a href="<?php echo $logo_href; ?>">
                                <span class="logo-slogan" style="color:<?php echo $slogan_color; ?>;font-size:<?php echo $slogan_size; ?>;font-weight:100;line-height:1em;"><?php echo $logo_slogan; ?></span>
                            </a>
                        </div>
                    </div>
                </div>
				<?php 
				  wp_nav_menu(array(
				    'menu' => '6', 
				    'container_id' => 'cssmenu', 
				    'walker' => new CSS_Menu_Walker()
				  )); 
				?>
            </div>
            
        </div>
        
    </div>