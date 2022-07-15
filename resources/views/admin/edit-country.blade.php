@extends('admin.layouts.main')
@section('content')
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-primary">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Edit Country Form</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.country.update', $country->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method("put")
                        <div class="form-body col-sm-8 col-md-6 mx-auto">
                            <h3>Edit Country</h3>
                            @include('admin.layouts.error')
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group @error('name') has-danger @enderror">
                                        <label class="control-label">Name</label>
                                        <input type="text" id="category_name" name="name"
                                               value="{{ old('name', $country->name) }}"
                                               class="form-control @error('name') form-control-danger @enderror"
                                               placeholder="Country Name">
                                        @error('name')
                                        <small class="form-control-feedback"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions text-center">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->

    <!-- End PAge Content -->
@endsection
