@extends('dashboard.layout.main')
@section('blogActive', 'active')
@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-8 mt-3">
            <a class="btn btn-outline-none" href="/dashboard/posts"><i class="fa-solid fa-angle-left"></i> Back</a>
        </div>
    </div>
    <div class="row mb-2">
        <h1 class="mt-3">{{ $post->title }}</h1>
        <div class="col">
            <a class="btn btn-secondary mb-2 {{ request('category') == $post->category->slug ? 'active' : ''}}"
                href="/posts?category={{$post->category->slug}}">{{ $post->category->name }}</a>
        </div>
    </div>

    @if ($post->image)
        <div style="max-height: 350px; overflow:hidden;">
            <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid mt-3" alt="{{ $post->title }}">
        </div>
    @else
        <img src="https://picsum.photos/seed/{{ $post->category->name }}/1600/900" class="img-fluid rounded-start"
            alt="{{ $post->category->name }}">
    @endif
    <div class="row-desc mt-4">
        {!! $post->body !!}
    </div>
</div>
@endsection