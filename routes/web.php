<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortoController;

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

Route::get('/',[PortoController::class, 'master']);
Route::get('/about', [PortoController::class, 'about']);
Route::get('/resume', [PortoController::class, 'resume']);
Route::get('/contact', [PortoController::class, 'contact']);

