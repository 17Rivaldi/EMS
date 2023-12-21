@extends('web.layout.master')

@section('content')
    <section class="section-padding" style="bacground-color:#fbfbfb " id="">
        <div class="container event-detail-transaction">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('events.show', $event->id) }}" style="font-size: 18px">
                            <i class="bi bi-arrow-left-circle-fill fw-semibold"> Back</i>
                        </a>
                    </li>
                </ol>
            </nav>
            <div class="section-title">Detail Pemesanan</div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="event-card shadow border-0">
                        <div class="card-body">
                            <img src="{{ asset('upload/' . $event->event_image) }}" class="card-img-top" alt="Gambar">
                            <div>
                                <div class="event-title">{{ $event->event_name }}</div>
                                <div class="event-info">
                                    <div class="event-date">
                                        <i class="bi bi-calendar-week text-primary"></i>
                                        <label
                                            id="date-event">{{ \Carbon\Carbon::parse($event->event_date)->formatLocalized('%d %B %Y') }}</label>
                                    </div>
                                    <div class="event-time">
                                        <i class="bi bi-clock text-primary"></i>
                                        <label
                                            id="time-event">{{ \Carbon\Carbon::parse($event->start_time)->format('H:i') }}</label>
                                    </div>
                                    <div class="event-venue">
                                        <i class="bi bi-geo-alt text-primary"></i>
                                        <label>{{ $event->event_location }}</label>
                                    </div>
                                    <hr style="margin-top: 15px; margin-bottom: 5px;">
                                    <div class="event-price">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h7 class="card-title">Harga Tiket</h7>
                                            </div>
                                            <div class="col-lg-6 text-end">
                                                <p class="card-text">Rp.
                                                    {{ number_format($event->ticket_price, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                        <hr style="margin-top: 5px; margin-bottom: 5px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-title">Form Pemesanan</div>

                    <div class="card form-card my-3">
                        <div class="card-body">
                            <form action="{{ route('form-pembayaran.store') }}" method="POST" id="formTransaksi">
                                @csrf
                                <div class="row mb-3">
                                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                                    <div class="col">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Masukkan nama" value="{{ $user->name }}" required>
                                    </div>
                                    <div class="col">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Masukkan email" value="{{ $user->email }}" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="name" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat"
                                            placeholder="Masukkan Alamat" required>
                                    </div>
                                    <div class="col">
                                        <label for="phone" class="form-label">No Handphone</label>
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            placeholder="Masukkan Nomor Handphone" value="{{ $user->phone_number }}"
                                            required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="quantity" class="form-label text-center">Jumlah Tiket</label>
                                    <div class="input-group" style="padding-left: 35% ; padding-right: 35%">
                                        <button class="btn btn-outline-primary mx-1 rounded-circle" type="button"
                                            id="subtractTicket"><i class="bi bi-dash"></i></button>
                                        <input type="text"
                                            class="form-control text-center rounded-pill bg-primary text-light"
                                            id="quantityInput" value="1" name="quantity" readonly>
                                        <button class="btn btn-outline-primary mx-1 rounded-circle" type="button"
                                            id="addTicket"><i class="bi bi-plus"></i></button>
                                    </div>
                                </div>
                                {{-- <button type="submit" class="btn btn-primary buy-button">Beli Tiket</button> --}}
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card price border-0 shadow">
                        <div class="card-header bg-transparent border-0">
                            <h6>Detail Harga</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p>Total Harga Tiket</p>
                                </div>
                                <div class="col-lg-6 text-end">
                                    <p id="totalPrice">Rp. {{ number_format($event->ticket_price, 0, ',', '.') }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p>Jumlah Beli</p>
                                </div>
                                <div class="col-lg-6 text-end">
                                    <p id="quantityLabel">1x</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p><strong>Total Bayar</strong></p>
                                </div>
                                <div class="col-lg-6 text-end">
                                    <p id="totalPayment"><strong>Rp.
                                            {{ number_format($event->ticket_price, 0, ',', '.') }}</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <div class="d-grid">
                                <button type="submit" id="submitButton" class="btn btn-primary buy-button">
                                    Beli Tiket
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>

            <div class="alert alert-warning" role="alert">
                Pastikan data yang di isi sudah benar.
            </div>
        </div>
        </div>
    </section>
@endsection

@section('addCss')
    <style>
        .navbar {
            background-color: black;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: black;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: left;
        }

        .event-card {
            border: 1px solid #e8e8e8;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .event-card .card-body {
            display: flex;
            flex-wrap: wrap;
        }

        .event-card img {
            width: 350px;
            height: auto;
            margin-right: 20px;
            /* border-radius: 8px; */
        }

        .event-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #151416;
        }

        .event-info {
            font-size: 0.875rem;
            color: #6c757d;
        }

        .event-info div {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .event-info i {
            margin-right: 5px;
        }

        .price {
            padding: 18px;
            border-radius: 16px;
        }

        @media (max-width: 767px) {
            .event-card img {
                width: 100%;
                margin-right: 0;
                border-radius: 8px 8px 0 0;
            }

            .event-card .card-body {
                flex-direction: column;
                align-items: stretch;
            }
        }
    </style>
@endsection

@section('addJs')
    <script>
        // Untuk tambah dan kurang jumlah tiket
        $(document).ready(function() {
            var quantityInput = $('#quantityInput');

            // Tombol Tambah
            $('#addTicket').click(function() {
                var quantity = parseInt(quantityInput.val());
                quantityInput.val(quantity + 1);
                updateTotal(quantity + 1);
            });

            // Tombol Kurang
            $('#subtractTicket').click(function() {
                var quantity = parseInt(quantityInput.val());
                if (quantity > 1) {
                    quantityInput.val(quantity - 1);
                    updateTotal(quantity - 1);
                }
            });

            function updateTotal(quantity) {
                var ticketPrice = {{ $event->ticket_price }};
                var total = ticketPrice * quantity;

                // Update total harga tiket
                $('#totalPrice').text('Rp. ' + formatRupiah(total));

                // Update jumlah beli
                $('#quantityLabel').text(quantity + 'x');

                // Update total bayar
                $('#totalPayment strong').text('Rp. ' + formatRupiah(total));
            }

            function formatRupiah(angka) {
                var reverse = angka.toString().split('').reverse().join(''),
                    ribuan = reverse.match(/\d{1,3}/g);
                ribuan = ribuan.join('.').split('').reverse().join('');
                return ribuan;
            }

            // Menggunakan tombol submit formulir pada saat tombol "Beli Tiket" di luar formulir diklik
            $('#submitButton').click(function() {
                // Validasi manual sebelum mengirimkan formulir
                if (validateForm()) {
                    // Simulasikan klik pada tombol submit formulir
                    $('#formTransaksi').submit();
                }
                // else {
                //     alert('Pastikan semua input telah diisi.');
                // }
            });

            function validateForm() {
                var isValid = true;
                var inputs = $('#formTransaksi input[required]');

                inputs.each(function() {
                    if (!$(this).val().trim()) {
                        // Jika input kosong, tambahkan pesan kesalahan
                        $(this).addClass('is-invalid');
                        isValid = false;
                    } else {
                        // Jika input diisi, hapus pesan kesalahan jika ada
                        $(this).removeClass('is-invalid');
                    }
                });

                return isValid;
            }
        });
    </script>
@endsection
