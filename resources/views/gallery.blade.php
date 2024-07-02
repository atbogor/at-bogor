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

    .row{
        justify-content: center;
    }

    .photocard {
        position: relative;
        display: flex;
        height: 18rem;
        width: 24.3rem;
        border-radius: 12px;
        border: 2px solid black;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        margin-right: 2em; 
        margin-top: 1em;
        margin-bottom: 1em;
    }

    /* .row > .photocard:nth-child(3n) {
        margin-right: 0;
    } */

    .overlay {
        position: absolute;
        background-color: #224121;
        bottom: 0;
        right: 0;
        color: white;
        padding: 10px;
        width: 100%;
        border-radius: 9px;
        transition: background-color 300ms ease-out;
    }

    .photocard:hover .overlay {
        background-color: #FB2000; 
    }

    .popup {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.5);
    }

    .popup-content {
        margin: auto;
        display: block;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        max-width: 700px;
        max-height: 100%;
        border: 10px solid #142213;
    }

    .popupImage{
        width: 100%;
    }

    .close {
        display: flex; 
        justify-content: center; 
        align-items: center;
        position: absolute;
        top: 2%;
        right: 2%;
        color: #FF0000;
        font-size: 40px;
        background-color: #214123;
        border-radius: 100px;
        width: 0.8em;
        margin-bottom: 0;
        height: 0.8em;
    }

    .close:hover,
    .close:focus {
        color: #FF0000;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<div id="jumbot" class="jumbot">
    <div class="title">
        <h3 class="title-tit">Gallery</h3>
        <h6 class="title-sub">ASSALAMUALAIKUM WARAHMATULLAHI WABARAKATUH</h6>
    </div>
</div>
<div class="box">
    @php $count = 0; @endphp
    <div class=" row">
        @foreach ($galleries as $gallery)
            <div class="col-md-12 photocard" style="background-image: url('{{ $gallery->image }}');" onclick="showImage('{{ $gallery->image }}')">
                <div class="overlay">
                    {{ $gallery->title }}
                </div>
            </div>
            @php $count++; @endphp
            <!-- @if ($count % 3 == 0)
                </div><div class="row">
            @endif -->
        @endforeach
    </div>
</div>

<div id="popupContainer" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">
            <p>x</p>
        </span>
        <img id="popupImage" class="popupImage" src="" alt="Popup Image">
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