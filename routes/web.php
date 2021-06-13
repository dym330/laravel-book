<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\UserController;
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

Route::get('/', [TopController::class, 'index']);
Route::get('/about', [TopController::class, 'about']);

Route::get('/sign_up', [SessionController::class, 'sign_up']);
Route::post('/sign_up', [SessionController::class, 'create']);

Route::get('/sign_in', [SessionController::class, 'sign_in']);
Route::post('/sign_in', [SessionController::class, 'login']);

Route::resource('user', UserController::class);
Route::resource('book', UserController::class);











// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
