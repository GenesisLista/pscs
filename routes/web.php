<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewMemberController;
use App\Http\Controllers\ActiveMemberController;
use App\Http\Controllers\RenewalMemberController;
use App\Http\Controllers\NewMembershipController;

use App\Notifications\SendSoa;

use Carbon\Carbon;

use App\Models\User;

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

// Web Application
Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::prefix('member')->group(function () {
        // Route::post('/new/activate-member', [NewMemberController::class, 'activate_member'])->name('new.activate_member');
        Route::get('/new/approved/{id}', [NewMemberController::class, 'appoved_member'])->name('new.approved_member');
        Route::get('/new/send-soa/{id}/{soa}', [NewMemberController::class, 'send_soa'])->name('new.send_soa');
        Route::get('/new/issue-soa/{id}', [NewMemberController::class, 'issue_soa'])->name('new.issue_soa');
        Route::resource('new', NewMemberController::class);
        
        Route::resource('active', ActiveMemberController::class);
        Route::resource('renewal', RenewalMemberController::class);
    });
    
});

// Web page
Route::get('why-join-us', function () {
    return view('why_join_us');
});

Route::get('member-directory', function () {
    return view('member_directory');
});

Route::get('history', function () {
    return view('history');
});

Route::get('board-of-directors', function () {
    return view('board_of_directors');
});

Route::get('news-and-events', function () {
    return view('news_and_events');
});

Route::get('become-a-member', function () {
    return view('become_a_member');
});

Route::resource('membership', NewMembershipController::class);

// Test notification
Route::get('notification/{uid}', function ($uid) {
    // $user = User::first();
    // $user->notify(new \App\Notifications\SendSoa());
    // return 'GBL ' . $user;

    $when = Carbon::now()->addSeconds(10);
	$user = User::find($uid);
	$user->notify((new \App\Notifications\SendSoa())->delay($when));
	return 'Send ' . $user;
});