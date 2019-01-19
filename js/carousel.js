var owlmain = $(".index_carousel");


owlmain.owlCarousel({
    items: 1,
    center: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplaySpeed: 2000,
    loop: true,
    nav: true,
    animateOut: 'fadeOut',
    dotsContainer: '.dots_wrap'
});

$(".prev").click(function () {
    owlmain.trigger('prev.owl.carousel');
});

$(".next").click(function () {
    owlmain.trigger('next.owl.carousel');
}); 
