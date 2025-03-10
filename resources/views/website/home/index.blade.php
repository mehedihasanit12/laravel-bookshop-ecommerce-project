@extends('website.master')

@section('title')
    Bookland Book Store Ecommerce Website
@endsection

@section('page-loader')
{{--    <div id="loading-area" class="preloader-wrapper-1">--}}
{{--        <div class="preloader-inner">--}}
{{--            <div class="preloader-shade"></div>--}}
{{--            <div class="preloader-wrap"></div>--}}
{{--            <div class="preloader-wrap wrap2"></div>--}}
{{--            <div class="preloader-wrap wrap3"></div>--}}
{{--            <div class="preloader-wrap wrap4"></div>--}}
{{--            <div class="preloader-wrap wrap5"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

@section('body')

    <div class="page-content bg-white">

        <!--Swiper Banner Start -->
        <div class="main-slider style-1">
            <div class="main-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-blue" style="background-image: url({{asset('/')}}website/images/background/waveelement.png);">
                        <div class="container">
                            <div class="banner-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="swiper-content">
                                            <div class="content-info">
                                                <h6 class="sub-title" data-swiper-parallax="-10">BEST SELLER</h6>
                                                <a href="{{route('product-detail', ['id' => $banner_book_one->id])}}"><h1 class="title mb-0" data-swiper-parallax="-20">{{$banner_book_one->name}}</h1></a>
                                                <ul class="dz-tags" data-swiper-parallax="-30">
                                                    <li><a href="{{route('author-detail', ['id' => $banner_book_one->author_id])}}">{{$banner_book_one->author->name}}</a></li>
                                                    <li><a href="javascript:void(0);">{{ json_decode($banner_book_one->tags)[0] ?? '' }}</a></li>
                                                </ul>
                                                <p class="text mb-0" data-swiper-parallax="-40">{{$banner_book_one->short_description}}</p>
                                                <div class="price" data-swiper-parallax="-50">
                                                    <span class="price-num">BDT {{$banner_book_one->selling_price}}</span>
                                                    <del>BDT {{$banner_book_one->regular_price}}</del>
                                                    <span class="badge badge-danger">{{$banner_book_one->discount}}% OFF</span>
                                                </div>
                                                <div class="content-btn" data-swiper-parallax="-60">
                                                    <a class="btn btn-primary btnhover" href="{{route('cart.direct-add', ['id' => $banner_book_one->id])}}">Buy Now</a>
                                                    <a class="btn border btnhover ms-4 text-white" href="{{route('product-detail', ['id' => $banner_book_one->id])}}">See Details</a>
                                                </div>
                                            </div>
                                            <div class="partner">
                                                <p>Our partner</p>
                                                <div class="brand-logo">
                                                    <img src="{{asset('/')}}website/images/partner/partner-1.webp" width="125" height="26" alt="client">
                                                    <img  class="mid-logo" src="{{asset('/')}}website/images/partner/partner-2.png" width="100" height="26" alt="client">
                                                    <img src="{{asset('/')}}website/images/partner/partner-3.jpeg" width="100" height="26" alt="client">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="banner-media" data-swiper-parallax="-100">
                                            <img src="{{asset('/')}}website/images/banner/banner-media.png" alt="banner-media">
                                        </div>
                                        <img class="pattern" src="{{asset('/')}}website/images/Group.png" data-swiper-parallax="-100" alt="dots">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-blue" style="background-image: url({{asset('/')}}website/images/background/waveelement.png);">
                        <div class="container">
                            <div class="banner-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="swiper-content">
                                            <div class="content-info">
                                                <h6 class="sub-title" data-swiper-parallax="-10">BEST SELLER </h6>
                                                <a href="{{route('product-detail', ['id' => $banner_book_two->id])}}"><h1 class="title mb-0" data-swiper-parallax="-20">{{$banner_book_two->name}}</h1></a>
                                                <ul class="dz-tags" data-swiper-parallax="-30">
                                                    <li><a href="{{route('author-detail', ['id' => $banner_book_two->author_id])}}">{{$banner_book_two->author->name}}</a></li>
                                                    <li><a href="javascript:void(0);">{{ json_decode($banner_book_two->tags)[0] ?? '' }}</a></li>
                                                </ul>
                                                <p class="text mb-0" data-swiper-parallax="-40">{{$banner_book_two->short_description}}</p>
                                                <div class="price" data-swiper-parallax="-50">
                                                    <span class="price-num">BDT {{$banner_book_two->selling_price}}</span>
                                                    <del>BDT {{$banner_book_two->regular_price}}</del>
                                                    <span class="badge badge-danger">{{$banner_book_two->discount}}% OFF</span>
                                                </div>
                                                <div class="content-btn" data-swiper-parallax="-60">
                                                    <a class="btn btn-primary btnhover" href="{{route('cart.direct-add', ['id' => $banner_book_two->id])}}">Buy Now</a>
                                                    <a class="btn border btnhover ms-4 text-white" href="{{route('product-detail', ['id' => $banner_book_two->id])}}">See Details</a>
                                                </div>
                                            </div>
                                            <div class="partner">
                                                <p>Our partner</p>
                                                <div class="brand-logo">
                                                    <img src="{{asset('/')}}website/images/partner/partner-1.webp" width="125" height="26" alt="client">
                                                    <img  class="mid-logo" src="{{asset('/')}}website/images/partner/partner-2.png" width="100" height="26" alt="client">
                                                    <img src="{{asset('/')}}website/images/partner/partner-3.jpeg" width="100" height="26" alt="client">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="banner-media" data-swiper-parallax="-100">
                                            <img src="{{asset('/')}}website/images/banner/banner-media3.png" alt="banner-media1">
                                        </div>
                                        <img class="pattern" src="{{asset('/')}}website/images/Group.png" data-swiper-parallax="-100" alt="dots">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container swiper-pagination-wrapper">
                    <div class="swiper-pagination-five"></div>
                </div>
            </div>
            <div class="swiper main-swiper-thumb">
                <div class="swiper-wrapper">
                    @foreach($slider_book as $book)
                    <div class="swiper-slide">
                        <div class="books-card">
                            <div class="dz-media">
                                <a href="{{route('product-detail', ['id' => $book->id])}}"><img src="{{asset($book->image)}}" alt="book"></a>
                            </div>
                            <div class="dz-content">
                                <a href="{{route('product-detail', ['id' => $book->id])}}"><h5 class="title mb-0">{{$book->name}}</h5></a>
                                <div class="dz-meta">
                                    <ul>
                                        <li>by <a href="{{route('author-detail', ['id' => $book->author_id])}}">{{$book->author->name}}</a></li>
                                    </ul>
                                </div>
                                <div class="book-footer">
                                    <div class="price">
                                        <span class="price-num">BDT {{$book->selling_price}}</span>
                                    </div>
                                    <div class="rate">
                                        <i class="flaticon-star text-yellow"></i>
                                        <i class="flaticon-star text-yellow"></i>
                                        <i class="flaticon-star text-yellow"></i>
                                        <i class="flaticon-star text-yellow"></i>
                                        <i class="flaticon-star text-yellow"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--Swiper Banner End-->

        <!-- Client Start-->
        <div class="bg-white py-5">
            <div class="container">
                <!--Client Swiper -->
                <div class="swiper client-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{asset('/')}}website/images/client/client1.svg" alt="client"></div>
                        <div class="swiper-slide"><img src="{{asset('/')}}website/images/client/client2.svg" alt="client"></div>
                        <div class="swiper-slide"><img src="{{asset('/')}}website/images/client/client3.svg" alt="client"></div>
                        <div class="swiper-slide"><img src="{{asset('/')}}website/images/client/client4.svg" alt="client"></div>
                        <div class="swiper-slide"><img src="{{asset('/')}}website/images/client/client5.svg" alt="client"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client End-->

        <!--Recommend Section Start-->
{{--        <section class="content-inner-1 bg-grey reccomend">--}}
{{--            <div class="container">--}}
{{--                <div class="section-head text-center">--}}
{{--                    <h2 class="title">Recomended For You</h2>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>--}}
{{--                </div>--}}
{{--                <!-- Swiper -->--}}
{{--                <div class="swiper-container swiper-two overflow-hidden">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book6.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h4 class="title">Adventure</h4>--}}
{{--                                    <span class="price">$18,78</span>--}}
{{--                                    <a href="shop-cart.html" class="btn btn-secondary btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.2s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book5.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h4 class="title">Take Tango</h4>--}}
{{--                                    <span class="price">$18,78</span>--}}
{{--                                    <a href="shop-cart.html" class="btn btn-secondary btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book2.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h4 class="title">Home</h4>--}}
{{--                                    <span class="price">$18,78</span>--}}
{{--                                    <a href="shop-cart.html" class="btn btn-secondary btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.4s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book16.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h4 class="title">Thunder Stunt</h4>--}}
{{--                                    <span class="price">$18,78</span>--}}
{{--                                    <a href="shop-cart.html" class="btn btn-secondary btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.5s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book14.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h4 class="title">Heavy Lift</h4>--}}
{{--                                    <span class="price">$18,78</span>--}}
{{--                                    <a href="shop-cart.html" class="btn btn-secondary btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.6s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book1.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h4 class="title">Real Life</h4>--}}
{{--                                    <span class="price">$18,78</span>--}}
{{--                                    <a href="shop-cart.html" class="btn btn-secondary btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.7s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book15.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h4 class="title">Terrible</h4>--}}
{{--                                    <span class="price">$18,78</span>--}}
{{--                                    <a href="shop-cart.html" class="btn btn-secondary btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

        <!-- icon-box1 -->
        <section class="content-inner-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-bx-wraper style-1 m-b20 text-center">
                            <div class="icon-bx-sm m-b10">
                                <i class="flaticon-power icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="dz-title m-b10">Quick Delivery</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-bx-wraper style-1 m-b20 text-center">
                            <div class="icon-bx-sm m-b10">
                                <i class="flaticon-shield icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="dz-title m-b10">Secure Payment</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="icon-bx-wraper style-1 m-b20 text-center">
                            <div class="icon-bx-sm m-b10">
                                <i class="flaticon-like icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="dz-title m-b10">Best Quality</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-bx-wraper style-1 m-b20 text-center">
                            <div class="icon-bx-sm m-b10">
                                <i class="flaticon-star icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="dz-title m-b10">Return Guarantee</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- icon-box1 End-->

        <!-- Book Sale -->
{{--        <section class="content-inner-1">--}}
{{--            <div class="container">--}}
{{--                <div class="section-head book-align">--}}
{{--                    <h2 class="title mb-0">Books on Sale</h2>--}}
{{--                    <div class="pagination-align style-1">--}}
{{--                        <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>--}}
{{--                        <div class="swiper-pagination-two"></div>--}}
{{--                        <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="swiper-container books-wrapper-3 swiper-four overflow-hidden">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book5.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h5 class="title"><a href="books-grid-view.html">Take Out Tango</a></h5>--}}
{{--                                    <ul class="dz-tags">--}}
{{--                                        <li><a href="books-grid-view.html">SPORTS,</a></li>--}}
{{--                                        <li><a href="books-grid-view.html">DRAMA</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="book-footer">--}}
{{--                                        <div class="rate">--}}
{{--                                            <i class="flaticon-star"></i> 6.8--}}
{{--                                        </div>--}}
{{--                                        <div class="price">--}}
{{--                                            <span class="price-num">$9.5</span>--}}
{{--                                            <del>$12.0</del>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.2s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book11.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h5 class="title"><a href="books-grid-view.html">The Missadventure</a></h5>--}}
{{--                                    <ul class="dz-tags">--}}
{{--                                        <li><a href="books-grid-view.html">SPORTS,</a></li>--}}
{{--                                        <li><a href="books-grid-view.html">DRAMA</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="book-footer">--}}
{{--                                        <div class="rate">--}}
{{--                                            <i class="flaticon-star"></i> 6.8--}}
{{--                                        </div>--}}
{{--                                        <div class="price">--}}
{{--                                            <span class="price-num">$9.5</span>--}}
{{--                                            <del>$12.0</del>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book7.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h5 class="title"><a href="books-grid-view.html">Seconds [PART 1]</a></h5>--}}
{{--                                    <ul class="dz-tags">--}}
{{--                                        <li><a href="books-grid-view.html">SPORTS,</a></li>--}}
{{--                                        <li><a href="books-grid-view.html">DRAMA</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="book-footer">--}}
{{--                                        <div class="rate">--}}
{{--                                            <i class="flaticon-star"></i> 6.8--}}
{{--                                        </div>--}}
{{--                                        <div class="price">--}}
{{--                                            <span class="price-num">$9.5</span>--}}
{{--                                            <del>$12.0</del>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.4s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book12.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h5 class="title"><a href="books-grid-view.html">The Missadventure</a></h5>--}}
{{--                                    <ul class="dz-tags">--}}
{{--                                        <li><a href="books-grid-view.html">SPORTS,</a></li>--}}
{{--                                        <li><a href="books-grid-view.html">DRAMA</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="book-footer">--}}
{{--                                        <div class="rate">--}}
{{--                                            <i class="flaticon-star"></i> 6.8--}}
{{--                                        </div>--}}
{{--                                        <div class="price">--}}
{{--                                            <span class="price-num">$9.5</span>--}}
{{--                                            <del>$12.0</del>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.5s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book15.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h5 class="title"><a href="books-grid-view.html">Terrible Madness</a></h5>--}}
{{--                                    <ul class="dz-tags">--}}
{{--                                        <li><a href="books-grid-view.html">SPORTS,</a></li>--}}
{{--                                        <li><a href="books-grid-view.html">DRAMA</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="book-footer">--}}
{{--                                        <div class="rate">--}}
{{--                                            <i class="flaticon-star"></i> 6.8--}}
{{--                                        </div>--}}
{{--                                        <div class="price">--}}
{{--                                            <span class="price-num">$9.5</span>--}}
{{--                                            <del>$12.0</del>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.6s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book3.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h5 class="title"><a href="books-grid-view.html">Battle Drive</a></h5>--}}
{{--                                    <ul class="dz-tags">--}}
{{--                                        <li><a href="books-grid-view.html">SPORTS,</a></li>--}}
{{--                                        <li><a href="books-grid-view.html">DRAMA</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="book-footer">--}}
{{--                                        <div class="rate">--}}
{{--                                            <i class="flaticon-star"></i> 6.8--}}
{{--                                        </div>--}}
{{--                                        <div class="price">--}}
{{--                                            <span class="price-num">$9.5</span>--}}
{{--                                            <del>$12.0</del>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- Book Sale End -->

        <!-- Book Sale -->
{{--        <section class="content-inner-1">--}}
{{--            <div class="container">--}}
{{--                <div class="section-head book-align">--}}
{{--                    <h2 class="title mb-0">Thriller Books</h2>--}}
{{--                    <div class="pagination-align style-1">--}}
{{--                        <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>--}}
{{--                        <div class="swiper-pagination-two"></div>--}}
{{--                        <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="swiper-container books-wrapper-3 swiper-four overflow-hidden">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book5.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h5 class="title"><a href="books-grid-view.html">Take Out Tango</a></h5>--}}
{{--                                    <ul class="dz-tags">--}}
{{--                                        <li><a href="books-grid-view.html">SPORTS,</a></li>--}}
{{--                                        <li><a href="books-grid-view.html">DRAMA</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="book-footer">--}}
{{--                                        <div class="rate">--}}
{{--                                            <i class="flaticon-star"></i> 6.8--}}
{{--                                        </div>--}}
{{--                                        <div class="price">--}}
{{--                                            <span class="price-num">$9.5</span>--}}
{{--                                            <del>$12.0</del>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.2s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book11.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h5 class="title"><a href="books-grid-view.html">The Missadventure</a></h5>--}}
{{--                                    <ul class="dz-tags">--}}
{{--                                        <li><a href="books-grid-view.html">SPORTS,</a></li>--}}
{{--                                        <li><a href="books-grid-view.html">DRAMA</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="book-footer">--}}
{{--                                        <div class="rate">--}}
{{--                                            <i class="flaticon-star"></i> 6.8--}}
{{--                                        </div>--}}
{{--                                        <div class="price">--}}
{{--                                            <span class="price-num">$9.5</span>--}}
{{--                                            <del>$12.0</del>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book7.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h5 class="title"><a href="books-grid-view.html">Seconds [PART 1]</a></h5>--}}
{{--                                    <ul class="dz-tags">--}}
{{--                                        <li><a href="books-grid-view.html">SPORTS,</a></li>--}}
{{--                                        <li><a href="books-grid-view.html">DRAMA</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="book-footer">--}}
{{--                                        <div class="rate">--}}
{{--                                            <i class="flaticon-star"></i> 6.8--}}
{{--                                        </div>--}}
{{--                                        <div class="price">--}}
{{--                                            <span class="price-num">$9.5</span>--}}
{{--                                            <del>$12.0</del>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.4s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book12.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h5 class="title"><a href="books-grid-view.html">The Missadventure</a></h5>--}}
{{--                                    <ul class="dz-tags">--}}
{{--                                        <li><a href="books-grid-view.html">SPORTS,</a></li>--}}
{{--                                        <li><a href="books-grid-view.html">DRAMA</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="book-footer">--}}
{{--                                        <div class="rate">--}}
{{--                                            <i class="flaticon-star"></i> 6.8--}}
{{--                                        </div>--}}
{{--                                        <div class="price">--}}
{{--                                            <span class="price-num">$9.5</span>--}}
{{--                                            <del>$12.0</del>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.5s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book15.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h5 class="title"><a href="books-grid-view.html">Terrible Madness</a></h5>--}}
{{--                                    <ul class="dz-tags">--}}
{{--                                        <li><a href="books-grid-view.html">SPORTS,</a></li>--}}
{{--                                        <li><a href="books-grid-view.html">DRAMA</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="book-footer">--}}
{{--                                        <div class="rate">--}}
{{--                                            <i class="flaticon-star"></i> 6.8--}}
{{--                                        </div>--}}
{{--                                        <div class="price">--}}
{{--                                            <span class="price-num">$9.5</span>--}}
{{--                                            <del>$12.0</del>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.6s">--}}
{{--                                <div class="dz-media">--}}
{{--                                    <img src="{{asset('/')}}website/images/books/grid/book3.jpg" alt="book">--}}
{{--                                </div>--}}
{{--                                <div class="dz-content">--}}
{{--                                    <h5 class="title"><a href="books-grid-view.html">Battle Drive</a></h5>--}}
{{--                                    <ul class="dz-tags">--}}
{{--                                        <li><a href="books-grid-view.html">SPORTS,</a></li>--}}
{{--                                        <li><a href="books-grid-view.html">DRAMA</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="book-footer">--}}
{{--                                        <div class="rate">--}}
{{--                                            <i class="flaticon-star"></i> 6.8--}}
{{--                                        </div>--}}
{{--                                        <div class="price">--}}
{{--                                            <span class="price-num">$9.5</span>--}}
{{--                                            <del>$12.0</del>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- Book Sale End -->

        <!--new book -->
                <section class="content-inner-1">
                    <div class="container">
                        <div class="section-head book-align">
                            <h2 class="title mb-0">নতুন বই</h2>
                            <div class="pagination-align style-1">
                                <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                                <div class="swiper-pagination-two"></div>
                                <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                            </div>
                        </div>
                        <div class="swiper-container books-wrapper-3 swiper-four overflow-hidden">
                            <div class="swiper-wrapper">
                                @foreach($new_book as $book)
                                    @if($book->status== 1)
                                        <div class="swiper-slide">
                                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="dz-media">
                                                    <img src="{{asset($book->image)}}" alt="book">
                                                </div>
                                                <div class="dz-content">
                                                    <h5 class="title"><a href="{{route('product-detail', ['id' => $book->id])}}">{{$book->name}}</a></h5>
                                                    <ul class="dz-tags">
                                                        <a href="">{{$book->author->name}}</a>
                                                        {{--                                                        @if (isset($book->tags) && is_array(json_decode($book->tags, true)))--}}
                                                        {{--                                                            @foreach (json_decode($book->tags, true) as $tag)--}}
                                                        {{--                                                                <li><a href="">{{ $tag }}</a></li><br>--}}
                                                        {{--                                                            @endforeach--}}
                                                        {{--                                                        @endif--}}
                                                    </ul>
                                                    <div class="book-footer">
                                                        <div class="rate">
                                                            <i class="flaticon-star"></i> 6.8
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-num">{{$book->selling_price}}</span>
                                                            <del>{{$book->regular_price}}</del>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{route('cart.direct-add', ['id' => $book->id])}}" class="btn btn-secondary mt-3 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else {{' '}}
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>

    <!-- new book End -->

        <!--Home Category One book -->
            @if($home_category_one->status== 1)
                <section class="content-inner-1">
                    <div class="container">
                        <div class="section-head book-align">
                            <h2 class="title mb-0">{{$home_category_one->name}}</h2>
                            <div class="pagination-align style-1">
                                <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                                <div class="swiper-pagination-two"></div>
                                <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                            </div>
                        </div>
                        <div class="swiper-container books-wrapper-3 swiper-four overflow-hidden">
                            <div class="swiper-wrapper">
                                @foreach($home_category_one->book as $book)
                                    @if($book->status== 1)
                                        <div class="swiper-slide">
                                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="dz-media">
                                                    <img src="{{asset($book->image)}}" alt="book">
                                                </div>
                                                <div class="dz-content">
                                                    <h5 class="title"><a href="{{route('product-detail', ['id' => $book->id])}}">{{$book->name}}</a></h5>
                                                    <ul class="dz-tags">
                                                        <a href="">{{$book->author->name}}</a>
                                                        {{--                                                        @if (isset($book->tags) && is_array(json_decode($book->tags, true)))--}}
                                                        {{--                                                            @foreach (json_decode($book->tags, true) as $tag)--}}
                                                        {{--                                                                <li><a href="">{{ $tag }}</a></li><br>--}}
                                                        {{--                                                            @endforeach--}}
                                                        {{--                                                        @endif--}}
                                                    </ul>
                                                    <div class="book-footer">
                                                        <div class="rate">
                                                            <i class="flaticon-star"></i> 6.8
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-num">{{$book->selling_price}}</span>
                                                            <del>{{$book->regular_price}}</del>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{route('cart.direct-add', ['id' => $book->id])}}" class="btn btn-secondary mt-3 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else {{' '}}
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            @else
                {{' '}}
            @endif

    <!--Home Category One book end -->

        <!--Home Category Two book -->
            @if($home_category_two->status== 1)
                <section class="content-inner-1">
                    <div class="container">
                        <div class="section-head book-align">
                            <h2 class="title mb-0">{{$home_category_two->name}}</h2>
                            <div class="pagination-align style-1">
                                <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                                <div class="swiper-pagination-two"></div>
                                <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                            </div>
                        </div>
                        <div class="swiper-container books-wrapper-3 swiper-four overflow-hidden">
                            <div class="swiper-wrapper">
                                @foreach($home_category_two->book as $book)
                                    @if($book->status== 1)
                                        <div class="swiper-slide">
                                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="dz-media">
                                                    <img src="{{asset($book->image)}}" alt="book">
                                                </div>
                                                <div class="dz-content">
                                                    <h5 class="title"><a href="{{route('product-detail', ['id' => $book->id])}}">{{$book->name}}</a></h5>
                                                    <ul class="dz-tags">
                                                        <a href="">{{$book->author->name}}</a>
                                                        {{--                                                        @if (isset($book->tags) && is_array(json_decode($book->tags, true)))--}}
                                                        {{--                                                            @foreach (json_decode($book->tags, true) as $tag)--}}
                                                        {{--                                                                <li><a href="">{{ $tag }}</a></li><br>--}}
                                                        {{--                                                            @endforeach--}}
                                                        {{--                                                        @endif--}}
                                                    </ul>
                                                    <div class="book-footer">
                                                        <div class="rate">
                                                            <i class="flaticon-star"></i> 6.8
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-num">{{$book->selling_price}}</span>
                                                            <del>{{$book->regular_price}}</del>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{route('cart.direct-add', ['id' => $book->id])}}" class="btn btn-secondary mt-3 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else {{' '}}
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            @else
                {{' '}}
            @endif

    <!--Home Category Two book end -->

        <!--Home Category Three book -->
        @if($home_category_three->status== 1)
            <section class="content-inner-1">
                <div class="container">
                    <div class="section-head book-align">
                        <h2 class="title mb-0">{{$home_category_three->name}}</h2>
                        <div class="pagination-align style-1">
                            <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                            <div class="swiper-pagination-two"></div>
                            <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                        </div>
                    </div>
                    <div class="swiper-container books-wrapper-3 swiper-four overflow-hidden">
                        <div class="swiper-wrapper">
                            @foreach($home_category_three->book as $book)
                                @if($book->status== 1)
                                    <div class="swiper-slide">
                                        <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="dz-media">
                                                <img src="{{asset($book->image)}}" alt="book">
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="{{route('product-detail', ['id' => $book->id])}}">{{$book->name}}</a></h5>
                                                <ul class="dz-tags">
                                                    <a href="">{{$book->author->name}}</a>
                                                    {{--                                                        @if (isset($book->tags) && is_array(json_decode($book->tags, true)))--}}
                                                    {{--                                                            @foreach (json_decode($book->tags, true) as $tag)--}}
                                                    {{--                                                                <li><a href="">{{ $tag }}</a></li><br>--}}
                                                    {{--                                                            @endforeach--}}
                                                    {{--                                                        @endif--}}
                                                </ul>
                                                <div class="book-footer">
                                                    <div class="rate">
                                                        <i class="flaticon-star"></i> 6.8
                                                    </div>
                                                    <div class="price">
                                                        <span class="price-num">{{$book->selling_price}}</span>
                                                        <del>{{$book->regular_price}}</del>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{route('cart.direct-add', ['id' => $book->id])}}" class="btn btn-secondary mt-3 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else {{' '}}
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
    @else
        {{' '}}
    @endif

    <!--Home Category Three book end -->

        <!--latest 3 Sub Category book -->
{{--        @foreach($new_sub_categories as $category)--}}
{{--            @if($category->status== 1)--}}
{{--                <section class="content-inner-1">--}}
{{--                    <div class="container">--}}
{{--                        <div class="section-head book-align">--}}
{{--                            <h2 class="title mb-0">{{$category->name}}</h2>--}}
{{--                            <div class="pagination-align style-1">--}}
{{--                                <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>--}}
{{--                                <div class="swiper-pagination-two"></div>--}}
{{--                                <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-container books-wrapper-3 swiper-four overflow-hidden">--}}
{{--                            <div class="swiper-wrapper">--}}
{{--                                @foreach($category->book as $book)--}}
{{--                                    @if($book->status== 1)--}}
{{--                                        <div class="swiper-slide">--}}
{{--                                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                                                <div class="dz-media">--}}
{{--                                                    <img src="{{asset($book->image)}}" alt="book">--}}
{{--                                                </div>--}}
{{--                                                <div class="dz-content">--}}
{{--                                                    <h5 class="title"><a href="{{route('product-detail', ['id' => $book->id])}}">{{$book->name}}</a></h5>--}}
{{--                                                    <ul class="dz-tags">--}}
{{--                                                        <a href="">{{$book->author->name}}</a>--}}
{{--                                                        @if (isset($book->tags) && is_array(json_decode($book->tags, true)))--}}
{{--                                                            @foreach (json_decode($book->tags, true) as $tag)--}}
{{--                                                                <li><a href="">{{ $tag }}</a></li><br>--}}
{{--                                                            @endforeach--}}
{{--                                                        @endif--}}
{{--                                                    </ul>--}}
{{--                                                    <div class="book-footer">--}}
{{--                                                        <div class="rate">--}}
{{--                                                            <i class="flaticon-star"></i> 6.8--}}
{{--                                                        </div>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <span class="price-num">{{$book->selling_price}}</span>--}}
{{--                                                            <del>{{$book->regular_price}}</del>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="d-flex justify-content-center">--}}
{{--                                                            <a href="{{route('cart.direct-add', ['id' => $book->id])}}" class="btn btn-secondary mt-3 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    @else {{' '}}--}}
{{--                                    @endif--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </section>--}}
{{--            @else--}}
{{--                {{' '}}--}}
{{--            @endif--}}
{{--        @endforeach--}}
    <!-- latest 3 Sub Category book End -->


        <!--Start Author Section-->


                <section class="content-inner-1">
                    <div class="container">
                        <div class="section-head book-align">
                            <h2 class="title mb-0">লেখক</h2>
                            <div class="pagination-align style-1">
                                <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                                <div class="swiper-pagination-two"></div>
                                <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                            </div>
                        </div>
                        <div class="swiper-container books-wrapper-3 swiper-four overflow-hidden">
                            <div class="swiper-wrapper">
                                @foreach($authors as $author)
                                    @if($author->status== 1)
                                        <div class="swiper-slide">
                                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="dz-media">
                                                    <img src="{{asset($author->image)}}" style="height: 210px; object-fit: cover" alt="book">
                                                </div>
                                                <div class="dz-content">
                                                    <h5 class="title"><a href="{{route('author-detail', ['id' => $author->id])}}">{{$author->name}}</a></h5>
                                                    <ul class="dz-tags">
                                                        <a href="{{route('author-detail', ['id' => $author->id])}}">{{$author->name}}</a>
                                                        {{--                                                        @if (isset($book->tags) && is_array(json_decode($book->tags, true)))--}}
                                                        {{--                                                            @foreach (json_decode($book->tags, true) as $tag)--}}
                                                        {{--                                                                <li><a href="">{{ $tag }}</a></li><br>--}}
                                                        {{--                                                            @endforeach--}}
                                                        {{--                                                        @endif--}}
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        {{' '}}
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>



        <!--End Author Section-->



        <!--Start Publisher Section-->


        <section class="content-inner-1">
            <div class="container">
                <div class="section-head book-align">
                    <h2 class="title mb-0">প্রকাশনী</h2>
                    <div class="pagination-align style-1">
                        <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="swiper-pagination-two"></div>
                        <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
                <div class="swiper-container books-wrapper-3 swiper-four overflow-hidden">
                    <div class="swiper-wrapper">
                        @foreach($publishers as $publisher)
                            @if($publisher->status== 1)
                                <div class="swiper-slide">
                                    <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="dz-media">
                                            <img src="{{asset($publisher->image)}}" style="height: 210px; object-fit: cover" alt="book">
                                        </div>
                                        <div class="dz-content">
                                            <h5 class="title"><a href="{{route('product-publisher', ['id' => $publisher->id])}}">{{$publisher->name}}</a></h5>
                                            <ul class="dz-tags">
                                                <a href="{{route('product-publisher', ['id' => $publisher->id])}}">{{$publisher->name}}</a>
                                                {{--                                                        @if (isset($book->tags) && is_array(json_decode($book->tags, true)))--}}
                                                {{--                                                            @foreach (json_decode($book->tags, true) as $tag)--}}
                                                {{--                                                                <li><a href="">{{ $tag }}</a></li><br>--}}
                                                {{--                                                            @endforeach--}}
                                                {{--                                                        @endif--}}
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            @else
                                {{' '}}
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>



        <!--End Publisher Section-->



        <!-- Feature Product -->
        <section class="content-inner-1 bg-grey reccomend">
            <div class="container">
                <div class="section-head text-center">
                    <div class="circle style-1"></div>
                    <h2 class="title">Featured Product</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                </div>
            </div>
            <div class="container">
                <div class="swiper-container books-wrapper-2 swiper-three">
                    <div class="swiper-wrapper">
                        @foreach($feature_products as $feature_product)
                            @if($feature_product->status == 1)
                                <div class="swiper-slide">
                                    <div class="books-card style-2">
                                        <div class="dz-media">
                                            <img src="{{asset($feature_product->image)}}" alt="book">
                                        </div>
                                        <div class="dz-content">
                                            <h6 class="sub-title">BEST SELLER</h6>
                                            <h2 class="title">{{$feature_product->name}}</h2>
                                            <ul class="dz-tags">
                                                <li><a href="{{route('author-detail', ['id' => $feature_product->author->id])}}" style="color: #1A1668">{{$feature_product->author->name}}</a></li>
                                                <li><a href="" style="color: #1A1668">{{$feature_product->category->name}}</a></li>
                                            </ul>
                                            <p class="text">{{$feature_product->short_description}}</p>
                                            <div class="price">
                                                <span class="price-num">BDT {{$feature_product->selling_price}}</span>
                                                <del>BDT {{$feature_product->regular_price}}</del>
                                                <span class="badge">{{$feature_product->discount}}% OFF</span>
                                            </div>
                                            <div class="bookcard-footer">
                                                <a href="{{route('cart.direct-add', ['id' => $feature_product->id])}}" class="btn btn-primary btnhover m-t15 m-r10">Buy Now</a>
                                                <a href="{{route('product-detail', ['id' => $feature_product->id])}}" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                {{' '}}
                            @endif
                        @endforeach
                    </div>
                    <div class="pagination-align style-2">
                        <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="swiper-pagination-three"></div>
                        <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature Product End -->

        <!-- Special Offer-->
        <section class="content-inner-2">
            <div class="container">
                <div class="section-head book-align">
                    <h2 class="title mb-0">Special Offers</h2>
                    <div class="pagination-align style-1">
                        <div class="book-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="book-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
                <div class="swiper-container book-swiper overflow-hidden">
                    <div class="swiper-wrapper">
                        @foreach($special_offer as $offer_book)
                            @if($offer_book->status == 1)
                                <div class="swiper-slide">
                                    <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="dz-media">
                                            <a href="{{route('product-detail', ['id' => $offer_book->id])}}"><img src="{{asset($offer_book->image)}}" alt="/"></a>
                                        </div>
                                        <div class="dz-info">
                                            <h4 class="dz-title"><a href="{{route('product-detail', ['id' => $offer_book->id])}}">{{$offer_book->name}}</a></h4>
                                            <div class="dz-meta">
                                                <ul class="dz-tags">
                                                    @foreach(json_decode($offer_book->tags) as $tag)
                                                        <li><a href="{{route('product-category', ['id' => $offer_book->id])}}">{{$tag}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <p>{{$offer_book->short_description}}</p>
                                            <div class="bookcard-footer">
                                                <a href="{{route('cart.direct-add', ['id' => $feature_product->id])}}" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                                <div class="price-details">
                                                    TK {{$offer_book->selling_price}} <del>{{$offer_book->regular_price}}/-</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                {{' '}}
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- Special Offer End -->

        <!-- Testimonial -->
        <section class="content-inner-2 testimonial-wrapper">
            <div class="container">
                <div class="testimonial">
                    <div class="section-head book-align">
                        <div>
                            <h2 class="title mb-0">Testimonials</h2>
                            <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                        <div class="pagination-align style-1">
                            <div class="testimonial-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                            <div class="testimonial-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-container testimonial-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="testimonial-info">
                                <ul class="dz-rating">
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                </ul>
                                <div class="testimonial-text">
                                    <p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
                                </div>
                                <div class="testimonial-detail">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('/')}}website/images/testimonial/testimonial1.jpg" alt="">
                                    </div>
                                    <div class="info-right">
                                        <h6 class="testimonial-name">Jason Huang</h6>
                                        <span class="testimonial-position">Book Lovers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="testimonial-info">
                                <ul class="dz-rating">
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                </ul>
                                <div class="testimonial-text">
                                    <p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
                                </div>
                                <div class="testimonial-detail">
                                    <div class="testimonial-pic radius">
                                        <img src="{{asset('/')}}website/images/testimonial/testimonial2.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="testimonial-name">Miranda Lee</h6>
                                        <span class="testimonial-position">Book Lovers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="testimonial-info">
                                <ul class="dz-rating">
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                </ul>
                                <div class="testimonial-text">
                                    <p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
                                </div>
                                <div class="testimonial-detail">
                                    <div class="testimonial-pic radius">
                                        <img src="{{asset('/')}}website/images/testimonial/testimonial3.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="testimonial-name">Steve Henry</h6>
                                        <span class="testimonial-position">Book Lovers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="testimonial-info">
                                <ul class="dz-rating">
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                </ul>
                                <div class="testimonial-text">
                                    <p>Thank you for filling a niche at an affordable price. Your book was just what I was looking for. Thanks again</p>
                                </div>
                                <div class="testimonial-detail">
                                    <div class="testimonial-pic radius">
                                        <img src="{{asset('/')}}website/images/testimonial/testimonial4.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="testimonial-name">Angela Moss</h6>
                                        <span class="testimonial-position">Book Lovers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="testimonial-info">
                                <ul class="dz-rating">
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                </ul>
                                <div class="testimonial-text">
                                    <p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
                                </div>
                                <div class="testimonial-detail">
                                    <div class="testimonial-pic radius">
                                        <img src="{{asset('/')}}website/images/testimonial/testimonial2.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="testimonial-name">Miranda Lee</h6>
                                        <span class="testimonial-position">Book Lovers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="testimonial-info">
                                <ul class="dz-rating">
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                </ul>
                                <div class="testimonial-text">
                                    <p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
                                </div>
                                <div class="testimonial-detail">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('/')}}website/images/testimonial/testimonial1.jpg" alt="">
                                    </div>
                                    <div class="info-right">
                                        <h6 class="testimonial-name">Jason Huang</h6>
                                        <span class="testimonial-position">Book Lovers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial End -->

        <!-- Latest News -->
        <section class="content-inner-2">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title">Latest News</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
                <div class="swiper-container blog-swiper overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.1s" >
                                <div class="dz-media">
                                    <a href="blog-detail.html"><img src="{{asset('/')}}website/images/blog/grid/blog4.jpg" alt="/"></a>
                                </div>
                                <div class="dz-info p-3">
                                    <h6 class="dz-title">
                                        <a href="blog-detail.html">Benefits of reading: Smart, Diligent, Happy, Intelligent</a>
                                    </h6>
                                    <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod tempor</p>
                                    <div class="dz-meta meta-bottom mt-3 pt-3">
                                        <ul class="">
                                            <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>24 March, 2024</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="dz-media">
                                    <a href="blog-detail.html"><img src="{{asset('/')}}website/images/blog/grid/blog3.jpg" alt="/"></a>
                                </div>
                                <div class="dz-info p-3">
                                    <h6 class="dz-title">
                                        <a href="blog-detail.html">10 Things you must know to improve your reading skills</a>
                                    </h6>
                                    <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod tempor</p>
                                    <div class="dz-meta meta-bottom mt-3 pt-3">
                                        <ul class="">
                                            <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>18 July, 2024</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="dz-media">
                                    <a href="blog-detail.html"><img src="{{asset('/')}}website/images/blog/grid/blog2.jpg" alt="/"></a>
                                </div>
                                <div class="dz-info p-3">
                                    <h6 class="dz-title">
                                        <a href="blog-detail.html">Benefits of reading: Smart, Diligent, Happy, Intelligent</a>
                                    </h6>
                                    <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod tempor</p>
                                    <div class="dz-meta meta-bottom mt-3 pt-3">
                                        <ul class="">
                                            <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 June, 2024</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="dz-media">
                                    <a href="blog-detail.html"><img src="{{asset('/')}}website/images/blog/grid/blog1.jpg" alt="/"></a>
                                </div>
                                <div class="dz-info p-3">
                                    <h6 class="dz-title">
                                        <a href="blog-detail.html">We Must know why reading is important for children?</a>
                                    </h6>
                                    <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod tempor</p>
                                    <div class="dz-meta meta-bottom mt-3 pt-3">
                                        <ul class="">
                                            <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>30 May, 2024</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest News End -->

        <!-- Feature Box -->
        <section class="content-inner">
            <div class="container">
                <div class="row sp15">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                            <div class="icon-bx-lg">
                                <i class="fa-solid fa-users icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h2 class="dz-title counter m-b0">125,663</h2>
                                <p class="font-20">Happy Customers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                            <div class="icon-bx-lg">
                                <i class="fa-solid fa-book icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h2 class="dz-title counter m-b0">50,672</h2>
                                <p class="font-20">Book Collections</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                            <div class="icon-bx-lg">
                                <i class="fa-solid fa-store icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h2 class="dz-title counter m-b0">1,562</h2>
                                <p class="font-20">Our Stores</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                            <div class="icon-bx-lg">
                                <i class="fa-solid fa-leaf icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h2 class="dz-title counter m-b0">457</h2>
                                <p class="font-20">Famous Writers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature Box End -->

        <!-- Newsletter -->
        <section class="py-5 newsletter-wrapper" style="background-image: url('{{asset('/')}}website/images/background/bg1.jpg'); background-size: cover;">
            <div class="container">
                <div class="subscride-inner">
                    <div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
                        <div class="col-xl-7 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="section-head mb-0">
                                <h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books updates</h2>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                            <form class="dzSubscribe style-1" action="https://bookland.dexignzone.com/xhtml/script/mailchamp.php" method="post">
                                <div class="dzSubscribeMsg"></div>
                                <div class="form-group">
                                    <div class="input-group mb-0">
                                        <input name="dzEmail" required="required" type="email" class="form-control bg-transparent text-white" placeholder="Your Email Address">
                                        <div class="input-group-addon">
                                            <button name="submit" value="Submit" type="submit" class="btn btn-primary btnhover">
                                                <span>SUBSCRIBE</span>
                                                <i class="fa-solid fa-paper-plane"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter End -->

@endsection
