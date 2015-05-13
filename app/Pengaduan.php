<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model {

	//
	public $timestamps = false;
	protected $fillable = [
		'id_izin',
        'jenis_izin',
        'isi',
        'tanggal_pengaduan'
	];
}
