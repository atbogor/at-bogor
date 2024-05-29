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
        justify-content: center;
        /* gap: 2em; */
        flex-direction: column;
        align-items: center;
        margin: auto;
        width: 94%;
        justify-content: space-between;
    }

    .photocard {
        position: relative;
        display: flex;
        height: 15em;
        width: 25em !important;
        border-radius: 12px;
        border: 2px solid black;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        margin-right: 2em; 
        margin-top: 1em;
        margin-bottom: 1em;
    }

    .row > .photocard:nth-child(3n) {
        margin-right: 0;
    }

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

</style>

<div class="jumbot">
    <div class="title">
        <h3 class="title-tit">Gallery</h3>
        <h6 class="title-sub">ASSALAMUALAIKUM WARAHMATULLAHI WABARAKATUH</h6>
    </div>
</div>
<div class="box">
    @php $count = 0; @endphp
    <div class="row">
        @foreach ($galleries as $gallery)
            <div class="photocard" style="background-image: url('{{ $gallery->image }}');">
                <div class="overlay">
                    {{ $gallery->title }}
                </div>
            </div>
            @php $count++; @endphp
            @if ($count % 3 == 0)
                </div><div class="row">
            @endif
        @endforeach
    </div>
</div>

@endsection