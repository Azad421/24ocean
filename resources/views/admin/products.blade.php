@extends('admin.layouts.main')
@section('style')
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
@endsection
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
                                <th>SN</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>New Arrival</th>
                                <th>Our favorite</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->slug }}</td>
                                    <td><img width="100px" src="{{ asset('images/'.$product->image) }}" alt="{{$product->name}}"></td>
                                    <td><?= $product->description ?></td>
                                    <td><a href="{{ route('admin.product.status', $product->id) }}">{{ showStatus($product->pStatus) }}</a></td>
                                    <td>
                                        <input type="checkbox" data-toggle="toggle" onchange="$('#arrival{{ $product->id }}').submit()" data-offstyle="danger" data-size="xs" {{ $product->arrival==1?'checked':'' }}>
                                        <form method="post" action="{{ route('admin.product.arrival') }}" id="arrival{{ $product->id }}">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        </form>
                                    </td>
                                    <td>
                                        <input type="checkbox" data-toggle="toggle" onchange="$('#favorites{{ $product->id }}').submit()" data-offstyle="danger" data-size="xs" {{ $product->favorites==1?'checked':'' }}>
                                        <form method="post" action="{{ route('admin.product.favorites') }}" id="favorites{{ $product->id }}">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        </form>
                                    </td>
                                    <td class="d-flex justify-content-center">

                                        <a href="{{ route('admin.product.edit',$product->id) }}" class="btn text-white btn-primary mr-3"><i class="mdi mdi-pen"></i></a>
                                        <form method="post" action="{{ route('admin.product.destroy',$product->id) }}">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="btn text-white btn-danger"><i class="mdi mdi-delete"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
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
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script>
        $('#myTable').DataTable();
        <!-- End PAge Content -->
    </script>
@endsection
