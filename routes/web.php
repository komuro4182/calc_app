<?php  

use Illuminate\Support\Facades\Route;

Route::get('/controller/calcs/{num1}/{calclation}/{num2}', 
[App\Http\Controllers\CalcsController::class, "result"]);

