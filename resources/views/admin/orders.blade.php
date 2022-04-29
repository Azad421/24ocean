@extends('admin.layouts.main')

@section('content')
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 align-items-center">
                            <h4 class="card-title">{{ $pageTitle }}</h4>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn text-white btn-primary" href="{{ route('admin.product.create') }}"><i class="mdi mdi-library-plus"></i> Add Product</a>
                        </div>
                    </div>
                    @include('admin.layouts.error')
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Order Id</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->oId }}</td>
                                    <td>
                                        @foreach($order->details as $detail)
                                        <div>{{ $detail->product->name }}</div>
                                        <hr>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($order->details as $detail)
                                            <div>{{ $detail->quantity }}</div>
                                            <hr>
                                        @endforeach
                                    </td>
                                    <td>{{ showStatus($order->status) }}</td>
                                    <td class="d-flex justify-content-center">
                                        <div class="actionDrop">
                                            <a href="#" class="dropdown-toggle u-dropdown btn btn-primary waves-effect waves-dark"
                                               data-toggle="dropdown"
                                               role="button" aria-haspopup="true" aria-expanded="true">Action</a>
                                            <div class="dropdown-menu dropdown-menu-left animated flipInX">
                                                <a class="dropdown-item" href="{{ route('admin.order.show', $order->id) }}"><i class="fa-solid fa-circle-info text-primary"></i> Details</a>
                                                <a class="dropdown-item" href="{{ route('admin.order.show', $order->id) }}"><i class="fa-solid fa-ban text-danger"></i> Cancel</a>
                                                <a class="dropdown-item" href="{{ route('admin.order.show', $order->id) }}"><i class="fa-solid fa-truck text-success"></i> On The Way</a>
                                                <a class="dropdown-item" href="{{ route('admin.order.show', $order->id) }}"><i class="fa-solid fa-box-open text-primary"></i> Delivered</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End PAge Content -->
@endsection
@section('script')
    <script>
        $('#myTable').DataTable();
        <!-- End PAge Content -->
    </script>
@endsection
