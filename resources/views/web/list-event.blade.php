@extends('web.layout.master')

@section('content')
    <section class="pricing-section section-bg" id="list-event">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fw-semibold">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Event</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-6">
                    <form action="{{ route('list-event') }}" method="GET" class="d-flex">
                        <input type="text" class="form-control shadow" name="search" id="search-input"
                            placeholder="Cari event" aria-label="Cari event" aria-describedby="basic-addon1">
                        <button type="submit" class="btn btn-primary ms-1 shadow">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="container mt-5">
                    <div class="row">
                        @forelse ($allevents as $row)
                            <!-- Card 1 -->
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <a href="{{ route('events.show', ['id' => $row->id]) }}" style="color: black;">
                                    <div class="card">
                                        <img class="img-fluid rounded-top" src="{{ asset('upload/' . $row->event_image) }}"
                                            style="width: 300px; height: 150px;">
                                        <div class="card-body">
                                            <p class="card-title fw-bold">{{ Str::limit($row->event_name, 20) }}</p>
                                            <div class="card-text my-4">
                                                <div>
                                                    <i class="bi bi-geo-alt"></i> {{ $row->event_location }}
                                                </div>
                                                <div class="mt-2">
                                                    <i class="bi bi-calendar"></i>
                                                    {{ \Carbon\Carbon::parse($row->event_date)->formatLocalized('%d %b %Y') }}
                                                </div>
                                                <div class="mt-2 fw-semibold">Rp
                                                    {{ number_format($row->ticket_price, 0, ',', '.') }}
                                                </div>
                                            </div>
                                            <div class="card-footer warna-footer">
                                                {{ $row->organizer->name }}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <p>Tidak ada hasil pencarian</p>
                            </div>
                        @endforelse
                    </div>
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        {{ $allevents->links() }}
                    </div>
    </section>
@endsection

@section('addCss')
    <style>
        #list-event {
            background-color: #fbfbfb;
            padding-top: 5rem;
        }

        .navbar {
            background-color: black;
        }

        .card-title {
            color: #333333;
        }

        .warna-footer {
            background-color: white;
            font-weight: bold;
            color: #333333;
        }

        .card:hover {
            background-color: orangered;
            color: white;
        }

        .card:hover .warna-footer {
            background-color: orangered;
            color: white;
        }

        .card:hover i {
            color: white;
        }

        .card:hover .card-title {
            color: white;
        }
    </style>
@endsection

@section('addJs')
    <script>
        // document.getElementsByTagName("nav")[0].remove()
    </script>
@endsection
