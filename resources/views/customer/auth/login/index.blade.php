@extends('website.master')

@section('body')


    <div class="page-content">
        <!-- inner page banner -->
        <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <h1>Login</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"> Home</a></li>
                            <li class="breadcrumb-item">Login</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- inner page banner End-->

        <!-- contact area -->
        <section class="content-inner shop-account">
            <!-- Product -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="login-area">
                            <div class="tab-content">
                                <h4>NEW CUSTOMER</h4>
                                <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                <a class="btn btn-primary btnhover m-r5 button-lg radius-no" href="{{route('customer-registration')}}">CREATE AN ACCOUNT</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="login-area">
                            <div class="tab-content nav">
                                <p class="text-center text-danger">{{session('message')}}</p>
                                <form id="login" class="tab-pane active col-12" action="{{route('customer.customer-login')}}" method="POST">
                                    @csrf
                                    <h4 class="text-secondary">LOGIN</h4>
                                    <p class="font-weight-600">If you have an account with us, please log in.</p>
                                    <div class="mb-4">
                                        <label class="label-title">E-MAIL *</label>
                                        <input name="email" required class="form-control" placeholder="Your Email Id" type="email">
                                    </div>
                                    <div class="mb-4">
                                        <label class="label-title">PASSWORD *</label>
                                        <input name="password" required class="form-control " placeholder="Type Password" type="password">
                                    </div>
                                    <div class="text-left">
                                        <button type="submit" class="btn btn-primary btnhover me-2">login</button>
                                        <a data-bs-toggle="tab" href="#forgot-password" class="m-l5"><i class="fas fa-unlock-alt"></i> Forgot Password</a>
                                    </div>
                                </form>
                                <form id="forgot-password" class="tab-pane fade  col-12">
                                    <h4 class="text-secondary">FORGET PASSWORD ?</h4>
                                    <p class="font-weight-600">We will send you an email to reset your password. </p>
                                    <div class="mb-3">
                                        <label class="label-title">E-MAIL *</label>
                                        <input name="dzName" required="" class="form-control" placeholder="Your Email Id" type="email">
                                    </div>
                                    <div class="text-left">
                                        <a class="btn btn-outline-secondary btnhover m-r10" data-bs-toggle="tab" href="#login">Back</a>
                                        <button class="btn btn-primary btnhover">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product END -->
        </section>
        <!-- contact area End-->
    </div>


@endsection
