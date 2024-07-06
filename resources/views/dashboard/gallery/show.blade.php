@extends('dashboard.layout.main')
@section('galleryActive', 'active')
@section('content')

<style>
    .img-fluid {
        border-radius: 12px;
        height: 400%;
        width: 100%;
    }

    p {
        font-size: 1.2rem;
    }
</style>

<div class="container mt-4">
    <div class="row d-flex align-items-center mb-3">
        <div class="col-md-12">
            <h1>{{ $gallery->title }}</h1>
        </div>
    </div>
    <a href="/dashboard/galleries" class="btn btn-success">Back to All My Gallery Items</a>
    <hr>

    @if ($gallery->image)
        <div style="max-height: 1000px; overflow:hidden;">
            <!-- Hi -->
            <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid mt-3">
        </div>
    @else
        <img src="https://picsum.photos/seed/{{ $gallery->title }}/1200/400" class="img-fluid mt-3">
    @endif

 
</div>

@endsection