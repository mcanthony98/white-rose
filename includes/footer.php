<?php
 
 $navcatres = $conn->query("SELECT * FROM category WHERE cat_status=1");
 ?>
<!-- ========== FOOTER ========== -->
<footer class="bg-light">
    <div class="container pb-1 pb-lg-7">
        <div class="row content-space-t-2">
            <!-- Logo and Contact Info -->
            <div class="col-lg-3 mb-7 mb-lg-0">
                <!-- Logo -->
                <div class="mb-5">
                    <a class="navbar-brand" href="home.php" aria-label="White Rose Cleaners">
                        <img class="navbar-brand-logo" src="assets/img/wrc/logo-no-bg.png" style="height: 60px;" alt="Logo">
                    </a>
                </div>
                <!-- End Logo -->

                <!-- Contact Info -->
                <ul class="list-unstyled list-py-1">
                    <li><a class="link-sm link-secondary" href="#"><i class="bi-geo-alt-fill me-1"></i> 1234 Cleaning Ave, CleanCity</a></li>
                    <li><a class="link-sm link-secondary" href="tel:+1234567890"><i class="bi-telephone-inbound-fill me-1"></i> +1 (234) 567-890</a></li>
                    <li><a class="link-sm link-secondary" href="mailto:info@whiterosecleaners.co.uk"><i class="bi-envelope-fill me-1"></i> info@whiterosecleaners.co.uk</a></li>
                </ul>
                <!-- End Contact Info -->
            </div>
            <!-- End Logo and Contact Info -->

            <!-- Useful Links -->
            <div class="col-sm mb-7 mb-sm-0">
                <h5 class="mb-3">Useful Links</h5>
                <!-- List -->
                <ul class="list-unstyled list-py-1">
                    <li><a class="link-sm link-secondary" href="index.php">Home</a></li>
                    <li><a class="link-sm link-secondary" href="about.php">About Us</a></li>
                    <li><a class="link-sm link-secondary" href="blogs.php">Blog</a></li>
                    <li><a class="link-sm link-secondary" href="faqs.php">FAQs</a></li>
                    <li><a class="link-sm link-secondary" href="contact.php">Contact Us</a></li>
                </ul>
                <!-- End List -->
            </div>
            <!-- End Useful Links -->

            <!-- Commercial Cleaning -->
            <?php while($navspecrow = $navcatres->fetch_assoc()){?>
            <div class="col-sm mb-7 mb-sm-0">
                <h5 class="mb-3"><?php echo $navspecrow['category_name'];?> Cleaning</h5>
                <!-- List -->
                <ul class="list-unstyled list-py-1 mb-0">
                <?php 
                $navspecrowid = $navspecrow['category_id'];
                $navservres = $conn->query("SELECT * FROM service WHERE category_id=$navspecrowid AND status=1");
                while($navservrow = $navservres->fetch_assoc()){
                ?>
                    <li><a class="link-sm link-secondary" href="service.php?id=<?php echo $navservrow['service_id'];?>&<?php echo $navservrow['slag'];?>"><?php echo $navservrow['name'];?></a></li>
                    <?php } ?>
                </ul>
                <!-- End List -->
            </div>
            <!-- End Commercial Cleaning -->
             <?php }?>

            
        </div>
        <!-- End Row -->

        <div class="border-top my-7"></div>

        <div class="row mb-7">
            <div class="col-sm mb-3 mb-sm-0">
                <!-- Socials -->
                <ul class="list-inline list-separator mb-0">
                    <li class="list-inline-item">
                        <a class="text-body" href="faqs.php">Privacy &amp; Policy</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-body" href="faqs.php">Terms & Conditions</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-body" href="faqs.php">Help</a>
                    </li>
                </ul>
                <!-- End Socials -->
            </div>

            <div class="col-sm-auto">
                <!-- Socials -->
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a class="btn btn-soft-secondary btn-xs btn-icon" href="#">
                            <i class="bi-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-soft-secondary btn-xs btn-icon" href="#">
                            <i class="bi-google"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-soft-secondary btn-xs btn-icon" href="#">
                            <i class="bi-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-soft-secondary btn-xs btn-icon" href="#">
                            <i class="bi-instagram"></i>
                        </a>
                    </li>
                </ul>
                <!-- End Socials -->
            </div>
        </div>

        <!-- Copyright -->
        <div class="w-md-85 text-lg-center mx-lg-auto">
            <p class="text-muted small">&copy; <span id="currentYear"></span> White Rose Cleaners. All rights reserved.</p>
            <p class="text-muted small">Built by <a href="https://ganiamtech.com" class="text-primary">Ganiam Tech</a></p>
        </div>
        <!-- End Copyright -->
    </div>
</footer>
<!-- ========== END FOOTER ========== -->

<!-- Go To Top -->
<a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
   "offsetTop": 700,
   "position": {
     "init": {
       "right": "2rem"
     },
     "show": {
       "bottom": "2rem"
     },
     "hide": {
       "bottom": "-2rem"
     }
   }
 }'>
    <i class="bi-chevron-up"></i>
</a>

<script>
    document.getElementById('currentYear').textContent = new Date().getFullYear();
</script>