@extends('dashboard.layout.main')

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
    <a href="/dashboard/tickets" class="btn btn-success">Back to All My Post</a>
    <hr>

    <img src="https://source.unsplash.com/1200x400?{{ $ticket->ticketcategory->name }}" class="img-fluid mt-3 mb-3"
        alt="">

    <div class="row">
        <p><b>Price: </b>{{ $ticket->price }}</p>
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