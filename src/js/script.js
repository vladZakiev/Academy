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
        //verticalSwiping: true,
        lazyLoad: 'ondemand',
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows : false,
        //asNavFor: '.testimonials_avatars'
    });
});

$(document).ready(function(){
    $('.testimonials_avatars').slick({
        vertical: true,
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '40px',
        arrows : false,
        asNavFor: '.testimonials_slider',
        focusOnSelect: true
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


let regForm = document.querySelector('#reg');
regForm.addEventListener('submit',function(e){
    e.preventDefault();
    let data = new FormData(this),
        newUser = {
            'First-name:' : data.get('first-name'),
            'Last name:' : data.get('last-name'),
            'Email:' : data.get('email'),
            'Phone number:' : data.get('number')
        }
    console.log(newUser);
})

let trialForm = document.querySelector('#trial-form');
trialForm.addEventListener('submit',function(e){
    e.preventDefault();
    let data = new FormData(this),
        newTrial = {
            'Name:' : data.get('name'),
            'Email:' : data.get('email'),
            'Phone number:' : data.get('number'),
            'Option:' : data.get('option')
        }
    console.log(newTrial);
})
let subForm = document.querySelector('#sub-form');
subForm.addEventListener('submit',function(e){
    e.preventDefault();
    let data = new FormData(this),
        subscription = {
            'Email:' : data.get('email'),
        }
    console.log(subscription);
})

// let a = document.querySelectorAll('.testimonials_avatars .testimonials_avatars_image .testimonials_avatars_image_img');
// for (let i = 0, length = a.length; i < length; i++){
//     a[i].onclick = function(){
//         let b = document.querySelector('.testimonials_avatars .testimonials_avatars_image.active');
//         if (b) b.classList.remove('active');
//         this.parentNode.classList.add('active');
//         console.log(b)
//     }
// }


var header = document.querySelector(".testimonials_avatars");
var btns = header.querySelectorAll(".testimonials_avatars_image");
console.log(btns)
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.querySelector(".active");
  current[0].className = current[0].className.remove(" active");
  this.className += " active";
  });
}