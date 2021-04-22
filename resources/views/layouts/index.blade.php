<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Inner Page - iPortfolio Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href={{ asset('img/favicon.png')}} rel="icon">
    <link href={{ asset('img/apple-touch-icon.png')}} rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href={{ asset('vendor/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">
    <link href={{ asset('vendor/icofont/icofont.min.css')}} rel="stylesheet">
    <link href={{ asset('vendor/boxicons/css/boxicons.min.css')}} rel="stylesheet">
    <link href={{ asset('vendor/venobox/venobox.css')}} rel="stylesheet">
    <link href={{ asset('vendor/owl.carousel/assets/owl.carousel.min.css')}} rel="stylesheet">
    <link href={{ asset('vendor/aos/aos.css')}} rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href={{ asset('css/style.css')}} rel="stylesheet">

    <!-- =======================================================
    * Template Name: iPortfolio - v1.4.1
    * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

<!-- ======= Header ======= -->
<header id="header">
<div class="d-flex flex-column">

    <div class="profile">
    <img src={{ asset('img/profile-img.jpg')}} alt="" class="img-fluid rounded-circle">
    <h1 class="text-light"><a href="index.html">Alex Smith</a></h1>
    <div class="social-links mt-3 text-center">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
    </div>

    <nav class="nav-menu">
    <ul>
        <li><a href="index.html"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
        <li><a href="#services"><i class="bx bx-server"></i> Services</a></li>
        <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>

    </ul>
    </nav><!-- .nav-menu -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

</div>
</header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
        <h1>Alex Smith</h1>
        <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
        </div>
    </section><!-- End Hero -->

<main id="main">

    @yield('content')

</main>

    @include('partials.footer')

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

        <!-- Vendor JS Files -->
        <script src={{ asset('vendor/jquery/jquery.min.js')}}></script>
        <script src={{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>
        <script src={{ asset('vendor/jquery.easing/jquery.easing.min.js')}}></script>
        <script src={{ asset('vendor/php-email-form/validate.js')}}></script>
        <script src={{ asset('vendor/waypoints/jquery.waypoints.min.js')}}></script>
        <script src={{ asset('vendor/counterup/counterup.min.js')}}></script>
        <script src={{ asset('vendor/isotope-layout/isotope.pkgd.min.js')}}></script>
        <script src={{ asset('vendor/venobox/venobox.min.js')}}></script>
        <script src={{ asset('vendor/owl.carousel/owl.carousel.min.js')}}></script>
        <script src={{ asset('vendor/typed.js/typed.min.js')}}></script>
        <script src={{ asset('vendor/aos/aos.js')}}></script>

        <!-- Template Main JS File -->
        <script src={{ asset('js/main.js')}}></script>

    </body>
</html>