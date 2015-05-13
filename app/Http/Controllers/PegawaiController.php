<?php namespace IzinAir\Http\Controllers;

use IzinAir\Pegawai;
use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;

class PegawaiController extends Controller {
	public function index(){
		$profiles = Pegawai::all();
		return view('admin.manajemen', compact('profiles'));
	}
	public function admin($id){
		Pegawai::find($id)->update(['role' => 'admin']);
		return redirect('izinair/admin/manajemen');
	}
	public function hapus($id){
		Pegawai::find($id)->delete();
		return redirect('izinair/admin/manajemen');
	}
	public function ubah($id){
		$pegawai = Pegawai::find($id);
		return view('admin.ubah', compact($id));
	}
	public function gettambah(){
		return view('admin.tambah');
	}
	public function posttambah(Requests\CreatePegawaiRequest $req){
		Pegawai::create(Request::all());
		return redirect('izinair/admin/manajemen');
	}
	public function postubah($id){
		$req = Request::all();
		$pegawai = Pegawai::where('id', '=', $id);
		if($pegawai->password == $req->password_lama){
			$pegawai->password = $req->password_baru;
			$pegawai->save();
		}
		else{

		}
		return redirect('izinair/admin/manajemen');
	}
}
