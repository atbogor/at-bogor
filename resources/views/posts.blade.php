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
    <div class="row justify-content-center mb-4">
        <div class="d-flex headline card mb-3">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="blog-content card-body">
                        <h1 class="card-title">Article Name</h1>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p>
                        <p><a class="link-offset-2 link-underline link-underline-opacity-100" href="#"><u>Read
                                    now</u></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://koran-jakarta.com/images/article/perjalanan-kota-bogor-dulu-hingga-kini-menjadi-penyanggah-ibu-kota-negara-220327193334.jpg"
                        class="img-fluid rounded-start" alt="...">
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

            @if($posts->count())
                @foreach($posts as $post)
                    <div class="col-md-4 mb-5 d-flex">
                        <div class="blog-content card h-100">
                            <img src="https://koran-jakarta.com/images/article/perjalanan-kota-bogor-dulu-hingga-kini-menjadi-penyanggah-ibu-kota-negara-220327193334.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
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
            @else 
                <p class="text-center fs-4">No post found.</p>
            @endif

            <div class="d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>

@endsection