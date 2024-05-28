@extends('dashboard.layout.main')
@section('content')

<style>
    .img-fluid {
        border-radius: 12px;
    }

    p {
        font-size: 1.2rem;
    }

    .h1 {
        width: 100px;
    }
</style>

<h1>{{ $post->title}}</h1>

@endsection