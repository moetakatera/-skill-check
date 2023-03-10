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
//ホーム
Route::get('/', function() {
    return view('index');
})->name('index');

//日記一覧
Route::get('/diaries','DiariesController@index')->name('diaries');

//新規投稿
Route::get('/post','PostController@index')->name('post');
Route::post('/post','PostController@postDiary')->name('postDiary');

//日記編集
Route::get('/edit/{id}','EditController@index')->name('edit');
Route::post('/edit/{id}','EditController@editDiary')->name('editDiary');