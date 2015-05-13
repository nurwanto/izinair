<?php namespace IzinAir\Http\Controllers;

use IzinAir\Datateknis;
use IzinAir\Notifikasi;
use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;
use Carbon\Carbon;

class DatateknisController extends Controller {
	public function getform($jenis, $id){
		return view('pegawai.datateknis', compact('jenis','id'));
	}
	public function postform(Requests\CreateDataTeknisRequest $req){
		$input = new Datateknis();
		$input->tanggal_data = Carbon::now();
		$input->id_izin = $req->id_izin;
		$input->jenis_izin = $req->jenis_izin;
		$input->data = $req->data;
		$input->save();
		if($req->status == "diterima"){
			$status = "diterima";
			$input = null;
			$input = new Notifikasi();
			$input->tanggal_notifikasi = Carbon::now();
			$input->id_izin = $req->id_izin;
			$input->jenis_izin = $req->jenis_izin;
			$input->isi = "sudah diterima. Tolong bayarkan biaya sebesar XXX.";
			$input->save();
		}
		switch ($req->jenis_izin) {
			case 1:{
				$izin = Form1::find($req->id_izin)->update(['status' => $req->status]);
				break;
			}
			case 2:{
				$izin = Form2::find($req->id_izin)->update(['status' => $req->status]);
				break;
			}
			case 3:{
				$izin = Form3::find($req->id_izin)->update(['status' => $req->status]);
				break;
			}
			case 4:{
				$izin = Form4::find($req->id_izin)->update(['status' => $req->status]);
				break;
			}
			default:{
				break;
			}
		}
		return redirect('izinair/pegawai/daftarizin');
	}
}
