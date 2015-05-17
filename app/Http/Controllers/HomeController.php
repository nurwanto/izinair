<?php namespace IzinAir\Http\Controllers;

use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;
use IzinAir\Pegawai;

class HomeController extends Controller {

	//
	public function getformlogin(){
		return view('login');
	}

    public function login(){
        //loginke punya willy
    }

    public function getformsuper_login(){
        return view('super_login');
    }

    public function super_login(){
        $req = Request::all();
        $this->validate($req, ['username'=>'required','password'=>'required']);
        $value = Pegawai::find($req->get('username'));
        if($value->password == $req->get('password')){
            if($value->role == "admin")
                return view('admin.index', compact('value'));
            else
                return view('pegawai.index', compact('value'));
        }
        else{
            return redirect('izinair/super_login');
        }
    }

    public function logout(){
        //logout ke willy
        return redirect('izinair');
    }

    public function super_logout(){
        return redirect('izinair/super_login');
    }
    public function pemohon(){
        return view('pemohon.index');
    }
    public function pegawai(){
        return view('pegawai.index');
    }
    public function admin(){
        return view('admin.index');
    }
}
