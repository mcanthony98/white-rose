<!DOCTYPE html>
<html lang="en" dir="">

<head>

    <!-- Title -->
    <title>Apply for a Job | White Rose Cleaners</title>

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>

</head>

<body>

    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="bg-light">
        <!-- Content -->
        <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-2 content-space-b-lg-3">
            <div class="w-lg-75 mx-auto">
                <!-- Jobs Link -->
                <div class="mb-5">
                    <a class="link" href="careers.php">
                        <i class="bi-chevron-left small ms-1"></i> Back to Job Listings
                    </a>
                </div>
                <!-- End Jobs Link -->

                <!-- Card -->
                <div class="card card-lg">
                    <div class="card-body">
                        <!-- Title -->
                        <div class="row justify-content-sm-between align-items-sm-center mb-5">
                            <div class="col-sm mb-3 mb-sm-0">
                                <h1 class="card-title h2">Office Cleaner</h1>
                                <p class="card-text">London, UK - Operations - Full-Time</p>
                            </div>

                        </div>
                        <!-- End Title -->

                        <!-- Form -->
                        <form id="applyForJob" class="js-validate" action="thank-you.php" method="post">
                            <div class="mb-5">
                                <h3>Submit your application</h3>
                            </div>

                            <!-- Form -->
                            <div class="row mb-3">
                                <label for="resumeCVCareersForm" class="col-sm-4 col-form-label">Resume/CV <span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <input type="file" class="js-file-attach form-control" id="resumeCVCareersForm" name="resumeCVCareersFormName" required>
                                </div>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="row mb-3">
                                <label for="fullNameCareersForm" class="col-sm-4 col-form-label">Full name <span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="fullNameCareersForm" name="fullNameCareersFormName" placeholder="Jacob Williams" aria-label="Jacob Williams" required>
                                </div>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="row mb-3">
                                <label for="emailCareersForm" class="col-sm-4 col-form-label">Email <span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="emailCareersForm" name="emailCareersFormName" placeholder="example@site.com" aria-label="example@site.com" required>
                                </div>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="row mb-3">
                                <label for="phoneCareersForm" class="col-sm-4 col-form-label">Phone <span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <input type="tel" class="form-control" id="phoneCareersForm" name="phoneCareersFormName" placeholder="+44 (123) 456-7890" aria-label="+44 (123) 456-7890" required>
                                </div>
                            </div>
                            <!-- End Form -->

                            <hr class="my-5 my-sm-10">

                            <div class="mb-5">
                                <h3>Additional information</h3>
                            </div>

                            <!-- Form -->
                            <div class="mb-3">
                                <label for="additionalInfoCareersForm" class="form-label visually-hidden">Additional information</label>
                                <textarea class="form-control" name="additionalInfoCareersFormName" id="additionalInfoCareersForm" placeholder="Add anything else you want to share" aria-label="Add a cover letter or anything else you want to share." rows="5"></textarea>
                            </div>
                            <!-- End Form -->

                            <div class="d-grid text-center mt-7">
                                <button type="submit" class="btn btn-primary">Submit Application</button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Content -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>

</body>

</html>