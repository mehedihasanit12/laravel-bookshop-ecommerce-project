<?php

use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookSeriesController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/product-category/{id}', [WebsiteController::class, 'category'])->name('product-category');
Route::get('/product-detail/{id}', [WebsiteController::class, 'product'])->name('product-detail');

//cart

Route::get('/cart/index', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'store'])->name('cart.add');
Route::post('/cart/update/', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');
Route::get('/cart/direct-add/{id}', [CartController::class, 'directAddToCart'])->name('cart.direct-add');

//wishlist

Route::get('/wishlist/index', [WishlistController::class, 'index'])->name('wishlist.index');
Route::post('/wishlist/update/', [WishlistController::class, 'update'])->name('wishlist.update');
Route::get('/wishlist/delete/{id}', [WishlistController::class, 'delete'])->name('wishlist.delete');
Route::get('/wishlist/direct-add/{id}', [WishlistController::class, 'directAddToWishlist'])->name('wishlist.direct-add');

//checkout

Route::get('/checkout/index', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout/new-order', [CheckoutController::class, 'newOrder'])->name('checkout.new-order');
Route::get('/checkout/complete-order', [CheckoutController::class, 'completeOrder'])->name('checkout.complete-order');

//login-registration

Route::get('/customer/login', [CustomerAuthController::class, 'index'])->name('customer-login');
Route::get('/customer/registration', [CustomerAuthController::class, 'registration'])->name('customer-registration');
Route::post('/customer/new-customer', [CustomerAuthController::class, 'newCustomer'])->name('customer.new-customer');
Route::post('/customer/customer-login', [CustomerAuthController::class, 'customerLogin'])->name('customer.customer-login');
Route::get('/customer/customer-logout', [CustomerAuthController::class, 'customerLogout'])->name('customer.customer-logout');

//author

Route::get('/author-detail/{id}', [WebsiteController::class, 'authorDetail'])->name('author-detail');

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',
])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/publisher/index', [PublisherController::class, 'index'])->name('publisher.index');
    Route::get('/publisher/create', [PublisherController::class, 'create'])->name('publisher.create');
    Route::post('/publisher/store', [PublisherController::class, 'store'])->name('publisher.store');
    Route::get('/publisher/edit/{id}', [PublisherController::class, 'edit'])->name('publisher.edit');
    Route::post('/publisher/update/{id}', [PublisherController::class, 'update'])->name('publisher.update');
    Route::get('/publisher/delete/{id}', [PublisherController::class, 'delete'])->name('publisher.delete');

    Route::get('/sub-category/index', [SubCategoryController::class, 'index'])->name('sub-category.index');
    Route::get('/sub-category/create', [SubCategoryController::class, 'create'])->name('sub-category.create');
    Route::get('/sub-category/edit/{id}', [SubCategoryController::class, 'edit'])->name('sub-category.edit');
    Route::post('/sub-category/store', [SubCategoryController::class, 'store'])->name('sub-category.store');
    Route::post('/sub-category/update/{id}', [SubCategoryController::class, 'update'])->name('sub-category.update');
    Route::get('/sub-category/delete/{id}', [SubCategoryController::class, 'delete'])->name('sub-category.delete');

    Route::get('/language/index', [LanguageController::class, 'index'])->name('language.index');
    Route::get('/language/create', [LanguageController::class, 'create'])->name('language.create');
    Route::post('/language/store', [LanguageController::class, 'store'])->name('language.store');
    Route::get('/language/edit/{id}', [LanguageController::class, 'edit'])->name('language.edit');
    Route::post('/language/update/{id}', [LanguageController::class, 'update'])->name('language.update');
    Route::get('/language/delete/{id}', [LanguageController::class, 'delete'])->name('language.delete');

    Route::get('/author/index', [AuthorController::class, 'index'])->name('author.index');
    Route::get('/author/create', [AuthorController::class, 'create'])->name('author.create');
    Route::post('/author/store', [AuthorController::class, 'store'])->name('author.store');
    Route::get('/author/edit/{id}', [AuthorController::class, 'edit'])->name('author.edit');
    Route::post('/author/update/{id}', [AuthorController::class, 'update'])->name('author.update');
    Route::get('/author/delete/{id}', [AuthorController::class, 'delete'])->name('author.delete');

    Route::get('/book-series/index', [BookSeriesController::class, 'index'])->name('book-series.index');
    Route::get('/book-series/create', [BookSeriesController::class, 'create'])->name('book-series.create');
    Route::post('/book-series/store', [BookSeriesController::class, 'store'])->name('book-series.store');
    Route::get('/book-series/edit/{id}', [BookSeriesController::class, 'edit'])->name('book-series.edit');
    Route::post('/book-series/update/{id}', [BookSeriesController::class, 'update'])->name('book-series.update');
    Route::get('/book-series/delete/{id}', [BookSeriesController::class, 'delete'])->name('book-series.delete');

    Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/get-sub-category-by-category', [ProductController::class, 'getSubCategoryByCategory'])->name('get-sub-category-by-category');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');

    Route::get('/book/index', [BookController::class, 'index'])->name('book.index');
    Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
    Route::get('/get-sub-category-by-category', [BookController::class, 'getSubCategoryByCategory'])->name('get-sub-category-by-category');
    Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
    Route::get('/book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
    Route::get('/book/detail/{id}', [BookController::class, 'detail'])->name('book.detail');
    Route::post('/book/update/{id}', [BookController::class, 'update'])->name('book.update');
    Route::get('/book/delete/{id}', [BookController::class, 'delete'])->name('book.delete');

    Route::get('/admin/all-order', [AdminOrderController::class, 'index'])->name('admin.all-order');
    Route::get('/admin/order-detail/{id}', [AdminOrderController::class, 'detail'])->name('admin.order-detail');
    Route::get('/admin/order-edit/{id}', [AdminOrderController::class, 'edit'])->name('admin.order-edit');
    Route::post('/admin/order-update/{id}', [AdminOrderController::class, 'update'])->name('admin.order-update');
    Route::get('/admin/order-invoice/{id}', [AdminOrderController::class, 'invoice'])->name('admin.order-invoice');
    Route::get('/admin/order-invoice-print/{id}', [AdminOrderController::class, 'invoicePrint'])->name('admin.order-invoice-print');
    Route::get('/admin/order-delete/{id}', [AdminOrderController::class, 'delete'])->name('admin.order-delete');

    Route::resource('customer', AdminCustomerController::class);

    Route::resource('courier', CourierController::class);

    Route::resource('user', UserController::class);
});
