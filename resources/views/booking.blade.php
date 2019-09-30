@extends('layout')
@section('view')
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
                                                            <div>Owner Name <span class="star">*</span></div>
                                                        </label><input id="ownername" type="text"
                                                            class="form-control firstName" required
                                                            placeholder="Owner Name" name="ownername"></div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group emailAddress-group"><label
                                                            for="emailAddress">
                                                            <div>Email Address <span class="star">*</span></div>
                                                        </label><input id="emailAddress" type="email"
                                                            class="form-control emailAddress" required
                                                            placeholder="Email Address" name="email"></div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-sm-6">
                                                    <div class="form-group phoneNumber-group"><label for="phoneNumber">
                                                            <div>Phone Number <span class="star">*</span></div>
                                                        </label><input value="" id="phoneNumber" type="tel"
                                                            class="form-control phoneNumber" required
                                                            placeholder="e.g. (500) 444-3333" name="phone"></div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group emailAddress-group"><label
                                                            for="emailAddress">
                                                            <div>Pet Name<span class="star">*</span></div>
                                                        </label><input id="petName" type="text"
                                                            class="form-control emailAddress" required
                                                            placeholder="Pet Name" name="petName"></div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group phoneNumber-group"><label for="phoneNumber">
                                                            <div>Pet Age <span class="star">*</span></div>
                                                        </label><input value="" id="phoneNumber" type="tel"
                                                            class="form-control phoneNumber" required placeholder=""
                                                            name="age"></div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group emailAddress-group"><label
                                                            for="emailAddress">
                                                            <div>Pet species<span class="star">*</span></div>
                                                        </label><input id="petName" type="text"
                                                            class="form-control emailAddress" required
                                                            placeholder="Pet species" name="species"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group message-group"><label
                                                            for="message">Appointment
                                                        </label><textarea id="message" class="form-control message"
                                                            name="condition" placeholder="Eg. vaccines"></textarea>
                                                    </div>
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

@endsection