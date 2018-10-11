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


/*---------------------- Admin Route --------------------*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'Admin\HomeController@index');
});
/*-------------------------------------------------------*/

/*---------------------- Language -----------------------*/
Route::get('/{locale}', function($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
})->name('locale');
/*-------------------------------------------------------*/
