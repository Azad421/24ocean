<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
          integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="icon" href="{{ asset('./images/24Ocean.png') }}">
    @yield('style')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>
<body>
<header class="header" id="headerID">
    <a href="#" class="logo">
        <img src="{{ asset('images/24Ocean.png') }}" alt="">
    </a>
    <nav class="navbar" id="mainNav">
        <a href="{{ route('home') }}">home</a>
        <a href="#about">about us</a>
        <a href="#menu">Favourites</a>
        <a href="{{ route('products') }}">Shop All</a>
        <a href="#newarrivals">new arrivals</a>
        <a href="#review">review</a>
        <a href="#contact">contact us</a>
        <a href="{{ route('blogs') }}">blogs</a>
    </nav>

    <div class="icons">


        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn">{{ count(Cart::getContent()) }}</div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">

        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    </div>
</header>

<!---header section ends here-->

<!-- home section starts  -->
@yield('content')
<!-- footer section starts  -->
<section class="footer" style=" background: url({{ asset('/images/footer-bg.jpg') }})  center no-repeat ;background-size: cover;">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="./index.html"> <i class="fas fa-angle-right"></i> home</a>
            <a href="./about.html"> <i class="fas fa-angle-right"></i> about</a>
            <a href="./skintype.html"> <i class="fas fa-angle-right"></i> SHOP</a>
            <a href="./blogs.html"> <i class="fas fa-angle-right"></i> Blogs</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="./REFUND.HTML"> <i class="fas fa-angle-right"></i> Refund Policy</a>
            <a href="./return.policy"> <i class="fas fa-angle-right"></i> Return Policy</a>
            <a href="./PRIVACY.HTML"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
            <a href="./T&C.HTML"> <i class="fas fa-angle-right"></i> Terms And Condition</a>
            <a href="./SHIPPING.HTML"> <i class="fas fa-angle-right"></i> Shipping Policy</a>
            <a href="./disclaimer.html"> <i class="fas fa-angle-right"></i> Disclaimer</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91 90440 00121</a>
            <a href="#"> <i class="fas fa-envelope"></i> care@24ocean.co </a>
            <a href="#"> <i class="fas fa-map"></i> KANPUR, UTTAR PRADESH, INDIA</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit"> created by LAVANAYA | copyright</div>

</section>

<!-- footer section ends -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


@yield('script')
</body>
</html>

