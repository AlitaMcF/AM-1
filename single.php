<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.17.1/build/styles/github.min.css">
    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.17.1/build/highlight.min.js"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
</head>

<body id="body-home">
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
                                the_content();
                                ?>
                                <?php /*dividing page if needed*/ wp_link_pages(); ?>
                            </div>
                        </div>

                        <?php
                        comments_template();
                        ?>


                    <?php endwhile; ?>
                    <div id="end-flag">
                        <hr class="end-flag-hr">
                        &nbsp;&nbsp;&nbsp;<b>END<b>&nbsp;&nbsp;&nbsp;
                                <hr class="end-flag-hr">
                    </div>
                    <div id="navigator">
                        <div id="navigator-item-left" style="float: left;">
                            <?php previous_post_link('&laquo; %link'); ?>
                        </div>
                        <div id="navigator-item-right" style="float: right;">
                            <?php next_post_link('%link &raquo;'); ?>
                        </div>
                    </div>
                <?php else : ?>
                    <h2>
                        <?php _e('Not Found :('); ?>
                    </h2>
                <?php endif; ?>
            </div>

        </div>

        <?php get_footer(); ?>

    </div>
</body>

</html>