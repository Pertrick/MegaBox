<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AirtimeController;

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
});
//for airtime
Route::get('airtime', function (){
return view('airtime.index');
})->name('airtime');

Route::any('prev', [AirtimeController::class, 'preview'])->name('prev');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::post('preview', [AirtimeController::class, 'index'])->name('preview');