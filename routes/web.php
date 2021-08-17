<?php

use App\Http\Controllers\PublicController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Public 
Route::get('/', [PublicController::class, 'index']);

// UserLogins
Route::middleware(['auth', 'redirectAdmin'])->group(function () {
    Route::prefix('users')->group(function () {
        Route::prefix('profiles')->group(function () {
            Route::get('/', function () {
                return view('members.index');
            });
        });
    });
});

// AdminLogins
Route::middleware(['auth', 'checkAdminLogin'])->group(function () {
    Route::prefix('admins')->group(function () {
        Route::prefix('dashboards')->group(function () {
            Route::get('/', function () {
                return view('admins.index');
            });
        });
    });
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
