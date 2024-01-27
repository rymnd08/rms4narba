<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BreedController;
use App\Http\Controllers\NarbaAuthController;
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
    
    Route::prefix('n')->group(function () {
        Route::get('/', fn() => redirect()->route('narba-login-page'));
        Route::get('/register', fn() => view('pages.narba-register'))->name('narba-register-page');
        Route::post('/register', 'store')->name('narba-register');
        Route::get('/login', fn() => view('pages.narba-login'))->name('narba-login-page');
        Route::post('/login', 'authenticate')->name('narba-auth');
        Route::post('/logout', 'logout')->name('narba-logout');
    });
});

// Admin route 
Route::prefix('admin')->group(function(){

    Route::get('/', fn() => view('admin.dashboard.index'))->name('admin-dashboard');

    // Admin user route 
    Route::controller(AdminController::class)->group(function(){
        Route::get('/narba-admin', 'index')->name('narba-admin.index');
        Route::get('/narba-admin/create', 'create')->name('narba-admin.create');
        Route::post('/narba-admin', 'store')->name('narba-admin.store');
        Route::get('/narba-admin/{admin}', 'show')->name('narba-admin.show');
        Route::get('/narba-admin/{admin}/edit', 'edit')->name('narba-admin.edit');
        Route::put('/narba-admin/{admin}', 'update')->name('narba-admin.update');
        Route::delete('/narba-admin/{admin}', 'destroy')->name('narba-admin.destroy');
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
Route::group(['middleware' => 'auth', 'prefix' => 'member'], function(){

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
    
    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index')->name('user.index');
        Route::get('/user/create', 'create')->name('user.create');
        Route::post('/user', 'store')->name('user.store');
    });

});

Route::fallback(fn() => view('pages.404'))->name('fallback');