<?php

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

Route::get('first',function()  
{  
    return view('first'); 
})->name('first'); 

Route::get('second',function()  
{  
    return view('second');
})->name('second'); 

Route::get('/pages/{page}', function($slug) 
{
    $page = file_get_contents(__DIR__ . "/../resources/html/{$slug}.html");
    return view('page', [
        "page" => $page
    ]);
});
