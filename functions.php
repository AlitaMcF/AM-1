<?php
if (function_exists('register_sidebar')) {
    register_sidebar();
}

// load style.css to our page.
function skinlab_enqueue_general_style()
{
    wp_deregister_style('skinlab-general-style');
    wp_register_style('skinlab-general-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('skinlab-general-style');
}
add_action('wp_enqueue_scripts', 'skinlab_enqueue_general_style');

/* 
Disable the Admin Bar. Or it will occupy 32px-heigh-space at the top
of our page and make our page look a little weird.
因为wp默认在登陆状态下会在页面顶部添加一个admin状态栏
*/
add_filter('show_admin_bar', '__return_false');

add_action('wp_enqueue_scripts', 'add_my_script');
function add_my_script()
{
    wp_enqueue_script(
        'my_script', // name your script so that you can attach other scripts and de-register, etc.
        get_template_directory_uri() . '/script.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}

/* 
register a widget area in sidebar.php 
*/
add_action('widgets_init', 'my_register_sidebar');
function my_register_sidebar()
{
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primaryWidget',
            'name'          => __('Primary Sidebar'),
            'description'   => __('主页sidebar下方添加组件'),
            'before_widget' => '<div id="%1$s" class="widget %2$s" style="padding: 20px 30px; font-size: 18px">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title" style="text-align: center">',
            'after_title'   => '</h3><hr style="width:100%; size:1px; color:#111;"/>',
        )
    );
}

// Contents table
add_filter('the_content', 'my_contents_table');
function my_contents_table($content)
{
    $matches = array();
    $ul_li = '';
    $r = '/<h([2-6]).*?\>(.*?)<\/h[2-6]>/is'; // for SEO-friendly, contents table only identify <h2> ~ <h6>
    if (is_single() && preg_match_all($r, $content, $matches)) {
        $preValue = 2;
        $hStack = new SplStack();
        foreach ($matches[1] as $key => $value) {
            $title = trim(strip_tags($matches[2][$key]));
            $content = str_replace($matches[0][$key], '<h' . $value . ' id="title-' . $key . '">' . $title . '</h2>', $content);

            // The following part implements the hierarchy of contents table
            if(!$hStack->isEmpty()){
                if($hStack->top() == $value){
                    $ul_li .= '<li><a href="#title-' . $key . '" title="' . $title . '">' . $title . "</a></li>\n";
                } elseif($hStack->top() < $value){
                    $ul_li .= "<ul>\n" . '<li><a href="#title-' . $key . '" title="' . $title . '">' . $title . "</a></li>\n";
                    $hStack->push($value);
                } elseif($hStack->top() > $value){
                    while($hStack->top() > $value){
                        $ul_li .= "</ul>\n";
                        $hStack->pop();
                    }
                    $ul_li .= '<li><a href="#title-' . $key . '" title="' . $title . '">' . $title . "</a></li>\n";
                }
            } else{
                $ul_li .= '<li><a href="#title-' . $key . '" title="' . $title . '">' . $title . "</a></li>\n";
                $hStack->push($value);
            }
        }
        $content = "\n<div id=\"article-index\">
            <div id=\"article-index-title\"><strong>Contents table</strong></div>
            <hr id=\"article-index-hr\" />
            <div id=\"article-index-table\"><ul id=\"index-ul\">\n" . $ul_li . "</ul></div>
            </div>\n" . $content;
    }
    return $content;
}
