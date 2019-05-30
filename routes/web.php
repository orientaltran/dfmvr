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
Route::middleware(['locale'])->group(function () {
    Route::get('locale/{lang}', 'Front\IndexController@changeLocale')->name('locale.change');

    Route::get('/', [
        'as' => 'index',
        'uses' => 'Front\IndexController@index',
    ]);


    Route::post('contact', [
        'as' => 'contact',
        'uses' => 'Front\ContactController@post',
    ]);
    Route::get('contact', [
        'as' => 'contact',
        'uses' => 'Front\ContactController@get',
    ]);


    Route::get('news', [
        'as' => 'news.index',
        'uses' => 'Front\NewsController@index',
    ]);
    Route::get('news/{slug}', [
        'as' => 'news.detail',
        'uses' => 'Front\NewsController@detail',
    ]);
    Route::get('news/category/{slug}', [
        'as' => 'news.category',
        'uses' => 'Front\NewsController@category',
    ]);


    Route::get('project', [
        'as' => 'project.index',
        'uses' => 'Front\ProjectController@index',
    ]);
    Route::get('project/{slug}', [
        'as' => 'project.detail',
        'uses' => 'Front\ProjectController@detail',
    ]);
    Route::get('project/category/{slug}', [
        'as' => 'project.category',
        'uses' => 'Front\ProjectController@category',
    ]);
});

Route::get('page/{slug}', [
    'as'   => 'page.index',
    'uses' => 'Front\PagesController@index',
]);

Route::get('service/{slug}', [
    'as'   => 'service.index',
    'uses' => 'Front\ServiceController@index',
]);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
