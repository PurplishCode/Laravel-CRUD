<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;


Route::get('/show', [studentController::class, 'showInput']);
 // Using controller. The function showInput returns view for stud_create.blade.php

 Route::get('/list', [studentController::class, 'showStudents']);
?>