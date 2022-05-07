@extends('layouts.libraries')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="/index"
                        class="nav-link scrollto {{ request()->segment(1) == 'index' ? 'active' : '' }}"><i
                            class="bx bx-home"></i> <span>Home</span></a>
                </li>
                <li><a href="/about"
                        class="nav-link scrollto {{ request()->segment(1) == 'about' ? 'active' : '' }}"><i
                            class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="/resume"
                        class="nav-link scrollto {{ request()->segment(1) == 'resume' ? 'active' : '' }}"><i
                            class="bx bx-file-blank"></i> <span>Resume</span></a>
                </li>
                <li><a href="/portfolio"
                        class="nav-link scrollto {{ request()->segment(1) == 'portfolio' ? 'active' : '' }}"><i
                            class="bx bx-book-content"></i>
                        <span>Portfolio</span></a></li>
                <li><a href="/services"
                        class="nav-link scrollto {{ request()->segment(1) == 'services' ? 'active' : '' }}"><i
                            class="bx bx-server"></i>
                        <span>Services</span></a></li>
                <li><a href="/contact"
                        class="nav-link scrollto {{ request()->segment(1) == 'contact' ? 'active' : '' }}"><i
                            class="bx bx-envelope"></i> <span>Contact</span></a>
                </li>
            </ul>
        </nav><!-- .nav-menu -->

    </header><!-- End Header -->

    <!-- ======= Main ======= -->
    <main id="main">
        <!-- Flash Messages Included to use in every page -->
        @include('layouts.flash-message')
        @yield('content')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Uzair Afridi</h3>
            <p>I am Undergrad Software Engineering Student with the passion of Web Development
                and Web Security.
            </p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>UzairAfridi</span></strong>. All Rights Reserved
            </div>

        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

</body>

</html>
