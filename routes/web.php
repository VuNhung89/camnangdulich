<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// ✅ Auth
Route::get('/register', fn() => Inertia::render('Auth/Register'))->name('register');
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');
Route::middleware('auth')->post('/posts', [PostController::class, 'store']);
Route::middleware('auth')->delete('/posts/{post}', [PostController::class, 'destroy']);
Route::middleware('auth')->get('/user/posts', function () {
    return response()->json(
        Post::with('location')->where('user_id', auth()->id())->latest()->get()
    );
});

// ✅ Trang chủ
Route::get('/', fn() => Inertia::render('Home'))->middleware('auth')->name('home');

// ✅ Các trang public
Route::post('/register', [AuthController::class, 'register']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::get('/forgot-password', fn() => Inertia::render('Auth/ForgotPassword'))->middleware('guest')->name('password.request');
Route::get('/locations', fn() => Inertia::render('Locations/Locations'));
Route::get('/locations/{id}', fn($id) => Inertia::render('Locations/LocationDetail', ['locationId' => $id]));
Route::get('/tours', fn() => Inertia::render('Tours/Tours'));
Route::get('/tours/{id}', fn($id) => Inertia::render('Tours/TourDetail', ['tourId' => $id]));
Route::get('/hotels', fn() => Inertia::render('Hotels/Hotels'));
Route::get('/hotels/{id}', fn($id) => Inertia::render('Hotels/HotelDetail', ['hotelId' => $id]));
Route::get('/posts', fn() => Inertia::render('Posts/Posts'));
Route::get('/posts/{id}', fn($id) => is_numeric($id)
    ? Inertia::render('Posts/PostDetail', ['postId' => $id])
    : abort(404, 'Bài viết không tồn tại'));
Route::get('/events/{id}', fn($id) => Inertia::render('Events/EventDetail', ['eventId' => $id]));

// ✅ Dashboard admin
Route::middleware(['auth', 'check-role:admin'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// ✅ Hồ sơ cá nhân – dùng ProfileController
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'update']);
    Route::post('/change-password', [ProfileController::class, 'changePassword']);
});

require __DIR__ . '/auth.php';
