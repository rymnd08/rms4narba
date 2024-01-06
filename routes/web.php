<?php

use App\Http\Controllers\RabbitController;
use App\Http\Controllers\RabbitProfileController;
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

// Admin route 
Route::prefix('admin')->group(function(){
    Route::get('/', function(){
        return view('admin.index');
    });
    Route::get('/login', function(){
        return view('admin.login');
    });
});

// Member route 
Route::prefix('member')->group(function(){
    Route::get('/', function(){
        return view('member.dashboard');
    });
    Route::get('/login', function(){
        return view('member.login');
    });

    // Rabbit Profile
    Route::controller(RabbitProfileController::class)->group(function(){
        Route::get('/rabbit-profile', 'index');
        Route::get('/rabbit-profile/create', 'create');
        Route::post('/rabbit-profile', 'store')->name('rabbit-profile.store');
        Route::get('/rabbit-profile/edit/{id}', 'edit');
        Route::get('/rabbit-profile/{id}', 'show');
        Route::delete('/rabbit-profile/{id}', 'destroy')->name('rabbit-profile.destroy');
        Route::put('/rabbit-profile/{id}', 'update')->name('rabbit-profile.update');
    });
});

Route::fallback(function(){
    return view('pages.404');
});