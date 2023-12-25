@extends('organizer.layout.master')

@section('content')
{{-- Main Content --}}
<div class="row">
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                Total Event
                            </p>
                            <h5 class="font-weight-bolder">{{ $totalEvents }}</h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                            <i class="fas fa-calendar-week text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                Tiket Terjual
                            </p>
                            <h5 class="font-weight-bolder">{{ $totalTicketsSold }}</h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                            <i class="fas fa-ticket-alt text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                Pendapatan
                            </p>
                            <h5 class="font-weight-bolder">RP. {{ number_format($totalSales, 0, ',', '.') }}</h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                            <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card mt-4">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1">Jumlah Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2">Pendapatan Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab3">Tiket Event</a>
                    </li>
                </ul>
            </div>

            <div class="card-body tab-content">
                <div class="tab-pane fade show active" id="tab1">
                    <div style="width: 80%; margin: auto;">
                        <canvas id="chart1"></canvas>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab2">
                    <div style="width: 80%; margin: auto;">
                        <canvas id="chart2"></canvas>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab3">
                    <canvas id="chart3"></canvas>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-xl-4 col-sm-6">
            <div class="card customer mt-4">
                <h2>Pesan Masuk</h2>
                @foreach ($messages->reverse() as $message)
                    <div class="customer-wrapper px-3">
                        @php
                            $randomProfileNumber = $message->user_id ?? rand(1, 100);
                        @endphp
                        <img class="customer-image" alt="no available image"
                            src="https://picsum.photos/id/{{ $randomProfileNumber }}/40/40.jpg">
    <div class="customer-name">
        <h4>{{ $message->sender_name }}</h4>
        <p>
            {{ Str::limit($message->message_text, 32) }}
            @if (strlen($message->message_text) > 32)
            <a href="#" data-bs-toggle="modal" data-bs-target="#fullMessageModal{{ $message->id }}">Selengkapnya</a>
            @endif
        </p>
    </div>
    <p class="customer-date">
        {{ \Carbon\Carbon::parse($message->message_date)->formatLocalized('%d-%m-%Y') }}
    </p>
</div>
@endforeach
<div class="d-flex justify-content-center mt-1">
    {{ $messages->links() }}
</div>
</div>
</div> --}}
</div>
@endsection

@section('addCss')
<style>

</style>
@endsection

@section('addJs')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var data = @json($data1);

        var labels = data.map(item => item.event_name);
        var values = data.map(item => item.total);

        var ctx = document.getElementById('chart1').getContext('2d');
        var salesPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: values,
                    backgroundColor: [
                        '#FF6384', '#36A2EB', '#FFCE56', '#4CAF50', '#9C27B0',
                        '#FF5722', '#607D8B', '#03A9F4', '#CDDC39', '#FF9800',
                        '#795548', '#E91E63'
                    ],
                    hoverBackgroundColor: [
                        '#FF6384', '#36A2EB', '#FFCE56', '#4CAF50', '#9C27B0',
                        '#FF5722', '#607D8B', '#03A9F4', '#CDDC39', '#FF9800',
                        '#795548', '#E91E63'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var data2 = @json($data2);

        var eventNames = data2.map(item => item.event_name);
        var revenueValues = data2.map(item => item.total_revenue);

        // Membuat array warna acak
        var randomColors = Array.from({
            length: eventNames.length
        }, () => getRandomColor());

        var ctx = document.getElementById('chart2').getContext('2d');
        var revenueBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: eventNames,
                datasets: [{
                    label: 'Pendapatan Event',
                    data: revenueValues,
                    backgroundColor: randomColors,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                responsive: true,
                maintainAspectRatio: false
            }
        });

        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var allDates = @json($allDates);
        var allEvents = @json($allEvents);
        var data3 = @json($data3);

        var datasets = [];

        allEvents.forEach(function(event) {
            var eventData = data3.filter(item => item.event_name === event);

            var values = allDates.map(function(date) {
                var dateData = eventData.find(item => item.date === date);
                return dateData ? dateData.total_tickets : 0;
            });

            datasets.push({
                label: event,
                data: values,
                borderColor: getRandomColor(),
                borderWidth: 1,
                fill: false
            });
        });

        var ctx = document.getElementById('chart3').getContext('2d');
        var lineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: allDates,
                datasets: datasets
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                responsive: true,
                maintainAspectRatio: false
            }
        });

        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    });
</script>
@endsection