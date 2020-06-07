<div id="header">
    <div id="header-blog-title">
        <h1 id="header-h1">
            <a href="<?php bloginfo('url'); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </h1>
    </div>
    <div id="header-navigator">
        <div id="header-navigator-search">
            <?php include(TEMPLATEPATH . '/searchform.php'); ?>
        </div>
        <ul>
            <li>
                <p>All post &#8801;</p>
                <ul>
                    <?php wp_list_categories('show_count=0&title_li='); ?>
                </ul>
            </li>
            <li>
                <p>Series &#8801;</p>
                <ul>
                    <li>Operating System</li>
                    <li>Machine Learning</li>
                    <li>Arduino</li>
                    <li><a href="https://shaunfong.com/tag/algorithm/">Algorithm</a></li>
                </ul>
            </li>
            <li>
                <p>Awesome projects &#8801;</p>
                <ul>
                    <li>Self ML Library</li>
                    <li>Arduino</li>
                </ul>
            </li>
            <li>
                <p><a href="https://shaunfong.com/timeline/">Billboard</a></p>
            </li>
            <li>
                <p>About me &#8801;</p>
                <ul>
                    <li><a href="https://shaunfong.com/aboutme/">我是谁</a></li>
                    <li><a>未曾停下的脚步</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>