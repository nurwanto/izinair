<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class Datateknis extends Model {

	//
	public $timestamps = false;
	protected $fillable = [
		'id_izin',
        'jenis_izin',
        'data',
        'tanggal_data'
	];
}
