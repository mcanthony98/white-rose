<?php
require "includes/connect.php";

?>
<!DOCTYPE html>
<html lang="en" dir="">

<head>

    <!-- Title -->
    <title>Terms & Conditions | White Rose Cleaners</title>

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>

</head>

<body>

    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Hero -->
        <div class="bg-img-start" style="background-image: url(assets/svg/components/card-11.svg);">
            <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-2">
                <div class="w-md-75 w-lg-50 text-center mx-md-auto">
                    <h1>Terms & Conditions</h1>
                    <p>Effective date: August 28, 2024</p>
                </div>
            </div>
        </div>
        <!-- End Hero -->

        <!-- Content -->
        <div class="container content-space-1 content-space-md-3">
            <div class="row">
                <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                    <!-- Navbar -->
                    <div class="navbar-expand-md">
                        <!-- Navbar Toggle -->
                        <div class="d-grid">
                            <button type="button" class="navbar-toggler btn btn-white mb-3" data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenu">
                                <span class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark">Menu</span>

                                    <span class="navbar-toggler-default">
                                        <i class="bi-list"></i>
                                    </span>

                                    <span class="navbar-toggler-toggled">
                                        <i class="bi-x"></i>
                                    </span>
                                </span>
                            </button>
                        </div>
                        <!-- End Navbar Toggle -->

                        <!-- Navbar Collapse -->
                        <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
                            <ul id="navbarSettings" class="js-sticky-block js-scrollspy nav nav-tabs nav-link-gray nav-vertical" data-hs-sticky-block-options='{
                   "parentSelector": "#navbarVerticalNavMenu",
                   "targetSelector": "#header",
                   "breakpoint": "md",
                   "startPoint": "#navbarVerticalNavMenu",
                   "endPoint": "#stickyBlockEndPoint",
                   "stickyOffsetTop": 80
                 }'>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#content">1. Requesting Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#services">2. Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#payments">3. Payments</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#liability">4. Liability</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#termination">5. Termination</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#governingLaw">6. Governing Law</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#changes">7. Changes</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Navbar Collapse -->
                    </div>
                    <!-- End Navbar -->
                </div>
                <!-- End Col -->

                <div class="col-md-8 col-lg-9">
                    <div class="mb-7">
                        <p>Welcome to White Rose Cleaners. By using our services, you agree to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern White Rose Cleaners' relationship with you in relation to our services.</p>
                        <p>If you disagree with any part of these terms and conditions, please do not use our services.</p>
                    </div>

                    <div id="contactProcess" class="mb-7">
                        <h4>1. Requesting Services</h4>

                        <p>When requesting a quote or booking a service with White Rose Cleaners, you must provide accurate and complete information. This information will help us in tailoring our services to your specific needs and ensuring a smooth service delivery.</p>

                        <p>After submitting your inquiry or booking request, a company representative will contact you via the provided email or phone number to discuss your needs, confirm details, and arrange for the service. All communications and agreements will be conducted through email or phone.</p>

                        <p>We reserve the right to refuse service, modify the requested service details, or cancel a booking if the provided information is inaccurate, incomplete, or if we are unable to fulfill the request under the specified conditions.</p>
                    </div>


                    <div id="services" class="mb-7">
                        <h4>2. Services</h4>

                        <p>White Rose Cleaners offers a range of cleaning services, including but not limited to residential cleaning, commercial cleaning, and specialized cleaning services. Each service is subject to specific terms and conditions, which will be provided at the time of booking.</p>

                        <p>We endeavor to provide our services with due care and skill. However, our service availability is subject to factors beyond our control, including but not limited to weather conditions, access to the property, and other unforeseen circumstances.</p>
                    </div>

                    <div id="payments" class="mb-7">
                        <h4>3. Payments</h4>

                        <p>All payments for our services must be made in full upon completion of the service unless otherwise agreed. We accept payments through various methods, including credit/debit cards, bank transfers, and other secure payment gateways.</p>

                        <p>In case of any payment disputes, please contact our customer service within 14 days of the transaction date.</p>
                    </div>

                    <div id="liability" class="mb-7">
                        <h4>4. Liability</h4>

                        <p>White Rose Cleaners will not be liable for any indirect, incidental, or consequential damages that arise from the use of our services. Our liability is limited to the value of the service provided.</p>

                        <p>We take every reasonable precaution to protect your property while providing our services. However, we are not responsible for any loss or damage unless it is caused by our gross negligence or willful misconduct.</p>
                    </div>

                    <div id="termination" class="mb-7">
                        <h4>5. Termination</h4>

                        <p>We may terminate or suspend your access to our services immediately, without prior notice, if you breach these terms and conditions. Upon termination, your right to use our services will cease immediately.</p>

                        <p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity, and limitations of liability.</p>
                    </div>

                    <div id="governingLaw" class="mb-7">
                        <h4>6. Governing Law</h4>

                        <p>These terms and conditions are governed by and construed in accordance with the laws of [Your Country/Region], and you irrevocably submit to the exclusive jurisdiction of the courts in that location.</p>
                    </div>

                    <div id="changes" class="mb-7">
                        <h4>7. Changes</h4>

                        <p>We reserve the right to amend these terms and conditions at any time. Any such changes will be posted on this page, and your continued use of our services following any such change constitutes your acceptance of the new terms.</p>
                    </div>

                    <!-- End Sticky End Point -->
                    <div id="stickyBlockEndPoint"></div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Content -->

        <!-- FAQ -->
        <div class="container content-space-2 content-space-b-lg-3">
            <div class="w-lg-75 mx-lg-auto">
                <div class="d-grid gap-10">
                    <div class="d-grid gap-3">
                        <h2>Frequently Asked Questions (FAQs)</h2>

                        <!-- Accordion -->
                        <div class="accordion accordion-flush accordion-lg" id="accordionFAQ">
                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingOne">
                                    <a class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What services do you offer?
                                    </a>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        White Rose Cleaners offers a wide range of cleaning services, including regular residential cleaning, deep cleaning, office cleaning, industrial cleaning, carpet cleaning, and specialized services like post-construction cleaning. For a full list, please visit our services page.
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion Item -->

                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingTwo">
                                    <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseThree">
                                        How do I book a service?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        You can book our services directly through our website by selecting the desired service and filling out the booking form. You can also call us at +447720875174 or email us at whiteroseservicegroup@gmail.com to schedule an appointment.
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion Item -->

                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingThree">
                                    <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What is your cancellation policy?
                                    </a>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        We require a 24-hour notice for cancellations. If you cancel within 24 hours of the scheduled service, a cancellation fee may apply. For more details, please refer to our cancellation policy in the booking confirmation email.
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion Item -->

                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Do you provide cleaning supplies and equipment?
                                    </a>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Yes, White Rose Cleaners provides all necessary cleaning supplies and equipment. If you have specific products you'd like us to use, please let us know in advance.
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion Item -->

                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFive">
                                    <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Are your cleaning services insured?
                                    </a>
                                </div>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Yes, all our cleaning services are fully insured. This ensures that in the unlikely event of damage or loss, you are covered.
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion Item -->

                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingSix">
                                    <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        How can I contact customer support?
                                    </a>
                                </div>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        You can contact our customer support team by calling us at +447720875174, emailing us at whiteroseservicegroup@gmail.com, or filling out the contact form on our website. We are here to assist you with any inquiries or issues.
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion Item -->
                        </div>
                        <!-- End Accordion -->
                    </div>

                </div>
            </div>
        </div>
        <!-- End FAQ -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Modals -->
    <?php include 'includes/modals.php'; ?>

    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>


    <script>
        // INITIALIZATION OF STICKY BLOCKS
        // =======================================================
        new HSStickyBlock('.js-sticky-block', {
            targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
        })


        // SCROLLSPY
        // =======================================================
        new bootstrap.ScrollSpy(document.body, {
            target: '#navbarSettings',
            offset: 10
        })

        new HSScrollspy('#navbarVerticalNavMenu', {
            breakpoint: 'lg'
        })()
    </script>

</body>

</html>