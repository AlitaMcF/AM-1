jQuery(document).ready(function ($) {
    $(window).scroll(function () {
        var scroHei = $(window).scrollTop(); //滚动的高度
        if (scroHei > 400) {
            // $("#goTop").fadeIn();
            $("#goTop").slideDown(300, function(){});
        } else {
            // $("#goTop").fadeOut();
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
