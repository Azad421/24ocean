@extends('layouts.main')
@section('style')
    <link rel="stylesheet" type="text/css"
          href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.1/css/all.min.css"
          integrity="sha512-9my9Mb2+0YO+I4PUCSwUYO7sEK21Y0STBAiFEYoWtd2VzLEZZ4QARDrZ30hdM1GlioHJ8o8cWQiy8IAb1hy/Hg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("assets/css/orderhistory.css")}}">

@endsection
@section('content')
    <section class="about" id="about">

        <br>
        <br>
        <br>
        <div class="container-bootdey">
            <div class="col-md-10 mx-auto p-4">
                <div class="card border-0 ">
                    @include('layouts.error-one')
                    <div class="card-header card-2">
                        <p class="card-text text-muted mt-md-8  mb-2 space">YOUR ORDER @if($order->status_id == 1)<a
                                href="{{ route('user.order.cancel', $order->id) }}" class=" small text-muted ml-2">Cancel
                                Order</a>@endif</p>
                        <hr class="my-2">
                    </div>
                    <div class="card-body pt-0">
                        @foreach($order->details as $item)
                            <div class="row  justify-content-between">
                                <div class="col-auto col-md-7  p-2">
                                    <div class="media flex-column flex-sm-row">
                                        <img class=" img-fluid" src="{{ asset('images/'.$item->product->image) }}"
                                             width="90" height="62">
                                        <div class="media-body  my-auto">
                                            <div class="row ">
                                                <div class="col-auto"><p class="mb-0"><b>{{ $item->product->name }}</b>
                                                    </p><small class="text-muted">ordered on
                                                        : {{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" pl-0 flex-sm-col col-auto  my-auto"><p
                                        class="boxed-1">{{ $item->quantity }}</p></div>
                                <div class=" pl-0 flex-sm-col col-auto  my-auto "><p><b>{{ price($item->price) }}</b>
                                    </p></div>
                            </div>
                            <hr class="my-2">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-2">
        <div class="row ">
            <div class="col">
                <div class="row justify-content-between">
                    <div class="col-4"><p class="mb-1"><b>Subtotal</b></p></div>
                    <div class="flex-sm-col col-auto"><p class="mb-1"><b>{{ price($order->price_amount) }}</b></p></div>
                </div>
                <div class="row justify-content-between">
                    <div class="col"><p class="mb-1"><b>Shipping</b></p></div>
                    <div class="flex-sm-col col-auto"><p class="mb-1"><b>{{ price($order->shipping_price) }}</b></p>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-4"><p><b>Total</b></p></div>
                    <div class="flex-sm-col col-auto"><p class="mb-1"><b>{{ price($order->total_amount) }}</b></p></div>
                </div>
                <hr class="my-0">
            </div>
        </div>
        <div class="row mb-5 mt-4 ">
            <div class="col-md-8 col-lg-6">
{{--                <button type="button" class="btn btn-block btn-outline-primary btn-lg">ADD GIFT CODE</button>--}}
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>

        <div class="card mb-4">
            <!-- Shipping information -->
            <div class="card-body">
                <h3 class="h4">Shipping Information</h3>
                <hr>
                <h3 class="h4">Address</h3>
                @foreach($order->address as $address)
                    <p>{{ $address->type }}</p>
                    <address>
                        <strong>{{ $address->fName.' '.$address->lName }}</strong><br>
                        {{ $address->address.' '.$address->state.' '.$address->zip_code }}<br>
                        {{ $address->country }}<br>
                        <abbr title="Phone"></abbr> {{ $address->contact_no }}
                    </address>
                @endforeach
            </div>
        </div>

        </div>
        </div>
    </section>

@endsection
@section('script')
    <script src="{{ asset("assets/js/policy.js") }}" async defer></script>
@endsection

