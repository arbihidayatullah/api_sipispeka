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
Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');
Route::post('adduser', 'AuthController@store');


Route::get('soal_iks', 'Soal_iksController@index');
Route::post('soal_iks', 'Soal_iksController@store');
Route::post('soal_iks_up/{id}', 'Soal_iksController@update');
Route::delete('soal_iks/{id?}', 'Soal_iksController@destroy');


Route::get('jawaban_iks', 'Jawaban_iksController@index');
Route::post('jawaban_iks', 'Jawaban_iksController@store');
Route::post('jawaban_iks_up/{id}', 'Jawaban_iksController@update');
Route::delete('jawaban_iks/{id?}', 'Jawaban_iksController@destroy');
Route::get('update_iks/{user_id}', 'Jawaban_iksController@show');
Route::delete('deletelast/{user_id}', 'Jawaban_iksController@deletelast');

Route::get('role', 'RoleController@index');
Route::post('role', 'RoleController@store');
Route::post('role/{id}', 'RoleController@update');
Route::delete('role/{id?}', 'RoleController@destroy');

Route::get('pelayanan', 'PelayananController@index');
Route::post('pelayanan', 'PelayananController@store');
Route::post('pelayanan/{id}', 'PelayananController@update');
Route::delete('pelayanan/{id?}', 'PelayananController@destroy');

// Route::get('order_pelayanan', 'Order_pelayananController@index');
// Route::post('order_pelayanan', 'Order_pelayananController@store');
// Route::post('order_pelayanan/{id}', 'Order_pelayananController@update');
// Route::delete('order_pelayanan/{id?}', 'Order_pelayananController@destroy');

Route::get('order_konsultasi', 'Order_konsultasiController@index');
Route::post('order_konsultasi', 'Order_konsultasiController@store');
Route::post('order_konsultasi/{id}', 'Order_konsultasiController@update');
Route::delete('order_konsultasi/{id?}', 'Order_konsultasiController@destroy');

Route::get('keterangan', 'Keterangan_iksController@index');
Route::post('keterangan', 'Keterangan_iksController@store');
Route::post('keterangan/{id}', 'Keterangan_iksController@update');
Route::delete('keterangan/{id?}', 'Keterangan_iksController@destroy');
Route::get('keterangan_user/{user_id}', 'Keterangan_iksController@show');

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
Route::post('iklan', 'IklanController@uploadImage');
Route::post('/iklan/{id}', 'IklanController@update');
Route::delete('iklan/{id?}', 'IklanController@destroy');

Route::get('nilai', 'NilaiController@index');
Route::post('nilai', 'NilaiController@store');
Route::post('/nilai/{id}', 'NilaiController@update');
Route::delete('nilai/{id?}', 'NilaiController@destroy');

Route::get('pengisian_iks', 'Pengisian_iksController@index');
Route::post('pengisian_iks', 'Pengisian_iksController@store');
Route::post('/pengisian_iks/{id}', 'Pengisian_iksController@update');
Route::delete('pengisian_iks/{id?}', 'Pengisian_iksController@destroy');

Route::get('provinsi', 'ProvinsiController@index');
Route::post('provinsi', 'ProvinsiController@store');
Route::post('/provinsi/{id}', 'ProvinsiController@update');
Route::delete('provinsi/{id?}', 'ProvinsiController@destroy');

Route::get('kabupaten', 'KabupatenController@index');
Route::post('kabupaten', 'KabupatenController@store');
Route::post('/kabupaten/{id}', 'KabupatenController@update');
Route::delete('kabupaten/{id?}', 'KabupatenController@destroy');

Route::get('kecamatan', 'KecamatanController@index');
Route::post('kecamatan', 'KecamatanController@store');
Route::post('/kecamatan/{id}', 'KecamatanController@update');
Route::delete('kecamatan/{id?}', 'KecamatanController@destroy');

Route::get('desa', 'DesaController@index');
Route::post('desa', 'DesaController@store');
Route::post('/desa/{id}', 'DesaController@update');
Route::delete('desa/{id?}', 'DesaController@destroy');
