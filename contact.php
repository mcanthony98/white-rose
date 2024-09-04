<!DOCTYPE html>
<html lang="en" dir="">

<head>

    <!-- Title -->
    <title>Contact Us | White Rose Cleaners</title>

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>

</head>

<body>

    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Contact Form -->
        <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-2">
            <div class="row">
                <div class="col-lg-6 mb-9 mb-lg-0">
                    <!-- Heading -->
                    <div class="mb-5">
                        <h1>Get in touch</h1>
                        <p>We'd love to talk about how we can help you with your cleaning needs.</p>
                    </div>
                    <!-- End Heading -->

                    <!-- Google Map -->
                    <div class="overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38197.94951040398!2d-1.4812500874675791!3d53.24703570745938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879842c07774617%3A0x603c8e349b6fb8e5!2sChesterfield%2C%20UK!5e0!3m2!1sen!2ske!4v1725459982239!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- End Google Map -->

                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="mb-1">Call us:</h5>
                            <p>+447720875174</p>
                        </div>
                        <!-- End Col -->

                        <div class="col-sm-6">
                            <h5 class="mb-1">Email us:</h5>
                            <p>info@whiterosecleaners.co.uk</p>
                        </div>
                        <!-- End Col -->

                        <div class="col-sm-6">
                            <h5 class="mb-1">Address:</h5>
                            <p>Chesterfield, UK</p>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->

                <div class="col-lg-6">
                    <div class="ps-lg-5">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-header border-bottom text-center">
                                <h3 class="card-header-title">General inquiries</h3>
                            </div>

                            <div class="card-body">
                                <!-- Form -->
                                <form>
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <!-- Form -->
                                            <div class="mb-3">
                                                <label class="form-label" for="hireUsFormFirstName">First name</label>
                                                <input type="text" class="form-control form-control-lg" name="hireUsFormNameFirstName" id="hireUsFormFirstName" placeholder="First name" aria-label="First name">
                                            </div>
                                            <!-- End Form -->
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-6">
                                            <!-- Form -->
                                            <div class="mb-3">
                                                <label class="form-label" for="hireUsFormLasttName">Last name</label>
                                                <input type="text" class="form-control form-control-lg" name="hireUsFormNameLastName" id="hireUsFormLasttName" placeholder="Last name" aria-label="Last name">
                                            </div>
                                            <!-- End Form -->
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <!-- Form -->
                                            <div class="mb-3">
                                                <label class="form-label" for="hireUsFormWorkEmail">Email address</label>
                                                <input type="email" class="form-control form-control-lg" name="hireUsFormNameWorkEmail" id="hireUsFormWorkEmail" placeholder="email@site.com" aria-label="email@site.com">
                                            </div>
                                            <!-- End Form -->
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-6">
                                            <!-- Form -->
                                            <div class="mb-3">
                                                <label class="form-label" for="hireUsFormPhone">Phone <span class="form-label-secondary">(Optional)</span></label>
                                                <input type="text" class="form-control form-control-lg" name="hireUsFormNamePhone" id="hireUsFormPhone" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx">
                                            </div>
                                            <!-- End Form -->
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <!-- Form -->
                                            <div class="mb-3">
                                                <label class="form-label" for="hireUsFormSubject">Subject</label>
                                                <input type="text" class="form-control form-control-lg" name="hireUsFormNameSubject" id="hireUsFormSubject" placeholder="Subject" aria-label="Subject">
                                            </div>
                                            <!-- End Form -->
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-6">
                                            <!-- Form -->
                                            <div class="mb-3">
                                                <label class="form-label" for="hireUsFormCompany">Company <span class="form-label-secondary">(Optional)</span></label>
                                                <input type="text" class="form-control form-control-lg" name="hireUsFormNameCompany" id="hireUsFormCompany" placeholder="Company" aria-label="Company">
                                            </div>
                                            <!-- End Form -->
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <!-- Form -->
                                    <div class="mb-3">
                                        <label class="form-label" for="hireUsFormService">Service Inquiry</label>
                                        <select class="form-control form-control-lg" name="hireUsFormNameService" id="hireUsFormService" aria-label="Service Inquiry">
                                            <optgroup label="Residential">
                                                <option value="regular-cleaning">Regular Cleaning</option>
                                                <option value="deep-cleaning">Deep Cleaning</option>
                                                <option value="move-in-move-out-cleaning">Move In/Move Out Cleaning</option>
                                                <option value="post-construction-cleaning">Post-Construction Cleaning</option>
                                            </optgroup>
                                            <optgroup label="Commercial">
                                                <option value="office-cleaning">Office Cleaning</option>
                                                <option value="industrial-cleaning">Industrial Cleaning</option>
                                                <option value="retail-cleaning">Retail Cleaning</option>
                                                <option value="event-cleaning">Event Cleaning</option>
                                            </optgroup>
                                            <optgroup label="Specialized">
                                                <option value="carpet-cleaning">Carpet Cleaning</option>
                                                <option value="window-cleaning">Window Cleaning</option>
                                                <option value="upholstery-cleaning">Upholstery Cleaning</option>
                                                <option value="eco-friendly-cleaning">Eco-Friendly Cleaning</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <!-- End Form -->

                                    <!-- Form -->
                                    <div class="mb-3">
                                        <label class="form-label" for="hireUsFormDetails">Details</label>
                                        <textarea class="form-control form-control-lg" name="hireUsFormNameDetails" id="hireUsFormDetails" placeholder="Tell us about your needs..." aria-label="Tell us about your needs..." rows="4"></textarea>
                                    </div>
                                    <!-- End Form -->

                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-lg">Send inquiry</button>
                                    </div>

                                    <div class="text-center">
                                        <p class="form-text">We'll get back to you in 1-2 business days.</p>
                                    </div>
                                </form>
                                <!-- End Form -->
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Contact Form -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Modals -->
    <?php include 'includes/modals.php'; ?>

    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>


</body>

</html>