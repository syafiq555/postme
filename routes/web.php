<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/create', [PostController::class, 'create'])->name('create_post');
Route::get('/posts/edit', [PostController::class, 'edit'])->name('edit_post');

require __DIR__.'/auth.php';
