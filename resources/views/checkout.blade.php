<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>checkout form</title>
</head>
<body class="bg-light">
<div class="container">
    <div class="py-5 text-center">
        <img class="mb-4 d-block " src="./images/24Ocean.png" width="120" height="130">
    </div>
    <h2>CHECKOUT</h2>
    <p class="lead">add your shipping address and information below</p>
</div>

<div class=" container mb-4 p-3 mx-auto">

    <h4 class="mb-3">Shipping Address/Billing Address</h4>
    <form action="{{ route('create.order') }}" method="post">
        @csrf
        <div class="row g-2"><!--gutters are magic, spaces between the two input boxes-->
            <div class="col-sm-6">
                <label for="fName" class="form-label">First Name</label>
                <input id="fName" name="fName" type="text" class="form-control  @error('fName') is-invalid @enderror"
                       placeholder="First Name">
                @error('fName')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="col-sm-6">
                <label for="lName" class="form-label ">Last Name</label>
                <input id="lName" type="text" name="lName" class="form-control @error('lName') is-invalid @enderror" placeholder="Last Name">
                @error('fName')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-12">
                <label for="contact_no" class="form-label">Contact No</label>
                <div class="input-group">
                    <span class="input-group-text">+</span>
                    <input id="contact_no" type="text" class="form-control @error('contact_no') is-invalid @enderror" name="contact_no" placeholder="0190000000">
                    @error('fName')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="invalid-feedback">
                Valid username is required.
            </div>

            <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <div class="input-group">
                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Address...">
                    @error('fName')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            {{--            <div class="col-12">--}}
            {{--                <label for = "address" class = "form-label">Address</label>--}}
            {{--                <div class = "input-group">--}}

            {{--                    <input id = "address" type = "text" class = "form-control" placeholder = "line 2" >--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <div class="col-md-5 mt-3">
                <label for="country" class="form-label">Country</label>
                <select id="country" name="country" class="form-control @error('country') is-invalid @enderror">
                    <option value="">Choose Country</option>
                    <option value="Australia">Australia</option>
                    <option value="India">India</option>
                </select>
                @error('fName')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="col-md-4 mt-3">
                <label for="state" class="form-label">State</label>
                <select id="state" name="state" class="form-control @error('state') is-invalid @enderror">
                    <option value="">Choose State</option>
                    <option value="Uttar Pradesh">Uttar Pradesh..</option>
                </select>
                @error('fName')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="col-md-3 mt-3">
                <label for="zip_code" class="form-label">zipcode</label>
                <div class="input-group">
                    <input id="zip_code" type="number" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code" placeholder="1234">
                    @error('fName')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <hr class="my-4"><!--horizontal rule-->
            <button type="submit" class="btn btn-primary btn-lg btn-block">Proceed To Payment</button>
        </div>
    </form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
