<?php
require "includes/connect.php";

$sid = $_GET['id'];
$profres = $conn->query("SELECT * FROM service s JOIN category c ON s.category_id=c.category_id WHERE s.service_id='$sid'");
$row = $profres->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <!-- Title -->
    <title><?php echo $row['name'] ;?> |  White Rose Cleaners</title>
    <meta name="description" content="<?php echo $row['short_desc'];?>">

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>
</head>

<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Content  -->
        <div class="container content-space-t-3 content-space-t-lg-4 content-space-b-2">
            <div class="row">
                <div class="col-lg-7 mb-7 mb-lg-0">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <img class="img-fluid rounded-2 w-100" src="uploads/<?php echo $row['image'];?>" alt="<?php echo $row['slag'];?>">
                        </div>
                        <!-- End Col -->


                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->

                <div class="col-lg-5">
                    <div class="ps-lg-4">
                        <div class="mb-6">
                            <h1><?php echo $row['name'];?></h1>
                            <?php echo $row['long_desc'];?>
                        </div>

                        <hr class="my-5">

                        <dl class="row">
                            <dt class="col-sm-4">Service Type</dt>
                            <dd class="col-sm-8"><?php echo $row['category_name'];?> Cleaning</dd>
                        </dl>
                        <!-- End Row -->

                        <dl class="row">
                            <dt class="col-sm-4">Service Area</dt>
                            <dd class="col-sm-8">Available across various areas across the UK</dd>
                        </dl>
                        <!-- End Row -->

                        <dl class="row">
                            <dt class="col-sm-4">Quality Guarantee</dt>
                            <dd class="col-sm-8">100% Satisfaction Guaranteed</dd>
                        </dl>
                        <!-- End Row -->

                        <dl class="row">
                            <dt class="col-sm-4">Eco-Friendly</dt>
                            <dd class="col-sm-8">Yes, we use eco-friendly cleaning products</dd>
                        </dl>
                        <!-- End Row -->

                        <hr class="my-5">
                        <!-- End Row -->
                    </div>
                    <!-- End Sticky Block -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Content  -->

        <!-- Why Our Office Cleaning Stands Out -->
        <div class="overflow-hidden">
            <div class="container content-space-2 content-space-lg-3">
                <!-- Heading -->
                <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                    <span class="text-cap">Comprehensive <?php echo $row['name'] ;?></span>
                    <h2>Why Our <?php echo $row['name'] ;?> Stands Out</h2>
                </div>
                <!-- End Heading -->

                <div class="w-md-75 mx-md-auto">
                    <div class="row justify-content-lg-center align-items-md-center">
                        <div class="col-md-5 mb-7 mb-md-0">
                            <!-- List Checked -->
                            <ul class="list-checked list-checked-soft-bg-dark list-checked-lg mb-5">
                                <li class="list-checked-item">DBS-checked, trained staff to ensure your space is cleaned with professionalism and care</li>
                                <li class="list-checked-item">Thorough dusting and disinfecting of all surfaces, desks, and workstations</li>
                                <li class="list-checked-item">Waste collection and disposal, ensuring a clutter-free workspace</li>
                                <li class="list-checked-item">Eco-friendly, non-toxic products to keep your office safe for employees and visitors</li>
                                <li class="list-checked-item">Flexible cleaning schedules to minimize disruption to your workday</li>
                                <li class="list-checked-item">Dedicated supervision with quality control audits for consistent results</li>
                            </ul>
                            <!-- End List Checked -->

                            <a class="link" href="services.php">Explore More Services <i class="bi-chevron-right small ms-1"></i></a>
                        </div>

                        <div class="col-md-7 col-lg-5">
                            <div class="position-relative">
                                <!-- Card -->
                                <div class="card">
                                    <div class="card-body">
                                        <span class="svg-icon text-primary mb-4">
                                            <i class="bi-shield-check fa-2x"></i>
                                        </span>

                                        <h3 class="card-title">Tailored Services for your spaces </h3>
                                        <p class="card-text">Our <?php echo $row['name'] ;?> service covers everything from daily maintenance to deep cleaning. We dust, disinfect, vacuum, and sanitize all areas, including workstations, communal spaces, and high-touch surfaces to ensure a healthy, welcoming environment. We customize our approach based on your specific needs, ensuring your space remains spotless, organized, and ready for success.</p>
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
        <!-- Why Us -->


        <!-- Clients -->
        <div class="container content-space-2 d-none">

            <!-- Heading -->
            <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5">
                <h2>Trusted by our clients</h2>
            </div>
            <!-- End Heading -->

            <div class="row">
                <div class="col text-center py-3">
                    <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/brands/hollister-dark.svg" alt="Logo">
                </div>
                <!-- End Col -->

                <div class="col text-center py-3">
                    <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/brands/levis-dark.svg" alt="Logo">
                </div>
                <!-- End Col -->

                <div class="col text-center py-3">
                    <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/brands/new-balance-dark.svg" alt="Logo">
                </div>
                <!-- End Col -->

                <div class="col text-center py-3">
                    <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/brands/puma-dark.svg" alt="Logo">
                </div>
                <!-- End Col -->

                <div class="col text-center py-3">
                    <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/brands/nike-dark.svg" alt="Logo">
                </div>
                <!-- End Col -->

                <div class="col text-center py-3">
                    <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/brands/tnf-dark.svg" alt="Logo">
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- Clients -->

        <!-- CTA -->
        <div class="bg-dark" style="background-image: url(../assets/svg/components/wave-pattern-light.svg);">
            <div class="container content-space-2">
                <div class="row justify-content-lg-between align-items-lg-center">
                    <div class="col-md mb-5 mb-md-0">
                        <h2 class="text-white mb-0">Ready to experience a cleaner workspace?</h2>
                    </div>
                    <!-- End Col -->

                    <div class="col-md-auto">
                        <a class="btn btn-light btn-transition" href="contact.php">Request a Quote</a>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
        </div>
        <!-- End CTA -->
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