<?php

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

Route::get('/', 'AdminController@index');
Route::get('/pembangkit', 'AdminController@pembangkit');

Route::get('/perkapita', 'KonsumsiPerkapitaController@index');
Route::get('/detail', 'KonsumsiPerkapitaController@detail');

// Pembangkit
Route::get('/pembangkit', 'AdminController@pembangkit');
Route::get('/gardu_induk', 'GarduIndukController@index');
Route::get('/jaringan_transmisi', 'JaringanTransmisiController@index');

// Neraca Energi
Route::get('/neracaenergi', 'NeracaEnergiController@index');
Route::get('/neracaenergi/add', 'NeracaEnergiController@create');
Route::post('/neracaenergi/store','NeracaEnergiController@store');
Route::post('/neracaenergi/update','NeracaEnergiController@update');

Route::get('/neracaenergi/detail/{id}','NeracaEnergiController@show');
Route::get('/neracaenergi/edit/{id}','NeracaEnergiController@edit');
Route::get('/neracaenergi/approve/{id}','NeracaEnergiController@approve');
Route::get('/neracaenergi/delete/{id}','NeracaEnergiController@destroy');


// Jardis dan Gardis
Route::get('/jardisdangardis', 'JardisGardisController@index');
Route::get('/jardis/add', 'JardisGardisController@createJardis');
Route::get('/gardis/add', 'JardisGardisController@createGardis');
Route::post('/jardis/store', 'JardisGardisController@storeJardis');
Route::post('/gardis/store', 'JardisGardisController@storeGardis');
Route::post('/jardis/update/{id}', 'JardisGardisController@updateJardis');
Route::post('/gardis/update/{id}', 'JardisGardisController@updateGardis');

Route::get('/jardis/detail/{id}', 'JardisGardisController@showJardis');
Route::get('/gardis/detail/{id}', 'JardisGardisController@showGardis');
Route::get('/jardis/edit/{id}', 'JardisGardisController@editJardis');
Route::get('/gardis/edit/{id}', 'JardisGardisController@editGardis');
Route::get('/jardisdangardis/approve/{id}', 'JardisGardisController@approve');
Route::get('/jardisdangardis/delete/{id}', 'JardisGardisController@destroy');

// Pelanggan Penjualan & Road Mao Lisdes
Route::get('/pelangganPenjualan', 'PelangganPenjualanController@index');
Route::get('/pelangganPenjualan/add', 'PelangganPenjualanController@create');
Route::get('/pelangganPenjualan/detail', 'PelangganPenjualanController@show');
Route::get('/pelangganPenjualan/edit', 'PelangganPenjualanController@edit');
Route::get('/pelangganPenjualan/approval', 'PelangganPenjualanController@approval');
Route::get('/roadMapLisdes', 'RoadMapLisdesController@index');
