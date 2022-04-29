@extends('admin.layouts.main')

@section('content')
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 align-items-center">
                            <h4 class="card-title">Data Table</h4>
                            <h6 class="card-subtitle">Data table example</h6>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn text-white btn-primary" href="{{ route('admin.subcategory.create') }}"><i class="mdi mdi-library-plus"></i> Add Category</a>
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
                                <th>Status</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($subcategories as $subcategory)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $subcategory->name }}</td>
                                    <td>{{ $subcategory->slug }}</td>
                                    <td><a href="{{ route('admin.subcategory.status', $subcategory->id) }}">{{ showStatus($subcategory->statuses) }}</a></td>
                                    <td><img width="100px" src="{{ asset('images/'.$subcategory->image) }}" alt="{{$subcategory->name}}"></td>
                                    <td>{{ $subcategory->description }}</td>
                                    <td class="d-flex justify-content-center">

                                        <a href="{{ route('admin.subcategory.edit',$subcategory->id) }}" class="btn text-white btn-primary mr-3"><i class="mdi mdi-pen"></i></a>
                                        <form method="post" action="{{ route('admin.subcategory.destroy',$subcategory->id) }}">
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
