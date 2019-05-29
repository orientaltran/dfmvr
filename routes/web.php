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
Route::get('/', [
    'as'   => 'index',
    'uses' => 'Front\IndexController@index',
]);

Route::post('contact', [
    'as'   => 'contact',
    'uses' => 'Front\ContactController@post',
]);

Route::get('contact', [
    'as'   => 'contact',
    'uses' => 'Front\ContactController@get',
]);

Route::get('news', [
    'as'   => 'news.index',
    'uses' => 'Front\NewsController@index',
]);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
