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
    <title>Bookland Book Store Ecommerce Website</title>

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

</head>
<body>

<div class="page-wraper">
    <div id="loading-area" class="preloader-wrapper-1">
        <div class="preloader-inner">
            <div class="preloader-shade"></div>
            <div class="preloader-wrap"></div>
            <div class="preloader-wrap wrap2"></div>
            <div class="preloader-wrap wrap3"></div>
            <div class="preloader-wrap wrap4"></div>
            <div class="preloader-wrap wrap5"></div>
        </div>
    </div>

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
                                <a class="nav-link" href="wishlist.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
                                    <span class="badge">21</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link box cart-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                    <span class="badge">5</span>
                                </button>
                                <ul class="dropdown-menu cart-list">
                                    <li class="cart-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="books-detail.html">
                                                    <img alt="" class="media-object" src="{{asset('/')}}website/images/books/small/pic1.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="dz-title"><a href="books-detail.html" class="media-heading">Real Life</a></h6>
                                                <span class="dz-price">$28.00</span>
                                                <span class="item-close">&times;</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cart-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="books-detail.html">
                                                    <img alt="" class="media-object" src="{{asset('/')}}website/images/books/small/pic2.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="dz-title"><a href="books-detail.html" class="media-heading">Home</a></h6>
                                                <span class="dz-price">$28.00</span>
                                                <span class="item-close">&times;</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cart-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="books-detail.html">
                                                    <img alt="" class="media-object" src="{{asset('/')}}website/images/books/small/pic3.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="dz-title"><a href="books-detail.html" class="media-heading">Such a fun age</a></h6>
                                                <span class="dz-price">$28.00</span>
                                                <span class="item-close">&times;</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cart-item text-center">
                                        <h6 class="text-secondary">Totle = $500</h6>
                                    </li>
                                    <li class="text-center d-flex">
                                        <a href="shop-cart.html" class="btn btn-sm btn-primary me-2 btnhover w-100">View Cart</a>
                                        <a href="shop-checkout.html" class="btn btn-sm btn-outline-primary btnhover w-100">Checkout</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown profile-dropdown  ms-4">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{asset('/')}}website/images/profile1.jpg" alt="/">
                                    <div class="profile-info">
                                        <h6 class="title">Brian</h6>
                                        <span>info@gmail.com</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu py-0 dropdown-menu-end">
                                    <div class="dropdown-header">
                                        <h6 class="m-0">Brian</h6>
                                        <span>info@gmail.com</span>
                                    </div>
                                    <div class="dropdown-body">
                                        <a href="my-profile.html" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                                                <span class="ms-2">Profile</span>
                                            </div>
                                        </a>
                                        <a href="shop-cart.html" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                                <span class="ms-2">My Order</span>
                                            </div>
                                        </a>
                                        <a href="wishlist.html" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
                                                <span class="ms-2">Wishlist</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-footer">
                                        <a class="btn btn-primary w-100 btnhover btn-sm" href="shop-login.html">Log Out</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- header search nav -->
                <div class="header-search-nav">
                    <form class="header-item-search">
                        <div class="input-group search-input">
                            <select class="default-select">
                                <option>Category</option>
                                <option>Photography </option>
                                <option>Arts</option>
                                <option>Adventure</option>
                                <option>Action</option>
                                <option>Games</option>
                                <option>Movies</option>
                                <option>Comics</option>
                                <option>Biographies</option>
                                <option>Children’s Books</option>
                                <option>Historical</option>
                                <option>Contemporary</option>
                                <option>Classics</option>
                                <option>Education</option>
                            </select>
                            <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
                            <button class="btn" type="button"><i class="flaticon-loupe"></i></button>
                        </div>
                    </form>
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
                            <a href="index.html"><img src="{{asset('/')}}website/images/logo.png" alt=""></a>
                        </div>
                        <form class="search-input">
                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
                                <button class="btn" type="button"><i class="flaticon-loupe"></i></button>
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
                                    <li><a href="{{route('product-category')}}">Shop Grid</a></li>
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
                            <li><a href="{{route('product-category')}}">Category</a></li>
                            <li class="sub-menu-down"><a href="javascript:void(0);"><span>All Category</span></a>
                                <ul class="sub-menu">
                                    @foreach($categories as $category)
                                    <li><a href="javascript:void(0);">{{$category->name}} <i class="fa fa-angle-right"></i></a>
                                        <ul class="sub-menu">
                                            @foreach($category->subCategory as $sub_category)
                                            <li><a href="javascript:void(0);">{{$sub_category->name}}</a></li>
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
                            <li><a href="{{route('product-category')}}">Architecture</a></li>
                            <li><a href="{{route('product-category')}}">Art</a></li>
                            <li><a href="{{route('product-category')}}">Action</a></li>
                            <li><a href="{{route('product-category')}}">Biography</a></li>
                            <li><a href="{{route('product-category')}}">Body, Mind & Spirit</a></li>
                            <li><a href="{{route('product-category')}}">Business & Economics</a></li>
                            <li><a href="{{route('product-category')}}">Children Fiction</a></li>
                            <li><a href="{{route('product-category')}}">Children Non-Fiction</a></li>
                            <li><a href="{{route('product-category')}}">Comics & Graphics</a></li>
                            <li><a href="{{route('product-category')}}">Cooking</a></li>
                            <li><a href="{{route('product-category')}}">Crafts & Hobbies</a></li>
                            <li><a href="{{route('product-category')}}">Design</a></li>
                            <li><a href="{{route('product-category')}}">Drama</a></li>
                            <li><a href="{{route('product-category')}}">Education</a></li>
                            <li><a href="{{route('product-category')}}">Family & Relationships</a></li>
                            <li><a href="{{route('product-category')}}">Fiction</a></li>
                            <li><a href="{{route('product-category')}}">Foreign Language</a></li>
                            <li><a href="{{route('product-category')}}">Games</a></li>
                            <li><a href="{{route('product-category')}}">Gardening</a></li>
                            <li><a href="{{route('product-category')}}">Health & Fitness</a></li>
                            <li><a href="{{route('product-category')}}">History</a></li>
                            <li><a href="{{route('product-category')}}">House & Home</a></li>
                            <li><a href="{{route('product-category')}}">Humor</a></li>
                            <li><a href="{{route('product-category')}}">Literary Collections</a></li>
                            <li><a href="{{route('product-category')}}">Mathematics</a></li>
                            <li><a href="{{route('product-category')}}">Medical</a></li>
                            <li><a href="{{route('product-category')}}">Nature</a></li>
                            <li><a href="{{route('product-category')}}">Performing Arts</a></li>
                            <li><a href="{{route('product-category')}}">Pets</a></li>
                            <li><a href="{{route('product-category')}}">Show others</a></li>
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
                            <li><a href="{{route('product-category')}}">Shop</a></li>
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

</body>


</html>
