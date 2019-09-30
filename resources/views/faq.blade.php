@extends('layout')
@section('view')

<section class="mbr-section" id="testimonials1-u"
    style="background-color: rgb(255, 255, 255); padding-top: 10rem; padding-bottom: 0px;">



    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">&nbsp;&nbsp; Frequently Asked Questions:&nbsp;</h3>

                </div>
            </div>
        </div>
    </div>


</section>

<section class="mbr-section mbr-section__container article" id="header3-r"
    style=" padding-top: 20px; padding-bottom: 0px;">
    <div style="margin:20px;">

        <div id="accordion" role="tablist" aria-multiselectable="true">

            <div class="card">
                <div class="card-header question-header " role="tab" id="heading1" class="collapsed"
                    data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false"
                    aria-controls="collapse1">
                    <h5 class="mb-0">
                        <p class="question"> <i class="far fa-question-circle" style="color: yellow"></i> &nbsp;Do I
                            What services you are providing ?</p>
                    </h5>
                </div>
                <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1">
                    <div class="card-block">
                        <ul>
                            <li>Wellness Exams</li>
                            <li>Vaccinations</li>
                            <li>Spay & Neuter</li>
                            <li>Blood Work</li>
                            <li>Xrays</li>
                            <li>Dentistry</li>
                            <li>Deworming</li>
                            <li>Pet Foot & Supplies</li>
                            <li>Pain Mangement</li>
                            <li>Microchipping</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header question-header " role="tab" id="heading2" class="collapsed"
                    data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false"
                    aria-controls="collapse2">
                    <h5 class="mb-0">
                        <p class="question"> <i class="far fa-question-circle" style="color: yellow"></i> &nbsp;What
                            Do you do home visits ? </p>
                    </h5>
                </div>
                <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2">
                    <div class="card-block">
                        <ul>
                                Yes we can come and do all our sevices from the comfort of your house to minimize the stress on your beloved pet .

                        </ul>
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-header question-header " role="tab" id="heading3" class="collapsed"
                    data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false"
                    aria-controls="collapse3">
                    <h5 class="mb-0">
                        <p class="question"><i class="far fa-question-circle" style="color: yellow"></i> &nbsp;How
                            long will my initial appointment be?</p>
                    </h5>
                </div>
                <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
                    <div class="card-block">
                        The initial appointment takes about 60-90 minutes.
                        It is longer than the subsequent visit since the first appointment is more of a clinical
                        evaluation followed by treatment session. </div>
                </div>
            </div>


            <div class="card">
                <div class="card-header question-header " role="tab" id="heading4" class="collapsed"
                    data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false"
                    aria-controls="collapse4">
                    <h5 class="mb-0">
                        <p class="question"><i class="far fa-question-circle" style="color: yellow"></i> &nbsp;What
                            should I bring in the first visit?</p>
                    </h5>
                </div>
                <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4">
                    <div class="card-block">
                        <ul>
                            <li>Bring your insurance information and doctor referral if you have one</li>
                            <li>Bring any X-ray, scans or any medical reports if have any of these.</li>
                            <li>List of any medications you are taking for your condition.</li>
                            <li>Wear appropriate comfortable clothing for easy access to the affected area of the
                                body.if you forget we do have gowns available here.</li>
                        </ul>
                    </div>
                </div>
            </div>



            <div class="card">
                <div class="card-header question-header " role="tab" id="heading5" class="collapsed"
                    data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false"
                    aria-controls="collapse5">
                    <h5 class="mb-0">
                        <p class="question"><i class="far fa-question-circle" style="color: yellow"></i> &nbsp;How
                            long does each physiotherapy session last?</p>
                    </h5>
                </div>
                <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5">
                    <div class="card-block">
                        Physiotherapy treatments vary in time depending on the area of injury and the nature of the
                        condition. Generally, treatment lasts around 45 minutes in length.
                    </div>
                </div>
            </div>



            <div class="card">
                <div class="card-header question-header " role="tab" id="heading6" class="collapsed"
                    data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false"
                    aria-controls="collapse6">
                    <h5 class="mb-0">
                        <p class="question"><i class="far fa-question-circle" style="color: yellow"></i> &nbsp;What
                            can you expect to feel after the treatment?</p>
                    </h5>
                </div>
                <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6">
                    <div class="card-block">
                        You may feel a little sore after the assessment and the treatment for one or two days then
                        you will feel better.
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-header question-header " role="tab" id="heading7" class="collapsed"
                    data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false"
                    aria-controls="collapse7">
                    <h5 class="mb-0">
                        <p class="question"><i class="far fa-question-circle" style="color: yellow"></i> &nbsp;how
                            many treatments I will need?</p>
                    </h5>
                </div>
                <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7">
                    <div class="card-block">
                        After your first assessment, your physio will be able to offer an estimation of the number
                        of visits needed for your case. This may vary during your treatment as your physio will
                        assess your progress on each visit.
                    </div>
                </div>
            </div>



            <div class="card">
                <div class="card-header question-header " role="tab" id="heading8" class="collapsed"
                    data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false"
                    aria-controls="collapse8">
                    <h5 class="mb-0">
                        <p class="question"><i class="far fa-question-circle" style="color: yellow"></i> &nbsp;Is
                            there parking?</p>
                    </h5>
                </div>
                <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading8">
                    <div class="card-block">
                        Yes. We are in a large plaza with lots of parking.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header question-header " role="tab" id="heading9" class="collapsed"
                    data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false"
                    aria-controls="collapse9">
                    <h5 class="mb-0">
                        <p class="question"><i class="far fa-question-circle" style="color: yellow"></i> &nbsp;Do we
                            do direct billing to Insurance?</p>
                    </h5>
                </div>
                <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading9">
                    <div class="card-block">
                        Yes, we do the direct billing submission to the majority of insurance companies, but few
                        insurance companies only reimburse directly to the patients.
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-header question-header " role="tab" id="heading10" class="collapsed"
                    data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false"
                    aria-controls="collapse10">
                    <h5 class="mb-0">
                        <p class="question"><i class="far fa-question-circle" style="color: yellow"></i> &nbsp;Are
                            we covered by OHIP?</p>
                    </h5>
                </div>
                <div id="collapse10" class="collapse" role="tabpanel" aria-labelledby="heading10">
                    <div class="card-block">
                        Our Physiotherapy clinic is not covered by OHIP.
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>
@endsection