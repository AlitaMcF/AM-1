<form id="searchform" method="get" action="<?php bloginfo('home'); ?>/">
    <input type="text" id="searchinput" name="s" value="<?php echo esc_html($s); ?>" />
    <input type="button" id="searchsubmit" value="Search" />
</form>