@extends('web.layout.master')

@section('content')
    <section class="section-padding" id="" style="background-color: #fbfbfb;">
        <div class="container description-event">

            <div class="row event-detail mt-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tiket Saya</li>
                    </ol>
                </nav>
            </div>
            <div class="content">
                <div class="container">
                    @foreach ($transactions as $transaction)
                        <div class="card mb-4">
                            <div class="card-header d-flex bg-black text-white">
                                <label id="nama-event">{{ $transaction->event->event_name }}</label>
                                <div class="ms-auto d-flex align-items-end">
                                    <span class="mr-2">
                                        <i class="bi bi-ticket-perforated"></i>
                                        {{ $transaction->quantity }}
                                    </span>
                                    &nbsp; Tiket
                                </div>
                            </div>
                            <div class="card-body shadow-lg">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row justify-content-start">
                                            <div class="col-md-4">
                                                <div class="d-flex">
                                                    <i class="bi bi-calendar-event text-primary mx-2"></i>
                                                    <label
                                                        id="tanggal-event">{{ \Carbon\Carbon::parse($transaction->event_date)->formatLocalized('%d %B %Y') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex">
                                                    <i class="bi bi-geo-alt text-primary mx-2"></i>
                                                    <label
                                                        id="lokasi-event">{{ $transaction->event->event_location }}</label>
                                                </div>
                                            </div>
                                        </div>


                                        <h6 class="pt-2">Deskripsi</h6>
                                        <p class="text-dark">
                                            {!! Str::limit($transaction->event->description, 300) !!}
                                            @if (strlen($transaction->event->description) > 300)
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#detailsTransactionModal{{ $transaction->id }}">Selengkapnya</a>
                                            @endif
                                        </p>
                                        <div class="d-flex justify-content-start gap-2 pt-2">
                                            <button class="btn btn-outline-primary">Invoice</button>
                                            <button class="btn btn-outline-danger">Hapus</button>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('upload/' . $transaction->event->event_image) }}" alt="Banner"
                                            class="img-fluid rounded" style="width: 360px; height: 180px;">
                                    </div>
                                    <div class="d-flex align-items-center pt-3">
                                        <i class="bi bi-info-circle-fill text-primary m-2"></i>
                                        <label>E-Voucher dikirim ke masing-masing pengunjung</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>

        @foreach ($transactions as $transaction)
            <!-- Modal Selengkapnya Deskripsi -->
            <div class="modal modal-lg fade" id="detailsTransactionModal{{ $transaction->id }}" tabindex="-1"
                role="dialog" aria-labelledby="detailsTransactionModal{{ $transaction->id }}Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="detailsTransactionModal{{ $transaction->id }}Label">Deskripsi Event
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>{!! $transaction->event->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </section>
@endsection

@section('addCss')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');

        @media (min-width: 992px) {
            .description-event {
                padding-left: 5rem;
                padding-right: 5rem;
            }
        }

        .navbar {
            background-color: black;
        }

        .card-body p {
            font-family: 'Roboto', sans-serif;
        }

        .event-detail-description p strong {
            font-weight: 700;
            font-size: 20px
        }

        .event-detail-description p {
            font-family: 'Roboto', sans-serif;
            font-weight: 400
        }
    </style>
@endsection
