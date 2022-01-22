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

$(document).ready(function(){
    $('.events_carousel_items').slick({
        lazyLoad: 'ondemand',
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow:'<span class="prev-btn slider_btn"><i class="fas fa-chevron-right"></i></span>',
        nextArrow:'<span class="next-btn slider_btn"><i class="fas fa-chevron-left"></i></span>'
    });
});

$(document).ready(function(){
    $('.testimonials_slider').slick({
        vertical: true,
        verticalSwiping: true,
        lazyLoad: 'ondemand',
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows : false,
    });
});

$(document).ready(function(){
    $('.blog_carousel').slick({
        lazyLoad: 'ondemand',
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: null,
        nextArrow: '<span class="blog_slider_btn"><i class="fas fa-chevron-right"></i></span>',
    });
});

const openPopUp = document.querySelector('.open_reg_popup');
const closePopUp = document.querySelector('.close_reg_popup');
const regPopup = document.querySelector('.popap_reg');

openPopUp.addEventListener('click', function(e){
    regPopup.classList.add('active');
})
closePopUp.addEventListener('click', () => {
    regPopup.classList.remove('active');
})

const openLoginPopUp = document.querySelector('.open_login_popup');
const closeLoginPopUp = document.querySelector('.close_login_popup');
const loginPopup = document.querySelector('.popap_login');

openLoginPopUp.addEventListener('click', function(e){
    loginPopup.classList.add('active');
})
closeLoginPopUp.addEventListener('click', () => {
    loginPopup.classList.remove('active');
})

const openVideoPopUp = document.querySelector('.open_video_popup');
const closeVideoPopUp = document.querySelector('.close_video_popup');
const VideoPopup = document.querySelector('.media_popup');

openVideoPopUp.addEventListener('click', function(e){
    VideoPopup.classList.add('active');
})
closeVideoPopUp.addEventListener('click', () => {
    VideoPopup.classList.remove('active');
})