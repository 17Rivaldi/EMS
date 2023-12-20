@extends('layouts.master')

@section('breadcrumb-item')
<li class="breadcrumb-item text-white active opacity-8" aria-current="page">Contact</li>
@endsection

@section('content')
<!-- Table -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h4>Daftar Pesan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="data-table" class="table align-items-center mb-0 table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Pesan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ACTION
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                <tr>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-primary">{{ $contact->sender_email }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $contact->sender_name }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">
                                            {{ Str::limit($contact->message_text, 50) }}
                                            @if (strlen($contact->message_text) > 50)
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#fullMessageModal{{ $contact->id }}">... Selengkapnya</a>
                                            @endif
                                        </span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ \Carbon\Carbon::parse($contact->message_date)->formatLocalized('%d-%m-%Y') }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <div class="text-center">
                                            <!-- <a href="" class="btn btn-warning btn-sm mx-1" role="button"><i class="fas fa-edit me-1"></i>Edit</a> -->
                                            <a href="{{ route('contact.destroy', ['id' => $contact->id]) }}" class="btn btn-danger btn-sm" role="button" onclick="return confirm('Apakah kamu yakin ingin menghapus Pesan ini ?')"><i class="fas fa-trash me-1"></i>Hapus</a>
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
</div>
@foreach ($contacts as $contact)
<!-- Modal -->
<div class="modal fade" id="fullMessageModal{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="fullMessageModal{{ $contact->id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fullMessageModal{{ $contact->id }}Label">Pesan Penuh</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>{{ $contact->message_text }}</p>
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