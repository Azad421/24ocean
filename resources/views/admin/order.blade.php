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
                                    <span>{{ number_format($order->price_amount, 2) }}</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="font-bold">Discounted:</span>
                                    <span>{{ number_format($order->discounted_price, 2) }}</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <span class="font-bold">Total:</span>
                                    <span>{{ number_format(($order->price_amount-$order->discounted_price), 2) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4>Address</h4>
                    <div class="row">
                        @foreach($order->address as $address)
                        <div class="col-6">
                            <h5>{{ \Illuminate\Support\Str::ucfirst($address->type) }} Address</h5>
                            <div class="row py-2">
                                <div class="col-3">
                                    First Name :
                                </div>
                                <div class="col-9">{{ $address->fName }}</div>
                            </div>
                            <div class="row py-2">
                                <div class="col-3">
                                    Last Name :
                                </div>
                                <div class="col-9">{{ $address->lName }}</div>
                            </div>
                            <div class="row py-2">
                                <div class="col-3">
                                    Contact No :
                                </div>
                                <div class="col-9">{{ $address->contact_no }}</div>
                            </div>
                            <div class="row py-2">
                                <div class="col-3">
                                    Country :
                                </div>
                                <div class="col-9">{{ $address->country }}</div>
                            </div>
                            <div class="row py-2">
                                <div class="col-3">
                                    State :
                                </div>
                                <div class="col-9">{{ $address->state }}</div>
                            </div>
                            <div class="row py-2">
                                <div class="col-3">
                                    Zip Code :
                                </div>
                                <div class="col-9">{{ $address->zip_code }}</div>
                            </div>
                            <div class="row py-2">
                                <div class="col-3">
                                    Address :
                                </div>
                                <div class="col-9">{{ $address->address }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End PAge Content -->
@endsection
