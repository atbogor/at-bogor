<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Booking Receipt</title>
    <style>
        @media print {
            @page {
                size: auto;
            }
        }

        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'SF Pro Text', Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding-top: 50px;
        }

        .content-container {
            padding-top: 20px;
        }

        .order {
            color: #FB2000;
        }

        .identity-box {
            border: 1.7px solid #000000;
            border-radius: 0 9px 0 9px;
            padding: 10px 20px 14px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 700px;
            margin-top: 20px;
        }

        .title {
            font-weight: bold;
        }

        .identity {
            padding-left: 1em;
        }

        .table {
            border: 2.2px solid #000000;
            border-radius: 9px;
            width: 100%;
            max-width: 700px;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .table-header {
            background-color: #C7D2C7;
            border-bottom: 2.2px solid #000000;
            border-radius: 6px 6px 0 0;
        }

        .table th, .table td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
        }

        .table th {
            font-weight: bold;
        }

        .divider-2 {
            border: none;
            border-top: 2px groove #000000;
            margin: 0;
            margin-bottom: 6px;
        }

        .logo {
            width: 150px;
        }

        .payment {
            color: #E01515;
            opacity: 69%;
        }

        .status img {
            width: 7rem;
        }

        .btn {
            text-decoration: none;
            color: black;
            border: 1px solid black;
            padding: 5px 10px;
            display: inline-block;
            margin-top: 20px;
            margin-left: 20px;
        }

        .btn:hover {
            background-color: #f0f0f0;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 700px;
        }

        .header .col-md-5 {
            display: flex;
            flex-direction: column;
        }

        .header .col-md-5 h3, .header .col-md-5 h4 {
            margin: 10px 0;
        }

        .identity-box .buyer-info {
            display: flex;
            justify-content: space-between;
            width: 70%;
        }

        .identity-box .status {
            width: 30%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .payment-method p {
            margin-bottom: 0;
        }

        .pdf {
            margin-top: 20px;
        }

        .pdf a {
            margin-right: 10px;
            text-decoration: none;
            color: blue;
        }

        .pdf a:hover {
            text-decoration: underline;
        }

        .row {
            width: 100%;
            max-width: 700px;
            margin-top: 20px;
        }

        .row p {
            margin-bottom: 0;
        }

        .total-row {
            display: flex;
            justify-content: flex-end;
            padding-right: 20px;
        }

        .total-row div {
            margin-left: 20px;
        }

        .text-right {
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="row">
        <a class="btn" href="/mybookings"><i class="fa-solid fa-angle-left"></i> Back</a>
    </div>
    <div class="receipt">
        <div class="header row">
            <div class="col-md-5">
                <div class="title">
                    <h3>Ticket Invoice</h3>
                </div>
                <div class="order">
                    <h4>Order ID #{{$receipt->transId}}</h4> {{-- connect database --}}
                </div>
            </div>
            <div class="col-md-2">
                <img class="logo" src="/assets/atBogor-logo-black.png" alt="">
            </div>
        </div>

        <div class="identity-box">
            <div class="buyer-info">
                <div class="identity">
                    <div class="name p-2">
                        <p>Name</p>
                    </div>
                    <div class="email p-2">
                        <p>Email Address</p>
                    </div>
                    <div class="phone p-2">
                        <p>Phone Number</p>
                    </div>                
                </div>
                <div class="identity-fill">
                    <div class="name-fill p-2">
                        <p>: {{$receipt->buyer_name}}</p> {{-- connect database --}}
                    </div> 
                    <div class="email-fill p-2">
                        <p>: {{$receipt->email}}</p> {{-- connect database --}}
                    </div>
                    <div class="phone-fill p-2">
                        <p>: {{$receipt->phone}}</p> {{-- connect database --}}
                    </div>                
                </div>
            </div>
            <div class="status">
                @if($receipt->status == '0')
                    <img src="/assets/pending.svg" alt="Pending">
                @elseif($receipt->status == '1')
                    <img src="/assets/completed.svg" alt="Completed">
                @elseif($receipt->status == 'cancelled')
                    <img src="/assets/cancelled.svg" alt="Cancelled">
                @else
                    <p>Status not recognized</p>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="title">
                <h4>Payment Detail</h4>
            </div>
        </div>

        <table class="table">
            <thead class="table-header">
                <tr>
                    <th>Destination</th>
                    <th></th>
                    <th>Quantity</th>
                    <th class="text-right">Price</th>
                </tr>
            </thead>
            <tbody class="table-fill">
                <tr>
                    <td>{{$receipt->title}}</td>
                    <td></td>
                    <td>{{$receipt->quantity}}</td>
                    <td class="text-right">{{number_format($receipt->price, 0, ',', '.')}}</td>
                </tr>
            </tbody>
        </table>

        <hr class="divider-2">

        <div class="total-row">
            <div class="subtotal">
                <p class="font-weight-bold">Total</p>
            </div>
            <div class="total-fill">
                <p class="text-right">{{number_format($receipt->price * $receipt->quantity, 0, ',', '.')}}</p> {{-- connect database --}}
            </div>
        </div> 

        <div class="total-row">
            <div class="payment-method">
                <p class="payment">{{\Carbon\Carbon::parse($receipt->transDate)->format('D, d F Y')}} - Virtual Account BCA</p> {{-- connect database --}}
            </div>
        </div>

        <div class="row pdf">
            <a href="{{route("browserpdf", $receipt->transId)}}">Show PDF</a>
            <a href="{{route("downloadpdf", $receipt->transId)}}">Download PDF</a>
        </div>
    </div>
</body>
</html>
