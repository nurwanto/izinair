<?php namespace IzinAir\Http\Controllers;

use Carbon\Carbon;
use IzinAir\Pembayaran;
use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;

class PembayaranController extends Controller {
	public function getform($jenis, $izin){
		return view('pemohon.pembayaran', compact('jenis', 'izin'));
	}
    public function postform(){
        $req = Request::all();
        $this->validate($req, ['bukti'=>'required']);
        $input = new Pembayaran();
        $input->id_izin = $req->id_izin;
        $input->jenis_izin = $req->jenis_izin;
        $input->tanggal_pembayaran = Carbon::now();
        $file = $req->file('bukti');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
        $input->bukti = $file->getFilename().'.'.$extension;
        $input->save();
    }
	public function view($jenis, $id){
		$pembayaran = Pembayaran::where('id_izin', '=', $id)->where('jenis_izin', '=', $jenis);
		foreach ($pembayaran as $p) {

		}
		return view('pegawai.pembayaran', compact('pembayaran'));
	}
}
