<?php namespace IzinAir\Http\Controllers;

use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PerpanjanganController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	public function index(){
		return view('pemohon.form.perpanjangan');
	}
	public function getform($jenis, $id){
		if($jenis==1){
			$form = Form1::all();
			return view('pemohon.form.perpanjangan', compact('form'));
		}
		else if($jenis==2){
			$form = Form2::all();
			return view('pemohon.form.perpanjangan', compact('form'));
		}
		else if($jenis==3){
			$form = Form3::all();
			return view('pemohon.form.perpanjangan', compact('form'));
		}
		else if($jenis==4){
			$form = Form4::all();
			return view('pemohon.form.perpanjangan', compact('form'));
		}
	}
}
