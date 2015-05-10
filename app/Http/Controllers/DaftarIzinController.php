<?php namespace IzinAir\Http\Controllers;

use IzinAir\Form1;
use IzinAir\Form2;
use IzinAir\Form3;
use IzinAir\Form4;
use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;

class DaftarIzinController extends Controller {

	public function indexpemohon(){
		return redirect('pemohon/lihat/1');
	}
	public function indexpegawai(){
		return redirect('pegawai/lihat/1');
	}
	public function getallizinpemohon($id){
		if($id==1){
			$form = Form1::all();
			return view('pemohon.daftarizin.daftarizin1', compact('form'));
		}
		else if($id==2){
			$form = Form2::all();
			return view('pemohon.daftarizin.daftarizin2', compact('form'));
		}
		else if($id==3){
			$form = Form3::all();
			return view('pemohon.daftarizin.daftarizin3', compact('form'));
		}
		else if($id==4){
			$form = Form4::all();
			return view('pemohon.daftarizin.daftarizin4', compact('form'));
		}
	}
	public function getallizinpegawai($id){
		if($id==1){
			$form = Form1::all();
			return view('pegawai.daftarizin.daftarizin1', compact('form'));
		}
		else if($id==2){
			$form = Form2::all();
			return view('pegawai.daftarizin.daftarizin2', compact('form'));
		}
		else if($id==3){
			$form = Form3::all();
			return view('pegawai.daftarizin.daftarizin3', compact('form'));
		}
		else if($id==4){
			$form = Form4::all();
			return view('pegawai.daftarizin.daftarizin4', compact('form'));
		}	
	}
	public function postFormNew1(Requests\CreateForm1Request $req){
		Form1::create($req->all());
		return redirect('izinair/pemohon/daftarizin/1');
	}
	public function postFormNew2(Requests\CreateForm2Request $req){
		Form2::create($req->all());
		return redirect('izinair/pemohon/daftarizin/2');
	}
	public function postFormNew3(Requests\CreateForm3Request $req){
		Form3::create($req->all());
		return redirect('izinair/pemohon/daftarizin/3');
	}
	public function postFormNew4(Requests\CreateForm4Request $req){
		Form4::create($req->all());
		return redirect('izinair/pemohon/daftarizin/4');
	}
}
