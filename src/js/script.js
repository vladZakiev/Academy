$(document).ready(function(){
    $('.classes_carousel_items').slick({
        lazyLoad: 'ondemand',
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow:'<span class="prev-btn slider_btn"><i class="fas fa-chevron-right"></i></span>',
        nextArrow:'<span class="next-btn slider_btn"><i class="fas fa-chevron-left"></i></span>'
    });
});