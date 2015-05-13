<?php namespace IzinAir\Http\Controllers;

use IzinAir\Form1;
use IzinAir\Form2;
use IzinAir\Form3;
use IzinAir\Form4;
use IzinAir\Pengaduan;
use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;

class PengaduanController extends Controller {
	public function getform(){
		$form1 = Form1::all();
		$form2 = Form2::all();
		$form3 = Form3::all();
		$form4 = Form4::all();
		return view('pemohon.form.pengaduan', compact('form1','form2','form3','form4'));
	}
	public function postform(Requests\CreatePengaduanRequest $req){
		Pengaduan::create(Request::all());
		return redirect('pemohon/daftarizin/1');
	}
	public function pengaduan1($id){ // update biar diperpanjang
		$form = Pengaduan::where();
		return redirect('pemohon/daftarizin/1');
	}
	public function pengaduan2($id){
		$form = Pengaduan::all();
		return redirect('pemohon/daftarizin/2');
	}
	public function pengaduan3($id){
		$form = Pengaduan::all();
		return redirect('pemohon/daftarizin/3');
	}
	public function pengaduan4($id){
		$form = Pengaduan::all();
		return redirect('pemohon/daftarizin/4');
	}
}
