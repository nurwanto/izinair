<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model {

	//
	protected $fillable = [
		'id_izin',
        'jenis_izin',
        'isi'
	];
}
