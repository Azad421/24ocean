@extends('layouts.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection
@section('content')
<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(images/soap1.jpg) no-repeat;">
                <div class="content">

                    <h3>We Care For Your Skin Here!</h3>
                    <a href="skintype.blade.php" class="btn">get started</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/soap2.jpg) no-repeat;">
                <div class="content">

                    <h3>Check Out our Personal Blogs</h3>
                    <a href="blogs.blade.php" class="btn">Read More</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/soap3.jpg) no-repeat;">
                <div class="content">

                    <h3>Know What Works For your Skin</h3>
                    <a href="https://uncovertheglow.com/skin-type-quiz/" class="btn">Take The Quiz</a>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->


<!-- home section ends -->


<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> about us </h1>

    <div class="row">

        <div class="image">
            <img src="{{ asset('images/about.webp') }}" alt="">
        </div>

        <div class="content">
            <h3>what makes our Product so special?</h3>
            <p>We at 24 Ocean are a team of care takers who aspire to look after the needs of our customers and their
                skin. We appreciate
                the autenticity, simplicity, quality and beauty with which all of you carry on in your lives. We believe
                your beauty is our passion, where we take care of all
                kinds of skintypes and textures. Our soaps and bath and body products range for all kinds of skins, from
                oily to sensitive, from dry to normal. These
                products are purposefully crafted and specially formulated to be safe and free from over 1300 harmful
                substances you don't want on your skin or body. We are here
                to partner with the most responsible ingredient suppliers and follow ethical standards to cater to your
                skincare needs.
            </p>
            <p>Here at 24 Ocean we look after our customers with three parts care and 2 parts fervour, bringing the
                perfect formula right next to you. The products are vegan friendly and cruelty free, basically your one
                stop shop for
                organic beauty. We want to make you fall in love with your skin ! Our skincare essentials are designed
                to make you feel
                and look your glowy, dewy best before you even think about makeup.
            </p>
            <p>
                We focus on delivering our products with great standards wrapped in beautiful ORIGAMI packaging
                We also believe in giving back to the community; we have tied up with an NGO for socio-economic
                development.
                Revenue generated from our sales is channelized for the developmentof nature and society. As we said, we
                want to give back to nature what
                we take from them and mark our words for that, because we do what we say !
            </p>
            <a href="./about.html" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!--about section ends-->
<!--menu section starts-->

<section class="menu" id="menu">
    <h1 class="heading"> OUR FAVORITES </h1>

    <div class="box-container">
        @foreach($products->where('favorites', 1) as $product)
        <div class="box">
            <img src="{{ asset('images/'.$product->image) }}" alt="{{ $product->name }}">
            <h3>{{ $product->name }}</h3>
            <div class="price">{{ price($product->price) }}</div>
            <form method="post" action="{{ route('add.to.cart') }}">
                @csrf
                <input type="hidden" value="1" name="quantity">
                <input type="hidden" value="{{ $product->id }}" name="id">
                <button type="submit" class="btn"> add to cart </button>
            </form>
        </div>
        @endforeach
    </div>
</section>

<!--menu section ends here-->

<section class="perks">
    <h1 class="heading"> CLEAN BEAUTY MADE EASY </h1>
    <p class="style">As much as we care for your skin, we at 24 ocean, also care for our environment. We use 100%
        natural ingredients to keep you skin happy, glowing, hydrated and healthy. Some for our best
        products will nourish your skin and make you feel good in your body, in a sustainable manner. We here believe in
        slow
        fashion and cleaner surroundings. We are here to bring out the best of your skin, Here's to loving and
        showcasing your radiance
    </p>
    <div class="box-container">
        <div class=box id="images"><img src="{{ asset('images/vegan.png') }}">
            <div class="caption">Vegan friendly and paraben free</div>
        </div>
        <div class=box id="images"><img src="{{ asset('images/crueltyfree.png') }}">
            <div class="caption">clean beauty and cruelty free</div>
        </div>
        <div class=box id="images"><img src="./images/sustainable.png">
            <div class="caption">sustainable and non toxic</div>
        </div>
    </div>
</section>

<div class="new_arrivals" id="newarrivals">
    <div class="product_text">
        <h1 class="heading">NEW ARRIVALS</h1>
        <p>
            <span class="newspan">&#139;</span>
            <span class="newspan">&#155;</span>
        </p>
    </div>
    <section class="newsection">
        @foreach($products->where('arrival', 1) as $product)
        <div class="newproduct">
            <picture>
                <img src="{{ asset('images/'.$product->image) }}" alt="{{ $product->name }}">
            </picture>
            <div class="detail">
                <p>
                    <b>{{ $product->name }}</b><br>
                    <small>New arrival</small>
                </p>

            </div>
            <div class="button">
                <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                </p>
            </div>
        </div>
        @endforeach
    </section>
</div>

<!--products section ends here-->

<!--review section starts here-->
<section class="review" id="review">

    <h1 class="heading"> customer's review </h1>

    <div class="box-container">
        <div class="box">
            <p>"I have been using 24 ocean's products for a while now and have been recommending to my friends aswell.
                They literally have some of the best ranges of organic bath and body products
                i have found in quite a while. These products work like a charm in taking care of your skin,
                my body feels nourished and revitalized. I would highly recommend purchasing some of their vegan
                friendly soaps, if you want to give love to your body!"
            </p>
            <img src="./images/dummy.jpg" class="user" alt="">
            <h3>JOHN DOE</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">

            <p>"You can really tell the work that they have put in and truly care about their clients. They have helped
                me take care of my skin like no other brand out there. The
                products are flawless and feel great when used. Leaves your skin ultra moisturized. I have beome a huge
                fan of the brand in a short amount of time and rightfull so!
                I don't often leave reviews but i had to come back for this one. It is about time that you give your
                skin what it really needs and make a purchase at 24 OCEAN"</p>
            <img src="./images/dummy.jpg" class="user" alt="">
            <h3>JOHN DOE</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">

            <p>"Finally a local and sustainable skincare brand that caters to all my skincare needs. Not to mention, how
                beautiful and unique
                each and everyone of their product looks ! I was blown away with the texture and creamy feel. If you are
                someone like me who likes making ethical choices and
                caring about mother nature, I suggest you switch to 24 Ocean, trust me you will be smitten in a small
                amount of time. "</p>
            <img src="./images/dummy.jpg" class="user" alt="">
            <h3>JOHN DOE</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">

            <p>"I can't say enough about how happy I am with 24 Ocean's absolutely beautiful range of products. My
                family (whose not great at noticing
                details) even said how great my skin has been looking for a few days, all thanks to 24 Ocean. Besides
                the soap range
                being gentle and creamy, it was easy to order and was delivered quickly, the packaging looked great. I
                am saying this again but not enough, these products
                are amazing and one should definitely try them out !"</p>
            <img src="./images/dummy.jpg" class="user" alt="">
            <h3>JOHN DOE</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
    </div>

</section>


<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> contact us </h1>

    <div class="row">

        <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy"></iframe>

        <form method="post" action="{{ route('contact') }}">
            @csrf
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="Name..." name="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="Email..." name="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <textarea rows="4" placeholder="Message..." name="message"></textarea>
            </div>
            <input type="submit" value="contact now" class="btn">
        </form>

    </div>

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
