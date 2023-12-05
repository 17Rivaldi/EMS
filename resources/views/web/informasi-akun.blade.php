@extends('web.layout.master')

@section('content')
<section class="section-padding" id="" style="background-color: #fbfbfb;">
    <div class="container description-event">

        <div class="row event-detail mt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Informasi Akun</li>
                </ol>
            </nav>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col">
                        <form>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar Profile</label>
                                <div class="profile-image position-relative text-center" id="profileImageContainer">
                                    <img src="default-profile.jpg" alt="Profile Image" id="profileImage" class="img-fluid">
                                    <input type="file" id="fileInput" class="file-input" accept="image/*">
                                    <label for="fileInput" class="change-btn position-absolute bottom-0 start-50 translate-middle-x">Ganti Gambar</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama:</label>
                                <input type="text" class="form-control border-0 border-bottom border-dark bg-light" id="nama" placeholder="Masukkan nama Anda">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Email:</label>
                                <input type="email" class="form-control border-0 border-bottom border-dark bg-light" id="email" placeholder="Masukkan alamat email Anda">
                            </div>
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control border-0 border-bottom border-dark bg-light" id="phone_number" name="phone_number" placeholder="Masukkan nomor telepon Anda">
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="birthdate" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control border-0 border-bottom border-dark bg-light" id="birthdate" name="birthdate">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label d-block">Jenis Kelamin</label>
                                        <div class="form-check form-check-inline mt-2">
                                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                            <label class="form-check-label" for="male">Laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline mt-2">
                                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                            <label class="form-check-label" for="female">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
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

    .event-detail-description p strong {
        font-weight: 700;
        font-size: 20px
    }

    .event-detail-description p {
        font-family: 'Roboto', sans-serif;
        font-weight: 400
    }

    .profile-image {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .profile-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .file-input {
        display: none;
    }

    .change-btn {
        cursor: pointer;
        color: #007bff;
        text-decoration: underline;
        margin-top: 10px;
        display: block;
    }
</style>
@endsection