@extends('layout')
@section('view')
<section class="mbr-section" id="msg-box5-n"
    style=" padding-top: 0rem; padding-bottom: 25px; padding-top: 10rem; color:white; background-image:  url(assets/images/200.jpg);     background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: cover">


    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up" >



                <div class="mbr-table-cell col-md-5 text-xs-center text-md-left content-size">
                    <h3 class="mbr-section-title display-3 shadow-text">Our Location</h3>
                    <div class="lead">

                        <p class="contact-text-edit "><strong>Address</strong><br>
                            371 Wilson Road South Oshawa, Ontario <br><br><br>
                            <strong>Contacts</strong><br>
                            Email: wilsonrdvetclinic@gmail.com<br>
                            <h6 class="contact-text-edit shadow-text" style="color :white !important">Phone: +1 905-576-8885</h6>
                            {{-- <h6>Fax: +1 289-660-8666</h6> --}}
                        </p>
                    </div>


                </div>

                <div class="mbr-table-cell col-md-3 text-xs-center text-md-left content-size">
                    <h3 class="mbr-section-title display-3 shadow-text">Hours</h3>
                    <div class="lead">

                        <p class="contact-text-edit">
                            <strong>Monday </strong> 9:00 am – 6:00 pm<br>
                            <strong>Tuesday </strong> 9:00 am – 6:00 pm<br>
                            <strong>Wednesday </strong> 9:00 am – 6:00 pm<br>
                            <strong>Thursday </strong>9:00 am – 6:00 pm<br>
                            <strong>Friday </strong>9:00 am – 6:00 pm<br>
                            <strong>Saturday </strong>10:00 am – 6:00 pm<br>
                            <strong>Sunday </strong> Day off<br>
                        </p>
                    </div>


                </div>





                <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-4 image-size"
                    style="width: 38%;">
                    <div class="mbr-figure"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2875.2313979484184!2d-78.84125988449445!3d43.89247397911389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d51cd52647b2e5%3A0x92e4f41ed490e0f5!2s371+Wilson+Rd+S%2C+Oshawa%2C+ON+L1H+6C6!5e0!3m2!1sen!2sca!4v1564830629839!5m2!1sen!2sca"
                            width="100%" height="500px" frameborder="1" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>


<section class="engine"></section>
<section class="mbr-section mbr-after-navbar" id="form1-x"
    style="  padding-top: 120px; padding-bottom: 120px; mix-blend-mode: normal;">

    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">Contact Form</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">


                    <div data-form-alert="true">
                        <div hidden="" data-form-alert-success="true"
                            class="alert alert-form alert-success text-xs-center">Thanks for filling out form!</div>
                    </div>


                    <form action="/contact" method="post" data-form-title="CONTACT FORM">

                        <input type="hidden"
                            value="KiEHc9gxwm1lopCsmozqaw7WAT0DDNukedzIpSSewEZgq3VpRoO3+K/Z4cMWAETnG1DgSc4Ncu1HgdTQRrWO2QdfpNtUWqHy3wzklwKZCH76Ikgjl8bz/qRugOP+zbub"
                            data-form-email="true">

                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-x-name">Name<span
                                            class="form-asterisk">*</span></label>
                                    <input type="text" class="form-control" name="name" required=""
                                        data-form-field="Name" id="form1-x-name">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-x-email">Email<span
                                            class="form-asterisk">*</span></label>
                                    <input type="email" class="form-control" name="email" required=""
                                        data-form-field="Email" id="form1-x-email">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-x-phone">Phone</label>
                                    <input type="tel" class="form-control" name="phone" data-form-field="Phone"
                                        id="form1-x-phone">
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="form-control-label" for="form1-x-message">Message</label>
                            <textarea class="form-control" name="note" rows="7" data-form-field="Message"
                                id="form1-x-message"></textarea>
                        </div>

                        <div><button type="submit" class="btn btn-primary">CONTACT US</button></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    /* @media only screen and (max-width: 800px) {
        #msg-box5-n {
            background-image: url(assets/images/bgmob.jpg) !important;
        }
    } */

    .contact-text-edit{
        text-shadow: 2px 2px #4e4141;
        font-weight: 900 !important;
    }
</style>

@endsection