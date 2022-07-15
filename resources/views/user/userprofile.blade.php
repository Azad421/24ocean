@extends('layouts.main')
@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@300&display=swap" rel="stylesheet">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset("assets/css/userprofile.css")}}">
@endsection
@section('content')
    <section class="about" id="about">

        <div class="container">
            <div class="view-account">
                <section class="module">
                    <div class="module-inner">
                        <div class="side-bar">
                            <div class="user-info">
                                <img class="img-profile img-circle img-responsive center-block"
                                     src="{{ 'images/'.$user->profile_pic }}" alt="">
                                <ul class="meta list list-unstyled">
                                    <li class="name">{{ $user->name }}
                                    </li>
                                    <li class="email"><a href="mailto:{{ $user->email }}">{{$user->email}}</a></li>
                                </ul>
                            </div>
                            <nav class="side-menu">
                                <ul class="nav">
                                    <li class="active"><a href="#"><span class="fa fa-user"></span> Profile</a></li>
                                    <li><a href="{{ route('user.orders') }}"><span class="fa fa-cog"></span> Order History</a></li>
{{--                                    <li><a href="#"><span class="fa fa-credit-card"></span> Billing</a></li>--}}
                                </ul>
                            </nav>
                        </div>
                        <div class="content-panel">
                            @include('layouts.error-one')

                            <fieldset class="fieldset">
                                <h3 class="fieldset-title">Personal Info</h3>
                                <div class="form-group avatar">
                                    <form action="{{ route("user.update.image", $user->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <figure class="figure col-md-2 col-sm-3 col-xs-12">
                                            <img class="img-rounded img-responsive"
                                                 src="{{ 'images/'.$user->profile_pic }}" alt="" id="output">
                                        </figure>
                                        <div class="form-inline col-md-10 col-sm-9 col-xs-12">
                                            <input type="file" name="profile_pic" class="file-uploader pull-left"
                                                   onchange="loadFile(event)">
                                            <button type="submit"
                                                    class="btn btn-primary btn-sm btn-default-alt pull-left">Update Image
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </fieldset>
                            <form class="form-horizontal" method="post" action="{{ route('user.update', $user->id) }}">
                                @csrf
                                @method('PUT')
                                <fieldset class="fieldset">
                                    <br>
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-3 col-xs-12 control-label">User Name</label>
                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                            <input type="text" name="name"
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   value="{{ $user->name }}">
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <br>
                                    <h3 class="fieldset-title">Contact Info</h3>
                                    <div class="form-group">
                                        <label class="col-md-2  col-sm-3 col-xs-12 control-label">Email</label>
                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                            <input type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email" value="{{ $user->email }}" readonly>
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2  col-sm-3 col-xs-12 control-label">ADDRESS</label>
                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                            <input type="text"
                                                   class="form-control @error('address_line_one') is-invalid @enderror"
                                                   name="address_line_one" value="{{ $user->address_line_one }}">
                                            <p class="help-block">Address line 1</p>
                                            @error('address_line_one')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                            <input type="text"
                                                   class="form-control @error('address_line_two') is-invalid @enderror"
                                                   name="address_line_two" value="{{ $user->address_line_two }}">
                                            <p class="help-block">Address line 2</p>
                                            @error('address_line_two')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </fieldset>
                                <hr>
                                <div class="form-group">
                                    <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                        <button class="btn btn-primary text-uppercase">UPDATE PROFILE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

    <script src="{{ asset("assets/js/policy.js") }}" async defer></script>
    <script>
        var loadFile = function (event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function () {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endsection


