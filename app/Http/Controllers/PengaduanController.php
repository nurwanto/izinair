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
	public function pengaduan($jenis,$id){ // update biar diperpanjang
        Pengaduan::create(['id_izin' => $id, 'jenis_izin' => $jenis, 'tanggal_ajuan' => Carbon::now()]);
        return redirect('pemohon/daftarizin/1');
	}
}
