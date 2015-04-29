<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model {

	//
	protected $fillable = [
		'id_izin',
        'jenis_izin',
        'isi'
	];

}
