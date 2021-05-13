<?php

use App\Http\Controllers\addController;
use App\Http\Controllers\eController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\qController;
use App\Http\Controllers\refController;
use App\Http\Controllers\settingsController;
use App\Http\Controllers\vController;
use App\Http\Controllers\wController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/Main',[vController::class, 'index']);
Route::get('/add',[addController::class, 'index']);
Route::post('/add/check',[addController::class, 'check']);
Route::get('/e',[eController::class, 'index']);
Route::get('/',[indexController::class, 'index']);
Route::get('/w',[wController::class, 'index']);
Route::get('/settings',[settingsController::class, 'index']);
Route::get('/Greetings!',[qController::class, 'index']);
Route::get('/profile',[profileController::class, 'index']);
Route::get('/change',[refController::class, 'index']);
Route::post('/',[indexController::class, 'create']);
Route::get('/',function (){
    if(Auth::check()){
        return redirect()->route('/Main');
    }
    return view('index');
})->name('index');
Route::post('/Main',[indexController::class, 'login']);


