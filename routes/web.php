<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index']);

Route::get('first', [PageController::class, 'showFirst'])->name('first'); 

Route::get('second', [PageController::class, 'showSecond'])->name('second'); 

Route::get('/pages/{page}', [PageController::class, 'showPage']);

Route::get('/signup', [PageController::class, 'signup'])->name('signup');
Route::post('/signup', [PageController::class, 'addSignee'])->name('register');