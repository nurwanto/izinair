<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class PermohonanPembatalan extends Model {

	//
	public $timestamps = false;
	protected $fillable = [
		'id_izin',
        'jenis_izin',
        'tanggal_ajuan'
	];
}
