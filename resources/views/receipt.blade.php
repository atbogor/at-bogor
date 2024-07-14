<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Booking Receipt</title>
</head>

<style>
    *, *::before, *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box; 
    }

    body {
        margin: 0;
        font-family: 'SF Pro Text';
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
        padding-top: 10px;
        padding-bottom: 14px;
    }

    .title {
        font-weight: bold;
    }

    .identity {
        padding-left: 1em; 
    }

    .table {
        border: 2.2px solid #000000; 
        border-radius: 9px 9px 9px 9px; 
        height: 500px; 
    }

    .table-header {
        background-color: #C7D2C7;
        border-bottom: 2.2px solid #000000; 
        border-radius: 6px 6px 0 0; 
        height: 80px;
        display: flex;
        flex: 1; 
        padding: 0; 
        text-align: left;
    }

    .table-header h5 {
        margin-bottom: 0; 
    }

    .header-text{
        display: flex;
        flex: 1; 
        padding: 0; 
        text-align: left;
        padding-left: 1em;
        padding-right: 1em;
    }

    .child-text{
        display: flex;
        flex: 1; 
        padding: 0; 
        text-align: left;
        padding-left: 1em;
        padding-right: 1em;
        height: 180px;
    }

    .divider-container{
        padding-left: 1em;
        padding-right: 1em;
    }

    .divider{
        justify-content: center;
        border: none; 
        border-top: 2px dashed #000000; 
        margin: 20px 0; 
    }

    .divider-2-container{
        padding-left: 1em;
        padding-right: 1em;
        margin: 0;
    }
    
    .divider-2{
        justify-content: center;
        border: none; 
        margin: 0;
        margin-bottom: 6px;
        border-top: 2px groove #000000; 
    }

    .price-fill{
        align-content: flex-end;
        align-items: flex-end;
        align-self: flex-end;
    }

    .logo{
        margin-top: -20px;
    }

    .payment{
        color: 224121;
        opacity: 69%;
    }
</style>

<body>
    <div class="header row justify-content-center">
        <div class="col-md-5 mt-4 p-0">
            <div class="title">
                <h3 class="font-weight-bold">Ticket Invoice</h3>
            </div>
            <div class="order">
                <h4 class="font-weight-bold">Order ID #123456</h4> {{-- connect database --}}
            </div>
        </div>

        <div class="col-md-2 mt-4 d-flex justify-content-center align-items-center">
            <img class="logo align-items-center" src="/assets/atBogor-logo-black.png" alt="">
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="identity-box col-md-7 mt-4 d-flex">
            <div class="identity col-md-3">
                <div class="name p-2 d-flex align-items-center">
                    <h5 class="mb-0">Name</h5>
                </div>
                <div class="email p-2 d-flex align-items-center">
                    <h5 class="mb-0">Email Address</h5>
                </div>
                <div class="phone p-2 d-flex align-items-center">
                    <h5 class="mb-0">Phone Number</h5>
                </div>                
            </div>

            <div class="identity-fill col-md-4">
                <div class="name-fill p-2 d-flex align-items-center">
                    <h5 class="mb-0">: Name</h5> {{-- connect database --}}
                </div> 
                <div class="email-fill p-2 d-flex align-items-center">
                    <h5 class="mb-0">: Email Address</h5> {{-- connect database --}}
                </div>
                <div class="phone-fill p-2 d-flex align-items-center">
                    <h5 class="mb-0">: Phone Number</h5> {{-- connect database --}}
                </div>                
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-7 mt-4 p-0">
            <div class="title">
                <h4>Payment Detail</h4>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="table col-md-7 mt-4 p-0">
            <div class="table-header d-flex p-0">
                <div class="header-text">
                    <div class="col-md-1 p-2 d-flex align-items-center ">
                        <h5 class="mb-0 text-left font-weight-bold">No.</h5>
                    </div>
                    <div class="col-md-3 p-2 d-flex align-items-center ">
                        <h5 class="mb-0 text-left font-weight-bold">Destination</h5>
                    </div>
                    <div class="col-md-4 p-2 d-flex align-items-center ">
                        <h5 class="mb-0 text-left font-weight-bold">Description</h5>
                    </div> 
                    <div class="col-md-2 p-2 d-flex align-items-center ">
                        <h5 class="mb-0 text-left font-weight-bold">Quantity</h5>
                    </div>
                    <div class="col-md-2 p-2 d-flex align-items-center justify-content-end">
                        <h5 class="mb-0 text-right font-weight-bold">Total</h5>
                    </div>                
                </div>
            </div>

            <div class="table-fill d-flex p-0">
                <div class="child-text">
                    <div class="col-md-1 p-2 d-flex">
                        <p class="mb-0 text-left">1.</p>
                    </div>
                    <div class="col-md-3 p-2 d-flex">
                        <p class="mb-0 pr-2 text-left">Taman Safari Ticket</p>
                    </div>
                    <div class="col-md-4 p-2 d-flex">
                        <p class="mb-0 pr-2 text-left">
                            Lorem ipsum dolor sit amet consectetur. Sed feugiat at sed eget tellus egestas vulputate. Vehicula turpis sit eget diam vulputate commodo ipsum ornare et. 
                        </p>
                    </div> 
                    <div class="col-md-2 p-2 d-flex">
                        <p class="mb-0 text-left">1</p>
                    </div>
                    <div class="col-md-2 p-2 d-flex justify-content-end">
                        <p class="mb-0 text-right">IDR 70.000</p>
                    </div>                
                </div>
            </div>

            <div class="divider-container mt-4">
                <hr class="divider">
            </div>

            <div class="row justify-content-end pr-3">
                <div class="price col-md-1">
                    <div class="subtotal p-1 d-flex align-items-center">
                        <p class="mb-0 text-left font-weight-bold">Subtotal</p>
                    </div>
                    <div class="discount p-1 d-flex align-items-center">
                        <p class="mb-0 text-left font-weight-bold">Disc</p>
                    </div>
                    <div class="service p-1 d-flex align-items-center">
                        <p class="mb-0 text-left font-weight-bold">Services</p>
                    </div>                
                </div>
        
                <div class="price-fill col-md-3 justify-content-end">
                    <div class="subtotal-fill p-1 d-flex align-items-center justify-content-end">
                        <p class="mb-0">IDR 70.000</p> {{-- connect database --}}
                    </div> 
                    <div class="discount-fill p-1 d-flex align-items-center justify-content-end">
                        <p class="mb-0">-0</p> {{-- connect database --}}
                    </div>
                    <div class="service-fill p-1 d-flex align-items-center justify-content-end">
                        <p class="mb-0">IDR 5.000</p> {{-- connect database --}}
                    </div>                
                </div>
            </div> 
            
            <div class="divider-2-container mt-4">
                <hr class="divider-2">
            </div>

            <div class="row justify-content-end pr-3">
                <div class="total col-md-1">
                    <div class="subtotal p-1 d-flex align-items-center">
                        <p class="mb-0 text-left font-weight-bold">Total</p>
                    </div>              
                </div>
        
                <div class="total-fill col-md-3 justify-content-end">
                    <div class="subtotal-fill p-1 d-flex align-items-center justify-content-end">
                        <p class="mb-0">IDR 75.000</p> {{-- connect database --}}
                    </div>              
                </div>
            </div> 

            <div class="row justify-content-end pr-3">
                <div class="payment-method col-md-7 justify-content-end">
                    <div class="payment p-1 d-flex align-items-center justify-content-end">
                        <p class="payment mb-0 small">Wed, 28 March 2025 - Virtual Account BCA</p> {{-- connect database --}}
                    </div>              
                </div>
            </div> 
            
        </div>
    </div>
</body>
</html>
