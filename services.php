<?php
require "includes/connect.php";


$servres = $conn->query("SELECT * FROM service s JOIN category c ON s.category_id=c.category_id WHERE s.status=1 AND c.cat_status=1");
$catres = $conn->query("SELECT * FROM category WHERE cat_status=1");
?>
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
                <?php
                while($catrow = $catres->fetch_assoc()){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:;" data-group="<?php echo $catrow['category_name'];?>"><?php echo $catrow['category_name'];?></a>
                </li>
                <?php } ?>
            </ul>
            <!-- End Nav -->
        </div>
        <!-- End Nav Scroller -->

        <!-- Service Cards -->
        <div class="js-shuffle row row-cols-1 row-cols-sm-2 row-cols-lg-3">
        <?php
             while($servrow = $servres->fetch_assoc()){
            ?>
            <!-- Commercial Cleaning -->
            <div class="js-shuffle-item col mb-5" data-groups='["<?php echo $servrow['category_name'];?>"]'>
                <!-- Card -->
                <div class="card h-100">
                    <img class="card-img-top" src="uploads/<?php echo $servrow['image'];?>" alt="<?php echo $servrow['name'];?>">
                    <div class="card-body">
                        <h3 class="card-title mb-3"><?php echo $servrow['name'];?></h3>
                        <p class="card-text"><?php echo $servrow['short_desc'];?></p>
                    </div>
                    <div class="card-footer pt-0">
                        <a class="btn btn-outline-primary" href="service.php?id=<?php echo $servrow['service_id'];?>&<?php echo $servrow['slag'];?>">View Service</a>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <?php } ?>

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