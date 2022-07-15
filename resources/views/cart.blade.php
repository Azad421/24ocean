@extends('layouts.main')
@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@300&display=swap" rel="stylesheet">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset("assets/css/policies.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/cartfunct.css")}}">
@endsection
@section('content')
    <section class="about" id="about">


        <div class="container-fluid">
            <div class="row">
                <div class="col-md col-11 mx-auto">
                    <div class="row mt-5 gx-3">
                        <!----left side div---->

                        <div class="col-md-12 col-lg-8 col-11 mx-auto main-cart mb-lg-0 mb-5 shadow bg-white product_img">
                            <h2 class="py-4 px-5 font-weight-bold">Cart ({{ count(Cart::getContent()) }}) </h2>
                            @if(\Cart::isEmpty())
                                <h2 class="py-4 px-5 font-weight-bold">Your Cart is Empty</h2>
                            @endif
                            @foreach(Cart::getContent()->toArray() as $item)
                            <div class="card p-5" class="danger-btn">
                                <div class="row">
                                    <!--cart images div-->
                                    <div class="col-md-5 col-11 bg-light d-flex justify-content-center align-items-center shadow product_img">
                                        <img src="{{ 'images/'.$item['attributes']['image'] }}" class="img-fluid" alt="cart img">
                                    </div>
                                    <!--cart product details-->
                                    <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                                        <div class="row">
                                            <div class="col-6 card-title">
                                                <h2 class="mb-4 product-name">{{ $item['name'] }}</h2>
                                                <p class="mb-2">SHIRT - BLUE</p>
                                                <p class="mb-2">COLOR - BLUE</p>
                                                <p class="mb-3">SIZE - M</p>
                                                <p class="mb-2">PRICE: {{ price($item['price']) }} X {{$item['quantity']}}</p>
                                            </div>
                                            <!--QUANTITY INC DEC-->
                                            <div class="col-6">
                                                <ul class="pagination justify-content-end set_quantity" available="({{ $item['attributes']['stock'] }} Items Available)">
                                                    <li class="page-item">
                                                        <form method="post" action="{{ route('cart.update.min',$item['id'] ) }}">
                                                            @csrf
                                                            <input type="hidden" value="1" name="quantity">
                                                            <input type="hidden" value="{{ $item['id'] }}" name="id">
                                                            <button type="submit" class="page-link"><i class="fas fa-minus"></i></button>
                                                        </form>

                                                    </li>
                                                    <li class="page-item"><input type="text" name="" class="page-link"
                                                                                 value="{{$item['quantity']}}" id="textbox"></li>
                                                    <li class="page-item">
                                                        <form method="post" action="{{ route('cart.update.plus', $item['id']) }}">
                                                            @csrf
                                                            <input type="hidden" value="1" name="quantity">
                                                            <input type="hidden" value="{{ $item['id'] }}" name="id">
                                                            <button class="page-link" type="submit"><i class="fas fa-plus"></i></button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-9 d-flex justify-content-between remove_wish">
                                                <p><a href="{{ route('remove.cart', $item['id']) }}"><i class="fas fa-trash-alt"></i>REMOVE ITEM</a></p>
                                                <p><i class="fas fa-heart"></i>MOVE TO WISH LIST</p>
                                            </div>
                                            <div class="col-3 d-flex justify-content-end price_money">
                                                <h3><span>{{price(Cart::get($item['id'])->getPriceSum())}}</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--remove item move to list-->
                            </div>
                            @endforeach


                        </div>
                        </hr>
                        <div class="col-md-12 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-5">
                            <div class="right_side p-4  shadow bg-white">
                                <h2 class="product_name mb-5">The Total Amount of</h2>
                                <div class="price_indiv d-flex justify-content-between">
                                    <p>Product Amount</p>
                                    <p><span id="product-total_amt">{{ price(Cart::getSubTotal()) }}</span></p>
                                </div>
                                <div class="price_indiv d-flex justify-content-between">
                                    <p>Shipping Charges</p>
                                    <p><span id="shipping_charge">@if(\Cart::isEmpty()){{ price('00.00') }}
                                            @else{{ price('50.50') }}@endif</span></p>
                                </div>
                                <hr/>
                                <div class="total-amt d-flex justify-content-between font-weight-bold">
                                    <p>The total Amount including taxes</p>
                                    <h3><span id="total_cart_amt">{{ price(Cart::getTotal()) }}</span></3>
                                </div>

                                <button class="btn btn-primary text-uppercase"
                                        onclick="window.location.href='/checkout'">Checkout
                                </button>
                            </div>

                            <div class="mt-3 shadow p-3 bg-white expected-delivery">
                                <div class="pt-4">
                                    <h5 class="mb-4">Expected delivery date</h5>
                                    <p> July 27th 2020 - july 29th 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

    <script src="{{ asset("assets/js/policy.js") }}" async defer></script>
    <script src="{{ asset("assets/js/app.js") }}" async defer></script>

@endsection



