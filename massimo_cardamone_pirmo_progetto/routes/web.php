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

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/teachers', function () {
    $teachers = [
        ["name" => "Matteo",
        "language" => "Laravel"],
        ["name" => "Angela",
        "language" => "CSS"],
        ["name" => "Nicola",
        "language" => "JavaScript"],
        ["name" => "Lorenzo",
        "language" => "Php"],
              
    ];

    return view('teachers' , ["teachers" => $teachers]);
   
});