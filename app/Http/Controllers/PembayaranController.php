<?php namespace IzinAir\Http\Controllers;

use IzinAir\Pembayaran;
use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PembayaranController extends Controller {
	public function getform(){
		return view('pemohon.form.pembatalan');
	}
	public function postform(Requests\CreatePembayaranRequest $req){
		Pembayaran::create(Request::all());
		return redirect('pemohon/daftarizin/1');
	}
	public function pembayaran($id){ // update biar diperpanjang
		PermohonanPembatalan::create(['id_izin' => $id,'jenis_izin' => 'air bawah tanah']);
		return redirect('pemohon/daftarizin/1');
	}
	public function pembatalan2($id){
		$form = Pembatalan::all();
		return redirect('pemohon/daftarizin/2');
	}
	public function pembatalan3($id){
		$form = Pembatalan::all();
		return redirect('pemohon/daftarizin/3');
	}
	public function pembatalan4($id){
		$form = Pembatalan::all();
		return redirect('pemohon/daftarizin/4');
	}
}
