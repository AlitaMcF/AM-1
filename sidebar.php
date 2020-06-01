<div class="sidebar">
    <div id="sidebar-profile">
        <div id="sidebar-profile-bg"></div>
        <div id="sidebar-myinfo">
            <div id="sidebar-myinfo-img-div">
                <img id="sidebar-myinfo-img" src="https://shaunfong.com/wp-content/uploads/2020/05/1021590770586_.pic_.jpg" alt="<?php the_title(); ?>" />
            </div>
            <div id="sidebar-myinfo-blogtitle">
                <a href="<?php bloginfo('url'); ?>">
                    <!-- <?php bloginfo('name'); ?> -->
                    AlitaMcF
                </a>
            </div>
            <div id="sidebar-myinfo-subtitle">
                <p>
                    "
                    <!-- <?php bloginfo('description'); ?> -->
                    十年饮冰，热血难凉
                    "
                </p>
            </div>
            <div id="sidebar-myinfo-contact">
                <div id="sidebar-myinfo-contact-line1">
                    <a href="https://github.com/AlitaMcF">
                        <span class="sidebar-myinfo-contact-item">
                            Github
                        </span>
                    </a>
                    <span id="sidebar-myinfo-contact-divider"></span>
                    <a href="https://www.zhihu.com/people/tangmoon">
                        <span class="sidebar-myinfo-contact-item">
                            知乎
                        </span>
                    </a>
                </div>
            </div>
            <div id="sidebar-myinfo-bottom">
                <!--nothing-->
            </div>
        </div>
    </div>
    <div id="sidebar-big-things">
        <div style="padding:0 20px 0 20px">Make something big or awesome</div>
        <hr class="sidebar-big-things-hr" />
        <div class="sidebar-big-things-item">
            <a href="https://github.com/AlitaMcF/HEp-2" target="_blank">HEp-2 cell classification project</a>
        </div>
        <div class="sidebar-big-things-item">
            <a href="https://github.com/AlitaMcF/AM-1" target="_blank">WP theme: AM-1</a>
        </div>

    </div>
    <?php dynamic_sidebar('primaryWidget');//可以在管理页给sidebar动态添加小组件的地方 ?>
</div>