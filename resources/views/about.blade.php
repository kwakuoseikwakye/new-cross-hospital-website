@extends('layouts.app')
@section('page-content')
    <!-- ========================
               page title
            =========================== -->
    <section class="page-title page-title-layout1 bg-overlay">
        <div class="bg-img"><img src="assets/images/page-titles/1.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                    <h1 class="pagetitle__heading">Caring For The Health & Well Being Of Family.</h1>
                    <p class="pagetitle__desc">New Cross Hospital, originally founded in the year 2000 as a clinic, underwent
                        a significant transformation in 2009 when it evolved into a primary hospital, and subsequently, it
                        has further advanced its medical capabilities to become a specialized hospital.
                    </p>
                    <div class="d-flex flex-wrap align-items-center">
                        <a href="/appointment" class="btn btn__primary btn__rounded mr-30">
                            <span>Schedule Appointment</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                        <a href="/services" class="btn btn__white btn__rounded">
                            <span>Our Services</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- /.col-xl-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
              About Layout 1
            =========================== -->
    <section class="about-layout1 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heading-layout2">
                        <h3 class="heading__title mb-40">Our Mission.</h3>
                    </div><!-- /heading -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="about__Text">
                        <p class="mb-30">Our mission at Ahodwo New Cross Specialist Hospital is to provide our patients,
                          their families and our community with extraordinary healthcare service; to ensure peace of mind
                          through high quality, compassionate treatment; and to deliver care beyond their expectations
                        </p>
                        {{-- <p class="mb-30">We will work with you to develop individualised care plans, including management
                            of
                            chronic diseases. We are committed to being the region’s premier healthcare network providing
                            patient
                            centered care that inspires clinical and service excellence.</p> --}}
                        {{-- <div class="d-flex align-items-center mb-30">
                            <a href="doctors-grid.html" class="btn btn__primary btn__outlined btn__rounded mr-30">
                                Meet Our Doctors</a>
                            <img src="assets/images/about/singnture.png" alt="singnture">
                        </div> --}}
                    </div>
                </div><!-- /.col-lg-6 -->
                {{-- <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="video-banner">
                        <img src="assets/images/about/1.jpg" alt="about">
                        <a class="video__btn video__btn-white popup-video"
                            href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                            <div class="video__player">
                                <i class="fa fa-play"></i>
                            </div>
                        </a>
                    </div><!-- /.video-banner -->
                </div><!-- /.col-lg-6 --> --}}
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->

    <section class="about-layout1 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heading-layout2">
                        <h3 class="heading__title mb-40">Our Vission.</h3>
                    </div><!-- /heading -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="about__Text">
                        <p class="mb-30">To be the first choice in health care for our communities
                            . To be a leader in providing quality, compassionate patient centred care that seeks physical
                            cures and comforts as well as peace of mind and peace of heart.
                        </p>
                        {{-- <p class="mb-30">We will work with you to develop individualised care plans, including management
                            of
                            chronic diseases. We are committed to being the region’s premier healthcare network providing
                            patient
                            centered care that inspires clinical and service excellence.</p> --}}
                        {{-- <div class="d-flex align-items-center mb-30">
                            <a href="doctors-grid.html" class="btn btn__primary btn__outlined btn__rounded mr-30">
                                Meet Our Doctors</a>
                            <img src="assets/images/about/singnture.png" alt="singnture">
                        </div> --}}
                    </div>
                </div><!-- /.col-lg-6 -->
                {{-- <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="video-banner">
                        <img src="assets/images/about/1.jpg" alt="about">
                        <a class="video__btn video__btn-white popup-video"
                            href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                            <div class="video__player">
                                <i class="fa fa-play"></i>
                            </div>
                        </a>
                    </div><!-- /.video-banner -->
                </div><!-- /.col-lg-6 --> --}}
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    

    <!-- ======================
             Work Process
            ========================= -->
    {{-- <section class="work-process work-process-carousel pt-130 pb-0 bg-overlay bg-overlay-secondary">
        <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="background"></div>
        <div class="container">
            <div class="row heading-layout2">
                <div class="col-12">
                    <h2 class="heading__subtitle color-primary">Caring For The Health Of You And Your Family.</h2>
                </div><!-- /.col-12 -->
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
                    <h3 class="heading__title color-white">We Provide All Aspects Of Medical Practice For Your Whole
                        Family!
                    </h3>
                </div><!-- /.col-xl-5 -->
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 offset-xl-1">
                    <p class="heading__desc font-weight-bold color-gray mb-40">We will work with you to develop
                        individualised
                        care
                        plans, including
                        management of chronic diseases. If we cannot assist, we can provide referrals or advice about the
                        type of
                        practitioner you require. We treat all enquiries sensitively and in the strictest confidence.
                    </p>
                    <ul class="list-items list-items-layout2 list-items-light list-horizontal list-unstyled">
                        <li>Fractures and dislocations</li>
                        <li>Health Assessments</li>
                        <li>Desensitisation injections</li>
                        <li>High Quality Care</li>
                        <li>Desensitisation injections</li>
                    </ul>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="carousel-container mt-90">
                        <div class="slick-carousel"
                            data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "infinite":false, "arrows": false, "dots": false, "responsive": [{"breakpoint": 1200, "settings": {"slidesToShow": 3}}, {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                            <!-- process item #1 -->
                            <div class="process-item">
                                <span class="process__number">01</span>
                                <div class="process__icon">
                                    <i class="icon-health-report"></i>
                                </div><!-- /.process__icon -->
                                <h4 class="process__title">Fill In Our Medical Application</h4>
                                <p class="process__desc">Medcity offers low-cost health coverage for adults with limited
                                    income, you
                                    can
                                    enroll.</p>
                                <a href="#" class="btn btn__secondary btn__link">
                                    <span>Doctors’ Timetable</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.process-item -->
                            <!-- process-item #2 -->
                            <div class="process-item">
                                <span class="process__number">02</span>
                                <div class="process__icon">
                                    <i class="icon-dna"></i>
                                </div><!-- /.process__icon -->
                                <h4 class="process__title">Review Your Family Medical History</h4>
                                <p class="process__desc">Regular health exams can help find all the problems, also can find
                                    it early
                                    chances.</p>
                                <a href="#" class="btn btn__secondary btn__link">
                                    <span>Start A Check Up</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.process-item -->
                            <!-- process-item #3 -->
                            <div class="process-item">
                                <span class="process__number">03</span>
                                <div class="process__icon">
                                    <i class="icon-medicine"></i>
                                </div><!-- /.process__icon -->
                                <h4 class="process__title">Choose Between Our Care Programs</h4>
                                <p class="process__desc">We have protocols to protect our patients while continuing to
                                    provide
                                    necessary
                                    care.</p>
                                <a href="#" class="btn btn__secondary btn__link">
                                    <span>Explore Programs</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.process-item -->
                            <!-- process-item #4 -->
                            <div class="process-item">
                                <span class="process__number">04</span>
                                <div class="process__icon">
                                    <i class="icon-stethoscope"></i>
                                </div><!-- /.process__icon -->
                                <h4 class="process__title">Introduce You To Highly Qualified Doctors</h4>
                                <p class="process__desc">Our administration and support staff have exceptional skills and
                                    trained to
                                    assist you. </p>
                                <a href="#" class="btn btn__secondary btn__link">
                                    <span>Meet Our Doctors</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.process-item -->
                            <!-- process-item #5 -->
                            <div class="process-item">
                                <span class="process__number">05</span>
                                <div class="process__icon">
                                    <i class="icon-head"></i>
                                </div><!-- /.process__icon -->
                                <h4 class="process__title">Your custom Next process</h4>
                                <p class="process__desc">Our administration and support staff have exceptional skills to
                                    assist you.
                                </p>
                                <a href="#" class="btn btn__secondary btn__link">
                                    <span>Meet Our Doctors</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.process-item -->
                        </div><!-- /.carousel -->
                    </div>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="cta bg-primary">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <img src="assets/images/icons/alert.png" class="cta__img" alt="alert">
                    </div><!-- /.col-lg-2 -->
                    <div class="col-sm-12 col-md-7 col-lg-7">
                        <h4 class="cta__title">True Healthcare For Your Family!</h4>
                        <p class="cta__desc">Serve the community by improving the quality of life through better health. We
                            have
                            put protocols to protect our patients and staff while continuing to provide medically necessary
                            care.
                        </p>
                    </div><!-- /.col-lg-7 -->
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <a href="appointment.html" class="btn btn__secondary btn__secondary-style2 btn__rounded mr-30">
                            <span>Healthcare Programs</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.cta -->
    </section><!-- /.Work Process --> --}}

    <!-- ======================
              Team
            ========================= -->
    <section class="team-layout2 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-40">
                        <h3 class="heading__title">Meet Our Doctors</h3>
                        <p class="heading__desc">Our administration and support staff all have exceptional people skills
                            and
                            trained to assist you with all medical enquiries.
                        </p>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="slick-carousel"
                        data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                        <!-- Member #1 -->
                        <div class="member">
                            <div class="member__img">
                                <img src="assets/images/team/1.jpg" alt="member img">
                            </div><!-- /.member-img -->
                            <div class="member__info">
                                <h5 class="member__name"><a href="doctors-single-doctor1.html">Dr Adae- Aboagye
                                    </a></h5>
                                <p class="member__job">Medical Director</p>
                                <p class="member__desc">

                                </p>
                                <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                    {{-- <a href="doctors-single-doctor1.html"
                                        class="btn btn__secondary btn__link btn__rounded">
                                        <span>Read More</span>
                                        <i class="icon-arrow-right"></i>
                                    </a> --}}
                                    <ul class="social-icons list-unstyled mb-0">
                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                                    </ul><!-- /.social-icons -->
                                </div>
                            </div><!-- /.member-info -->
                        </div><!-- /.member -->
                        <!-- Member #2 -->
                        <div class="member">
                            <div class="member__img">
                                <img src="assets/images/team/2.jpg" alt="member img">
                            </div><!-- /.member-img -->
                            <div class="member__info">
                                <h5 class="member__name"><a href="doctors-single-doctor1.html">Ms Rita Boakye</a></h5>
                                <p class="member__job">Theatre manager</p>
                                <p class="member__desc"></p>
                                <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                    {{-- <a href="doctors-single-doctor1.html"
                                        class="btn btn__secondary btn__link btn__rounded">
                                        <span>Read More</span>
                                        <i class="icon-arrow-right"></i>
                                    </a> --}}
                                    <ul class="social-icons list-unstyled mb-0">
                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                                    </ul><!-- /.social-icons -->
                                </div>
                            </div><!-- /.member-info -->
                        </div><!-- /.member -->
                        <!-- Member #3 -->
                        <div class="member">
                            <div class="member__img">
                                <img src="assets/images/team/3.jpg" alt="member img">
                            </div><!-- /.member-img -->
                            <div class="member__info">
                                <h5 class="member__name"><a href="doctors-single-doctor1.html">Mavis Sellassie
                                        Kportufe</a></h5>
                                <p class="member__job">Administrator</p>
                                <p class="member__desc">
                                </p>
                                <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                    {{-- <a href="doctors-single-doctor1.html"
                                        class="btn btn__secondary btn__link btn__rounded">
                                        <span>Read More</span>
                                        <i class="icon-arrow-right"></i>
                                    </a> --}}
                                    <ul class="social-icons list-unstyled mb-0">
                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                                    </ul><!-- /.social-icons -->
                                </div>
                            </div><!-- /.member-info -->
                        </div><!-- /.member -->
                        <!-- Member #4 -->
                        <div class="member">
                            <div class="member__img">
                                <img src="assets/images/team/4.jpg" alt="member img">
                            </div><!-- /.member-img -->
                            <div class="member__info">
                                <h5 class="member__name"><a href="doctors-single-doctor1.html">Dr Adae-Aboagye</a></h5>
                                <p class="member__job">Plastic Surgeons</p>
                                <p class="member__desc">

                                </p>
                                <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                    {{-- <a href="doctors-single-doctor1.html"
                                        class="btn btn__secondary btn__link btn__rounded">
                                        <span>Read More</span>
                                        <i class="icon-arrow-right"></i>
                                    </a> --}}
                                    <ul class="social-icons list-unstyled mb-0">
                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                                    </ul><!-- /.social-icons -->
                                </div>
                            </div><!-- /.member-info -->
                        </div><!-- /.member -->
                        <!-- Member #5 -->
                        <div class="member">
                            <div class="member__img">
                                <img src="assets/images/team/5.jpg" alt="member img">
                            </div><!-- /.member-img -->
                            <div class="member__info">
                                <h5 class="member__name"><a href="doctors-single-doctor1.html">Dr Emil Tano</a></h5>
                                <p class="member__job">Plastic Surgeons</p>
                                <p class="member__desc">

                                </p>
                                <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                    {{-- <a href="doctors-single-doctor1.html"
                                        class="btn btn__secondary btn__link btn__rounded">
                                        <span>Read More</span>
                                        <i class="icon-arrow-right"></i>
                                    </a> --}}
                                    <ul class="social-icons list-unstyled mb-0">
                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                                    </ul><!-- /.social-icons -->
                                </div>
                            </div><!-- /.member-info -->
                        </div><!-- /.member -->
                        <!-- Member #6 -->
                        <div class="member">
                            <div class="member__img">
                                <img src="assets/images/team/6.jpg" alt="member img">
                            </div><!-- /.member-img -->
                            <div class="member__info">
                                <h5 class="member__name"><a href="doctors-single-doctor1.html">Dr Nanaesi Abaidoo
                                    </a></h5>
                                <p class="member__job">Gynaecologist/Obstetrician </p>
                                <p class="member__desc">

                                </p>
                                <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                    {{-- <a href="doctors-single-doctor1.html"
                                        class="btn btn__secondary btn__link btn__rounded">
                                        <span>Read More</span>
                                        <i class="icon-arrow-right"></i>
                                    </a> --}}
                                    <ul class="social-icons list-unstyled mb-0">
                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                                    </ul><!-- /.social-icons -->
                                </div>
                            </div><!-- /.member-info -->
                        </div><!-- /.member -->
                    </div><!-- /.carousel -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Team -->

    <!-- =========================
              Testimonials layout 1
              =========================  -->
    {{-- <section class="testimonials-layout1 pt-130 pb-80">
        <div class="container">
            <div class="testimonials-wrapper">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-5">
                        <div class="heading-layout2">
                            <h3 class="heading__title">Inspiring Stories!</h3>
                        </div><!-- /.heading -->
                    </div><!-- /.col-lg-7 -->
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <div class="slider-nav mb-60">
                            <div class="testimonial__meta">
                                <div class="testimonial__thmb">
                                    <img src="assets/images/testimonials/thumbs/1.png" alt="author thumb">
                                </div><!-- /.testimonial-thumb -->
                                <div>
                                    <h4 class="testimonial__meta-title">Sami Wade</h4>
                                    <p class="testimonial__meta-desc">7oroof Inc</p>
                                </div>
                            </div><!-- /.testimonial-meta -->
                            <div class="testimonial__meta">
                                <div class="testimonial__thmb">
                                    <img src="assets/images/testimonials/thumbs/2.png" alt="author thumb">
                                </div><!-- /.testimonial-thumb -->
                                <div>
                                    <h4 class="testimonial__meta-title">Ahmed</h4>
                                    <p class="testimonial__meta-desc">Web Inc</p>
                                </div>
                            </div><!-- /.testimonial-meta -->
                            <div class="testimonial__meta">
                                <div class="testimonial__thmb">
                                    <img src="assets/images/testimonials/thumbs/3.png" alt="author thumb">
                                </div><!-- /.testimonial-thumb -->
                                <div>
                                    <h4 class="testimonial__meta-title">Sonia Blake</h4>
                                    <p class="testimonial__meta-desc">Web Inc</p>
                                </div>
                            </div><!-- /.testimonial-meta -->
                        </div><!-- /.slider-nav -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <div class="slider-with-navs">
                            <!-- Testimonial #1 -->
                            <div class="testimonial-item">
                                <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who
                                    come from a
                                    range of backgrounds and bring with them a diversity of skills and special interests.
                                    They also have
                                    registered nurses on staff who are available to triage any urgent matters, and the
                                    administration
                                    and support staff all have exceptional people skills”
                                </h3>
                            </div><!-- /. testimonial-item -->
                            <!-- Testimonial #2 -->
                            <div class="testimonial-item">
                                <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who
                                    come from a
                                    range of backgrounds and bring with them a diversity of skills and special interests.
                                    They also have
                                    registered nurses on staff who are available to triage any urgent matters, and the
                                    administration
                                    and support staff all have exceptional people skills”
                                </h3>
                            </div><!-- /. testimonial-item -->
                            <!-- Testimonial #3 -->
                            <div class="testimonial-item">
                                <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who
                                    come from a
                                    range of backgrounds and bring with them a diversity of skills and special interests.
                                    They also have
                                    registered nurses on staff who are available to triage any urgent matters, and the
                                    administration
                                    and support staff all have exceptional people skills”
                                </h3>
                            </div><!-- /. testimonial-item -->
                        </div><!-- /.slick-carousel -->
                        <div class="testimonials__rating">
                            <div class="testimonials__rating-inner d-flex align-items-center">
                                <span class="total__rate">4.9</span>
                                <div>
                                    <span class="overall__rate">Zocdoc Overall Rating</span>
                                    <span>, based on 7541 reviews.</span>
                                </div>
                            </div><!-- /.testimonials__rating-inner -->
                        </div><!-- /.testimonials__rating -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.testimonials-wrapper -->
        </div><!-- /.container -->
    </section><!-- /.testimonials layout 1 --> --}}

    <!-- ======================
              Blog Grid
            ========================= -->
    {{-- <section class="blog-grid pb-50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h2 class="heading__subtitle">Resource Library</h2>
              <h3 class="heading__title">Recent Articles</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Post Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="assets/images/blog/grid/1.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta-cat">
                  <a href="#">Mental Health</a>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex">
                  <span class="post__meta-date">Jan 30, 2022</span>
                  <a class="post__meta-author" href="#">Martin King</a>
                </div>
                <h4 class="post__title"><a href="#">6 Tips to Protect Your Mental Health When You’re Sick</a></h4>

                <p class="post__desc">It’s normal to feel anxiety, worry and grief any time you’re diagnosed with a
                  condition that’s certainly true if you test positive for COVID-19, or are presumed to be positive...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link btn__rounded">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="assets/images/blog/grid/2.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta-cat">
                  <a href="#">Infectious</a><a href="#">Tips</a>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex">
                  <span class="post__meta-date">Jan 30, 2022</span>
                  <a class="post__meta-author" href="#">John Ezak</a>
                </div>
                <h4 class="post__title"><a href="#">Unsure About Wearing a Face Mask? Here’s How and Why</a></h4>
                <p class="post__desc">That means that you should still be following any shelter-in-place orders in your
                  community. But when you’re venturing out to the grocery store, pharmacy or hospital..
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link btn__rounded">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="assets/images/blog/grid/3.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta-cat">
                  <a href="#">Life Style</a><a href="#">Nutrition</a>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex">
                  <span class="post__meta-date">Jan 28, 2022</span>
                  <a class="post__meta-author" href="#">Saul Wade</a>
                </div>
                <h4 class="post__title"><a href="#">Tips for Eating Healthy When You’re Working From Home </a></h4>

                <p class="post__desc">It’s normal to feel anxiety, worry and grief any time you’re diagnosed with a
                  condition that’s certainly true if you test positive for COVID-19, or are presumed to be positive...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link btn__rounded">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section> --}}
    <!-- /.blog Grid -->
@endsection
