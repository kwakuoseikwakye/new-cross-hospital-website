@extends('layouts.app')
@section('page-content')
    <!-- ========================
                                       page title
                                    =========================== -->
    <section class="page-title page-title-layout1 bg-overlay">
        <div class="bg-img"><img src="assets/images/page-titles/2.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                    <span class="pagetitle__subheading">Caring For The Health Of You And Your Family.</span>
                    <h1 class="pagetitle__heading">We Provide All Aspects Of Medical Practice For Your Whole Family!</h1>
                    <p class="pagetitle__desc">At New Cross Hospital, your health and well-being are our top priorities. Our
                        dedicated team of healthcare professionals is committed to providing exceptional medical care in a
                        warm and welcoming environment. Whether you require general consultations, specialized services, or
                        the expertise of our renowned Sweets Surgical Sculpt subsidiary, we are here to serve you with
                        compassion and excellence.
                    </p>
                    <div class="d-flex flex-wrap align-items-center">
                        <a href="/appointment" class="btn btn__secondary btn__rounded mr-30">
                            <span>Schedule Appointment</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                        <a href="/about" class="btn btn__secondary btn__outlined btn__rounded">
                            <span>More About Us</span>
                        </a>
                    </div>
                </div><!-- /.col-xl-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
                                        Services Layout 1
                                    =========================== -->
    <section class="services-layout1 pt-130">
        <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-60">
                        <h2 class="heading__subtitle">The Best Medical And General Practice Care!</h2>
                        <h3 class="heading__title">Providing Medical Care For Our Community.</h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <!-- service item #1 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__icon">
                            <i class="icon-emergency"></i>
                            <i class="icon-emergency"></i>
                        </div><!-- /.service__icon -->
                        <div class="service__content">
                            <h4 class="service__title">General Consultations</h4>
                            <p class="service__desc">
                                At New Cross Hospital, we offer comprehensive general consultations for patients of all
                                ages. Whether you're seeking routine check-ups, management of chronic conditions, or a
                                second opinion, our experienced physicians are here to provide you with personalized care
                                and treatment plans tailored to your unique needs
                            </p>
                            {{-- <ul class="list-items list-items-layout1 list-unstyled">
                                <li>Neurocritical Care</li>
                                <li>Neuro Oncology</li>
                                <li>Geriatric Neurology</li>
                            </ul> --}}
                            {{-- <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a> --}}
                        </div><!-- /.service__content -->
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
                <!-- service item #2 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__icon">
                            <i class="icon-scissors"></i>
                            <i class="icon-scissors"></i>
                        </div><!-- /.service__icon -->
                        <div class="service__content">
                            <h4 class="service__title">Sweets Surgical Sculpt - Plastic and Reconstructive Surgery</h4>
                            <p class="service__desc">
                                Sweets Surgical Sculpt is our subsidiary service specializing in plastic and reconstructive
                                surgery. Our board-certified plastic surgeons are dedicated to helping you achieve your
                                aesthetic goals and enhancing your self-confidence. Whether you're considering cosmetic
                                enhancements or require reconstructive surgery after an injury or illness, our team is here
                                to guide you through the process.
                            </p>
                            {{-- <ul class="list-items list-items-layout1 list-unstyled">
                                <li>Neurocritical Care</li>
                                <li>Neuro Oncology</li>
                                <li>Geriatric Neurology</li>
                            </ul>
                            <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a> --}}
                        </div><!-- /.service__content -->
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
                <!-- service item #3 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__icon">
                            <i class="icon-bandage"></i>
                            <i class="icon-bandage"></i>
                        </div><!-- /.service__icon -->
                        <div class="service__content">
                            <h4 class="service__title">Wound Dressing</h4>
                            <p class="service__desc">Proper wound care is crucial for a swift and successful recovery. Our
                                wound dressing services are designed to provide meticulous care to promote healing and
                                prevent complications. Whether you have a minor injury or require advanced wound management,
                                our team is here to assist you on your path to recovery.
                            </p>
                            {{-- <ul class="list-items list-items-layout1 list-unstyled">
                                <li>Surgical Pathology</li>
                                <li>Histopathology</li>
                                <li>Cytopathology </li>
                            </ul>
                            <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a> --}}
                        </div><!-- /.service__content -->
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
                <!-- service item #4 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__icon">
                            <i class="icon-dropper"></i>
                            <i class="icon-dropper"></i>
                        </div><!-- /.service__icon -->
                        <div class="service__content">
                            <h4 class="service__title">Ear, Nose, and Throat (ENT)</h4>
                            <p class="service__desc">
                                ENT conditions can significantly impact your quality of life. Our ENT specialists are
                                equipped to diagnose and treat a wide range of ear, nose, and throat disorders. From hearing
                                problems and sinus issues to voice disorders and sleep apnea, we offer advanced ENT care to
                                improve your well-being.
                            </p>
                            {{-- <ul class="list-items list-items-layout1 list-unstyled">
                                <li>Newborn Care</li>
                                <li>Umbilical Cord Appearance </li>
                                <li>Repositioning Techniques</li>
                            </ul>
                            <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a> --}}
                        </div><!-- /.service__content -->
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
                <!-- service item #5 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__icon">
                            <i class="icon-heart3"></i>
                            <i class="icon-heart3"></i>
                        </div><!-- /.service__icon -->
                        <div class="service__content">
                            <h4 class="service__title">Pediatric Clinic</h4>
                            <p class="service__desc">We understand the unique needs of our youngest patients and their
                                families. Our pediatric surgeons are highly skilled in diagnosing and treating a wide range
                                of pediatric surgical conditions, ensuring your child receives the best possible care in a
                                child-friendly environment.
                            </p>
                            {{-- <ul class="list-items list-items-layout1 list-unstyled">
                                <li>Clinical laboratory</li>
                                <li>Research Analyst</li>
                                <li>Quality Assurance</li>
                            </ul> --}}
                            {{-- <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a> --}}
                        </div><!-- /.service__content -->
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
                <!-- service item #6 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__icon">
                            <i class="icon-heart2"></i>
                            <i class="icon-heart2"></i>
                        </div><!-- /.service__icon -->
                        <div class="service__content">
                            <h4 class="service__title">Obstetrics & Gynecology (Obs & Gynea)</h4>
                            <p class="service__desc">
                                Our Obstetrics and Gynecology department is committed to providing comprehensive care for
                                women at all stages of life. From prenatal care to menopause management, our skilled team of
                                OB/GYN specialists offers a wide range of services to support your reproductive health and
                                wellness.
                            </p>
                            {{-- <ul class="list-items list-items-layout1 list-unstyled">
                                <li>Macular degeneration</li>
                                <li>Diabetic retinopathy</li>
                                <li>Excessive tearing</li>
                            </ul> --}}
                            {{-- <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a> --}}
                        </div><!-- /.service__content -->
                    </div><!-- /.service-item -->
                </div>
                
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__icon">
                            <i class="icon-broken-leg"></i>
                            <i class="icon-broken-leg"></i>
                        </div><!-- /.service__icon -->
                        <div class="service__content">
                            <h4 class="service__title">Physiotherapy</h4>
                            <p class="service__desc">
                                At New Cross Hospital, we understand the importance of physical
                                well-being in your overall health. Our dedicated team of experienced physiotherapists is
                                here to provide you with personalized care and effective treatments to help you regain
                                your mobility and improve your quality of life.
                            </p>
                            {{-- <ul class="list-items list-items-layout1 list-unstyled">
                                <li>Macular degeneration</li>
                                <li>Diabetic retinopathy</li>
                                <li>Excessive tearing</li>
                            </ul> --}}
                            {{-- <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a> --}}
                        </div><!-- /.service__content -->
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Services Layout 1 -->

    <!-- ======================
                                    Features Layout 2
                                    ========================= -->
    {{-- <section class="features-layout2 pt-130 mb-5 bg-overlay bg-overlay-primary">
        <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-1">
                    <div class="heading__layout2 mb-50">
                        <h3 class="heading__title color-white">Medcity Has Touched The Lives Of Patients & Providing Care
                            for The
                            Sickest In Our Community.</h3>
                    </div>
                </div><!-- /col-lg-5 -->
            </div><!-- /.row -->
            <div class="row mb-100">
                <div class="col-sm-3 col-md-3 col-lg-1 offset-lg-5">
                    <div class="heading__icon">
                        <i class="icon-insurance"></i>
                    </div>
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-9 col-md-9 col-lg-6">
                    <p class="heading__desc font-weight-bold color-white mb-30">Medcity has been present in Europe since
                        1990,
                        offering innovative
                        solutions, specializing in medical services for treatment of medical infrastructure. With over 100
                        professionals actively participates in numerous initiatives aimed at creating sustainable change for
                        patients!
                    </p>
                    <a href="#" class="btn btn__white btn__link">
                        <i class="icon-arrow-right icon-filled"></i>
                        <span>Our Core Values</span>
                    </a>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <!-- Feature item #1 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature__img">
                            <img src="assets/images/services/1.jpg" alt="service" loading="lazy">
                        </div><!-- /.feature__img -->
                        <div class="feature__content">
                            <div class="feature__icon">
                                <i class="icon-heart"></i>
                            </div>
                            <h4 class="feature__title">Medical Advices & Check Ups</h4>
                        </div><!-- /.feature__content -->
                        <a href="#" class="btn__link">
                            <i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-3 -->
                <!-- Feature item #2 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature__img">
                            <img src="assets/images/services/2.jpg" alt="service" loading="lazy">
                        </div><!-- /.feature__img -->
                        <div class="feature__content">
                            <div class="feature__icon">
                                <i class="icon-doctor"></i>
                            </div>
                            <h4 class="feature__title">Trusted Medical Treatment </h4>
                        </div><!-- /.feature__content -->
                        <a href="#" class="btn__link">
                            <i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-3 -->
                <!-- Feature item #3 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature__img">
                            <img src="assets/images/services/3.jpg" alt="service" loading="lazy">
                        </div><!-- /.feature__img -->
                        <div class="feature__content">
                            <div class="feature__icon">
                                <i class="icon-ambulance"></i>
                            </div>
                            <h4 class="feature__title">Emergency Help Available 24/7</h4>
                        </div><!-- /.feature__content -->
                        <a href="#" class="btn__link">
                            <i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-3 -->
                <!-- Feature item #4 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature__img">
                            <img src="assets/images/services/4.jpg" alt="service" loading="lazy">
                        </div><!-- /.feature__img -->
                        <div class="feature__content">
                            <div class="feature__icon">
                                <i class="icon-drugs"></i>
                            </div>
                            <h4 class="feature__title">Medical Research Professionals </h4>
                        </div><!-- /.feature__content -->
                        <a href="#" class="btn__link">
                            <i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-3 -->
                <!-- Feature item #5 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature__img">
                            <img src="assets/images/services/5.jpg" alt="service" loading="lazy">
                        </div><!-- /.feature__img -->
                        <div class="feature__content">
                            <div class="feature__icon">
                                <i class="icon-first-aid-kit"></i>
                            </div>
                            <h4 class="feature__title">Only Qualified Doctors</h4>
                        </div><!-- /.feature__content -->
                        <a href="#" class="btn__link">
                            <i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-3 -->
                <!-- Feature item #6 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature__img">
                            <img src="assets/images/services/6.jpg" alt="service" loading="lazy">
                        </div><!-- /.feature__img -->
                        <div class="feature__content">
                            <div class="feature__icon">
                                <i class="icon-hospital"></i>
                            </div>
                            <h4 class="feature__title">Cutting Edge Facility</h4>
                        </div><!-- /.feature__content -->
                        <a href="#" class="btn__link">
                            <i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-3 -->
                <!-- Feature item #7 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature__img">
                            <img src="assets/images/services/7.jpg" alt="service" loading="lazy">
                        </div><!-- /.feature__img -->
                        <div class="feature__content">
                            <div class="feature__icon">
                                <i class="icon-expenses"></i>
                            </div>
                            <h4 class="feature__title">Affordable Prices For All Patients</h4>
                        </div><!-- /.feature__content -->
                        <a href="#" class="btn__link">
                            <i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-3 -->
                <!-- Feature item #8 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature__img">
                            <img src="assets/images/services/8.jpg" alt="service" loading="lazy">
                        </div><!-- /.feature__img -->
                        <div class="feature__content">
                            <div class="feature__icon">
                                <i class="icon-bandage"></i>
                            </div>
                            <h4 class="feature__title">Quality Care For Every Patient</h4>
                        </div><!-- /.feature__content -->
                        <a href="#" class="btn__link">
                            <i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12 col-lg-6 offset-lg-3 text-center">
                    <p class="font-weight-bold color-gray mb-0">We hope you will allow us to care for you and strive to be
                        the
                        first and best choice for healthcare.
                        <a href="#" class="color-secondary">
                            <span>Contact Us For More Information</span> <i class="icon-arrow-right"></i>
                        </a>
                    </p>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Features Layout 2 --> --}}
@endsection
