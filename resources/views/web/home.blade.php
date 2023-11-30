@extends('web.layout.master')

@section('content')
    <section class="hero-section" id="section_1">
        <div class="section-overlay"></div>

        <div class="container d-flex justify-content-center align-items-center">
            <div class="row">

                <div class="col-12 mt-auto mb-5 text-center">
                    <small>Festava Live Presents</small>

                    <h1 class="text-white mb-5">Night Live 2023</h1>

                    <a class="btn custom-btn smoothscroll" href="#section_2">Let's begin</a>
                </div>

                <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                    <div class="date-wrap">
                        <h5 class="text-white">
                            <i class="custom-icon bi-clock me-2"></i>
                            10 - 12<sup>th</sup>, Dec 2023
                        </h5>
                    </div>

                    <div class="location-wrap mx-auto py-3 py-lg-0">
                        <h5 class="text-white">
                            <i class="custom-icon bi-geo-alt me-2"></i>
                            National Center, United States
                        </h5>
                    </div>

                    <div class="social-share">
                        <ul class="social-icon d-flex align-items-center justify-content-center">
                            <span class="text-white me-3">Share:</span>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-facebook"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-twitter"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="video-wrap">
            <video autoplay="" loop="" muted="" class="custom-video" poster="">
                <source src="{{ asset('img/web/pexels-2022395.mp4') }}" type="video/mp4">

                Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <section class="about-section section-padding" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                    <div class="services-info">
                        <h2 class="text-white mb-4">About Festava 2022</h2>

                        <p class="text-white">Festava Live is free CSS template provided by TemplateMo website.
                            This
                            layout is built on Bootstrap v5.2.2 CSS library. You are free to use this template for
                            your commercial website.</p>

                        <h6 class="text-white mt-4">Once in Lifetime Experience</h6>

                        <p class="text-white">You are not allowed to redistribute the template ZIP file on any
                            other
                            website without a permission.</p>

                        <h6 class="text-white mt-4">Whole Night Party</h6>

                        <p class="text-white">Please tell your friends about our website. Thank you.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="about-text-wrap">
                        <img src=" img/web/pexels-alexander-suhorucov-6457579.jpg" class="about-image img-fluid">

                        <div class="about-text-info d-flex">
                            <div class="d-flex">
                                <i class="about-text-icon bi-person"></i>
                            </div>


                            <div class="ms-4">
                                <h3>a happy moment</h3>

                                <p class="mb-0">your amazing festival experience with us</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="artists-section section-padding" id="section_3">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 text-center">
                    <h2 class="mb-4">Meet Artists</h1>
                </div>

                <div class="col-lg-5 col-12">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="{{ asset('img/web/artists/joecalih-UmTZqmMvQcw-unsplash.jpg') }}"
                                class="artists-image img-fluid">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Name:</strong>
                                Madona
                            </p>

                            <p>
                                <strong>Birthdate:</strong>
                                August 16, 1958
                            </p>

                            <p>
                                <strong>Music:</strong>
                                Pop, R&amp;B
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Youtube Channel:</strong>
                                <a href="#">Madona Official</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-12">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="{{ asset('img/web/artists/abstral-official-bdlMO9z5yco-unsplash.jpg') }}"
                                class="artists-image img-fluid">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Name:</strong>
                                Rihana
                            </p>

                            <p>
                                <strong>Birthdate:</strong>
                                Feb 20, 1988
                            </p>

                            <p>
                                <strong>Music:</strong>
                                Country
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Youtube Channel:</strong>
                                <a href="#">Rihana Official</a>
                            </p>
                        </div>
                    </div>

                    <div class="artists-thumb">
                        <img src="{{ asset('img/web/artists/soundtrap-rAT6FJ6wltE-unsplash.jpg') }}"
                            class="artists-image img-fluid">

                        <div class="artists-hover">
                            <p>
                                <strong>Name:</strong>
                                Bruno Bros
                            </p>

                            <p>
                                <strong>Birthdate:</strong>
                                October 8, 1985
                            </p>

                            <p>
                                <strong>Music:</strong>
                                Pop
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Youtube Channel:</strong>
                                <a href="#">Bruno Official</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="schedule-section section-padding" id="section_4">
        <div class="container">
            <!-- awal coba -->
            <div class="col-12 text-center">
                <h2 class="mb-4">Upcoming Event's</h1>
            </div>
            <div id="myCarousel" class="carousel slide container gap-10" data-bs-ride="carousel">
                <div class="carousel-inner w-200">
                    <div class="carousel-item active">
                        <div class="col-md-3">
                            <a href="{{ route('detail') }}" style="color: black;">
                                <div class="card card-body">
                                    <img class="img-fluid" src="https://via.placeholder.com/640x360?text=1">
                                    <div class="card-title">
                                        <h6>Konser Metalica</h6>
                                    </div>
                                    <div class="card-text">
                                        <i class="bi bi-geo-alt"></i> Jakarta
                                        <br>
                                        <i class="bi bi-calendar"></i> 10 Januari 2024
                                    </div>
                                    <div class="card-footer mt-auto">
                                        Penyelenggara
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <a href="{{ route('detail') }}" style="color: black;">
                                <div class="card card-body">
                                    <img class="img-fluid" src="https://via.placeholder.com/640x360?text=2">
                                    <div class="card-title">
                                        <h6>Konser MetaliCa</h6>
                                    </div>
                                    <div class="card-text">
                                        <i class="bi bi-geo-alt"></i> Jakarta
                                        <br>
                                        <i class="bi bi-calendar"></i> 10 Januari 2024
                                    </div>
                                    <div class="card-footer mt-auto">
                                        Penyelenggara
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <a href="{{ route('detail') }}" style="color: black;">
                                <div class="card card-body">
                                    <img class="img-fluid" src="https://via.placeholder.com/640x360?text=3">
                                    <div class="card-title">
                                        <h6>Konser MetaliCa</h6>
                                    </div>
                                    <div class="card-text">
                                        <i class="bi bi-geo-alt"></i> Jakarta
                                        <br>
                                        <i class="bi bi-calendar"></i> 10 Januari 2024
                                    </div>
                                    <div class="card-footer mt-auto">
                                        Penyelenggara
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <a href="{{ route('detail') }}" style="color: black;">
                                <div class="card card-body">
                                    <img class="img-fluid" src="https://via.placeholder.com/640x360?text=4">
                                    <div class="card-title">
                                        <h6>Konser MetaliCa</h6>
                                    </div>
                                    <div class="card-text">
                                        <i class="bi bi-geo-alt"></i> Jakarta
                                        <br>
                                        <i class="bi bi-calendar"></i> 10 Januari 2024
                                    </div>
                                    <div class="card-footer mt-auto">
                                        Penyelenggara
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <a href="{{ route('detail') }}" style="color: black;">
                                <div class="card card-body">
                                    <img class="img-fluid" src="https://via.placeholder.com/640x360?text=5">
                                    <div class="card-title">
                                        <h6>Konser MetaliCa</h6>
                                    </div>
                                    <div class="card-text">
                                        <i class="bi bi-geo-alt"></i> Jakarta
                                        <br>
                                        <i class="bi bi-calendar"></i> 10 Januari 2024
                                    </div>
                                    <div class="card-footer mt-auto">
                                        Penyelenggara
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <a href="{{ route('detail') }}" style="color: black;">
                                <div class="card card-body">
                                    <img class="img-fluid" src="https://via.placeholder.com/640x360?text=6">
                                    <div class="card-title">
                                        <h6>Konser MetaliCa</h6>
                                    </div>
                                    <div class="card-text">
                                        <i class="bi bi-geo-alt"></i> Jakarta
                                        <br>
                                        <i class="bi bi-calendar"></i> 10 Januari 2024
                                    </div>
                                    <div class="card-footer mt-auto">
                                        Penyelenggara
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <a href="{{ route('detail') }}" style="color: black;">
                                <div class="card card-body">
                                    <img class="img-fluid" src="https://via.placeholder.com/640x360?text=7">
                                    <div class="card-title">
                                        <h6>Konser MetaliCa</h6>
                                    </div>
                                    <div class="card-text">
                                        <i class="bi bi-geo-alt"></i> Jakarta
                                        <br>
                                        <i class="bi bi-calendar"></i> 10 Januari 2024
                                    </div>
                                    <div class="card-footer mt-auto">
                                        Penyelenggara
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <a href="{{ route('detail') }}" style="color: black;">
                                <div class="card card-body">
                                    <img class="img-fluid" src="https://via.placeholder.com/640x360?text=8">
                                    <div class="card-title">
                                        <h6>Konser MetaliCa</h6>
                                    </div>
                                    <div class="card-text">
                                        <i class="bi bi-geo-alt"></i> Jakarta
                                        <br>
                                        <i class="bi bi-calendar"></i> 10 Januari 2024
                                    </div>
                                    <div class="card-footer mt-auto">
                                        Penyelenggara
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- akhir coba -->
        </div>
    </section>

    <section class="pricing-section section-padding section-bg" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="text-center mb-4">Event's</h2>
                </div>

                <div id="list-event" class="carousel slide container gap-10" data-bs-ride="carousel">
                    <div class="carousel-inner w-200">
                        <div class="carousel-item active">
                            <div class="col-md-3">
                                <a href="{{ route('detail') }}" style="color: black;">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="https://via.placeholder.com/640x360?text=1">
                                        <div class="card-title">
                                            <h6>Konser Metalica</h6>
                                        </div>
                                        <div class="card-text">
                                            <i class="bi bi-geo-alt"></i> Jakarta
                                            <br>
                                            <i class="bi bi-calendar"></i> 10 Januari 2024
                                        </div>
                                        <div class="card-footer mt-auto">
                                            Penyelenggara
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <a href="{{ route('detail') }}" style="color: black;">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="https://via.placeholder.com/640x360?text=2">
                                        <div class="card-title">
                                            <h6>Konser MetaliCa</h6>
                                        </div>
                                        <div class="card-text">
                                            <i class="bi bi-geo-alt"></i> Jakarta
                                            <br>
                                            <i class="bi bi-calendar"></i> 10 Januari 2024
                                        </div>
                                        <div class="card-footer mt-auto">
                                            Penyelenggara
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <a href="{{ route('detail') }}" style="color: black;">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="https://via.placeholder.com/640x360?text=3">
                                        <div class="card-title">
                                            <h6>Konser MetaliCa</h6>
                                        </div>
                                        <div class="card-text">
                                            <i class="bi bi-geo-alt"></i> Jakarta
                                            <br>
                                            <i class="bi bi-calendar"></i> 10 Januari 2024
                                        </div>
                                        <div class="card-footer mt-auto">
                                            Penyelenggara
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <a href="{{ route('detail') }}" style="color: black;">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="https://via.placeholder.com/640x360?text=4">
                                        <div class="card-title">
                                            <h6>Konser MetaliCa</h6>
                                        </div>
                                        <div class="card-text">
                                            <i class="bi bi-geo-alt"></i> Jakarta
                                            <br>
                                            <i class="bi bi-calendar"></i> 10 Januari 2024
                                        </div>
                                        <div class="card-footer mt-auto">
                                            Penyelenggara
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <a href="{{ route('detail') }}" style="color: black;">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="https://via.placeholder.com/640x360?text=5">
                                        <div class="card-title">
                                            <h6>Konser MetaliCa</h6>
                                        </div>
                                        <div class="card-text">
                                            <i class="bi bi-geo-alt"></i> Jakarta
                                            <br>
                                            <i class="bi bi-calendar"></i> 10 Januari 2024
                                        </div>
                                        <div class="card-footer mt-auto">
                                            Penyelenggara
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <a href="{{ route('detail') }}" style="color: black;">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="https://via.placeholder.com/640x360?text=6">
                                        <div class="card-title">
                                            <h6>Konser MetaliCa</h6>
                                        </div>
                                        <div class="card-text">
                                            <i class="bi bi-geo-alt"></i> Jakarta
                                            <br>
                                            <i class="bi bi-calendar"></i> 10 Januari 2024
                                        </div>
                                        <div class="card-footer mt-auto">
                                            Penyelenggara
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <a href="{{ route('detail') }}" style="color: black;">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="https://via.placeholder.com/640x360?text=7">
                                        <div class="card-title">
                                            <h6>Konser MetaliCa</h6>
                                        </div>
                                        <div class="card-text">
                                            <i class="bi bi-geo-alt"></i> Jakarta
                                            <br>
                                            <i class="bi bi-calendar"></i> 10 Januari 2024
                                        </div>
                                        <div class="card-footer mt-auto">
                                            Penyelenggara
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <a href="{{ route('detail') }}" style="color: black;">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="https://via.placeholder.com/640x360?text=8">
                                        <div class="card-title">
                                            <h6>Konser MetaliCa</h6>
                                        </div>
                                        <div class="card-text">
                                            <i class="bi bi-geo-alt"></i> Jakarta
                                            <br>
                                            <i class="bi bi-calendar"></i> 10 Januari 2024
                                        </div>
                                        <div class="card-footer mt-auto">
                                            Penyelenggara
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#list-event"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#list-event"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
            <div class="col-lg-8 col-12 mx-auto mt-10">
                <br>
                <br>
                <a href="" class="btn custom-btn d-lg-block d-none">View more Event's</a>
            </div>
        </div>
    </section>

    <section class="contact-section section-padding" id="section_6">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="text-center mb-4">Interested? Let's talk</h2>

                    <nav class="d-flex justify-content-center">
                        <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab"
                            role="tablist">
                            <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-ContactForm" type="button" role="tab"
                                aria-controls="nav-ContactForm" aria-selected="false">
                                <h5>Contact Form</h5>
                            </button>

                            <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-ContactMap" type="button" role="tab"
                                aria-controls="nav-ContactMap" aria-selected="false">
                                <h5>Google Maps</h5>
                            </button>
                        </div>
                    </nav>

                    <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel"
                            aria-labelledby="nav-ContactForm-tab">
                            <form class="custom-form contact-form mb-5 mb-lg-0" action="#" method="post"
                                role="form">
                                <div class="contact-form-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="text" name="contact-name" id="contact-name"
                                                class="form-control" placeholder="Full name" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="email" name="contact-email" id="contact-email"
                                                pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address"
                                                required>
                                        </div>
                                    </div>

                                    <input type="text" name="contact-company" id="contact-company"
                                        class="form-control" placeholder="Company" required>

                                    <textarea name="contact-message" rows="3" class="form-control" id="contact-message" placeholder="Message"></textarea>

                                    <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel"
                            aria-labelledby="nav-ContactMap-tab">
                            <iframe class="google-map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29974.469402870927!2d120.94861466021855!3d14.106066818082482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd777b1ab54c8f%3A0x6ecc514451ce2be8!2sTagaytay%2C%20Cavite%2C%20Philippines!5e1!3m2!1sen!2smy!4v1670344209509!5m2!1sen!2smy"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <!-- You can easily copy the embed code from Google Maps -> Share -> Embed a map // -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
