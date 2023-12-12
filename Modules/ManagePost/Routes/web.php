<?php

use Illuminate\Support\Facades\Route;
use Modules\ManagePost\Http\Controllers\PostController;
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

// Route::prefix('managepost')->group(function () {
//     Route::get('/', 'ManagePostController@index');
// });
Route::prefix('post')->group(function () {
    Route::get('/', 'postController@index');
    Route::get('/', 'postController@show')->name('post.show');
    Route::post('/', 'postController@store')->name('post.store');
    Route::get('/{slug}', 'postController@showdetail')->name('showdetail');
});
