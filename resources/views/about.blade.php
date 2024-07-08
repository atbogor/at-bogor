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
        right: -30px;
        bottom: -30px;
    }

    .accordion-button{
        padding: 0.5rem;
    }

    .accordion-button:focus{
        box-shadow: none;
        background-color: none;
    }
    .accordion-item {
            position: relative;
            border: none;
            padding-left: 10px;
            margin-bottom: 10px;
            width: 70%;
    }
    .accordion-button:not(.collapsed) {
            color: #FB2000;
            background:none;
        }

    .accordion-item::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 4px;
            background-color: #224121;
            transition: 0.3s ease;
            border-radius: 0 20px;
    }
   
    
    .accordion-item.active::before {
     background-color: #FB2000;
    }

    .what-we-do{
        margin-bottom: 8%;
    }

    .faq{
        margin-bottom: 8%;
        /* background-color: red; */
        /* justify-content: space-between;  */
    }

    .accordion-button::after{
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus' viewBox='0 0 16 16'%3E%3Cpath d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4'/%3E%3C/svg%3E");
    }

    .accordion-button.accordion-button:not(.collapsed)::after{
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23FB2000' class='bi bi-dash' viewBox='0 0 16 16'%3E%3Cpath d='M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8'/%3E%3C/svg%3E");
    }

    .team-img{
        width: 18.75rem;
        height: 25rem;
        flex-shrink: 1;
        border-radius: 0px 20px;
        border: 10px solid #142213;        
        color: white;
    }
    
    #ind1{
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.00) 3.9%, rgba(20, 34, 19, 0.70) 84.4%), url(assets/alex.png) lightgray 50% / cover no-repeat;
    }
    #ind2{
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.00) 3.9%, rgba(20, 34, 19, 0.70) 84.4%), url(assets/catherine.png) lightgray 50% / cover no-repeat;
    }
    #ind3{
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.00) 3.9%, rgba(20, 34, 19, 0.70) 84.4%), url(assets/michaelscu.png) lightgray 50% / cover no-repeat;
    }
    #ind4{
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.00) 3.9%, rgba(20, 34, 19, 0.70) 84.4%), url(assets/valina.png) lightgray 50% / cover no-repeat;
    }
    #ind5{
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.00) 3.9%, rgba(20, 34, 19, 0.70) 84.4%), url(assets/vanechka.png) lightgray 50% / cover no-repeat;
    }

    .team {
        /* background-color: red; */
        justify-content: center; /* Pusatkan grid secara horizontal */
        width: 100%;
        align-items: center;
    }

    .team-img h4{
        font-weight: 300;
    }

    .our-team{
        margin-bottom: 8%;
    }

    .get-in-touch {
    /* height: 500px; Define the height as needed */
    background: linear-gradient(
        rgba(12, 98, 19, 0.738), /* Start with semi-transparent black */
        rgba(34, 65, 33, 1) /* End with semi-transparent black */
    ), url("assets/Kebun_Raya_Bogor_19.jpg"); /* Overlay on top of background image */
    background-size: cover; /* Ensures the image covers the section */
    background-position: center; /* Centers the background image */
    color: white;
    margin-bottom: 0;
}


    .footers{
        margin-top: 0 !important;
    }

    .item{
        text-align: center;
        width: 14.375rem;
        color: white;
    }

    .item h2{
        margin-bottom: 10px;
        font-weight: 700;
    }

    .item h5{
        font-weight: 100;
    }

    .item h4{
        font-weight: 500;
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

    <div class="faq d-flex justify-content-between align-items-start gap-5">
        <div class="faq-img-section d-flex align-items-end">
            <img class="faq-img-1" src="https://kebunraya.id/images/about/side-bogor.jpg" alt="">
            <img class="faq-img-2" src="https://cdn.rri.co.id/berita/46/images/1706242358632-k/t59fph47pzwt2hh.jpeg" alt="">
        </div>
        <div class="questions w-50">
            <h1>Frequently Asked Questions</h1>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Lorem ipsum dolor sit amet consectetur? #1
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur. Elit sit sit tellus rutrum quam sagittis. Nisi pellentesque nibh arcu quam risus commodo.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Lorem ipsum dolor sit amet consectetur? #2
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur. Elit sit sit tellus rutrum quam sagittis. Nisi pellentesque nibh arcu quam risus commodo.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Lorem ipsum dolor sit amet consectetur? #3
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur. Elit sit sit tellus rutrum quam sagittis. Nisi pellentesque nibh arcu quam risus commodo.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Lorem ipsum dolor sit amet consectetur? #4
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur. Elit sit sit tellus rutrum quam sagittis. Nisi pellentesque nibh arcu quam risus commodo.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            Lorem ipsum dolor sit amet consectetur? #5
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur. Elit sit sit tellus rutrum quam sagittis. Nisi pellentesque nibh arcu quam risus commodo.</div>
                    </div>
                </div>
            </div>   
        </div>
    </div>

    <div class="container-fluid our-team d-flex  g-2 flex-column">
         <div class="col-3 ml-5 w-100 mb-4">
            <h1>Our team.</h1>
        </div>
        <div class="team justify-content-center w-100 align-items-center gap-2">
            <div class="top d-flex justify-content-center">
                <div class="team-img d-flex justify-content-end align-items-start flex-column p-2 m-4" id="ind1">
                    <h6>Lorem ipsum</h6>
                    <h4>Alexander Immanuel Samosir</h4>
                </div>
                <div class="team-img d-flex justify-content-end align-items-start flex-column p-2 m-4" id="ind2">
                    <h6>Lorem ipsum</h6>
                    <h4>Catherine Olivia Winanda</h4>
                </div>
                <div class="team-img d-flex justify-content-end align-items-start flex-column p-2 m-4" id="ind3">
                    <h6>Lorem ipsum</h6>
                    <h4>Michael Scuderia Tanudjaja</h4>
                </div>
            </div>
            <div class="bottom d-flex justify-content-center">
                <div class="team-img d-flex justify-content-end align-items-start flex-column p-2 m-4" id="ind4">
                    <h6>Lorem ipsum</h6>
                    <h4>Valina Evelyn Pranoto</h4>
                </div>
                <div class="team-img d-flex justify-content-end align-items-start flex-column p-2 m-4" id="ind5">
                    <h6>Lorem ipsum</h6>
                    <h4>Vanechka Radja Winata</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="get-in-touch d-flex align-items-center flex-column">
        <div class="col-3 ml-5 w-100 mb-4 d-flex justify-content-center m-0 pt-5">
            <h1>Get in touch</h1>
        </div>
        <div class="items d-flex justify-content-center gap-5 mb-5">
            <div class="item address">
                <img src="/assets/mdi_address-marker.svg" alt="">
                <h2>Address</h2>
                <h5>Lorem ipsum dolor sit amet consectetur. Ipsum donec id diam malesuada.</h5>
                </div>
            <div class="item phone">
                <img src="assets/solar_phone-bold.svg" alt="">
                <h2>Phone</h2>
                <div class="cat">
                    <h4>lorem ipsum</h4>
                    <h5>021-2234-4950</h5>
                </div>
            </div>
            <div class="item email">
                <img src="/assets/ic_round-email.svg" alt="">
                <h2>Email</h2>
                <div class="cat">
                    <h4>lorem ipsum</h4>
                    <h5>atBogor@gmail.com</h5>
                </div>
            </div>
        </div>
    </div>
        
        
        
        
        
    
    
</section>
    <script>
        let lines = document.querySelectorAll('.accordion-item');

        lines.forEach(line => {
            line.addEventListener('click', (e) => {
                if (line.classList.contains('active')) {
                    line.classList.remove("active")
                    return;
                }

                lines.forEach(item => {
                    item.classList.remove('active')
                });
                
                line.classList.add('active')
            })
        });
    </script>
@endsection