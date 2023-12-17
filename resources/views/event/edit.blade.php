@extends('layouts.master')

@section('breadcrumb-item')
    <li class="breadcrumb-item text-white" aria-current="page">
        <a href="{{ route('daftar.event') }}" class="text-white">Event</a>
    </li>
    <li class="breadcrumb-item text-white active opacity-8" aria-current="page">Edit</li>
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 text-center">
                        <h4>Edit Event</h4>
                    </div>
                    <div class="card-body px-4 pt-4 pb-2">
                        <form action="{{ route('event.update', $event->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="event_name" class="form-label">Nama Event</label>
                                <input type="text" class="form-control" id="event_name" name="event_name"
                                    value="{{ old('event_name', $event->event_name) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi</label>
                                <textarea class="form-control ckeditor" id="description" name="description" rows="3" required>{{ old('description', $event->description) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="event_location" class="form-label">Lokasi</label>
                                <input type="text" class="form-control" id="event_location" name="event_location"
                                    value="{{ old('event_location', $event->event_location) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="event_date" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="event_date" name="event_date"
                                    value="{{ old('event_date', $event->event_date) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="start_time" class="form-label">Jam Mulai</label>
                                <input type="time" class="form-control" id="start_time" name="start_time"
                                    value="{{ old('start_time', $event->start_time) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="ticket_price" class="form-label">Harga Tiket</label>
                                <input type="number" class="form-control" id="ticket_price" name="ticket_price"
                                    value="{{ old('ticket_price', $event->ticket_price) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="event_image" class="form-label">Gambar Event</label>
                                @if ($event->event_image)
                                    <!-- Menampilkan gambar saat ini jika ada -->
                                    <img src="{{ asset('upload/' . $event->event_image) }}" alt="Current Event Image"
                                        style="max-width: 200px; max-height: 200px;">
                                @else
                                    <!-- Menampilkan placeholder atau pesan jika tidak ada gambar -->
                                    No Image
                                @endif
                                <input type="file" class="form-control mt-2" id="event_image" name="event_image"
                                    accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Event</button>
                            <a href="{{ route('daftar.event') }}" class="btn btn-danger" role="button">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('addCss')
    <style>
        .breadcrumb-item a:hover {
            color: #e3e3e3 !important
        }
    </style>
@endsection

@section('addJs')
    <script>
        ClassicEditor
            .create(document.querySelector('.ckeditor'), {
                required: true,
                toolbar: {
                    items: ['undo', 'redo', '|', 'heading', '|', 'bold', 'italic', '|', 'bulletedList', 'numberedList',
                        '|', 'outdent', 'indent'
                    ]
                }
            })
            .then(editor => {
                editor.editing.view.change(writer => {
                    const toolbarElement = editor.ui.view.toolbar.element;
                    const editorElement = editor.ui.view.editable.element;

                    writer.setStyle('height', 'auto', editor.editing.view.document.getRoot());
                    writer.setStyle('border-bottom-left-radius', '10px', editor.editing.view.document
                        .getRoot());
                    writer.setStyle('border-bottom-right-radius', '10px', editor.editing.view.document
                        .getRoot());

                    // Set border radius dengan nilai berbeda untuk setiap ujung pada toolbar
                    toolbarElement.style.borderTopLeftRadius = '10px';
                    toolbarElement.style.borderTopRightRadius = '10px';
                    toolbarElement.style.borderBottomLeftRadius = '0';
                    toolbarElement.style.borderBottomRightRadius = '0';

                    editor.ui.focusTracker.on('change:isFocused', (eventInfo, name, value) => {
                        if (value) {
                            editorElement.style.height = 'auto';
                            editorElement.style.borderBottomLeftRadius = '10px';
                            editorElement.style.borderBottomRightRadius = '10px';
                        } else {
                            editorElement.style.height = 'auto';
                            editorElement.style.borderBottomRightRadius = '10px';
                            editorElement.style.borderBottomLeftRadius = '10px';
                        }
                    });
                });
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
