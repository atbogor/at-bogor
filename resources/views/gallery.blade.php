@extends('layouts.main')

@section('container')
<meta charset="UTF-8">
<title>Gallery</title>
<style>
    .title{
        display: flex; 
        flex-direction: column;
        margin: auto;
        width: 94%;
    }

    .jumbot {
        display: flex;
        position: sticky;
        top: 0; 
        justify-content: center;
        align-items: center;
        height: 7em;
        background-color: white;
        z-index: 999; 
    }

    .title-tit{
        color: #142213;
    }

    .title-sub{
        color: #224121;
    }

    .box {
        display: flex;
        flex-wrap: wrap; 
        /* gap: 2em; */
        align-items: center;
        flex-direction: column;
        align-items: center;
        margin: auto;
        width: 94%;
        justify-content: center;
    }
.gallery-container-card {
    /* display: flex; */
    border-radius: 15px !important;

    background-color: #224121;
    flex-direction: column;
    align-items: center;
    justify-content: top;
    /* border: 2px solid #224121 !important; */
}
.gallery-content.card {
    border-radius: 15px !important;
    display: flex;
    overflow: hidden;
    background-color: #224121;
    border: 2px solid #224121 !important;
}

.card-title{
    color: white;
}

.row {
    justify-content: center;
}

.gambar-popup {
    border-radius: 15px !important;
}
.modal {
    text-align: center;
}

.modal-content {
    background-color: #224121;
    border-radius: 15px;
}

.modal-header {
    border: 0;
}

#gallery-box:hover .card-price {
    color: #224121;
}

#gallery-box a {
    text-decoration: none;
}

#gallery-box .card-body {
    transition: 300ms ease-out;
}
#gallery-box:hover .card-body {
    background-color: #fb2000;
    transition: 300ms ease-in;
    color: #ffffff !important;
}



</style>

<div id="jumbot" class="jumbot">
    <div class="title">
        <h3 class="title-tit">Gallery</h3>
        <h6 class="title-sub">The Beauty of Bogor in Images</h6>
    </div>
</div>
<div class="box">
    @php $count = 0; @endphp
    <div class=" row gap-4">
        @foreach ($galleries as $gallery)
    <!-- <div class="col-md-12 photocard" style="background-image: url('https://picsum.photos/seed/{{ $gallery->id }}/1600/900')" onclick="showImage(this)">
        <div class="overlay">
            {{ $gallery->title }}
        </div>
    </div> -->

        <div class="gallery-container-card p-0" id="gallery-box" style="width: 24rem;" data-toggle="modal" data-target="#modal{{ $gallery->id }}">
            <div class="gallery-content card h-100">
                <img src='https://picsum.photos/seed/{{ $gallery->id }}/1600/900' class="card-img-top" style="width:24rem">
                <div class="card-body flex-container">
                
                    <h5 class="card-title m-0">
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
                            <img src="https://picsum.photos/seed/{{ $gallery->id }}/1600/900" class="img-fluid gambar-popup" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

<div class="d-flex justify-content-center mt-5">
      {{ $galleries->links() }}
</div>


@endsection