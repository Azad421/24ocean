@extends('layouts.main')
@section('style')
    <link rel="stylesheet" type="text/css"
          href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("assets/css/orderhistory1.css")}}">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset("assets/css/policies.css")}}">
@endsection
@section('content')
    <section class="about" id="about">

        <div class="container-bootdey">
            <div class="panel panel-default panel-order">
                <div class="panel-heading">
                    <strong>Order history</strong>
                    <br>
                    <br>
                </div>

                <div class="panel-body">
                    @foreach($orders as $order)
                        <div class="row">
                            <div class="col-md-1">{{ $order->id }}</div>
                            <div class="col-md-11">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="pull-right"><label
                                                class="label label-danger">{{ showStatus($order->status) }}</label>
                                        </div>
                                        <span><strong>Order Id: </strong></span>
                                        <a href="{{ route('user.order.show', $order->oId) }}" class="label label-info text-muted text-decoration-none">{{ $order->oId }}</a><br/>
                                        Product : {{ $order->details()->count() }},
                                        cost: {{ price($order->price_amount) }} <br/>
                                    </div>
                                    <div class="col-md-12">order made
                                        on: {{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')

    <script src="{{ asset("assets/js/policy.js") }}" async defer></script>

@endsection

