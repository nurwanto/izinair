<?php namespace IzinAir\Http\Controllers;

use IzinAir\Pegawai;
use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PegawaiController extends Controller {
	public function index(){
		$profiles = Pegawai::all();
		return view('admin.manajemen', compact('profiles'));
	}
	public function admin($id){
		// Pegawai::
		return redirect('admin/manajemen');
	}
	public function hapus($id){
		// Pegawai::
		return redirect('admin/manajemen');
	}
	public function ubah($id){
		// Pegawai::
		return redirect('admin/manajemen');
	}
}