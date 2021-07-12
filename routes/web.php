<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formcontroller;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [formcontroller::class, 'index']);
Route::post('/form',[formcontroller::class, 'store']) ->name('post.add');
Route::view('/submit','form');
Route::get('/form-list', [formcontroller::class, 'list'])->name('get.lists');
Route::get('/edit-value/{id}', [formcontroller::class, 'edit'])->name('edit.lists');
Route::get('/delete-value/{id}', [formcontroller::class, 'delete'])->name('delete.lists');
Route::post('/update-value', [formcontroller::class, 'update'])->name('update.post');
