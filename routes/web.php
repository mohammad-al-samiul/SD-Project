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
Route::get('/course', function() {
    return view('course');
});

Route::get('/about-us', function() {
    return view('about_us');
});

Route::get('/news/{id}',function($id){
    return view('news',['newsId' => $id]);
});


Route::get('/category/{id}', function($id){
    return view('category',['category'=> $id]);
});