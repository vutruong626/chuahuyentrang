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
    // return view('welcome');
});
Route::prefix('/')->group(function () {
    Route::get('/','Frontend\\PagesController@index')->name('index');
    Route::get('/lien-he','Frontend\\PagesController@Contact')->name('contact');
    
    
    // Information
    Route::get('/tieu-su-su-to','Frontend\\InformationController@Story')->name('story');
    Route::get('/chua-huyen-trang','Frontend\\InformationController@ChuaHuyenTrang')->name('chuahuyentrang');
    Route::get('/thong-bao','Frontend\\InformationController@Notification')->name('notification');

    // NEWS
    Route::get('/tin-tuc.html','Frontend\\NewsController@News')->name('news');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
