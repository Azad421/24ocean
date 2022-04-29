@extends('layouts.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/skin--types.css') }}">
@endsection
@section('content')
    <section>
        <div class="container"
             style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.7)), url({{ asset('./images/soap1.jpg') }});">
            <div class="row">
                <div class="col">
                    <h1>KNOW YOUR SKIN</h1>

                    <p> want to know more about your skin and skintype? The truth is that it's actually pretty simple.
                        A lot of people don't really know what their SKIN looks like, We're here to help!
                        Like me (and everyone else) these days, most people want something good in return ; this makes
                        us often assume we can always order anything that says one size fits all but the fact is,
                        everyone has there skincare needs
                        Click on the link below to learn a little bit about yourself
                        and find out how we can make this experience even better.</p>
                    <a href="https://www.cerave.com/skin-smarts/skincare-tips-advice/what-skin-type-do-i-have#:~:text=If%20after%2030%20minutes%20your,you%20likely%20have%20normal%20skin."
                       class="btn">KNOW MORE</a>
                </div>
                <div class="col_new">
                    @foreach($categories as $category)
                        <div class="card card1" style="background-image: url({{ asset('/images/soap2.jpg') }});">
                            <a href="#{{$category->name}}"><h5>{{ $category->name }}</h5></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!--bath and body section starts here-->
    @foreach($categories as $category)
        <section class="menu" id="{{$category->name}}" id="section">
            <h1 class="heading">{{ $category->name }}</h1>

            <div class="box-container">
                @foreach($category->products->where('status', \App\Models\ProductStatus::where('nickname', 'active')->first()['id']) as $product)
                    <div class="box" data-name="product-{{ $product->id }}">
                        <img src="{{ asset('images/'.$product->image)  }}" alt="{{ $product->name }}">
                        <h3>{{ $product->name }}</h3>
                        <div class="price">{{ price($product->price) }}</div>
                        <p>CLICK TO VIEW</p>
                    </div>
                @endforeach
            </div>
            <div class="load-more"><span class="btn">load more</span></div>
        </section>
    @endforeach

    <section class="food-preview-container">

        <div id="close-preview" class="fas fa-times"></div>
        @foreach($categories as $category)
            @foreach($category->products->where('status', \App\Models\ProductStatus::where('nickname', 'active')->first()['id']) as $product)
                <div class="food-preview" data-target="product-{{ $product->id }}">
                    <img src="{{ asset('images/'.$product->image)  }}" alt="{{ $product->name }}">
                    <h3>{{ $product->name }}</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p> {{ $product->description }}</p>
                    <div class="price">{{ price($product->price) }}</div>
                    <a href="#" class="btn">buy now</a>
                </div>
            @endforeach
        @endforeach
    </section>










@endsection
@section('script')
    <script src="{{ asset('assets/js/skintype.js') }}"></script>
    <script src="{{ asset('assets/js/skintypetwo.js') }}"></script>
@endsection
