<?php namespace IzinAir\Http\Controllers;

use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;
use IzinAir\Pegawai;
use Auth;

class HomeController extends Controller {

	//
	public function getformlogin(){
		return view('login');
	}

    public function login(){
        $req = Request::all();
        if($req!=null){
            session(['nik' => $req->input('nik'), 'role' => 'pemohon']);
            return view('pemohon.index');
        }
        else
            return view('login');
    }

    public function home(){
        $req = Request::all();
        if($req!=null){
            session(['nik' => $req['nik'], 'role' => 'pemohon']);
            return view('pemohon.index');
        }
        else
            return view('login');
    }

    public function getformsuper_login(){
        return view('super_login');
    }

    public function check() {
       return view('check');
    }

    public function super_login(){
        $req = Request::all();
        $v = Pegawai::where('username','=', $req['username'])->get()->toArray();
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
