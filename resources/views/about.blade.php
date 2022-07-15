@extends('layouts.main')
@section('style')
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
          integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{ asset('assets/css//style.css')}}">
@endsection
@section('content')

    <section class="home" id="home">

        <div class="swiper home-slider" id="diff-style">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(images/blogimage5.jpg) no-repeat">
                    <div class="content">

                        <h3>We care for your skin here</h3>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/blogimage8.jpg) no-repeat;">
                    <div class="content">

                        <h3>Watch out for new arrivals</h3>

                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/blogimage12.jpg) no-repeat;"
                     id="diff-style">
                    <div class="content">

                        <h3> Fall in love with your skin </h3>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="about" id="about">

        <h1 class="heading"><span>OUR </span> Journey </h1>

        <div class="row">


            <div class="content">
                <h3>HOW WAS 24 OCEAN BORN?</h3>
                <p>We came into being because of an unfortunate incident in the past. My late grandfather, a patient of
                    diabetes, used to encounter multiple skin allergies and other ailments along with dry skin
                    regularly. The reason being, chemically loaded soaps on sensitice skin.
                    With this problem in hand, we started with our research and came up with NOVEL AND SUSTAINABLE ways
                    to prepare organic soaps that are gentle on your skin and can be used for a number of different
                    purposes.
                    They say when life gives you lemons, made a lemonade and yes, we quite literally did that ! </p>
                <p>After referring to a number of statistics, we discovered that 9.3% of the global population is
                    experiencing several skin allergies for the same reasons as my grandfather did, so we decided to
                    go public with the idea of a premium range of perfectly formulated organic soaps.
                </p>
                <p>It was complete inquisitiveness combined with our scientific temperament that brought us to create
                    the perfect formula fit for various skin types and textures.</p>
                <p>We believe your beauty is our passion where we take care of all kinds of skins and textures. Our
                    skincare essentials are designed to make you feel your best and most confident self. </p>

            </div>

            <div class="image">
                <img src="images/about2.webp" alt="">
            </div>

        </div>

    </section>


    <section class="about" id="about">

        <h1 class="heading"><span>OUR</span> VISION</h1>

        <div class="row">

            <div class="image">
                <img src="images/about3.webp" alt="">
            </div>

            <div class="content">
                <h3>Why should you go for 24 Ocean ? </h3>
                <p>We are passionate about creating the perfect skincare for your skin ! To us gently treating your is
                    our biggest moivation. WE have such a unique asset that needs to
                    be embraces and celebrated in all its glory. We know that ourskin needs extra loving and care, why
                    we came into being in the first place !
                </p>
                <p>Providing premium quality natural skincare products is our ultimate aim. Our products are tailored
                    specifically for Indian skin and its needs. It's time to put yourself first and
                    let your skin speak it's own story.
                </p>
                <p>We have spent quite some time picking out the right ingredients that caters to all the needs of your
                    skin AND the best part is, our products are vegan friendly and cruelty free.</p>
                <p>We literally cannot be more happy- that it is ALL NATURAL, our only choice. Our products are made of
                    botanical ingredients and are 100% sulfate, paraben and silicone free.</p>
                <p>We also believe in giving back to the community; we have tied up with an NGO and part of our revenue
                    goes to them, helping in the development of nature and society.
                    We have started to live and practice sustainability and we would like to take you to the other side.
                </p>
            </div>

        </div>

    </section>

    <section class="about" id="about">

        <h1 class="heading"><span>Our </span> Promise</h1>

        <div class="row">


            <div class="content">
                <h3>what are we promising our customers ?</h3>
                <p>It is a pledge that our products are safe, effective, nourishing and kind. We as a brand believe in
                    slow fashion, bringing together the best ingredients and fresh research to provide
                    our customers with prime satisfaction.
                    We promote beauty and nourishment with purpose ! We try hard to protect our relationships by
                    consistently and diligently making natural skin care products that
                    solve problems. We try extra hard to meet the expectations of our customers with every soap bar we
                    cut.

                    We try tolive our lives both in and off our work studio with values that are the pillars of our
                    brand.
                </p>
                <p>We thank all our customers for consiously making the choice of choosing us, we realize that
                    the quality of a premium range of products is what makes our customers come back for more.

                    We show our gratitude by sharing our profits with the very community we live in, by contributing a
                    part of our revenure towards
                    socio-economic development.

                    All our products are sourced and crafted ethically and we take pride in creating custom handmade
                    soaps
                    that help our customers see the true beauty of their skin !
                </p>

            </div>

            <div class="image">
                <img src="images/about6.webp" alt="">
            </div>

        </div>

    </section>



    <!--instagram div add later on-->

    <section class="gallery" id="gallery">

        <h1 class="heading"><span>24OCEAN  </span>IN ACTION</h1>

        <div class="box-container">

            <div class="box">
                <img src="./images/soap1.jpg" alt="">
                <div class="content">
                    <h3>VISIT US ON INSTAGRAM</h3>
                    <p>We are creating a difference with the skincare game on Instagram. With weekly updates on latest
                        deals and more information on how to take care of your skin, we would suggest that you visit and
                        have a look for yourself. Come check out our daily stories, posts and let us be the cheer leader
                        of your skin in Return !!!
                    </p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="./images/soap2.jpg" alt="">
                <div class="content">
                    <h3>VISIT US ON INSTAGRAM</h3>
                    <p>We are creating a difference with the skincare game on Instagram. With weekly updates on latest
                        deals and more information on how to take care of your skin, we would suggest that you visit and
                        have a look for yourself. Come check out our daily stories, posts and let us be the cheer leader
                        of your skin in Return !!!
                    </p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="./images/soap3.jpg" alt="">
                <div class="content">
                    <h3>VISIT US ON INSTAGRAM</h3>
                    <p>We are creating a difference with the skincare game on Instagram. With weekly updates on latest
                        deals and more information on how to take care of your skin, we would suggest that you visit and
                        have a look for yourself. Come check out our daily stories, posts and let us be the cheer leader
                        of your skin in Return !!!
                    </p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="./images/soap4.jpg" alt="">
                <div class="content">
                    <h3>VISIT US ON INSTAGRAM</h3>
                    <p>We are creating a difference with the skincare game on Instagram. With weekly updates on latest
                        deals and more information on how to take care of your skin, we would suggest that you visit and
                        have a look for yourself. Come check out our daily stories, posts and let us be the cheer leader
                        of your skin in Return !!!
                    </p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="./images/soap5.jpg" alt="">
                <div class="content">
                    <h3>VISIT US ON INSTAGRAM</h3>
                    <p>We are creating a difference with the skincare game on Instagram. With weekly updates on latest
                        deals and more information on how to take care of your skin, we would suggest that you visit and
                        have a look for yourself. Come check out our daily stories, posts and let us be the cheer leader
                        of your skin in Return !!!
                    </p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="./images/soap6.jpg" alt="">
                <div class="content">
                    <h3>VISIT US ON INSTAGRAM</h3>
                    <p>We are creating a difference with the skincare game on Instagram. With weekly updates on latest
                        deals and more information on how to take care of your skin, we would suggest that you visit and
                        have a look for yourself. Come check out our daily stories, posts and let us be the cheer leader
                        of your skin in Return !!!
                    </p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="./images/soap7.jpg" alt="">
                <div class="content">
                    <h3>VISIT US ON INSTAGRAM</h3>
                    <p>We are creating a difference with the skincare game on Instagram. With weekly updates on latest
                        deals and more information on how to take care of your skin, we would suggest that you visit and
                        have a look for yourself. Come check out our daily stories, posts and let us be the cheer leader
                        of your skin in Return !!!
                    </p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="./images/soap8.jpg" alt="">
                <div class="content">
                    <h3>VISIT US ON INSTAGRAM</h3>
                    <p>We are creating a difference with the skincare game on Instagram. With weekly updates on latest
                        deals and more information on how to take care of your skin, we would suggest that you visit and
                        have a look for yourself. Come check out our daily stories, posts and let us be the cheer leader
                        of your skin in Return !!!
                    </p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="./images/soap2.jpg" alt="">
                <div class="content">
                    <h3>VISIT US ON INSTAGRAM</h3>
                    <p>We are creating a difference with the skincare game on Instagram. With weekly updates on latest
                        deals and more information on how to take care of your skin, we would suggest that you visit and
                        have a look for yourself. Come check out our daily stories, posts and let us be the cheer leader
                        of your skin in Return !!!
                    </p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

        </div>

    </section>


@endsection
@section('script')
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>


    <script src="{{ asset('assets/js/app.js')}}" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection



