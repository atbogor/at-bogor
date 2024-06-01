@extends('mybooking.layout.main')

@section('content')

<style>
    .title {
        color: #456A44;
        font-size: 1.8rem;
    }

    .status {
        color: rgba(69, 106, 68, 0.5);
        font-size: 1.2rem;
    }

    .category {
        color: #FFB49F;
        font-size: 1.2rem;
    }

    .price {
        color: #FB2000;
        font-size: 1.2rem;
    }

    .card.card-history {
        border-radius: 15px;
        box-shadow: 0px 0px 5px 0.5px rgba(0, 0, 0, 0.25);
    }

    h2 {
        color: #142213;
    }
</style>

<div class="container mt-5">
    <h2><b>My Bookings</b></h2>
    <br>
    <div class="col-md-11">
        <div class="card card-history mb-4">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="title col-md-10 d-flex align-items-center">
                        <b>Taman Safari</b>
                    </div>
                    <div class="status col-md-2 d-flex justify-content-end align-items-center">
                        <b>Completed</b>
                    </div>
                </div>
                <div class="row">
                    <div class="category col-md-10 d-flex align-items-center">
                        <b>Nature</b>
                    </div>
                    <div class="price col-md-2 d-flex justify-content-end align-items-center">
                        <b>Rp. 50000</b>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-history mb-4">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="title col-md-10 d-flex align-items-center">
                        <b>Taman Safari</b>
                    </div>
                    <div class="status col-md-2 d-flex justify-content-end align-items-center">
                        <b>Completed</b>
                    </div>
                </div>
                <div class="row">
                    <div class="category col-md-10 d-flex align-items-center">
                        <b>Nature</b>
                    </div>
                    <div class="price col-md-2 d-flex justify-content-end align-items-center">
                        <b>Rp. 50000</b>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-history mb-4">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="title col-md-10 d-flex align-items-center">
                        <b>Taman Safari</b>
                    </div>
                    <div class="status col-md-2 d-flex justify-content-end align-items-center">
                        <b>Completed</b>
                    </div>
                </div>
                <div class="row">
                    <div class="category col-md-10 d-flex align-items-center">
                        <b>Nature</b>
                    </div>
                    <div class="price col-md-2 d-flex justify-content-end align-items-center">
                        <b>Rp. 50000</b>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection