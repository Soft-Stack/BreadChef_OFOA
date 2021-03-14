<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controller\CustomerController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/********************************************************
 * Routes of Website
 */
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

/**************************************************************** */