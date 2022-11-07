<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\AirtimeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ServiceController;

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
})->name('home');
//for airtime
Route::get('airtime', function (){
return view('airtime.index');
})->name('airtime');

Route::any('prev', [AirtimeController::class, 'test'])->name('prev');

Route::post('make-payment', [DataController::class, 'store'])->name('data.store');

//payment
Route::post('payment/checkout', [PaymentController::class, 'checkout'])->name('payment.checkout');

Route::get('/verify', [PaymentController::class, 'verifyPayment'])->name('payment.verify');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('airtime', [AirtimeController::class, 'index'])->name('airtime');
Route::post('airtime/store', [AirtimeController::class, 'store'])->name('airtime.store');


//for displaying list of data
Route::get('data', [DataController::class, 'index'])->name('data');
Route::post('data/validate', [DataController::class, 'validateValues'])->name('data.validate');
Route::post('data/store', [DataController::class, 'store'])->name('data.store');
