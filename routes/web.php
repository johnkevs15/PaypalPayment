<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaypalController;

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
// Route::get('/', function () {
//     return view('paypal-view');
// });

Route::get('createpaypal',[PaypalController::class,'createpaypal'])->name('createpaypal');
Route::get('processpaypal',[PaypalController::class,'processpaypal'])->name('processpaypal');
Route::get('processSuccess',[PaypalController::class,'processSuccess'])->name('processSuccess');
Route::get('processCancel',[PaypalController::class,'processCancel'])->name('processCancel');


