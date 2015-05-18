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
        if(Request::has('nik')){
            // session(['nik' => Request::input('nik'), 'role' => 'pemohon']);
            return redirect('/izinair/login');
        }
        else
            return view('login');
    }

    public function home(){
        if(Request::has('nik')){
            session(['nik' => Request::input('nik'), 'role' => 'pemohon']);
            return redirect('pemohon.index');
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
        //logout ke willy'
        session(['nik'=>'', 'role'=>"guest"]);
        return redirect('izinair');
    }

    public function super_logout(){
        session(['username'=>'', 'role'=>""]);
        return redirect('izinair/super_login');
    }
    public function pemohon(){
        session(['nik' => "1234567890", 'role' => 'pemohon']);
        return view('pemohon.index');
    }
    public function pegawai(){
        session(['username' => "junita", 'role' => 'pegawai']);
        return view('pegawai.index');
    }
    public function admin(){
        session(['username' => "junita", 'role' => 'admin']);
        return view('admin.index');
    }
}
