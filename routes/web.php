<?php

use App\Http\Controllers\App;
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

Route::get('/', [App::class, 'index'])->name('dashboard');
Route::get('/tambahData', [App::class, 'tambah'])->name('tambahData');
Route::get('/tabelFrekuensi', [App::class, 'tabelFrek'])->name('tabelFrekuensi');
Route::get('/dataBergolong', [App::class, 'dataBergolong'])->name('dataBergolong');
Route::get('/deleteData/{id}', [App::class, 'deleteData'])->name('deleteData');
Route::get('/editData/{id}', [App::class, 'editData'])->name('editData');
Route::post('/updateData', [App::class, 'updateData'])->name('updateData');
