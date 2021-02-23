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
    return redirect('/login');
});

Auth::routes();

Route::get('/shop', 'ShopController@index')->name('shop');
Route::post('/order/{food}', 'UserOrderController@store')->name('storeUserOrder');
Route::get('/order/{order}', 'UserOrderController@show')->name('showUserOrder');
Route::get('/order-history', 'UserOrderController@index')->name('showUserOrderHistory');

//Admin Routes
Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', 'AdminController@dashboard');
    Route::get('/users', 'AdminController@users')->name('users.index');
    Route::post('/users/{user}/edit', 'AdminController@editUser')->name('users.edit');
    Route::put('/users/{user}', 'AdminController@updateUser')->name('users.update');
    Route::delete('/users/{user}', 'AdminController@deleteUser')->name('users.delete');
    //Orders
    Route::get('/orders', 'AdminController@orders')->name('orders.index');
    Route::post('/orders/{order}/edit', 'AdminController@editOrder')->name('orders.edit');
    Route::put('/orders/{order}', 'AdminController@updateOrder')->name('orders.update');
    Route::delete('/orders/{order}', 'AdminController@deleteOrder')->name('orders.delete');
    //Statuses
    Route::get('/statuses', 'AdminController@statuses')->name('statuses.index');
    Route::get('/statuses/create', 'AdminController@createStatus')->name('statuses.create');
    Route::post('/statuses', 'AdminController@storeStatus')->name('statuses.store');
    Route::post('/statuses/{status}/edit', 'AdminController@editStatus')->name('statuses.edit');
    Route::put('/statuses/{status}', 'AdminController@updateStatus')->name('statuses.update');
    Route::delete('/statuses/{status}', 'AdminController@deleteStatus')->name('statuses.delete');
    //Menus
    Route::get('/menus', 'AdminController@menus')->name('menus.index');
    Route::get('/menus/create', 'AdminController@createMenu')->name('menus.create');
    Route::post('/menus', 'AdminController@storeMenu')->name('menus.store');
    Route::post('/menus/{menu}/edit', 'AdminController@editMenu')->name('menus.edit');
    Route::put('/menus/{menu}', 'AdminController@updateMenu')->name('menus.update');
    Route::delete('/menus/{menu}', 'AdminController@deleteMenu')->name('menus.delete');
    //Foods
    Route::get('/foods', 'AdminController@foods')->name('foods.index');
    Route::get('/foods/create', 'AdminController@createFood')->name('foods.create');
    Route::post('/foods', 'AdminController@storeFood')->name('foods.store');
    Route::post('/foods/{food}/edit', 'AdminController@editFood')->name('foods.edit');
    Route::put('/foods/{food}', 'AdminController@updateFood')->name('foods.update');
    Route::delete('/foods/{food}', 'AdminController@deleteFood')->name('foods.delete');

});
