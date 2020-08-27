<?php

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
Route::get('/pizzas', function () {
    // get data from db
    $pizzas = [
       ["type" => "americano", "base" => "cheesy crust", "price" => 5], 
       ["type" => "italiano", "base" => "bacon", "price" => 10], 
       ["type" => "estikano", "base" => "vulcanos", "price" => 15],
    ];
    return view('pizzas', ["pizzas" => $pizzas]);
});