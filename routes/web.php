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
    return redirect(route('collections.index'));
});

Route::resource('collections', 'CollectionController');
#Route::get('collections/{collection}/manage', 'CollectionController@manage')->name('collections.manage');

Route::prefix('api')->group(function () {
    Route::prefix('yugi')->group(function () {
        Route::get('allsets', 'ApiController@getAllSets');
    });
});
