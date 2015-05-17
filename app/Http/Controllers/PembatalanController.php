<?php namespace IzinAir\Http\Controllers;

use IzinAir\Form1;
use IzinAir\Form2;
use IzinAir\Form3;
use IzinAir\Form4;
use IzinAir\Pembatalan;
use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;
use Carbon\Carbon;

class PembatalanController extends Controller {
	public function pembatalan($jenis, $id){ // update biar diperpanjang
        PermohonanPembatalan::create(['id_izin' => $id, 'jenis_izin' => $jenis, 'tanggal_ajuan' => Carbon::now()]);
        return redirect('pemohon/daftarizin/1');
    }
}
