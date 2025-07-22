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

// This route will return your new index view.
Route::get('/', function () {
    return view('index');
});

// You can delete this route if you no longer need the default welcome page.
// Route::get('/welcome', function () {
//     return view('welcome');
// });