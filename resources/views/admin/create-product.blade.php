@extends('admin.layouts.main')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-primary">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">{{ $pageTitle }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body col-sm-8 col-md-6 mx-auto">
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group @error('name') has-danger @enderror">
                                        <label class="control-label" for="name">Name</label>
                                        <input type="text" id="name" name="name"
                                               class="form-control @error('name') form-control-danger @enderror"
                                               placeholder="Name..." value="{{ old('name') }}">
                                        @error('name')
                                        <small class="form-control-feedback"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group @error('category') has-danger @enderror">
                                        <label class="control-label" for="category">Category</label>
                                        <select
                                            class="form-control custom-select @error('category') form-control-danger @enderror"
                                            name="category" id="category">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option
                                                    value="{{ $category->id }}" {{ old('category')==$category->id?'selected':'' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                        <small class="form-control-feedback"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group @error('price') has-danger @enderror">
                                        <label
                                            class="control-label @error('price') has-danger @enderror"
                                            for="price">Price</label>
                                        <input type="number" name="price" id="price"
                                               class="form-control @error('price') form-control-danger @enderror"
                                               placeholder="Price..." value="{{ old('price') }}">
                                        @error('price')
                                        <small class="form-control-feedback"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group @error('status') has-danger @enderror">
                                        <label class="control-label" for="category">Status</label>
                                        <select
                                            class="form-control custom-select @error('status') form-control-danger @enderror"
                                            name="status" id="status">
                                            <option value="">Select Status</option>
                                            @foreach($statuses as $status)
                                                <option
                                                    value="{{ $status->id }}" {{ old('category')==$status->id?'selected':'' }}>{{ $status->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('status')
                                        <small class="form-control-feedback"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group @error('image') has-danger @enderror">
                                        <label class="control-label" for="description">Product Image</label>
                                        <input type="file" name="image"
                                               class="dropify @error('image') form-control-danger @enderror"
                                               id="job_image">
                                        @error('image')
                                        <small class="form-control-feedback"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group @error('description') has-danger @enderror">
                                        <label class="control-label" for="description">Description</label>
                                        <textarea name="description"
                                                  class="form-control @error('description') form-control-danger @enderror"
                                                  id="description" cols="30" rows="3"
                                                  placeholder="Product Description..">{{ old('description') }}</textarea>
                                        @error('description')
                                        <small class="form-control-feedback"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                        </div>
                        <div class="form-actions text-center">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
                            <button type="reset" class="btn btn-inverse">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->

    <!-- End PAge Content -->
    <script>
        $(document).ready(function () {
            // Basic
            $('.dropify').dropify();

        });
    </script>
@endsection
@section('script')
    <script>
        // Basic
        $('.dropify').dropify();
        $('#description').summernote({
            height: 200, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false, // set focus to editable area after initializing summernote
            placeholder: 'Description...',
        });
    </script>
@endsection
