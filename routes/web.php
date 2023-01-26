<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('email/verify', 'EmailVerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'EmailVerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'EmailVerificationController@resend')->name('verification.resend');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
