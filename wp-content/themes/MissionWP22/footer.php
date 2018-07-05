<?php
    $jQueryLazyLoad = get_post_meta(get_the_ID(), 'jQueryLazyLoad', true);
?>
<?php if($jQueryLazyLoad): ?>
    <script type="text/javascript" src="/wp-content/themes/MissionWP22/js/jquery.lazyload.min.js"></script>
    <script type="text/javascript" charset="utf-8">
        jQuery(function() {
              <?php echo $jQueryLazyLoad; ?>
          });
    </script>
<?php endif; ?>


<footer style="display:none;">
    <ul class="container">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer")) ; ?>
    </ul>
</footer>


<div class="footer">
    <div class="container">
        <div class="nav-container clearfix">
            
            <div style="float:left;">
                <?php
                    wp_nav_menu(
                        array(
                            'container' => false,
                            'menu_class' => 'nav',
                            'theme_location' => 'footer_menu',
                            'echo' => true,
                            'before' => '',
                            'after' => '',
                            'link_before' => '',
                            'fallback_cb' => 'display_home2',
                            'link_after' => '',
                            'depth' => 0
                        )
                    );
                ?>
            </div>
           
            <div class="copyright-container">
                <ul>
                    <li>CONNECT WITH US</li>    
                    <li><a href="https://www.instagram.com/urbanzen_uzit/" target="_blank">Facebook</a></li>
                    <li><a href="https://www.instagram.com/urbanzen_uzit" target="_blank">Instagram</a></li>
                    <li><a href="http://vimeo.com/channels/uzit/" target="_blank">Vimeo</a></li>
                    <li><a href="/uzit/contact/">Contact</a></li>
                    <li><span class="copyright">&copy;2018 Urban Zen Foundation. All rights reserved.</span></li>
                </ul>
            </div>
           
        </div>
    </div>
</div>

<div class="smallFooter" style="display:none;">
    <div class="container clearfix">
        <div class="sixteen columns">
            
            <ul style="display:none;">
                <?php if (ot_get_option('donatelink') != '') { ?>
                <li class="donate"><a href="<?php echo ot_get_option('donatelink') ?>"><i class="icon-plus-circled"></i><?php echo ot_get_option('donatebtntext') ?></a></li>
                <?php } ?>

                <?php if (ot_get_option('contactlink') != '') { ?>
                <li class="mail"><a href="<?php echo ot_get_option('contactlink') ?>"><i class="icon-mail"></i></a></li>
                <?php } ?>

                <?php if (ot_get_option('twitterlink') != '') { ?>
                <li class="twitter"><a href="<?php echo ot_get_option('twitterlink') ?>"><i class="icon-twitter"></i></a></li>
                <?php } ?>

                <?php if (ot_get_option('youtubelink') != '') { ?>
                <li class="youtube"><a href="<?php echo ot_get_option('youtubelink') ?>"><i class="icon-youtube"></i></a></li>
                <?php } ?>

                <?php if (ot_get_option('facebooklink') != '') { ?>
                <li class="facebook"><a href="<?php echo ot_get_option('facebooklink') ?>"><i class="icon-facebook"></i></a></li>
                <?php } ?>

                <?php if (ot_get_option('vimeolink') != '') { ?>
                <li class="vimeo"><a href="<?php echo ot_get_option('vimeolink') ?>"><i class="icon-vimeo"></i></a></li>
                <?php } ?>

                <?php if (ot_get_option('googlelink') != '') { ?>
                <li class="google"><a href="<?php echo ot_get_option('googlelink') ?>"><i class="icon-gplus"></i></a></li>
                <?php } ?>

                <?php if (ot_get_option('flickrlink') != '') { ?>
                <li class="flickr"><a href="<?php echo ot_get_option('flickrlink') ?>"><i class="icon-flickr"></i></a></li>
                <?php } ?>

                <?php if (ot_get_option('pinterestlink') != '') { ?>
                <li class="pinterest"><a href="<?php echo ot_get_option('pinterestlink') ?>"><i class="icon-pinterest"></i></a></li>
                <?php } ?>

                <?php if (ot_get_option('linkedinlink') != '') { ?>
                <li class="linkedin"><a href="<?php echo ot_get_option('linkedinlink') ?>"><i class="icon-linkedin"></i></a></li>
                <?php } ?>

                <?php if (ot_get_option('dribbblelink') != '') { ?>
                <li class="dribbble"><a href="<?php echo ot_get_option('dribbblelink') ?>"><i class="icon-dribbble"></i></a></li>
                <?php } ?>

                <?php if (ot_get_option('instagramlink') != '') { ?>
                <li class="instagram"><a href="<?php echo ot_get_option('instagramlink') ?>"><i class="icon-instagrem"></i></a></li>
                <?php } ?>

                <?php if (ot_get_option('behancelink') != '') { ?>
                <li class="behance"><a href="<?php echo ot_get_option('behancelink') ?>"><i class="icon-behance"></i></a></li>
                <?php } ?>

                <?php if (ot_get_option('topbarsearch') == 'yes') { ?>
                <li class="searchForm"><a href="#"><i class="icon-search"></i><i class="icon-cancel"></i></a></li>
                <?php } ?>
            </ul>
                
            <div class="smallFooterRight">
                <span style="color:#ffffff;font-weight:100;border-right:1px solid #ababab;padding-right:20px;margin-right:15px;">
                    <?php echo ot_get_option('smallfooterrightcontent') ?>
                </span>
            </div>
                
            <div class="footer-nav">
                <?php
                    wp_nav_menu(
                        array(
                            'container' => false,
                            'menu_class' => 'footer nav clearfix',
                            'theme_location' => 'footer_menu',
                            'echo' => true,
                            'before' => '',
                            'after' => '',
                            'link_before' => '',
                            'fallback_cb' => 'display_home2',
                            'link_after' => '',
                            'depth' => 0
                        )
                    );
                ?>
            </div>
            
        </div>
    </div>
</div>

 
    
<!-- page custom css -->
<?php
    $css = get_post_meta(get_the_ID(), 'pageCSS', true);
    if (!empty($css)):
?>
<style type="text/css">
    <?php echo $css; ?>
</style>
<?php endif; ?>
<!-- end -->
    
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-48370160-1']);
    _gaq.push(['_trackPageview']);

    (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5970bbe876205bd1"></script> 
<?php wp_footer(); ?>

    <div class="find-popup">
      <div class="popup-body">
        <div class="close" data-close="">&times;</div>
        <div class="popup-image">
          <img src="<?php the_field('popup_image', 'option'); ?>" class="desktop">
          <img src="<?php the_field('popup_image_mobile', 'option'); ?>" class="mobile">
        </div>
        <div class="popup-description-form">
          <h2><?php the_field('popup_title', 'option'); ?></h2>
          <p><?php the_field('popup_text', 'option'); ?></p>
      
          <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
  #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
  /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
     We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://urbanzen.us16.list-manage.com/subscribe/post?u=8ded742a34e557c8b387cfddf&amp;id=cc9b89a5bd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">

<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
  
  <input type="text" placeholder="First Name" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
  
  <input type="text" value="" placeholder="Last Name" name="LNAME" class="" id="mce-LNAME">
</div>
<div class="mc-field-group">
  

  <input type="email" value="" name="EMAIL" placeholder="Email Address" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
  
  <input type="text" value="" name="MMERGE5" placeholder="Zip Code" class="" id="mce-MMERGE5">
</div>
  <div id="mce-responses" class="clear">
    <div class="response" id="mce-error-response" style="display:none"></div>
    <div class="response" id="mce-success-response" style="display:none"></div>
  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8ded742a34e557c8b387cfddf_cc9b89a5bd" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
    <button type="submit">Submit</button>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='MMERGE5';ftypes[5]='zip';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
        </div>
      </div>
    </div>
</body>
</html>