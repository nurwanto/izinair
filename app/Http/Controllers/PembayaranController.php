<?php namespace IzinAir\Http\Controllers;

use IzinAir\Pembayaran;
use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;

class PembayaranController extends Controller {
	public function getform($jenis, $izin){
		return view('pemohon.form.pembayaran', compact('jenis', 'izin'));
	}
	public function view($jenis, $id){
		$pembayaran = Pembayaran::where('id_izin', '=', $id)->where('jenis_izin', '=', $jenis);
		foreach ($pembayaran as $p) {
			# code..
		}
		return view('pegawai.pembayaran', compact('pembayaran'));
	}	
}
