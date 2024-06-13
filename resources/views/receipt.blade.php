<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Invoice</title>
    <style>
        body {
            font-family: sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin-bottom: 20px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
        }

        .order-id {
            font-size: 16px;
            color: #666;
        }

        .info {
            width: 50%;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .info table {
            width: 100%;
            border-collapse: collapse;
        }

        .info th, .info td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc;
        }

        .completed {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100px;
            height: 100px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .completed.icon {
            font-size: 32px;
            color: #33cc33;
        }

        .completed.text {
            font-size: 12px;
            color: #666;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc;
        }

        .table th {
            background-color: #eee;
            font-weight: bold;
        }

        .table.total {
            font-weight: bold;
        }

        .summary {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 20px;
        }

        .summary.label {
            font-weight: bold;
        }

        .summary.value {
            font-size: 16px;
            font-weight: bold;
        }

        .footer {
            font-size: 12px;
            color: #666;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2 class="title">Ticket Invoice</h2>
            <p class="order-id">Order ID #1213336</p>
        </div>
        <div class="info">
            <table>
                <tr>
                    <th>Label</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td>Name</td>
                </tr>
                <tr>
                    <td>Email Address:</td>
                    <td>Email Address</td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td>Phone Number</td>
                </tr>
            </table>
        </div>
        <div class="completed">
            <i class="icon fa fa-check-circle"></i>
            <p class="text">Completed</p>
        </div>
        <table class="table">
            <tr>
                <th>No.</th>
                <th>Product</th>
                <th>Description</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Taman Safari Ticket</td>
                <td>Lorem ipsum dolor sit amet consectetur. Sed feugiat at sed eget tellus egestas vulputate. Vehicula turpis sit eget diam vulputate commodo ipsum ornare et.</td>
                <td>1</td>
                <td>IDR 70.000</td>
            </tr>
        </table>
        <div class="summary">
            <p class="label">Subtotal:</p>
            <p class="value">IDR 70.000</p>
            <p class="label">Discount:</p>
            <p class="value">-IDR 70.000</p>
            <p class="label">Services:</p>
            <p class="value">IDR 5.000</p>
            <p class="label">Total:</p>
            <p class="value">IDR 75.000</p>
        </div>
        <p class="footer">Wed, 28 March 2025 - Virtual Account BCA</p>
    </div>

    <script src="script.js"></script>
</body>
</html>