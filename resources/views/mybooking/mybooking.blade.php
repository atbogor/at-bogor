@extends('mybooking.layout.main')
@section('mybookingActive', 'active')
@section('content')


<style>
    .title {
        color: #142213;
        font-size: 1.8rem;
    }

    .status {
        color: #224121;
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

    .btn-secondary {
        background-color: #FEE9CA !important;
        width: 110px !important;
        height: 30px !important;
        font-size: 15px !important;
        border-radius: 15px !important;
        color: #142213 !important;
        border: #FEE9CA !important;
    }

    .receipt {
        color: #;
        font-size: 1.2rem;

    }

    .date {
        color: rgba(20, 34, 19, 0.7);
    }

    hr {
        border: 1px solid #142213;
    }
</style>

<div class="container mt-5">`
    <h2><b>My Bookings</b></h2>
    <br>
    <div class="col-md-11">
        @foreach ($bookings as $booking)
            <div class="card card-history mb-4">
                <div class="card-body">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-9 d-flex align-items-center">
                                <a class="btn btn-secondary mb-2 d-flex justify-content-center align-items-center"
                                    href="#">{{ $booking->ticket->ticketcategory->name }}</a>
                            </div>
                            <div class="receipt col-md-3 d-flex justify-content-end align-items-center">
                                <b><a href="{{route('receipt', $booking->id)}}"> See receipt <i class="fa-solid fa-chevron-right"></i> </a></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="title col-md-10 d-flex align-items-center">
                                <b>{{ $booking->ticket->title }}</b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="date col-md-10 d-flex align-items-center">
                                <b>{{ $booking->transaction_date }}</b>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="status col-md-10 d-flex align-items-center">
                                <b>
                                    @if ($booking->status)
                                        Completed
                                    @else
                                        Pending
                                    @endif
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center align-items-center">
        {{ $bookings->links() }}
    </div>

</div>
@endsection