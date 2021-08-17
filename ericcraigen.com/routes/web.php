<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\UserAccountController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/')->group(function () {

    Route::get(
        '/',
        [HomeController::class, 'getHomePage']
    )->name('home-page');

    Route::get(
        '/about',
        [HomeController::class, 'getAboutPage']
    )->name('about-page');

    Route::get(
        '/contact',
        [HomeController::class, 'getContactPage']
    )->name('contact-page');

    Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
});

Route::prefix('/account')->group(function () {

    Route::get(
        '/dashboard',
        [UserAccountController::class, 'getDashboard']
    )->middleware(['auth', 'verified'])->name('account.dashboard');

    Route::get(
        '/site-metrics',
        [UserAccountController::class, 'getSiteMetrics']
    )->middleware(['auth', 'verified'])->name('account.site-metrics');

    Route::get(
        '/site-users',
        [UserAccountController::class, 'getSiteUsers']
    )->middleware(['auth', 'verified'])->name('account.site-users');

    Route::get(
        '/profile',
        [UserAccountController::class, 'getUserProfile']
    )->middleware(['auth', 'verified'])->name('account.profile');

    Route::get(
        '/messages',
        [UserAccountController::class, 'getContactMessages']
    )->middleware(['auth', 'verified'])->name('account.contact-messages');

    Route::get(
        '/settings',
        [UserAccountController::class, 'getSettings']
    )->middleware(['auth', 'verified'])->name('account.settings');
});

Route::prefix('/projects')->group(function () {

    Route::get(
        '/',
        [ProjectsController::class, 'getLandingPad']
    )->name('projects-landingPad');
});

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    $message = 'Verification Email Successfully Resent!';
    $alertType = 'success';

    $notification = array(
        'message' => $message,
        'alert-type' => $alertType
    );

    return back()->with($notification);
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


require __DIR__ . '/auth.php';
