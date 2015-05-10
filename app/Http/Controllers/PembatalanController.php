<?php namespace IzinAir\Http\Controllers;

use IzinAir\Form1;
use IzinAir\Form2;
use IzinAir\Form3;
use IzinAir\Form4;
use IzinAir\Pembatalan;
use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;

class PembatalanController extends Controller {

	public function getform(){
		$form1 = Form1::all();
		$form2 = Form2::all();
		$form3 = Form3::all();
		$form4 = Form4::all();
		return view('pemohon.form.pembatalan', compact('form1','form2','form3','form4'));
	}
	public function postform(Requests\CreatePermohonanPembatalanRequest $req){
		PermohonanPembatalan::create(Request::all());
		return redirect('pemohon/daftarizin/1');
	}
	public function pembatalan1($id){ // update biar diperpanjang
		PermohonanPembatalan::create(['id_izin' => $id,'jenis_izin' => 'air bawah tanah']);
		$form = PermohonanPembatalan::all();
		return redirect('pemohon/daftarizin/1');
	}
	public function pembatalan2($id){
		PermohonanPembatalan::create(['id_izin' => $id,'jenis_izin' => 'air permukaan']);
		$form = PermohonanPembatalan::all();
		return redirect('pemohon/daftarizin/2');
	}
	public function pembatalan3($id){
		PermohonanPembatalan::create(['id_izin' => $id,'jenis_izin' => 'air alur']);
		$form = PermohonanPembatalan::all();
		return redirect('pemohon/daftarizin/3');
	}
	public function pembatalan4($id){
		PermohonanPembatalan::create(['id_izin' => $id,'jenis_izin' => 'air bawah tanah']);
		$form = PermohonanPembatalan::all();
		return redirect('pemohon/daftarizin/4');
	}

}
