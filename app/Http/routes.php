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

Route::get('pemohon/form','FormIzinController@getForm');

Route::get('pemohon/form/perpanjangan', 'PerpanjanganController@index');

Route::get('pemohon/form/perpanjangan/{jenis}/{id}', 'PerpanjanganController@getForm');

Route::get('pemohon/form/permohonanbatal', 'PermohonanBatalController@getform');

Route::get('pemohon/form/aduanpenolakan', 'AduanPenolakanController@getform');

Route::get('pemohon/lihat', 'DaftarIzinController@index');

Route::get('pemohon/form/new/{id}','FormIzinController@getFormNew');

Route::post('pemohon/form/new/1','FormIzinController@postFormNew1');

Route::post('pemohon/form/new/2','FormIzinController@postFormNew2');

Route::post('pemohon/form/new/3','FormIzinController@postFormNew3');

Route::post('pemohon/form/new/4','FormIzinController@postFormNew4');

Route::get('pemohon/daftarizin/{id}', 'DaftarIzinController@getallizin');

Route::get('pemohon/persyaratan', function() {
	return View::make('pemohon.persyaratan');
});

Route::get('pemohon/tentang', function() {
	return View::make('pemohon.tentang');
});

Route::get('pemohon/kontak', function() {
	return View::make('pemohon.kontak');
});

Route::get('pemohon/perpanjangan', function() {
	return View::make('pemohon.form.perpanjangan');
});

Route::get('pemohon/batal/{jenis}/{id}', 'PermohonanBatalController@cancel');

Route::get('admin/manajemen', function() {
	return View::make('admin.manajemen');
});

Route::get('pegawai/lihat', function() {
	return View::make('pegawai.lihat');
});

Route::get('pegawai/validasi', function() {
	return View::make('pegawai.validasi');
});

Route::get('pegawai/datateknis', function() {
	return View::make('pegawai.datateknis');
});

Route::get('pegawai/surat', function() {
	return View::make('pegawai.lihat');
});