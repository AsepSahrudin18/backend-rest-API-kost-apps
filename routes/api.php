<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// import controller
use App\Http\Controllers\Admin\{
    Fasilitas\FasilitasController,
    Kost\KostController,
    Kota\KotaController,
    Rekomendasi\RekomendasiController,
    Auth\AuthController
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


/**
 * ROUTE KOST API
 */

/**
 * method resource itu sudah membundle semua method yang di buatkan di controllernya
 * get
 * get detail
 * put
 * delete
 * post
 */
Route::middleware('auth:sanctum')->group( function() {
    Route::resource('fasilitas', FasilitasController::class);
    Route::resource('kota', KotaController::class);
    Route::resource('kost', KostController::class);
    Route::resource('rekomendasi', RekomendasiController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
/**
 * Route authentication
 * - register
 * - login
 */
 Route::post('register', [AuthController::class, 'register'])->name('register');
 Route::post('login', [AuthController::class, 'login'])->name('login');