@extends('layouts.main')

@section('container')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<title>Ticket Detail</title>
<style>
    .gap-1 {
        opacity: 0%;
        height: 30px;
    }

    .jumbotron {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 29em;
        width: 94%;
        background-position: center;
        margin: auto;
        /* background-image: url('https://source.unsplash.com/1600x900/?');
        background-size: cover; */
        /* background-attachment: fixed; */
    }

    .jumbo-img{
        width: 100%;
        height: 29em;
        object-fit: cover;
    }

    .gap-2 {
        opacity: 0%;
        height: 5px;
    }

    .title {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%; 
        text-align: center; 
    }

    .heading-title {
        font-size: 2.4rem;
        text-align: center; 
    }

    .loc-and-type {
        display: flex;
        /* flex-direction: column; */
        margin: auto height: 50%;
        width: 94%;
        margin: auto;
        justify-content: space-between;
        margin-top: 20px;
        align-items: center;
    }

    .fa-map-marker-alt {
        margin-top: 2px;
        font-size: 2em;
    }

    .locaysh {
        margin-top: 1%;
        margin-left: 1.5%;
        text-align: left;
        white-space: nowrap;
        margin-right: auto;
        padding: 0;
    }

    .btn-secondary.disabled {
        background-color: #FEE9CA !important;
        color: #142213 !important;
        border-radius: 40px;
        padding-inline: 1rem;
        font-size: 1.5em;
        opacity: 1;
        margin-top: 1%;
    }

    hr {
        border: 0;
        height: 1px;
        background: #333;
        width: 94%;
        margin: 20px auto;
    }

    .desc {
        display: flex;
        margin: auto;
        height: 30%;
        width: 94%;
        margin-top: 20px;
        margin-bottom: 3%;
        text-align: justify;
    }

    .price-frame {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        height: 6.8em;
        width: 94%;
        margin: auto;
        background-color: rgba(254, 233, 202, 0.35);
        border-radius: 10px;
        margin-bottom: 20px;
        background-size: 1px;
    }

    .pricey {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 8em;
        height: 30%;
    }

    .rp-div {
        display: flex;
        align-items: center;
        justify-content: right;
        margin-right: 0.5%;
        width: 6.5em;
        height: 30%;
        /* border: 1px solid #000;  */
    }

    .val-div {
        display: flex;
        align-items: center;
        justify-content: left;
        width: 9em;
        height: 30%;
        /* border: 1px solid #000;  */
    }

    @media (max-width: 267px) {
        .rp-div {
            justify-content: center;
            height: 30px;
        }

        .price-frame {
            height: 15em;
        }

        .pricey {
            height: 30px;
        }

        .val-div {
            height: 30px;
        }
    }

    /* quantity button */
    .quantity-button {
        display: flex;
        align-items: center;
        justify-content: right;
        width: 18em;
        margin-left: auto;
        margin-right: 3%;
        /* border: 1px solid #000;  */
    }

    .quantity-input {
        margin-left: 3%;
        margin-right: 3%;
        width: 50%;
        text-align: center;
        background-color: rgba(254, 233, 202, 0);
        font-size: 200%;
        border: 0px;
        font-size: 2rem;
    }

    button {
        padding: 5px 10px;
        border: 3px solid black;
        border-radius: 100%;
        background-color: rgba(254, 233, 202, 0);
    }

    .total {
        display: flex;
        justify-content: center; 
        width: 94%;
        margin: auto; 
        margin-top: 3%;
        height: 3.2em;
        align-items: center; 
    }

    .total-price {
        font-size: 2rem;
        margin-top: -5px;
        margin-left: 10%;
    }
    
    .price-title {
        color: #224121;
    }
    
    .button-parent {
        display: flex;
        margin-left: auto;
        background-color: #FB2000;
        align-items: center;
        justify-content: center;
        padding: 10px;
        padding-left: 30px;
        padding-right: 30px;
        border-radius: 10px;
    }
    
    .button-text {
        margin-bottom: 0px;
        font-size: 1.rem;
        color: white;
        justify-content: center;
        text-align: center
    }
</style>

<div class="gap-1">

</div>
<div class="col-md-10 jumbotron jumbotron-fluid">
@if ($ticket->image)
        <img class="jumbo-img" src="{{ asset('storage/' . $ticket->image) }}" 
        alt="{{ $ticket->ticketcategory->name }}">
  @else
  <img src="https://picsum.photos/seed/{{ $ticket->ticketcategory->name }}/1600/900"h-100 class="jumbo-img" alt="...">

@endif
</div>
<div class="gap-2">

</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="title">
                <h1 class="heading-title">{{ $ticket->title }}</h1>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="loc-and-type">
            <i class="fas fa-map-marker-alt"></i>
            <h3 class="col-md-8 locaysh">{{ $ticket->location }}</h3>
            <button class="btn btn-secondary mb-2 disabled flex-button">{{$ticket->ticketcategory->name}}</button>
        </div>
    </div>
</div>

<hr class="col-md-10">

<div class="col-md-10 desc">
    <h4 class="desc-1"> {!! $ticket->description !!} </h4>
</div>

<div class="col-md-10 price-frame">
    <div class="col-md-1 pricey">
        <h3 class="price-tag">Price</h3>
    </div>

    <div class="col-md-1 a"></div>

    <div class="col-md-1 rp-div">
        <h3 class="rp">Rp</h3>
    </div>

    <div class="col-md-1 val-div">
        <h3 class="value"> {{ $ticket->price }}</h3>
    </div>

    <div class="col-md-6 quantity-button">
        <button class="decrease"><i class="fas fa-minus"></i></button>
        <input type="text" class="quantity-input" value="1">
        <button class="increase"><i class="fas fa-plus"></i></button>
    </div>
</div>

<hr class="col-md-10">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 total">
            <h2 class="price-title">Total Price</h2>
            <div class="total-price">
                Rp <span id="total-price">10</span>
            </div>
            <div class="button-parent">
                <h3 class="button-text">Check Out</h3>
            </div>
        </div>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function () {
        const decreaseButton = document.querySelector('.decrease');
        const increaseButton = document.querySelector('.increase');
        const quantityInput = document.querySelector('.quantity-input');
        const totalPriceElement = document.getElementById('total-price');
        const pricePerItem = {{ $ticket->price }}; 

        function updateTotalPrice() {
            const quantity = parseInt(quantityInput.value);
            const totalPrice = quantity * pricePerItem;
            totalPriceElement.textContent = totalPrice.toLocaleString('en-US'); // Format with thousand separator
        }

        decreaseButton.addEventListener('click', function () {
            let currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
                updateTotalPrice();
            }
        });

        increaseButton.addEventListener('click', function () {
            let currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
            updateTotalPrice();
        });

        // Add event listener for input change
        quantityInput.addEventListener('input', updateTotalPrice);

        updateTotalPrice();
    });

</script>
@endsection