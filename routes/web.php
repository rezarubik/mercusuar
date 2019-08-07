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
// Pembangkit
Route::get('/pembangkit', 'AdminController@pembangkit');
Route::get('/gardu_induk', 'GarduIndukController@index');
Route::get('/jaringan_transmisi', 'JaringanTransmisiController@index');

// Neraca Energi
Route::get('/neracaenergi', 'NeracaEnergiController@index');

// Jardis dan Gardis
Route::get('/jardisdangardis', 'JardisGardisController@index');

// Pelanggan Penjualan & Road Mao Lisdes
Route::get('/pelangganPenjualan', 'PelangganPenjualanController@index');
Route::get('/roadMapLisdes', 'RoadMapLisdesController@index');
Route::get('pelangganPenjualan/add', 'PelangganPenjualanController@create');
