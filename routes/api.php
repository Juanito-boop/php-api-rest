<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/producto', 'ProductoController@index');
Route::get('/producto/{id}', 'ProductoController@show');
Route::post('/producto', 'ProductoController@store');
Route::put('/producto/{id}', 'ProductoController@update');
Route::delete('/producto/{id}', 'ProductoController@destroy');