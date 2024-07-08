@extends('dashboard.layout.main')
@section('galleryActive', 'active')
@section('content')

<style>
    .body,
    h1 {
        color: #142213;
    }

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

    .delete-button {
        background-color: transparent;
        border: none;
        padding: 0;
    }
</style>

<div class="container px-5 py-3">
<div class="container mt-4">
    <div class="row d-flex align-items-center">
        <div class="col-md-6">
            <h1>Galleries</h1>
        </div>
        <div class="col-md-6 d-flex justify-content-end align-items-center">
            <p style="font-size: 1.3rem">
                <i class="fa-regular fa-circle-user"></i> Welcome, {{auth()->user()->name}}
            </p>
        </div>
    </div>
    <hr>
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-6">
            <a class="btn btn-primary" href="/dashboard/galleries/create">
                Add Item
            </a>
        </div>
    </div>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galleries as $gallery)
                <tr>
                    <td>{{ $gallery->id }}</td>
                    <td>{{ $gallery->title }}</td>
                    <td>
                        <div class="dropdown">
                            <a class="" href="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-ellipsis"></i>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="/dashboard/galleries/{{ $gallery->slug }}/edit"><i
                                            class="fa-solid fa-pencil"></i> Edit</a></li>

                                <form action="/dashboard/galleries/{{ $gallery->slug }}" method="post" class="dropdown-item">
                                    @method('delete')
                                    @csrf
                                    <button class="delete-button" type="submit">
                                        <li onclick="return confirm('Are you sure?')">
                                            <i class="fa-solid fa-trash"></i> Delete
                                        </li>
                                    </button>
                                </form>

                                <li><a class="dropdown-item" href="/dashboard/galleries/{{ $gallery->slug }}"><i
                                            class="fa-solid fa-eye"></i> View</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-5">
        {{ $galleries->links() }}
    </div>
</div>

</div>

<script src="https://kit.fontawesome.com/f8f794dd92.js" crossorigin="anonymous"></script>


@endsection