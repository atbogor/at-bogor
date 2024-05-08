@extends('layouts.main')

@section('container')

<style>
    .card-title,
    .card-text {
        color: #142213 !important;
    }

    .link-offset-2 {
        color: #142213 !important;
    }

    .btn-success {
        background-color: #FB2000 !important;
        border-color: #224121 !important;
        color: #FEE9CA !important;
        border-top-left-radius: 0%;
        border-bottom-left-radius: 0%;
    }

    .form-control {
        border-color: #224121 !important;
        border-top-right-radius: 0%;
        border-bottom-right-radius: 0%;
        height: 100%;
        width: 25rem !important;
    }

    .card {
        width: 95%;
        border-color: #FFFFFF !important;
    }

    .img-fluid {
        border-radius: 12px !important;
    }
</style>

<div class="row justify-content-center mb-5">
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control " type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>

<div class="row justify-content-center mb-3">
    <div class="d-flex card mb-3">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="card-body">
                    <h1 class="card-title">Article Name</h1>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                    <p><a class="link-offset-2 link-underline link-underline-opacity-100" href="#"><u>Read now</u></a>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="https://koran-jakarta.com/images/article/perjalanan-kota-bogor-dulu-hingga-kini-menjadi-penyanggah-ibu-kota-negara-220327193334.jpg"
                    class="img-fluid rounded-start" alt="...">
            </div>
        </div>
    </div>
</div>

@endsection