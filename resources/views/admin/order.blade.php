@extends('admin.layouts.main')

@section('content')
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-primary">#{{ $order->oId }}</h4>
                    <hr>
                    <div class="row">
                        <div class="col-lg-10 col-md-8">
                            @foreach($order->details as $detail)
                                <div class="row">
                                    <div class="col-6 py-2">
                                        {{ $detail->product->name }}
                                    </div>
                                    <div class="col-2 py-2">
                                        <img width="50" src="{{ asset('images/'.$detail->product->image) }}" alt="">
                                    </div>
                                    <div class="col-2 py-2">
                                        {{ $detail->quantity }}
                                    </div>
                                    <div class="col-2 py-2">
                                        {{ $detail->price }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="border p-4">
                                <div class="d-flex justify-content-between">
                                    <span class="font-bold">Total:</span>
                                    <span>{{ number_format($order->details->sum('price'), 2) }}</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="font-bold">Discounted:</span>
                                    <span>{{ number_format($order->discounted_price, 2) }}</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <span class="font-bold">Total:</span>
                                    <span>{{ number_format($order->price_amount, 2) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4>Address</h4>
                    <div class="row">
                        <div class="col-6">
                            <h5>Shipping Address</h5>
                            <div class="row">
                                <div class="col-3">
                                    district :
                                </div>
                                <div class="col-9">Natore</div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    Police Station :
                                </div>
                                <div class="col-9">Natore</div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    Post Code :
                                </div>
                                <div class="col-9">6400</div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    Post Office :
                                </div>
                                <div class="col-9">Natore</div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    Address :
                                </div>
                                <div class="col-9">107-Aworail, Halsa, Natore Sadar, Natore</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End PAge Content -->
@endsection
