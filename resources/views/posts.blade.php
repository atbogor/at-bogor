@extends('layouts.main')

@section('container')

<link rel="stylesheet" href="/css/posts.css">

<!-- jangan lupa actionnya di form, terus kalau yg headline mabil data yang pertama index 0 -->

<div class="container mt-4">
    <div class="row justify-content-center mb-5">
        <form class="form-inline my-2 my-lg-0 justify-content-center" action="/posts">
            @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            <input class="form-control " type="text" placeholder="Search" aria-label="Search" name="search"
                value="{{ request('search') }}">
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
                            <p><a class="link-offset-2 link-underline link-underline-opacity-100"
                                    href="/post/{{ $posts[0]->slug }}"><u class="head">Read
                                        now</u></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        @if($posts[0]->image)
                            <img src="{{ asset($posts[0]->image) }}" class="img-jumbotron rounded-start"
                                alt="{{ $posts[0]->category->name }}">
                        @else
                        <img src="https://picsum.photos/seed/{{ $posts[0]->category->name }}/1600/900"
                            class="img-fluid rounded-start" alt="{{ $posts[0]->category->name }}">
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link {{ !request('category') ? 'active' : '' }}" aria-current="page"
                                href="/posts">All Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request('category') == 'nature' ? 'active' : ''}}"
                                href="/posts?category=nature">Nature</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request('category') == 'history' ? 'active' : ''}}"
                                href="/posts?category=history">History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request('category') == 'entertainment' ? 'active' : ''}}"
                                href="/posts?category=entertainment">Entertaiment</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach($posts->skip(1) as $post)
                    <div class="col-md-4 mb-5 d-flex" id='blog-box'>
                        <a href="/post/{{ $post->slug }}" id="ablogs" class="card-link">
                            <div class="blog-content card h-100">
                                <div class="img-container">
                                    @if($post->image)
                                        <img src="{{ asset($post->image) }}" class="img-fluid rounded-start"
                                            alt="{{ $post->category->name }}">
                                    @else
                                        <img src="https://picsum.photos/seed/{{ $post->category->name }}/1600/900"
                                            class="img-fluid rounded-start" alt="{{ $post->category->name }}">
                                    @endif
                                </div>
                                <div class="card-body flex-container">
                                    <button class="btn btn-secondary disabled mb-2 disabled flex-button"
                                        href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</button>
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <a class="link-offset-2"
                                        href="/post/{{ $post->slug }}"><u>Read now</u></a>
                                </div>
                            </div>
                        </a>
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