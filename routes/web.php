<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'ComidasController@comidas')->name('comidas'); //para obtener la ruta lista de comidas
Route::post('comidas/deletemultiple/', 'ComidasController@DeleteMultiple')->name('comidadeletemultiple'); 

