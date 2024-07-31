<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        .invoice-details {
            margin-bottom: 20px;
        }
        .invoice-details p {
            margin: 5px 0;
        }
        .invoice-items table {
            width: 100%;
            border-collapse: collapse;
        }
        .invoice-items th, .invoice-items td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .invoice-items th {
            background-color: #f4f4f4;
        }
        .total {
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Invoice #{{ $order->code }}</h1>
        <div class="invoice-details">
            <p><strong>Order Date:</strong> {{ $order->created_at->format('d/m/Y') }}</p>
            <p><strong>Customer Name:</strong> {{$order->name}}</p>
            <p><strong>Customer Email:</strong> {{$order->email}}</p>
            <p><strong>Customer Phone:</strong> {{$order->phone}}</p>
        </div>
        <div class="invoice-items">
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Weight</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->orderdetails as $products)
                        <tr>
                            <td>{{$products->product->name}}</td>
                            <td>{{$products->size}}</td>
                            <td>{{$products->price}} $</td>
                            <td>{{$products->quantity}}</td>
                            <td>{{ $products->price * $products->quantity}} $</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p class="total">Total Amount: {{ $order->total }} $</p>
        </div>
    </div>
</body>
</html>
