@extends('layouts.master')

@section('content')
{{-- Main Content --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-0">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Daftar Event</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Event</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- Table -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Tabel Event</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Event</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lokasi</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jam Mulai</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar Event</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$event -> event_name}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{$event -> description}}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-primary">{{$event -> event_location}}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$event -> event_date}}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$event -> start_time}}</span>
                                    </td>
                                    <td>
                                        <img src="{{ asset('upload/' . $event->event_image) }}" alt="Event Image" style="max-width: 100px; max-height: 100px;">
                                    </td>
                                    <td class="align-middle">
                                        <div class="text-center" style="display: flex; flex-wrap: nowrap;">
                                            <a href="{{ route('event.edit', ['edit' => $event->id]) }}" class="btn btn-warning btn-sm" style="margin-right: 7px;" role="button">Edit</a>
                                            <a href="{{ route('event.destroy', ['id' => $event->id]) }}" class="btn btn-danger btn-sm" role="button">Hapus</a>
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
    <div class="card-header text-right">
        <a href="{{ route('event.create') }}" class="btn btn-primary" role="button">Buat Event</a>
    </div>

</div>

@endsection

@section('addCss')
<style>

</style>
@endsection

@section('addJs')
<script></script>
@endsection