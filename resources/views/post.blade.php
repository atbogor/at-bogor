<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c8e35e2055.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/post.css">
</head>

<body>
    @extends('layouts.main')
    @section('container')

    <div class="container">
        <div class="row">
            <div class="col-8 mt-3">
                <a class="btn btn-outline-none" href="/posts"><i class="fa-solid fa-angle-left"></i> Back</a>
            </div>
        </div>
        <div class="row mb-2">
            <h1 class="mt-3">{{ $post->title }}</h1>
            <div class="col">
                <a class="btn btn-secondary mb-2 {{ request('category') == $post->category->slug ? 'active' : ''}}"
                    href="/posts?category={{$post->category->slug}}">{{ $post->category->name }}</a>
            </div>
        </div>
        <div class="row mt-2">
            <img src="https://picsum.photos/seed/{{ $post->category->name }}/1600/900" class="img-fluid rounded-start"
                alt="{{ $post->category->name }}">
        </div>
        <div class="row-desc mt-4">
            {!! $post->body !!}
        </div>
    </div>

    @endsection
</body>

</html>