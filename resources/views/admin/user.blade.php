@extends('admin.layouts.main')

@section('content')
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-primary">{{ $user->name }}</h4>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mx-auto">
                            <div class="row">
                                <div class="col-6 text-center">
                                    <img class="img-fluid" width="200px" src="{{ asset('./images/'.$user->profile_pic) }}" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-2">
                                    User Name :
                                </div>
                                <div class="col-6 py-2">
                                    {{ $user->name }}
                                </div>
                                <div class="col-12">
                                    <h4>Contact</h4>
                                </div>
                                <div class="col-6 py-2">
                                    Email :
                                </div>
                                <div class="col-6 py-2">
                                    {{ $user->email }}
                                </div>
                                <div class="col-6 py-2">
                                    Contact No :
                                </div>
                                <div class="col-6 py-2">
                                    {{ $user->contact_no }}
                                </div>
                                <div class="col-12">
                                    <h4>Address</h4>
                                </div>
                                <div class="col-6 py-2">
                                    Country :
                                </div>
                                <div class="col-6 py-2">
                                    {{ $user->country }}
                                </div>
                                <div class="col-6 py-2">
                                    District :
                                </div>
                                <div class="col-6 py-2">
                                    {{ $user->district }}
                                </div>
                                <div class="col-6 py-2">
                                    Village :
                                </div>
                                <div class="col-6 py-2">
                                    {{ $user->village }}
                                </div>
                                <div class="col-6 py-2">
                                    Address Line One :
                                </div>
                                <div class="col-6 py-2">
                                    {{ $user->address_line_one }}
                                </div>
                                <div class="col-6 py-2">
                                    Address Line Two     :
                                </div>
                                <div class="col-6 py-2">
                                    {{ $user->address_line_two }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End PAge Content -->
@endsection
