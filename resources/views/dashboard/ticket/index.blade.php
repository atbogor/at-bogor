@extends('dashboard.layout.main')

@section('content')

<style>
    .btn.btn-primary {
        background-color: #FFB49F;
        border-color: #FFB49F;
        color: #142213;
        width: 150px;
    }

    hr {
        margin-top: 0.5rem !important;
        border-color: #142213 !important;
        border-top: 1px solid;
    }
</style>

<div class="container mt-4">
    <div class="row d-flex align-items-center">
        <div class="col-md-6">
            <h1>Tickets</h1>
        </div>
        <div class="col-md-6 d-flex justify-content-end align-items-center">
            <p style="font-size: 1.3rem">
                <i class="fa-regular fa-circle-user"></i> Welcome, {{auth()->user()->name}}
            </p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <div class="btn btn-primary">
                Add Tickets
            </div>
        </div>
    </div>

    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Cost</th>
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->title }}</td>
                    <td>{{ $ticket->ticketcategory->name }}</td>
                    <td>{{ $ticket->price }}</td>
                    <td>
                        <i class="fa-solid fa-ellipsis"></i>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-3">
        {{ $tickets->links() }}
    </div>
</div>

<script src="https://kit.fontawesome.com/f8f794dd92.js" crossorigin="anonymous"></script>
@endsection