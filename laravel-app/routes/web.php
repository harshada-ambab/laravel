<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CrudController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!crud
|
*/

Route::get('/', function () {
    return view('hello');
});
Route::get('user',[UserController::class,'show']);
Route::get('view/{user}',[UserController::class,'load']);

//Crud

Route::get('crud',[CrudController::class,'show']);
Route::get('crud_delete/{id}',[CrudController::class,'destroy']);
Route::get('create',[CrudController::class,'create']);
Route::post('crud_submit',[CrudController::class,'store']);
Route::get('crud_edit/{id}',[CrudController::class,'edit']);
Route::post('crud_update/{id}',[CrudController::class,'update'])->name('update');

//Student

Route::get('student',[StudentController::class,'create']);
Route::post('student_submit',[StudentController::class,'store']);
Route::get('student',[StudentController::class,'show']);
Route::get('student/{id}',[StudentController::class,'destroy']);
Route::get('st_edit/{id}',[StudentController::class,'edit']);
Route::post('st_edit/{id}',[StudentController::class,'update'])->name('update');
Route::get('pagination',[StudentController::class,'index']);