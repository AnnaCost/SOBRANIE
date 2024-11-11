<?php

use App\Http\Controllers\domController;
use App\Http\Controllers\apartmentController;
use App\Http\Controllers\meetingController;
use App\Http\Controllers\votingController;
use App\Http\Controllers\ownerController;
use App\Http\Controllers\questionController;
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

Route::get('/dom', [domController::class, 'index']);
Route::get('/apartment', [apartmentController::class, 'index']);
Route::get('/meeting', [meetingController::class, 'index']);
Route::get('/owner', [ownerController::class, 'index']);
Route::get('/question', [questionController::class, 'index']);
Route::get('/voting', [votingController::class, 'index']);
Route::get('/dom/{id}', [domController::class, 'show']);
Route::get('/apartment/{id}', [apartmentController::class, 'show']);
Route::get('/meeting/{id}', [meetingController::class, 'show']);
Route::get('/owner/{id}', [ownerController::class, 'show']);
Route::get('/question/{id}', [questionController::class, 'show']);
Route::get('/voting/{id}', [votingController::class, 'show']);
Route::get('/', function () {
    return view('welcome');
});
