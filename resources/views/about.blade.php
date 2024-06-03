@extends('layouts.main')

@section('container')
<script src="https://kit.fontawesome.com/da976c245b.js" crossorigin="anonymous"></script>
<style>
    .jumbotron{
        background-image: url("assets/aboutus-jumbotron-bg.png") !important;
        color: white;
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 0;
        height: 527px;
    }

    .header-jumbotron h1{
        margin: 0;
        margin-right: 1rem;
        font-weight;: 700 !important
    }

    .header-jumbotron img {
        max-width: 100%;
        height: auto;
    }

    .col-fluid p{
        margin: 0;
        width: 200%;
    }

    /* Media query for responsiveness */
    @media (max-width: 768px) {
        .header-jumbotron img {
            width: 50%; /* adjust this value as needed */
        }
    }

    @media (max-width: 576px) {
        .header-jumbotron img {
            width: 40%; /* adjust this value as needed */
        }
    }

    @media (max-width: 348px) {
        .header-jumbotron img {
            width: 50%; /* adjust this value as needed */
        }
        .header-jumbotron h1{
            font-size: 100% !important;
        }
    }

    .feature{
        background-color: #FEE9CA ;
        flex-wrap: wrap;
        padding: 5%;
        margin: 5%;
        border-radius: 0px 20px;
        border: 2px solid #224121;
    }

    .col-fluid{
        width: 100%;
    }
</style>

<section class='container-fluid p-0'>
    <div class="container-fluid jumbotron p-5 d-flex align-items-center">
        <div class="col-lg-6 md-auto">
            <div class="header-jumbotron d-flex align-items-center mb-4">
                <h1>What is</h1>
                <img class="logo-medium" src="/assets/atBogor-logo-medium-white.png" alt="">
                <h1>?</h1>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur. Sit bibendum tristique tellus ullamcorper facilisis commodo ultrices. Non amet pellentesque etiam amet diam consequat. Rhoncus morbi mauris sed amet ut a egestas. Sed et quis ac integer est dignissim.</p>
        </div>
    </div>

    <div class="container-fluid what-we-do p-5 d-flex align-items-center">
        <div class="col lg-6 md-auto ">
            <h1>What we do.</h1>
        </div>
        <div class="col lg-6 d-flex">
                <div class="col feature d-flex justify-content-center align-items-center">
                    <img src="/assets/material-symbols_article.svg" alt="">
                    <p>Lorem ipsum dolor.</p>
                </div>
                <div class="col feature ">
                <img src="/assets/ant-design_picture-filled.svg" alt="">
                    <p>Lorem ipsum dolor.</p>
                </div>
                <div class="col feature d-flex justify-content-center align-items-center">
                <img src="/assets/mingcute_ticket-fill.svg" alt="">
                    <p>Lorem ipsum dolor.</p>
                </div>
        </div>    
    </div>
</section>
    
@endsection