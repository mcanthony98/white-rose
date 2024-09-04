<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Services | White Rose Cleaners</title>

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>


    <style>
        .hero-overlay {
            position: relative;
            background-image: url('assets/img/1920x1080/img6.jpg');
            background-size: cover;
            background-position: center;
        }

        .hero-overlay::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .hero-overlay .container {
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
    <div class="hero-overlay">
        <div class="container content-space-t-2 content-space-t-md-3 content-space-3 content-space-b-lg-3">
            <div class="w-lg-50">
                <h1 class="text-white" >Your Clean Space, Our Expertise.</h1>
                <h2 class="h1 text-primary">Explore Our Professional Cleaning Services.</h2>
            </div>
        </div>
    </div>
    <!-- End Hero -->


    <!-- Nav Scroller -->
    <div class="container content-space-b-2 content-space-b-lg-3 mt-3">
        <div class="js-nav-scroller hs-nav-scroller-horizontal mb-7">
            <span class="hs-nav-scroller-arrow-prev" style="display: none;">
                <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                    <i class="bi-chevron-left"></i>
                </a>
            </span>

            <span class="hs-nav-scroller-arrow-next" style="display: none;">
                <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                    <i class="bi-chevron-right"></i>
                </a>
            </span>

            <!-- Nav -->
            <ul class="js-filter-options nav nav-segment nav-pills d-flex mx-auto" style="max-width: 30rem;">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:;" data-group="all">All Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:;" data-group="commercial">Commercial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:;" data-group="residential">Residential</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:;" data-group="specialized">Specialized</a>
                </li>
            </ul>
            <!-- End Nav -->
        </div>
        <!-- End Nav Scroller -->

        <!-- Service Cards -->
        <div class="js-shuffle row row-cols-1 row-cols-sm-2 row-cols-lg-3">
            <!-- Commercial Cleaning -->
            <div class="js-shuffle-item col mb-5" data-groups='["commercial"]'>
                <!-- Card -->
                <div class="card h-100">
                    <img class="card-img-top" src="assets/img/wrc/img-3.jpg" alt="Commercial Cleaning">
                    <div class="card-body">
                        <h3 class="card-title mb-3">Office Cleaning</h3>
                        <p class="card-text">Maintain a pristine and productive workspace with our tailored office cleaning solutions.</p>
                    </div>
                    <div class="card-footer pt-0">
                        <a class="btn btn-outline-primary" href="single-service.php?service=office-cleaning">View Service</a>
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <div class="js-shuffle-item col mb-5" data-groups='["commercial"]'>
                <!-- Card -->
                <div class="card h-100">
                    <img class="card-img-top" src="assets/img/wrc/img-25.jpg" alt="Industrial Cleaning">
                    <div class="card-body">
                        <h3 class="card-title mb-3">School Cleaning</h3>
                        <p class="card-text">Ensure safety and cleanliness in your schooling spaces with our expert cleaning services.</p>
                    </div>
                    <div class="card-footer pt-0">
                        <a class="btn btn-outline-primary" href="single-service.php?service=industrial-cleaning">View Service</a>
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <div class="js-shuffle-item col mb-5" data-groups='["commercial"]'>
                <!-- Card -->
                <div class="card h-100">
                    <img class="card-img-top" src="assets/img/wrc/img-9.jpg" alt="Retail Cleaning">
                    <div class="card-body">
                        <h3 class="card-title mb-3">Retail Cleaning</h3>
                        <p class="card-text">Create a welcoming shopping experience with our detailed retail cleaning services.</p>
                    </div>
                    <div class="card-footer pt-0">
                        <a class="btn btn-outline-primary" href="single-service.php?service=retail-cleaning">View Service</a>
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <!-- Residential Cleaning -->
            <div class="js-shuffle-item col mb-5" data-groups='["residential"]'>
                <!-- Card -->
                <div class="card h-100">
                    <img class="card-img-top" src="assets/img/wrc/img-11.jpg" alt="Regular Cleaning">
                    <div class="card-body">
                        <h3 class="card-title mb-3">Regular Cleaning</h3>
                        <p class="card-text">Keep your home clean and fresh with our routine residential cleaning services.</p>
                    </div>
                    <div class="card-footer pt-0">
                        <a class="btn btn-outline-primary" href="single-service.php?service=regular-cleaning">View Service</a>
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <div class="js-shuffle-item col mb-5" data-groups='["residential"]'>
                <!-- Card -->
                <div class="card h-100">
                    <img class="card-img-top" src="assets/img/wrc/img-14.jpg" alt="Deep Cleaning">
                    <div class="card-body">
                        <h3 class="card-title mb-3">Deep Cleaning</h3>
                        <p class="card-text">Achieve a thorough clean in every corner of your home with our deep cleaning service.</p>
                    </div>
                    <div class="card-footer pt-0">
                        <a class="btn btn-outline-primary" href="single-service.php?service=deep-cleaning">View Service</a>
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <div class="js-shuffle-item col mb-5" data-groups='["residential"]'>
                <!-- Card -->
                <div class="card h-100">
                    <img class="card-img-top" src="assets/img/wrc/img-15.jpg" alt="Move In/Move Out Cleaning">
                    <div class="card-body">
                        <h3 class="card-title mb-3">Move In/Move Out Cleaning</h3>
                        <p class="card-text">Make your move stress-free with our comprehensive move-in/move-out cleaning.</p>
                    </div>
                    <div class="card-footer pt-0">
                        <a class="btn btn-outline-primary" href="single-service.php?service=move-in-move-out-cleaning">View Service</a>
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <!-- Specialized Cleaning -->
            <div class="js-shuffle-item col mb-5" data-groups='["specialized"]'>
                <!-- Card -->
                <div class="card h-100">
                    <img class="card-img-top" src="assets/img/wrc/img-16.jpg" alt="Carpet Cleaning">
                    <div class="card-body">
                        <h3 class="card-title mb-3">Carpet Cleaning</h3>
                        <p class="card-text">Keep your carpets looking fresh and new with our specialized carpet cleaning services.</p>
                    </div>
                    <div class="card-footer pt-0">
                        <a class="btn btn-outline-primary" href="single-service.php?service=carpet-cleaning">View Service</a>
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <div class="js-shuffle-item col mb-5" data-groups='["specialized"]'>
                <!-- Card -->
                <div class="card h-100">
                    <img class="card-img-top" src="assets/img/wrc/img-20.jpg" alt="Window Cleaning">
                    <div class="card-body">
                        <h3 class="card-title mb-3">Window Cleaning</h3>
                        <p class="card-text">Get crystal clear windows with our professional window cleaning services.</p>
                    </div>
                    <div class="card-footer pt-0">
                        <a class="btn btn-outline-primary" href="single-service.php?service=window-cleaning">View Service</a>
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <div class="js-shuffle-item col mb-5" data-groups='["specialized"]'>
                <!-- Card -->
                <div class="card h-100">
                    <img class="card-img-top" src="assets/img/wrc/img-18.jpg" alt="Upholstery Cleaning">
                    <div class="card-body">
                        <h3 class="card-title mb-3">COVID 19 Sanitization</h3>
                        <p class="card-text">Revitalize your furniture with our thorough upholstery cleaning services.</p>
                    </div>
                    <div class="card-footer pt-0">
                        <a class="btn btn-outline-primary" href="single-service.php?service=upholstery-cleaning">View Service</a>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End of Specialized Cleaning Services -->
        </div>
        <!-- End Service Cards -->



        <div class="text-center">
            <a class="btn btn-primary" href="contact.php">Reach Out for a Personalized Service</a>
        </div>

    </div>
    <!-- End Card Grid -->

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>

</body>

</html>