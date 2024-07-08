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
                <a href="/tickets/"class="see-more-card col-md-4 d-flex" style = "width: 24rem; padding: 0;">
                    <img class="see-more-logo" src="assets/see-more-logo.png"></img>    
                    <h2>See More</h2>
                </a>
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
                        <img src="https://picsum.photos/seed/{{ $post->category->name }}/1600/900" class="card-img-top"
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
                    <a href="/posts/"class="see-more-card col-md-4 d-flex" style = "width: 24rem; padding: 0;">
                    <img class="see-more-logo" src="assets/see-more-logo.png"></img>    
                    <h2>See More</h2>
                </a>
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
                        
                        <div class="gallery-container-card" style= "width: 24rem;" >

                            <div class="photocard" style="width: 24rem; padding: 0; background-image: url('https://picsum.photos/seed/{{ $gallery->id }}/1600/900')"  onclick="showImage(this)">
                                
                            </div>
                            <div class="overlay">
                                {{ $gallery->title }}
                            </div>
                        </div>
                        
                    
                    @endforeach
                    <a href="/gallery/"class="see-more-card col-md-4 d-flex" style = "width: 24rem; padding: 0;">
                    <img class="see-more-logo" src="assets/see-more-logo.png"></img>    
                    <h2>See More</h2>
                </a>
                </div>
            </div>
        </div>
        
        
        <div id="popupContainer" class="popup">
            <div class="popup-content">
                <span class="close" onclick="closePopup()">
                    <p class="close-btn">x</p>
                </span>
                <img id="popupImage" class="popupImage img-fluid" src="" alt="Popup Image">
            </div>
        </div>
        
        <script>
            function showImage(element) {
                var backgroundImage = element.style.backgroundImage;
                var imageUrl = backgroundImage.slice(5, -2);
        
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
                document.getElementById('jumbot').style.position = "relative"; 
            }
        </script>
    </section>

    <section class="gallery-container">
    <h1 class="popular-gallery-title text-center mb-3">NYOBA</h1>

    <div class="row">
        <div class="col-12">
            <div class="scrollable-container d-flex gap-3">
                @foreach($galleries->take(7) as $gallery)
                <div class="gallery-container-card" style="width: 24rem;" data-toggle="modal" data-target="#modal{{ $gallery->id }}">
                    <img src='https://picsum.photos/seed/{{ $gallery->id }}/1600/900' class="photocard" style="width:24rem">
                    <div class="overlay">
                        {{ $gallery->title }}
                    </div>
                    <div class="modal fade" id="modal{{ $gallery->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{ $gallery->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header d-flex align-content-center">
                                    <h5 class="modal-title w-100" id="exampleModalLabel{{ $gallery->id }}" style="color:#fee9ca;">
                                        {{ $gallery->title }}
                                    </h5>
                                    <button type="button" class="close p-0 m-0" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>
                                </div>
                                <div class="modal-body p-0 m-2 mt-0 align-content-center">
                                    <img src="https://picsum.photos/seed/{{ $gallery->id }}/1600/900" class="img-fluid gambar-popup" alt="">
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
