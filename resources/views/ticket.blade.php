@extends('layouts.main')

@section('container')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<title>Ticket Detail</title>
<style>
    .gap-1{
        opacity: 0%;
        height: 30px;
    }

    .jumbotron {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 471px;
        width: 94%;
        background-position: center; 
        margin: auto;
        background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Naruhito_and_Masako_visit_Bogor_Palace_55.jpg/392px-Naruhito_and_Masako_visit_Bogor_Palace_55.jpg');
        background-size: cover; 
        /* background-attachment: fixed; */
    }

    .title{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .gap-2{
        opacity: 0%;
        height: 5px;
    }

    .heading-title{
        display: flex;
        font-size: 46px;
        text-align: center;
    }

    .loc-and-type{
        display: flex;
        /* margin: auto */
        height: 50%;
        width: 94%;
        margin: auto;
        justify-content: space-between;
        margin-top: 20px;
    }

    .fa-map-marker-alt {
        margin-top: 2px;
        font-size: 2em; 
    }
    
    .locaysh{
        margin-left: 19px;
    }

    hr{
        border: 0;
        height: 1px; 
        background: #333; 
        width: 94%;
        margin: 20px auto; 
    }

    .desc{
        display: flex;
        margin: auto;
        height: 30%;
        width: 94%;
        margin-top: 20px;
        margin-bottom: 5%;
        text-align: justify;
    }

    .type-parent{
        display: flex;
        margin-left: auto;
        background-color: #FEE9CA; 
        padding: 10px;
        padding-left: 30px;
        padding-right: 30px;
        border-radius: 10px; 
        margin-top: -10px;
        margin-bottom: 10px;
        height: 50px;
        /* overflow: hidden; */
    }

    .price-frame {
        display: flex;
        height: 147px;
        width: 94%;
        margin: auto;
        background-color: rgba(254, 233, 202, 0.35); 
        border-radius: 10px; 
        margin-bottom: 90px;
        background-size: 1px;
        justify-content: middle;
    }

    .divider-2{
        border: 0;
        height: 1px; 
        background: #000000; 
        width: 100%;
        margin: 1px auto; 
    }

    .pricey{
        display: flex;
    }

    .price-tag{
        margin-left: 30%;
        margin-top: 23%;
        color: #142213;
        /* font-size: 100%; */
    }

    .desc-1{
        margin-bottom: 20px;
    }

    .value{
        margin-left: 60%;
        margin-top: 23%;
        white-space: nowrap;
    }

    /* quantity button */
    .quantity-button {
        display: flex;
        align-items: center;
        width: 160px;
        margin-left: auto;
        margin-right: 3%;
    }

    .quantity-input {
        margin-left: 20px;
        margin-right: 20px;
        width: 40px;
        text-align: center;
        background-color: rgba(254, 233, 202, 0);
        font-size: 200%;
        border: 0px; 
    }

    button{
        /* cursor: pointer; */
        padding: 5px 10px;
        border: 3px solid black; 
        border-radius: 100%;
        background-color: rgba(254, 233, 202, 0);
    }

    .total{
        display: flex;
        width: 94%;
        margin: auto;
        margin-top: 3%;
        height: 3.2em;
        /* background-color: black; */
    }

    .total-price {
        font-size: 40px;
        margin-top: -5px;
        margin-left: 10%;
    }

    .price-title{
        color: #224121;
    }

    .button-parent{
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

    .button-text{
        margin-bottom: 0px;
        color: white
    }
</style>

<div class="gap-1">
    
</div>
<div class="jumbotron jumbotron-fluid">
    
</div>
<div class="gap-2">
    
</div>
<div class="title">
    <h1 class="heading-title">{{ $ticket->title }}</h1>
</div>

<div class="loc-and-type">
    <i class="fas fa-map-marker-alt"></i>
    <h3 class="locaysh">{{ $ticket->location }}</h3>
    <div class="type-parent">
        <h3 class="type">{{ $ticket->ticketcategory->name }}</h3>
    </div>
</div>

<hr>

<div class="desc">
    <h3 class="desc-1"> {{ $ticket->description }} </h3>
</div>

<div class="price-frame">
    <div class="pricey">
        <h2 class="price-tag">Price</h2>
        <h2 class="value"> {{ $ticket->price }}</h2>
    </div>
    
    <div class="quantity-button">
        <button class="decrease"><i class="fas fa-minus"></i></button>
        <input type="text" class="quantity-input" value="1">
        <button class="increase"><i class="fas fa-plus"></i></button>
    </div>
</div>

<hr class="divider-2">

<div class="total">
    <h1 class="price-title">Total Price</h1>
    <div class="total-price">
         Rp <span id="total-price">10</span>
    </div>
    <div class="button-parent">
        <h3 class="button-text">Check Out</h3>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const decreaseButton = document.querySelector('.decrease');
        const increaseButton = document.querySelector('.increase');
        const quantityInput = document.querySelector('.quantity-input');
        const totalPriceElement = document.getElementById('total-price');
        const pricePerItem = 100000; 

        function updateTotalPrice() {
            const quantity = parseInt(quantityInput.value);
            const totalPrice = quantity * pricePerItem;
            totalPriceElement.textContent = totalPrice.toLocaleString('en-US'); // Format with thousand separator
        }

        decreaseButton.addEventListener('click', function() {
            let currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
                updateTotalPrice();
            }
        });

        increaseButton.addEventListener('click', function() {
            let currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
            updateTotalPrice();
        });

        updateTotalPrice();
    });
</script>
@endsection
