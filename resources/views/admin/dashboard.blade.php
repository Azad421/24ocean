@extends('admin.layouts.main')
@section('content')

    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-3">
            <div class="card card-body">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col p-r-0 align-self-center">
                        <h2 class="font-light m-b-0">0</h2>
                        <h6 class="text-muted">Total Job</h6></div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <div>
                            <span class="mdi mdi-gift text-themecolor dashboard-icon"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3">
            <div class="card card-body">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col p-r-0 align-self-center">
                        <h2 class="font-light m-b-0">
                            {{ $user->count() }}
                        </h2>
                        <h6 class="text-muted">Total Job Seeker</h6></div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <span class="mdi mdi-account text-themecolor dashboard-icon"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3">
            <div class="card card-body">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col p-r-0 align-self-center">
                        <h2 class="font-light m-b-0">
                            {{ $user->count() }}
                        </h2>
                        <h6 class="text-muted">Total Employee</h6></div>
                    <!-- Column -->
                    <div class="col text-right ">
                        <span class="mdi mdi-account text-themecolor dashboard-icon"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3">
            <div class="card card-body">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col p-r-0 align-self-center">
                        <h2 class="font-light m-b-0">0</h2>
                        <h6 class="text-muted">Total Order</h6></div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <span class="mdi mdi-gift text-themecolor dashboard-icon"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
@endsection
