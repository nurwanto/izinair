<?php namespace IzinAir\Http\Controllers;

use IzinAir\Form1;
use IzinAir\Form2;
use IzinAir\Form3;
use IzinAir\Form4;
use IzinAir\Perpanjangan;
use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PerpanjanganController extends Controller {

	public function getform(){
		$form1 = Form1::all();
		$form2 = Form2::all();
		$form3 = Form3::all();
		$form4 = Form4::all();
		return view('pemohon.form.perpanjangan',compact('form1'));
	}
	public function postform(){
		PermohonanPerpanjangan::create(Request::all());
		return redirect('pemohon/lihat/1');
	}
	public function perpanjang1($id){ // update biar diperpanjang
		PermohonanPerpanjangan::create(['id_izin' => $id, 'jenis_izin' => 'air bawah tanah']);
		return redirect('pemohon/lihat/1');
	}
	public function perpanjang2($id){
		PermohonanPerpanjangan::create(['id_izin' => $id, 'jenis_izin' => 'air bawah tanah']);
		return redirect('pemohon/lihat/2');
	}
	public function perpanjang3($id){
		PermohonanPerpanjangan::create(['id_izin' => $id, 'jenis_izin' => 'air bawah tanah']);
		return redirect('pemohon/lihat/3');
	}
	public function perpanjang4($id){
		PermohonanPerpanjangan::create(['id_izin' => $id, 'jenis_izin' => 'air bawah tanah']);
		return redirect('pemohon/lihat/4');
	}
}


	// /**
	//  * Show the form for creating a new resource.
	//  *
	//  * @return Response
	//  */
	// public function create()
	// {
	// 	//
	// }

	// /**
	//  * Store a newly created resource in storage.
	//  *
	//  * @return Response
	//  */
	// public function store()
	// {
	// 	//
	// }

	// /**
	//  * Display the specified resource.
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	// public function show($id)
	// {
	// 	//
	// }

	// *
	//  * Show the form for editing the specified resource.
	//  *
	//  * @param  int  $id
	//  * @return Response
	 
	// public function edit($id)
	// {
	// 	//
	// }

	// /**
	//  * Update the specified resource in storage.
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	// public function update($id)
	// {
	// 	//
	// }

	// /**
	//  * Remove the specified resource from storage.
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	// public function destroy($id)
	// {
	// 	//
	// }