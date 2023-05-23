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
// pegawai
Route::get('/', function () {
    return view('welcome');
});
Route:: get('/data_pegawai', 'pegawaicontroller@index')->name ('data_pegawai');
Route:: get('/data_pegawai/create', 'pegawaicontroller@create')->name ('post.createe');
Route:: post('/tambahdata/create', 'pegawaicontroller@simpan')->name ('post.create');
Route:: get('/editdata{id}/edit', 'pegawaicontroller@edit')->name ('post.edit');
Route:: post('/updatedata/update/{id}', 'pegawaicontroller@update')->name ('post.update');
Route:: get('/post/{id}', 'pegawaicontroller@delete')->name ('post.delete');

// kependudukan
Route:: get('/datalurah', 'lurahcontroller@index')->name ('datalurah');
