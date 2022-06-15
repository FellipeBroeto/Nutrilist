<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\listasController;
use App\Http\Controllers\adminlistasController;


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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [HomeController::class, 'index']);

Route::get('/listas', [listasController::class, 'index']);
// admin
Route::get('admin/listas', [adminlistasController::class, 'index']);
Route::get('admin/listas/editar', [adminlistasController::class, 'index']);
