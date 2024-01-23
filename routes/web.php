<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BreedController;
use App\Http\Controllers\NarbaAuthController;
use App\Http\Controllers\NarbaAdminController;
use App\Http\Controllers\RabbitProfileController;

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

// Member Authentication 
Route::controller(AuthController::class)->group(function(){
    Route::get('/register', 'create')->name('register-page');
    Route::get('/login', 'login')->name('login-page');
    Route::post('/login', 'authenticate')->name('auth-login');
    Route::post('/register', 'register')->name('auth-register');
    Route::post('/logout', 'logout')->name('logout');
});

// Narba authentication 
Route::controller(NarbaAuthController::class)->group(function(){
    Route::get('/n/register', fn() => view('pages.narba-register'))->name('narba-register-page');
    Route::post('/n/register', 'store')->name('narba-register');
    Route::get('/n/login', fn() => view('pages.narba-login'))->name('narba-login-page');
    Route::post('/n/login', 'authenticate')->name('narba-auth');
    Route::post('/n/logout', 'logout')->name('narba-logout');
});

// Admin route 
Route::middleware(['narba.auth'])->prefix('admin')->group(function(){

    Route::get('/', fn() => view('admin.dashboard.index'))->name('admin-dashboard');

    // Narba admins 
    Route::controller(NarbaAdminController::class)->group(function(){
        Route::get('/narba-admin', 'index' )->name('narba-admin.index');
    });

    // Breed route 
    Route::controller(BreedController::class)->group(function(){
        Route::get('/breed', 'index')->name('breed.index');
        Route::get('/breed/create', 'create')->name('breed.create');
        Route::post('/breed', 'store')->name('breed.store');
        Route::get('/breed/{id}', 'show')->name('breed.show');
        Route::get('/breed/{id}/edit', 'edit')->name('breed.edit');
        Route::put('/breed/{id}', 'update')->name('breed.update');
        Route::delete('/breed/{id}', 'destroy')->name('breed.destroy');
    });
});

// Member route 
Route::middleware('auth')->prefix('member')->group(function(){

    Route::get('/', fn() => view('member.dashboard.index'))->name('member-dashboard');

    // Rabbit Profile
    Route::controller(RabbitProfileController::class)->group(function(){
        Route::get('/rabbit-profile', 'index')->name('rabbit-profile');
        Route::get('/rabbit-profile/create', 'create')->name('rabbit-profile.create');
        Route::post('/rabbit-profile', 'store')->name('rabbit-profile.store');
        Route::get('/rabbit-profile/{id}/edit', 'edit')->name('rabbit-profile.edit');
        Route::get('/rabbit-profile/{id}', 'show')->name('rabbit-profile.show');
        Route::put('/rabbit-profile/{id}', 'update')->name('rabbit-profile.update');
        Route::delete('/rabbit-profile/{id}', 'destroy')->name('rabbit-profile.destroy');
        Route::put('/rabbit-profile/{id}/updateImage', 'updateImage')->name('rabbit-profile.updateImage');
    });
    
    Route::controller(UserController::class)->group(fn() => Route::get('/user', 'index'));

});

Route::fallback(fn() => view('pages.404'))->name('fallback');