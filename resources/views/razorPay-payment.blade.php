<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>RazorPay Payment</title>
    <style>
        input.razorpay-payment-button {
            padding: 0.3rem 1rem;
            border: none;
            background: #007bff;
            color: white;
            border-radius: 5px;
        }
    </style>

    <link rel="icon" href="{{ asset('./images/24Ocean.png') }}">
</head>
<body class="bg-light">
<div class="container">
    <div class="py-5 text-center">
        <img class="mb-4 d-block " src="{{ asset('/images/24Ocean.png') }}" width="120" height="130">
    </div>
    <h2>Make Payment</h2>
</div>

<div class=" container mb-4 p-3 mx-auto">

    <h4 class="mb-3">Razor Pay Payment</h4>
    <div class="row g-2"><!--gutters are magic, spaces between the two input boxes-->
        <div class="col-12">
            <h4>Payment Amount: {{ price($order->price_amount) }}</h4>
            <form action="{{ route('payment.verify') }}" method="POST">
                @csrf
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="{{ config('app.razor_pay_key_id') }}"
                    data-amount="{{ $orderData['amount'] }}"
                    data-currency="{{ $orderData['currency'] }}"
                    data-name="{{ $address['fName']. ' '. $address['lName'] }}"
                    data-image="{{ asset('./images/24Ocean.png') }}"
                    data-description="Ecommerce Payment"
                    data-notes.shopping_order_id="{{ $order['id'] }}"
                    data-order_id="{{ $razorpayOrder['id'] }}"
                >
                </script>
                <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
                <input type="hidden" name="shopping_order_id" value="3456">
            </form>
        </div>
        <hr class="my-4"><!--horizontal rule-->

    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
