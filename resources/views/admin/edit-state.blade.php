@extends('admin.layouts.main')
@section('content')
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-primary">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Edit State Form</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.state.update', $state->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-body col-sm-8 col-md-6 mx-auto">
                            <h3>Edit State</h3>
                            @include('admin.layouts.error')
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group @error('name') has-danger @enderror">
                                        <label class="control-label">Name</label>
                                        <input type="text" name="name"
                                               value="{{ old('name', $state->name) }}"
                                               class="form-control @error('name') form-control-danger @enderror"
                                               placeholder="State Name">
                                        @error('name')
                                        <small class="form-control-feedback"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('country_id') has-danger @enderror">
                                        <label class="control-label" for="country_id">Country</label>
                                        <select name="country_id" id="country_id" class="form-control">
                                            <option value="">Select Country</option>
                                            @foreach($countries as $country)
                                                <option value="{{ $country->id }}"
                                                        @if(old('country_id', $state->country->id) == $country->id) selected @endif>{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('country_id')
                                        <small class="form-control-feedback"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group @error('zip_code') has-danger @enderror">
                                        <label class="control-label">Zip Code</label>
                                        <input type="text" name="zip_code"
                                               value="{{ old('zip_code', $state->zip_code) }}"
                                               class="form-control @error('zip_code') form-control-danger @enderror"
                                               placeholder="Zip Code">
                                        @error('zip_code')
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
