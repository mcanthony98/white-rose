<?php
 
 $navcatres = $conn->query("SELECT * FROM category WHERE cat_status=1");
 ?>
<!-- ========== HEADER ========== -->
<header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light navbar-show-hide bg-white" data-hs-header-options='{
        "fixMoment": 1000,
        "fixEffect": "slide"
      }'>
    <div class="container d-flex align-items-start">
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

                    <?php while($navspecrow = $navcatres->fetch_assoc()){?>
                    <!-- Residential -->
                    <li class="hs-has-sub-menu nav-item">
                        <a id="<?php echo $navspecrow['category_slag'];?>" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" aria-expanded="false"><?php echo $navspecrow['category_name'];?></a>
                        <!-- Residential Services -->
                        <div class="hs-sub-menu dropdown-menu" aria-labelledby="<?php echo $navspecrow['category_slag'];?>" style="min-width: 14rem;">
                        <?php 
                                $navspecrowid = $navspecrow['category_id'];
                                $navservres = $conn->query("SELECT * FROM service WHERE category_id=$navspecrowid");
                                while($navservrow = $navservres->fetch_assoc()){
                                ?>
                            <a class="dropdown-item" href="service.php?id=<?php echo $navservrow['service_id'];?>&<?php echo $navservrow['slag'];?>"><?php echo $navservrow['name'];?></a>
                            <?php }?>

                        </div>
                        <!-- End Residential Services -->
                    </li>
                    <!-- End Residential -->
                     
                    <?php } ?>

                   


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

                    <!-- Careers -->
                    <li class="nav-item d-none">
                        <a class="nav-link" href="careers.php">Careers</a>
                    </li>
                    <!-- End Careers -->

                </ul>
            </nav>

            <!-- CTA Button -->
            <div class="navbar-cta">
                <a class="btn btn-primary btn-transition" href="contact.php">Get a Free Quote</a>
            </div>
            <!-- End CTA Button -->

        </div>
        <!-- End Collapse -->
    </div>
</header>
<!-- ========== END HEADER ========== -->