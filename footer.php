
<!-- footer -->
<section class="footer py-5">
	<div class="footer-top-w3layouts py-lg-3">
		<div class="container">
			<div class="row footer-grid-w3lss">
				<div class="col-lg-4 footer-grid-w3ls text-left">
					<div class="footer-logo-w3">
						<h3 class="mb-4"><a class="logo-w3" href="index.html">CodersCluster.AI</a></h3>
						<ul>
                        <li>
                            <a href="index.php">Miles Stones</a>
                        </li><br>
                        <li>
                            <a href="about.php">Company Profiles</a>
                        </li><br>
                        <li>
                            <a href="index.php">Quality Policy</a>
                        </li>
					</div>
				</div>
                <div class="col-lg-2 footer-grid-w3ls links text-left">
					<h3 class="mb-4"> SERVICES </h3>
					<ul>
						<li>
							<a href="index.php">Smart Signaling</a>
						</li>
						<li>
							<a href="index.php">Smart Building</a>
						</li>
						<li>
							<a href="index.php">Smart City Solution</a>
						</li>
					</ul>
				</div>
                <div class="col-lg-3 footer-grid-w3ls links text-left">
					<h3 class="mb-4">SOLUTIONS </h3>
					<ul>
						<li><a href="index.php">IOT Services</a></li>
						<li><a href="index.php">Customer Services</a></li>
						<li><a href="index.php">Product Development Services</a></li>
					</ul>
				</div>
				<div class="col-lg-3 footer-grid-w3ls links text-left">
					<h3 class="mb-4">LATEST UPDATES </h3>
					<ul>
                        <li><a href="index.php">News & Events</a></li>
                        <li><a href="index.php">Job Opportunities</a></li>
                        <li><a href="index.php">Downloads</a></li>
                    </ul>
				</div>


			</div>
		</div>
	</div>
</section>
<!-- //footer -->
    <!-- copyright -->
    <div class="copy_right py-4 text-center">
        <p>© 2019 CodersCluster.AI | All rights reserved | Privacy Policy | Quality Policy</p>

    </div>
    <!-- //copyright -->
<script src="js/jquery-2.2.3.min.js"></script>
    <!--slider-->
    <script src="js/jquery.sliderPro.min.js"></script>
    <script>
        $(document).ready(function($) {
            $('#example5').sliderPro({
                width: 1980,
                height: 650,
                orientation: 'vertical',
                loop: false,
                arrows: true,
                buttons: false,
                thumbnailsPosition: 'right',
                thumbnailPointer: true,
                thumbnailWidth: 290,
                breakpoints: {
                    800: {
                        thumbnailsPosition: 'bottom',
                        thumbnailWidth: 270,
                        thumbnailHeight: 100
                    },
                    500: {
                        thumbnailsPosition: 'bottom',
                        thumbnailWidth: 120,
                        thumbnailHeight: 50
                    }
                }
            });
        });
    </script>


    <!--//slider-->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->

    <!-- carousel -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    900: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->
    <!-- //js -->
    <script src="js/bootstrap.js"></script>
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->