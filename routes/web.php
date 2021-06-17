<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\UserController;
use Illuminate\Contracts\Session\Session;
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

Route::get('/', [TopController::class, 'index'])->name('top');
Route::get('/about', [TopController::class, 'about'])->name('about');

Route::get('/sign_up', [SessionController::class, 'sign_up'])->name('sign_up');
Route::post('/sign_up', [SessionController::class, 'create'])->name('create');

Route::get('/sign_in', [SessionController::class, 'sign_in'])->name('sign_in');
Route::post('/sign_in', [SessionController::class, 'login'])->name('login');

Route::get('logout', [SessionController::class, 'logout'])->name('logout');

Route::resource('user', UserController::class)->only((['index', 'show']));
Route::resource('user', UserController::class)->only(['edit', 'update'])->middleware('user.edit.check');
Route::resource('book', BookController::class);











// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
