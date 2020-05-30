<div class="sidebar">
    <ul>
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar()) : else : ?>

            <li>
                <div id="search">
                    <?php include(TEMPLATEPATH . '/searchform.php'); ?>
                </div>
            </li>
            <?php wp_list_pages('title_li=<h2>Pages</h2>&depth=3'); ?>
            <!-- the same as Pages below -->
            <li>
                <h2><?php _e('Pages') ?> </h2>
                <ul>
                    <?php wp_list_pages('title_li=&depth=3'); ?>
                </ul>
            </li>
            <li>
                <h2>
                    <?php _e('Categories'); ?>
                </h2>
                <ul>
                    <?php wp_list_categories('show_count=1&title_li='); ?>
                </ul>
            </li>
            <li>
                <h2><?php _e('Archives'); ?></h2>
                <ul>
                    <?php wp_get_archives('type=monthly'); ?>
                </ul>
            </li>
            <sli>
                <h2> <?php _e('Calendar'); ?> </h2>
                <?php get_calendar(); ?>
                </li>
                <li>
                    <h2><?php _e('Meta'); ?></h2>
                    <ul>
                        <?php wp_register(); ?>
                        <li><?php wp_loginout(); ?></li>
                        <?php wp_meta(); ?>
                    </ul>
                </li>
            <?php endif; ?>
    </ul>
</div>