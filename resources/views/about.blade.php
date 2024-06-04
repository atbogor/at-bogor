@extends('layouts.main')

@section('container')

<script src="https://kit.fontawesome.com/da976c245b.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
    .jumbotron{
        background-image: url("assets/aboutus-jumbotron-bg.png") !important;
        color: white;
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 0;
        height: 527px;
        margin-bottom: 8%;
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
     
        padding: 5% 3% 5% 3%;
        /* margin: 5%; */
        border-radius: 0px 20px;
        border: 2px solid #224121;
        text-align: center;
    }

    .all h1{
        font-weight: 700;
    }
    .feature p{
        padding: 0;
    }
    .col-fluid{
        width: 100%;
    }

    .faq-img-section{
        position: relative;
        margin-left: 5%;
        /* background-color: cyan; */
        /* width: 50%; */
    }
    .faq-img-1{
        width: 31.250rem;
        height: 31.250rem;
        object-fit: cover;
        border-radius: 0px 20px;
        border: 10px solid #FB2000;
    }

    .faq-img-2{
        width: 19.688rem;
        height: 19.688rem;
        object-fit: cover;
        position: absolute;
        border-radius: 0px 20px;
        border: 10px solid #224121;
        right: 220px;
        bottom: -50px;
    }

</style>

<section class='container-fluid all p-0'>
    <div class="container-fluid jumbotron d-flex align-items-center">
        <div class="col-lg-6 md-auto ml-5">
            <div class="header-jumbotron d-flex align-items-center mb-4">
                <h1>What is</h1>
                <img class="logo-medium" src="/assets/atBogor-logo-medium-white.png" alt="">
                <h1>?</h1>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur. Sit bibendum tristique tellus ullamcorper facilisis commodo ultrices. Non amet pellentesque etiam amet diam consequat. Rhoncus morbi mauris sed amet ut a egestas. Sed et quis ac integer est dignissim.</p>
        </div>
    </div>

    <div class="container-fluid what-we-do d-flex align-items-center g-2 justify-content-center">
        <div class="col-3 ml-5">
            <h1>What we do.</h1>
        </div>
        <div class="features d-flex gap-4 justify-content-center align-items-center w-75">
                <div class="feature d-flex justify-content-center align-items-center flex-column">
                    <img src="/assets/material-symbols_article.svg" alt="">
                    <p>Lorem ipsum dolor.</p>
                </div>
                <div class="feature d-flex justify-content-center align-items-center flex-column">
                    <!-- <div class="feature-content d-flex justify-content-center align-items-center flex-wrap"> -->
                        <img src="/assets/ant-design_picture-filled.svg" alt="">
                        <p>Lorem ipsum dolor.</p>
                    <!-- </div> -->
                </div>
                <div class="feature d-flex justify-content-center align-items-center flex-column">
                <img src="/assets/mingcute_ticket-fill.svg" alt="">
                    <p>Lorem ipsum dolor.</p>
                </div>
        </div>    
    </div>

    <div class="faq d-flex justify-content-center align-items-center">
        <div class="faq-img-section w-50 d-flex align-items-end">
            <img class="faq-img-1" src="https://kebunraya.id/images/about/side-bogor.jpg" alt="">
            <img class="faq-img-2" src="https://cdn.rri.co.id/berita/46/images/1706242358632-k/t59fph47pzwt2hh.jpeg" alt="">
        </div>
        <div class="questions w-50">
            <h1>Frequently Asked Questions</h1>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Accordion Item #1
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Accordion Item #2
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Accordion Item #3
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>

    
    
</div>

</section>
    
@endsection