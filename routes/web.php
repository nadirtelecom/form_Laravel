<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormController;


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
Route::view('/layout','layout');

Route::view('/signin','signin');

Route::view('/signup','signup');

Route::get('/users', [FormController::class ,'login']);
Route::post('/users', [FormController::class, 'store']);
