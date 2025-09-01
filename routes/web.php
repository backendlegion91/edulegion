<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/courses', 'course');
    Route::get('/about', 'about');
    Route::get('/contact', 'contact');
    Route::get('/help', 'help');
    Route::get('/faq', 'faq');
    Route::get('/privacy-policy', 'privacypolicy');
    Route::get('/terms', 'terms');
    Route::get('/eligibility', 'eligibility');
    Route::post('/contact', 'submitContact')->name('contact.submit');
});

/*
|--------------------------------------------------------------------------
| Auth Routes (Login / Register / Password Reset)
|--------------------------------------------------------------------------
*/
// Login / Logout
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Registration + OTP Verification
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('verify-otp', [RegisterController::class, 'showOtpForm'])->name('otp.verify');
Route::post('verify-otp', [RegisterController::class, 'verifyOtp']);

// Forgot Password with OTP
Route::prefix('password')->name('password.')->group(function () {
    Route::get('forgot', [LoginController::class, 'showForgotForm'])->name('request');
    Route::post('forgot', [LoginController::class, 'sendOtp'])->name('email');

    Route::get('otp', [LoginController::class, 'showOtpVerifyForm'])->name('otp');
    Route::post('otp', [LoginController::class, 'verifyResetOtp'])->name('otp.verify');

    Route::get('reset', [LoginController::class, 'showResetForm'])->name('reset');
    Route::post('reset', [LoginController::class, 'resetPassword'])->name('update');
});

/*
|--------------------------------------------------------------------------
| Authenticated + Verified Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {

    // Role-based dashboards
    Route::get('/admin/dashboard', fn () => view('dash.admin'))->middleware('role:admin')->name('admin.dashboard');
    Route::get('/staff/dashboard', fn () => view('dash.staff'))->middleware('role:staff')->name('staff.dashboard');
    Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->middleware('role:user')->name('student.dashboard');
    Route::get('/admin/dashboard', [StudentController::class, 'admindashboard'])->middleware('role:admin')->name('admin.dashboard');

    // Student Application Routes
    Route::middleware('role:user')->prefix('student')->name('student.')->group(function () {
        Route::get('application-form', [StudentController::class, 'showForm'])->name('application.form');
        Route::post('application-submit', [StudentController::class, 'submitForm'])->name('application.submit');
    });

    // Razorpay Payment Routes
    Route::prefix('razorpay')->group(function () {
        Route::post('/success', [PaymentController::class, 'razorpaySuccess'])->name('razorpay.success');
        Route::post('/failed', [PaymentController::class, 'paymentFailed'])->name('payment.failed');
    });

    Route::get('/retry-payment/{student}', [PaymentController::class, 'retryPayment'])->name('retry.payment');
    Route::get('/receipt/download/{payment}', [PaymentController::class, 'downloadReceipt'])->name('receipt.download');

});
