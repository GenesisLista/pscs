<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewMemberController;
use App\Http\Controllers\ActiveMemberController;
use App\Http\Controllers\RenewalMemberController;

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

Auth::routes();

Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::resource('/member/new', NewMemberController::class);
    Route::resource('/member/active', ActiveMemberController::class);
    Route::resource('/member/renewal', RenewalMemberController::class);
});