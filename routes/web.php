<?php

use App\Http\Controllers\DevController;
use Illuminate\Support\Facades\Route;

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
Route::get('/dev', [DevController::class, 'index']);
Route::post('/dev', [DevController::class, 'post']);
Route::post('/request', [DevController::class, 'request']);
