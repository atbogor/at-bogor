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
    <div class="row d-flex align-items-center">
        <div class="col-md-6">
            <h1>Add Ticket</h1>
        </div>
    </div>
    <hr>

    <form method="post" action="/dashboard/tickets" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                required autofocus value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                value="{{ old('slug') }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control @error('location') is-invalid @enderror" id="location"
                name="location" value="{{ old('location') }}">
            @error('location')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id"
                class="category-floating-form form-select col-md-12 px-2 @error('category') is-invalid @enderror"
                id="category_id" aria-label=" Default select example" required value="{{ old('category_id') }}">
                <option disabled {{ old('category_id') === null ? 'selected' : '' }}>Category</option>
                @foreach ($ticketcategories as $ticketcategory)
                    @if(old('category_id') == $ticketcategory->id)
                        <option value="{{ $ticketcategory->id }}" selected>{{ $ticketcategory->name }}</option>
                    @else
                        <option value="{{ $ticketcategory->id }}">{{ $ticketcategory->name }}</option>
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
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                value="{{ old('price') }}">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Upload Image</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input id="description" type="hidden" name="description">
            <trix-editor input="description"></trix-editor>
        </div>


        <button class="w-100 btn btn-secondary btn-primary mt-3 mb-3" type="submit">Create Ticket</button>
    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function () {
        fetch('/dashboard/tickets/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function (e) {
        e.preventDefault();
    });
</script>
@endsection