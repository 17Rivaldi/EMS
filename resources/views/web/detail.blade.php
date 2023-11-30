@extends('web.layout.master')

@section('content')
    <section class="section-padding" id="" style="background-color: #fbfbfb;">
        <div class="container description-event">

            <div class="row event-detail mt-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Events</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Konser Metalica</li>
                    </ol>
                </nav>

                <div class="d-flex col-lg-8 event-detail-banner justify-items-center">
                    <img src="https://via.placeholder.com/640x360?text=Example" alt="Gambar"
                        class="img-fluid rounded-3 mx-auto">
                </div>

                <div class="d-flex col-lg-4 event-detail-info mt-2 align-items-center">
                    <div class="card border-0 mb-3 shadow w-100" style="padding: 18px; border-radius: 16px;">
                        <div class="card-header bg-transparent border-0">
                            <h6>Konser Metalica</h6>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p><i class="bi bi-calendar-week me-2 text-primary"></i><label>10 Januari 2024</label></p>
                            <p><i class="bi bi-clock me-2 text-primary"></i><label>17:00 - 21:00 WIB</label></p>
                            <p><i class="bi bi-geo-alt me-2 text-primary"></i><label>Jakarta</label></p>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button">Beli Tiket</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 event-detail-description mt-3">
                    <p class="title">
                        <strong>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, nihil
                            aspernatur ut nostrum
                            sed veniam dolorum reiciendis illo repellat quis voluptatum dolore odit eum laudantium a saepe
                            est unde deserunt!
                        </strong>
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus asperiores dolor quas vel odit
                        quis
                        officiis quo recusandae qui incidunt. Adipisci nisi quidem repellat blanditiis possimus repellendus
                        quia autem et recusandae, quam veniam unde voluptate hic rem perferendis reiciendis numquam odit
                        magni non quos nihil eum nemo aliquam? Voluptate harum ex nulla corporis temporibus sapiente quaerat
                        earum aperiam, qui provident perferendis cumque minima doloribus ipsa quasi inventore a ab fugiat
                        quod odio assumenda facere ipsam quam blanditiis. Libero, doloribus quasi dicta voluptatibus
                        expedita necessitatibus atque cupiditate aliquid sunt vel voluptate id. Non adipisci ab velit
                        tempore consectetur fugiat ullam quam!
                    </p>
                    <hr>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio fugit at animi cupiditate accusamus
                        voluptate beatae qui non sint nulla officiis, saepe eos, adipisci, reiciendis dolorum doloribus sunt
                        blanditiis? Quibusdam repellendus autem voluptas, laudantium nihil, commodi doloribus eius corrupti
                        ad sint sunt velit in rem vel nulla veniam adipisci aliquam?
                    </p>
                </div>
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

        .event-detail-description p {
            font-family: 'Roboto', sans-serif;
            font-weight: 400
        }

        .card-body p {
            font-family: 'Roboto', sans-serif;
        }

        .event-detail-description p strong {
            font-weight: 700;
            font-size: 20px
        }
    </style>
@endsection
