<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name') }}</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('img/logo-ipeun.png') }}" />

    <link href="{{ asset('css/web/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/web/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('css/web/templatemo-festava-live.css') }}" rel="stylesheet">

    <link href="{{ asset('css/card-carousel.css') }}" rel="stylesheet" type="text/css">

    @yield('addCss')

</head>

<body>

    <main>
        <!-- Navbar -->
        <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-person custom-icon me-2"></i>
                            <strong class="text-dark">Welcome to Music Festival 2023</strong>
                        </p>
                    </div>

                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    {{ config('app.name') }}
                </a>

                <a href="{{ route('login') }}" class="btn custom-btn d-lg-none ms-auto me-4">Login</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        @if (request()->route()->getName() !== 'events.show' &&
                                request()->route()->getName() !== 'form-pembayaran.show' &&
                                request()->route()->getName() !== 'list-event')
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Artists</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Upcoming</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Event's</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_6">Contact</a>
                            </li>
                        @endif
                    </ul>

                    @guest
                        <a href="{{ route('login') }}" class="btn custom-btn d-lg-block d-none"><i
                                class="bi-fingerprint mx-1"></i>Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="btn btn-outline-warning rounded-pill d-lg-block d-none ms-1">{{ __('Register') }}<i
                                    class="bi-fingerprint mx-1"></i></a>
                        @endif
                    @else
                        @if (auth()->user()->hasRole('admin'))
                            <a href="{{ route('dashboard') }}" class="btn btn-outline-warning rounded-pill mx-2"><i
                                    class="bi-speedometer2 mx-1"></i>Admin</a>
                        @endif
                        @if (auth()->user()->hasRole('user'))
                            <a href="{{ route('informasi-akun') }}" class="btn btn-outline-warning rounded-pill mx-2"><i
                                    class="bi bi-person-circle mx-1"></i>Profile</a>
                        @endif
                        @if (auth()->user()->hasRole('organizer'))
                            <a href="{{ route('dashboard-organizer') }}"
                                class="btn btn-outline-warning rounded-pill mx-2"><i
                                    class="bi-speedometer2 mx-1"></i>Dashboard</a>
                        @endif
                        <a href="{{ route('logout') }}" class="btn custom-btn d-lg-block d-none mx-2"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="bi-box-arrow-right mx-1"></i>{{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
        </nav>

        <!-- Content -->
        @yield('content')

    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="site-footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="text-white mb-lg-0">{{ config('app.name') }} Live</h2>
                    </div>

                    <div class="col-lg-6 col-12 d-flex justify-content-lg-end align-items-center">
                        <ul class="social-icon d-flex justify-content-lg-end">
                            <li class="social-icon-item">
                                <a href="https://twitter.com/" class="social-icon-link">
                                    <span class="bi-twitter"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://music.apple.com/" class="social-icon-link">
                                    <span class="bi-apple"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://www.instagram.com/" class="social-icon-link">
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://youtube.com/" class="social-icon-link">
                                    <span class="bi-youtube"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="ttps://id.pinterest.com/" class="social-icon-link">
                                    <span class="bi-pinterest"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-4 pb-2">
                    @if (request()->route()->getName() !== 'events.show' &&
                            request()->route()->getName() !== 'form-pembayaran.show' &&
                            request()->route()->getName() !== 'list-event')
                        <h5 class="site-footer-title mb-3">Links</h5>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Home</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">About</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Artists</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Schedule</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Pricing</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Contact</a>
                            </li>
                        </ul>
                    @endif
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <h5 class="site-footer-title mb-3">Have a question?</h5>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: 090-080-0760" class="site-footer-link">
                            0822 7272 5432
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:Ipeun@festival.com" class="site-footer-link">
                            Ipeun@festival.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                    <h5 class="site-footer-title mb-3">Location</h5>

                    <p class="text-white d-flex mt-3 mb-2">
                        Bandung City Square, Indonesia</p>

                    <a class="link-fx-1 color-contrast-higher mt-3" href="https://maps.app.goo.gl/9BKWfiSJa7rXaaJU6">
                        <span>Our Maps</span>
                        <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="16" cy="16" r="15.5"></circle>
                                <line x1="10" y1="18" x2="16" y2="12"></line>
                                <line x1="16" y1="12" x2="22" y2="18"></line>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mt-5">
                        <p class="copyright-text">Copyright © 2023 {{ config('app.name') }}</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->

    @include('sweetalert::alert')

    <script src="{{ asset('js/web/jquery.min.js') }}"></script>
    <script src="{{ asset('js/web/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/web/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/web/click-scroll.js') }}"></script>
    <script src="{{ asset('js/web/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/card-slider.js') }}"></script>
    @yield('addJs')

</body>

</html>
