@extends('web.layout.master')

@section('content')
    <section class="hero-section" id="section_1">
        <div class="section-overlay"></div>

        <div class="container d-flex justify-content-center align-items-center">
            <div class="row">

                <div class="col-12 mt-auto mb-5 text-center">
                    <small>Ipeun Live Presents</small>

                    <h1 class="text-white mb-5">Night Live 2023</h1>

                    <a class="btn custom-btn smoothscroll" href="#section_2">Let's begin</a>
                </div>

                <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                    <div class="date-wrap">
                        <h5 class="text-white">
                            <i class="custom-icon bi-clock me-2"></i>
                            30 - 31<sup>th</sup>, Dec 2023
                        </h5>
                    </div>

                    <div class="location-wrap mx-auto py-3 py-lg-0">
                        <h5 class="text-white">
                            <i class="custom-icon bi-geo-alt me-2"></i>
                            Bandung City Square
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
                        <h2 class="text-white mb-4">About Ipeun</h2>

                        <p class="text-white">Ipeun is a sales website that offers various concert tickets in Indonesia and also 
                        makes purchasing tickets easier.</p>

                        <h6 class="text-white mt-4">What is Ipeun Live Present?</h6>

                        <p class="text-white">Ipeun Live Presentis a new year celebration event leading up to 2024 with a very unique 
                        experience that will be felt when participating in the event.</p>

                        <h6 class="text-white mt-4">Come Jioin Us At Ipeun Live Present</h6>

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
                            <img src="{{ asset('img/web/artists/Tiara_Andini.jpg') }}"
                                class="artists-image img-fluid">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Name:</strong>
                                Tiara Andini
                            </p>

                            <p>
                                <strong>Birthdate:</strong>
                                Sept 16, 2001
                            </p>

                            <p>
                                <strong>Music:</strong>
                                Pop
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Youtube Channel:</strong>
                                <a href="#">Tiara Andini</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-12">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="{{ asset('img/web/artists/rizky febian.jpg') }}"
                                class="artists-image img-fluid">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Name:</strong>
                                Rizky Febian
                            </p>

                            <p>
                                <strong>Birthdate:</strong>
                                Feb 25, 1998
                            </p>

                            <p>
                                <strong>Music:</strong>
                                Pop
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Youtube Channel:</strong>
                                <a href="#">Rizky Febian</a>
                            </p>
                        </div>
                    </div>

                    <div class="artists-thumb">
                        <img src="{{ asset('img/web/artists/aldi taher.jpg') }}"
                            class="artists-image img-fluid">

                        <div class="artists-hover">
                            <p>
                                <strong>Name:</strong>
                                Aldi Taher
                            </p>

                            <p>
                                <strong>Birthdate:</strong>
                                October 25, 1983
                            </p>

                            <p>
                                <strong>Music:</strong>
                                All gendre
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Youtube Channel:</strong>
                                <a href="#">Aldi Taher Official</a>
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
            <div id="myCarousel" class="carousel slide container gap-10" >
                <div class="carousel-inner w-200">
                @foreach ($events as $key => $event)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <div class="col-md-3">
                            <a href="{{route('events.show', ['id' => $event->id]) }}" style="color: black;">
                                <div class="card card-body">
                                    <img class="img-fluid" src="{{ asset('upload/' . $event->event_image) }}" style="width: 254px; height: 144px;">
                                    <div class="card-title">
                                        <h6>{{ $event->event_name }}</h6>
                                    </div>
                                    <div class="card-text">
                                        <i class="bi bi-geo-alt"></i> &nbsp {{ $event->event_location }}
                                        <br>
                                        <i class="bi bi-calendar"></i> $nbsp  {{ $event->event_date }}
                                    </div>
                                    <div class="card-footer mt-auto">
                                        Penyelenggara
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
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
                    @foreach ($allevents as $key => $event)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                            <div class="col-md-3">
                                <a href="{{ route('events.show', ['id' => $event->id]) }}" style="color: black;">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="{{ asset('upload/' . $event->event_image) }}" style="width: 254px; height: 144px;">
                                        <div class="card-title">
                                            <h6>{{ $event->event_name }}</h6>
                                        </div>
                                        <div class="card-text">
                                            <i class="bi bi-geo-alt"></i>&nbsp {{ $event->event_location }}
                                            <br>
                                            <i class="bi bi-calendar"></i>&nbsp {{ $event->event_date }}
                                        </div>
                                        <div class="card-footer mt-auto">
                                            Penyelenggara
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
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
                <a href="{{ route('list-event') }}" class="btn custom-btn d-lg-block d-none">View more Event's</a>
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
                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=alun%20alun%20bandung+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
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
