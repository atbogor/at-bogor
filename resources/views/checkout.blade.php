@extends('layouts.main')
@section('title', 'checkout')

@section('container')
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                Anda akan melakukan pembelian produk dengan harga
                <strong>{{$transaction->quantity }}</strong>
                <button type="button" class="btn btn-primary mt-3" id="pay-button">
                    Bayar Sekarang
                </button>
            </div>

            <div>
                <button onclick="checkStatus('{{$transaction->order_id}}')">Check Transaction Status</button>
                <pre id="status-result"></pre>
            </div>
        </div>
    </div>

    <div id="snap-container"></div>

@endsection

@section('script')



<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-KrytpI0OPRLGzIfw"></script>
    <script type="text/javascript">
    function checkStatus(order_id) {
            fetch(`/transactions/${order_id}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    document.getElementById('status-result').textContent = JSON.stringify(data, null, 2);
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('status-result').textContent = 'Failed to fetch transaction status';
                });
        }
        // document.getElementById('pay-button').onclick = function() {
        //     // SnapToken acquired from previous step
        //     snap.pay('{{$transaction->snap_token}}', {
        //         // Optional
                // onSuccess: function(result) {
                //     /* You may add your own js here, this is just example */
                //     document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                // },
                // // Optional
                // onPending: function(result) {
                //     /* You may add your own js here, this is just example */
                //     document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                // },
                // // Optional
                // onError: function(result) {
                //     /* You may add your own js here, this is just example */
                //     document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                // }
        //     });
        // };

        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token.
      // Also, use the embedId that you defined in the div above, here.
        window.snap.embed('{{$transaction->snap_token}}', {
        embedId: 'snap-container',
        onSuccess: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                },
                // Optional
        onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                // Optional
        onError: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                }
      });
    });

    </script>
    
    

@endsection

