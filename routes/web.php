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


Route::resource('/', 'ObraController')->names('obra');
Route::get('/','ObraController@index')->name('obra.index');
// Route::get('/h', 'home' )->name('home');

// Route::view('/obras', 'obras')->name('obras');
Route::get('/obra/crear', 'ObraController@create')->name('obra.create');
Route::post('/obra/venta/{obras}', 'VentaController@store')->name('venta.store');
Route::get('/obra/venta/{obra}', 'VentaController@create')->name('venta.create');

Route::get('/obra/{obra}/editar', 'ObraController@update')->name('obra.update');

Route::post('/obra', 'ObraController@store')->name('obra.store');

// Route::patch('/obra/{obra}/compra', 'ProjectController@update')->name('obra.compra');

