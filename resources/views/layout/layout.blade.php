<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com">

    <title>Home</title>

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-float">
            <div class="container">
                <a href="index.html"> <img src="../assets/img/logo1.jpeg" alt="image" style="width:80px;height:80px;"> </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarContent">
                    <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">
                        <li class="nav-item active">
                            <a href="/" class="nav-link text-success">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/about" class="nav-link text-success">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://madeinbali.baliprov.go.id/" class="nav-link text-success">Made in Bali</a>
                        </li>
                        <li class="nav-item">
                            <a href="/blog" class="nav-link text-success">News</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link text-success">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('section')

    <!-- footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-3 py-3">
                    <h3>Bapp<span class="text-success">eling.</span></h3>
                    <p>Bersama kita bisa membuat sampah lebih berguna.</p>

                    <p><a class="text-success" href="#">bappeling@gmail.com</a></p>
                    <p><a class="text-success" href="#">+00 1122 3344 5566</a></p>
                </div>
                <div class="col-lg-3 py-3">
                    <h5>Quick Links</h5>
                    <ul class="footer-menu ">
                        <li><a class="text-success" href="#">How it works</a></li>
                        <li><a class="text-success" href="#">Security</a></li>
                        <li><a class="text-success" href="#">Pricing</a></li>
                        <li><a class="text-success" href="#">Resources</a></li>
                        <li><a class="text-success" href="#">Report a Bug</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 py-3">
                    <h5>About Us</h5>
                    <ul class="footer-menu">
                        <li><a class="text-success" href="#">About Us</a></li>
                        <li><a class="text-success" href="#">Jobs</a></li>
                        <li><a class="text-success" href="#">Our Teams</a></li>
                        <li><a class="text-success" href="#">Testimonials</a></li>
                        <li><a class="text-success" href="#">News & Press</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 py-3">
                    <h5>Subscribe</h5>
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Enter your mail..">
                    </form>

                    <div class="sosmed-button mt-4">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-google"></span></a>
                        <a href="#"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 py-2">
                    <p id="copyright">&copy; 2022 <a class="text-success" href="https://macodeid.com/">TPS3R</a>. All rights reserved</p>
                </div>
                <div class="col-sm-6 py-2 text-right">
                    <div class="d-inline-block px-3">
                        <a class="text-success" href="#">Privacy</a>
                    </div>
                    <div class="d-inline-block px-3">
                        <a class="text-success" href="#">Contact Us</a>
                    </div>
                </div>
            </div>
        </div> <!-- .container -->
    </footer> <!-- .page-footer -->


    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>

    <script src="../assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>

    <script src="../assets/js/google-maps.js"></script>

    <script src="../assets/js/theme.js"></script>


</body>

</html>