<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/register', function () {
    return Inertia::render('Auth/Register');
})->name('register');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');

Route::get('/', function () {
    return Inertia::render('Home');
})->middleware('auth')->name('home');

Route::get('/forgot-password', function () {
    return Inertia::render('Auth/ForgotPassword');
})->middleware('guest')->name('password.request');

Route::get('/locations', function () {
    return Inertia::render('Locations/Locations');
});

Route::get('/locations/{id}', function ($id) {
    return Inertia::render('Locations/LocationDetail', ['locationId' => $id]);
});

Route::get('/tours', function () {
    return Inertia::render('Tours/Tours');
});

Route::get('/tours/{id}', function ($id) {
    return Inertia::render('Tours/TourDetail', ['tourId' => $id]);
});

Route::get('/hotels', function () {
    return Inertia::render('Hotels/Hotels');
});

Route::get('/hotels/{id}', function ($id) {
    return Inertia::render('Hotels/HotelDetail', ['hotelId' => $id]);
});

Route::get('/posts', function () {
    return Inertia::render('Posts/Posts');
});

Route::get('/posts/{id}', function ($id) {
    if (!is_numeric($id)) {
        abort(404, 'Bài viết không tồn tại');
    }
    return Inertia::render('Posts/PostDetail', ['postId' => $id]);
});

Route::get('/events/{id}', function ($id) {
    return Inertia::render('Events/EventDetail', ['eventId' => $id]);
});

Route::middleware([
    'auth:sanctum',
    'check-role:admin'
])->get(
    '/dashboard',
    [DashboardController::class, 'index']
)->name('dashboard');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', function () {
        return Inertia::render('Auth/Profile');
    })->name('profile');
});

require __DIR__ . '/auth.php';
