@extends('dashboard.layout.main')

@section('ticketActive', 'active')
@section('content')

<style>
    .img-fluid {
        border-radius: 12px;
    }

    p {
        font-size: 1.2rem;
    }
</style>

<div class="container mt-4">
    <div class="row d-flex align-items-center mb-3">
        <div class="col-md-12">
            <h1>{{ $ticket->title }}</h1>
        </div>
    </div>
    <a href="/dashboard/tickets" class="btn btn-success">Back to All Tickets</a>
    <hr>

    @if ($ticket->image)
        <div style="max-height: 350px; overflow:hidden;">
            <img src="{{ asset($ticket->image) }}" class="img-fluid mt-3"
                alt="{{ $ticket->ticketcategory->name }}">
        </div>
    @else
        <img src="https://picsum.photos/seed/{{ $ticket->ticketcategory->name }}/1200/400" class="img-fluid mt-3"
            alt="{{ $ticket->ticketcategory->name }}">
    @endif

    <div class="row mt-2">
        <p><b>Price: </b>IDR {{ number_format($ticket->price, 0, ',', '.') }}</p>
    </div>
    <div class="row">
        <p><b>Location: </b>{{ $ticket->location }}</p>
    </div>

    <hr>

    <div class="col">
        <p><b>Description </b></p>
        <p>{!! $ticket->description !!}</p>
    </div>
</div>
@endsection