<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\StudentController;

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
route::resource("promotion",PromotionController::class);

// Route::get('search',[PromotionController::class,'search']);
route::resource("student",StudentController::class);
// Route::get('/student/create/{id}',[StudentsController::class,'create']);

// Route::get('/student/index',[StudentsController::class,'index']);
// Route::get('/student/create/{id}',[StudentsController::class,'create']);
// Route::post('/student/store',[StudentsController::class,'store']);














// Route::prefix('student')->group(function(){
//     Route::controller(StudentController::class)->group(function(){

//         Route::get('/','index');
//         // Route::get('/create',[StudentController::class,'create']);
//         // Route::post('/create',[StudentController::class,'store']);
//         // Route::get('/edit/{id}',[StudentController::class,'edit']);
//         // Route::put('/edit/{id}',[StudentController::class,'update']);
//         // Route::delete('/delete/{id}',[StudentController::class,'destroy']);
//         // Route::post('/store',[StudentController::class,'store']);
//         // Route::post('/update',[StudentController::class,'update']);


//     });

// });
