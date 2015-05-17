<?php namespace IzinAir\Http\Controllers;

use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;
use IzinAir\Notifikasi;

class NotifikasiController extends Controller {
	public function get(){
        $notifikasi = Notifikasi::all();
		return view('pemohon.notifikasi', compact('notifikasi'));
	}
    public function update($jenis, $id){
        $notif = Notifikasi::where('jenis_izin', '=', $jenis);
        $notif = $notif->where('id_izin', '=', $id);
        foreach($notif as $n){
            $n->status = "read";
            $n->save();
        }
        return view('pemohon.notifikasi');
    }
}
