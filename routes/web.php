<?php

use App\Http\Controllers\OpentripController;
use App\Http\Controllers\PrivateTripController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.dashboard');
});
// OpenTrip Controller
Route::get('/OpenTrip', [OpentripController::class, 'index'])->name('opentrip.index');
Route::get('/OpenTrip-Detail-Package/KawahIjen', [OpentripController::class, 'detailOpentrip'])->name('opentrip.detail');
// Private Trip Package
Route::get('/PrivateTripPackage', [PrivateTripController::class, 'index'])->name('privatetrip.index');
Route::get('/PrivateTripPackage-Detail-Package', [PrivateTripController::class, 'detailPrivate'])->name('privatetrip.detail');
