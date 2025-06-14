<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\LocationController;

use App\Http\Controllers\PostController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Public routes
Route::post('register', [AuthController::class, 'register']);
Route::get('locations', [LocationController::class, 'index']);
Route::get('locations/{id}', [LocationController::class, 'show']);
Route::get('hotels', [HotelController::class, 'index']);
Route::get('hotels/{hotel}', [HotelController::class, 'show']);
Route::get('tours', [TourController::class, 'index']);
Route::get('tours/{tour}', [TourController::class, 'show']);
Route::get('posts', [PostController::class, 'index']);
Route::get('posts/{post}', [PostController::class, 'show']);
Route::post('forgot-password', [AuthController::class, 'forgotPassword']);
Route::get('videos', [VideoController::class, 'index']);
Route::get('search', [SearchController::class, 'search']);
Route::get('events', [EventController::class, 'index']);
Route::get('events/{id}', [EventController::class, 'show']);

// Authenticated routes
Route::middleware('auth:sanctum')->group(function () {
    // Auth
    Route::get('user', [AuthController::class, 'user']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('user', [AuthController::class, 'update']);
    Route::post('change-password', [AuthController::class, 'changePassword']);
    Route::get('user/posts', [AuthController::class, 'getUserPosts']);
    Route::post('posts', [PostController::class, 'store']);
    Route::get('locations', [LocationController::class, 'index']);


    // Posts
    Route::apiResource('posts', PostController::class)->only(['store', 'update', 'destroy']);

    // Comments
    Route::get('posts/{post}/comments', [CommentController::class, 'index']);
    Route::post('posts/{post}/comments', [CommentController::class, 'store']);
    Route::delete('comments/{comment}', [CommentController::class, 'destroy']);

    // Likes
    Route::post('posts/{post}/like', [LikeController::class, 'toggle']);

    // Bookings
    Route::apiResource('bookings', BookingController::class)->only(['index', 'store', 'destroy']);

    // Ratings
    Route::apiResource('ratings', RatingController::class)->only(['index', 'store', 'destroy']);
});

// Admin routes
Route::middleware(['auth:sanctum', 'admin'])->prefix('admin')->group(function () {
    Route::delete('posts/{post}', [PostController::class, 'adminDestroy']);
    Route::delete('comments/{comment}', [CommentController::class, 'adminDestroy']);
    Route::put('comments/{comment}', [CommentController::class, 'adminUpdate']);
    Route::put('bookings/{booking}', [BookingController::class, 'adminUpdate']);
    Route::delete('bookings/{booking}', [BookingController::class, 'adminDestroy']);
    Route::put('users/{user}/toggle-active', [UserController::class, 'toggleActive']);
    Route::apiResource('locations', LocationController::class)->only(['store', 'update', 'destroy']);
});

Route::middleware(['auth:sanctum', 'check-role:admin'])->group(function () {
    Route::get('/admin/stats', [AdminController::class, 'stats']);
    Route::get('/posts/pending', [PostController::class, 'pending']);
    Route::put('/posts/{id}/approve', [PostController::class, 'approve']);
    Route::delete('/posts/{id}', [PostController::class, 'destroy']);
});

// Hotel
Route::middleware(['auth:sanctum', 'can:manage-hotels'])->group(function () {
    Route::post('hotels', [HotelController::class, 'store']);
    Route::put('hotels/{hotel}', [HotelController::class, 'update']);
    Route::delete('hotels/{hotel}', [HotelController::class, 'destroy']);
});

// Tour
Route::middleware(['auth:sanctum', 'can:manage-tours'])->group(function () {
    Route::post('tours', [TourController::class, 'store']);
    Route::put('tours/{tour}', [TourController::class, 'update']);
    Route::delete('tours/{tour}', [TourController::class, 'destroy']);
});
