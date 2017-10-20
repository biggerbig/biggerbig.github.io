$(".menu_btn_m").click(function () {
    $(".menu_m,body,.page_wrap").addClass("open");
    window.location.hash = "#menu-open";
});

window.onhashchange = function () {
    if (location.hash != "#menu-open") {
        $(".menu_m,body,.page_wrap").removeClass("open");
    }
};


$(function () {
    var lastScrollTop = 0,
        delta = 15;
    $(window).scroll(function (event) {
        var st = $(this).scrollTop();
        if (Math.abs(lastScrollTop - st) <= delta)
            return;
        if ((st > lastScrollTop) && (lastScrollTop > 0)) {
            $("#header").css("top", "-60px");
            $("#header_m").css("top", "-40px");
        } else {
            $("#header").css("top", "0px");
            $("#header_m").css("top", "0px");
        }
        lastScrollTop = st;
    });
});

$(function () {
    $(window).scroll(function () {
        var winTop = $(window).scrollTop();
        if (winTop >= 30) {
            $("#header").css("background-color", "#1a1a1a");
            $("#header_m").css("background-color", "#1a1a1a");
        } else {
            $("#header").css("background-color", "#242425");
            $("#header_m").css("background-color", "#242425");
        }
    });
});