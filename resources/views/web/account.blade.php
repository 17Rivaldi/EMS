@extends('web.layout.master')

@section('content')
    <section class="section-padding" id="" style="background-color: #fbfbfb;">
        <div class="container description-event">

            <div class="row event-detail">
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
                            <form action="{{ route('update.profile', $users->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 d-block">
                                    <!-- <label for="gambar" class="form-label">Gambar Profile</label> -->
                                    <div class="profile-image mx-auto" id="profileImageContainer">
                                        @if ($users->gambar)
                                            <img src="{{ asset('upload/profile-image/' . $users->gambar) }}"
                                                alt="Profile Image" id="profileImage" class="img-fluid">
                                        @else
                                            <img src="https://t4.ftcdn.net/jpg/03/31/69/91/360_F_331699188_lRpvqxO5QRtwOM05gR50ImaaJgBx68vi.jpg"
                                                alt="Profile Image" id="profileImage" class="img-fluid">
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        <input type="file" id="fileInput" name="fileInput" class="file-input"
                                            accept="image/*">
                                        <label for="fileInput" class="change-btn">Ganti Gambar</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama:</label>
                                    <input type="text" class="form-control border-0 border-bottom border-dark bg-light"
                                        id="nama" name="nama" placeholder="Masukkan nama Anda"
                                        value="{{ $users->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Alamat Email:</label>
                                    <input type="email" class="form-control border-0 border-bottom border-dark bg-light"
                                        id="email" name="email" placeholder="Masukkan alamat email Anda"
                                        value="{{ $users->email }}">
                                </div>
                                <!-- <div class="mb-3">
                                        <label for="password" class="form-label">Password: (kosongi jika tidak diubah)</label>
                                        <input type="password" class="form-control border-0 border-bottom border-dark bg-light" id="password" name="password" placeholder="Masukkan password baru Anda" value="">
                                        <input type="hidden" id="password_lama" name="password_lama" value="{{ $users->password }}">
                                    </div> -->
                                <div class="mb-3">
                                    <label for="phone_number" class="form-label">Nomor Telepon</label>
                                    <input type="text" class="form-control border-0 border-bottom border-dark bg-light"
                                        id="phone_number" name="phone_number" placeholder="Masukkan nomor telepon Anda"
                                        value="{{ $users->phone_number }}">
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="birthdate" class="form-label">Tanggal Lahir</label>
                                            <input type="date"
                                                class="form-control border-0 border-bottom border-dark bg-light"
                                                id="birthdate" name="birthdate" value="{{ $users->birthdate }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label d-block">Jenis Kelamin</label>
                                            @if ($users->gender == 'male')
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="male" value="male" checked>
                                                    <label class="form-check-label" for="male">Laki-laki</label>
                                                </div>
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="female" value="female">
                                                    <label class="form-check-label" for="female">Perempuan</label>
                                                </div>
                                            @elseif ($users->gender == 'female')
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="male" value="male">
                                                    <label class="form-check-label" for="male">Laki-laki</label>
                                                </div>
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="female" value="female" checked>
                                                    <label class="form-check-label" for="female">Perempuan</label>
                                                </div>
                                            @else
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="male" value="male">
                                                    <label class="form-check-label" for="male">Laki-laki</label>
                                                </div>
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="female" value="female">
                                                    <label class="form-check-label" for="female">Perempuan</label>
                                                </div>
                                            @endif
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
    <script>
        // Ambil elemen input file
        const fileInput = document.getElementById('fileInput');

        // Ambil elemen gambar
        const profileImage = document.getElementById('profileImage');

        // Tambahkan event listener untuk input file
        fileInput.addEventListener('change', function() {
            // Cek apakah ada file yang dipilih
            if (fileInput.files.length > 0) {
                // Ambil file yang dipilih
                const selectedFile = fileInput.files[0];

                // Buat objek URL untuk file yang dipilih
                const objectURL = URL.createObjectURL(selectedFile);

                // Ganti atribut src pada elemen gambar dengan URL objek
                profileImage.src = objectURL;
            }
        });
    </script>
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
