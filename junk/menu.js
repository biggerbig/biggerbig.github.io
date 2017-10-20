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
            $("#header_m").css("top", "-40px");
        } else {
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

$(function () {
    $('.rateit').on('click', function () {
        var track_clip = $(this).attr('data-clip');
        var track_dope = $(this).attr('data-dope');
        console.log(track_dope)
        if ($(this).hasClass('fill')) {
            $(this).removeClass('fill');
            $(this).children("a").html(function (i, val) {
                return val * 1 - 1
            });
        } else {
            $(this).addClass('fill');
            if ($(this).hasClass('dope_btn')) {
                $('.dope_alert').children('p').html(track_dope);
                $('.dope_alert').attr('style', 'display:normal;');
                setTimeout(function () {
                    $(".dope_alert").attr('style', 'display:none;');
                }, 2000);
            } else {
                $('.dope_alert').children('p').html(track_clip);
                $('.dope_alert').attr('style', 'display:normal;');
                setTimeout(function () {
                    $(".dope_alert").attr('style', 'display:none;');
                }, 2000);
            }

            $(this).children("a").html(function (i, val) {
                return val * 1 + 1
            });
        }
    });
});