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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function() {
    return 'Hello World';
});

Route::get('/', function(){
    return 'Selamat Datang';
});

Route::get('/about', function(){
    return ('NIM = 1931710005 Nama = Siti Amalia Fitriani');
});

Route::get('articles/{id}', function($id){
    return 'Halaman artikel dengan id'.$id;
});*/
;
Route::get('/home', 'HomeController@home');
Route::get('/about', 'AboutController@about');
Route::get('/articles/{id}', 'ArticlesController@articles');