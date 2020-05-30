<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div id="whole-page">
        <?php get_header(); ?>

        <div id="container-wrapper">
            <div id="container-single">
                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>
                        <div class="post">
                            <h2>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="entry">
                                <?php the_content(); ?>
                                <?php /*dividing page if needed*/ wp_link_pages(); ?>
                                <p class="postmetadata">
                                    <?php
                                    _e('Field under&#58; ');
                                    the_category(', ');
                                    _e(' by ');
                                    the_author();
                                    ?>
                                    <br />
                                    <?php
                                    edit_post_link('Edit', '', '');
                                    ?>
                                </p>
                            </div>
                            <?php
                            if (comments_open() || get_comments_number()) { // The comment module is displayed only when the comment function is enabled or comments are available
                                comments_template(); // without parameter will use the comments.php file
                            }
                            ?>
                        </div>
                    <?php endwhile; ?>
                    <div id="navigator">
                        <?php previous_post_link('&laquo; %link'); ?>
                        <?php next_post_link('%link &raquo;'); ?>
                    </div>
                <?php else : ?>
                    <div class="post">
                        <h2>
                            <?php _e('Not Found'); ?>
                        </h2>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php get_footer(); ?>

    </div>
</body>

</html>