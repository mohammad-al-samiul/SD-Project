<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\NewsController;
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
Route::get('/course', function () {
    return view('course');
});

Route::get('/about-us', function () {
    return view('about_us');
});
/*

Route::get('/news/{id}',function($id){
    return view('news',['newsId' => $id]);
});


Route::get('/category/{id}', function($id){
    return view('category',['category'=> $id]);
});
*/

Route::get('/news/{id}/{abcd}', [NewsController::class, 'news']);

Route::get('/department/create', [DepartmentController::class, 'create']);

Route::post('/department/store', [DepartmentController::class, 'store']);

Route::get('/department/all', [DepartmentController::class, 'all']);

Route::get('/department/edit/{id}', [DepartmentController::class, 'edit']);

Route::post('/department/update/{id}', [DepartmentController::class, 'update']);

Route::get('/department/delete/{id}', [DepartmentController::class, 'delete']);



Route::get('/employee/create', [EmployeeController::class, 'create']);

Route::post('/employee/store', [EmployeeController::class, 'store']);

Route::get('/employee/all', [EmployeeController::class, 'all']);

Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit']);

Route::post('/employee/update/{id}', [EmployeeController::class, 'update']);

Route::get('/employee/delete/{id}', [EmployeeController::class, 'delete']);
