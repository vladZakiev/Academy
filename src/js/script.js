$(document).ready(function () {
    //classes carousel
    $('.classes_carousel_items').slick({
        lazyLoad: 'ondemand',
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<span class="prev-btn slider_btn"><i class="fas fa-chevron-right"></i></span>',
        nextArrow: '<span class="next-btn slider_btn"><i class="fas fa-chevron-left"></i></span>',
        accessibility: false,
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 768,
            settings: {
                mobileFirst: true,
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        }
    ]
    });
    //events carousel
    $('.events_carousel_items').slick({
        lazyLoad: 'ondemand',
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<span class="prev-btn slider_btn"><i class="fas fa-chevron-right"></i></span>',
        nextArrow: '<span class="next-btn slider_btn"><i class="fas fa-chevron-left"></i></span>',
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 768,
            settings: {
                mobileFirst: true,
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        }
    ]
    });
    //testimonials slider Reviews
    $('.testimonials_slider').slick({
        vertical: true,
        lazyLoad: 'ondemand',
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
    });
    //testimonials slider navigation Avatars
    $('.testimonials_avatars').slick({
        vertical: true,
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '40px',
        arrows: false,
        asNavFor: '.testimonials_slider',
        focusOnSelect: true
    });
    //blog carousel
    $('.blog_carousel').slick({
        lazyLoad: 'ondemand',
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: null,
        nextArrow: '<span class="blog_slider_btn"><i class="fas fa-chevron-right"></i></span>',
    });
});
//testimonials navigation active slide
let a = document.querySelectorAll('.testimonials_avatars .testimonials_avatars_image .testimonials_avatars_image_img');
for (let i = 0, length = a.length; i < length; i++) {
    a[i].onclick = function () {
        let b = document.querySelector('.testimonials_avatars .testimonials_avatars_image.active');
        if (b) b.classList.remove('active');
        this.parentNode.classList.add('active');
        console.log(b)
    }
}
//open and close registration popup
const openPopUp = document.querySelector('.open_reg_popup');
const closePopUp = document.querySelector('.close_reg_popup');
const regPopup = document.querySelector('.popap_reg');
openPopUp.addEventListener('click', function (e) {
    regPopup.classList.add('active');
})
closePopUp.addEventListener('click', () => {
    regPopup.classList.remove('active');
})
//open and close login popup
const openLoginPopUp = document.querySelector('.open_login_popup');
const closeLoginPopUp = document.querySelector('.close_login_popup');
const loginPopup = document.querySelector('.popap_login');
openLoginPopUp.addEventListener('click', function (e) {
    loginPopup.classList.add('active');
})
closeLoginPopUp.addEventListener('click', () => {
    loginPopup.classList.remove('active');
})
//open and close video popup
const openVideoPopUp = document.querySelector('.open_video_popup');
const closeVideoPopUp = document.querySelector('.close_video_popup');
const VideoPopup = document.querySelector('.media_popup');
openVideoPopUp.addEventListener('click', function (e) {
    VideoPopup.classList.add('active');
})
closeVideoPopUp.addEventListener('click', () => {
    VideoPopup.classList.remove('active');
})
//registration info popup after sending form
let regForm = document.querySelector('#reg');
let infoPopup = document.querySelector('.info_popup');
regForm.addEventListener('submit', function (e) {
    e.preventDefault();
    let data = new FormData(this),
        newUser = {
            'First-name:': data.get('first-name'),
            'Last name:': data.get('last-name'),
            'Email:': data.get('email'),
            'Phone number:': data.get('number')
        }
    regPopup.classList.remove('active');
    infoPopup.classList.add('active');
    document.querySelector(".data_first_name").innerHTML = newUser["First-name:"];
    document.querySelector(".data_last_name").innerHTML = newUser["Last name:"];
    document.querySelector(".data_email").innerHTML = newUser["Email:"];
    document.querySelector(".data_phone_number").innerHTML = newUser["Phone number:"];
    if (newUser["First-name:"] === "") {
        document.querySelector(".data_error").innerHTML = "Error! Fill the first name!";
    }
    if (newUser["Last name:"] === "")
        document.querySelector(".data_error").innerHTML = "Error! Fill the last name!";
    else if (newUser["Email:"] === "")
        document.querySelector(".data_error").innerHTML = "Error! Fill Email!";
    else if (newUser["Phone number:"] === "")
        document.querySelector(".data_error").innerHTML = "Error! Fill the phone number!";
})
//closing Info popups
const closeInfoPopup = document.querySelector('.info_popup_close');
closeInfoPopup.addEventListener('click', () => {
    infoPopup.classList.remove('active');
})
//trial courses form Info popup after sending
let trialForm = document.querySelector('#trial-form');
trialForm.addEventListener('submit', function (e) {
    e.preventDefault();
    let data = new FormData(this),
        newTrial = {
            'Name:': data.get('name'),
            'Email:': data.get('email'),
            'Phone number:': data.get('number'),
            'Option:': data.get('option')
        }
    console.log(newTrial);
    infoPopup.classList.add('active');
    document.querySelector(".data_first_name").innerHTML = newTrial["Name:"];
    document.querySelector(".data_last_name").innerHTML = newTrial["Email:"];
    document.querySelector(".data_email").innerHTML = newTrial["Phone number:"];
    document.querySelector(".data_phone_number").innerHTML = newTrial["Option:"];
    if (newTrial["Name:"] === "") {
        document.querySelector(".data_error").innerHTML = "Error! Fill your name!";
    }
    if (newTrial["Email:"] === "")
        document.querySelector(".data_error").innerHTML = "Error! Fill the Email!";
    else if (newTrial["Phone number:"] === "")
        document.querySelector(".data_error").innerHTML = "Error! Fill the Phone number";
    else if (newUser["Option:"] === "")
        document.querySelector(".data_error").innerHTML = "Error! Choose the course!";
})
let subForm = document.querySelector('#sub-form');
subForm.addEventListener('submit', function (e) {
    e.preventDefault();
    let data = new FormData(this),
        subscription = {
            'Email:': data.get('email'),
        }
    console.log(subscription);
})