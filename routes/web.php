<?php

use App\Http\Controllers\DevController;
use App\Livewire\FormBuatRoom;
use App\Livewire\HomePage;
use App\Livewire\RoomPage;
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

Route::get('/', HomePage::class);
Route::get('/room', FormBuatRoom::class);
Route::get('/room/{kode}', RoomPage::class);
Route::get('/room-contoh', RoomPage::class);
Route::get('/dev', [DevController::class, 'index']);
Route::post('/dev', [DevController::class, 'post']);
Route::post('/request', [DevController::class, 'request']);
