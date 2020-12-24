<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../frontend/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Top Search Form Area -->
	<div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="ti-close"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="alimeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="./index.html"><img src="" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="./index.html">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./venue.html">- Venue</a></li>
                                            <li><a href="./caterer.html">- Caterer</a></li>
                                            <li><a href="./photographer.html">- Photographer</a></li> 
                                            <li><a href="./beautician.html">- Beautician</a></li>
                                            <li><a href="./decorator.html">- Decorator</a></li>
											<li><a href="./card_print.html">- Card Printer</a></li>
                                        </ul>
                                    </li>
									<li><a href="./about.html">About</a></li>
                                    <li class="active"><a href="./gallery.html">Gallery</a></li>
									<li><a href="./cart.html">Your Cart</a></li>
                                    <li><a href="./contact.html">Contact</a></li>
                                </ul>

                                <!-- Search Icon -->
                                <div class="search-icon" data-toggle="modal" data-target="#searchModal"><i class="ti-search"></i></div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(../frontend/img/bg-img/64.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Gallery</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="../frontend/index.html"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Projects Menu -->
                    <div class="alime-projects-menu wow fadeInUp" data-wow-delay="100ms">
                        <div class="portfolio-menu text-center">
                            <button class="btn active" data-filter="*">All</button>
                            <button class="btn" data-filter="../frontend/wedding">Wedding</button>
                            <button class="btn" data-filter="../frontend/birthday">Birthday</button>
                            <button class="btn" data-filter="../frontend/concert">Concert</button>
                            <button class="btn" data-filter="../frontend/meeting">Meeting</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row alime-portfolio">
                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item birthday mb-30 wow fadeInUp" data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <img src="../frontend/img/bg-img/b1.jpg" alt="">
                        <div class="hover-content">
                            <a href="../frontend/img/bg-img/b1.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item video concert mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="../frontend/img/bg-img/c1.jpg" alt="">
                        <div class="hover-content">
                            <a href="../frontend/img/bg-img/c1.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item wedding mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="single-portfolio-content">
                        <img src="../frontend/img/bg-img/w4.jpg" alt="">
                        <div class="hover-content">
                            <a href="../frontend/img/bg-img/w4.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
				
				<div class="col-12 col-sm-6 col-lg-3 single_gallery_item birthday mb-30 wow fadeInUp" data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <img src="../frontend/img/bg-img/b4.jpg" alt="">
                        <div class="hover-content">
                            <a href="../frontend/img/bg-img/b4.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item concert mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="single-portfolio-content">
                        <img src="../frontend/img/bg-img/c2.jpg" alt="">
                        <div class="hover-content">
                            <a href="../frontend/img/bg-img/c2.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item birthday mb-30 wow fadeInUp" data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <img src="../frontend/img/bg-img/b5.jpg" alt="">
                        <div class="hover-content">
                            <a href="../frontend/img/bg-img/b5.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item video wedding mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="../frontend/img/bg-img/w6.jpg" alt="">
                        <div class="hover-content">
                            <a href="../frontend/img/bg-img/w6.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item concert mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="single-portfolio-content">
                        <img src="../frontend/img/bg-img/c3.jpg" alt="">
                        <div class="hover-content">
                            <a href="../frontend/img/bg-img/c3.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item birthday mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="single-portfolio-content">
                        <img src="../frontend/img/bg-img/b3.jpg" alt="">
                        <div class="hover-content">
                            <a href="../frontend/img/bg-img/b3.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
				
				<!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item meeting mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="single-portfolio-content">
                        <img src="../frontend/img/bg-img/m4.jpg" alt="">
                        <div class="hover-content">
                            <a href="../frontend/img/bg-img/m4.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item video wedding mb-30 wow fadeInUp" data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <img src="../frontend/img/bg-img/w2.jpg" alt="">
                        <div class="hover-content">
                            <a href="../frontend/img/bg-img/w2.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
				
				<!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item meeting mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="single-portfolio-content">
                        <img src="../frontend/img/bg-img/m3.jpg" alt="">
                        <div class="hover-content">
                            <a href="../frontend/img/bg-img/m3.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item concert mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="../frontend/img/bg-img/c4.jpg" alt="">
                        <div class="hover-content">
                            <a href="../frontend/img/bg-img/c4.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
				
				<!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item meeting mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="single-portfolio-content">
                        <img src="../frontend/img/bg-img/m2.jpg" alt="">
                        <div class="hover-content">
                            <a href="../frontend/img/bg-img/m2.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item wedding mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="single-portfolio-content">
                        <img src="../frontend/img/bg-img/w1.jpg" alt="">
                        <div class="hover-content">
                            <a href="../frontend/img/bg-img/w1.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item meeting mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="single-portfolio-content">
                        <img src="../frontend/img/bg-img/m1.jpg" alt="">
                        <div class="hover-content">
                            <a href="../frontend/img/bg-img/m1.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
            </div>
			

            <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="800ms">
                    <a href="#" class="btn alime-btn btn-2 mt-15">View More</a>
                </div>
            </div>
        </div>
    </div>
	
	
    <!-- Gallery Area End -->

        <!-- Instagram Feed Area -->
        <div class="instragram-feed-area owl-carousel">
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="../frontend/img/bg-img/v10.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">     
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="../frontend/img/bg-img/v3.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">     
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="../frontend/img/bg-img/v5.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">     
                </div>
            </div>
			<!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="../frontend/img/bg-img/v8.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">     
                </div>
            </div>
			<!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="../frontend/img/bg-img/v7.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">     
                </div>
            </div>
			
			<!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="../frontend/img/bg-img/v28.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">     
                </div>
            </div>	
        </div>
    </div>
    <!-- Follow Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content d-flex align-items-center justify-content-between">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->Thanks for visting! </p>
                        </div>
                        <!-- Footer Logo -->
                   
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="../frontend/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="../frontend/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="../frontend/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="../frontend/js/alime.bundle.js"></script>
    <!-- Active -->
    <script src="../frontend/js/default-assets/active.js"></script>

</body>

</html>