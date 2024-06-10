@extends('dashboard.layout.main')
@section('content')

<style>
    hr {
        margin-top: 0.5rem !important;
        border-color: #142213 !important;
        border-top: 1px solid;
    }

    .btn.btn-primary {
        background-color: #FFB49F !important;
        border-color: #FFB49F;
        color: #142213;
        width: 150px;
    }

    .form-select {
        height: 37px;
    }

    .floatingInput {
        color: #214123;
    }

    .container {
        height: 90px;
    }

    .category-floating-form {
        box-shadow: 0 0 0 0.5px #214123;
    }
</style>

<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h1>Edit Blog</h1>
        </div>
    </div>
    <hr>

    <form method="post" action="/dashboard/posts/{{$post->slug}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                required autofocus value="{{old('title', $post->title)}}">
            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required
                autofocus value="{{old('slug', $post->slug)}}">
            @error('slug')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id"
                class="category-floating-form form-select col-md-12 px-2 @error('category') is-invalid @enderror"
                id="category_id" aria-label=" Default select example" required value="{{ old('category_id') }}">
                <option disabled {{ old('category_id', $post->category_id) === null ? 'selected' : '' }}>Category</option>
                @foreach ($categories as $category)
                    @if(old('category_id', '$post->category_id') == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>

            @error('category')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Upload Image</label>
            <input type="hidden" name="oldImage" value="{{$post->image}}">
            @if ($post->image)
                <img src="{{asset('storage/' . $post->image)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
                <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Description</label>
            <input id="body" type="hidden" name="body" value="{{old('body', $post->body)}}">
            <trix-editor input="body"></trix-editor>
        </div>

        <button class="w-100 btn btn-secondary btn-primary mt-3 mb-3" type="submit">Update Blog</button>
    </form>
</div>
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function () {
        fetch('/dashboard/posts/checkSlug?title=' + title.value).then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function (e) {
        e.preventDefault();
    });

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }

    }
</script>

@endsection