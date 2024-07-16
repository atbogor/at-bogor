@extends('layouts.main')
<link rel="stylesheet" href="/css/checkout.css">
@section('title', 'checkout')

@section('container')
<div class="p-4">
    <h2>Back</h2>
    <h1>Checkout</h1>
    <div class="row center" id="checkout-row">
        <div class="col-6">
            
                <div class="card border-3">
                    <div class="card-body text-left d-flex flex-column ">
                        <div class="row my-2">
                            <div class="col-2 gap-1">
                                <p class="text-bold m-0"><b>Name</b></p>
                                <p class="text-bold m-0"><b>Email</b></p>
                                <p class="text-bold m-0"><b>Phone Number</b></p>
                            </div>
                            <div class="col-10 gap-1">
                                <p class="m-0">: {{$transaction->buyer_name}}</p>
                                <p class="m-0">: {{$transaction->email}}</p>
                                <p class="m-0">: {{$transaction->phone}}</p>
                            </div>
                        </div>
                        <hr class="my-2 border-3 custom-color">
                        <h4 class="my-2"><b>Purchase Summary</b></h4>
                        
                        <!-- TITLE, TANGGAL(masi jelek formatnya), HARGA BELOM MASUK -->
                        <div class="ticket_detail my-2">
                            <div class="div d-flex justify-content-between">
                                <div class="div ticket_detail_container">
                                    
                                    <p class="m-0">{{$detail->title}}</p>
                                    <p class="m-0" id="Tanggal">{{$detail->ticket_date}}</p>
                                    <p class="m-0" id="Harga">IDR {{$detail->price}}</p>
                                </div>
                                <div class="d-flex flex-column justify-content-end">
                                    <h6 class="m-0 align-bottom text-right"><b>Quantity : {{$transaction->quantity}}</b></h6>
                                </div>
                                
                            </div>

                        </div>
                        
                        <hr class="my-2 border-3 custom-color">
                        
                        <div class="my-2 d-flex justify-content-between">
                            <p class="m-0">Subtotal</p>
                            <p class="m-0 text-right">IDR {{$detail->price}}</p>
                        </div>
                        
                        <hr class="my-2 border-3 custom-color">
                        
                        <div class="my-2 d-flex justify-content-between">
                            <h4 class="m-0"><b>Total</b></h4>
                            <h4 class="text-right m-0"><b>IDR {{ $detail->price * $transaction->quantity }}</b></h4>
                        </div>
                        <div class="d-flex justify-content-end button_container">
                            <button type="button p-0" class="btn" id="pay-button">
                                Pay
                            </button>
                        </div>
                    </div>
                </div>
            
        </div>
        <div class="col-3 snap-container" id="snap-container">
            <!-- Snap container for payment method pop up -->
        </div>
    </div>
</div>
@endsection

@section('script')



<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-KrytpI0OPRLGzIfw"></script>
    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token.
      // Also, use the embedId that you defined in the div above, here.
        var checkoutRow = document.getElementById('checkout-row');
        checkoutRow.classList.add('shift-right');

        // Display the snap-container
        var snapContainer = document.getElementById('snap-container');
        snapContainer.style.display = 'block';

        window.snap.embed('{{$transaction->snap_token}}', {
        embedId: 'snap-container',
        onSuccess: function(result) {
                    sendTransactionStatus(result, 'success', function() {
                        // Redirect to another page after data is successfully sent
                        window.location.href = '/';  // Gantilah URL ini dengan halaman tujuan Anda
                    });
                },
                // Optional
        onPending: function(result) {
                    sendTransactionStatus('pending', result);
                },
                // Optional
        onError: function(result) {
                    sendTransactionStatus('error', result);
                }
      });
    });

    function sendTransactionStatus(status, result) {
        fetch('/update-transaction-status', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                status_code: status,
                order_id: result.order_id
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log('Success:', data);
            if (callback) callback();
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }

    </script>
    
    

@endsection

