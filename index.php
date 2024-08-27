<!DOCTYPE html>
<html lang="en" dir="">

<head>

    <!-- Title -->
    <title>Home | White Rose Cleaners</title>

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>

    <style>
        /* Hero Overlay */
        .d-lg-flex.position-relative {
            position: relative;
            background-image: url('assets/img/wrc/hero.jpg');
            background-size: cover;
            background-position: center;
            height: 80vh;
        }

        .d-lg-flex.position-relative::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .container.d-lg-flex.align-items-lg-center.justify-content-center {
            position: relative;
            z-index: 2;
        }
    </style>

</head>

<body>

    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- ========== MAIN CONTENT ========== -->

    <!-- Hero -->
    <div class="d-lg-flex position-relative" style="background-image: url('assets/img/wrc/hero.jpg'); background-size: cover; background-position: center; height: 80vh;">
        <div class="container d-lg-flex align-items-lg-center justify-content-center content-space-t-3 content-space-lg-0 min-vh-lg-50">
            <!-- Heading -->
            <div class="w-100 text-center text-white">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-5">
                            <h1 class="display-4 text-white mb-3">
                                Transform Your Space with Professional Cleaning Services
                            </h1>
                            <p class="lead text-white">Experience unparalleled cleanliness and comfort in your home or business with White Rose Cleaners.</p>
                        </div>
                        <div class="d-grid d-sm-flex justify-content-center gap-3">
                            <a class="btn btn-primary btn-transition px-6" href="contact.php">Get a Free Quote</a>
                            <a class="btn btn-link text-white" href="about.php">Learn more <i class="bi-chevron-right small ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Title & Description -->
        </div>
    </div>
    <!-- End Hero -->



    <!-- Features -->
    <div class="container content-space-1 content-space-lg-3">
        <div class="row justify-content-lg-between align-items-lg-center">
            <div class="col-lg-5 mb-9 mb-lg-0">
                <div class="mb-3">
                    <h2 class="h1">Quality Cleaning Services You Can Trust</h2>
                </div>
                <p>White Rose Cleaners offers comprehensive cleaning solutions tailored to meet the unique needs of both residential and commercial clients across the UK. Our team is dedicated to delivering exceptional results with every service, ensuring your space is spotless and inviting.</p>
                <p>With years of experience and a commitment to excellence, we use the latest techniques and eco-friendly products to guarantee a thorough clean every time.</p>
                <div class="mt-4">
                    <a class="btn btn-primary btn-transition px-5" href="services.php">View Services</a>
                </div>
            </div>
            <div class="col-lg-6 col-xl-5">
                <!-- SVG Element -->
                <div class="position-relative mx-auto" style="max-width: 28rem; min-height: 30rem;">
                    <figure class="position-absolute top-0 end-0 zi-2 me-10" data-aos="fade-up">
                        <img src="assets/img/wrc/img-19.jpg" class="img-fluid" alt="Quality Cleaning Services">
                    </figure>
                </div>
                <!-- End SVG Element -->
            </div>
        </div>
    </div>
    <!-- End Features -->


    <!-- Card Grid -->
    <div class="container content-space-2">
        <!-- Heading -->
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h2 class="h1">Our Main Services</h2>
        </div>
        <!-- End Heading -->

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-md-5 mb-lg-0">
                <!-- Card -->
                <a class="card card-lg card-transition h-100 text-center" href="single-service.php?service=office-cleaning">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="bi-building" style="font-size: 3rem; color: #0d6efd;"></i>
                        </div>
                        <h3 class="card-title">Commercial Cleaning</h3>
                        <p class="card-text text-body">Expert cleaning services for offices, retail spaces, and other commercial properties.</p>
                    </div>
                    <div class="card-footer pt-0">
                        <span class="card-link">View Services <i class="bi-chevron-right small ms-1"></i></span>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-md-6 col-lg-4 mb-4 mb-md-5 mb-lg-0">
                <!-- Card -->
                <a class="card card-lg card-transition h-100 text-center" href="single-service.php?service=regular-cleaning">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="bi-house" style="font-size: 3rem; color: #0d6efd;"></i>
                        </div>
                        <h3 class="card-title">Residential Cleaning</h3>
                        <p class="card-text text-body">Keep your home pristine with our regular and deep cleaning services.</p>
                    </div>
                    <div class="card-footer pt-0">
                        <span class="card-link">View Services <i class="bi-chevron-right small ms-1"></i></span>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-md-6 col-lg-4">
                <!-- Card -->
                <a class="card card-lg card-transition h-100 text-center" href="single-service.php?service=carpet-cleaning">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="bi-stars" style="font-size: 3rem; color: #0d6efd;"></i>
                        </div>
                        <h3 class="card-title">Specialized Cleaning</h3>
                        <p class="card-text text-body">From carpet cleaning to window washing, we cover all your special cleaning needs.</p>
                    </div>
                    <div class="card-footer pt-0">
                        <span class="card-link">View Services <i class="bi-chevron-right small ms-1"></i></span>
                    </div>
                </a>
                <!-- End Card -->
            </div>
        </div>
    </div>
    <!-- End Card Grid -->



    <!-- Stats -->
    <div class="container content-space-b-2 content-space-b-lg-3">
        <div class="w-lg-75 mx-lg-auto">
            <div class="row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="text-center">
                        <h5 class="h1">500+</h5>
                        <p>Homes and businesses cleaned monthly</p>
                    </div>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="text-center">
                        <h5 class="h1">1,000+</h5>
                        <p>Satisfied clients across the UK</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="text-center">
                        <h5 class="h1">99%</h5>
                        <p>Customer satisfaction rate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Stats -->


    <!-- Why Choose Us -->
    <div class="overflow-hidden">
        <div class="container content-space-2 content-space-lg-3">
            <!-- Heading -->
            <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <span class="text-cap">Why Choose Us</span>
                <h2>Exceptional Cleaning Services Tailored to Your Needs</h2>
            </div>
            <!-- End Heading -->

            <div class="w-md-75 mx-md-auto">
                <div class="row justify-content-lg-center align-items-md-center">
                    <div class="col-md-5 mb-7 mb-md-0">
                        <!-- List Checked -->
                        <ul class="list-checked list-checked-soft-bg-primary list-checked-lg mb-5">
                            <li class="list-checked-item">Highly trained and professional staff</li>
                            <li class="list-checked-item">Flexible scheduling to suit your routine</li>
                            <li class="list-checked-item">Use of eco-friendly and non-toxic products</li>
                            <li class="list-checked-item">Guaranteed satisfaction with every service</li>
                            <li class="list-checked-item">Fully insured and reliable service</li>
                        </ul>
                        <!-- End List Checked -->

                        <a class="link" href="services.php">Our services <i class="bi-chevron-right small ms-1"></i></a>
                    </div>

                    <div class="col-md-7 col-lg-5">
                        <div class="position-relative">
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <span class="svg-icon text-primary mb-4">
                                        <i class="bi-shield-check fa-2x"></i>
                                    </span>

                                    <h3 class="card-title">We Deliver Quality You Can Trust</h3>
                                    <p class="card-text">At White Rose Cleaners, we pride ourselves on delivering top-notch cleaning services that exceed expectations. Our commitmentHere’s the rest of the homepage code with context-specific updates for White Rose Cleaners:
                                    <p class="card-text">At White Rose Cleaners, we pride ourselves on delivering top-notch cleaning services that exceed expectations. Our commitment to quality, reliability, and customer satisfaction is what sets us apart in the cleaning industry.</p>
                                </div>
                            </div>
                            <!-- End Card -->

                            <!-- SVG Shape -->
                            <figure class="position-absolute bottom-0 end-0 zi-n1 mb-n7 me-n7" style="width: 12rem;">
                                <img class="img-fluid" src="assets/svg/components/dots-lg.svg" alt="Quality Service Illustration">
                            </figure>
                            <!-- End SVG Shape -->
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
        </div>
    </div>
    <!-- End Why Choose Us -->


    <!-- Testimonials -->
    <div class="container content-space-1 content-space-md-3">
        <!-- Heading -->
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h2 class="h1">
                What Our Clients Say
            </h2>
        </div>
        <!-- End Heading -->
        <!-- Swiper Slider -->
        <div class="js-swiper-single-testimonials swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <!-- Blockquote -->
                    <figure class="w-md-65 text-center mx-md-auto">
                        <div class="mb-3">
                            <img class="avatar avatar-xl avatar-circle" src="assets/img/wrc/user.png" alt="Customer Testimonial">
                        </div>

                        <blockquote class="blockquote">“White Rose Cleaners transformed our office into a spotless environment. Their attention to detail is unmatched!”</blockquote>

                        <figcaption class="blockquote-footer mb-5">
                            Sarah Thompson
                            <span class="blockquote-footer-source">Office Manager, London</span>
                        </figcaption>
                    </figure>
                    <!-- End Blockquote -->
                </div>
                <!-- End Slide 1 -->

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <!-- Blockquote -->
                    <figure class="w-md-65 text-center mx-md-auto">
                        <div class="mb-3">
                            <img class="avatar avatar-xl avatar-circle" src="assets/img/wrc/user.png" alt="Customer Testimonial">
                        </div>

                        <blockquote class="blockquote">“The team from White Rose Cleaners is incredibly professional and efficient. My house has never looked better!”</blockquote>

                        <figcaption class="blockquote-footer mb-5">
                            James Wilkins
                            <span class="blockquote-footer-source">Homeowner, Manchester</span>
                        </figcaption>
                    </figure>
                    <!-- End Blockquote -->
                </div>
                <!-- End Slide 2 -->

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <!-- Blockquote -->
                    <figure class="w-md-65 text-center mx-md-auto">
                        <div class="mb-3">
                            <img class="avatar avatar-xl avatar-circle" src="assets/img/wrc/user.png" alt="Customer Testimonial">
                        </div>

                        <blockquote class="blockquote">“I highly recommend White Rose Cleaners for their impeccable service and customer care. They are simply the best!”</blockquote>

                        <figcaption class="blockquote-footer mb-5">
                            Emma Wright
                            <span class="blockquote-footer-source">Business Owner, Birmingham</span>
                        </figcaption>

                        <img class="avatar avatar-xl avatar-4x3" src="assets/svg/brands/capsule-primary.svg" alt="Company Logo">
                    </figure>
                    <!-- End Blockquote -->
                </div>
                <!-- End Slide 3 -->

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <!-- Blockquote -->
                    <figure class="w-md-65 text-center mx-md-auto">
                        <div class="mb-3">
                            <img class="avatar avatar-xl avatar-circle" src="assets/img/wrc/user.png" alt="Customer Testimonial">
                        </div>

                        <blockquote class="blockquote">“Their eco-friendly cleaning products made a huge difference in my home. Highly recommended!”</blockquote>

                        <figcaption class="blockquote-footer mb-5">
                            Oliver Green
                            <span class="blockquote-footer-source">Homeowner, Leeds</span>
                        </figcaption>

                        <img class="avatar avatar-xl avatar-4x3" src="assets/svg/brands/google-primary.svg" alt="Company Logo">
                    </figure>
                    <!-- End Blockquote -->
                </div>
                <!-- End Slide 4 -->
            </div>

            <!-- Pagination -->
            <div class="js-swiper-single-testimonials-pagination swiper-pagination"></div>
        </div>
        <!-- End Swiper Slider -->
    </div>
    <!-- End Testimonials -->




    <!-- Portfolio Section -->
    <div class="container content-space-2 content-space-lg-3">
        <div class="w-lg-75 text-center mx-lg-auto">
            <!-- Heading -->
            <div class="mb-5 mb-md-10">
                <h1 class="display-4">Portfolio: Some of Our Work</h1>
                <p class="lead">Take a look at some of the spaces we've transformed. Our commitment to excellence shines through in every job we undertake.</p>
            </div>
            <!-- End Heading -->
        </div>

        <div class="row gx-3">
            <div class="col mb-3">
                <div class="bg-img-start" style="background-image: url(assets/img/wrc/img-3.jpg); height: 15rem;" alt="Commercial Office Cleaning"></div>
            </div>
            <!-- End Col -->

            <div class="col-3 d-none d-md-block mb-3">
                <div class="bg-img-start" style="background-image: url(assets/img/wrc/img-7.jpg); height: 15rem;" alt="Residential Cleaning"></div>
            </div>
            <!-- End Col -->

            <div class="col mb-3">
                <div class="bg-img-start" style="background-image: url(assets/img/wrc/img-9.jpg); height: 15rem;" alt="Specialized Carpet Cleaning"></div>
            </div>
            <!-- End Col -->

            <div class="w-100"></div>

            <div class="col mb-3 mb-md-0">
                <div class="bg-img-start" style="background-image: url(assets/img/wrc/img-18.jpg); height: 15rem;" alt="Industrial Cleaning Project"></div>
            </div>
            <!-- End Col -->

            <div class="col-4 d-none d-md-block mb-3 mb-md-0">
                <div class="bg-img-start" style="background-image: url(assets/img/wrc/img-4.jpg); height: 15rem;" alt="Event Space Cleaning"></div>
            </div>
            <!-- End Col -->

            <div class="col">
                <div class="bg-img-start" style="background-image: url(assets/img/wrc/img-15.jpg); height: 15rem;" alt="Retail Space Cleaning"></div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Portfolio Section -->


    <!-- News Section -->
    <div class="container content-space-2 content-space-lg-3">
        <!-- Heading -->
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h2 class="h1">Read Our Latest News</h2>
            <p>Stay up-to-date with the latest cleaning tips, company updates, and industry trends.</p>
        </div>
        <!-- End Heading -->

        <div class="row gx-3 mb-5 mb-md-9">
            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                <!-- Card -->
                <a class="card card-transition h-100" href="single-blog.php?blog=cleaning-tips">
                    <img class="card-img-top" src="assets/img/wrc/img-20.jpg" alt="Cleaning Tips">
                    <div class="card-body">
                        <span class="card-subtitle text-primary">Tips</span>
                        <h5 class="card-text lh-base">Top Cleaning Tips for a Spotless Home</h5>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                <!-- Card -->
                <a class="card card-transition h-100" href="single-blog.php?blog=eco-friendly">
                    <img class="card-img-top" src="assets/img/wrc/img-24.jpg" alt="Eco-friendly Cleaning">
                    <div class="card-body">
                        <span class="card-subtitle text-primary">Eco-Friendly</span>
                        <h5 class="card-text lh-base">The Benefits of Eco-Friendly Cleaning Products</h5>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0">
                <!-- Card -->
                <a class="card card-transition h-100" href="single-blog.php?blog=commercial-cleaning">
                    <img class="card-img-top" src="assets/img/wrc/img-25.jpg" alt="Commercial Cleaning">
                    <div class="card-body">
                        <span class="card-subtitle text-primary">Business</span>
                        <h5 class="card-text lh-base">Why Regular Office Cleaning is Crucial</h5>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3">
                <!-- Card -->
                <a class="card card-transition h-100" href="single-blog.php?blog=holiday-cleaning">
                    <img class="card-img-top" src="assets/img/wrc/img-16.jpg" alt="Holiday Cleaning">
                    <div class="card-body">
                        <span class="card-subtitle text-primary">Holiday</span>
                        <h5 class="card-text lh-base">How to Prepare Your Home for the Holidays</h5>
                    </div>
                </a>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Row -->

        <!-- Card Info -->
        <div class="text-center">
            <div class="card card-info-link card-sm">
                <div class="card-body">
                    Want to read more? <a class="card-link ms-2" href="blogs.php">Go here <span class="bi-chevron-right small ms-1"></span></a>
                </div>
            </div>
        </div>
        <!-- End Card Info -->
    </div>
    <!-- End News Section -->

    <!-- CTA -->
    <div class="container content-space-b-2">
        <div class="text-center bg-img-start py-6" style="background: url(assets/svg/components/shape-6.svg) center no-repeat;">
            <div class="mb-5">
                <h2>Get a Free Quote Today</h2>
                <p>Let us help you maintain a clean, healthy, and welcoming space. Get in touch with us to discuss your cleaning needs.</p>
            </div>

            <a class="btn btn-primary btn-transition" href="contact.php">Request a Quote</a>
        </div>
    </div>
    <!-- End CTA -->

    <!-- ========== END MAIN CONTENT ========== -->

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Modals -->
    <?php include 'includes/modals.php'; ?>

    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>




</body>


</html>