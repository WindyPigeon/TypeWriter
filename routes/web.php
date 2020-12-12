<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserFileController;

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

Route::get('/online-text-editor', function () {
    return view('filebrowser/codemirror');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/filebrowser', [UserFileController::class, 'index'])->name('filebrowser');

Route::middleware(['auth:sanctum', 'verified'])->get('/editor/path/{path}/edit/{file}', [UserFileController::class, 'edit'])->name('edit');
