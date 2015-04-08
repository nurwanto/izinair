<?php namespace IzinAir\Http\Controllers;

use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller {

	//
	public function role(){
		// if(admin) 
			//return view('admin.index');
		// else if(pegawai) 
			return view('pegawai.index');
		// else if(pemohon)
		// return view('pemohon.index');
	}

}
