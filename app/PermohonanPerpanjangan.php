<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class PermohonanPerpanjangan extends Model {

	//
	public $timestamps = false;
	protected $fillable = [
			'id_izin',
            'jenis_ajuan',
            'tanggal_ajuan'
	];
}
