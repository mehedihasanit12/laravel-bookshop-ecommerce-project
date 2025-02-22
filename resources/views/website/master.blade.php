<!DOCTYPE html>
<html lang="en">


<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="" />
    <meta name="description" content="Bookland-Book Store Ecommerce Website"/>
    <meta property="og:title" content="Bookland-Book Store Ecommerce Website"/>
    <meta property="og:description" content="Bookland-Book Store Ecommerce Website"/>
    <meta property="og:image" content="social-image.png"/>
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" type="image/x-icon" href="{{asset('/')}}website/images/favicon.png"/>

    <!-- PAGE TITLE HERE -->
    <title>@yield('title')</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/icons/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/icons/themify/themify-icons.css">

    <!-- GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .wishlist-hover:hover{
            background-color: #FF1E6F;
        }
        .hidden{
            display: none;
        }
    </style>

</head>
<body>

<div class="page-wraper">

    @yield('page-loader')

    <!-- Header -->
    <header class="site-header mo-left header style-1">
        <!-- Main Header -->
        <div class="header-info-bar">
            <div class="container clearfix">
                <!-- Website Logo -->
                <div class="logo-header logo-dark">
                    <a href="{{route('home')}}"><img src="{{asset('/')}}website/images/logo.png" alt="logo"></a>
                </div>

                <!-- EXTRA NAV -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <ul class="navbar-nav header-right">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('wishlist.index')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
                                    <span class="badge">{{Cart::instance('wishlist')->content()->count()}}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link box cart-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                    @php($count = 0)
                                    @if(isset($cart_items))
                                        @foreach($cart_items as $cart_item)
                                            @php($count = $loop->iteration)
                                        @endforeach
                                    @endif
                                    <span class="badge">{{$count}}</span>
                                </button>
                                <ul class="dropdown-menu cart-list">
                                    @php($total = 0)
                                    @if(isset($cart_items))
                                    @foreach($cart_items as $cart_item)
                                    <li class="cart-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="{{route('product-detail', ['id' => $cart_item->id])}}">
                                                    <img alt="" class="media-object" src="{{asset($cart_item->options->image)}}">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="dz-title"><a href="{{route('product-detail', ['id' => $cart_item->id])}}" class="media-heading">{{$cart_item->name}}</a></h6>
                                                <span class="dz-price">{{$cart_item->subtotal}}</span>
                                                <a href="{{route('cart.delete', ['id' => $cart_item->rowId])}}"><span class="item-close">&times;</span></a>
                                            </div>
                                        </div>
                                    </li>
                                      @php($total = $total + $cart_item->subtotal)
                                    @endforeach
                                    @endif
                                    <li class="cart-item text-center">
                                        <h6 class="text-secondary">Total = {{$total}}/-</h6>
                                    </li>
                                    <li class="text-center d-flex">
                                        <a href="{{route('cart.index')}}" class="btn btn-sm btn-primary me-2 btnhover w-100">View Cart</a>
                                        <a href="{{route('wishlist.index')}}" class="btn btn-sm btn-outline-primary btnhover w-100">Checkout</a>
                                    </li>
                                </ul>
                            </li>
                            @if(Session::get('id'))
                                <li class="nav-item dropdown profile-dropdown  ms-4">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{asset(Session::get('image'))}}" alt="/">
                                    <div class="profile-info">
                                        <h6 class="title">{{Session::get('name')}}</h6>
                                        <span>{{Session::get('email')}}</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu py-0 dropdown-menu-end">
                                    <div class="dropdown-header">
                                        <h6 class="m-0">{{Session::get('name')}}</h6>
                                        <span>{{Session::get('email')}}</span>
                                    </div>
                                    <div class="dropdown-body">
                                        <a href="{{route('customer.customer-profile')}}" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                                                <span class="ms-2">Profile</span>
                                            </div>
                                        </a>
                                        <a href="{{route('customer.customer-order', ['id' => Session::get('id') ])}}" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                                <span class="ms-2">My Order</span>
                                            </div>
                                        </a>
                                        <a href="{{route('wishlist.index')}}" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
                                                <span class="ms-2">Wishlist</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-footer">
                                        <a class="btn btn-primary w-100 btnhover btn-sm" href="{{route('customer.customer-logout')}}">Log Out</a>
                                    </div>
                                </div>
                            </li>
                            @else
                                <li class="nav-item dropdown profile-dropdown  ms-4">
                                    <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <a href="{{route('customer-login')}}" class="btn btn-primary w-100 btnhover btn-sm me-3">Login</a>
                                        <a href="{{route('customer-registration')}}" class="btn btn-primary w-100 btnhover btn-sm">Registration</a>
                                        <div class="profile-info">

                                        </div>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>

                <!-- header search nav -->
                <div class="header-search-nav">
                    <form action="{{ route('search.search') }}" method="GET" class="header-item-search">
                        <div class="input-group search-input">
                            <select name="category_id"  class="default-select">
                                <option>Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}} </option>
                                @endforeach
                            </select>
                            <input type="text" id="search" name="search" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
                            <button class="btn" type="submit"><i class="flaticon-loupe"></i></button>
                        </div>
                    </form>
                    <div id="ajaxSearchResultDiv" class="hidden" style="padding: 20px;border-radius: 8px;background: white !important; width: 442px;position: absolute;top: 67px;left: 345px;">
                        <ul id="ajaxSearchResult">
                            <li><a href="">Search...</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header End -->

        <!-- Main Header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
                <div class="container clearfix">
                    <!-- Website Logo -->
                    <div class="logo-header logo-dark">
                        <a href="index.html"><img src="{{asset('/')}}website/images/logo.png" alt="logo"></a>
                    </div>

                    <!-- Nav Toggle Button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <!-- EXTRA NAV -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <a href="contact-us.html" class="btn btn-primary btnhover">Get In Touch</a>
                        </div>
                    </div>

                    <!-- Main Nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                        <div class="logo-header logo-dark">
                            <a href="{{route('home')}}"><img src="{{asset('/')}}website/images/logo.png" alt=""></a>
                        </div>
                        <form action="{{ route('search.search') }}" method="GET" class="search-input">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
                                <input type="hidden" name="category_id" value="00" class="form-control" aria-label="Text input with dropdown button" >
                                <button class="btn" type="submit"><i class="flaticon-loupe"></i></button>
                            </div>
                        </form>
                        <ul class="nav navbar-nav">
                            <li class="sub-menu-down"><a href="javascript:void(0);"><span>Home</span></a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu-down"><a href="javascript:void(0);"><span>Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html"><span>About Us</span></a></li>
                                    <li><a href="my-profile.html">My Profile</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="faq.html">FAQ's</a></li>
                                    <li><a href="help-desk.html">Help Desk</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="under-construction.html">Under Construction</a></li>
                                    <li><a href="error-404.html">Error 404</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu-down"><a href="javascript:void(0);"><span>Shop</span></a>
                                <ul class="sub-menu">
                                    <li><a href="">Shop Grid</a></li>
                                    <li><a href="books-grid-view-sidebar.html">Shop Grid Sidebar</a></li>
                                    <li><a href="books-list.html">Shop List</a></li>
                                    <li><a href="books-list-view-sidebar.html">Shop List Sidebar</a></li>
                                    <li><a href="books-detail.html">Shop Detail</a></li>
                                    <li><a href="shop-cart.html">Cart</a></li>
                                    <li><a href="shop-checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="shop-login.html">Login</a></li>
                                    <li><a href="shop-registration.html">Registration</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu-down"><a href="javascript:void(0);"><span>Blog</span></a>
                                <ul class="sub-menu">
                                    <li><a href="javascript:void(0);">Page Layout <i class="fa fa-angle-right"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="javascript:void(0);">No Sidebar <i class="fa fa-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-list-no-sidebar.html">Blog List</a></li>
                                                    <li><a href="blog-grid-no-sidebar.html">Blog Grid</a></li>
                                                    <li><a href="blog-grid-wide.html">Blog Grid Wide</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript:void(0);">2 Columns <i class="fa fa-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-list-right-sidebar.html">Blog List</a></li>
                                                    <li><a href="blog-grid-right-sidebar.html">Blog Grid</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript:void(0);">3 Columns <i class="fa fa-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-list-both-sidebar.html">Blog List</a></li>
                                                    <li><a href="blog-grid-both-sidebar.html">Blog Grid</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);">Blog Sidebar <i class="fa fa-angle-right"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="javascript:void(0);">No Sidebar <i class="fa fa-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-list-no-sidebar.html">Blog List</a></li>
                                                    <li><a href="blog-grid-no-sidebar.html">Blog Grid</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript:void(0);">Left Sidebar <i class="fa fa-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-list-left-sidebar.html">Blog List</a></li>
                                                    <li><a href="blog-grid-left-sidebar.html">Blog Grid</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript:void(0);">Right Sidebar <i class="fa fa-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-list-right-sidebar.html">Blog List</a></li>
                                                    <li><a href="blog-grid-right-sidebar.html">Blog Grid</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript:void(0);">2 Sidebar <i class="fa fa-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-list-both-sidebar.html">Blog List</a></li>
                                                    <li><a href="blog-grid-both-sidebar.html">Blog Grid</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-mega-menu sub-menu-down"><a href="javascript:void(0);">Post Layout</a>
                                <ul class="mega-menu">
                                    <li><a href="javascript:void(0);">Side Bar</a>
                                        <ul>
                                            <li><a href="post-left-sidebar.html">Post Left Sidebar</a></li>
                                            <li><a href="post-right-sidebar.html">Post Right Sidebar</a></li>
                                            <li><a href="post-both-sidebar.html" class="new-badge">Post Both Sidebar <span>New</span></a></li>
                                            <li><a href="post-no-sidebar.html">Post No Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:void(0);">Post Types</a>
                                        <ul>
                                            <li><a href="post-text.html" class="new-badge">Text Post <span>New</span></a></li>
                                            <li><a href="post-image.html"  class="new-badge">Image Post <span>New</span></a></li>
                                            <li><a href="post-video.html">Post Video</a></li>
                                            <li><a href="post-link.html">Post Link</a></li>
                                            <li><a href="post-audio.html">Post Audio</a></li>
                                            <li><a href="post-quote.html">Post Quote</a></li>
                                            <li><a href="post-tutorial.html" class="new-badge">Tutorial Post <span>New</span></a></li>
                                            <li><a href="post-cateloge.html" class="new-badge">Cateloge Post <span>New</span></a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:void(0);">Multiple Media</a>
                                        <ul>
                                            <li><a href="post-banner.html" class="new-badge">Banner <span>New</span></a></li>
                                            <li><a href="post-slide-show.html">Post Slide Show</a></li>
                                            <li><a href="post-gallery.html">Gallery</a></li>
                                            <li><a href="post-status-slider.html" class="new-badge">Status Slider <span>New</span></a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:void(0);">Post Layout Type</a>
                                        <ul>
                                            <li><a href="post-standard.html">Standard Post </a></li>
                                            <li><a href="post-side.html" class="new-badge">Side Post <span>New</span></a></li>
                                            <li><a href="post-corner.html" class="new-badge">Corner Post <span>New</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="">Category</a></li>
                            <li class="sub-menu-down"><a href="javascript:void(0);"><span>All Category</span></a>
                                <ul class="sub-menu">
                                    @foreach($categories as $category)
                                    <li><a href="{{route('product-category', ['id' => $category->id])}}">{{$category->name}} <i class="fa fa-angle-right"></i></a>
                                        <ul class="sub-menu">
                                            @foreach($category->subCategory as $sub_category)
                                            <li><a href="{{route('product-category', ['id' => $sub_category->category_id])}}">{{$sub_category->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                        </ul>
                        <div class="dz-social-icon">
                            <ul>
                                <li><a class="fab fa-facebook-f" target="_blank" href="https://www.facebook.com/dexignzone"></a></li>
                                <li><a class="fab fa-twitter" target="_blank" href="https://twitter.com/dexignzones"></a></li>
                                <li><a class="fab fa-linkedin-in" target="_blank" href="https://www.linkedin.com/showcase/3686700/admin/"></a></li>
                                <li><a class="fab fa-instagram" target="_blank" href="https://www.instagram.com/website_templates__/"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header End -->

    </header>
    <!-- Header End -->

    @yield('body')


</div>

<!-- Footer -->
<footer class="site-footer footer-dark">
    <!-- Footer Category -->
    <div class="footer-category">
        <div class="container">
            <div class="category-toggle">
                <a href="javascript:void(0);" class="toggle-btn">Books categories</a>
                <div class="toggle-items row">
                    <div class="footer-col-book">
                        <ul>
                            @foreach($categories as $category)
                            <li><a href="{{route('product-category', ['id' => $category->id])}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Category End -->

    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="widget widget_about">
                        <div class="footer-logo logo-white">
                            <a href="index.html"><img src="{{asset('/')}}website/images/logo-white.png" alt=""></a>
                        </div>
                        <p class="text">Bookland is a Book Store Ecommerce Website Template by DexignZone lorem ipsum dolor sit</p>
                        <div class="dz-social-icon style-1">
                            <ul>
                                <li><a href="https://www.facebook.com/dexignzone" target="_blank" ><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCGL8V6uxNNMRrk3oZfVct1g" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="https://www.linkedin.com/showcase/3686700/admin/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/website_templates__/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="widget widget_services">
                        <h5 class="footer-title">Our Links</h5>
                        <ul>
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="contact-us.html">Contact us</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="pricing.html">Pricing Table</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="widget widget_services">
                        <h5 class="footer-title">Bookland ?</h5>
                        <ul>
                            <li><a href="index.html">Bookland</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="books-detail.html">Book Details</a></li>
                            <li><a href="blog-detail.html">Blog Details</a></li>
                            <li><a href="">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="widget widget_services">
                        <h5 class="footer-title">Resources</h5>
                        <ul>
                            <li><a href="services.html">Download</a></li>
                            <li><a href="help-desk.html">Help Center</a></li>
                            <li><a href="shop-cart.html">Shop Cart</a></li>
                            <li><a href="shop-login.html">Login</a></li>
                            <li><a href="about-us.html">Partner</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="widget widget_getintuch">
                        <h5 class="footer-title">Get in Touch With Us</h5>
                        <ul>
                            <li>
                                <i class="flaticon-placeholder"></i>
                                <span>832  Thompson Drive, San Fransisco CA 94107,US</span>
                            </li>
                            <li>
                                <i class="flaticon-phone"></i>
                                <span>+123 345123 556<br>
									+123 345123 556</span>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <span>support@bookland.id<br>
									info@bookland.id</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top End -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row fb-inner">
                <div class="col-lg-6 col-md-12 text-start">
                    <p class="copyright-text">Bookland Book Store Ecommerce Website -  © <span class="current-year">2024</span> All Rights Reserved</p>
                </div>
                <div class="col-lg-6 col-md-12 text-end">
                    <p>Made with <span class="heart"></span> by <a href="https://dexignzone.com/">DexignZone</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->

</footer>
<!-- Footer End -->

<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>


<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{asset('/')}}website/js/jquery.min.js"></script><!-- JQUERY MIN JS -->
<script src="{{asset('/')}}website/vendor/wow/wow.min.js"></script><!-- WOW JS -->
<script src="{{asset('/')}}website/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<script src="{{asset('/')}}website/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="{{asset('/')}}website/vendor/bootstrap-touchspin/bootstrap-touchspin.js"></script><!-- BOOTSTRAP TOUCHSPIN JS -->
<script src="{{asset('/')}}website/vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="{{asset('/')}}website/vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="{{asset('/')}}website/vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
<script src="{{asset('/')}}website/js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
<script src="{{asset('/')}}website/js/dz.ajax.js"></script><!-- AJAX -->
<script src="{{asset('/')}}website/js/custom.js"></script><!-- CUSTOM JS -->

<script>
    // ডিবাউন্স ফাংশন
    function debounce(func, delay) {
        let timer;
        return function () {
            clearTimeout(timer);
            timer = setTimeout(() => func.apply(this, arguments), delay);
        };
    }

    $(document).ready(function () {
        $('#search').on('focus', function () {
            $('#ajaxSearchResultDiv').removeClass('hidden');
        });

        $(document).on('click', function (e) {
            if (!$(e.target).closest('#search, #ajaxSearchResult').length) {
                $('#ajaxSearchResultDiv').addClass('hidden');
            }
        });

        // ডিবাউন্স সহ AJAX
        $('#search').on('keyup', debounce(function () {
            var search = $(this).val();

            if (search !== '') {
                $.ajax({
                    type: 'GET',
                    url: '{{ route('search.ajax-search') }}',
                    data: { search: search },
                    dataType: 'JSON',
                    success: function (response) {
                        var item = '';

                        if (response.length === 0) {
                            item += '<li class="text-sm text-gray-500">No results found</li>';
                        } else {
                            $.each(response, function (key, value) {
                                item += `<li style="margin-bottom: 10px">
                                        <img style="width: 50px; height: 50px;" src="${value.image_url}" alt="">
                                        <a href="http://localhost/laravel-bookshop-ecommerce-project/public/product-detail/${value.id}"
                                           class="text-sm text-gray-500 hover:text-black">${value.name} By ${value.author_name}</a>
                                     </li>`;
                            });
                        }

                        $('#ajaxSearchResult').html(item); // `.empty()` এবং `.append()` এর পরিবর্তে `.html()` ব্যবহার করুন
                    }
                });
            } else {
                $('#ajaxSearchResult').empty();
            }
        }, 300)); // 300ms বিলম্ব; প্রয়োজন হলে সময় পরিবর্তন করতে পারেন
    });


</script>

</body>


</html>
