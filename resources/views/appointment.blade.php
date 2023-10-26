@extends('layouts.app')
@section('page-content')
    <!-- ========================
                                                                       page title
                                                                    =========================== -->
    <section class="page-title page-title-layout4 bg-overlay text-center">
        <div class="bg-img"><img src="assets/images/page-titles/5.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
                    <h1 class="pagetitle__heading">Schedule an Appointment</h1>
                    <p class="pagetitle__desc">At New Cross Hospital, we believe in proactive healthcare. Don't wait until
                        your condition worsens. Schedule an appointment today, and let us be your trusted healthcare partner
                        on your journey to wellness. Your health is our priority, and we look forward to serving you with
                        the highest level of care and expertise
                    </p>
                    <a href="/appointment" class="btn btn__secondary btn__outlined btn__rounded">
                        <span>Find A Doctor</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->



    <!-- ==========================
                                                                        contact layout 2
                                                                    =========================== -->
    <section class="contact-layout2 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-panel d-flex flex-wrap">

                        <form class="contact-panel__form" id="appointment-form">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">Book An Appointment</h4>
                                    <p class="contact-panel__desc mb-30">Please feel welcome to contact our friendly
                                        reception staff
                                        with any general or medical enquiry. Our doctors will receive or return any urgent
                                        calls.
                                    </p>
                                </div>
                                {{-- <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-widget form-group-icon"></i>
                                        <select class="form-control">
                                            <option value="0">Choose Clinic</option>
                                            <option value="1">Pathology Clinic</option>
                                            <option value="2">Pathology Clinic</option>
                                        </select>
                                    </div>
                                </div><!-- /.col-lg-6 --> --}}
                                {{-- <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-user form-group-icon"></i>
                                        <select class="form-control">
                                            <option value="0">Choose Doctor</option>
                                            <option value="1">Ahmed Abdallah</option>
                                            <option value="2">Mahmoud Begha</option>
                                        </select>
                                    </div>
                                </div><!-- /.col-lg-6 --> --}}
                                <div class="col-sm-12 col-md-12 col-lg-12 mb-4">
                                    <p id="res-msg"></p>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-news form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Name" id="contact-name"
                                            name="name" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-email form-group-icon"></i>
                                        <input type="email" class="form-control" placeholder="email" id="contact-email"
                                            name="email" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-phone form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                                            name="phone" required>
                                    </div>
                                </div><!-- /.col-lg-4 -->

                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group form-group-date">
                                        <i class="icon-clock form-group-icon"></i>
                                        <input type="datetime-local" class="form-control" id="contact-time" name="date"
                                            required>
                                    </div>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="icon-news form-group-icon"></i>
                                        <select class="form-control" name="services">
                                            <option value="001">Out Patient Department (OPD) Consultation</option>
                                            <option value="002">Antenatal Consultation</option>
                                            <option value="003">Specialist Consultation</option>
                                            <option value="004">Plastic and reconstructive consultation</option>
                                            <option value="005">Aesthetic consultation</option>
                                            <option value="006">Physiotherapy consultation</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="icon-alert form-group-icon"></i>
                                        <textarea class="form-control" placeholder="Message" id="contact-message" name="message"></textarea>
                                    </div>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-12">
                                    <button type="submit"
                                        class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                        <span id="submit-btn">Book Appointment</span> <i class="icon-arrow-right"></i>
                                    </button>
                                    <div class="contact-result"></div>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                        <div
                            class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                            <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="banner"></div>
                            <div>
                                <h4 class="contact-panel__title color-white">Quick Contacts</h4>
                                <p class="contact-panel__desc font-weight-bold color-white">
                                    Contact us at 0322006348 or info@anewcrosshospital.org to book your appointment or for
                                    any
                                    inquiries. We are here to serve you and your family's healthcare needs.
                                </p>
                            </div>
                            <div>
                                <ul class="contact__list list-unstyled mb-30">
                                    <li>
                                        <i class="icon-phone"></i><a href="tel:+5565454117">Emergency Line: 0322006348</a>
                                    </li>
                                    <li>
                                        <i class="icon-location"></i><a href="#">Location: Ahodwo, opposite royal
                                            lamerta hotel.</a>
                                    </li>
                                    <li>
                                        <i class="icon-clock"></i><a href="/contact">Mon - Sun: 8:00 am - 4:00 pm</a>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn__white btn__rounded btn__outlined">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 2 -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Assuming you have a form with id="myForm"
            var form = document.getElementById('appointment-form');
            var msg = document.getElementById('res-msg');
            var submitBtn = document.getElementById('submit-btn');
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Custom code to handle the form submission
                // For example, you can gather form data and send it via AJAX
                var formData = new FormData(form);
                submitBtn.innerText = null;
                submitBtn.innerText = "Processing.....";
                submitBtn.disabled = true;
                // Example of sending data via fetch API (AJAX)
                fetch('/book_appointment', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        submitBtn.innerText = null;
                        submitBtn.innerText = "Book Appointment";
                        submitBtn.disabled = false;
                        if (!data.status) {
                            msg.innerHTML = null;
                            msg.innerHTML = `<span class="alert alert-danger ">Booking failed < /span>`
                        };

                        setTimeout(() => {
                            window.location.href = `${data.data.checkout_url}`;
                        }, 1000);

                    })
                    .catch(error => {
                        // Handle errors
                    });
            });


            window.onload = function() {
                const urlParams = new URLSearchParams(window.location.search);
    
                // Get individual parameter values
                const param1Value = urlParams.get('code'); // Returns "value1"
                const param3Exists = urlParams.has('code');
                if (!param3Exists) {
                    return;
                }
                fetch(`/verify_payment/${param1Value}`, {
                        method: 'GET',
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (!data.status) {
                            return;
                        };
                        
                        msg.innerHTML = null;
                        msg.innerHTML =
                            `<span class="alert alert-success ">Appointment booked successfully </span>`;
    
                        setTimeout(() => {
                            msg.innerHTML = null;
                        }, 10000);
                    });

            }

        });
    </script>
@endsection
