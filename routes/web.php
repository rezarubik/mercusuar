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
// Pembangkit Gardu Induk Jaringan Transmisi
Route::get('/pembangkit', 'AdminController@pembangkit');

// Pembangkit
Route::get('/pembangkit', 'AdminController@pembangkit');
Route::get('/gardu_induk', 'GarduIndukController@index');
Route::get('/gardu_induk/add', 'GarduIndukController@create');
Route::get('/gardu_induk/detail', 'GarduIndukController@show');
Route::get('/gardu_induk/edit', 'GarduIndukController@edit');
Route::get('/gardu_induk/approval', 'GarduIndukController@approval');
Route::get('/gardu_induk/delete', 'GarduIndukController@delete');
Route::get('/jaringan_transmisi', 'JaringanTransmisiController@index');
Route::get('/jaringan_transmisi/add', 'JaringanTransmisiController@create');
Route::get('/jaringan_transmisi/detail', 'JaringanTransmisiController@show');
Route::get('/jaringan_transmisi/edit', 'JaringanTransmisiController@edit');
Route::get('/jaringan_transmisi/approval', 'JaringanTransmisiController@approval');
Route::get('/jaringan_transmisi/delete', 'JaringanTransmisiController@delete');

// Neraca Energi
Route::get('/neracaenergi', 'NeracaEnergiController@index');
Route::get('/neracaenergi/add', 'NeracaEnergiController@create');
Route::post('/neracaenergi/store', 'NeracaEnergiController@store');
Route::post('/neracaenergi/update', 'NeracaEnergiController@update');

Route::get('/neracaenergi/detail/{id}', 'NeracaEnergiController@show');
Route::get('/neracaenergi/edit/{id}', 'NeracaEnergiController@edit');
Route::get('/neracaenergi/approve/{id}', 'NeracaEnergiController@approve');
Route::get('/neracaenergi/delete/{id}', 'NeracaEnergiController@destroy');

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

// Pelanggan Penjualan
Route::get('/pelangganPenjualan', 'PelangganPenjualanController@index');
Route::get('/pelangganPenjualan/add', 'PelangganPenjualanController@create');

Route::get('/pelangganPenjualan/detail', 'PelangganPenjualanController@show');
Route::get('/pelangganPenjualan/edit', 'PelangganPenjualanController@edit');
Route::get('/pelangganPenjualan/approval', 'PelangganPenjualanController@approval');

// Road Map Lisdes
Route::get('/roadMapLisdes', 'RoadMapLisdesController@index');
Route::get('/roadMapLisdes/add', 'RoadMapLisdesController@create');
Route::get('roadMapLisdes/add/realisasi', 'RoadMapLisdesController@createRealisasi');

// Perkapita
Route::get('/perKapita', 'KonsumsiPerkapitaController@index');
Route::get('/tambahperKapita', 'KonsumsiPerkapitaController@store');
Route::get('/detailperKapita', 'KonsumsiPerkapitaController@show');
Route::get('/editKapita', 'KonsumsiPerkapitaController@edit');
Route::get('/approvalKapita', 'KonsumsiPerkapitaController@approval');
