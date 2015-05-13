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

Route::get('izinair', 'HomeController@role');

Route::post('izinair/login', 'HomeController@login');

Route::get('izinair/pemohon', 'HomeController@pemohon');

Route::get('izinair/admin', 'HomeController@admin');

Route::get('izinair/pegawai', 'HomeController@pegawai');

Route::get('izinair/pemohon/form','FormIzinController@getForm');


Route::get('izinair/pemohon/form/perpanjangan', 'PerpanjanganController@getform');

Route::post('izinair/pemohon/form/perpanjangan', 'PerpanjanganController@postform');

Route::get('izinair/pemohon/perpanjangan/1/{id}', 'PerpanjanganController@perpanjang1');

Route::get('izinair/pemohon/perpanjangan/2/{id}', 'PerpanjanganController@perpanjang2');

Route::get('izinair/pemohon/perpanjangan/3/{id}', 'PerpanjanganController@perpanjang3');

Route::get('izinair/pemohon/perpanjangan/4/{id}', 'PerpanjanganController@perpanjang4');



Route::get('izinair/pemohon/form/pembatalan', 'PembatalanController@getform');

Route::post('izinair/pemohon/form/pembatalan', 'PembatalanController@postform');

Route::get('izinair/pemohon/pembatalan/1/{id}', 'PembatalanController@pembatalan1');

Route::get('izinair/pemohon/pembatalan/2/{id}', 'PembatalanController@pembatalan2');

Route::get('izinair/pemohon/pembatalan/3/{id}', 'PembatalanController@pembatalan3');

Route::get('izinair/pemohon/pembatalan/4/{id}', 'PembatalanController@pembatalan4');


Route::get('izinair/pemohon/form/pengaduan', 'PengaduanController@getform');

Route::post('izinair/pemohon/form/pengaduan', 'PengaduanController@postform');

Route::get('izinair/pemohon/pengaduan/1/{id}', 'PengaduanController@pengaduan1');

Route::get('izinair/pemohon/pengaduan/2/{id}', 'PengaduanController@pengaduan2');

Route::get('izinair/pemohon/pengaduan/3/{id}', 'PengaduanController@pengaduan3');

Route::get('izinair/pemohon/pengaduan/4/{id}', 'PengaduanController@pengaduan4');


Route::get('izinair/pemohon/form/new/{id}','FormIzinController@getFormNew');

Route::post('izinair/pemohon/daftarizin/1','DaftarIzinController@postFormNew1');

Route::post('izinair/pemohon/daftarizin/2','DaftarIzinController@postFormNew2');

Route::post('izinair/pemohon/daftarizin/3','DaftarIzinController@postFormNew3');

Route::post('izinair/pemohon/daftarizin/4','DaftarIzinController@postFormNew4');

Route::get('izinair/pemohon/daftarizin/{id}', 'DaftarIzinController@getallizinpemohon');


Route::get('izinair/pemohon/form/pembayaran', 'PembayaranController@getform');

Route::post('izinair/pemohon/form/pembayaran', 'PembayaranController@postform');

Route::get('izinair/pemohon/form/pembayaran/1/{id}', 'PembayaranController@pembayaran1');

Route::get('izinair/pemohon/form/pembayaran/2/{id}', 'PembayaranController@pembayaran2');

Route::get('izinair/pemohon/form/pembayaran/3/{id}', 'PembayaranController@pembayaran3');

Route::get('izinair/pemohon/form/pembayaran/4/{id}', 'PembayaranController@pembayaran4');


Route::get('izinair/pemohon/daftarizin', 'DaftarIzinController@indexpemohon');

Route::get('izinair/pemohon/daftarizin/{id}', 'DaftarIzinController@getallizinpemohon');


Route::get('izinair/pemohon/persyaratan', function() {
	return View::make('pemohon.persyaratan');
});

Route::get('izinair/pemohon/tentang', function() {
	return View::make('pemohon.tentang');
});

Route::get('izinair/pemohon/kontak', function() {
	return View::make('pemohon.kontak');
});


Route::get('izinair/admin/manajemen', 'PegawaiController@index');

Route::get('izinair/admin/manajemen/ubah/{id}','PegawaiController@ubah');

Route::post('izinair/admin/manajemen/{id}','PegawaiController@postubah');

Route::get('izinair/admin/manajemen/hapus/{id}','PegawaiController@hapus');

Route::get('izinair/admin/manajemen/admin/{id}','PegawaiController@admin');

Route::get('izinair/admin/manajemen/tambah','PegawaiController@gettambah');

Route::post('izinair/admin/manajemen','PegawaiController@posttambah');


Route::get('izinair/pegawai/daftarizin', 'DaftarIzinController@indexpegawai');

Route::get('izinair/pegawai/daftarizin/{id}', 'DaftarIzinController@getallizinpegawai');


Route::get('izinair/pegawai/validasi/{jenis}/{id}', 'DaftarIzinController@show');

Route::get('izinair/pegawai/validasi/{value}/{jenis}/{id}', 'DaftarIzinController@validasi');

Route::get('izinair/pegawai/validasi/{value}/{jenis}/{id}/{datateknis}', 'DaftarIzinController@validasiDataTeknis');


Route::get('izinair/pegawai/datateknis/{jenis}/{id}', 'DataTeknisController@getForm');

Route::post('izinair/pegawai/datateknis', 'DataTeknisController@postForm');


Route::get('izinair/pegawai/notifikasi', 'NotifikasiController@getForm');

Route::post('izinair/pegawai/notifikasi', 'NotifikasiController@postForm');


Route::get('izinair/get/{filename}', [
		'as' => 'getfile', 'uses' => 'DaftarIzinController@get']);