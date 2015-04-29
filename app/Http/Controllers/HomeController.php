<?php namespace IzinAir\Http\Controllers;

use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller {

	//
	public function role(){
			return view('login');
	}
	public function login(){
		$user = Request::all();
		$s = Pegawai::where('NIK', '=', $NIK)->firstOrFail();
	}
	public function pemohon(){
		return view('pemohon.index');
	}
	public function admin(){
		return view('admin.index');
	}

	public function pegawai(){
		return view('pegawai.index');
	}
}
