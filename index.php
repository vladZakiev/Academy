<?php $db_connect = new mysqli('localhost' , 'root' , 'root' , 'academy');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/slick.css">
    <link rel="stylesheet" href="src/css/icons.css">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>BeTop</title>
</head>

<body>
    <div class="info_popup">
        <div class="info_popup_wrapper">
            <div class="info_popup_wrapper_inner">
                <div class="info_popup_wrapper_inner_data">
                    <p class="data_first_name"></p>
                    <p class="data_last_name"></p>
                    <p class="data_email"></p>
                    <p class="data_phone_number"></p>
                    <p class="data_error"></p>
                </div>
                <div class="info_popup_exit">
                    <span class="info_popup_exit_act info_popup_close">X</span>
                </div>
            </div>
        </div>
        
    </div>
    <div class="popap_reg">
        <div class="container">
            <div class="popap_reg_wrapper">
                <div class="popap_reg_wrapper_inner">
                    <h3 class="popap_reg_title">Registration</h3>
                    <p class="popap_reg_subtitle">Register on our website</p>
                    <form class="popap_reg_form" action="#" id="reg">
                        <div class="popap_reg_form_fields">
                            <input name="first-name" type="text" class="popap_reg_first_name reg_input" placeholder="First name">
                            <input name="last-name" type="text" class="popap_reg_last_name reg_input" placeholder="Last name">
                            <input name="email" type="email" class="popap_reg_email reg_input" placeholder="Your Email">
                            <input name="password" type="password" class="popap_reg_phone reg_input" placeholder="Password">
                        </div>
                        <div class="popap_reg_form_btn">
                            <button class="popap_reg_form_btn_button" type="submit">Register</button>
                        </div>
                    </form>
                    <div class="popap_reg_exit">
                        <span class="popap_reg_exit_act close_reg_popup">X</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popap_login">
        <div class="container">
            <div class="popap_login_wrapper">
                <div class="popap_login_wrapper_inner">
                    <h3 class="popap_login_title">Sign In</h3>
                    <p class="popap_login_subtitle">Sign In on our website</p>
                    <form class="popap_login_form" action="#">
                        <div class="popap_login_form_fields">
                            <input type="email" class="popap_login_email reg_input" placeholder="Your Email">
                            <input type="password" class="popap_login_password reg_input" placeholder="Your Password">
                        </div>
                        <div class="popap_login_form_btn">
                            <button class="popap_login_form_btn_button" type="submit">Sign In</button>
                        </div>
                    </form>
                    <div class="popap_login_exit">
                        <span class="popap_login_exit_act close_login_popup">X</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="media_popup close_video_popup">
        <div class="media_popup_wrapper">
            <iframe class="media_popup_video" width="560" height="315" src="https://www.youtube.com/embed/ESVu7Z0nx-k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="media_popup_exit">
                <span class="media_popup_exit_act close_login_popup">X</span>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div class="header_wrapper">
                <div class="header_logo">
                    <img class="header_logo_img" src="src/img/logo.png" alt="betop_logo">
                </div>
                <div class="header_menu">
                    <ul class="header_menu_items">
                        <li class="header_menu_item"><a href="#">Home</a></li>
                        <li class="header_menu_item"><a href="#">Services</a></li>
                        <li class="header_menu_item"><a href="#">Portfolio</a></li>
                        <li class="header_menu_item"><a href="#">Pages</a></li>
                        <li class="header_menu_item"><a href="#">Shop</a></li>
                        <li class="header_menu_item"><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="header_inner_nav">
                    <div class="header_cart_button">
                        <button class="cart_button" type="button">
                            <span class="cart_button_icon"><i class="fas fa-shopping-basket"></i>
                                <span class="counter"><span class="count">3</span></span>
                            </span>
                            <span class="cart_button_text">Cart</span>
                        </button>
                    </div>
                    <div class="header_auth">
                        <button class="header_auth_button"><span class="header_auth_button_text">Sign up</span></button>
                        <div  class="auth_select" name="Login" id="login_register">
                            <a href="#" class="select_option open_login_popup" value="login">Login</a>
                            <a href="#" class="select_option open_reg_popup" value="register">Register</a>
                        </div>
                    </div>
                    <div class="header_hamburger_button"><a href="#"></a>
                        <div class="header_hamburger_button_wrapper">
                            <span class="header_hamburger_button_line"></span>
                            <span class="header_hamburger_button_line"></span>
                            <span class="header_hamburger_button_line"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="container">
            <div class="main_wrapper">
                <div class="main_content">
                    <div class="main_title">
                        <h1 class="main_title_text">Darryl Gover <span class="main_title_text-2">MMA Trainer</span></h1>
                    </div>
                    <div class="main_subtitle">
                        <h4 class="main_subtitle_text">Self defense, self confidence, discipline and emotional self
                            control</h4>
                    </div>
                    <div class="main_call_to_actions">
                        <div class="main_call_to_action">
                            <div class="main_call_to_action_title">Featured Classes</div>
                        </div>
                        <div class="main_call_to_action">
                            <div class="main_call_to_action_title">Book an Appointment</div>
                        </div>
                    </div>
                </div>
                <div class="main_shape">
                    <img src="src/img/shape.svg" alt="Shape">
                </div>
            </div>

        </div>

        <div class="classes">
            <div class="container">
                <div class="classes_wrapper">
                    <div class="classes_info">
                        <h4 class="classes_info_title">Our Classes</h4>
                        <div class="classes_info_subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                            do</div>
                    </div>
                    <div class="classes_carousel">
                        <div class="classes_carousel_wrapper">
                            <span class="prev-btn slider_btn" style="display: none;"><i
                                    class="fas fa-chevron-right"></i></span>
                            <span class="next-btn slider_btn" style="display: none;"><i
                                    class="fas fa-chevron-left"></i></span>
                            <div class="classes_carousel_items">
                                <div class="classes_carousel_item">
                                    <div class="classes_carousel_item_image">
                                        <img src="src/img/slide.jpg" alt="slide" class="classes_carousel_item_image-img">
                                    </div>
                                    <div class="classes_carousel_item_info">
                                        <div class="classes_carousel_item_price">
                                            <div class="classes_carousel_item_price_num">
                                                $12
                                            </div>
                                        </div>
                                        <div class="classes_carousel_item_name">
                                            <div class="classes_carousel_item_name_text">Sunday Boxing Classes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="classes_carousel_item">
                                    <div class="classes_carousel_item_image">
                                        <img src="src/img/slide.jpg" alt="slide" class="classes_carousel_item_image-img">
                                    </div>
                                    <div class="classes_carousel_item_info">
                                        <div class="classes_carousel_item_price">
                                            <div class="classes_carousel_item_price_num">
                                                $12
                                            </div>
                                        </div>
                                        <div class="classes_carousel_item_name">
                                            <div class="classes_carousel_item_name_text">Kickboxing classes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="classes_carousel_item">
                                    <div class="classes_carousel_item_image">
                                        <img src="src/img/slide.jpg" alt="slide" class="classes_carousel_item_image-img">
                                    </div>
                                    <div class="classes_carousel_item_info">
                                        <div class="classes_carousel_item_price">
                                            <div class="classes_carousel_item_price_num">
                                                $12
                                            </div>
                                        </div>
                                        <div class="classes_carousel_item_name">
                                            <div class="classes_carousel_item_name_text">Classic Boxing</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="classes_carousel_item">
                                    <div class="classes_carousel_item_image">
                                        <img src="src/img/slide.jpg" alt="slide" class="classes_carousel_item_image-img">
                                    </div>
                                    <div class="classes_carousel_item_info">
                                        <div class="classes_carousel_item_price">
                                            <div class="classes_carousel_item_price_num">
                                                $12
                                            </div>
                                        </div>
                                        <div class="classes_carousel_item_name">
                                            <div class="classes_carousel_item_name_text">Tai Boxing</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="icon_boxes">
            <div class="container">
                <div class="icon_boxes_wrapper">
                    <div class="icon_box">
                        <div class="icon_box_icon"><img src="src/icons/clock_icon.png" alt="clock"></div>
                        <div class="icon_box_info">
                            <h4 class="icon_box_info_heading">Working hours</h4>
                            <div class="icon_box_info_text">Everyday 5 AM to 9 PM</div>
                        </div>
                    </div>
                    <div class="icon_box">
                        <div class="icon_box_icon"><img src="src/icons/phone_icon.png" alt="phone"></div>
                        <div class="icon_box_info">
                            <h4 class="icon_box_info_heading">Call for any query</h4>
                            <div class="icon_box_info_text">9996 - 847-578 5476 - 654-876</div>
                        </div>
                    </div>
                    <div class="icon_box">
                        <div class="icon_box_icon"><img src="src/icons/address_icon.png" alt="adress"></div>
                        <div class="icon_box_info">
                            <h4 class="icon_box_info_heading">Adress</h4>
                            <div class="icon_box_info_text">9358 Cottage St. Fairburn, GA 30213 </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about_instructor">
            <div class="container">
                <div class="about_instructor_wrapper">
                    <div class="about_instructor_info">
                        <h3 class="about_instructor_info_heading">aBOUT dARRYL gOVER</h3>
                        <div class="about_instructor_info_subheading">Self defense, self confidence,
                            discipline and emotional self control</div>
                        <div class="about_instructor_info_descr">
                            <p class="text_paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do
                                eiusmod tempoar incidid unt ut labore et dolore magna aliqua. cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat.</p>
                            <p class="text_paragraph">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                aut fugit, sed quia consequuntur</p>
                        </div>
                        <div class="about_instructor_info_more">
                            <div class="about_instructor_info_more_sign"><img src="src/img/sign.png" alt="sign"></div>
                            <div class="about_instructor_info_more_socials">
                                <a href="#">
                                    <div class="about_instructor_info_more_socials_facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="about_instructor_info_more_socials_twitter">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="about_instructor_info_more_socials_instagram">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="about_instructor_info_media">
                        <div class="about_instructor_info_media_banner">
                            <img class="about_instructor_info_media_banner_img" src="src/img/instrctor.jpg"
                                alt="instructor">
                        </div>
                        <div class="about_instructor_info_media_banner_play_btn open_video_popup">
                            <button class="play_btn" type="button">
                                <span class="play_treangle"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="trial">
            <div class="container">
                <div class="trial_wrapper">
                    <div class="trial_shape">
                        <img src="src/img/shape_2.svg" alt="shape" class="trail_shape_img">
                    </div>
                    <div class="trial_content">
                        <h3 class="trial_heading">30 DAY FREE TRIAL </h3>
                        <div class="trial_subheading">Sign up for your free 3-day trial today! All of you are welcome
                        </div>
                        <form action="#" class="trial_form" id="trial-form">
                            <div class="trial_form_name_input">
                                <input name="name" class="input_style" type="text" id="name" name="name" placeholder="Your name">
                            </div>
                            <div class="trial_form_details">
                                <input name="email" class="input_style" type="email" id="email" name="email"
                                    placeholder="Email address">
                                <input name="number" class="input_style" type="number" id="phone" name="phone"
                                    placeholder="Phone Number">
                            </div>
                            <div class="trial_form_options">
                                <h4 class="trial_form_options_title">The courses you prefer</h4>
                                <div class="trial_form_options_option">
                                    <input type="radio" id="boxing" name="option" value="boxing">
                                    <label class="option_label" for="boxing"><img class="option_icon"
                                            src="src/icons/icon_boxing.png" alt="boxing">Boxing</label>
                                    <input type="radio" id="karate" name="option" value="karate">
                                    <label class="option_label" for="karate"><img class="option_icon"
                                            src="src/icons/icon_karate.png" alt="karate">Karate</label>
                                    <input type="radio" id="cross-fintess" name="option" value="cross-fitness">
                                    <label class="option_label" for="cross-fintess"><img class="option_icon"
                                            src="src/icons/icon_fitness.png" alt="others">Cross fitness</label>
                                    <input type="radio" id="others" name="option" value="others">
                                    <label class="option_label" for="others"><img class="option_icon"
                                            src="src/icons/icon_karate.png" alt="others">Others</label>
                                </div>
                            </div>
                            <div class="trial_form_submit">
                                <button class="trial_form_submit_btn" type="submit">Start your free trial</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="events">
            <div class="container">
                <div class="events_wrapper">
                    <div class="events_info">
                        <h4 class="events_info_title">Our Classes</h4>
                        <div class="events_info_subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                            do</div>
                    </div>
                    <div class="events_carousel">
                        <div class="events_carousel_wrapper">
                            <span class="prev-btn slider_btn" style="display: none;"><i
                                    class="fas fa-chevron-right"></i></span>
                            <span class="next-btn slider_btn" style="display: none;"><i
                                    class="fas fa-chevron-left"></i></span>
                            <div class="events_carousel_items">
                                <div class="events_carousel_item">
                                    <div class="events_carousel_item_image">
                                        <img src="src/img/slide.jpg" alt="slide" class="classes_carousel_item_image-img">
                                    </div>
                                    <div class="events_carousel_item_info">
                                        <div class="events_carousel_item_date">
                                            <div class="events_carousel_item_date_num">
                                                12
                                            </div>
                                            <div class="events_carousel_item_date_month">
                                                Aug
                                            </div>
                                        </div>
                                        <div class="events_carousel_item_name">
                                            <div class="events_carousel_item_name_text">Kids kickboxing tournament
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="events_carousel_item">
                                    <div class="events_carousel_item_image">
                                        <img src="src/img/slide.jpg" alt="slide" class="classes_carousel_item_image-img">
                                    </div>
                                    <div class="events_carousel_item_info">
                                        <div class="events_carousel_item_date">
                                            <div class="events_carousel_item_date_num">
                                                18
                                            </div>
                                            <div class="events_carousel_item_date_month">
                                                Aug
                                            </div>
                                        </div>
                                        <div class="events_carousel_item_name">
                                            <div class="events_carousel_item_name_text">Super Fight League</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="events_carousel_item">
                                    <div class="events_carousel_item_image">
                                        <img src="src/img/slide.jpg" alt="slide" class="classes_carousel_item_image-img">
                                    </div>
                                    <div class="events_carousel_item_info">
                                        <div class="events_carousel_item_date">
                                            <div class="events_carousel_item_date_num">
                                                02
                                            </div>
                                            <div class="events_carousel_item_date_month">
                                                Sept
                                            </div>
                                        </div>
                                        <div class="events_carousel_item_name">
                                            <div class="events_carousel_item_name_text">Ameteur MMA Championship</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="events_carousel_item">
                                    <div class="events_carousel_item_image">
                                        <img src="src/img/slide.jpg" alt="slide" class="classes_carousel_item_image-img">
                                    </div>
                                    <div class="events_carousel_item_info">
                                        <div class="events_carousel_item_date">
                                            <div class="events_carousel_item_date_num">
                                                07
                                            </div>
                                            <div class="events_carousel_item_date_month">
                                                Sept
                                            </div>
                                        </div>
                                        <div class="events_carousel_item_name">
                                            <div class="events_carousel_item_name_text">Tai Boxing Championship</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonials">
            <div class="container">
                <div class="testimonials_wrapper">
                    <div class="testimonials_avatars">
                        <div class="testimonials_avatars_image active">
                            <img src="src/img/testimonial.png" alt="testimonial" class="testimonials_avatars_image_img">
                        </div>
                        <div class="testimonials_avatars_image">
                            <img src="src/img/testimonial.png" alt="testimonial" class="testimonials_avatars_image_img">
                        </div>
                        <div class="testimonials_avatars_image">
                            <img src="src/img/testimonial.png" alt="testimonial" class="testimonials_avatars_image_img">
                        </div>
                    </div>
                    <div class="testimonials_content">
                        <h2 class="testimonials_heading">Customers Reviews</h2>
                        <div class="testimonials_slider">
                            <div class="testimonials_slider_slide">
                                <div class="testimonials_slider_slide_content">
                                    <p class="testimonials_slider_slide_review text_paragraph">Lorem ipsum dolor sit
                                        amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                                    <div class="testimonials_slider_slide_author">
                                        <h4 class="testimonials_slider_slide_author_name">John</h4>
                                        <div class="testimonials_slider_slide_author_city">Texas</div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonials_slider_slide">
                                <div class="testimonials_slider_slide_content">
                                    <p class="testimonials_slider_slide_review text_paragraph">Lorem ipsum dolor sit
                                        amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                                    <div class="testimonials_slider_slide_author">
                                        <h4 class="testimonials_slider_slide_author_name">Mary</h4>
                                        <div class="testimonials_slider_slide_author_city">New York</div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonials_slider_slide">
                                <div class="testimonials_slider_slide_content">
                                    <p class="testimonials_slider_slide_review text_paragraph">Lorem ipsum dolor sit
                                        amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                                    <div class="testimonials_slider_slide_author">
                                        <h4 class="testimonials_slider_slide_author_name">Jose</h4>
                                        <div class="testimonials_slider_slide_author_city">Los Angeles</div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonials_slider_slide">
                                <div class="testimonials_slider_slide_content">
                                    <p class="testimonials_slider_slide_review text_paragraph">Lorem ipsum dolor sit
                                        amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                                    <div class="testimonials_slider_slide_author">
                                        <h4 class="testimonials_slider_slide_author_name">Jessica</h4>
                                        <div class="testimonials_slider_slide_author_city">Antalanta</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog">
            <div class="container">
                <div class="blog_wrapper">
                    <h2 class="blog_heading">Blog Updates</h2>
                    <div class="blog_carousel">
                        <span class="blog_slider_btn" style="display: none;"><i class="fas fa-chevron-right"></i></span>
                        <div class="blog_carousel_item">
                            <div class="blog_carousel_item_card">
                                <img src="src/img/news.jpg" alt="news" class="blog_carousel_item_card_image">
                                <div class="blog_carousel_item_card_info">
                                    <div class="blog_carousel_item_card_info_date">10-Oct-2018</div>
                                    <h4 class="blog_carousel_item_card_info_title">Motivation mania</h4>
                                    <p class="blog_carousel_item_card_info_descr text_paragraph">Long established fact
                                        that a reade</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog_carousel_item">
                            <div class="blog_carousel_item_card">
                                <img src="src/img/news.jpg" alt="news" class="blog_carousel_item_card_image">
                                <div class="blog_carousel_item_card_info">
                                    <div class="blog_carousel_item_card_info_date">10-Oct-2018</div>
                                    <h4 class="blog_carousel_item_card_info_title">Motivation mania</h4>
                                    <p class="blog_carousel_item_card_info_descr text_paragraph">Long established fact
                                        that a reade</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog_carousel_item">
                            <div class="blog_carousel_item_card">
                                <img src="src/img/news.jpg" alt="news" class="blog_carousel_item_card_image">
                                <div class="blog_carousel_item_card_info">
                                    <div class="blog_carousel_item_card_info_date">10-Oct-2018</div>
                                    <h4 class="blog_carousel_item_card_info_title">Motivation mania</h4>
                                    <p class="blog_carousel_item_card_info_descr text_paragraph">Long established fact
                                        that a reade</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog_carousel_item">
                            <div class="blog_carousel_item_card">
                                <img src="src/img/news.jpg" alt="news" class="blog_carousel_item_card_image">
                                <div class="blog_carousel_item_card_info">
                                    <div class="blog_carousel_item_card_info_date">10-Oct-2018</div>
                                    <h4 class="blog_carousel_item_card_info_title">Motivation mania</h4>
                                    <p class="blog_carousel_item_card_info_descr text_paragraph">Long established fact
                                        that a reade</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="footer_wrapper">
                    <div class="footer_info">
                        <div class="footer_info_media">
                            <div class="footer_info_media_logo">
                                <img src="src/img/logo.png" alt="logo" class="footer_info_media_logo_img">
                            </div>
                            <div class="footer_info_media_title">Boxing trainer</div>
                            <div class="footer_info_media_socials">
                                <a href="#" class="footer_info_media_socials_facebook">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                                <a href="#" class="footer_info_media_socials_twitter">
                                    <i class="fab fa-twitter-square"></i>
                                </a>
                                <a href="#" class="footer_info_media_socials_instagram">
                                    <i class="fab fa-instagram-square"></i>
                                </a>
                            </div>
                        </div>
                        <div class="footer_info_work_hours">
                            <h4 class="footer_info_work_hours_title">Working hours</h4>
                            <div class="footer_info_work_hours_info">
                                <div class="footer_info_work_hours_info_first">
                                    <p class="footer_info_work_hours_info_first_days text_paragraph">Monday - Thursday
                                    </p>
                                    <p class="footer_info_work_hours_info_first_hours text_paragraph">06:00 - 18:00 hrs
                                    </p>
                                </div>
                                <div class="footer_info_work_hours_info_second">
                                    <p class="footer_info_work_hours_info_first_days text_paragraph">Friday & Saturday
                                    </p>
                                    <p class="footer_info_work_hours_info_first_hours text_paragraph">06:00 - 09:00 hrs
                                    </p>
                                </div>
                                <div class="footer_info_work_hours_info_third">
                                    <p class="footer_info_work_hours_info_third_more text_paragraph">And all the Sundays
                                        Will be Holidays</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer_info_subscription">
                            <h4 class="footer_info_subscription_heading">Subscribe Newsletter</h4>
                            <form class="footer_info_subscription_form" action="#" id="sub-form">
                                <div class="footer_info_subscription_form_email">
                                    <input name="email" class="footer_info_subscription_form_email_input" type="email"
                                        placeholder="Email address">
                                    <button class="footer_info_subscription_form_submit"
                                        type="submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer_nav">
                        <div class="footer_nav_menu">
                            <ul class="footer_nav_menu_items">
                                <li class="footer_nav_menu_items_item"><a href="#">Home</a></li>
                                <li class="footer_nav_menu_items_item"><a href="#">Services</a></li>
                                <li class="footer_nav_menu_items_item"><a href="#">Portfolio</a></li>
                                <li class="footer_nav_menu_items_item"><a href="#">Pages</a></li>
                                <li class="footer_nav_menu_items_item"><a href="#">Shop</a></li>
                                <li class="footer_nav_menu_items_item"><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="footer_nav_copyright">
                            <p class="footer_nav_copyright_text text_paragraph">Copyright © 2019, BeTop. All rights
                                reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="src/js/slick.min.js"></script>
    <script src="src/js/script.js"></script>
</body>
</html>