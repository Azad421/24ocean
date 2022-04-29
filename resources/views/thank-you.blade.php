@extends('layouts.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection
@section('content')
<!-- home section starts  -->
<section>

</section>
<!-- contact section ends -->

@endsection
@section('script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>


    <script src="{{ asset('assets/js/app.js') }}" async defer></script>
    <script src="{{ asset('assets/js/carousel.js') }}" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>
@endsection
