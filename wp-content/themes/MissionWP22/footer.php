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
</body>
</html>