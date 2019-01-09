// LNB 카테고리 메뉴 토글
// var cateEle = document.querySelector('.all_cate')

// cateEle.addEventListener('mouseover', function(){
//     cateEle.querySelector('.all_cate_wrap').style.display = 'block'
// });

// cateEle.addEventListener('mouseout', function(){
//     cateEle.querySelector('.all_cate_wrap').style.display = 'none'
// });

// 메인 슬라이드
var topCarousel = $(".top_carousel");
topCarousel.owlCarousel({
    items: 1,
    center: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplaySpeed: 2000,
    loop: true,
    dotsContainer: '.dots'
});
$(".prev").click(function () {
    topCarousel.trigger('prev.owl.carousel');
});
$(".next").click(function () {
    topCarousel.trigger('next.owl.carousel');
});



//bx1 슬라이드
var bx1Carousel = $(".main_bx_slide1");
bx1Carousel.owlCarousel({
    items: 1,
    center: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplaySpeed: 1000,
    loop: true,
    dotsContainer: '.bx1dots'
});
$(".bx1_prev").click(function () {
    bx1Carousel.trigger('prev.owl.carousel');
});
$(".bx1_next").click(function () {
    bx1Carousel.trigger('next.owl.carousel');
});

//bx2 슬라이드
var bx2Carousel = $(".main_bx_slide2");
bx2Carousel.owlCarousel({
    items: 1,
    center: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplaySpeed: 1000,
    loop: true,
    dotsContainer: '.bx2dots'
});
$(".bx2_prev").click(function () {
    bx2Carousel.trigger('prev.owl.carousel');
});
$(".bx2_next").click(function () {
    bx2Carousel.trigger('next.owl.carousel');
});

//direct 슬라이드
var d3dCarousel = $(".direct_slide");
d3dCarousel.owlCarousel({
    loop: true,
    autoWidth: true,
    items: 1,
    center: true,
    autoplay: false,
    dotsContainer: '.d3dcopy',
    margin: -70
});
$(".d3dprev").click(function () {
    d3dCarousel.trigger('prev.owl.carousel');
});
$(".d3dnext").click(function () {
    d3dCarousel.trigger('next.owl.carousel');
});


//best 슬라이드
var bestcarousel = $(".best_carousel_slide");
bestcarousel.owlCarousel({
    items: 3,
    center: false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplaySpeed: 1000,
    loop: true,
    dots: false,
    margin: 75,
    slideBy: 3
});
$(".bstprev").click(function () {
    bestcarousel.trigger('prev.owl.carousel');
});
$(".bstnext").click(function () {
    bestcarousel.trigger('next.owl.carousel');
});

//best 슬라이드
var rltdcarousel = $(".related_slide");
rltdcarousel.owlCarousel({
    items: 6,
    center: false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplaySpeed: 1000,
    loop: true,
    dots: false,
    margin: 75,
});
$(".rltd_prev").click(function () {
    rltdcarousel.trigger('prev.owl.carousel');
});
$(".rltd_next").click(function () {
    rltdcarousel.trigger('next.owl.carousel');
});


// 메인 화면 오아시스 인기상품 탭
$('.main_cate_tab>ul>li').click(function () {
    var tabname = $(this).attr('data-tab');
    $('.main_cate_tab>ul>li').removeClass('selected');
    $('.tab_list').removeClass('selected');
    $(this).addClass('selected')
    $('.cate_tab' + tabname + '_list').addClass('selected');
})

// 고객센터 이용안내 탭
$('.itrt_tab>li').click(function () {
    var tabname2 = $(this).attr('id');
    $('.itrt_tab>li').removeClass('selected');
    $('.help_tab_con_block').removeClass('selected');
    $(this).addClass('selected')
    $('#' + tabname2 + '_con').addClass('selected');
})

// 상세페이지 이용안내 탭
$('.detail_tab>ul>li').click(function () {
    event.preventDefault();
    var detailtab = $(this).attr('tab-data');
    $('.detail_tab>ul>li').removeClass('selected');
    $('.detail_sep').removeClass('open');
    $(this).addClass('selected')
    $('#' + detailtab).addClass('open');
    var scrollto = $(this).children('a');
    $('html, body').animate({
        scrollTop: $(scrollto, 'href').offset().top
    }, 500);
})

// 우측 플로팅 툴 스크롤 이벤트
$(window).scroll(function () {
    if ($(window).scrollTop() > 614) {
        $('.float_banner').css('position', 'fixed').css('top', '10px');
    }else {
        $('.float_banner').css('position', 'absolute').css('top', '624px');
    }
});



// 레이어 팝업
$(".link_location").click(function () {
    event.preventDefault();
    $('.page_cover,.deliver_pop').fadeIn(200);
});

$(".link_inquire").click(function () {
    event.preventDefault();
    $('.page_cover,.inquire_pop').fadeIn(200);
});

$('.close_pop').click(function() {
    $('.page_cover,.deliver_pop,.inquire_pop').fadeOut(200);
})