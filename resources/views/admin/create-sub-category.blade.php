@extends('admin.layouts.main')
@section('content')
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-primary">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Add Sub Category Form</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.subcategory.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body col-sm-8 col-md-6 mx-auto">
                            <h3>New Sub category</h3>
                            @include('admin.layouts.error')
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group @error('category_status') has-danger @enderror">
                                        <label class="control-label">Category</label>
                                        <select class="form-control custom-select"
                                                name="category">
                                            <option value="">Select Category</option>
                                            @foreach($categories->where('status', $statuses->where('nickname','active')->first()->id ) as $category)
                                                <option
                                                    value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_status')
                                        <small class="form-control-feedback"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('category_name') has-danger @enderror">
                                        <label class="control-label">Sub Category Name</label>
                                        <input type="text" id="category_name" name="category_name"
                                               value="{{ old('category_name') }}"
                                               class="form-control @error('category_name') form-control-danger @enderror"
                                               placeholder="Sub Category Name">
                                        @error('category_name')
                                        <small class="form-control-feedback"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('category_status') has-danger @enderror">
                                        <label class="control-label">Sub Category Status</label>
                                        <select class="form-control custom-select"
                                                name="category_status">
                                            <option value="">Select Status</option>
                                            @foreach($statuses as $status)
                                                <option
                                                    value="{{ $status->id }}">{{ $status->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_status')
                                        <small class="form-control-feedback"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group @error('description') has-danger @enderror">
                                        <label class="control-label">Sub Category Description</label>
                                        <textarea class="form-control @error('description') form-control-danger @enderror" name="description" placeholder="Sub Category Description" id="description" cols="30" rows="3">{{ old('category_name') }}</textarea>
                                        @error('description')
                                        <small class="form-control-feedback"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group @error('image') has-danger @enderror">
                                        <label class="control-label">Sub Category Logo</label>
                                        <input type="file" name="image" id="image" class="dropify">
                                        @error('image')
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
