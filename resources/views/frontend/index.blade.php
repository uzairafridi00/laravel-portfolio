@extends('layouts.master')
@section('title', 'Uzair Afridi')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Uzair Afridi</h1>
            <p>I'm <span class="typed" data-typed-items="Developer, Web Pentester, Freelancer,"></span>
            </p>

            <p>Talk is cheap. Show me the code.
            </p>
            <div class="social-links">
                <a href="https://github.com/uzairafridi00" class="github"><i class="bx bxl-github"></i></a>
                <a href="https://twitter.com/uzair__afridi?t=lnf_yrw5hHCe7yz6vGGjVA&s=09" class="twitter"><i
                        class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/uzairafridi00" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/uzair_afridi" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/in/uzair-afridi-011bbb199/" class="linkedin"><i
                        class="bx bxl-linkedin"></i></a>
            </div>

            <br>
            <a href="{{ route('contact') }}"><button class="btn btn-primary rounded-lg">Get in Touch</button></a>
        </div>
    </section><!-- End Hero -->
@endsection
