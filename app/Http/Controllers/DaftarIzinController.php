<?php namespace IzinAir\Http\Controllers;

use IzinAir\Form1;
use IzinAir\Form2;
use IzinAir\Form3;
use IzinAir\Form4;
use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class DaftarIzinController extends Controller {
	public function show($jenis, $id){
		// $path = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
		if($jenis == 1){
			$izin = Form1::find($id);
			return view('pegawai.detail.1', compact('izin'));
		}
		else if($jenis == 2){
			$izin = Form2::find($id);
			return view('pemohon.detail.2', compact('izin'));
		}
		else if($jenis == 3){
			$izin = Form3::find($id);
			return view('pemohon.detail.3', compact('izin'));
		}
		else if($jenis == 4){
			$izin = Form4::find($id);
			return view('pemohon.detail.4', compact('izin'));
		}
	}

	public function get($jenis, $filename){
		$file = Storage::disk('local')->get($filename);
		return (new Response($file, 200))
		              ->header('Content-Type', 'jpg');
	}
	public function validasi($value, $jenis, $id){
		if($value == 0){
			$value = 'tidak valid';
		}
		else{
			$value = 'valid';
		}
		switch ($jenis) {
			case 1:{
				Form1::find($id)->update(['status' => $value]);
				break;
			}
			case 2:{
				Form2::find($id)->update(['status' => $value]);
				break;
			}
			case 3:{
				Form3::find($id)->update(['status' => $value]);
				break;
			}
			case 4:{
				Form4::find($id)->update(['status' => $value]);
				break;
			}
			default:
				break;
		}
		return redirect('izinair/pegawai/daftarizin');
	}
	public function validasiDataTeknis($value, $jenis, $id, $datateknis){
		if($value == 0){
			$value = 'tidak valid';
		}
		else{
			$value = 'valid';
		}
		switch ($jenis) {
			case 1:{
				Form1::find($id)->update(['status' => $value]);
				break;
			}
			case 2:{
				Form2::find($id)->update(['status' => $value]);
				break;
			}
			case 3:{
				Form3::find($id)->update(['status' => $value]);
				break;
			}
			case 4:{
				Form4::find($id)->update(['status' => $value]);
				break;
			}
			default:
				break;
		}
		if($datateknis == 0){
			return redirect('izinair/pegawai/daftarizin');
		}
		else{
			return redirect('izinair/pegawai/datateknis/'.$jenis.'/'.$id);
		}
	}
	public function indexpemohon(){
		return redirect('izinair/pemohon/daftarizin/1');
	}
	public function indexpegawai(){
		return redirect('izinair/pegawai/daftarizin/1');
	}
	public function getallizinpemohon($id){
		if($id==1){
			$form = Form1::all();
			return view('pemohon.daftarizin.daftarizin1', compact('form'));
		}
		else if($id==2){
			$form = Form2::all();
			return view('pemohon.daftarizin.daftarizin2', compact('form'));
		}
		else if($id==3){
			$form = Form3::all();
			return view('pemohon.daftarizin.daftarizin3', compact('form'));
		}
		else if($id==4){
			$form = Form4::all();
			return view('pemohon.daftarizin.daftarizin4', compact('form'));
		}
	}
	public function getallizinpegawai($id){
		if($id==1){
			$form = Form1::all();
			return view('pegawai.daftarizin.daftarizin1', compact('form'));
		}
		else if($id==2){
			$form = Form2::all();
			return view('pegawai.daftarizin.daftarizin2', compact('form'));
		}
		else if($id==3){
			$form = Form3::all();
			return view('pegawai.daftarizin.daftarizin3', compact('form'));
		}
		else if($id==4){
			$form = Form4::all();
			return view('pegawai.daftarizin.daftarizin4', compact('form'));
		}	
	}
	public function postFormNew1(Requests\CreateForm1Request $req){
		$input = new Form1();
		$input->NIK = '1234567890';
		$input->telp = $req['telp'];
		$input->email = $req['email'];
		$input->alamat = $req['alamat'];
		$input->luas = $req['luas'];
		$input->usaha = $req['usaha'];
		$input['tanggal_diajukan'] = Carbon::now();
		$file = $req->file('teknis');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->teknis = $file->getFilename().'.'.$extension;
		$file = $req->file('bor');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->bor = $file->getFilename().'.'.$extension;
		$file = $req->file('keberatan');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->keberatan = $file->getFilename().'.'.$extension;
		$file = $req->file('konservasi');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->konservasi = $file->getFilename().'.'.$extension;
		$input->save();

		return redirect('izinair/pemohon/daftarizin/1');
	}
	public function postFormNew2(Requests\CreateForm2Request $req){
		$input = new Form2();
		$input->NIK = '1234567890';
		$input->telp = $req['telp'];
		$input->email = $req['email'];
		$input->no_imb = $req['no_imb'];
		$input->no_pbb = $req['no_pbb'];
		$input['tanggal_diajukan'] = Carbon::now();
		$file = $req->file('akta');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->akta = $file->getFilename().'.'.$extension;
		$file = $req->file('surat_tanah');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->surat_tanah = $file->getFilename().'.'.$extension;
		$file = $req->file('domisili');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->domisili = $file->getFilename().'.'.$extension;
		$file = $req->file('keberatan');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->keberatan = $file->getFilename().'.'.$extension;
		$file = $req->file('pelestarian');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->pelestarian = $file->getFilename().'.'.$extension;
		$file = $req->file('teknis');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->teknis = $file->getFilename().'.'.$extension;
		$file = $req->file('dbmp');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->dbmp = $file->getFilename().'.'.$extension;
		$file = $req->file('lurah');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->lurah = $file->getFilename().'.'.$extension;
		$input->save();

		return redirect('izinair/pemohon/daftarizin/2');
	}
	public function postFormNew3(Requests\CreateForm3Request $req){
		$input = new Form3();
		$input->NIK = '1234567890';
		$input->telp = $req['telp'];
		$input->email = $req['email'];
		$input->no_imb = $req['no_imb'];
		$input->no_pbb = $req['no_pbb'];
		$input['tanggal_diajukan'] = Carbon::now();
		$file = $req->file('akta');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->akta = $file->getFilename().'.'.$extension;
		$file = $req->file('surat_tanah');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->surat_tanah = $file->getFilename().'.'.$extension;
		$file = $req->file('domisili');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->domisili = $file->getFilename().'.'.$extension;
		$file = $req->file('keberatan');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->keberatan = $file->getFilename().'.'.$extension;
		$file = $req->file('pelestarian');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->pelestarian = $file->getFilename().'.'.$extension;
		$file = $req->file('teknis');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->teknis = $file->getFilename().'.'.$extension;
		$file = $req->file('dbmp');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->dbmp = $file->getFilename().'.'.$extension;
		$file = $req->file('bplh');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->bplh = $file->getFilename().'.'.$extension;
		$input->save();

		return redirect('izinair/pemohon/daftarizin/3');
	}
	public function postFormNew4(Requests\CreateForm4Request $req){
		$input = new Form4();
		$input->NIK = '1234567890';
		$input->telp = $req['telp'];
		$input->email = $req['email'];
		$input->no_imb = $req['no_imb'];
		$input->no_pbb = $req['no_pbb'];
		$input['tanggal_diajukan'] = Carbon::now();
		$file = $req->file('akta');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->akta = $file->getFilename().'.'.$extension;
		$file = $req->file('surat_tanah');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->surat_tanah = $file->getFilename().'.'.$extension;
		$file = $req->file('domisili');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->domisili = $file->getFilename().'.'.$extension;
		$file = $req->file('keberatan');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->keberatan = $file->getFilename().'.'.$extension;
		$file = $req->file('pelestarian');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->pelestarian = $file->getFilename().'.'.$extension;
		$file = $req->file('profil');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->profil = $file->getFilename().'.'.$extension;
		$file = $req->file('berita');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->berita = $file->getFilename().'.'.$extension;
		$file = $req->file('dbmp');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->dbmp = $file->getFilename().'.'.$extension;
		$file = $req->file('lurah');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$input->lurah = $file->getFilename().'.'.$extension;
		$input->save();
		
		return redirect('izinair/pemohon/daftarizin/4');
	}
}
