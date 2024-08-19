@extends('dashboard.layout.main')
@section('blogActive', 'active')
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
            <h1>{{ $post->title }}</h1>
        </div>
    </div>
    <a href="/dashboard/tickets" class="btn btn-success">Back to All My Blogs</a>
    <hr>

    
    @if ($post->image)
    <div style="max-height: 350px; overflow:hidden;">
        <img src="{{ asset($post->image) }}" class="img-fluid mt-3" alt="{{ $post->title }}">
    </div>
    @else
    <img src="https://picsum.photos/seed/{{ $post->category->name }}/1600/900" class="img-fluid"
    alt="{{ $post->category->name }}">
    @endif

    <div class="row-desc mt-4">
        {!! $post->body !!}
    </div>
</div>
@endsection