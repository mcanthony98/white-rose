<?php
require "includes/connect.php";

$sid = $_GET['id'];
$profres = $conn->query("SELECT * FROM blog WHERE blog_id='$sid'");
$row = $profres->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en" dir="">

<head>

    <!-- Title -->
    <title><?php echo $row['blog_title'];?> | White Rose Cleaners</title>
<meta name="description" content="<?php echo $row['blog_description'];?>">

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>

</head>

<body>

    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Article Description -->
        <div class="container content-space-t-2 content-space-t-lg-2 content-space-b-2">
            <div class="w-lg-65 mx-lg-auto">

                <div class="my-4 my-sm-8">
                    <img class="img-fluid rounded-lg" src="uploads/<?php echo $row['blog_image'];?>" alt="<?php echo $row['blog_title'];?>">
                </div>

                <div class="mb-4">
                    <h1 class="h2"><?php echo $row['blog_title'];?></h1>
                </div>

                <div class="row align-items-sm-center mb-5 d-none">
                    <div class="col-sm-7 mb-4 mb-sm-0">
                        <!-- Media -->
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-circle" src="assets/img/wrc/user.png" alt="Author">
                            </div>

                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-0">
                                    <a class="text-dark" href="blog-author-profile.html">Christina Kray</a>
                                </h5>
                                <span class="d-block small">2 days ago</span>
                            </div>
                        </div>
                        <!-- End Media -->
                    </div>
                    <!-- End Col -->

                    <!-- End Col -->
                </div>
                <!-- End Row -->

                <?php echo $row['blog_content'];?>
        </div>
        <!-- End Article Description -->
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