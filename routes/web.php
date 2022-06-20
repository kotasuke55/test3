<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesrController;

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

Route::get('/index', [TesrController::class,'index']);
Route::post('/index', [TesrController::class, 'thanks']);