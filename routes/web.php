<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BreedController;
use App\Http\Controllers\NarbaAuthControler;
use App\Http\Controllers\RabbitProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', fn() => redirect('member/'));

// Authentication route 
Route::controller(AuthController::class)->group(function(){
    Route::get('/register', 'create')->name('register-page');
    Route::get('/login', 'login')->name('login-page');
    Route::post('/login', 'authenticate')->name('auth-login');
    Route::post('/register', 'register')->name('auth-register');
    Route::post('/logout', 'logout')->name('logout');
});
Route::controller(NarbaAuthControler::class)->group(function(){
    Route::get('/n/login', 'login')->name('narba-login-page');
    Route::post('/n/login', 'authenticate')->name('narba-auth');
});

// Admin route 
Route::prefix('admin')->group(function(){

    Route::get('/', fn() => view('admin.index'));
    Route::get('/login', fn() => view('admin.login'));

    // Breed route 
    Route::controller(BreedController::class)->group(function(){
        Route::get('/breed', 'index')->name('breed');
        Route::get('/breed/create', 'create')->name('breed.create');
        Route::post('/breed', 'store')->name('breed.store');
        Route::get('/breed/{id}', 'show')->name('breed.show');
        Route::get('/breed/edit', 'edit')->name('breed.edit');
        Route::put('/breed/{id}', 'update')->name('breed.update');
        Route::delete('/breed/{id}', 'destroy')->name('breed.destroy');
    });
});

// Member route 
Route::middleware('auth')->prefix('member')->group(function(){

    Route::get('/', fn() => view('member.pages.dashboard'))->name('member-dashboard');

    // Rabbit Profile
    Route::controller(RabbitProfileController::class)->group(function(){
        Route::get('/rabbit-profile', 'index')->name('rabbit-profile');
        Route::get('/rabbit-profile/create', 'create')->name('rabbit-profile.create');
        Route::post('/rabbit-profile', 'store')->name('rabbit-profile.store');
        Route::get('/rabbit-profile/{id}/edit', 'edit')->name('rabbit-profile.edit');
        Route::get('/rabbit-profile/{id}', 'show')->name('rabbit-profile.show');
        Route::put('/rabbit-profile/{id}', 'update')->name('rabbit-profile.update');
        Route::delete('/rabbit-profile/{id}', 'destroy')->name('rabbit-profile.destroy');
    });

    Route::controller(UserController::class)->group(fn() => Route::get('/user', 'index'));
});

Route::fallback(fn() => view('pages.404'))->name('fallback');