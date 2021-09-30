<?php

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




Route::group(['middleware' => 'web'], function(){

    Route::get('/', function () {
        return view('welcome');
    });
    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});


Route::get('/', function () {
        return view('welcome');
    });


Route::get('/api', [App\Http\Controllers\UsuariosController::class, 'index'])->name('api')->middleware('auth');
Route::get('/api/new', [App\Http\Controllers\UsuariosController::class, 'new'])->name('api')->middleware('auth');
Route::post('/api/add', [App\Http\Controllers\UsuariosController::class, 'add'])->name('api')->middleware('auth');
Route::get('/api/add', [App\Http\Controllers\UsuariosController::class, 'add'])->name('api')->middleware('auth');
Route::get('/api/{id}/edit', [App\Http\Controllers\UsuariosController::class, 'edit'])->name('api')->middleware('auth');
Route::post('/api/update/{id}', [App\Http\Controllers\UsuariosController::class, 'update'])->name('api')->middleware('auth');
Route::delete('/api/delete/{id}', [App\Http\Controllers\UsuariosController::class, 'delete'])->name('api')->middleware('auth');
Route::get('/api/v1/dragon', [App\Http\Controllers\ApiWeb::class, 'add'])->name('api')->middleware('auth');


// Route::get('/usuarios', 'UsuariosController@index');
// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
