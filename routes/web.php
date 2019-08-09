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

// Jardis dan Gardis
Route::get('/jardisdangardis', 'JardisGardisController@index');

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
Route::get('roadMapLisdes/detail', 'RoadMapLisdesController@show');
Route::get('roadMapLisdes/edit', 'RoadMapLisdesController@edit');
Route::get('roadMapLisdes/approval', 'RoadMapLisdesController@approval');
// Perkapita
Route::get('/perKapita', 'KonsumsiPerkapitaController@index');
Route::get('/tambahperKapita', 'KonsumsiPerkapitaController@store');
Route::get('/detailperKapita', 'KonsumsiPerkapitaController@show');
Route::get('/editKapita', 'KonsumsiPerkapitaController@edit');
Route::get('/approvalKapita', 'KonsumsiPerkapitaController@approval');
