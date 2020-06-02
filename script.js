jQuery(document).ready(function ($) {
    $(window).scroll(function () {
        /*设置goTop按钮的自动消失与出现*/
        var scroHei = $(window).scrollTop(); //滚动的高度
        if (scroHei > 400) {
            $("#goTop").slideDown(300, function(){});
        } else {
            // slideUp() function will change the height into 0, so button will disappear.
            $("#goTop").slideUp(300, function(){});
        }
    });

    /*点击返回顶部*/
    $("#goTop").click(function () {
        $("body,html").animate(
            {
                scrollTop: 0,
            },
            300
        );
    });
});

jQuery(document).ready(function($) {
    // get the pull-down target
    var pdlist = $('#header-navigator>ul>li');

    // add action to mouseenter
    pdlist.mouseenter(function(){
        $(this).children('ul').stop().slideDown(300);
    });

    // add action to mouseleave
    pdlist.mouseleave(function(){
        $(this).children('ul').stop().slideUp(600);
    });
});
