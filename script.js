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
