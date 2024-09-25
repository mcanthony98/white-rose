<?php
require "includes/connect.php";


$res = $conn->query("SELECT * FROM blog WHERE blog_status=1");
$cres = $conn->query("SELECT * FROM blog WHERE blog_status=1 GROUP BY blog_category");
?>
<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <!-- Title -->
    <title>Our Blog | White Rose Cleaners</title>

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>
</head>

<body>

    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Hero -->
        <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-1 content-space-b-md-2">
            <div class="w-md-75 w-lg-50 text-center mx-md-auto">
                <h1 class="display-4">Our Blog</h1>
                <p class="lead">Insights, tips, and trends to keep your spaces sparkling clean and fresh.</p>
            </div>
        </div>
        <!-- End Hero -->

        <!-- Card Grid -->
        <div class="container content-space-b-2 content-space-b-lg-3">
            <div class="row justify-content-md-center align-items-md-center mb-7">
                <div class="col-md-6 col-lg-5">
                    <form>
                        <!-- Input Card -->
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search articles" aria-label="Search articles">
                            <button type="button" class="btn btn-primary"><i class="bi-search"></i></button>
                        </div>
                        <!-- End Input Card -->
                    </form>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->

            <div class="row mb-7">
            <?php while($row = $res->fetch_assoc()){?>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <!-- Card -->
                    <div class="card h-100">
                        <div class="shape-container">
                            <img class="card-img-top" src="uploads/<?php echo $row['blog_image'];?>" alt="<?php echo $row['blog_title'];?>">

                            <!-- Shape -->
                            <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                                    <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                                </svg>
                            </div>
                            <!-- End Shape -->
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <h3 class="card-title">
                                <a class="text-dark" href="article.php?id=<?php echo $row['blog_id'];?>&<?php echo $row['blog_slag'];?>"><?php echo $row['blog_title'];?></a>
                            </h3>

                            <p class="card-text"><?php echo $row['blog_description'];?></p>
                        </div>
                        <!-- End Card Body -->

                        <!-- Card Footer -->
                        <div class="card-footer d-none">
                            <div class="d-flex align-items-center">
                                <img class="avatar avatar-xs avatar-circle" src="assets/img/wrc/user.png" alt="Author Image">
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-end">
                                        <p class="card-text">August 28</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card Footer -->
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Col -->
                 <?php } ?>

                <!-- Additional Cards Go Here -->
            </div>
            <!-- End Row -->

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">
                                <i class="bi-chevron-double-left small"></i>
                            </span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">
                                <i class="bi-chevron-double-right small"></i>
                            </span>
                    </li>
                </ul>
            </nav>
            <!-- End Pagination -->
        </div>
        <!-- End Card Grid -->
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