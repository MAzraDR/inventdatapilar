<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatapilarController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/register', [AuthController::class, 'viewregister'])->name('register');
Route::get('/login', [AuthController::class, 'viewlogin'])->name('login');
Route::post('/register', [AuthController::class, 'actionregister'])->name('actionregister');
Route::post('/login', [AuthController::class, 'actionlogin'])->name('actionlogin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::group(['middleware', 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('pilar')->name('pilar.')->group(function () {
        Route::get('/create', [DatapilarController::class, 'create'])->name('create');
        Route::post('/', [DatapilarController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [DatapilarController::class, 'edit'])->name('edit');
        Route::put('/{id}', [DatapilarController::class, 'update'])->name('update');
        Route::delete('/{id}', [DatapilarController::class, 'destroy'])->name('destroy');
        // Route::get('/', [DatapilarController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'pilar/kecamatan', 'as' => 'pilar.'], function () {

        Route::get('/index', [DatapilarController::class, 'index'])->name('index');
        Route::get('/blimbing', [DatapilarController::class, 'showBlimbing'])->name('blimbing');
        Route::get('/kedungkandang', [DatapilarController::class, 'showKedungkandang'])->name('kedungkandang');
        Route::get('/klojen', [DatapilarController::class, 'showKlojen'])->name('klojen');
        Route::get('/lowokwaru', [DatapilarController::class, 'showLowokwaru'])->name('lowokwaru');
        Route::get('/sukun', [DatapilarController::class, 'showSukun'])->name('sukun');
    });
});
