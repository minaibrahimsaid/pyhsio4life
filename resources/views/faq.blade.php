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
                        <p class="question"> &nbsp;
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
                        <p class="question"> &nbsp;
                            Do you do home visits ? </p>
                    </h5>
                </div>
                <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2">
                    <div class="card-block">
                        <ul>
                            Yes we can come and do all our sevices from the comfort of your house to minimize the stress
                            on your beloved pet .

                        </ul>
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-header question-header " role="tab" id="heading3" class="collapsed"
                    data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false"
                    aria-controls="collapse3">
                    <h5 class="mb-0">
                        <p class="question"> &nbsp;How do I
                            book an appointment for my pet?</p>
                    </h5>
                </div>
                <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
                    <div class="card-block">
                        Appointments are scheduled daily by phone or through book appointment form on our website . If
                        you would like to schedule an appointment with one of our veterinarians, please call us at
                        905.576.8885. For inquiries you may also contact our e-mail address
                        wilsonrdvetclinic@gmail.com.</div>
                </div>
            </div>


            {{-- <div class="card">
                <div class="card-header question-header " role="tab" id="heading4" class="collapsed"
                    data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false"
                    aria-controls="collapse4">
                    <h5 class="mb-0">
                        <p class="question">  &nbsp;How much
                            does it cost for an examination?</p>
                    </h5>
                </div>
                <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4">
                    <div class="card-block">
                        <ul>
                            <li>Our current fee for a veterinary examination is $86.90 + HST
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}



            <div class="card">
                <div class="card-header question-header " role="tab" id="heading5" class="collapsed"
                    data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false"
                    aria-controls="collapse5">
                    <h5 class="mb-0">
                        <p class="question"> &nbsp;Where are
                            you located?
                        </p>
                    </h5>
                </div>
                <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5">
                    <div class="card-block">
                        In a commercial plaza on the Southeast corner of Wilson and Olive Avenues in Oshawa. Our address
                        is 371 Wilson Road South

                    </div>
                </div>
            </div>



            <div class="card">
                <div class="card-header question-header " role="tab" id="heading6" class="collapsed"
                    data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false"
                    aria-controls="collapse6">
                    <h5 class="mb-0">
                        <p class="question"> &nbsp;Do you
                            have surgical facilities?</p>
                    </h5>
                </div>
                <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6">
                    <div class="card-block">
                        The Wilson Road Veterinary Clinic offers a variety of veterinary services for your pet(s)
                        including surgical and dental procedures

                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-header question-header " role="tab" id="heading7" class="collapsed"
                    data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false"
                    aria-controls="collapse7">
                    <h5 class="mb-0">
                        <p class="question"> &nbsp;Will you
                            contact me to remind me about my pet's yearly check up?
                        </p>
                    </h5>
                </div>
                <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7">
                    <div class="card-block">
                        Reminders for your pet's vet care are by telephone or sent to you by mail

                    </div>
                </div>
            </div>



            {{-- <div class="card">
                <div class="card-header question-header " role="tab" id="heading8" class="collapsed"
                    data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false"
                    aria-controls="collapse8">
                    <h5 class="mb-0">
                        <p class="question">  &nbsp;If my
                            animal stays overnight, is there someone at the clinic through the night?
                        </p>
                    </h5>
                </div>
                <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading8">
                    <div class="card-block">
                        Veterinary cases requiring overnight nursing care are transferred by the pet's owner to the
                        Animal Emergency Clinic in Whitby.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header question-header " role="tab" id="heading9" class="collapsed"
                    data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false"
                    aria-controls="collapse9">
                    <h5 class="mb-0">
                        <p class="question">  &nbsp;What
                            should I do if my pet needs medical care after hours?
                        </p>
                    </h5>
                </div>
                <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading9">
                    After-hour and emergency vet care are referred to the Animal Emergency Clinic of Durham Region at
                    1910 Dundas St. East in Whitby (905.576.3031) or to the Toronto Veterinary Emergency Hospital at 21
                    Rolark Ave in Scarborough (416.247.8387)
                </div>
            </div>
        </div> --}}


            {{-- <div class="card">
                <div class="card-header question-header " role="tab" id="heading10" class="collapsed"
                    data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false"
                    aria-controls="collapse10">
                    <h5 class="mb-0">
                        <p class="question">  &nbsp;Are
                            we covered by OHIP?</p>
                    </h5>
                </div>
                <div id="collapse10" class="collapse" role="tabpanel" aria-labelledby="heading10">
                    <div class="card-block">
                        Our Physiotherapy clinic is not covered by OHIP.
                    </div>
                </div>
            </div> --}}


        </div>

    </div>
</section>
<style>
    .card-header {
        background-color: #cac5c5 !important
    }
</style>
@endsection