// $('.top_carousel').owlCarousel({
//     margin:15,
//     loop:true,
//     autoWidth:true,
//     items:10,
//     center:true,
// 	autoplay:true,
//     autoplayTimeout:3000,
//     autoplayHoverPause:true,
//     URLhashListener:false
// });
window.onload = function() {
    $('.top_carousel').owlCarousel({
        margin:15,
        loop:true,
        autoWidth:true,
        items:10,
        center:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        URLhashListener:false
    }); 
  };

  $(document).on('click',function () {
	$('.top_carousel').owlCarousel({
        margin:15,
        loop:true,
        autoWidth:true,
        items:10,
        center:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        URLhashListener:false
    });
});