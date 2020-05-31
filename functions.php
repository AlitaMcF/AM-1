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

add_action( 'wp_enqueue_scripts', 'add_my_script' );
function add_my_script() {
    wp_enqueue_script(
        'my_script', // name your script so that you can attach other scripts and de-register, etc.
        get_template_directory_uri() . '/script.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}
