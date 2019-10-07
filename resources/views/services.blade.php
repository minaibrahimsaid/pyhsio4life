@extends('layout')
@section('view')
{{-- start-page --}}
<section
  class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow mbr-after-navbar"
  id="header1-h" style="background-image: url(assets/images/5.jpg);">

  <div class="mbr-overlay" style="opacity: 0; background-color: rgb(239, 239, 239);"></div>

  <div class="mbr-table-cell">

    <div class="container">
      <div class="row">
        <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">

          <h1 class="mbr-section-title display-1"> Wilson Road Veterinary Clinc</h1>
          <p class="mbr-section-lead lead">
            <div class="online-button">
              <a href="/booking" style="color: white;    font-size: initial;"><i class="fas fa-circle 2x"
                  style="color:green"></i> Book online </a>
            </div>
            <br>
            <div class="online-button">
              <i class="fas fa-phone-alt"></i> <a style="    font-size: initial;"
                href="tel:9055768885">9055768885</a><br>
          </p>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#header3-i"><i class="mbr-arrow-icon"></i></a>
  </div>
</section>
<section class="mbr-section mbr-section__container article" id="header3-i"
  style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h3 class="mbr-section-title display-2">services</h3>
        <small class="mbr-section-subtitle"></small>
      </div>
    </div>
  </div>
</section>
<section class="mbr-section" id="msg-box5-g"
  style="background-color: rgb(255, 255, 255); padding-top: 0px; padding-bottom: 80px;">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header service-header" id="heading5">
              <h5 class="mb-0">
                <button class="service collapsed" type="button" data-toggle="collapse" data-target="#collapse5"
                  aria-expanded="false" aria-controls="collapse5">
                  Vaccination
                </button>
              </h5>
            </div>
            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
              <div class="card-body">
                <ul>
                  {{-- description --}}
                  <div class="card">
                    <div class="card-header service-header" id="heading6">
                      <h5 class="mb-0">
                        <button class="service collapsed" type="button" data-toggle="collapse" data-target="#collapse6"
                          aria-expanded="false" aria-controls="collapse6">
                          Puppy health
                        </button>
                      </h5>
                    </div>
                    {{-- <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
                        <div class="card-body">
                          <ul>
                            In electrical stimulation, electrodes are placed on the surface of the skin, which can cause
                            muscles to contract.
                          </ul>
                        </div>
                      </div> --}}
                  </div>
                  <div class="card">
                    <div class="card-header service-header" id="heading7">
                      <h5 class="mb-0">
                        <button class="service collapsed" type="button" data-toggle="collapse" data-target="#collapse7"
                          aria-expanded="false" aria-controls="collapse7">
                          Adult pet
                        </button>
                      </h5>
                    </div>
                    {{-- <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
                        <div class="card-body">
                          <ul>
                            TENS, or transcutaneous electrical nerve stimulation, is a type of electrical stimulation.
                            It is a device that sends low current through the electrodes place on the skin surface. It
                            provides pain relief by blocking nerve signals carrying pain messages to the brain. TENS
                            also stimulates the production of endorphins – our natural pain relieving hormones.
                          </ul>
                        </div>
                      </div> --}}
                  </div>
                  <div class="card">
                    <div class="card-header service-header" id="heading8">
                      <h5 class="mb-0">
                        <button class="service collapsed" type="button" data-toggle="collapse" data-target="#collapse8"
                          aria-expanded="false" aria-controls="collapse8">
                          Seinor pet
                        </button>
                      </h5>
                    </div>
                    {{-- <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
                        <div class="card-body">
                          <ul>
                            Interferential current involves the passing of two high frequency currents through the
                            tissues. Where the currents intersect, a new current is formed. It is a deeper form of the
                            common treatment TENS. The high frequency waveform of the Interferential current reaches the
                            skin deeply with a higher level of stimulation and less discomfort to the patient. It helps
                            the body produce the natural pain relieving, healing chemicals called endorphins. This can
                            help in the treatment of circulatory and muscular disorders, stiffness of joints, swelling,
                            and inflammation.
                          </ul>
                        </div>
                      </div> --}}
                  </div>
                </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header service-header" id="heading11">
              <h5 class="mb-0">
                <button class="service collapsed" type="button" data-toggle="collapse" data-target="#collapse11"
                  aria-expanded="false" aria-controls="collapse11">
                  Mobile Servies
                </button>
              </h5>
            </div>
            <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordionExample">
              <div class="card-body">
                <ul>
                  <p>Instead of taking your pet to a clinic we will bring the clinic to your home and do all our
                    services from the comfort of your house .
                    <br>
                    What services you provide during the house call ?
                    <br>

                    Wellness exam
                    Vaccines
                    Deworming
                    Microchipping
                    Blood withdrawal
                    Medication and food delivery
                    Euthanasia
                    <br>


                    Who benefit more from the house call services?
                    <br>
                    <ul>
                      <li>Senior clients that cannot come to clinic </li>
                      <li> people who have tight schedule and don’t want to wait in the clinic </li>
                      <li>people who don’t have a car ride </li>
                      <li> client who have multiple pets and cannot bring all of them at once </li>
                    </ul>
                    <br>

                    Is my pet need a house call ?
                    <br>

                    Some pets are so shy and do much better if we do all the service from their place as they feel more
                    comfortable rather than bring them to a new place .
                    Examples :
                    <ul>
                    <li> cat stressed in Carrie </li>
                    <li> pet hate the cat ride </li>
                    <li> big dog with hip problems and cannot walk </li>
                    <li> sick pet and you think that’s the time to let him/her go peacefully in his/her own bed . </li>
                    </ul>

                    Is there an extra charges on the services prices ?
                    <br>
                    No extra charges on the prices , you will be charged the same price as you are in the clinic
                    The only extra will be a house call fee which ranges from
                    <br> 40$ - 60$ /visit depend on your address
                    <br>

                    How can I book a house call visit? <br>
                    Call our clinic Wilson Road Veterinary Clinic on 905-567-8885 and ask for the services you want .
                    Our receptionist will give you an estimate with the price and will help you to book the appointment.
                  </p>
                  <br>
                </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header service-header" id="heading11">
              <h5 class="mb-0">
                <button class="service collapsed" type="button" data-toggle="collapse" data-target="#collapse50"
                  aria-expanded="false" aria-controls="collapse11">
                  Humane Euthanasia
                </button>
              </h5>
            </div>
            <div id="collapse50" class="collapse" aria-labelledby="heading11" data-parent="#accordionExample">
              <div class="card-body">
                <ul>
                  <p> We are here to help
                    <br>
                    As a pet owner, there is no harder decision to make than choosing the time to say goodbye.
                    <br> No one
                    knows your pet(s) better than you do, so you will know if they still have the same quality of life
                    that they are used to.
                    <br> All pets are different, so don’t be afraid to ask our team if you need
                    advice.

                    When you are ready to make an appointment, simply contact our clinic and the team will
                    guide you.
                    <br>
                    <br>

                    Can euthanasia been done at home?
                    <br>
                    Yes. We are more than happy to visit you and your pet in your home. It is a personal choice and we
                    want to do whatever is easiest for you.
                    <br>
                    <br>

                    How is euthanasia performed?
                    <br>

                    After having discussed your wishes we will ask you to sign a consent form.

                    Our vet will give a sedation injection to make sure that your beloved pet is sleeping and relaxing
                    before the final needle then he will clip a patch of fur, usually on your pet’s foreleg to locate
                    their vein. Once your pet is comfortable the vet will then carry out the injection. The injection
                    is similar to an anaesthetic so they will not feel any pain and just feel like they are falling
                    asleep. It is usually a very quick and painless procedure.

                    Many people are surprised at how peaceful euthanasia can be.

                    Occasionally when your pet is unconscious, some involuntary movements such as twitching and deep
                    breaths may occur. This is perfectly normal when your pet’s muscles relax as their body is
                    shutting down.
                    <br>
                    <br>

                    Do I have to be present whilst euthanasia is performed?
                    <br>

                    It is your choice to be present or not. Being there with your pet when he or she is put to sleep
                    can be an emotional time. You may also feel relief in knowing you can comfort your pet during
                    their last moments while you say goodbye.

                    This is not true for everyone and we fully understand if you do not want to be present with your
                    pet when the injection is given. There will be time for you and your family to say your goodbyes
                    afterwards.
                    <br>
                    <br>

                    What happens afterwards?
                    <br>

                    If you wish to have your pet cremated, there are two options for cremation.

                    A private cremation is when your pet is cremated on their own and you will receive their ashes
                    back afterwards you also can have a nice memorial paw print .

                    A general cremation is when your pet is cremated with other pets.
                  </p>
                  <br>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header service-header" id="heading13">
            <h5 class="mb-0">
              <button class="service collapsed" type="button" data-toggle="collapse" data-target="#collapse13"
                aria-expanded="false" aria-controls="collapse13">
                Surgeries
              </button>
            </h5>
          </div>
          <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordionExample">
            <div class="card-body">
              <ul>
                {{-- <div class="mbr-figure service-image"><img src="assets/images/101.jpg"></div>
                  <p>
                    TODO
                    <p> --}}


                </p>
                <div class="card">
                  <div class="card-header service-header" id="heading14">
                    <h5 class="mb-0">
                      <button class="service collapsed" type="button" data-toggle="collapse" data-target="#collapse14"
                        aria-expanded="false" aria-controls="collapse14">
                        Spay & Neuter
                      </button>
                    </h5>
                  </div>
                  {{-- <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordionExample">
                        <div class="card-body">
                          <ul>
                            Range of motion exercises are often prescribed to increase or maintain flexibility of your
                            joints and to reduce stiffness.
                            There several types of range of motion exercises often prescribed including the following
                            <li>Passive Range of Motion (PROM) Exercises</li>
                            <li>Active Assistive Range of Motion (AAROM) Exercises</li>
                            <li>Active Range of Motion (AROM) Exercises</li>
                          </ul>
                        </div>
                      </div> --}}
                </div>
                <div class="card">
                  <div class="card-header service-header" id="heading15">
                    <h5 class="mb-0">
                      <button class="service collapsed" type="button" data-toggle="collapse" data-target="#collapse15"
                        aria-expanded="false" aria-controls="collapse15">
                        All soft tissue surgeries
                      </button>
                    </h5>
                  </div>
                  <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        At our hospital we routinely surgically treat a comprehensive variety of conditions
                        involving ears, eys, mouth, gastrointestinal tract,
                        urogenital system, wound management, hormonal disorders and hernias that can affect our
                        pets.
                      </ul>
                      <br>
                      <ul>
                        Pets can suffer from widely varying clinical signs of illness such as lethargy, lumps,
                        hernias, problems passign urine etc.
                        After a thorough investigation we often conclude that a surgical procedure would be most
                        beneficial or most efficient way to treat your pet.
                        Our vets carry out a variety of surgeries with the highest standard of care and sterility
                        with the aim being to return your pet to a normal life as
                        soon as possible. We provide high standards for safe anaesthesia, intraoperative pain
                        management (reducing pain to the minimum during the procedure
                        and shortening recovery time) anaesthesia monitoring, sterile preparation and surgical
                        techniques. These factors all help to ensure your pet recovers
                        as quickly as possible and reduces the risk of surgical complications while keeping stress
                        to a minimum.
                      </ul>
                      <br>
                      <ul>
                        Our patients are closely monitored by our excellent nursing team who will care for your pet
                        from the time of their admission to their discharge.
                        They ensure the animals are comfortable, warm and well fed throughout their hospital stay.
                        Time is spent with your pet both in the kennel/cattery
                        and if appropriate walking in the outside paddock. We appreciate that a contented patient is
                        more likely to make a quick and successful recovery.
                      </ul>

                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header service-header" id="heading16">
                    <h5 class="mb-0">
                      <button class="service collapsed" type="button" data-toggle="collapse" data-target="#collapse16"
                        aria-expanded="false" aria-controls="collapse16">
                        Dentistry
                      </button>
                    </h5>
                  </div>
                  <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <p>
                          Statistics reveal good oral hygiene is fairly rare among our pets. More often than not,
                          your pet is vulnerable or already has some form of oral disease by age 2.
                          Dental disease can significantly decrease a pets quality of life as well as their life
                          expectancy. At Wilson Road Veterinary Clinic , we strive to keep your pets in excellent
                          dental health.
                          <br>
                          You may not think you need to make regular appointments for your pet’s teeth, or that
                          their dental health is good because you don’t see any visible problems. There are,
                          however, several dental problems your pet could face. If your pet is not given proper
                          dental care, it is likely he/she may develop any of the following conditions:
                          <br>
                          Gingivitis
                          Dental abscesses
                          Tooth loss
                          Pain
                          Liver disease
                          Kidney disease
                          Bone infection
                          Dental disease often results in extreme pain and feelings of sickness in your pet.
                          <br>
                          The key to good pet dental hygiene is prevention. Instituting a preventative dental
                          program can be very simple yet extremely rewarding. From special diets, treats, tooth
                          brushing to routine dental cleanings, pets may never have to experience the pain and
                          feeling of illness associated with dental disease. With access to the right knowledge,
                          skills and facilities, your pet will never have to suffer from dental ailments.

                          There are good kinds of toothpaste available for your pet.
                          <br>
                          Symptoms to Watch Out For:

                          Pets are very good at hiding the signs of dental disease. However, an observant owner can
                          sometimes detect oral disease in their cats or dogs from simply being watchful. Some of
                          the signs include:
                          <br>
                          Bad breath
                          Reluctant chewing
                          Increased salivation
                          Unusual pawing at the face
                          Bleeding gums
                          Missing and/or loose teeth
                          Increased tartar buildup
                          Swollen gums and bad breath
                          Unfortunately, pets seldom exhibit signs of dental disease, even when severe. For this
                          reason, it is important to have regular dental examinations performed by the veterinarians
                          at Wilson Road Veterinary Clinic
                          <br>
                          Good dental hygiene is just as important for pets as it is for humans. Don’t wait until
                          it’s too late to visit a pet dental clinic. Contact Us today for tips on good oral hygiene
                          for your pets, and to make an appointment with our dog dentist.
                        </p>
                      </ul>
                    </div>
                  </div>
                </div>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header service-header" id="heading11">
            <h5 class="mb-0">
              <button class="service collapsed" type="button" data-toggle="collapse" data-target="#collapse51"
                aria-expanded="false" aria-controls="collapse11">
                Heartworm, flea and tick prevention
              </button>
            </h5>
          </div>
          <div id="collapse51" class="collapse" aria-labelledby="heading11" data-parent="#accordionExample">
            <div class="card-body">
              <ul>
                <p> Flea control:
                  <br>
                  Preventing and treating a flea infestation has never been simpler or safer. There
                  are many treatment programs available.
                  <br>
                  Unfortunately, there are many over the counter products that
                  are neither safe nor effective. Please contact our hospital for recommendations.
                  <br>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header service-header" id="heading20">
            <h5 class="mb-0">
              <button class="service collapsed" type="button" data-toggle="collapse" data-target="#collapse20"
                aria-expanded="false" aria-controls="collapse20">
                Medical Services
              </button>
            </h5>
          </div>
          <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#accordionExample">
            <div class="card-body">
              <ul>
                We Love them like you do.
                <br>

                A combination of compassion, commitment and skill, the veterinarians at Wilson road veterinary clinic
                administer excellent medical care to your pets.
                <br>
                Comfort: We make sure that your pet is comfortable before administering a medical treatment.
                <br>
                Informative: We walk pet owners through any medical procedure, so they are not left in the dark,
                worried and concerned.
                <br>
                Focus: At any given point, we focus completely on the patient in front of us

                <div class="card">
                  <div class="card-header service-header" id="heading6">
                    <h5 class="mb-0">
                      <button class="service collapsed" type="button" data-toggle="collapse" data-target="#collapse130"
                        aria-expanded="false" aria-controls="collapse6">
                        Blood testing
                      </button>
                    </h5>
                  </div>
                  {{-- <div id="collapse130" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
                      <div class="card-body">
                        <ul>
                          In electrical stimulation, electrodes are placed on the surface of the skin, which can cause
                          muscles to contract.
                        </ul>
                      </div>
                    </div> --}}
                </div>
                <div class="card">
                  <div class="card-header service-header" id="heading6">
                    <h5 class="mb-0">
                      <button class="service collapsed" type="button" data-toggle="collapse" data-target="#collapse12"
                        aria-expanded="false" aria-controls="collapse6">
                        Radiology services

                      </button>
                    </h5>
                  </div>
                  {{-- <div id="collapse12" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
                      <div class="card-body">
                        <ul>
                          In electrical stimulation, electrodes are placed on the surface of the skin, which can cause
                          muscles to contract.
                        </ul>
                      </div>
                    </div> --}}
                </div>

                <div class="card">
                  <div class="card-header service-header" id="heading6">
                    <h5 class="mb-0">
                      <button class="service collapsed" type="button" data-toggle="collapse" data-target="#collapse132"
                        aria-expanded="false" aria-controls="collapse6">
                        Nutritional and behavioral consultations
                      </button>
                    </h5>
                  </div>
                  {{-- <div id="collapse132" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
                      <div class="card-body">
                        <ul>
                          In electrical stimulation, electrodes are placed on the surface of the skin, which can cause
                          muscles to contract.
                        </ul>
                      </div>
                    </div> --}}
                </div>

                <div class="card">
                  <div class="card-header service-header" id="heading6">
                    <h5 class="mb-0">
                      <button class="service collapsed" type="button" data-toggle="collapse" data-target="#collapse131"
                        aria-expanded="false" aria-controls="collapse6">
                        Microchipping
                      </button>
                    </h5>
                  </div>
                  <div id="collapse131" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        A dog/cat over 8 weeks old must be microchipped. A microchip, about the size of a grain of
                        rice,
                        can be implanted under your pet's skin. This carries a unique number which can be read with a
                        special scanner.
                        If your pet gets lost or stolen it can be checked by vets, local authorities and welfare
                        organisations throughout the country and returned quickly.

                        Ask at reception for details.
                      </ul>
                    </div>
                  </div>
                </div>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<style>
  .service {
    color: white;
    padding: 0;
    border: none;
    background: none;
    font-weight: bold;
    text-align: left;
  }

  .service-header {
    background-color: #6785c3;
  }

  .service-image {
    padding-right: 20px;
  }
</style>
@endsection