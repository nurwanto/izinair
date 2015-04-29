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
		Form1::create(Request::all());
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
