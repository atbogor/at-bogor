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
        <h1 class="popular-destination-title text-center mb-3">Popular Destination</h1>
        <div class="row">
            <div class="col-12">
                <div class="scrollable-container d-flex gap-3 " style="height: auto;">
                    <div class="see-more-card col-md-4 d-flex"style = "width: 24rem; padding: 0;">\
                    <img class="see-more-logo" src="public\assets\see-more-logo.png"></img>    
                    <h2>See More</h2>
                    </div>
                @foreach($tickets->take(7) as $ticket)
                    <div class="col-md-4 d-flex" id="ticket-box" style = "width: 24rem; padding: 0;">
                    <a href="/ticket/{{ $ticket->slug }}" id="atickets">
                    <div class="ticket-content card h-100">

                    @if ($ticket->image)
                        <img src="{{ asset('storage/' . $ticket->image) }}" class="card-img-top" alt="{{ $ticket->ticketcategory->name }}">
                    @else
                        <img src="https://picsum.photos/seed/{{ $ticket->ticketcategory->name }}/1600/900"h-100 class="img-fluid" alt="...">
                    @endif

                    <div class="card-body flex-container">
                    <button class="btn btn-secondary mb-2 disabled flex-button">{{$ticket->ticketcategory->name}}</button>
                    <h3 class="card-title">{{$ticket->title}}</h3>
                    <h5 class="card-location">{{$ticket->location}}</h5>
                    <h4 class="card-price">IDR {{$ticket->price}}</h4>
                    </div>
                    </div>
                    </a>
                    </div>
                @endforeach
                </div>
            </div>
        </div>


    </section>
    

    <section class="popular-article-container">
        <h1 class="popular-article-title text-center mb-3">Popular Article</h1>

        <div class="row">
            <div class="col-12">
                <div class="scrollable-container d-flex gap-3">
                    @foreach($posts->take(7) as $post)
                    
                    <div class="article-container card" style= "width: 24rem;">
                        <img src="https://source.unsplash.com/1600x900/?{{ $post->category->name }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <a class="btn btn-secondary disabled mb-2"
                                href="#">{{ $post->category->name }}</a>
                            <h5 class="card-title">{{ $post->title }}</h5>
                            
                            <p>
                                <a class="link-offset-2 link-underline link-underline-opacity-100" href="#">
                                    <u>Read now</u>
                                </a>
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
     
    </section>

    <section class="gallery-container">
        <h1 class="popular-gallery-title text-center  mb-3">Popular Gallery</h1>

        <div class="row">
            <div class="col-12">
                <div class="scrollable-container d-flex gap-3" >
                    @foreach($galleries->take(7) as $gallery)
                        
                        <div class="gallery-container-card" style= "width: 24rem;">

                            <div class="photocard" style="width: 24rem; padding: 0; background-image: url('{{ $gallery->image }}');" onclick="showImage('{{ $gallery->image }}')">
                            </div>
                            
                            <div class="overlay">
                                {{ $gallery->title }}
                            </div>
                        </div>
                        
                    
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>

<div id="popupContainer" class="popup">
    <div class="image-pop-upp">
        <span class="close" onclick="closePopup()">&times;</span>
        <img id="popupImage" class="popup-content" src="" alt="Popup Image">
    </div>
</div>

<script>
    function showImage(imageUrl) {
        document.getElementById('popupImage').src = imageUrl;
        document.getElementById('popupContainer').style.display = "block";
        document.getElementById('jumbot').style.position = "static"; 
        document.getElementById('popupContainer').addEventListener('click', function(event) {
            if (event.target === this) {
                closePopup();
            }
        });
    }

    function closePopup() {
        document.getElementById('popupContainer').style.display = "none";
        document.getElementById('jumbot').style.position = "sticky"; 
    }
</script>


@endsection
