<?php namespace IzinAir\Http\Controllers;

use IzinAir\Form1;
use IzinAir\Form2;
use IzinAir\Form3;
use IzinAir\Form4;
use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FormIzinController extends Controller {

	//
	public function getForm(){
		return view('pemohon.form.index_form');
	}
	public function getFormNew($id){
		if($id==1)
			return view('pemohon.form.new.form1');
		else if($id==2)
			return view('pemohon.form.new.form2');
		else if($id==3)
			return view('pemohon.form.new.form3');
		else if($id==4)
			return view('pemohon.form.new.form4');
	}

	public function postFormNew1(Requests\CreateForm1Request $req){
		$teknis = Request::file('teknis');
		$bor = Request::file('bor');
		$keberatan = Request::file('keberatan');
		$konservasi = Request::file('konservasi');
		$extension1 = $teknis->getClientOriginalExtension();
		$extension2 = $teknis->getClientOriginalExtension();
		$extension3 = $teknis->getClientOriginalExtension();
		$extension4 = $teknis->getClientOriginalExtension();
		Storage::disk('local')->put($teknis->getFilename().'.'.$extension1,  File::get($teknis));
		Storage::disk('local')->put($bor->getFilename().'.'.$extension2,  File::get($bor));
		Storage::disk('local')->put($keberatan->getFilename().'.'.$extension3,  File::get($keberatan));
		Storage::disk('local')->put($konservasi->getFilename().'.'.$extension4,  File::get($konservasi));
		$entry = new Form1();
		$entry->teknis = $teknis->getClientMimeType();
		$entry->original_filename = $file->getClientOriginalName();
		$entry->filename = $file->getFilename().'.'.$extension;
		$entry->save();
		return redirect('pemohon/daftarizin/1');
	}
	public function postFormNew2(Requests\CreateForm2Request $req){
		Form2::create(Request::all());
		return redirect('pemohon/daftarizin/2');
	}
	public function postFormNew3(Requests\CreateForm3Request $req){
		Form3::create(Request::all());
		return redirect('pemohon/daftarizin/3');
	}
	public function postFormNew4(Requests\CreateForm4Request $req){
		Form4::create(Request::all());
		return redirect('pemohon/daftarizin/4');
	}
}
