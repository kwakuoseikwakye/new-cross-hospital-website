@extends('layouts.app')
@section('page-content')
    <!-- =========================
                            Google Map
                    =========================-->
    <section class="google-map py-0">
        <iframe frameborder="0" height="500" width="100%"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1981.459861700083!2d-1.6233639!3d6.6568716!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb912b076b678d%3A0xa31766a94cc835a5!2sAhodwo%20New%20Cross%20Hospital!5e0!3m2!1sen!2sgh!4v1697959827588!5m2!1sen!2sgh"
            width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        {{-- <iframe frameborder="0" height="500" width="100%"
            src="https://www.google.com/maps/place/Ahodwo+New+Cross+Hospital/@6.6568716,-1.6233639,18z/data=!4m14!1m7!3m6!1s0xfdb912b076b678d:0xa31766a94cc835a5!2sAhodwo+New+Cross+Hospital!8m2!3d6.6567917!4d-1.622063!16s%2Fg%2F11n6w1nd0l!3m5!1s0xfdb912b076b678d:0xa31766a94cc835a5!8m2!3d6.6567917!4d-1.622063!16s%2Fg%2F11n6w1nd0l?entry=ttu"></iframe> --}}
    </section><!-- /.GoogleMap -->

    <!-- ==========================
                        contact layout 1
                    =========================== -->
    <section class="contact-layout1 pt-0 mt--100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-panel d-flex flex-wrap">
                        <form class="contact-panel__form" method="post" name="submit-form" id="submit-form"
                            action="{{ url('submit-form') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">How Can We Help? </h4>
                                    <p class="contact-panel__desc mb-30">Contact us at 0322006348 or info@anewcrosshospital.org to
                                        book your appointment or for any inquiries. We are here to serve you and your
                                        family's healthcare needs.
                                    </p>
                                </div>
                                @if (session('status'))
                                    <div class="col-sm-12 col-md-12 col-lg-12 alert alert-success">
                                        Submitted
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-user form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Name" id="contact-name"
                                            name="name" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-email form-group-icon"></i>
                                        <input type="email" class="form-control" placeholder="Email" id="contact-email"
                                            name="email" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <i class="icon-phone form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                                            name="phone" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                {{-- <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-news form-group-icon"></i>
                                        <select class="form-control">
                                            <option value="0">Subject</option>
                                            <option value="1">Subject 1</option>
                                            <option value="2">Subject 1</option>
                                        </select>
                                    </div>
                                </div><!-- /.col-lg-6 --> --}}
                                <div class="col-12">
                                    <div class="form-group">
                                        <i class="icon-alert form-group-icon"></i>
                                        <textarea class="form-control" placeholder="Message" id="contact-message" name="message"></textarea>
                                    </div>
                                    <button type="submit"
                                        class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                        <span>Submit Request</span> <i class="icon-arrow-right"></i>
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
                                <p class="contact-panel__desc font-weight-bold color-white mb-30">Contact us at 0322006348
                                    or info@anewcrosshospital.org to book your appointment or for any inquiries. We are here to
                                    serve you and your family's healthcare needs.
                                </p>
                            </div>
                            <div>
                                <ul class="contact__list list-unstyled mb-30">
                                    <li>
                                        <i class="icon-phone"></i><a href="tel:0322006348">Emergency Line: 0322006348</a>
                                    </li>
                                    <li>
                                        <i class="icon-location"></i><a href="#">Location: Ahodwo, opposite royal
                                            lamerta hotel.</a>
                                    </li>
                                    <li>
                                        <i class="icon-clock"></i><a href="#">Mon - Fri: 8:00 am - 4:00 pm</a>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn__white btn__rounded btn__outlined">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->
    <!-- /.gallery 2 -->
@endsection
