@extends('layouts.main') @section('container')

<link rel="stylesheet" href="/css/home.css">
<link rel="stylesheet" href="/css/posts.css">

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

<section class="home-jumbotron">
    <img src="https://c0.wallpaperflare.com/path/455/605/131/indonesia-puncak-pass-bogor-bogor-landscape-f98ae4b6ab32591c7bcaee138aff1a02.jpg" alt="">
    <div class ="home-title text-center">
        <p>Welcome to</p>
        <p>@Bogor</p>
    </div>
</section>

<div class="home-page ml-4 mr-4">
<section class="popular-destination">

<div class="popular-button">
        <div class="row">
            <div class="col-12">
                <div class="scrollable-container d-flex">
                    @foreach($posts->take(7) as $post)
                    <div class="item-container card" style= "width: 24rem;">
                        <img src="https://source.unsplash.com/1600x900/?{{ $post->category->name }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <a class="btn btn-secondary mb-2"
                                href="#">{{ $post->category->name }}</a>
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                                                                                                                                                                                                                                                                                                                                                                                                                        the
                                                                                                                                                                                                                                                                                                                                                                                                                                        card's content.</p> -->
                            <p><a class="link-offset-2 link-underline link-underline-opacity-100" href="#"><u>Read
                                        now</u></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
          
       
</div> 

</section>

<section class="popular-article-container">

</section>

<section class="gallery-container">

</section>
</div>


@endsection
