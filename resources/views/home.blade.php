@extends('layouts.main') @section('container')

<link rel="stylesheet" href="/css/home.css">
<!-- <link rel="stylesheet" href="/css/posts.css"> -->
<link rel="stylesheet" href="">

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

<section class="home-jumbotron">
    <img class="home-jumbtron-bgt" src="https://c0.wallpaperflare.com/path/455/605/131/indonesia-puncak-pass-bogor-bogor-landscape-f98ae4b6ab32591c7bcaee138aff1a02.jpg" alt="">
    <div class ="home-title text-center">
        <p>Welcome to</p>
        <img src="/assets/atBogor-logo-homejumbotron.png" class="logo-jumbo" alt="">
    </div>
</section>


<div class="home-page ml-4 mr-4 d-flex flex-column gap-5">
    <section class="popular-destination ">
        <h1 class="popular-destination-title text-center mb-3">Destinations</h1>
        <div class="row">
            <div class="col-12">
                <div class="scrollable-container d-flex gap-3 " style="height: auto;">
                    
                
                @foreach($tickets as $ticket)
                    <div class="col-md-4 d-flex" id="ticket-box" style = "width: 24rem; padding: 0;">
                    <a href="/ticket/{{ $ticket->slug }}" id="atickets">
                    <div class="ticket-content card h-100" style="width: 24rem">

                    @if ($ticket->image)
                        <img src="{{ asset('storage/' . $ticket->image) }}" class="card-img-top img-fluid img_Ticket" alt="{{ $ticket->ticketcategory->name }}">
                    @else
                        <img src="https://picsum.photos/seed/{{ $ticket->ticketcategory->name }}/1600/900" class="img-fluid" alt="...">
                    @endif

                    <div class="card-body flex-container">
                    <button class="btn btn-secondary mb-2 disabled flex-button">{{$ticket->ticketcategory->name}}</button>
                    <h3 class="card-title">{{$ticket->title}}</h3>
                    <h5 class="card-location">{{$ticket->location}}</h5>
                    <h4 class="card-price">IDR {{ number_format($ticket->price, 0, ',', '.') }}</h4>
                    </div>
                    </div>
                    </a>
                    </div>
                @endforeach
                <a href="/tickets/"class="see-more-card col-md-4 d-flex" style = "width: 24rem; padding: 0;">
                    <img class="see-more-logo" src="assets/see-more-logo.png"></img>    
                    <h2>See More</h2>
                </a>
                </div>
            </div>
        </div>


    </section>
    

    <section class="popular-article-container">
        <h1 class="popular-article-title text-center mb-3">Articles</h1>

        <div class="row">
            <div class="col-12">
                <div class="scrollable-container d-flex gap-3">
                    @foreach($posts->take(7) as $post)
                    
                    <div class="article-container card" style= "width: 24rem;" id="blog-box">
                        <a href="/post/{{ $post->slug }}" id="ablogs" class="card-link">
                            <div class="blog-content card h-100">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid img_Blog" alt="{{ $post->category->name }}">
                                @else
                                    <img src="https://picsum.photos/seed/{{ $post->category->name }}/1600/900" class="card-img-top " alt="...">
                                @endif
                                
                                <div class="card-body flex-container">
                                    <button class="btn btn-secondary disabled mb-2 disabled flex-button"
                                        href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</button>
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <a class="link-offset-2 "
                                        href="/post/{{ $post->slug }}"><u>Read now</u></a>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    <a href="/posts/"class="see-more-card col-md-4 d-flex" style = "width: 24rem; padding: 0;">
                    <img class="see-more-logo" src="assets/see-more-logo.png"></img>    
                    <h2>See More</h2>
                </a>
                </div>
            </div>
        </div>
     
    </section>

    <section class="gallery-container">
        <h1 class="popular-gallery-title text-center mb-3">Gallery</h1>

        <div class="row">
            <div class="col-12">
                <div class="scrollable-container d-flex gap-3">
                    @foreach($galleries->take(7) as $gallery)
                        
                        <div class="gallery-container-card" id="gallery-box" style="width: 24rem;" data-toggle="modal" data-target="#modal{{ $gallery->id }}">
                                <div class="gallery-content card h-100">
                                    @if ($gallery->image)
                                        <img src="{{ asset('storage/' . $gallery->image) }}" class="card-img-top img-fluid img_gallery">
                                    @else
                                        <img src='https://picsum.photos/seed/{{ $gallery->id }}/1600/900' class="card-img-top" style="width:24rem">
                                    @endif
                                    
                                    <div class="card-body flex-container">
                                    
                                        <h5 class="card-title m-0" style="width: 24rem">
                                            {{ Str::limit(strip_tags($gallery->title ), 34) }}

                                        </h5>
                                    </div>
                                </div>
                                <div class="modal fade" id="modal{{ $gallery->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{ $gallery->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header d-flex align-content-center">
                                            <h5 class="modal-title w-100 text-left" id="exampleModalLabel{{ $gallery->id }}" style="color:#fee9ca;">
                                                {{ $gallery->title }}
                                            </h5>
                                            <div data-bs-theme="dark">
                                                <button type="button" class="btn-close p-2 m-0" aria-label="Close"></button>
                                            </div>
                                            <!-- <button type="button" class="close p-0 m-0" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">x</span>
                                            </button> -->
                                        </div>
                                        <div class="modal-body p-0 m-2 mt-0 align-content-center">
                                            @if ($gallery->image)
                                                <img src="{{ asset('storage/' . $gallery->image) }}" class="card-img-top img-fluid gambar-popup">
                                            @else
                                                <img src='https://picsum.photos/seed/{{ $gallery->id }}/1600/900' class="card-img-top gambar-popup img-fluid">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <a href="/gallery/" class="see-more-card col-md-4 d-flex" style="width: 24rem; padding: 0;">
                        <img class="see-more-logo" src="assets/see-more-logo.png" alt="See More">
                        <h2>See More</h2>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
