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
        $req = Request::all();
        session(['NIK' => $req['NIK'], 'role' => 'pemohon']);
        return view('pemohon.index');
    }

    public function getformsuper_login(){
        return view('super_login');
    }

    public function super_login(){
        $req = Request::all();
        $v = Pegawai::where('username','=', $req['username']);
        $value = array_first($v, function($key, $value){
            return $value->username == $req['username'];
        });
        if($value->password == $req['password']){
            session(['username' => $req->get['username'], 'role' => $b->role]);
            if($value->role == "admin") {
               return view('admin.index');
            }
            else{
                return view('pegawai.index');
            }
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
        Session::put('username', '');
        Session::put('role','');
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
