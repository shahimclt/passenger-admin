<?php

use Illuminate\Support\Facades\Route;

use Laravel\Fortify\Features;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\ConfirmablePasswordController;
use Laravel\Fortify\Http\Controllers\ConfirmedPasswordStatusController;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use Laravel\Fortify\Http\Controllers\PasswordController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Laravel\Fortify\Http\Controllers\ProfileInformationController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WebsiteController;

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

Route::get('/', [WebsiteController::class,'index']) ->middleware(['guest']);

// Admin Panel

Route::get('/admin', function () {
    return redirect('/admin/home');
})
->middleware(['guest']);
Route::get('/admin/home', function () {
    return view('admin/home');
})
->middleware(['auth']);

Route::group(['prefix' => 'admin'], function() {
    Route::get('photos/create', [PhotoController::class,'create'])->middleware(['auth']);
    Route::resource('photos', PhotoController::class)->except('create')->middleware(['auth']);
});

//Fortify Overrides

Route::group(['middleware' => config('fortify.middleware', ['web'])], function () {
    // Authentication...
    Route::get('admin/login', [AuthenticatedSessionController::class, 'create'])
        ->middleware(['guest'])
        ->name('login');

    $limiter = config('fortify.limiters.login');

    Route::post('/admin/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware(array_filter([
            'guest',
            $limiter ? 'throttle:'.$limiter : null,
        ]))
        ->name('login.post');

    Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    // Password Reset...
    if (Features::enabled(Features::resetPasswords())) {
        Route::get('/admin/forgot-password', [PasswordResetLinkController::class, 'create'])
            ->middleware(['guest'])
            ->name('password.request');

        Route::post('/admin/forgot-password', [PasswordResetLinkController::class, 'store'])
            ->middleware(['guest'])
            ->name('password.email');

        Route::get('/admin/reset-password/{token}', [NewPasswordController::class, 'create'])
            ->middleware(['guest'])
            ->name('password.reset');

        Route::post('/admin/reset-password', [NewPasswordController::class, 'store'])
            ->middleware(['guest'])
            ->name('password.update');
    }

    // Registration...
    if (Features::enabled(Features::registration())) {
        Route::get('/admin/register', [RegisteredUserController::class, 'create'])
            ->middleware(['guest'])
            ->name('register');

        Route::post('/admin/register', [RegisteredUserController::class, 'store'])
            ->middleware(['guest']);
    }

    // Profile Information...
    if (Features::enabled(Features::updateProfileInformation())) {
        Route::put('/admin/user/profile-information', [ProfileInformationController::class, 'update'])
            ->middleware(['auth'])
            ->name('user-profile-information.update');
    }

    // Passwords...
    if (Features::enabled(Features::updatePasswords())) {
        Route::put('/admin/user/password', [PasswordController::class, 'update'])
            ->middleware(['auth'])
            ->name('user-password.update');
    }

    // Password Confirmation...
    Route::get('/admin/user/confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->middleware(['auth'])
        ->name('password.confirm');

    Route::post('/admin/user/confirm-password', [ConfirmablePasswordController::class, 'store'])
        ->middleware(['auth']);

    Route::get('/admin/user/confirmed-password-status', [ConfirmedPasswordStatusController::class, 'show'])
        ->middleware(['auth'])
        ->name('password.confirmation');
});
