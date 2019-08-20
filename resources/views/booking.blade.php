<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="wilson road vet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="wilsonroadvet">
    <meta name="google-site-verification" content="ENZYIzSVTpXDC4YpxBLX6H9E3zV0PQGNh3W0j5H8e8g" />
    <title>Wilson Road Veterinary Clinc</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
    <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <script src="https://kit.fontawesome.com/1b5e6babb1.js"></script>
</head>

<body>
    <section id="ext_menu-7">
        <nav id="navbar" class="navbar navbar-dropdown navbar-fixed-top">
            <div class="container" style="    max-width: 90%;">

                <div class="mbr-table">
                    <div class="mbr-table-cell">

                        <div class="navbar-brand">
                            <a class="navbar-caption" href="/">
                                <div style="
                                display: flex;
                                justify-content: space-around;
                                align-items: center;
                            ">
                                    <h2 id="clinic-name" style="font-weight: bold;  ">Wilson Road Veterinary Clinc </h2>
                                    <img id="logo-name" src="/assets/images/logo.png">
                                </div>
                            </a>
                            {{-- <a id="LOGO" href="/"><img src="/assets/images/logo.png" width="20%"> </a> --}}
                        </div>
                    </div>
                    <div class="mbr-table-cell">

                        <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse"
                            data-target="#exCollapsingNavbar">
                            <div class="hamburger-icon"></div>
                        </button>
                        <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm"
                            id="exCollapsingNavbar">
                            {{-- <li class="nav-item"><a   style="color: #6785c3;" class="nav-link link" href="/">home</a></li> --}}
                            <li class="nav-item">
                                <div class="dropdown show">
                                    <a style="background-color: transparent; border: 0px; color: white;  margin-top: 0px !important;"
                                        class="btn btn-secondary dropdown-toggle link" href="#" role="button"
                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        About Us
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"
                                        style="background: dodgerblue; padding: 0px !important;">
                                        <a style="background-color: transparent; border: 0px;  margin-top: 0px !important;"
                                            class="dropdown-item" href="/about-us">Meet Our Team</a>
                                        <a style="background-color: transparent; border: 0px;  margin-top: 0px !important;"
                                            class="dropdown-item" href="/gallery">Clinic Tour</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"><a style="color: white;" class="nav-link link"
                                    href="/services">services</a></li>
                            <li class="nav-item"><a class="nav-link link" style="color: white;"
                                    href="/contact-us">Contact&nbsp;Us</a></li>
                            <li class="nav-item"><a class="nav-link link" style="color: white;" href="/faq">FAQ</a></li>
                            {{-- <li class="nav-item"><a class="nav-link link"  style="color: #6785c3;"  href="/gallery">Gallery</a></li> --}}
                        </ul>
                        <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse"
                            data-target="#exCollapsingNavbar">
                            <div class="close-icon"></div>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <section class="engine"></section>
    <section class="mbr-section mbr-after-navbar" id="form1-x"
        style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">

        <div class="container">
            <div class="page-container">
                <div class="wizard">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="wizard-content">
                                <h1>Book an Appointment</h1>
                                <p style="font-style: italic; margin: 0;"> * We will call you back to confirm the
                                    appointment</p>
                                <p style="font-style: italic; margin: 0;">* The session will take about 45 minutes</p>
                                <br>
                                <div class="booking-step">
                                    <form method="POST" action="/booking">
                                        <div class="form-container">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group preferredAppointmentDate-group"><label
                                                            for="preferredAppointmentDate">
                                                            <div>Preferred Appointment Date <span class="star">*</span>
                                                            </div>
                                                        </label>
                                                        <div class="DayPickerInput"><input type="text"
                                                                id="date-picker-input-1" class="form-control"
                                                                name="date" /></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group preferredAppointmentTime-group"><label
                                                            for="preferredAppointmentTime">
                                                            <div>Preferred Appointment Period <span
                                                                    class="star">*</span>
                                                            </div>
                                                        </label><select id="preferredAppointmentTime"
                                                            class="form-control preferredAppointmentTime" required=""
                                                            name="time">
                                                            <option disabled="">--- Select a time of day ---
                                                            </option>
                                                            <option value="morning">Morning (9 AM - 12 PM)</option>
                                                            <option value="afternoon">Afternoon (12 PM - 3 PM)</option>
                                                            <option value="evening">Evening (3 PM - 7 PM)</option>
                                                        </select></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group firstName-group"><label for="firstName">
                                                            <div>First Name <span class="star">*</span></div>
                                                        </label><input id="firstName" type="text"
                                                            class="form-control firstName" required
                                                            placeholder="First Name" name="f_name"></div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group lastName-group"><label for="lastName">
                                                            <div>Last Name <span class="star">*</span></div>
                                                        </label><input id="lastName" type="text"
                                                            class="form-control lastName" required
                                                            placeholder="Last Name" name="l_name"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group emailAddress-group"><label
                                                            for="emailAddress">
                                                            <div>Email Address <span class="star">*</span></div>
                                                        </label><input id="emailAddress" type="email"
                                                            class="form-control emailAddress" required
                                                            placeholder="Email Address" name="email"></div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group phoneNumber-group"><label for="phoneNumber">
                                                            <div>Phone Number <span class="star">*</span></div>
                                                        </label><input value="" id="phoneNumber" type="tel"
                                                            class="form-control phoneNumber" required
                                                            placeholder="e.g. (500) 444-3333" name="phone"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group message-group"><label for="message">Your
                                                            condition</label><textarea id="message"
                                                            class="form-control message" name="condition"
                                                            placeholder="e.g. back pain"></textarea></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group submit-button-group"><button
                                                            class="btn btn-primary" type="submit">Book Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="mbr-section article mbr-parallax-background" id="msg-box8-p"
        style="background-image: url(assets/images/20.jpg); padding-top: 40px; padding-bottom: 40px;">

        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12  text-xs-center">
                    <h3 class="mbr-section-title display-2">Contact us</h3>
                    <div class="contact-div-info col-md-12 row">
                        <div class="contact-card col-md-4">
                            <h3 class="icon-contactus ">
                                <i class="fas fa-map-marked-alt fa-2x"></i>
                            </h3>
                            <h5 class="cardTitle">
                                Our Location

                            </h5>
                            <p class="contact-card-text"> 371 Wilson Road South Oshawa, Ontario </p>

                        </div>
                        <div class="contact-card col-md-4">
                            <h3 class="icon-contactus">
                                <i class="fas fa-mobile-alt fa-2x"></i>
                            </h3>
                            <h5 class="cardTitle">
                                Call Us
                            </h5>
                            <p class="contact-card-text"> <a style="font-family: -webkit-body;  color: white;"
                                    href="tel:+9055768885">
                                    905 576 8885</a> </p>

                        </div>
                        <div class="contact-card col-md-4">
                            <h3 class="icon-contactus">
                                <i class="fas fa-envelope-open-text fa-2x"></i>
                            </h3>
                            <h5 class="cardTitle">
                                Email Us
                            </h5>
                            <p class="contact-card-text"><a style="font-family: -webkit-body;  color: white;"
                                    href="mailto:wilsonrdvetclinic@gmail.com">
                                    wilsonrdvetclinic@gmail.com </a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mbr-section mbr-section-md-padding mbr-footer footer2" id="contacts2-b"
        style="background-color: #6785c3; padding-top: 90px; padding-bottom: 0px !important;">
        <div class="container">
            <div class="row">
                <div class="mbr-footer-content col-xs-12 col-md-3">
                    <h2>
                        <h6 style="font-weight: bold;">Address</h6><br>
                        371 Wilson Road South
                        Oshawa, Ontario <br><br><br>
                        <h6 style="font-weight: bold;">Contacts</h6><br>
                        Email: wilsonrdvetclinic@gmail.com<br>
                        <h6>Phone: +1 905-576-8885</h6><br>
                        </p>
                </div>
                <div class="mbr-footer-content col-xs-12 col-md-3">
                    <p class="mbr-contacts__text">
                        <h6 style="font-weight: bold;">Hours</h6>
                    </p>
                    <ul>
                        <li style="color : white"> Monday 9:00 am – 6:00 pm </li>
                        <li style="color : white"> Tuesday 9:00 am – 6:00 pm </li>
                        <li style="color : white"> Wednesday 9:00 am – 6:00 pm </li>
                        <li style="color : white"> Thursday 9:00 am – 6:00 pm </li>
                        <li style="color : white"> Friday 9:00 am – 6:00 pm </li><li style="color : white"> Saturday 10:00 am – 6:00 pm </li>
                        <li style="color : white"> Sunday Day off </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2875.2313979484184!2d-78.84125988449445!3d43.89247397911389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d51cd52647b2e5%3A0x92e4f41ed490e0f5!2s371+Wilson+Rd+S%2C+Oshawa%2C+ON+L1H+6C6!5e0!3m2!1sen!2sca!4v1564830629839!5m2!1sen!2sca"
                            width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-a"
        style="background-color: #6785c3; padding-top: 1.75rem; padding-bottom: 1.75rem;">
        <div style="text-align:center;">
            <a class="btn btn-social" title="Facebook" target="_blank" style="color : blue;"
                href="https://www.facebook.com/physio4lifeajax/"><i class="socicon socicon-facebook"></i></a>
            <a class="btn btn-social" title="Google" target="_blank"
                href="https://www.google.ca/maps/place/371+Wilson+Rd+S,+Oshawa,+ON+L1H+6C6/@43.892474,-78.8412599,17z/data=!3m1!4b1!4m5!3m4!1s0x89d51cd52647b2e5:0x92e4f41ed490e0f5!8m2!3d43.892474!4d-78.8390712">
                <i class="socicon socicon-google"></i></a> <a class="btn btn-social" title="Instagram" target="_blank"
                href="/"><i class="socicon socicon-instagram"></i></a> </div>
        <div class="container">
            <p class="text-xs-center">Copyright (c) wilsonroadvet.</p>
        </div>
    </footer>

    <style>
        #map {
            height: 200px;
            width: 100%;
        }

        .online-button {
            color: white;
            letter-spacing: 5px;
            font-size: larger;
            font-family: sans-serif;
            background-color: #6785c3;
            height: 60px;
            width: 60%;
            line-height: 60px;
            margin: auto;
            cursor: pointer;
        }

        .contact-card-text {
            font-weight: 900;
        }

        .cardTitle {
            color: white;
            font-family: initial;
        }

        .offer-text {
            font-family: initial;
            font-style: italic;
            font-weight: 900;
            color: #717BF9;
        }

        .icon-contactus {
            color: white
        }

        @media only screen and (max-width: 800px) {
            #offer-slide {
                background-image: url(assets/images/18.jpg) !important;
            }

            #offer-slide2 {
                background-image: url(assets/images/2mob.jpg) !important;
            }

            #offer-slide3 {
                background-image: url(assets/images/2.png) !important;
            }

            #offer-slide4 {
                background-image: url(assets/images/22.jpg) !important;
            }

            #clinic-name {
                font-size: larger;
            }

            #hidden-text {
                display: none;
            }

            #logo-name {
                width: 20%;
            }
        }
        #map {
            height: 200px;
            width: 100%;
        }

        .online-button {
            color: white;
            letter-spacing: 5px;
            font-size: larger;
            font-family: sans-serif;
            background-color: #6785c3;
            height: 60px;
            width: 60%;
            line-height: 60px;
            margin: auto;
            cursor: pointer;
        }

        .contact-card-text {
            font-weight: 900;
        }

        .cardTitle {
            color: white;
            font-family: initial;
        }

        .offer-text {
            font-family: initial;
            font-style: italic;
            font-weight: 900;
            color: #717BF9;
        }

        .icon-contactus {
            color: white
        }

        #logo-name {
            width: 5%;
        }

        #tex-logo-quote {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        @media only screen and (max-width: 800px) {
            #offer-slide {
                background-image: url(assets/images/18.jpg) !important;
            }

            #offer-slide2 {
                background-image: url(assets/images/2mob.jpg) !important;
            }

            #offer-slide3 {
                background-image: url(assets/images/2.png) !important;
            }

            #offer-slide4 {
                background-image: url(assets/images/22.jpg) !important;
            }

            #clinic-name {
                font-size: larger;
            }

            #hidden-text {
                display: none;
            }

            #logo-name {
                width: 20%;
            }
        }
    </style>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smooth-scroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/script.min.js"></script>
    <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
    <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
    <script src="assets/jarallax/jarallax.js"></script>
    <script src="assets/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/mobirise-gallery/player.min.js"></script>
    <script src="assets/mobirise-gallery/script.js"></script>
    <input name="animation" type="hidden">
</body>

</html>