<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/inner-page', function () {
    return view('inner-page');
});

Route::get('/shared', function () {
    return view('shared');
});

Route::get('/items/appetizers', function(){
    return view('items.appetizers');
});

Route::get('/bag', function(){
    return view('bag');
});

Route::post('/order', 'MainController@placeOrder');






// admin routes
// Route::middleware(['web'])->group(function () {
    Route::prefix('breadchef-admin')->name('admin.')->group(function () {
        
        Route::get('/', function() {
            return view('admin.home');
        })->name('home');
        
        Route::get('/orders', function() {
            return view('admin.orders');
        });
    
        Route::get('/login', 'AdminController@login')->name('admin.login');
        Route::post('/login', 'AdminController@login');
    });
// });



