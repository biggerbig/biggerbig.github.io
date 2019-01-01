
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
    loop:true,
    autoWidth:true,
    items:1,
    center:true,
	autoplay:false,
    dotsContainer: '.d3dcopy',
    margin:-70
});
$(".d3dprev").click(function () {
    d3dCarousel.trigger('prev.owl.carousel');
});
$(".d3dnext").click(function () {
    d3dCarousel.trigger('next.owl.carousel');
});


// 메인 화면 오아시스 인기상품 탭
$('.main_cate_tab>ul>li').click(function(){
    var tabname = $(this).attr('data-tab');
    $('.main_cate_tab>ul>li').removeClass('selected');
    $('.tab_list').removeClass('selected');
    $(this).addClass('selected')
    $('.cate_tab' +tabname + '_list').addClass('selected')
})