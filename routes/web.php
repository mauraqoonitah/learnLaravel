<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StudentsController;

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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/about', function () {
//     $nama = 'Maura Qoonitah Putri';
//     return view('about', ['nama' => $nama]);
// });
// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

// opsi penulisan jika tidak pakai use namespace
// Route::get('/', 'App\Http\Controllers\PagesController@home');

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

//Students
Route::get('/students', [StudentsController::class, 'index']);
Route::get('/students/create', [StudentsController::class, 'create']);
Route::get('/students/{student}', [StudentsController::class, 'show']);
Route::post('/students', [StudentsController::class, 'store']);
//store
Route::delete('/students/{student}', [StudentsController::class, 'destroy']);
//update
Route::get('/students/{student}/edit', [StudentsController::class, 'edit']);
Route::patch('/students/{student}', [StudentsController::class, 'update']);
