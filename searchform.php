<form id="searchform" method="get" action="<?php bloginfo('home'); ?>/">
    <input type="text" id="s" name="s" value="<?php echo esc_html($s); ?>" size="15"/>
    <input type="submit" id="searchsubmit" value="Search"/>
</form>