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

/*Route::get('hello', function() {
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

Route::get('/', function () {
    return view('welcome');
}); //JANGAN DI KOMEN NANTI GABISA AKSES LOCALHOST:8000
/*Route::get('/about', function(){
    return view('about');
});

Route::get('/home', 'HomeController@home');
Route::get('/about', 'AboutController@about');
Route::get('/articles/{id}', 'ArticlesController@articles');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/articles/{id}', 'ArticlesController@index')->name('articles');