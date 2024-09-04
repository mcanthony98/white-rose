<!DOCTYPE html>
<html lang="en" dir="">

<head>

    <!-- Title -->
    <title>Careers | White Rose Cleaners</title>

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>

</head>

<body>

    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Gallery -->
        <div class="position-relative bg-img-start" style="background-image: url(assets/svg/components/card-11.svg);">
            <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-md-2 position-relative zi-2">
                <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-9">
                    <!-- Heading -->
                    <div class="mb-5">
                        <h1>Join White Rose Cleaners</h1>
                        <p>Become part of a dedicated team offering top-quality cleaning services across the UK. We're always looking for motivated, talented individuals to help us grow.</p>
                    </div>
                    <!-- End Heading -->

                    <a class="js-go-to position-static btn btn-primary btn-transition" href="javascript:;" data-hs-go-to-options='{
              "targetSelector": "#openRolesSection",
              "compensationSelector": "#logoAndNav",
              "offsetTop": 0,
              "position": null,
              "animationIn": false,
              "animationOut": false
             }'>See job openings</a>
                </div>
            </div>
        </div>
        <!-- End Gallery -->

        <!-- List Directory -->
        <div id="openRolesSection" class="container content-space-b-1 content-space-b-md-3">
            <!-- Heading -->
            <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <h2>Current Job Opportunities</h2>
                <p>We are expanding and looking for talented professionals across the UK.</p>
            </div>
            <!-- End Heading -->

            <!-- Form -->
            <form>
                <div class="row gx-2 gx-md-3 mb-7">
                    <div class="col-md-4 mb-2 mb-md-0">
                        <label class="form-label visually-hidden" for="searchJobCareers">Search job</label>

                        <!-- Form -->
                        <div class="input-group input-group-merge">
                            <span class="input-group-prepend input-group-text">
                                <i class="bi-search"></i>
                            </span>
                            <input type="text" class="form-control form-control-lg" id="searchJobCareers" placeholder="Search job" aria-label="Search job">
                        </div>
                        <!-- End Form -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-6 col-md-4 mb-2 mb-sm-0">
                        <label class="form-label visually-hidden" for="locationsJobCareers">Select location</label>

                        <!-- Select -->
                        <select class="form-select form-select-lg" id="locationsJobCareers" aria-label="Select location">
                            <option selected>All locations</option>
                            <option value="1">London</option>
                            <option value="2">Manchester</option>
                            <option value="3">Other locations in the UK</option>
                        </select>
                        <!-- End Select -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label visually-hidden" for="departmentsJobCareers">Select department</label>

                        <!-- Select -->
                        <select class="form-select form-select-lg" id="departmentsJobCareers" aria-label="Select department">
                            <option selected>All departments</option>
                            <option value="1">Operations</option>
                            <option value="2">Sales</option>
                            <option value="3">Business Strategy</option>
                            <option value="4">Customer Service</option>
                        </select>
                        <!-- End Select -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </form>
            <!-- End Form -->

            <div class="mb-4">
                <button type="button" class="btn btn-ghost-secondary">
                    <i class="bi-bell me-1"></i> Create alert
                </button>
            </div>

            <!-- List Group -->
            <ul class="list-group list-group-lg">
                <!-- Job 1 -->
                <li class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-2 mb-md-0">
                            <span class="h6">Office Cleaner</span>
                        </div>
                        <div class="col-sm-5 col-md-2 mb-2 mb-sm-0">
                            <span>London</span>
                        </div>
                        <div class="col-sm-5 col-md-4 mb-2 mb-sm-0">
                            <span>Operations</span>
                        </div>
                        <div class="col-sm-12 col-md-2 text-sm-end d-flex justify-content-between justify-content-md-end">
                            <button type="button" class="btn btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#jobDescriptionModal">Details</button>
                            <a href="apply-job.php" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </li>

                <!-- Job 2 -->
                <li class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-2 mb-md-0">
                            <span class="h6">Sales Account Executive</span>
                        </div>
                        <div class="col-sm-5 col-md-2 mb-2 mb-sm-0">
                            <span>Remote</span>
                        </div>
                        <div class="col-sm-5 col-md-4 mb-2 mb-sm-0">
                            <span>Sales</span>
                        </div>
                        <div class="col-sm-12 col-md-2 text-sm-end d-flex justify-content-between justify-content-md-end">
                            <button type="button" class="btn btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#jobDescriptionModal">Details</button>
                            <a href="apply-job.php" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </li>

                <!-- Job 3 -->
                <li class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-2 mb-md-0">
                            <span class="h6">Software Developer (Full Stack)</span>
                        </div>
                        <div class="col-sm-5 col-md-2 mb-2 mb-sm-0">
                            <span>London</span>
                        </div>
                        <div class="col-sm-5 col-md-4 mb-2 mb-sm-0">
                            <span>Software Development</span>
                        </div>
                        <div class="col-sm-12 col-md-2 text-sm-end d-flex justify-content-between justify-content-md-end">
                            <button type="button" class="btn btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#jobDescriptionModal">Details</button>
                            <a href="apply-job.php" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </li>

                <!-- Job 4 -->
                <li class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-2 mb-md-0">
                            <span class="h6">Business Strategy Manager</span>
                        </div>
                        <div class="col-sm-5 col-md-2 mb-2 mb-sm-0">
                            <span>Manchester</span>
                        </div>
                        <div class="col-sm-5 col-md-4 mb-2 mb-sm-0">
                            <span>Business Strategy</span>
                        </div>
                        <div class="col-sm-12 col-md-2 text-sm-end d-flex justify-content-between justify-content-md-end">
                            <button type="button" class="btn btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#jobDescriptionModal">Details</button>
                            <a href="apply-job.php" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </li>

                <!-- Job 5 -->
                <li class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-2 mb-md-0">
                            <span class="h6">Product Designer</span>
                        </div>
                        <div class="col-sm-5 col-md-2 mb-2 mb-sm-0">
                            <span>Manchester</span>
                        </div>
                        <div class="col-sm-5 col-md-4 mb-2 mb-sm-0">
                            <span>Design</span>
                        </div>
                        <div class="col-sm-12 col-md-2 text-sm-end d-flex justify-content-between justify-content-md-end">
                            <button type="button" class="btn btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#jobDescriptionModal">Details</button>
                            <a href="apply-job.php" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- End List Group -->

            <div class="w-lg-65 text-center mx-lg-auto mt-7">
                <p>Want to know more about us and our work culture? </p>
                <a class="btn btn-outline-primary" href="about-us.html">Learn More About Us</a>
            </div>
        </div>
        <!-- End List Directory -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- Job Description Modal -->
    <div class="modal fade" id="jobDescriptionModal" tabindex="-1" aria-labelledby="jobDescriptionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="jobDescriptionModalLabel">Office Cleaner - Job Description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Role Overview</h6>
                    <p>As an Office Cleaner at White Rose Cleaners, you will be responsible for maintaining a clean and hygienic work environment for our clients. Your duties will include dusting, vacuuming, and disinfecting workspaces, communal areas, and restrooms.</p>

                    <h6>Responsibilities</h6>
                    <ul>
                        <li>Clean and sanitize designated office areas</li>
                        <li>Restock supplies in restrooms</li>
                        <li>Ensure all areas are cleaned to company standards</li>
                        <li>Report any damages or issues to management</li>
                    </ul>

                    <h6>Requirements</h6>
                    <ul>
                        <li>Previous experience in cleaning preferred but not required</li>
                        <li>Attention to detail and reliability</li>
                        <li>Good communication skills</li>
                        <li>Ability to work independently</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Job Description Modal -->

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>

</body>

</html>