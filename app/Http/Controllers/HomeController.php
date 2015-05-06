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
		$this->validate($req, ['username'=>'required','password'=>'required']);
		$s = Pegawai::where('username', '=', Request::get('username'))->firstOrFail();
		foreach($s as $value){
			if($value->role=="admin"){
				return $value->username;//redirect('admin');
			}
			else if($value->role=="pegawai"){
				return $value->username;//return redirect('pegawai');
			}
		}
		return $req->username;
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
