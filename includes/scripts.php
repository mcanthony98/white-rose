    <!-- JS Implementing Plugins -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>

    <!-- JS Front -->
    <script src="assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        (function() {
            // INITIALIZATION OF HEADER
            // =======================================================
            new HSHeader('#header').init()


            // INITIALIZATION OF MEGA MENU
            // =======================================================
            new HSMegaMenu('.js-mega-menu', {
                desktop: {
                    position: 'left'
                }
            })


            // INITIALIZATION OF SHOW ANIMATIONS
            // =======================================================
            new HSShowAnimation('.js-animation-link')


            // INITIALIZATION OF BOOTSTRAP VALIDATION
            // =======================================================
            HSBsValidation.init('.js-validate', {
                onSubmit: data => {
                    data.event.preventDefault()
                    alert('Submited')
                }
            })


            // INITIALIZATION OF BOOTSTRAP DROPDOWN
            // =======================================================
            HSBsDropdown.init()


            // INITIALIZATION OF GO TO
            // =======================================================
            new HSGoTo('.js-go-to')


            // INITIALIZATION OF AOS
            // =======================================================
            AOS.init({
                duration: 650,
                once: true
            });


            // INITIALIZATION OF TEXT ANIMATION (TYPING)
            // =======================================================
            HSCore.components.HSTyped.init('.js-typedjs')


            // INITIALIZATION OF SWIPER
            // =======================================================
            var sliderThumbs = new Swiper('.js-swiper-thumbs', {
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                history: false,
                breakpoints: {
                    480: {
                        slidesPerView: 2,
                        spaceBetween: 15,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 15,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 15,
                    },
                },
                on: {
                    'afterInit': function(swiper) {
                        swiper.el.querySelectorAll('.js-swiper-pagination-progress-body-helper')
                            .forEach($progress => $progress.style.transitionDuration = `${swiper.params.autoplay.delay}ms`)
                    }
                }
            });

            var sliderMain = new Swiper('.js-swiper-main', {
                effect: 'fade',
                autoplay: true,
                loop: true,
                thumbs: {
                    swiper: sliderThumbs
                }
            })

            var swiper = new Swiper('.js-swiper-single-testimonials', {
                pagination: {
                    el: '.js-swiper-single-testimonials-pagination',
                    clickable: true,
                },
            });


        })()
    </script>