<?php

use Illuminate\Support\Facades\Auth;
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
@include_once('dashboard.php');

Route::get('/', function () {
    return view('pages.home');
});
Route::post('/send_mail',[App\Http\Controllers\HomeController::class,'send_offer_mail'])->name('send_offer_mail');
Auth::routes();
