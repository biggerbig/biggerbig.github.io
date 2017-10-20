$(document).ready(function () {
    $('.profile_btn').click(function (event) {
        event.stopPropagation();
        $('.toggle_menu_h').addClass('open');
        $('.user_menu_btn').addClass('open');
    });

    $(document).click(function () {
        $('.toggle_menu_h').removeClass('open');
        $('.user_menu_btn').removeClass('open');
    });
    
    
    $('.search_btn').click(function (event) {
        event.stopPropagation();
        $('.search_input_wrap').fadeIn(200);
        $('.search_input').focus();
    });

    $(document).click(function () {
        $('.search_input_wrap').fadeOut(200);
    });
}); 