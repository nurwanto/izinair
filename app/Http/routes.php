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


Route::get('/', 'HomeController@check');

Route::get('izinair/login','HomeController@home');

Route::post('izinair/login','HomeController@login');

Route::get('izinair/home','HomeController@home');

Route::get('izinair/super_login', 'HomeController@getformsuper_login');

Route::post('izinair/index', 'HomeController@super_login');



Route::get('izinair/pemohon', 'HomeController@pemohon');

Route::get('izinair/admin', 'HomeController@admin');

Route::get('izinair/pegawai', 'HomeController@pegawai');

Route::get('izinair/pemohon/form','FormIzinController@getForm');


Route::get('izinair/pemohon/perpanjangan/{jenis}/{id}', 'PerpanjanganController@perpanjang');


Route::get('izinair/pemohon/pembatalan/{jenis}/{id}', 'PembatalanController@pembatalan');


Route::get('izinair/pemohon/pengaduan/{jenis}/{id}', 'PengaduanController@pengaduan');


Route::get('izinair/pemohon/daftarizin', 'DaftarIzinController@getallizinpemohon');

Route::post('izinair/pemohon/daftarizin/1','DaftarIzinController@postFormNew1');

Route::post('izinair/pemohon/daftarizin/2','DaftarIzinController@postFormNew2');

Route::post('izinair/pemohon/daftarizin/3','DaftarIzinController@postFormNew3');

Route::post('izinair/pemohon/daftarizin/4','DaftarIzinController@postFormNew4');


Route::get('izinair/pemohon/form/pembayaran', 'PembayaranController@getform');

Route::get('izinair/pemohon/daftarizin/pembayaran', 'DaftarIzinController@getallizinpemohon');

Route::post('izinair/pemohon/daftarizin/pembayaran', 'PembayaranController@postform');

Route::get('izinair/pemohon/pembayaran/{jenis}/{id}', 'PembayaranController@getform');


Route::get('izinair/pemohon/notifikasi', 'NotifikasiController@get');

Route::get('izinair/pemohon/notifikasi/{jenis}/{id}','NotifikasiController@update');


Route::get('izinair/pemohon/persyaratan', function() {
	return view('pemohon.persyaratan');
});


Route::get('izinair/admin/manajemen', 'PegawaiController@index');

Route::get('izinair/admin/manajemen/ubah/{id}','PegawaiController@ubah');

Route::post('izinair/admin/manajemen/{id}','PegawaiController@postubah');

Route::get('izinair/admin/manajemen/hapus/{id}','PegawaiController@hapus');

Route::get('izinair/admin/manajemen/admin/{id}','PegawaiController@admin');

Route::get('izinair/admin/manajemen/tambah','PegawaiController@gettambah');

Route::post('izinair/admin/manajemen','PegawaiController@posttambah');


Route::get('izinair/pegawai/daftarizin', 'DaftarIzinController@getallizinpegawai');

Route::get('izinair/pegawai/daftarizin/datateknis', 'DaftarIzinController@getallizinpegawai');

Route::post('izinair/pegawai/daftarizin/datateknis', 'DataTeknisController@postForm');


Route::get('izinair/pegawai/validasi/{jenis}/{id}', 'DaftarIzinController@show');

Route::get('izinair/pegawai/validasi/{value}/{jenis}/{id}', 'DaftarIzinController@validasi');

Route::get('izinair/pegawai/validasi/{value}/{jenis}/{id}/{datateknis}', 'DaftarIzinController@validasiDataTeknis');


Route::get('izinair/pegawai/datateknis/{jenis}/{id}', 'DataTeknisController@getForm');

Route::get('izinair/pegawai/pembayaran/{jenis}/{id}', 'PembayaranController@view');


Route::get('izinair/get/{filename}', [
		'as' => 'getfile', 'uses' => 'DaftarIzinController@get']);

Route::get('izinair/logout', 'HomeController@logout');

Route::get('izinair/super_logout', 'HomeController@super_logout');