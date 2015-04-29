<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@role');

Route::get('login', 'HomeController@login');

Route::get('pemohon', 'HomeController@pemohon');

Route::get('admin', 'HomeController@admin');

Route::get('pegawai', 'HomeController@pegawai');

Route::get('pemohon/form','FormIzinController@getForm');


Route::get('pemohon/form/perpanjangan', 'PerpanjanganController@getform');

Route::post('pemohon/form/perpanjangan', 'PerpanjanganController@postform');

Route::get('pemohon/perpanjangan/1/{id}', 'PerpanjanganController@perpanjang1');

Route::get('pemohon/perpanjangan/2/{id}', 'PerpanjanganController@perpanjang2');

Route::get('pemohon/perpanjangan/3/{id}', 'PerpanjanganController@perpanjang3');

Route::get('pemohon/perpanjangan/4/{id}', 'PerpanjanganController@perpanjang4');



Route::get('pemohon/form/pembatalan', 'PembatalanController@getform');

Route::post('pemohon/form/pembatalan', 'PembatalanController@postform');

Route::get('pemohon/pembatalan/1/{id}', 'PembatalanController@pembatalan1');

Route::get('pemohon/pembatalan/2/{id}', 'PembatalanController@pembatalan2');

Route::get('pemohon/pembatalan/3/{id}', 'PembatalanController@pembatalan3');

Route::get('pemohon/pembatalan/4/{id}', 'PembatalanController@pembatalan4');


Route::get('pemohon/form/pengaduan', 'PengaduanController@getform');

Route::post('pemohon/form/pengaduan', 'PengaduanController@postform');

Route::get('pemohon/pengaduan/1/{id}', 'PengaduanController@pengaduan1');

Route::get('pemohon/pengaduan/2/{id}', 'PengaduanController@pengaduan2');

Route::get('pemohon/pengaduan/3/{id}', 'PengaduanController@pengaduan3');

Route::get('pemohon/pengaduan/4/{id}', 'PengaduanController@pengaduan4');


Route::get('pemohon/form/new/{id}','FormIzinController@getFormNew');

Route::post('pemohon/form/new/1','FormIzinController@postFormNew1');

Route::post('pemohon/form/new/2','FormIzinController@postFormNew2');

Route::post('pemohon/form/new/3','FormIzinController@postFormNew3');

Route::post('pemohon/form/new/4','FormIzinController@postFormNew4');

Route::get('pemohon/daftarizin/{id}', 'DaftarIzinController@getallizinpemohon');


Route::get('pemohon/form/pembayaran', 'PembayaranController@getform');

Route::post('pemohon/form/pembayaran', 'PembayaranController@postform');

Route::get('pemohon/form/pembayaran/1/{id}', 'PembayaranController@pembayaran1');

Route::get('pemohon/form/pembayaran/2/{id}', 'PembayaranController@pembayaran2');

Route::get('pemohon/form/pembayaran/3/{id}', 'PembayaranController@pembayaran3');

Route::get('pemohon/form/pembayaran/4/{id}', 'PembayaranController@pembayaran4');


Route::get('pemohon/lihat', 'DaftarIzinController@indexpemohon');

Route::get('pemohon/lihat/{id}', 'DaftarIzinController@getallizinpemohon');


Route::get('pemohon/persyaratan', function() {
	return View::make('pemohon.persyaratan');
});

Route::get('pemohon/tentang', function() {
	return View::make('pemohon.tentang');
});

Route::get('pemohon/kontak', function() {
	return View::make('pemohon.kontak');
});


Route::get('admin/manajemen', 'PegawaiController@index');

Route::get('admin/manajemen/ubah/{id}','PegawaiController@ubah');

Route::get('admin/manajemen/hapus/{id}','PegawaiController@hapus');

Route::get('admin/manajemen/admin/{id}','PegawaiController@admin');


Route::get('pegawai/lihat', 'DaftarIzinController@indexpegawai');

Route::get('pegawai/lihat/{id}', 'DaftarIzinController@getallizinpegawai');


Route::get('pegawai/validasi', function() {
	return View::make('pegawai.validasi');
});


Route::get('pegawai/datateknis', 'DataTeknisController@getForm');

Route::post('pegawai/datateknis', 'DataTeknisController@postForm');


Route::get('pegawai/notifikasi', 'NotifikasiController@getForm');

Route::post('pegawai/notifikasi', 'NotifikasiController@postForm');