
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/slick.css">
    <link rel="stylesheet" href="src/css/icons.css">
    <link rel="stylesheet" href="http://<?php echo($_SERVER["HTTP_HOST"]) ;?>/src/css/style.css" type="text/css">
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
                    <img class="header_logo_img" src="http://<?php echo($_SERVER["HTTP_HOST"]) ;?>/src/img/logo.png" alt="betop_logo">
                </div>
                <div class="header_menu">
                    <ul class="header_menu_items">
                        <li class="header_menu_item"><a href="#">Home</a></li>
                        <li class="header_menu_item"><a href="#">Services</a></li>
                        <li class="header_menu_item"><a href="/posts/">Posts</a></li>
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
                            <a href="/admin" class="select_option open_login_popup" value="login">Login</a>
                            <a href="/admin" class="select_option open_reg_popup" value="register">Register</a>
                        </div>
                    </div>
                    <a href="/dashboard">
                        <div class="header_hamburger_button">
                        <div class="header_hamburger_button_wrapper">
                            <span class="header_hamburger_button_line"></span>
                            <span class="header_hamburger_button_line"></span>
                            <span class="header_hamburger_button_line"></span>
                        </div>
                    </div>
                </a>    
                </div>
            </div>
        </div>
    </div>