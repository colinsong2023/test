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
    return view('welcome');
});


Route::resource('post', 'PostController');

Route::get('/upload', 'FileUploadController@uploadForm')->name('upload.form');
Route::post('/upload', 'FileUploadController@uploadSubmit')->name('upload.submit');
