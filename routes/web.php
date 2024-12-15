<?php

use App\Http\Controllers\domController;
use App\Http\Controllers\apartmentController;
use App\Http\Controllers\LoginController;
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
Route::get('/dom/{id}', [domController::class, 'show']);

Route::get('/apartment', [apartmentController::class, 'index']);
Route::post('/apartment', [apartmentController::class, 'store']);
Route::get('/apartment/create', [apartmentController::class, 'create']);
Route::get('/apartment/{id}', [apartmentController::class, 'show']);
Route::get('/apartment/edit/{id}', [apartmentController::class, 'edit']);
Route::post('/apartment/update/{id}', [apartmentController::class, 'update']);
Route::get('/apartment/destroy/{id}', [apartmentController::class, 'destroy']);

Route::get('/owner', [ownerController::class, 'index']);
Route::post('/owner', [ownerController::class, 'store']);
Route::get('/owner/create', [ownerController::class, 'create']);
Route::get('/owner/{id}', [ownerController::class, 'show']);
Route::get('/owner/edit/{id}', [ownerController::class, 'edit']);
Route::post('/owner/update/{id}', [ownerController::class, 'update']);
Route::get('/owner/destroy/{id}', [ownerController::class, 'destroy']);

Route::get('/meeting', [meetingController::class, 'index']);
Route::post('/meeting', [meetingController::class, 'store']);
Route::get('/meeting/create', [meetingController::class, 'create']);
Route::get('/meeting/{id}', [meetingController::class, 'show']);
Route::get('/meeting/edit/{id}', [meetingController::class, 'edit']);
Route::post('/meeting/update/{id}', [meetingController::class, 'update']);
Route::get('/meeting/destroy/{id}', [meetingController::class, 'destroy']);

Route::get('/question', [questionController::class, 'index']);
Route::post('/question', [questionController::class, 'store']);
Route::get('/question/create', [questionController::class, 'create']);
Route::get('/question/{id}', [questionController::class, 'show']);
Route::get('/question/edit/{id}', [questionController::class, 'edit']);
Route::post('/question/update/{id}', [questionController::class, 'update']);
Route::get('/question/destroy/{id}', [questionController::class, 'destroy']);

Route::get('/voting', [votingController::class, 'index']);
Route::post('/voting', [votingController::class, 'store']);
Route::get('/voting/create', [votingController::class, 'create']);
Route::get('/voting/{id}', [votingController::class, 'show']);
Route::get('/voting/edit/{id}', [votingController::class, 'edit']);
Route::post('/voting/update/{id}', [votingController::class, 'update']);
Route::get('/voting/destroy/{id}', [votingController::class, 'destroy']);

Route::get('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/auth', [LoginController::class, 'authenticate']);

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/meeting/create', [meetingController::class, 'create'])->middleware('auth');
Route::get('/meeting/edit/{id}', [meetingController::class, 'edit'])->middleware('auth');
Route::post('/meeting/update/{id}', [meetingController::class, 'update'])->middleware('auth');
Route::get('/meeting/destroy/{id}', [meetingController::class, 'destroy'])->middleware('auth');

Route::get('/error', function () {
    return view('error', ['message' => session('message')]);
});






Route::get('/', function () {
    return view('welcome');
});
