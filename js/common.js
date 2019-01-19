$(function () {
    var lastScrollTop = 0,
        delta = 15;
    $(window).scroll(function (event) {
        var st = $(this).scrollTop();
        if (Math.abs(lastScrollTop - st) <= delta)
            return;
        if ((st > lastScrollTop) && (lastScrollTop > 0)) {
            $("#header").css("top", "-50px");
            $(".picker_top").css("top", "0px");
            $(".menu_btn_m").css("top", "-50px");
            $('.page_tool').css("top", "-50px");
        } else {
            $("#header").css("top", "0px");
            $(".picker_top").css("top", "50px");
            $(".menu_btn_m").css("top", "0px");
            $(".page_tool").css("top", "0px");
        }
        lastScrollTop = st;
    });
});

$(function () {
    $(window).scroll(function () {
        var winTop = $(window).scrollTop();
        if (winTop >= 30) {
            $("#header").css("background-color", "#1a1a1a");
        } else {
            $("#header").css("background-color", "#242425");
        }
    });
});

$(".menu_btn_m").click(function () {
    if ($(".menu_btn_m").hasClass('open')){
        $(".menu_btn_m,.menu,body").removeClass("open");
        $(".page_cover").fadeOut(200);
        history.back();
    }else if ($(".menu_btn_m").hasClass('active')){
        history.back();
    }else {
        $(".menu_btn_m,.menu,body").addClass("open");
        $(".page_cover").fadeIn(200);
        window.location.hash = "#menu-open";
    }
});

$('.paper_layer_trigger').click(function(){
    $('.paper_layer_wrap').fadeIn(200);
    $(".layer_cover").fadeIn(200);
    window.location.hash = "#menu-open";
});

$('.qr_layer_trigger').click(function(){
    $('.qr_layer').fadeIn(200);
    $(".layer_cover").fadeIn(200);
    window.location.hash = "#menu-open";
});

window.onhashchange = function () {
    if (location.hash != "#menu-open") {
        $(".menu_btn_m,.menu,body,.filter_layer").removeClass("open");
        $(".page_cover,.prize_detail,.layer_cover,.paper_layer_wrap,.qr_layer").fadeOut(200);
    }
};