<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StudioController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\ScheduleMovieController;
use App\Http\Controllers\User\DashboardUserController;
use App\Http\Controllers\User\MovieUserController;
use App\Http\Controllers\User\BookingMovieController;

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

Route::get('/', function () {
    return view('welcome');
});

// autentikasi
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// admin
Route::prefix('/dashboard-admin')->middleware('auth')->group(function () {
    // dashboard admin
    Route::get('/', [DashboardAdminController::class, 'index'])->name('dashboard-admin');
    // admin category
    Route::resource('/categories', CategoryController::class);
    // admin studio
    Route::resource('/studios', StudioController::class);
    // admin movie
    Route::resource('/movies', MovieController::class);
    // admin schedule movie
    Route::resource('/schedule-movies', ScheduleMovieController::class);
});

// user
Route::prefix('/dashboard-user')->middleware('auth')->group(function () {
    // dashboard-user
    Route::get('/', [DashboardUserController::class, 'index'])->name('dashboard-user');
    // booking movie
    Route::get('/movies', [MovieUserController::class, 'index'])->name('dashboard-user.movies');
    Route::get('/movies/{movie}', [MovieUserController::class, 'movieShow'])->name('dashboard-user.movies.movieShow');
    Route::get('/movies/{movie}/booking', [BookingMovieController::class, 'booking'])->name('dashboard-user.booking');
    Route::post('/movies/{movie}/booking', [BookingMovieController::class, 'bookingStore'])->name('dashboard-user.bookingStore');
});
