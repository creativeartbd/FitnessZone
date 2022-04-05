<!-- **Searchform** -->
<form method="get" id="searchform" action="<?php echo esc_url( home_url('/') ); ?>">
    <input id="s" name="s" type="text" required="required" placeholder="<?php esc_attr('Enter Keyword','fitnesszone'); ?>" class="text_input"   />
    <a href="javascript:void(0)" class="dt-search-icon"> <span class="fa fa-close"> </span> </a>
	<input name="submit" type="submit"  value="<?php esc_attr_e('Search','fitnesszone'); ?>" />
</form><!-- **Searchform - End** -->