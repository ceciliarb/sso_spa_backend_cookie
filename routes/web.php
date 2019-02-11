<?php

use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware('openid.login')->get('/login', function() {
//     return 'ok';
// })->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/user', 'UserController@info');
});

Route::get('/{any}', function(){
    return view('vueapp');
})->where('any', '.*');

// Route::middleware('auth')->group(function () {
//     Route::get('/home', function () {
//         return view('home');
//     });

//     Route::get('/infousu', function () {
//         $u = json_encode(Auth::user()->toArray());
//         return view('info', compact('u'));
//     });
// });



