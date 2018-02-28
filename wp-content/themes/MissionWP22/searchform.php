<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<form method="get" id="searchform" class="mission" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'mission' ); ?>" />
		<input type="submit" class="" name="submit" id="searchsubmit" value="GO" />
		<a class="close-searchform" href="javascript:void(0);">X</a>
	</form>
    <script>
        jQuery('a.close-searchform').click(function(){
            jQuery('.topBarSearch').hide();
            jQuery('.searchForm a .icon-cancel').hide();
            jQuery('.searchForm a .icon-search').show();
        });
    </script>