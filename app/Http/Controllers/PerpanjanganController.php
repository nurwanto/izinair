<?php namespace IzinAir\Http\Controllers;

use IzinAir\Form1;
use IzinAir\Form2;
use IzinAir\Form3;
use IzinAir\Form4;
use IzinAir\PermohonanPerpanjangan;
use IzinAir\Perpanjangan;
use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;
use Carbon\Carbon;

class PerpanjanganController extends Controller {
	public function perpanjang($jenis,$id){
        PermohonanPerpanjangan::create(['id_izin' => $id, 'jenis_izin' => $jenis, 'tanggal_ajuan' => Carbon::now()]);
        return redirect('izinair/pemohon/daftarizin');
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