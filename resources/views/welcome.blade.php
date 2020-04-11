@extends('layout')
@section('view')
<section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding mbr-after-navbar" data-ride="carousel" data-keyboard="false" data-wrap="true" data-pause="false" data-interval="5000000" id="slider-0">
    <div>
        <div>
            <div>
                <ol class="carousel-indicators">

                    <li data-app-prevent-settings="" data-target="#slider-0" data-slide-to="1" class="active"></li>
                    <li data-app-prevent-settings="" data-target="#slider-0" data-slide-to="2"></li>
                    <li data-app-prevent-settings="" data-target="#slider-0" data-slide-to="3"></li>
                    <li data-app-prevent-settings="" data-target="#slider-0" class="" data-slide-to="4"></li>
                    <li data-app-prevent-settings="" data-target="#slider-0" class="" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div id="offer-slide1" class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full active" data-bg-video-slide="false" style="background-image:  url(assets/images/masks.jpg); ">
                        <div class="mbr-table-cell">
                            <h2 id="text3-slide" class="mbr-section-title display-1 shadow-text" style="    
                                    font-family: Monotype Corsiva Regular;
                                    text-align: center;
                                        ">Covid 19&nbsp;Update : April 4
                                <h3 id="text3-slide" class="mbr-section-title display-1 shadow-text" style="    
                                    font-family: Monotype Corsiva Regular;
                                    font-size: 36px;
                                    text-align: center;">We are open with altered</h3>
                                <h3 id="text3-slide" class="mbr-section-title display-1 shadow-text" style="    
                                    font-family: Monotype Corsiva Regular;
                                    font-size: 36px;
                                    text-align: center;">prorocols for everyones safety</h3>
                            </h2>
                            <div style="text-align: center;width: 100%"><a class="mbr-section-title display-1 readmore shadow-text" href="/covid-19">Read more</a></div>
                            <!-- <div class="container-slide container" style="margin-top: 350px;">
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-1 text-xs-center">

                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div id="offer-slide2" class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full " data-bg-video-slide="false" style="margin-top: 70px; background-image: url(assets/images/1.jpg); ">
                        <div class="mbr-table-cell">
                            <div id="per15"><img src="assets/images/15.png" width="15%">
                                <div style="">
                                    <h1 class="mbr-section-title display-1 text-aligin:left text-offer-1 shadow-text" style="      
                                           width: 100%; font-family: Monotype Corsiva Regular; font-size: 90px;">For
                                        all clients</h1>
                                    <h1 class="mbr-section-title display-1 text-aligin:left text-offer-1 shadow-text" style="width: 100%;
                                            font-family: Monotype Corsiva Regular; font-size: 90px;
                                             "> on all
                                        services&nbsp;
                                    </h1>
                                </div>
                                <div>
                                    {{-- <h2 class="mbr-section-title display-1 text-aligin:left" style="  color:#960000;  
                                    font-family: Monotype Corsiva Regular;">For all clients </h2>
                                        <h2 class="mbr-section-title display-1 text-aligin:left"
                                            style="font-family: Monotype Corsiva Regular; color:#960000;"> on all
                                            services&nbsp;
                                        </h2> --}}
                                </div>
                            </div>
                            <div class="container-slide container" style="margin-top: 350px;">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-1 text-mobile">
                                        <h2 class="mbr-section-title display-1 text-aligin:left text-offer-1 shadow-text" style="  
                                                font-family: Monotype Corsiva Regular; ">For all clients </h2>
                                        <h2 class="mbr-section-title display-1 text-aligin:left text-offer-1 shadow-text" style="font-family: Monotype Corsiva Regular; "> on all
                                            services&nbsp;
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="offer-slide3" class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false" style="background-image:  url(assets/images/2.jpg);     margin-top: 90px;">

                        <div style="    height: 100%;
                            display: flex;
                            flex-direction: column;
                            align-items: center;">
                            <h2 id="slidetext2" class="mbr-section-title display-1 shadow-text" style="    
                                    font-family: Monotype Corsiva Regular;
                                 text-align: center; 
                                 margin-top: 90px;

                                ">Competitive affordable Spay & Neuter prices&nbsp;
                            </h2>
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container" style="margin-top: 350px;">
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-1 text-xs-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="offer-slide4" class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false" style="background-image:  url(assets/images/25.jpg);">
                        <div class="mbr-table-cell">
                            <h2 id="text3-slide" class="mbr-section-title display-1 shadow-text" style="    
                                    font-family: Monotype Corsiva Regular;
                                    text-align: center;
                                        ">We do House calls&nbsp;
                            </h2>
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container" style="margin-top: 350px;">
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-1 text-xs-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="offer-slide5" class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false" style="background-image: url(assets/images/88.jpg);     margin-top: 70px;">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide">
                                <div class="row">
                                    <div class="col-md-3" style="text-align:left; float: right;  margin-top: 100px;">
                                        <h1 class="mbr-section-title display-1 shadow-text" style="  font-family: Monotype Corsiva Regular; max-width: 250px;     padding-left: 20px;">Open 6 days a
                                            week Saturday till
                                            6 Pm&nbsp;
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-0">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-0">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section article mbr-section__container" id="content2-j" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead">
                <blockquote class="quote"> &nbsp;we love them like you do&nbsp;&nbsp;&nbsp;<img src="/assets/images/logo.png" width="10%" />
                </blockquote>
            </div>
        </div>
    </div>

</section>
<section class="mbr-section article mbr-parallax-background" id="msg-box8-p" style="background-image: url(assets/images/7.jpg); padding-top: 40px; padding-bottom: 40px;">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h4 class="mbr-section-title display-3">Why </h4>
                <h4 class="clinic-name mbr-section-title display-1"> Wilson Road Veterinary Clinic ? </h4>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section article mbr-section__container" id="content6-q" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 lead">
                <ul>
                    <li>
                        <em><strong style="font-family: Monotype Corsiva Regular; 
                                font-size: x-large;"> Wilson Road Veterinary Clinic </strong> has performed veterinary
                            services for
                            small animal
                            patients for over 40 years , serving your pets in the Oshawa and surrounding Durham
                            community.&nbsp;
                        </em>
                    </li>
                    <li>
                        <em>
                            Our hospital is comprised of a group of individuals whose drive is to treat every pet as
                            though
                            they were one of their own and provide an exceptional level of care for pets and their
                            owners.
                        </em>
                    </li>
                    <li>
                        <em>
                            we are open 6 days a week including Saturday till 6 pm
                        </em>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-6 lead">
                <ul>
                    <li> <em>We maintain a facility that is extremely clean, welcoming and designed to minimize both
                            a pets and clients anxiety.
                        </em></li>
                    <li> <em>
                            We acquire and retain an excellent, well-trained team; provide them with ongoing
                            opportunities for continuing education and professional development.
                        </em></li>

                    <li> <em>
                            We care about you and your pet
                            convenience so we do house calls and offer all our services from the comfort of your
                            home
                            .
                        </em></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<style>
    @media only screen and (max-width: 800px) {
        #slidetext2 {
            margin-top: 90px !important
        }

    }

    .readmore {
        background-color: rgba(0, 0, 0, 0.75);
        font-size: 26px;
        border-radius: 25px;
        padding: 0px 20px 2px 20px;
        text-decoration: unset;
    }

    .readmore:hover {
        background-color: #FFFFFF;
        color: #000000;
        text-shadow: unset;
        text-decoration: unset;
    }
</style>
@endsection