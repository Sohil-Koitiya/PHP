<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/students',function(){
//     return view('students.home');
// });

Route::get('/',[StudentsController::class,'index']);

Route::get('/create',[StudentsController::class,'create']);

Route::post('/store',[StudentsController::class,'store']);

Route::get('/show/{id}',[StudentsController::class,'show']);

Route::get('/edit/{id}',[StudentsController::class,'edit']);

Route::post('/update/{id}',[StudentsController::class,'update']);

Route::post('/delete/{id}',[StudentsController::class,'delete']);