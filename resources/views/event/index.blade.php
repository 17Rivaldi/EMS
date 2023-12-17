@extends('layouts.master')

@section('breadcrumb-item')
    <li class="breadcrumb-item text-white active opacity-8" aria-current="page">Event</li>
@endsection

@section('content')
    {{-- Main Content --}}
    {{-- <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-6">
                    <h1 class="m-0 text-light">Daftar Event</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item active">Event</li>
</ol>
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div> --}}

    <!-- Table -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h4>Daftar Event</h4>
                        <a href="{{ route('event.create') }}" class="btn btn-primary" role="button"><i
                                class="fas fa-plus me-2"></i>Buat Event</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="data-table" class="table align-items-center mb-0 table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                                            Event</th>
                                        {{-- <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Deskripsi</th> --}}
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Lokasi</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tanggal</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Jam Mulai</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Gambar Event</th>
                                        <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7">ACTION
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as $event)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $event->event_name }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            {{-- <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $event->description }}</p>
                                    </td> --}}
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="badge badge-sm bg-gradient-primary">{{ $event->event_location }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ \Carbon\Carbon::parse($event->event_date)->formatLocalized('%d-%m-%Y') }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ \Carbon\Carbon::parse($event->start_time)->format('H:i') }}
                                                    WIB</span>
                                            </td>
                                            <td>
                                                <img src="{{ asset('upload/' . $event->event_image) }}" alt="Event Image"
                                                    style="width: 100px; height: 60px;">
                                            </td>
                                            <td class="align-middle">
                                                <div class="text-center" style="display: flex; flex-wrap: nowrap;">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#eventDetailModal{{ $event->id }}"><i
                                                            class="fas fa-eye me-1"></i>
                                                        Detail
                                                    </button>
                                                    <a href="{{ route('event.edit', ['edit' => $event->id]) }}"
                                                        class="btn btn-warning btn-sm mx-1" role="button"><i
                                                            class="fas fa-edit me-1"></i>Edit</a>
                                                    <a href="{{ route('event.destroy', ['id' => $event->id]) }}"
                                                        class="btn btn-danger btn-sm" role="button"
                                                        onclick="return confirm('Apakah kamu yakin ingin menghapus Event ini ?')"><i
                                                            class="fas fa-trash me-1"></i>Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($events as $event)
            <!-- Modal untuk Detail Event -->
            <div class="modal fade custom-modal" id="eventDetailModal{{ $event->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail Event</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-2 ">
                                <h6>Gambar Event</h6>
                                <img src="{{ asset('upload/' . $event->event_image) }}"
                                    alt="Image {{ $event->event_name }}" class="shadow rounded text-center event_img">
                            </div>
                            <div class="mb-2">
                                <h6>Nama Event</h6>
                                <p>{{ $event->event_name }}</p>
                            </div>
                            <div class="mb-2">
                                <h6 class="">Lokasi</h6>
                                <p>{{ $event->event_location }}</p>
                            </div>
                            <div class="mb-2">
                                <h6 class="">Tanggal</h6>
                                <p>{{ \Carbon\Carbon::parse($event->event_date)->formatLocalized('%d %B %Y') }}</p>
                            </div>
                            <div class="mb-2">
                                <h6 class="">Waktu</h6>
                                <p>{{ \Carbon\Carbon::parse($event->start_time)->format('H:i') }} WIB</p>
                            </div>
                            <div class="mb-2">
                                <h6 class="">Harga</h6>
                                <p>Rp. {{ number_format($event->ticket_price, 0, ',', '.') }}</p>
                            </div>
                            <div class="mb-2 border rounded">
                                <div class="p-2">
                                    <h6 class="text-center">Deskripsi</h6>
                                    <hr class="bg-dark">
                                    <p>{!! $event->description !!}</p>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endsection

    @section('addCss')
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
        <style>
            .pagination .page-item.active .page-link {
                color: white;
            }

            .dataTables_length select {
                background: none;
                cursor: pointer;
            }

            .dataTables_length select:hover {
                border: 1px solid blue;
            }

            .breadcrumb-item a:hover {
                color: #e3e3e3 !important
            }

            .custom-modal {
                position: fixed;
                top: 50%;
                left: 55%;
                transform: translate(-50%, -50%);
            }

            /* Gaya untuk layar yang lebih besar (contoh: lebar layar lebih dari 768px) */
            @media (min-width: 200px) {
                .custom-modal {
                    left: 50%;
                }
            }

            @media (min-width: 550px) {
                .custom-modal {
                    left: 50%;
                }
            }

            /* Gaya untuk layar yang lebih besar lagi (contoh: lebar layar lebih dari 1200px) */
            @media (min-width: 1200px) {
                .custom-modal {
                    left: 55%;
                }
            }

            .event_img {
                display: block;
                margin-left: auto;
                margin-right: auto;
                max-width: 100%;
                height: auto;
                width: 500px;
            }
        </style>
    @endsection

    @section('addJs')
        <!-- DataTables JS -->
        <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <!-- DataTables Bootstrap 5 JS -->
        <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#data-table').DataTable({
                    "language": {
                        "paginate": {
                            "previous": '<i class="fas fa-chevron-left"></i>',
                            "next": '<i class="fas fa-chevron-right"></i>'
                        }
                    }
                });
            });
        </script>
    @endsection
