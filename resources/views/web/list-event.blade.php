@extends('web.layout.master')

@section('content')

<style>
    .search-container {
      margin-top: 50px;
      width: 500px;
    }

</style>
<section class="pricing-section section-bg" id="list-event">
    <div class="container">
        <div class="row">
            <div class="input-group search-container">
                <input type="text" class="form-control" placeholder="Cari event" aria-label="Cari event" aria-describedby="basic-addon1">
                <span class="input-group-text" id="basic-addon1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                    </svg>
                </span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <div class="container mt-5">
    <div class="row">
    @foreach ($allevents as $row)

        <!-- Card 1 -->
        <div class="col-md-3 mb-4">
            <a href="{{ route('events.show', ['id' => $row->id]) }}" style="color: black;">
            <div class="card card-body">
                <img class="img-fluid" src="{{ asset('upload/' . $row->event_image) }}" style="width: 300px; height: 150px;">
                <div class="card-title">    
                    <h6>{{$row->event_name}}</h6>
                </div>
                <div class="card-text">
                    <i class="bi bi-geo-alt"></i> {{$row->event_location}}
                    <br>
                    <i class="bi bi-calendar"></i> {{$row->event_date}}
                </div>
                <div class="card-footer mt-auto">
                    Penyelenggara
                </div>
            </div>
            </a>
        </div>
        
    @endforeach

    <!-- Pagination -->
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
        </ul>
    </nav>
    </div>
    </section>

    <script>
        document.getElementsByTagName("nav")[0].remove()
    </script>
    
@endsection
