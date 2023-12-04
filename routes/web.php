<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductContorller;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\SerialNumberController;

Route::group(['as' => 'public.'], function (){
    Route::get('/', function () {
        return view('Pages.Public.index');
    })->name('home');
    Route::get('/about', function () {
        return view('Pages.Public.about');
    })->name('about');
    Route::get('/contact', function () {
        return view('Pages.Public.contact-us');
    })->name('contact');
    Route::get('/product', [ProductContorller::class, 'publicIndex'])->name('product');
    Route::get('/product-detail/{id}', [ProductContorller::class, 'show'])->name('product.detail');
    Route::get('/blog', function () {
        return view('Pages.Public.blog');
    })->name('blog');
    Route::get('/blog-detail', function () {
        return view('Pages.Public.blog-detail');
    })->name('blog.detail');
    Route::get('/terms&condition', function () {
        return view('Pages.Public.termsAndCondition');
    })->name('terms.condition');
    Route::get('/privacy-policy', function () {
        return view('Pages.Public.privacyPolicy');
    })->name('privacy.policy');
    Route::get('/delivery-and-shipping-policy', function () {
        return view('Pages.Public.deliveryAndShippingPolicy');
    })->name('delivery.shipping.policy');
    Route::get('/refund-and-cancellation-policy', function () {
        return view('Pages.Public.refundAndCancellationPolicy');
    })->name('refund.cancellation.policy');
    Route::get('/sitemap', function () {
        return view('Pages.Public.sitemap');
    })->name('sitemap');
    // quality check
    Route::get('/quality-check', function () {
        return view('Pages.Public.qualityCheck');
    })->name('quality.check');
    Route::post('/quality-check', [SerialNumberController::class, 'show'])->name('quality.check.serial');
    // users
    Route::get('/login', [UserController::class, 'index'])->name('login');
    Route::post('/login', [UserController::class, 'submitLogin'])->name('submitLogin');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'submitRegistration'])->name('submitRegistration');

    Route::group(['prefix' => 'account', 'as' => 'account.'], function (){
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        // Address
        Route::get('/address', [AddressController::class, 'index'])->name('address');
        Route::get('/address/add', [AddressController::class, 'create'])->name('address.add');
        Route::post('/address/store', [AddressController::class, 'store'])->name('address.store');
        Route::get('/address/default/{id}', [AddressController::class, 'seDefault'])->name('address.default');
        Route::get('/address/destroy/{id}', [AddressController::class, 'destroy'])->name('address.destroy');
        // orders
        Route::get('/orders', [checkoutController::class, 'orders'])->name('orders');
    });
    // cart
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/checkout', [checkoutController::class, 'index'])->name('checkout');
    Route::post('/checkout-success', [checkoutController::class, 'checkoutAjax'])->name('checkout.success');
    Route::get('/checkout-success', [checkoutController::class, 'successPage'])->name('checkout.success.page');
    Route::post('order-confirmation', [checkoutController::class, 'orderConfirmation'])->name('order.confirmation'); // not in use
});

// Admin Routes // Admin Login
Route::get('admin', [AdminAuthController::class, 'show'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.auth');
// Admin Guarded Routes
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'adminAuth'], function (){
    // Admin Dashboard
    Route::get('/dashboard', function () {
        return view('Pages.Admin.dashboard');
    })->name('dashboard');
    // Admin Products
    Route::group(['prefix' => 'product', 'as' => 'product.'], function (){
        // Admin Products List
        Route::get('/', [ProductContorller::class, 'index'])->name('home');
        // Admin Products Add
        Route::get('/add', [ProductContorller::class, 'create'])->name('create');
        Route::post('/store', [ProductContorller::class, 'store'])->name('store');
        // Admin Products Edit
        Route::get('/edit/{product}', [ProductContorller::class, 'edit'])->name('edit');
        Route::post('/update/{product}', [ProductContorller::class, 'update'])->name('update');
    });
    // admin custom invoice
    Route::group(['prefix' => 'invoice', 'as' => 'invoice.'], function (){
        Route::get('/', [invoiceController::class, 'index'])->name('index');
        Route::get('/pdf', function () {
            return view('Pages.Admin.Invoice.invoice-pdf');
        })->name('pdf');
        Route::get('/add', [invoiceController::class, 'create'])->name('create');
        Route::post('/store', [invoiceController::class, 'store'])->name('store');
        Route::get('/edit/{invoice}', [invoiceController::class, 'edit'])->name('edit');
        Route::post('/update/{invoice}', [invoiceController::class, 'update'])->name('update');
        Route::get('/delete/{invoice}', [invoiceController::class, 'destroy'])->name('delete');
    });

    // Admin Blogs
    Route::group(['prefix' => 'blog', 'as' => 'blog.'], function (){
        // Admin Blogs List
        Route::get('/', function () {
            return view('Pages.Admin.blog');
        })->name('home');
    });

    Route::get('online-orders', [invoiceController::class, 'onlineOrders'])->name('online.orders');
    Route::get('online-order/{id}/delete', [invoiceController::class, 'deleteOnlineOrder'])->name('online.order.delete');

    Route::post('update-invoices', [invoiceController::class, 'updateInvoice'])->name('update.invoices');

    Route::get('view-order/{id}', [checkoutController::class, 'viewOrder'])->name('view.order');

});
Route::get('download/{invoice}', [invoiceController::class, 'download'])->name('download.invoice');
Route::get('test', function () {
    return view('Pages.Admin.Invoice.invoice-pdf-2');
})->name('test');
Route::get('download-online-invoice/{invoice}', [invoiceController::class, 'downloadOnlineInvoice'])->name('download.online.invoice');
