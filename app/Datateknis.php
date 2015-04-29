<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class Datateknis extends Model {

	//
	protected $fillable = [
		'id_izin',
        'jenis_izin',
        'data'
	];
}
