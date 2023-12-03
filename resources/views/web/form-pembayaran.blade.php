@extends('web.layout.master')

@section('content')
    <section class="section-padding" id="" >
    <div class="container event-detail-transaction">
        <div class="section-title">Detail Pemesanan</div>
        <div class="row">
            <div class="col-lg-8">
                <div class="event-card">
                    <div class="card-body">
                        <img src="https://via.placeholder.com/640x360?text=Example" class="card-img-top" alt="Gambar">
                        <div>
                            <div class="event-title">Konser Metalica</div>
                            <div class="event-info">
                                <div class="event-date">
                                    <i class="bi bi-calendar-week text-primary"></i>
                                    <label id="date-event">10 Januari 2024</label>
                                </div>
                                <div class="event-time">
                                    <i class="bi bi-clock text-primary"></i>
                                    <label id="time-event">17:00 - 21:00 WIB</label>
                                </div>
                                <div class="event-venue">
                                    <i class="bi bi-geo-alt text-primary"></i>
                                    <label>Jakarta</label>
                                </div>
                                <hr style="margin-top: 15px; margin-bottom: 5px;">
                                <div class="event-price">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h7 class="card-title">Harga Tiket</h7>
                                        </div>
                                        <div class="col-lg-6 text-end">
                                            <p class="card-text">Rp 100.000</p>
                                        </div>
                                    </div>
                                    <hr style="margin-top: 5px; margin-bottom: 5px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-title">Form Pemesanan</div>
                <div class="card form-card">
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="name" placeholder="Masukkan nama">
                                </div>
                                <div class="col">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="name" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat">
                                </div>
                                <div class="col">
                                    <label for="email" class="form-label">No Handphone</label>
                                    <input type="email" class="form-control" id="nohp" placeholder="Masukkan Nomor Handphone">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label">Jumlah Tiket</label>
                                <input type="number" class="form-control" id="quantity" placeholder="Masukkan jumlah tiket">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="price-card">
                    <div class="card-body">
                        <div class="text-center">
                            <h6 class="card-title" style="text-align: left; font-weight: bold;">Detail Harga</h6>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Total Harga Tiket</p>
                            </div>
                            <div class="col-lg-6 text-end">
                                <p>Rp 100.000</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Jumlah Beli</p>
                            </div>
                            <div class="col-lg-6 text-end">
                                <p>1x</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6">
                                <p><strong>Total Bayar</strong></p>
                            </div>
                            <div class="col-lg-6 text-end">
                                <p><strong>Rp 100.000</strong></p>
                                <a href="#" class="btn btn-primary buy-button">Beli Tiket</a>
                            </div>
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
      .navbar{
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
            border-radius: 8px;
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

        .price-card {
            border: 1px solid #e8e8e8;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
        }

        .price-card .card-body {
            padding: 20px;
        }

        .price-card .price {
            font-size: 1.25rem;
            font-weight: 600;
            color: #151416;
            margin-bottom: 10px;
        }

        .price-card .buy-button {
            display: block;
            width: 100%;
            text-align: center;
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