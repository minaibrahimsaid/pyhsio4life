<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="physio 4 life">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta name="description" content=" physio 4 life">
    <title>physio 4 life</title>
    <script src="https://kit.fontawesome.com/45b7c5018e.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
    <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="assets/mobirise/css/jquery-ui-1.10.1.css" >
    <link rel="stylesheet" href="assets/mobirise/css/nigran.datepicker.css" >



</head>

<body>
    <section id="ext_menu-7">

        <nav class="navbar navbar-dropdown navbar-fixed-top">
            <div class="container">

                <div class="mbr-table">
                    <div class="mbr-table-cell">

                        <div class="navbar-brand">

                            <a class="navbar-caption" href="/">physio 4 life</a>
                        </div>

                    </div>
                    <div class="mbr-table-cell">

                        <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse"
                            data-target="#exCollapsingNavbar">
                            <div class="hamburger-icon"></div>
                        </button>

                        <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm"
                            id="exCollapsingNavbar">
                            <li class="nav-item"><a class="nav-link link" href="/">home</a></li>
                            <li class="nav-item"><a class="nav-link link" href="/about-us">About Us</a></li>
                            <li class="nav-item"><a class="nav-link link" href="/services">services</a></li>
                            <li class="nav-item"><a class="nav-link link" href="/contact-us">Contact Us</a></li>
                            <li class="nav-item"><a class="nav-link link" href="/faq">FAQ</a></li>
                            <li class="nav-item"><a class="nav-link link" href="/gallery">Gallery</a></li>
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
    <section class="engine"></section><section class="mbr-section mbr-after-navbar" id="form1-x" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">

    <div class="container">
        <div class="page-container">
            <div class="wizard">
                <div class="row">
                    <div class="col-md-8">
                        <div class="wizard-content">
                            <h1>Book an Appointment</h1>
                            <div class="booking-step">
                                <form method="POST"  action="/booking">
                                    <div class="form-container">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group preferredAppointmentDate-group"><label
                                                        for="preferredAppointmentDate">
                                                        <div>Preferred Appointment Date <span class="star">*</span>
                                                        </div>
                                                    </label>
                                                    <div class="DayPickerInput"><input type="text" id="date-picker-input-1" class="form-control" name="date"/></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group preferredAppointmentTime-group"><label
                                                        for="preferredAppointmentTime">
                                                        <div>Preferred Appointment Time <span class="star">*</span>
                                                        </div>
                                                    </label><select id="preferredAppointmentTime"
                                                        class="form-control preferredAppointmentTime" required="" name="time">
                                                        <option disabled="" >--- Select a time of day ---
                                                        </option>
                                                        <option value="morning">Morning (8 AM - 11 AM)</option>
                                                        <option value="afternoon">Afternoon (12 PM - 4 PM)</option>
                                                        <option value="evening">Evening (5 PM - 7 PM)</option>
                                                        <option value="any">Anytime (8 AM - 7 PM)</option>
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
                                                <div class="form-group emailAddress-group"><label for="emailAddress">
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
                                                <div class="form-group message-group"><label for="message">Your condition</label><textarea id="message"
                                                        class="form-control message" name="condition"></textarea></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group submit-button-group"><button
                                                        class="btn btn-primary" type="submit">Book Now</button></div>
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

    <section class="mbr-section mbr-section-md-padding mbr-footer footer2" id="contacts2-b"
        style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">

        <div class="container">
            <div class="row">
                <div class="mbr-footer-content col-xs-12 col-md-3">
                    <p><strong>Address</strong><br>
                        66 Harwood Ave S.<br>
                        Ajax, ON LIS 2H6<br><br><br>
                        <strong>Contacts</strong><br>
                        Email: Physio4lifeajax@gmail.com<br>
                        Phone: +1 289 660 7666<br>
                        Fax: +1 289 660 8666</p>
                </div>
                <div class="mbr-footer-content col-xs-12 col-md-3">
                    <p class="mbr-contacts__text"><strong>Links</strong></p>
                    <ul>
                        <li><a class="text-white" href="/">Home</a></li>
                        <li><a class="text-white" href="/services">Services</a></li>
                        <li><a class="text-white" href="/faq">F&Q</a></li>
                        <li><a class="text-white" href="/contact-us">Contact Us</a></li>
                        <li><a class="text-white" href="/about-us">About Us</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-6">
                    <!-- <div class="mbr-map" data-state="error"><div data-state-details="">Failed to load the library</div></div> -->
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7468.4840640647535!2d-79.02835943392569!3d43.85010959839869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4dfdfcc7cb8f7%3A0xc33c18fa74befe0c!2s66+Harwood+Ave+S%2C+Ajax%2C+ON+L1S+2H6!5e0!3m2!1sen!2sca!4v1552491393630"
                            width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-a"
        style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">

        <div class="container">
            <p class="text-xs-center">Copyright (c) Physio 4 life.</p>
        </div>
    </footer>

    <style>
        #map {
            height: 200px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }

        .star{
            color:red;
            font-size: x-large;
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
    <script src="assets/js/jquery-ui-1.10.1.min.js"></script>

    <script >
    $(function() {
			$( "#date-picker-input-1" ).datepicker({
				inline: true,
                showOtherMonths: true,
                minDate: +1,
                beforeShow : function(){
                    var dateTime = new Date();
                    var hour = dateTime.getHours();
                    if(hour  >= 11){
                        $(this).datepicker( "option", "minDate", "+2" );
                    }
                }
			})
			.datepicker('widget').wrap('<div class="ll-skin-lugo"/>');
        });
        // $('.form-control').change(function() {
        //     if($('input').val() == ''){
        //         alert('Input can not be left blank');
        //     }
        //     // console.log("SSS"  , $("input:empty") , $("#phoneNumber").val() )
        // });

    </script>
</body>

</html>
