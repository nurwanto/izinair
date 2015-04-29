<?php namespace IzinAir\Http\Controllers;

use IzinAir\Form1;
use IzinAir\Form2;
use IzinAir\Form3;
use IzinAir\Form4;
use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DaftarIzinController extends Controller {

	public function indexpemohon(){
		return redirect('pemohon/lihat/1');
	}
	public function indexpegawai(){
		return redirect('pegawai/lihat/1');
	}
	public function getallizinpemohon($id){
		if($id==1){
			$form = Form1::where('NIK', '=', 'NIK')->get();
			return view('pemohon.daftarizin.daftarizin1', compact('form'));
		}
		else if($id==2){
			$form = Form2::where('NIK', '=', 'NIK')->get();
			return view('pemohon.daftarizin.daftarizin2', compact('form'));
		}
		else if($id==3){
			$form = Form3::where('NIK', '=', 'NIK')->get();
			return view('pemohon.daftarizin.daftarizin3', compact('form'));
		}
		else if($id==4){
			$form = Form4::where('NIK', '=', 'NIK')->get();
			return view('pemohon.daftarizin.daftarizin4', compact('form'));
		}
	}
	public function getallizinpegawai($id){
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
}
