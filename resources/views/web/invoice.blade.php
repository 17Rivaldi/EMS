@extends('web.layout.master')

@section('content')
    <div class="container my-3">
        @php
            $totalAmount = 0;
        @endphp
        <div class="card">
            <div class="card-body">
                <div class="container mb-5 mt-3">
                    <div class="row d-flex align-items-baseline">
                        <div class="col-xl-9">
                            <p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong>ID:
                                    # {{ $transaction->id }}</strong></p>
                        </div>
                        <div class="col-xl-3 float-end">
                            <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"
                                onclick="window.print()"><i class="bi bi-printer text-primary"></i> Print</a>
                            {{-- <a class="btn btn-light text-capitalize" data-mdb-ripple-color="dark"><i
                                    class="bi bi-file-earmark-pdf text-danger"></i> Export</a> --}}
                        </div>
                        <hr>
                    </div>

                    <div class="container">
                        <div class="col-md-12">
                            <div class="text-center">
                                <img src="{{ asset('img/logo-ipeun.png') }}" alt="Logo" class="me-2"
                                    style="height: 50px;">
                                {{-- <p class="pt-0">IPEUN</p> --}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8">
                                <ul class="list-unstyled">
                                    <li class="text-muted"><span class=" fw-semibold">Pembeli:</span>
                                        {{ $transaction->name }}
                                    </li>
                                    <li class="text-muted"><span class="fw-semibold">Alamat:</span>
                                        {{ $transaction->alamat }}</li>
                                    <li class="text-muted"><i class="fas fa-phone"></i>{{ $transaction->phone }}</li>
                                </ul>
                            </div>
                            <div class="col-xl-4">
                                <p class="text-muted">Invoice</p>
                                <ul class="list-unstyled">
                                    <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                            class="fw-bold">ID:</span># {{ $transaction->id }}</li>
                                    <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                            class="fw-bold">Tanggal Pembelian:</span>
                                        {{ \Carbon\Carbon::parse($transaction->created_at)->formatLocalized('%d %B %Y') }}
                                    </li>
                                    {{-- <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                            class="me-1 fw-bold">Status:</span><span
                                            class="badge bg-success text-white fw-semibold">
                                            Paid</span></li> --}}
                                </ul>
                            </div>
                        </div>

                        <div class="row my-2 mx-1 justify-content-center">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Event</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $transaction->event->event_name }}</td>
                                        <td>{{ $transaction->quantity }}</td>
                                        <td>Rp. {{ number_format($transaction->total_payment, 0, ',', '.') }}</td>
                                    </tr>
                                    @php
                                        $totalAmount += $transaction->total_payment;
                                    @endphp
                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-xl-3 offset-xl-8">
                                <p class="text-black float-start"><span class="text-muted me-3 fw-semibold">Total
                                        Bayar</span><span style="font-size: 25px;">Rp.
                                        {{ number_format($transaction->total_payment, 0, ',', '.') }}</span></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-10">
                                <p>Thank you for your purchase</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('addCss')
    <style>
        .navbar {
            background-color: black;
        }
    </style>
@endsection

@section('addJs')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

    <script>
        document.getElementsByTagName("nav")[0].remove()
        document.getElementsByClassName("site-header")[0].remove()
        document.getElementsByClassName("site-footer")[0].remove()
        // window.print()
    </script>
@endsection
