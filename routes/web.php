<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/introduction', function(){
return view("introduction");
});

Route::middleware('auth:sanctum')->get('/user', function(Request $request) {
return $request->user();
});

Route::get('/testroute', function() {
return view('testroute'); // This returns the View Files, within our views folder, which displays this file IF an users directd into /testroute URL. 
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('create', [studentController::class, 'inputForm']);

Route::get('/list', [studentController::class, 'showStudents']);

Route::delete('students/{id}', [studentController::class, 'destroy'])->name('students.destroy');

Route::put('students/{id}', [studentController::class, 'update'])->name('students.update');