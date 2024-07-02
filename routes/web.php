<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;

Route::view('/', 'home')->name('home');

//ruta del controlador contacto
Route::view('contacto', 'contacto')->name('contacto');
//ruta  store con metodo post 
Route::post('contacto', 'App\Http\Controllers\ContactoController@store');

//ruta del controlador personas
Route::get('personas', 'App\Http\Controllers\PersonasController@index')->name('personas');
Route::get('personas/crear', 'App\Http\Controllers\PersonasController@create')->name('personas.create');
//ruta editar
Route::get('personas/{nPerCodigo}/editar', 'App\Http\Controllers\PersonasController@edit')->name('personas.edit');
//ruta modificar con el metodo parcial partch
Route::patch('personas/{nPerCodigo}', 'App\Http\Controllers\PersonasController@update')->name('personas.update');
//ruta  store con metodo post
Route::post('personas', 'App\Http\Controllers\PersonasController@store')->name('personas.store');
Route::get('personas/{nPerCodigo}', 'App\Http\Controllers\PersonasController@show')->name('personas.show');
//ruta eliminar con metodo destroy
Route::delete('personas/{nPerCodigo}', 'App\Http\Controllers\PersonasController@destroy')->name('personas.destroy');


