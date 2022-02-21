<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('user', 'AuthController@index');
Route::post('register', 'AuthController@store');


Route::get('soal_iks', 'Soal_iksController@index');
Route::post('soal_iks', 'Soal_iksController@store');
Route::post('soal_iks_up/{id}', 'Soal_iksController@update');
Route::delete('soal_iks/{id?}', 'Soal_iksController@destroy');


Route::get('jawaban_iks', 'Jawaban_iksController@index');
Route::post('jawaban_iks', 'Jawaban_iksController@store');
Route::post('jawaban_iks_up/{id}', 'Jawaban_iksController@update');
Route::delete('jawaban_iks/{id?}', 'Jawaban_iksController@destroy');

Route::get('role', 'RoleController@index');
Route::post('role', 'RoleController@store');
Route::post('role/{id}', 'RoleController@update');
Route::delete('role/{id?}', 'RoleController@destroy');

Route::get('pelayanan', 'PelayananController@index');
Route::post('pelayanan', 'PelayananController@store');
Route::post('pelayanan/{id}', 'PelayananController@update');
Route::delete('pelayanan/{id?}', 'PelayananController@destroy');

Route::get('order_pelayanan', 'Order_pelayananController@index');
Route::post('order_pelayanan', 'Order_pelayananController@store');
Route::post('order_pelayanan/{id}', 'Order_pelayananController@update');
Route::delete('order_pelayanan/{id?}', 'Order_pelayananController@destroy');

Route::get('order_konsultasi', 'Order_konsultasiController@index');
Route::post('order_konsultasi', 'Order_konsultasiController@store');
Route::post('order_konsultasi/{id}', 'Order_konsultasiController@update');
Route::delete('order_konsultasi/{id?}', 'Order_konsultasiController@destroy');

Route::get('keterangan', 'keterangan_iksController@index');
Route::post('keterangan', 'keterangan_iksController@store');
Route::post('keterangan/{id}', 'keterangan_iksController@update');
Route::delete('keterangan/{id?}', 'keterangan_iksController@destroy');

Route::get('jadwal', 'JadwalController@index');
Route::post('jadwal', 'JadwalController@store');
Route::post('jadwal/{id}', 'JadwalController@update');
Route::delete('jadwal/{id?}', 'JadwalController@destroy');

Route::get('intervensi', 'IntervensiController@index');
Route::post('intervensi', 'IntervensiController@store');
Route::post('intervensi/{id}', 'IntervensiController@update');
Route::delete('intervensi/{id?}', 'IntervensiController@destroy');

Route::get('iks', 'IksController@index');
Route::post('iks', 'IksController@store');
Route::post('iks/{id}', 'IksController@update');
Route::delete('iks/{id?}', 'IksController@destroy');

Route::get('iklan', 'IklanController@index');
Route::post('iklan', 'IklanController@store');
Route::post('/iklan/{id}', 'IklanController@update');
Route::delete('iklan/{id?}', 'IklanController@destroy');
