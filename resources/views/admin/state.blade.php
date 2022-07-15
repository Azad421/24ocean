@extends('admin.layouts.main')

@section('content')
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 align-items-center">
                            <h4 class="card-title">Categories</h4>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn text-white btn-primary" href="{{ route('admin.state.create') }}"><i class="mdi mdi-library-plus"></i> Add State</a>
                        </div>
                    </div>
                    @include('admin.layouts.error')
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>Zip Code</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($states as $state)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $state->name }}</td>
                                    <td>{{ $state->country->name }}</td>
                                    <td>{{ $state->zip_code }}</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{ route('admin.state.edit',$state->id) }}" class="btn text-white btn-primary mr-3"><i class="mdi mdi-pen"></i></a>
                                        <form method="post" action="{{ route('admin.state.destroy',$state->id) }}">
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
