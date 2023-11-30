<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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



Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/upload_request',[HomeController::class,'upload']);

Route::post('/upload_feedback',[HomeController::class,'upload_feedback']);

Route::get('/manage_request',[AdminController::class,'view_request']);

Route::get('/view_feedback',[AdminController::class,'view_feedback']);

Route::get('/reject/{id}',[AdminController::class,'delete']);

Route::get('/add_user',[AdminController::class,'addWorker']);

Route::post('/add_worker',[AdminController::class,'add_worker']);
