<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BreedController;
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

Route::get('/', function(){
    return redirect('member/');
});

// Authentication route 
Route::controller(AuthController::class)->group(function(){
    Route::get('/register', 'create')->name('register-page');
    Route::get('/login', 'login')->name('login-page');
    Route::post('/login', 'authenticate')->name('auth-login');
    Route::post('/register', 'register')->name('auth-register');
    Route::post('/logout', 'logout')->name('logout');
});

// Admin route 
Route::prefix('admin')->group(function(){
    Route::get('/', function(){
        return view('admin.index');
    });
    Route::get('/login', function(){
        return view('admin.login');
    });

    // Breed route 
    Route::controller(BreedController::class)->group(function(){
        Route::get('/breed', 'index');
        Route::get('/breed/create', 'create');
        Route::post('/breed', 'store')->name('breed.store');
        Route::get('/breed/{$id}', 'show');
        Route::get('/breed/edit', 'edit')->name('breed.edit');
        Route::put('/breed/{$id}', 'update')->name('breed.update');
        Route::delete('/breed/{$id}', 'destroy')->name('breed.destroy');
    });
});

// Member route 
Route::middleware('auth')->prefix('member')->group(function(){
    Route::get('/', function(){
        // return redirect('member/rabbit-profile');
        return view('member.pages.dashboard');
    });

    // Rabbit Profile
    Route::controller(RabbitProfileController::class)->group(function(){
        Route::get('/rabbit-profile', 'index');
        Route::get('/rabbit-profile/create', 'create');
        Route::post('/rabbit-profile', 'store')->name('rabbit-profile.store');
        Route::get('/rabbit-profile/{id}/edit', 'edit');
        Route::get('/rabbit-profile/{id}', 'show');
        Route::put('/rabbit-profile/{id}', 'update')->name('rabbit-profile.update');
        Route::delete('/rabbit-profile/{id}', 'destroy')->name('rabbit-profile.destroy');
    });

    Route::controller(UserController::class)->group(function(){
        Route::get('/user', 'index');
    });
});

Route::fallback(function(){
    return view('pages.404');
})->name('fallback');