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
                <div class="card mb-4">
                    <div class="card-header d-flex bg-black text-white">
                        <label id="nama-event">Rock in Solo Festival 2023</label>
                    </div>
                    <div class="card-body shadow-lg">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row justify-content-start">
                                    <div class="col-md-4">
                                        <div class="d-flex">
                                            <i class="bi bi-calendar-event text-primary mx-2"></i>
                                            <label id="tanggal-event">10 Desember 2023</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex">
                                            <i class="bi bi-geo-alt text-primary mx-2"></i>
                                            <label id="lokasi-event">Solo - Jawa Tengah - Indonesia</label>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="pt-2">Deskripsi</h6>
                                <p class="text-dark">
                                    Rock in Solo adalah sebuah festival musik rock yang diselenggarakan di Solo, Jawa Tengah, Indonesia. Festival ini menampilkan berbagai penampilan dari band dan musisi rock terkemuka, menciptakan pengalaman konser yang mendalam dan energik bagi para penggemar musik rock.
                                </p>
                                <div class="d-flex justify-content-start gap-2 pt-2">
                                    <button class="btn btn-outline-primary">Invoice</button>
                                    <button class="btn btn-outline-danger">Hapus</button>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <img src="https://s3-ap-southeast-1.amazonaws.com/loket-production-sg/images/banner/20230905110542_64f6a91690d6f.jpg" alt="Banner" class="img-fluid rounded">
                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <i class="bi bi-info-circle-fill text-primary m-2"></i>
                                <label>E-Voucher dikirim ke masing-masing pengunjung</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center bg-black text-white">
                        <label id="nama-event">Dying Party</label>
                    </div>
                    <div class="card-body shadow-lg">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row justify-content-start">
                                    <div class="col-md-4">
                                        <div class="d-flex">
                                            <i class="bi bi-calendar-event text-primary mx-2"></i>
                                            <label id="tanggal-event">23 Desember 2023</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex">
                                            <i class="bi bi-geo-alt text-primary mx-2"></i>
                                            <label id="lokasi-event">Blora - Jawa Tengah - Indonesia</label>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="pt-2">Deskripsi</h6>
                                <p class="text-dark">
                                    Selamat datang di dunia kekuatan dan energi yang mengguncang, di mana nada-nada keras dan distorsi merajai panggung! Konser metal adalah pengalaman audiovisual yang intens, memadukan suara keras gitar distorsi, ritme drum yang menghentak, dan vokal berskala tinggi yang memicu adrenalin.
                                </p>
                                <div class="d-flex justify-content-start gap-2 pt-2">
                                    <button class="btn btn-outline-primary">Invoice</button>
                                    <button class="btn btn-outline-danger">Hapus</button>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <img src="https://s3-ap-southeast-1.amazonaws.com/loket-production-sg/images/banner/20231119114929_655993d92ab39.jpg" alt="Banner" class="img-fluid rounded">
                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <i class="bi bi-info-circle-fill text-primary mx-2"></i>
                                <label>E-Voucher dikirim ke masing-masing pengunjung</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
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