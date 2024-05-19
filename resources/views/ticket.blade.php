@extends('layouts.main')

@section('container')

<style>
    .gap-1{
        opacity: 0%;
        height: 30px;
    }

    .jumbotron {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 380px;
        width: 94%;
        margin: auto;
        background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Naruhito_and_Masako_visit_Bogor_Palace_55.jpg/392px-Naruhito_and_Masako_visit_Bogor_Palace_55.jpg');
        background-size: cover; 
        background-position: center; 
    }

    .title{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .gap-2{
        opacity: 0%;
        height: 2px;
    }

    .heading-title{
        display: flex;
        font-size: 46px;
    }

    .loc-and-type{
        right: 10%;
    }
</style>

<div class="gap-1">
    
</div>
<div class="jumbotron jumbotron-fluid">
    
</div>
<div class="gap-2">
    
</div>
<div class="title">
    <h1 class="heading-title">Destination Name</h1>
</div>

<div class="loc-and-type">
    <h3 class="locaysh">Bogor, Bogor Tengah</h3>
</div>


@endsection
