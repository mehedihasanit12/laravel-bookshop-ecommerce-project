@extends('website.master')

@section('body')

    <div class="page-content">
        <!-- inner page banner -->
        <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url({{asset('/')}}website/images/background/bg3.jpg);">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <h1>Checkout</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"> Home</a></li>
                            <li class="breadcrumb-item">Checkout</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- inner page banner End-->

        <!-- contact area -->
        <section class="content-inner-1">
            <!-- Product -->
            <div class="container">

                <div class="dz-divider bg-gray-dark text-gray-dark icon-center  my-5"><i class="fa fa-circle bg-white text-gray-dark"></i></div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="widget">
                            <h4 class="widget-title">Your Order</h4>
                            <table class="table-bordered check-tbl">
                                <thead class="text-center">
                                <tr>
                                    <th>IMAGE</th>
                                    <th>PRODUCT NAME</th>
                                    <th>TOTAL</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="product-item-img"><img src="{{asset('/')}}website/images/books/grid/book3.jpg" alt=""></td>
                                    <td class="product-item-name">Prduct Item 5</td>
                                    <td class="product-price">$28.00</td>
                                </tr>
                                <tr>
                                    <td class="product-item-img"><img src="{{asset('/')}}website/images/books/grid/book2.jpg" alt=""></td>
                                    <td class="product-item-name">Prduct Item 4</td>
                                    <td class="product-price">$36.00</td>
                                </tr>
                                <tr>
                                    <td class="product-item-img"><img src="{{asset('/')}}website/images/books/grid/book4.jpg" alt=""></td>
                                    <td class="product-item-name">Prduct Item 3</td>
                                    <td class="product-price">$28.00</td>
                                </tr>
                                <tr>
                                    <td class="product-item-img"><img src="{{asset('/')}}website/images/books/grid/book5.jpg" alt=""></td>
                                    <td class="product-item-name">Prduct Item 2</td>
                                    <td class="product-price">$36.00</td>
                                </tr>
                                <tr>
                                    <td class="product-item-img"><img src="{{asset('/')}}website/images/books/grid/book1.jpg" alt=""></td>
                                    <td class="product-item-name">Prduct Item 1</td>
                                    <td class="product-price">$28.00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="shop-form">
                            <div class="widget">
                                <h4 class="widget-title">Order Total</h4>
                                <table class="table-bordered check-tbl mb-4">
                                    <tbody>
                                    <tr>
                                        <td>Order Subtotal</td>
                                        <td class="product-price">$125.96</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td>Free Shipping</td>
                                    </tr>
                                    <tr>
                                        <td>Coupon</td>
                                        <td class="product-price">$28.00</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td class="product-price-total">$506.00</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Payment Method</h4>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name on Card">
                                </div>
                                <div class="form-group">
                                    <select class="default-select">
                                        <option value="">Credit Card Type</option>
                                        <option value="">Another option</option>
                                        <option value="">A option</option>
                                        <option value="">Potato</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Credit Card Number">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Card Verification Number">
                                </div>
                            </div>
                            <form class=" shop-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="widget">
                                            <h4 class="widget-title">Billing & Shipping Address</h4>
                                            <div class="form-group">
                                                <textarea type="text" class="form-control" placeholder="Address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">

                                    </div>
                                </div>
                            </form>
                            <div class="form-group">
                                <a href="{{route('login')}}" class="btn btn-primary btnhover" type="button">Place Order Now </a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <!-- Product END -->
        </section>
        <!-- contact area End-->
    </div>

@endsection
