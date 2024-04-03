<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/public', [IndexController::class, 'Index'])->name('public');
Route::get('/headings/{id}', [IndexController::class, 'Heading'])->name('headings');
Route::get('/article/{id}', [IndexController::class, 'Article'])->name('articles');
Route::get('/add', [App\Http\Controllers\IndexController::class, 'Add'])->name('add');
Route::post('/form-submit', [App\Http\Controllers\IndexController::class, 'Submit']);
Route::delete('/delete/{id}', [IndexController::class, 'Delete'])->name('delete');