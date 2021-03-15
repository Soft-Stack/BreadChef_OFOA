<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controller\CustomerController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\AdminAuthGuard;
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

/********************************************************
 * Routes of Website
 ********************************************************/
Route::get('/', function(){
    return view('website.items');
});

Route::get('/home', function(){
    return view('website.index');
});

Route::get('/inner-page', function () {
    return view('inner-page');
});

Route::get('/shared', function () {
    return view('website.shared');
});

Route::get('/items', function(){
    return view('website.items');
});

Route::get('/bag', function(){
    return view('website.bag');
});

Route::get('/checkout', function(){
    return view('/website.checkout');
});

Route::get('/feedback', function(){
    return view('website.feedback');
});

/**************************************************************** 
 * Routes for dashboard
****************************************************************/
Route::post('/order', 'MainController@placeOrder');

// admin routes
Route::prefix('breadchef-admin')->name('admin.')->group(function () {
        
    Route::get('/login', 'AdminController@login')->name('admin.login');
    Route::post('/login', 'AdminController@login');
    
    Route::middleware(['web', AdminAuthGuard::class])->group(function () {
        Route::get('/', function() {
            return view('admin.home');
        })->name('home');    
        Route::get('/orders', 'AdminController@orders');    
    });
});