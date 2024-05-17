@extends('layouts.main')

@section('container')

<link rel="stylesheet" href="/css/posts.css">

<!-- jangan lupa actionnya di form, terus kalau yg headline mabil data yang pertama index 0 -->

<div class="container mt-4">
    <div class="row justify-content-center mb-5">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>

    <!-- jangan lupa di loop aja nanti sama tambahin condition ada atau engga -->
    @if($posts->count())
        <div class="row justify-content-center mb-4">
            <div class="d-flex headline card mb-3">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="blog-content card-body">
                            <h1 class="head card-title">{{ $posts[0]->title }}</h1>
                            <p><a class="link-offset-2 link-underline link-underline-opacity-100" href="#"><u
                                        class="head">Read
                                        now</u></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        @if($posts[0]->image)
                            <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid rounded-start"
                                alt="{{ $posts[0]->category->name }}">
                        @endif
                        <img src="https://source.unsplash.com/1600x900/?{{ $posts[0]->category->name }}"
                            class="img-fluid rounded-start" alt="{{ $posts[0]->category->name }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">All Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nature</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Entertaiment</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach($posts->skip(1) as $post)
                    <div class="col-md-4 mb-5 d-flex">
                        <div class="blog-content card h-100">
                            <img src="https://source.unsplash.com/1600x900/?{{ $post->category->name }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <a class="btn btn-secondary mb-2" href="">{{ $post->category->name }}</a>
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                                                                                                                                                                                                                                                                                                                    the
                                                                                                                                                                                                                                                                                                                                    card's content.</p> -->
                                <p><a class="link-offset-2 link-underline link-underline-opacity-100" href="#"><u>Read
                                            now</u></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    @else 
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>

@endsection