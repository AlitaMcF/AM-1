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
            <div id="container-index">
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
                                <?php
                                the_content('<div style="text-align:center">more...</div>', true);
                                ?>
                                <p class="postmetadata">
                                    <?php
                                    _e('Field under&#58; ');
                                    the_category(', ');
                                    _e(' by ');
                                    the_author();
                                    ?>
                                    <br />
                                    <?php
                                    comments_popup_link('No Comment', '1 Comment', '% Comments');
                                    edit_post_link('Edit', ' | ', '');
                                    ?>
                                </p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <div id="navigator">
                        <?php posts_nav_link(); ?>
                    </div>
                <?php else : ?>
                    <div class="post">
                        <h2>
                            <?php _e('Not Found'); ?>
                        </h2>
                    </div>
                <?php endif; ?>
            </div>

            <?php get_sidebar(); ?>

        </div>

        <?php get_footer(); ?>
    </div>
</body>

</html>