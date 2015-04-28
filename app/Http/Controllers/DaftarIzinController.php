<?php namespace IzinAir\Http\Controllers;

use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DaftarIzinController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getallizin($id){
		if($id==1){
			$form = Form1::all();
			return view('pemohon.daftarizin.1', compact('form'));
		}
		else if($id==2){
			$form = Form2::all();
			return view('pemohon.daftarizin.2', compact('form'));
		}
		else if($id==3){
			$form = Form3::all();
			return view('pemohon.daftarizin.3', compact('form'));
		}
		else if($id==4){
			$form = Form4::all();
			return view('pemohon.daftarizin.4', compact('form'));
		}

}
