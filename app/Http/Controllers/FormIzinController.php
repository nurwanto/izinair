<?php namespace IzinAir\Http\Controllers;

use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FormIzinController extends Controller {

	//
	public function getFormNew($id){
		if($id==1)
			return view('form.new.form');
		else if($id==2)
			return view('form.new.form');
		else if($id==3)
			return view('form.new.form');
		else if($id==4)
			return view('form.new.form');
	}

}
