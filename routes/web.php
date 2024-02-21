<?php



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
    return redirect('api/products');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/orders', 'OrderController@create');
Route::get('/orders', 'OrderViewController@index');
Route::get('/orders/{id}', 'OrderViewController@show');
