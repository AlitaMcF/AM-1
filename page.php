<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body id="body-home">
    <div id="whole-page">
        <?php get_header(); ?>

        <div id="container-wrapper">
            <div id="container-page">
                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>
                        <div class="post">
                            <div class="metainfo">
                                <h2>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <p class="postmetadata">
                                    <?php
                                    _e('Topics&#58; ');
                                    the_category(', ');
                                    ?>
                                    <?php
                                    _e('&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;');
                                    comments_popup_link('No Comment', '1 Comment', '% Comments');
                                    _e('&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;');
                                    the_date('Y-m-d');
                                    ?>
                                </p>
                            </div>
                            <div class="entry">
                                <?php
                                the_content('<div style="text-align:left">[Read more...]</div>', true);
                                ?>
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
        </div>

        <?php get_footer(); ?>

    </div>
</body>

</html>