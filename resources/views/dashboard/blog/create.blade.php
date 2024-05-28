@extends('dashboard.layout.main')
@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h1>Add Blog</h1>
        </div>
    </div>
    <hr>

    <form method="post" action="/dashboard/blogs" enctype="multipart/form-data">
        @crsf
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                required autofocus value="{{old('title')}}">
            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required
                autofocus value="{{old('slug')}}">
            @error('slug')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
    </form>

</div>

@endsection