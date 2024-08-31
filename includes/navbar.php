<!-- ========== HEADER ========== -->
<header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light navbar-show-hide bg-white" data-hs-header-options='{
        "fixMoment": 1000,
        "fixEffect": "slide"
      }'>
    <div class="container d-flex align-items-center">
        <!-- Default Logo -->
        <a class="navbar-brand" href="index.php" aria-label="White Rose Cleaners">
            <img class="navbar-brand-logo p-0 m-0" src="assets/img/wrc/logo-no-bg.png" style="height: 60px;" alt="Logo">
        </a>
        <!-- End Default Logo -->

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-default">
                <i class="bi-list"></i>
            </span>
            <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
            </span>
        </button>
        <!-- End Toggler -->

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <nav class="js-mega-menu navbar-nav-wrap">
                <ul class="navbar-nav">
                    <!-- Home -->
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php" aria-current="page">Home</a>
                    </li>
                    <!-- End Home -->

                    <!-- About -->
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <!-- End About -->

                    <!-- Residential -->
                    <li class="hs-has-sub-menu nav-item">
                        <a id="residentialMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">Residential</a>
                        <!-- Residential Services -->
                        <div class="hs-sub-menu dropdown-menu" aria-labelledby="residentialMenu" style="min-width: 14rem;">
                            <a class="dropdown-item" href="single-service.php?service=regular-cleaning">Regular Cleaning</a>
                            <a class="dropdown-item" href="single-service.php?service=deep-cleaning">Deep Cleaning</a>
                            <a class="dropdown-item" href="single-service.php?service=move-in-move-out-cleaning">Move In/Move Out Cleaning</a>
                            <a class="dropdown-item" href="single-service.php?service=post-construction-cleaning">Post-Construction Cleaning</a>
                        </div>
                        <!-- End Residential Services -->
                    </li>
                    <!-- End Residential -->

                    <!-- Commercial -->
                    <li class="hs-has-sub-menu nav-item">
                        <a id="commercialMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">Commercial</a>
                        <!-- Commercial Services -->
                        <div class="hs-sub-menu dropdown-menu" aria-labelledby="commercialMenu" style="min-width: 14rem;">
                            <a class="dropdown-item" href="single-service.php?service=office-cleaning">Office Cleaning</a>
                            <a class="dropdown-item" href="single-service.php?service=industrial-cleaning">Industrial Cleaning</a>
                            <a class="dropdown-item" href="single-service.php?service=retail-cleaning">Retail Cleaning</a>
                            <a class="dropdown-item" href="single-service.php?service=event-cleaning">Event Cleaning</a>
                        </div>
                        <!-- End Commercial Services -->
                    </li>
                    <!-- End Commercial -->

                    <!-- Specialized -->
                    <li class="hs-has-sub-menu nav-item">
                        <a id="specializedMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">Specialized</a>
                        <!-- Specialized Services -->
                        <div class="hs-sub-menu dropdown-menu" aria-labelledby="specializedMenu" style="min-width: 14rem;">
                            <a class="dropdown-item" href="single-service.php?service=carpet-cleaning">Carpet Cleaning</a>
                            <a class="dropdown-item" href="single-service.php?service=window-cleaning">Window Cleaning</a>
                            <a class="dropdown-item" href="single-service.php?service=upholstery-cleaning">Upholstery Cleaning</a>
                            <a class="dropdown-item" href="single-service.php?service=eco-friendly-cleaning">Eco-Friendly Cleaning</a>
                        </div>
                        <!-- End Specialized Services -->
                    </li>
                    <!-- End Specialized -->


                    <!-- Blog -->
                    <li class="nav-item">
                        <a class="nav-link" href="blogs.php">Blog</a>
                    </li>
                    <!-- End Blog -->

                    <!-- Contact -->
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <!-- End Contact -->

                </ul>
            </nav>

            <!-- CTA Button -->
            <div class="navbar-cta">
                <a class="btn btn-primary btn-transition" href="contact.php">Get a Free Quote Today</a>
            </div>
            <!-- End CTA Button -->

        </div>
        <!-- End Collapse -->
    </div>
</header>
<!-- ========== END HEADER ========== -->