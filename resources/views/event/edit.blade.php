@extends('layouts.master')

@section('content')
<div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Edit Event</h6>
                    </div>
                    <div class="card-body px-4 pt-4 pb-2">
                        <form action="{{ route('event.update', $event->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="event_name" class="form-label">Nama Event</label>
                                <input type="text" class="form-control" id="event_name" name="event_name" value="{{ old('event_name', $event->event_name) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $event->description) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="event_location" class="form-label">Lokasi</label>
                                <input type="text" class="form-control" id="event_location" name="event_location" value="{{ old('event_location', $event->event_location) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="event_date" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="event_date" name="event_date" value="{{ old('event_date', $event->event_date) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="start_time" class="form-label">Jam Mulai</label>
                                <input type="time" class="form-control" id="start_time" name="start_time" value="{{ old('start_time', $event->start_time) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="event_image" class="form-label">Gambar Event</label>
                                @if ($event->event_image)
                                    <!-- Menampilkan gambar saat ini jika ada -->
                                    <img src="{{ asset('upload/' . $event->event_image) }}" alt="Current Event Image" style="max-width: 200px; max-height: 200px;">
                                @else
                                    <!-- Menampilkan placeholder atau pesan jika tidak ada gambar -->
                                    No Image
                                @endif
                                <input type="file" class="form-control" id="event_image" name="event_image" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Event</button>
                        </form>
                    </div>
                </div>
            </div>
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